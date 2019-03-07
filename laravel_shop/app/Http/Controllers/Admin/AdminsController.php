<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hash;
use App\Http\Controllers\Controller;
use DB;
class AdminsController extends Controller
{
    //管理员列表
    public function index(Request $request)
    {
        //输入名字搜索
        $adminname = $request->input('adminname');
        $data = DB::table('admin_user')->where('adminname','like',"%".$adminname."%")->orderBy('id','asc')->paginate(4);
        return view('Admin.Admin.adminlist',['data'=>$data,'adminname'=>$adminname]);
    }

    public function create()
    {
        return view('Admin.Admin.adminadd');
    }

    //添加管理员
    public function store(Request $request)
    {
       //获取前台信息
       $data = $request->only(['adminname','password','email','status','phone']);
       //密码加密
       $data['password'] = Hash::make($data['password']);
       //执行添加
      if (DB::table('admin_user')->insert($data)) {
        return '1';
      } else {
        return '0';
      }
    }

    public function show($id)
    {
        //
    }

    //修改
    public function edit($id)
    {
        $data = DB::table('admin_user')->where('id','=',$id)->first();
        return view('Admin/Admin/adminedit',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        //获取修改信息
        $adminname = $request->input('adminname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $status = $request->input('status');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        //判断密码是否为空
        if ($password == '' && $repassword == '') {
            if (DB::table('admin_user')->where('id','=',$id)->update(['adminname'=>$adminname,'phone'=>$phone,'email'=>$email,'status'=>$status])) {
                return '1';
            }
        //判断密码是否输入一致
        } else if ($password !== '' && $password !== $repassword) {
            return '2';
        //密码加密修改
        } else {
            $password = Hash::make($password);
            if (DB::table('admin_user')->where('id','=',$id)->update(['adminname'=>$adminname,'password'=>$password,'phone'=>$phone,'email'=>$email,'status'=>$status])) {
                return '1';
            }
        }
    }

    public function destroy($id)
    {
        // DB::table('admin_user')->where('id','=',$id)->delete();
        // return redirect('/admins')->with('success','删除成功');
    }

    //ajax删除
    public function delete($id)
    {
        if (DB::table('admin_user')->where('id','=',$id)->delete()) {
            return 1;
        } else {
            return 2;
        }
    }

    // 批量删除管理员
    public function moredel()
    {
        //获取要删除的id数组
        $arr = $_GET['arr'];
        //遍历删除
        foreach ($arr as $v) {
            DB::table('admin_user')->where('id','=',$v)->delete();
        }
        return 1;
    }

    //角色分配
    public function role($id)
    {
        //获取管理员信息
        $admin = DB::table('admin_user')->where('id','=',$id)->first();
        //查询所有角色信息
        $role = DB::table('role')->get();
        //获取当前管理员所具有的角色信息
        $roleid = DB::table('user_role')->select('rid')->where('uid','=',$id)->get();
        //判断管理员是否有分配角色
        if (count($roleid)) {
            //遍历
            foreach ($roleid as $v) {
                $rids[] = $v->rid;
            }
            return view('Admin.Admin.adminrole',['admin'=>$admin,'role'=>$role,'rids'=>$rids]);
        } else {
            return view('Admin.Admin.adminrole',['admin'=>$admin,'role'=>$role,'rids'=>array()]);
        }
    }

    //保存角色
    public function saverole(Request $request)
    {
        //获取管理员id
        $uid = $request->input('uid');
        //获取新角色id
        $role = $request->input('rids');
        //清除管理员原有角色
        DB::table('user_role')->where('uid','=',$uid)->delete();
        //遍历添加
        if (count($role)) {
            foreach ($role as $v) {
                $data['uid'] = $uid;
                $data['rid'] = $v;
                DB::table('user_role')->insert($data);
            }
        }
        return '1';
    }
}
