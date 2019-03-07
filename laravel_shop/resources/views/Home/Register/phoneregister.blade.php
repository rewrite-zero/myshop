<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/Home/css/style.css" />
    <!--[if IE 6]>
    <script src="/Home/js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript" src="/Home/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/Home/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript" src="/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Home/js/menu.js"></script>    
        
	<script type="text/javascript" src="/Home/js/select.js"></script>
    
	<script type="text/javascript" src="/Home/js/lrscroll.js"></script>
    
    <script type="text/javascript" src="/Home/js/iban.js"></script>
    <script type="text/javascript" src="/Home/js/fban.js"></script>
    <script type="text/javascript" src="/Home/js/f_ban.js"></script>
    <script type="text/javascript" src="/Home/js/mban.js"></script>
    <script type="text/javascript" src="/Home/js/bban.js"></script>
    <script type="text/javascript" src="/Home/js/hban.js"></script>
    <script type="text/javascript" src="/Home/js/tban.js"></script>
    
	<script type="text/javascript" src="/Home/js/lrscroll_1.js"></script>
    
    
<title>尤洪</title>
</head>
<body>  
<!--Begin Header Begin-->
<div class="soubg">
	<div class="sou">
        <span class="fr">
        	<span class="fl">你好，请<a href="/homelogin/create">登录</a>&nbsp; <a href="/phoneregister" style="color:#ff4e00;">免费注册</a>&nbsp; </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="/Home/#" class="sh1">新浪</a><a href="/Home/#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="/Home/#">手机版&nbsp;<img src="/Home/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<!--End Header End--> 
<!--Begin Login Begin-->
<div class="log_bg">	
    <div class="top">
        <div class="logo"><a href="/Home/Index.html"><img src="/Home/images/logo.png" /></a></div>
    </div>
	<div class="regist">
    	<div class="log_img"><img src="/Home/images/l_img.png" width="611" height="425" /></div>
		<div>
        	<form action="/dophone" method="post" id="regForm">
            <table border="0" style="width:550px; font-size:14px; margin-top:20px" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="95">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:16px;">手机注册/<a href="/homeregister/create" style="color:#ff4e00;">邮箱注册</a></span>
                    <span class="fr" style="position:relative;right:150px">已有商城账号，<a href="/homelogin/create" style="color:#ff4e00;">我要登录</a></span>
                </td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;手机 &nbsp;</td>
                <td><input type="text" value="" id="phone" name="phone" class="l_tel" /><span id="phonemes" style="position:relative;left:20px;color:red;cursor:pointer"></span></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                <td><input type="password" value="" id="password" name="password" class="l_pwd" /><span id="pwdmes" style="position:relative;left:20px;color:red;cursor:pointer"></span></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                <td><input type="password" value="" id="repassword" name="repassword" class="l_pwd" /><span id="repwdmes" style="position:relative;left:20px;color:red;cursor:pointer">@if (session('pwdmes'))
                      {{session('pwdmes')}}
                    @endif</span></td>
              </tr>
              <tr height="50">
                <td align="right"> <font color="#ff4e00">*</font>&nbsp;验证码 &nbsp;</td>
                <td>
                    <input type="text" value="" name="vcode" id="vcode" class="l_ipt" style="float:left" />
                    <div id="getcode" style="width:150px;height:40px;margin-left:20px;border:1px solid black;cursor:pointer;float:left;text-align:center;line-height:40px">获取验证码</div><span id="codemes" style="position:relative;left:20px;color:red;cursor:pointer">
                    @if (session('codemes'))
                      {{session('codemes')}}
                    @endif</span>
                </td>
              </tr>
              <tr>
              	<td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    	<label class="r_rad"><input type="checkbox" /></label><label class="r_txt">我已阅读并接受《用户协议》</label>
                    </span>
                </td>
              </tr>
              <tr height="60">
              {{csrf_field()}}
              	<td>&nbsp;</td>
                <td><input type="submit" value="立即注册" class="log_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!--End Login End--> 
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
        <img src="/Home/images/b_1.gif" width="98" height="33" /><img src="/Home/images/b_2.gif" width="98" height="33" /><img src="/Home/images/b_3.gif" width="98" height="33" /><img src="/Home/images/b_4.gif" width="98" height="33" /><img src="/Home/images/b_5.gif" width="98" height="33" /><img src="/Home/images/b_6.gif" width="98" height="33" />
    </div>    	
