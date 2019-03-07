<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Admin/lib/respond.min.js"></script>
<![endif]-->
<link href="/Admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/Admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/Admin/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Admin/static/h-ui/js/H-ui.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
  @if (session('err'))
  <div id="error" style="height:50px;margin-top:-50px;position:relative;left:1px;top:12px;text-align:center;line-height:50px;font-size:20px;color:red;cursor:pointer">{{session('err')}}</div>
  @endif
    <form class="form form-horizontal" action="/adminlogin" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="adminname" type="text" placeholder="用户名" style="width:300px" class="input-text size-L">
          <span style="position:relative;left:10px"></span>
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="password" type="password" placeholder="密码" style="width:300px" class="input-text size-L">
          <span style="position:relative;left:10px"></span>
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="fa fa-qrcode fa-2x" style="position:relative;top:5px"></i></label>
        <div class="formControls col-xs-8">
          <input name="code" class="input-text size-L" type="text" placeholder="验证码" style="width:90px;float:left">
          <div id="code" style="width:200px;height:40px;position:relative;left:10px;border:1px solid white;float:left;cursor:pointer;background-color:white;font-size:25px;font-weight:777"></div>
          <span style="position:relative;left:22px;top:10px"></span>
        </div>
      </div>
      <!-- <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>
      </div> -->
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
        {{csrf_field()}}
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.0</div>
<script>
 $(document).ready(function() {
      //生成验证码 
      var code; 
      function createCode(){ 
        code = '';//首先默认code为空字符串 
        var codeLength = 4;//设置长度，这里看需求，我这里设置了4 
        //设置随机字符 
        var random = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R', 'S','T','U','V','W','X','Y','Z'); 
        for(var i = 0; i < codeLength; i++){ //循环codeLength 我设置的4就是循环4次   
           var index = Math.floor(Math.random()*36); //设置随机数范围,这设置为0 ~ 36

           code += random[index]; //字符串拼接 将每次随机的字符 进行拼接 
      } 
        //把验证码写到div里
        $('#code').css({'lineHeight':'40px','textAlign':'center'}).html(code);
      } 
      //页面开始加载验证码 
      createCode();
      //验证码变色
      function colorCode(){
        color = '';
        var random = new Array('red','green','yellow','black','coral','violet','violetred','slategray','skyblue','navy','indianred','pink','gold');
          //随机获取颜色
          var index = Math.floor(Math.random()*13);
          color += random[index];
        $('#code').css('color',color).html();
      }
      //调用变色
      colorCode();
      //验证码Div加载点击事件 
      $("#code").bind('click',function() { 
          //重新调用函数
          createCode(); 
          colorCode();
        }); 
      //判断验证码是否正确
      $("input[name=code]").bind('blur',function() { 
        //全部转化成大写格式
         var oValue = $(this).val().toUpperCase();  
        if(oValue ==""){ 
          $('span:last').css('color','red').html('验证码未填写');
        }else if(oValue != code){ 
          $('span:last').css('color','red').html('验证码错误');
          oValue = ""; 
          createCode(); 
        }else{ 
          $('span:last').css('color','green').html('验证码正确');
          //填对验证码禁止刷新验证码
          $('#code').unbind('click');
        } 
       });
      //用户名,密码,验证码有一项错误禁止提交
       $('input[type=submit]').click(function(){
        if ( $('input[name=adminname]').val() == '') {
            return false;
          }  else{
            return true;
          }
          if ( $('span:last').html() == '验证码正确') {
            return true;
          }  else{
            return false;
          }
        });

       //reset清除所有提示信息
       $('input[type=reset]').click(function(){
        $('span').html('');
       });

       //第一个input自动聚焦
      $('input[name=adminname]').focus();

       //键盘enter事件提交
       // $(document).keyup(function(event){
       //      if(event.keyCode ==13){
       //        $("input[type=submit]").trigger("click");
       //      }
       //  });

       //单击提示消失
       $('#error').click(function(){
        $(this).css('display','none');
       });
    }); 
  
</script>