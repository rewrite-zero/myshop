<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//验证码类库
use Gregwar\Captcha\CaptchaBuilder;
use DB;
use Hash;
use Mail;
use A;
class RegisterController extends Controller
{
    public function index()
    {
        //
    }

    //自定义函数调用
    public function index1()
    {
        fun();
    }

    //手机短信注册
    public function phoneregister()
    {
        return view('Home.Register.phoneregister');
    }

    //短信接口调用
    public function index3(Request $request)
    {
        //获取手机号
        $p = $request->input('p');
        fun($p);
    }
    
    //处理手机短信注册
    public function dophone(Request $request)
    {
       //随机验证码
       $fcode =$_COOKIE['fcode'];
       //输入信息
       $vcode = $request->input('vcode');
       $phone = $request->input('phone');
       $password = $request->input('password');
       $repassword = $request->input('repassword');
       //判断验证码是否一致
       if ($vcode !== $fcode) {
            return back()->with('codemes','验证码输入错误');
        //判断两次密码是否一致
       } else if ($password !== $repassword ) {
            return back()->with('pwdmes','两次密码输入不一致');
       } else {
            //获取用户注册信息
            $data = $request->only(['phone','password']);
            $data['password'] = Hash::make($request->input('password'));
            $data['username'] = 'xxx';
            $data['status'] = 2;
            $data['addtime'] = time();
            $data['token'] = str_random(50);
            //执行插入
            if (DB::table('users')->insert($data)) {
                echo '注册成功';
            }
       } 
    }

    // //处理验证码
    // public function docode(Request $request)
    // {
    //     //获取输入的验证码
    //     $code = $request->input('code');
    //     //获取session的验证码
    //     $fcode = session('fcode');
    //     if ($code == $fcode) {
    //         return 1;
    //     } else {
    //         return 0;
    //     }
    // }

    //邮箱注册
    public function create()
    {
        //
        return view('Home.Register.register');
    }

    public function store(Request $request)
    {
       //输入验证码
       $vcode = $request->input('vcode');
       //随机验证码
       $code = session('vcode');
       $password = $request->input('password');
       $repassword = $request->input('repassword');
       //判断验证码是否一致
       if ($vcode !== $code) {
            return back()->with('codemes','验证码输入错误');
        //判断两次密码是否一致
       } else if ($password !== $repassword ) {
            return back()->with('pwdmes','两次密码输入不一致');
       } else {
            //获取用户注册信息
            $data = $request->only(['email','password']);
            $data['password'] = Hash::make($request->input('password'));
            $data['username'] = 'xxx';
            $data['status'] = 1;
            $data['addtime'] = time();
            $data['token'] = str_random(50);
            //执行插入
            $id = DB::table('users')->insertGetId($data);
            if ($id) {
                $this->send($data['email'],$id,$data['token']);
                echo '用户激活邮件已发送,请登录邮箱激活';
            }
       }

    }

    //发送邮件激活用户
    public function send($email,$id,$token)
    {
        Mail::send('Home.Register.jihuo',['id'=>$id,'token'=>$token],function($message)use($email){
            //设置主题
            $message->subject('用户激活');
            //设置接收方
            $message->to($email);
        });
    }

    //激活用户
    public function jihuo(Request $request) 
    {
        //获取id和token
        $id = $request->input('id');
        //获取数据
        $info = DB::table('users')->where('id','=',$id)->first();
        $token = $request->input('token');
        //对比token值
        if ($info->token == $token) {
            //修改
            $data['status'] = 2;
            //重新生成token
            $data['token'] = str_random();
            //修改
            DB::table('users')->where('id','=',$id)->update($data);
            echo '用户已激活,请登录!';
        }
    }

    //发送邮件测试
    public function sendmail()
    {
        //发送原始字符串
        Mail::raw('are you ok?',function($message){
            //设置主题
            $message->subject("ok?");
            //设置接收方
            $message->to('1255154163@qq.com');
        });
    }

    //验证码
    public function vcode()
    {
        ob_clean();//清除操作
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        //输出图片
        $builder->output();
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
