<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    //无限分类获取
    public static function getcatesbypid($pid)
    {
        $s = DB::table('cates')->where('pid','=',$pid)->get();
        $data = [];
        foreach ($s as $key=>$value) {
            $value->sub = self::getcatesbypid($value->id);
            $data[] = $value;
        }
        return $data;
    }

    //类别商品获取
    public static function getcatesgoods($pid)
     {
        $data = self::getcatesbypid($pid);
        $arr = '';
        foreach ($data as $k=>$v) {
            foreach ($v->sub as $vv) {
                $arr .=$vv->id.','; 
            }
        }
        $arr = rtrim($arr,',');
        $arr = explode(',', $arr);
        foreach ($arr as $k=>$v) {
            $res[$k] = DB::table('goods')->where('cate_id','=',[$v])->first();
            if ($res[$k] == '') {
                unset($res[$k]);
            }
        }
       return $res;
     }

    //商城首页
    public function index()
    {
        //获取分类信息
         $cate1 = self::getcatesbypid(0);
        //获取热门商品
         $hot = DB::table('goods')->inRandomOrder()->take(4) ->get();
        //获取鞋包商品
         $shoe = array_slice(self::getcatesgoods(30),0,6);
        //获取钟表珠宝
         $clock = array_slice(self::getcatesgoods(30),6,6);
         //个人美妆
         $beauty = self::getcatesgoods(29);
         //猜你喜欢
         $like = DB::table('goods')->inRandomOrder()->take(5)->get();
        // $shoebag = DB::table('goods')->where('status','=',1)->get();
        // //获取公告信息
        $article = DB::table('articles')->where('status','=',1)->orderBy('time','desc')->get();
        return view('Home.Index.index',['cate1'=>$cate1,'article'=>$article,'hot'=>$hot,'shoe'=>$shoe,'clock'=>$clock,'beauty'=>$beauty,'like'=>$like]);
    }
 
    // //获取二级分类信息
    // public function index2(Request $request)
    // {
    //     //判断当前请求是否
    //     //获取二级分类的父id
    //     $pid = $request->input('id');
    //     $cate2 = DB::table('cates')->where('pid','=',$pid)->get();
    //     return $cate2;
    // }

    //退出登录
    public function outlogin(Request $request)
    {
        //销毁session
        $request->session()->pull('name');
        $request->session()->forget('cart');
        return redirect('/homelogin/create');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
