<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class LoginController extends Controller
{
    public function index()
    {
        //
    }

    //登录页
    public function create()
    {
        //
        return view('Home.Login.login');
    }

    //处理登录
    public function store(Request $request)
    {
        //获取登录信息
        $data = $request->except('_token');
        //验证
        $info = DB::table('users')->where('username','=',$data['name'])->orWhere('phone','=',$data['name'])->orWhere('email','=',$data['name'])->where('status','=',2)->first();
        if (Hash::check($data['password'],$info->password)) {
            session(['name'=>$data['name'],'id'=>$info->id]);
            return redirect('/homeindex');
        } else {
            return redirect('/homelogin/create')->with('err','账户不存在或密码错误');
        }
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
