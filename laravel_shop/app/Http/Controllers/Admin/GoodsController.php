<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{
    public function index()
    {   
        //获取所有商品信息
        $data = DB::table('goods')->join('cates','goods.cate_id','=','cates.id')->select(DB::raw("goods.id as gid,goods.name as gname,cates.name as cname,goods.pic,goods.descr,goods.num,goods.price,goods.status"))->get();
        if (count($data)) {
            return view('Admin.Goods.goodslist',['data'=>$data]);  
        } else {
            echo '<center><span style="color:red;font-size:20px">商品库空空如也~~请先添加!</span></center>';
        }
    }

    public function create()
    {
        //获取所有分类信息
        $cates = CateController::getCate();
        return view('Admin.Goods.goodsadd',['cates'=>$cates]);
    }

    public function store(Request $request)
    {
        //获取要添加的商品信息
        $data = $request->except('_token');
        //判断内容是否全部填写
        if (count($data) < 6) {
            return 0;exit;
        }
        //判断是否有文件上传
        if ($request->hasFile('pic')) {
            //允许上传的文件格式
            $arr = array('gif','jpg','jpeg','bmp','png');
            //随机上传图片名字
            $name = time().rand(1,10000);
            //获取后缀
            $extension = $request->file('pic')->getClientOriginalExtension();
            //判断上传文件是否是图片格式
            if (!in_array($extension,$arr)) {
                return 3;exit; 
            }
            //补充字段
             $data['pic'] = config('app.app_upload').'/'.$name.'.'.$extension;
             $data['status'] = 0;
            //执行添加
            if (DB::table('goods')->insert($data)) {
             //移动
             $request->file('pic')->move(config('app.app_upload'),$name.'.'.$extension);
                return 1;
            } else {
                return 2;
            }
        } else {
            return 4;
        }
    }   

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //获取要修改id的信息
        $data = DB::table('goods')->where('id','=',$id)->first();
        $data->pic = ltrim($data->pic,'.');
        //获取所有分类信息
        // dd($data);
        $cates = CateController::getCate();
        return view('Admin.Goods.goodsedit',['data'=>$data,'cates'=>$cates]);
    }

    public function update(Request $request, $id)
    {
        //获取原始数据
        $info = DB::table('goods')->where('id','=',$id)->first();
        //接收要修改的数据
        $data = $request->except(['_token','_method']);
        //判断是否有图片上传
        if (!isset($data['pic'])) {
            //添加原有pic字段信息
             $data['pic'] = $info->pic;
            //不修改图片
            if (DB::table('goods')->where('id','=',$id)->update($data)) {
                return 1;
            } else {
                return 2;
            }
        }  else {
            //允许上传的文件格式
            $arr = array('gif','jpg','jpeg','bmp','png');
            //随机上传图片名字
            $name = time().rand(1,10000);
            //获取后缀
            $extension = $request->file('pic')->getClientOriginalExtension();
            //判断上传文件是否是图片格式
            if (!in_array($extension,$arr)) {
                return 3;exit; 
            }
            //补充字段
             $data['pic'] = config('app.app_upload').'/'.$name.'.'.$extension;
             if (DB::table('goods')->where('id','=',$id)->update($data)) {
                //删除修改前的图片
                unlink($info->pic);
                 //移动
                $request->file('pic')->move(config('app.app_upload'),$name.'.'.$extension);
                return 1;
             } else {
                return 2;
             }
        }
    }

    public function destroy($id)
    {
        //
    }

    //删除商品
    public function del($id)
    {
        //获取对应id的商品信息
        $info = DB::table('goods')->where('id','=',$id)->first();
        //删除
        if (DB::table('goods')->where('id','=',$id)->delete()) {
            unlink($info->pic);
            return 1;
        } else {
            return 2;
        }
    }

    //批量删除商品
    public function moredel(Request $request)
    {
       //获取要删除的id
       $arr = $request->input('arr');
       //遍历删除
       foreach ($arr as $v) {
        //查询出所属id的图片路径
        $info = DB::table('goods')->where('id','=',$v)->first();
        //删除图片
         unlink($info->pic);
        //删除数据
        DB::table('goods')->where('id','=',$v)->delete();
       }
       return 1;
    }

    //商品状态修改
    public function changeStatus($id)
    {
        //查询要修改id的信息
        $info = DB::table('goods')->where('id','=',$id)->first();
        if ($info->status == 0) {            
        DB::table('goods')->where('id','=',$id)->update(['status'=>1]);
        } else {
        DB::table('goods')->where('id','=',$id)->update(['status'=>0]);    
        }
        return 1;
    }
}
