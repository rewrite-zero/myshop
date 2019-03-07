<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //获取session
         $goods = session('cart');
         $data = [];
         $district = [];
         $address = [];
         $total='';
         if (empty($goods)) {
            return redirect('homeindex');
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
        $district = DB::table('district')->where('level','=','1')->get();
        //收货地址
       $address = DB::table('address')->where('user_id','=',session('id'))->orderBy('status','desc')->get();
        return view('Home.Order.order',['data'=>$data,'total'=>$total,'district'=>$district,'address'=>$address]);
       }
    }

    //城市级联
    public function city(Request $request)
    {
       //上级城市id
       $upid = $request->input('upid');
       //本级城市信息
       $district = DB::table('district')->where('upid','=',$upid)->get();
       return $district;  
    }

    //添加收货地址
    public function addressadd(Request $request)
    {
        // dd($request->all());
        $data = $request->except('_token');
        $data['user_id'] = session('id');
        //处理地址
        if ($data['prov']) {
            $one = DB::table('district')->where('id','=',$data['prov'])->first();
            $data['prov'] = $one->name;
        }
        if ($data['city']) {
            $two = DB::table('district')->where('id','=',$data['city'])->first();
            $data['city'] = $two->name;
        }
        if (isset($data['town'])) {
            $three = DB::table('district')->where('id','=',$data['town'])->first();
            $data['town'] = $three->name;
        }
        if (isset($data['village'])) {
            $four = DB::table('district')->where('id','=',$data['village'])->first();
            $data['village'] = $four->name;
        }
        //添加
        DB::table('address')->insert($data);
        return redirect('/homeorder/create');
    }

    //删除收货地址
    public function addressdel($id)
    {
        DB::table('address')->where('id','=',$id)->delete();
        return redirect('/homeorder/create');
    }

    public function store(Request $request)
    {
        // dd(session('cart'));
        $oders = [];//存储订单表字段
        $goods = session('cart');
        $data = [];//存储订单详情表字段
        $orders['total'] = '';//订单总价格
        //订单号
        $orders['order_num'] = time().uniqid();
        //添加时间
        $orders['addtime'] = date('Y-m-d H:i:s',time());
        //订单状态
        $orders['status'] = 0;
        //用户id
        $orders['user_id'] = session('id');
        //收货地址id
        $orders['address_id'] =  $request->input('addressid');
         if (empty($goods)) {
            return view('Home.Order.empty');exit;
         } else {
        foreach ($goods as $k=>$v) {
            //获取商品数据
            $ss = DB::table('goods')->where('id','=',$v['id'])->first();
            $row['name'] = $ss->name;//商品名字
            $row['pic'] = $ss->pic;//商品图片
            $row['num'] = $v['num'];
            $row['price'] = $ss->price;
            $row['tot'] = $ss->price*$v['num'];
            $row['id'] = $v['id'];
            $orders['total'] += $row['tot'];
        }
    }
       $data['order_id'] = DB::table('orders')->insertGetId($orders);
       foreach ($goods as $v) {
            $data['goods_id'] = $v['id'];
            $data['num'] = $v['num'];
            DB::table('order_goods')->insert($data);
       }
       $request->session()->forget('cart');
       return view('Home.Order.success',['orderid'=>$orders['order_num']]);
    }

    public function show($id)
    {
        //
    }

    //修改订单状态
    public function edit($id)
    {
        //查看id的订单信息
        $info = DB::table('orders')->where('id','=',$id)->first();
        if ($info->status == 0) {
            if(DB::table('orders')->where('id','=',$id)->update(['status'=>'1'])) {
                return 1;
            } 
        } elseif ($info->status == 2) {
            if(DB::table('orders')->where('id','=',$id)->update(['status'=>'3'])) {
                return 3;
            }
        } elseif ($info->status == 3) {
            if(DB::table('orders')->where('id','=',$id)->update(['status'=>'4'])) {
                return 4;
            }
        }
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
