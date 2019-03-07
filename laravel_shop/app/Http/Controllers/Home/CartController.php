<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CartController extends Controller
{

    public function index()
    {
        //获取session
         $goods = session('cart');
         $data = [];
         $total='';
         if (empty($goods)) {
            return view('Home.Cart.empty');
         } else {
        //遍历
        foreach ($goods as $k=>$v) {
            //获取商品数据
            $ss = DB::table('goods')->where('id','=',$v['id'])->first();
            $row['name'] = $ss->name;//商品名字
            $row['pic'] = $ss->pic;//商品图片
            $row['num'] = $v['num'];
            $row['price'] = $ss->price;
            $row['tot'] = $ss->price*$v['num'];
            $row['id'] = $v['id'];
            $total += $row['tot'];
            $data[] = $row;
          }
        return view('Home.Cart.cart',['data'=>$data,'total'=>$total]);
        }
    }

    //购物车去除重复
    public function checkcart($id)
    {
        $goods = session('cart');
        if (empty($goods)) return false;
        //遍历
        foreach ($goods as $key=>$value) {
            if ($value['id'] == $id) {
                return true;
            }
        }   
    }

    public function create()
    {
        //
    }

    //加入购物车
    public function store(Request $request)
    {
        $data = $request->except('_token');
         //判断当前购物车里商品数据是否存在
        if (!$this->checkcart($data['id'])) {
        //将商品添加到session数组里
        $request->session()->push('cart',$data);
       } 
        return redirect('/homecart');
    }

    //修改数量
    //手动
    public function hand(Request $request)
    {
        $id = $request->input('id');
        $num = $request->input('num');
        $goods = session('cart');
        foreach ($goods as $k=>$v) {
            if ($v['id'] == $id) {
                $goods[$k]['num'] = $num;
            }
        }
        session(['cart'=>$goods]);
    }

    //减少
    public function reduce(Request $request)
    {
        $id = $request->input('id');
        $goods = session('cart');
        foreach ($goods as $k=>$v) {
            if ($v['id'] == $id) {
                if ($goods[$k]['num'] == 1) {
                    $goods[$k]['num'] = 1;
                } else {
                    $goods[$k]['num'] -= 1 ;
                }
            }
        }
        session(['cart'=>$goods]);
    }

    //增加
    public function add(Request $request)
    {
        $id = $request->input('id');
        $goods = session('cart');
        foreach ($goods as $k=>$v) {
            if ($v['id'] == $id) {
                $goods[$k]['num'] += 1 ;
            }
        }
        session(['cart'=>$goods]);
    }

    //删除购物车商品
    public function del(Request $request)
    {
        //获取要删除的商品id
        $id = $request->input('id');
        $goods = session('cart');
        //遍历
        foreach ($goods as $k=>$v) {
            if ($v['id'] == $id) {
               unset($goods[$k]);
            }
        }
        session(['cart'=>$goods]);
    }

    //清空购物车
    public function clear(Request $request)
    {
        $request->session()->forget('cart');
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
