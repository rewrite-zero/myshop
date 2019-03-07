<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ArticleController extends Controller
{
    public function index()
    {
        //获取所有公告
        $data = DB::table('articles')->get();
        return view('Admin.Article.articlelist',['data'=>$data]);
    }

    public function create()
    {
        //
        return view('Admin.Article.articleadd');
    }

    public function store(Request $request)
    {
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        if (count($data) == 2) {
            date_default_timezone_set('PRC');
            $data['time'] = date('Y-m-d H:i:s',time());
            $data['status'] = 0;
            if (DB::table('articles')->insert($data)) {
                return 1;
            } else {
                return 2;
            }
        }
        
    }

    public function show($id)
    {
        //获取对应id的公告信息
        $data = DB::table('articles')->where('id','=',$id)->first();
        return view('Admin.Article.articleshow',['data'=>$data]);
    }

    public function edit($id)
    {   
        //获取要修改的公告信息
        $data = DB::table('articles')->where('id','=',$id)->first();
        //加载公告修改模板
         return view('Admin.Article.articleedit',['data'=>$data]);

    }

    public function update(Request $request, $id)
    {
        //获取需要删除的数据
        $info = DB::table('articles')->where('id','=',$id)->first();
        $content = $info->content;
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$content,$array);
        //获取要修改的内容
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
         //删除原有的图片
        foreach ($array[1] as $v) {
            if (strstr($data['content'],$v) == false) {
              unlink(".".$v);  
            }
        }
        date_default_timezone_set('PRC');
        $data['time'] = date('Y-m-d H:i:s',time());
        if (DB::table('articles')->where('id','=',$id)->update($data)) { 
             return 1;
        } else {
            return 2;
        }
    }

    public function destroy($id)
    {
        //
    }

    //删除公告
    public function del($id)
    {
        //获取需要删除的数据
        $info = DB::table('articles')->where('id','=',$id)->first();
        $content = $info->content;
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$content,$array);
        if (DB::table('articles')->where('id','=',$id)->delete()) {
            foreach ($array[1] as $v) {
                unlink(".".$v);
            }
            return 1;
        } else {
            return 2;
        }
    }

    public function moredel(Request $request)
    {
        //获取要删除的id
        $arr = $_GET['arr'];
        //遍历删除公告
        foreach ($arr as $v) {
             //获取需要删除的数据
            $info = DB::table('articles')->where('id','=',$v)->first();
            $content = $info->content;
            preg_match_all('/<img.*?src="(.*?)".*?>/is',$content,$array);
            DB::table('articles')->where('id','=',$v)->delete();
            foreach ($array[1] as $v) {
                unlink(".".$v);
            }
        }
        return 1;
    }
    //修改公告状态
    public function changeStatus($id)
    {
        //获取要修改的id信息
        $data = DB::table('articles')->where('id','=',$id)->first();
        //判断
        if ($data->status == 1) {
            DB::table('articles')->where('id','=',$id)->update(['status'=>0]);
        } else {
             DB::table('articles')->where('id','=',$id)->update(['status'=>1]);
        }
        return 1;
    }
}
