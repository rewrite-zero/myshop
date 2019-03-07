<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    public function index()
    {
        //获取所有订单信息
        $data = DB::table('orders')->get();
        return view('Admin.Order.orderlist',['data'=>$data]);
    }

    //订单状态修改
    public function status($id)
    {
        //查看id的订单信息
        $info = DB::table('orders')->where('id','=',$id)->first();
        if ($info->status == 1) {
            if(DB::table('orders')->where('id','=',$id)->update(['status'=>'2'])) {
                return 1;
            } 
        }
    }

    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
       // $info = DB::table('orders')->where('id','=',$id)->first();
       //  if ($info->status == 0) {
       //      if(DB::table('orders')->where('id','=',$id)->update(['status'=>'1'])) {
       //          return 1;
       //      } 
       //  } elseif ($info->status == 2) {
       //      if(DB::table('orders')->where('id','=',$id)->update(['status'=>'3'])) {
       //          return 3;
       //      }
       //  } elseif ($info->status == 3) {
       //      if(DB::table('orders')->where('id','=',$id)->update(['status'=>'4'])) {
       //          return 4;
       //      }
       //  }
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
