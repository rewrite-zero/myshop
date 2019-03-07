<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class AdminLoginController extends Controller
{

    public function index(Request $request)
    {
        //销毁session
        $request->session()->pull("adminname");
        $request->session()->pull("status");
        $request->session()->pull("nodelist");
        return redirect("/adminlogin/create");
    }


    public function create(Request $request)
    {
        //销毁session
        // $request->session()->pull("username");
        //加载登录模板
        return view("Admin.Login.login");
    }

    public function store(Request $request)
    {
       //获取登录页的用户名和密码
       $adminname = $request->input('adminname');
       $password = $request->input('password');
       //查询数据库是否有匹配值
       $data = DB::table('admin_user')->where('adminname','=',$adminname)->first();
       if (empty($data)) {
        return redirect('/adminlogin/create')->with('err','用户名或密码错误');exit;
       }
       //检测密码
       if (Hash::check($password,$data->password)) {
          //存储登录用户名session
          session(['adminname'=>$adminname]);
          //存储登录用户的等级
          session(['status'=>$data->status]);
          //获取当前登录用户的权限
           $list = DB::select("select n.name,n.mname,n.aname from user_role as ur,role_node as rn,node as n where ur.rid=rn.rid and rn.nid=n.id and uid = {$data->id}");
          //权限初始化
           $nodelist['AdminIndexController'][] = 'index';
           //遍历
           foreach ($list as $v) {
              //把$list权限写入$nodelist里
            $nodelist[$v->mname][] = $v->aname;
            //如果权限列表里有create方法 添加store
            if ($v->aname == 'create') {
              $nodelist[$v->mname][] = 'store';
            }
            //如果权限列表里有edit方法  添加update
            if ($v->aname == 'edit') {
              $nodelist[$v->mname][] = 'update';
            }
           }
          //把初始化的权限信息放置在session里
           session(['nodelist'=>$nodelist]);
          return redirect('/adminindex');
       } else {
          return redirect('/adminlogin/create')->with('err','用户名或密码错误');
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
