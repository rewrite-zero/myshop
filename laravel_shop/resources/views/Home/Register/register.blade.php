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
    
    <script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
    <script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
    <script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    
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
        	<form action="/homeregister" method="post" id="reg">
            <table border="0" style="width:550px; font-size:14px; margin-top:20px" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="95">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:16px;">邮箱注册/<a href="/phoneregister" style="color:#ff4e00;">手机注册</a></span>
                    <span class="fr" style="position:relative;right:150px">已有商城账号，<a href="/homelogin/create" style="color:#ff4e00;">我要登录</a></span>
                </td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;邮箱 &nbsp;</td>
                <td><input type="text" value="" id="email" name="email" class="l_email" /><span id="emailmes" style="position:relative;left:20px;color:red;cursor:pointer"></span></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                <td><input type="password" value="" id="password" name="password" class="l_pwd" /><span id="pwdmes" style="position:relative;left:20px;color:red;cursor:pointer"></span></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                <td><input type="password" value="" id="repassword" name="repassword" class="l_pwd" /><span id="repwdmes" style="position:relative;left:20px;color:red;cursor:pointer"></span></td>
              </tr>
              <tr height="50">
                <td align="right"> <font color="#ff4e00">*</font>&nbsp;验证码 &nbsp;</td>
                <td style="position:relative;bottom:10px">
                    <input type="text" value="" name="vcode" id="vcode" class="l_ipt" />
                    <img src="/vcode" style="position:relative;top:15px;left:16px;height:40px;width:150px;cursor:pointer" onclick="this.src=this.src+'?b=a'"><span id="codemes" style="position:relative;left:20px;color:red;cursor:pointer">
                    @if (session('codemes'))
                      {{session('codemes')}}
                    @endif
                    </span>
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
// $(function(){
//    //自定义邮箱验证
//   jQuery.validator.addMethod("mail", function (value, element) {
//   var mail = /^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
//   return this.optional(element) || (mail.test(value));
//   }, "邮箱格式不对");
//   $('#reg').validate({
//     rules:{
//       email:{required:true,mail:true},
//       messages:{
//         email:{required:'请输入邮箱',mail:'输入正确的邮箱'},
//       },
//     },
//     debug : true,
//   });
// });
</script>
</html>
