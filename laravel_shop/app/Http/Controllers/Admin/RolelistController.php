<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class RolelistController extends Controller
{

    public function index()
    {
        //获取所有角色信息
        $data =DB::table('role')->orderBy('id','asc')->get();
        return view('Admin.Admin.adminrolelist',['data'=>$data]);
    }

    //权限分配
    public function auth($id)
    {   
        //获取角色信息
        $name = DB::table('role')->where('id','=',$id)->first();
        //获取所有权限节点
        $node = DB::table('node')->get();
        //获取当前角色具有的权限信息
        $data = DB::table('role_node')->where('rid','=',$id)->get();
        if (count($data)) {
            //遍历
            foreach ($data as $v) {
                $nids[] = $v->nid;
            }
            return view('Admin.Admin.adminrolegive',['name'=>$name,'node'=>$node,'nids'=>$nids]); 
        } else {
            return view('Admin.Admin.adminrolegive',['name'=>$name,'node'=>$node,'nids'=>array()]); 
        }
    }

    //保存权限
    public function saveauth(Request $request)
    {   
        //获取要修改的角色id
        $rid = $request->input('rid');
        //获取修改后的权限
        $node = $request->input('nids');
        //清空原来的权限
        DB::table('role_node')->where('rid','=',$rid)->delete();
        if (count($node)) {
            //遍历添加权限
            foreach ($node as $v) {            
                $data['rid'] = $rid;
                $data['nid'] = $v;
                DB::table('role_node')->insert($data);
            }
        }
        return 1;
    }

    //添加角色
    public function create()
    {
        //引入添加角色视图
        return view('Admin.Admin.adminroleadd');

    }

    public function store(Request $request)
    {
        //获取要添加的角色名称
        $data['name'] = $request->input('name');
        $data['status'] = 1;
        if (DB::table('role')->insert($data)) {
            return 1;
        } else {
            return 2;
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //获取角色id
        $data = DB::table('role')->where('id','=',$id)->first();
        return view('Admin.Admin.adminroleedit',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        //获取修改后的角色名
        $data['name'] = $request->input('name');
        if (DB::table('role')->where('id','=',$id)->update($data)) {
            return 1;
        } else {
            return 2;
        }
    }

    public function destroy($id)
    {
        //
    }

    //删除角色
    public function delete($id)
    {
        if (DB::table('role')->where('id','=',$id)->delete()) {
            //删除角色的权限信息
            DB::table('role_node')->where('rid','=',$id)->delete();
            return 1;
        } else {
            return 2;
        }
    }

    //批量删除角色
    public function moredel(Request $resquest)
    {
        //获取要删除的id数组
        $arr = $_GET['arr'];
        //遍历删除
        foreach ($arr as $v) {
            DB::table('role')->where('id','=',$v)->delete();
        }
        return 1;
    }
}