</div>
<!--End Footer End -->    
</body>
<script>  
$("#getcode").click(function(){
  o=$(this);
  //获取输入的手机号
  p=$("#phone").val();
  // alert(p);
  //Ajax
  $.get("/phone",{p:p},function(data){
    if(data.code==000000){
      m=120;
      //按钮倒计时
      mytime=setInterval(function(){
        m--;
        //把m赋值给div
        o.html(m+"秒后重新发送");
        //把div点击禁用
        o.css("pointerEvents",'none');
        //if
        if(m==0){
          //清除定时器
          clearInterval(mytime);
          //div赋值
          o.html("重新发送");
          //激活点击
          o.css("pointerEvents",'auto');
        }
      },1000);
    }
  },'json');
});

//验证码对比
// $('#vcode').blur(function(){
//   var code = $(this).val();
//   $.get('/docode',{code:code},function(data){
//     if (data == 1) {
//       $('input[type=submit]').click(function(){return true});
//     } else {
//       $('#codemes').html("验证码输入错误");
//       $('input[type=submit]').click(function(){return false});
//     }
//   });
// });
// $("input[type=submit]").click(function(){return true;}); 
// //输入框为空时不让提交
// $("input[type=submit]").click(function(){
//   if ($('#email').val() == '' || $('#password').val() || $('#repassword').val() || $('#vcode').val()) {
//        return false;
//   } else {
//        return true;
//      }
// });
// //邮箱验证
// $("#email").blur(function(){
//    //获取id对应的元素的值，去掉其左右的空格
//    var email = $.trim($('#email').val());
//    //验证邮箱格式的js正则表达式
//    var isEmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
//    //还原 
//    $("input[type=submit]").click(function(){return true;});   
//    $("#emailmes").html("");
//    if(email == ""){
//        $("#emailmes").html("<font color='red'>"+"邮箱不能为空"+"</font>");
//        $("input[type=submit]").click(function(){return false;});
//    }
//    else if(!(isEmail.test(email))){
//        $("#emailmes").html("<font color='red'>"+"邮箱格式不正确"+"</font>");
//        $("input[type=submit]").click(function(){return false;});
//    } else {
//       $("input[type=submit]").click(function(){return true;});
//    }
// });
// //验证密码
// $("#password").blur(function(){
//    //获取id对应的元素的值，去掉其左右的空格
//    var password = $.trim($('#password').val());
//    //还原 
//    $("input[type=submit]").click(function(){return true;});    
//    $("#pwdmes").html("");   
//    if(password == ""){
//        $("#pwdmes").html("<font color='red'>"+"密码不能为空"+"</font>");
//        $("input[type=submit]").click(function(){return false;});
//    } else {
//       $("input[type=submit]").click(function(){return true;});
//    }
// });
// $("#repassword").blur(function(){
//    //获取id对应的元素的值，去掉其左右的空格
//    var repassword = $.trim($('#repassword').val());
//    var password = $.trim($('#password').val());
//    //还原 
//    $("input[type=submit]").click(function(){return true;});    
//    $("#repwdmes").html("");  
//    if(repassword !== password){
//        $("#repwdmes").html("<font color='red'>"+"两次密码输入不一致"+"</font>");
//        $("input[type=submit]").click(function(){return false;});
//    } else {
//       $("input[type=submit]").click(function(){return true;});
//    }
// });
// //验证验证码
// $("#vcode").blur(function(){
//    //获取id对应的元素的值，去掉其左右的空格
//    var vcode = $.trim($('#vcode').val());
//    //还原 
//    $("input[type=submit]").click(function(){return true;});    
//    $("#codemes").html("");      
//    if(vcode == ""){
//        $("#codemes").html("<font color='red'>"+"验证码不能为空"+"</font>");
//        $("input[type=submit]").click(function(){return false;});
//    } else {
//       $("input[type=submit]").click(function(){return true;});
//    }
// });
// $('input[type=submit]').click(function(){
//   $('#email').trigger('blur');
//   $('#password').trigger('blur');
//   $('#repassword').trigger('blur');
// });
</script>
</html>
