<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CateController extends Controller
{

    public function index(Request $request)
    {
        //获取搜索内容
        $name = $request->input('name');
        //获取列表数据
        // $data = DB::select('SELECT *,concat(path,",",id)as paths FROM `cates` order by paths');
        $data = DB::table('cates')->select(DB::raw('*,concat(path,",",id)as paths'))->where('name','like',"%".$name."%")->orderBy('paths')->paginate(20);
        //添加分隔符
        foreach ($data as $key=>$value) {
            //获取path
            $path = $value->path;
            //转换数组
            $arr = explode(',',$path);
            //获取逗号个数
            $len = count($arr)-1;
            //加分隔符
            $data[$key]->name = str_repeat('★',$len).$value->name;
        }
        //加载分类模板
        return view('Admin.Cate.index',['data'=>$data,'name'=>$name]);
    }

    public static function getCate(){
        $data = DB::table('cates')->select(DB::raw('*,concat(path,",",id)as paths'))->orderBy('paths')->get();
        //添加分隔符
        foreach ($data as $key=>$value) {
            //获取path
            $path = $value->path;
            //转换数组
            $arr = explode(',',$path);
            //获取逗号个数
            $len = count($arr)-1;
            //加分隔符
            $data[$key]->name = str_repeat('★',$len).$value->name;
        }
        return $data;
    }
    public function create()
    {
        //获取所有类别
        $data = self::getCate();
        //加载添加模板
        return view('Admin.Cate.add',['data'=>$data]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        //获取传递过来的pid
        $data = $request->only(['name','pid']);
        $pid = $request->input('pid');
        if ($pid == 0) {
            //添加顶级分类
            //拼接path字段
            $data['path'] = '0';
        } else {
            //添加子类信息
            //获取父类信息
            $info = DB::table('cates')->where('id','=',$pid)->first();
            //拼接path
            $data['path'] = $info->path.','.$info->id;
        }
        //执行添加
        if (DB::table('cates')->insert($data)) {
          return '1';
        } else {
          return '0';
        }
    }

    public function show($id)
    {
        //
    }

    //修改分类信息
    public function edit($id)
    {
         $message = DB::table('cates')->select('name','id','pid')->where('id','=',$id)->first();
         $data = self::getCate();
         return view('Admin.Cate.edit',['data'=>$data,'message'=>$message]);
    }

    //修改分类
    public function update(Request $request, $id)
    {  
        //获取修改数据 
        $data = $request->only('name','pid');
        //修改path
        if ($data['pid'] == 0) {
            //添加顶级分类
            //拼接path字段
            $data['path'] = '0';
        } else {
           //添加子类信息
           //获取父类信息
           $info = DB::table('cates')->where('id','=',$data['pid'])->first();
           //拼接path
           $data['path'] = $info->path.','.$info->id;
        }
        if (DB::table('cates')->where('id','=',$id)->update($data)) {
             return '1';
        } else {
             return '0';
        }
    }

    public function destroy($id)
    {
        //
    }

    //ajax删除分类
    public function delete($id)
    {
        //查询是否有子分类
        $num = DB::table('cates')->where('pid','=',$id)->count();
        //子分类不让删除
        if ($num > 0) {
            return 0;
        } else {
            if (DB::table('cates')->where('id','=',$id)->delete()) {
                return 1;
            } else {
                return 2;
            }
        }
    }
}
