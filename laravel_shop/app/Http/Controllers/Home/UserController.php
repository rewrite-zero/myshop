<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    public function index()
    {
        //获取用户id
        $user_id = session('id');
        //获取用户的所有订单
        $orders =  DB::table('orders')->where('user_id','=',$user_id)->get();
        //获取订单详情
        $ogoods = DB::table('order_goods')->get();
        $good = [];
        foreach ($ogoods as $k=>$v) {
            $good[$k]['order_id'] = $v->order_id;
            $good[$k]['num'] = $v->num;
            $good[$k]['goods'] = DB::table('goods')->select('name','price','pic')->where('id','=',$v->goods_id)->first();
            $good[$k]['total'] = $v->num*$good[$k]['goods']->price;
        }
        return view('Home.User.userorder',['orders'=>$orders,'good'=>$good]);
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
