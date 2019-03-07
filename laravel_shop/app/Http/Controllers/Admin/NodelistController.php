<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class NodelistController extends Controller
{

    public function index(Request $request)
    {
        //获取搜索内容
        $name = $request->input('name');
        //获取所有权限节点信息
        $data = DB::table('node')->where('name','like','%'.$name.'%')->orderBy('mname','asc')->orderBy('id','asc')->get();
        return view('Admin.Admin.adminnodelist',['data'=>$data,'name'=>$name]);
    }

    // 批量删除管理员
    public function moredel()
    {
        //获取要删除的id数组
        $arr = $_GET['arr'];
        //遍历删除
        foreach ($arr as $v) {
            DB::table('node')->where('id','=',$v)->delete();
        }
        return 1;
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

    //修改节点信息
    public function edit($id)
    {
        //获取要修改的节点信息
        $data = DB::table('node')->where('id','=',$id)->first();
        return view('Admin.Admin.adminnodeedit',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        //获取要修改的节点信息
        $data['name'] = $request->input('name');
        if (DB::table('node')->where('id','=',$id)->update($data)) {
            return 1;
        } else {
            return 2;
        }
    }

    //节点删除
    public function delete($id)
    {
        //删除节点
        if (DB::table('node')->where('id','=',$id)->delete()) {
            return 1;
        } else {
            return 2;
        }
    }

    public function destroy($id)
    {
        //
    }
}
