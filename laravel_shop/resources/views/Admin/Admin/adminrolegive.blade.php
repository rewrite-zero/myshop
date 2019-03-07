<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>角色分配 - 角色管理</title>
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/style.css" />
	<style>
	*{margin:0px;padding:0px;}
	/*first的div属性*/
	.d1{width:20%;height:50px;float:left;line-height:50px;font-weight:777}
	.d2{width:80%;height:50px;float:left;line-height:50px;text-align:left}
	.d2 p,span,#d2 p{letter-spacing:2px}
	.d2 span,#d2 span{padding-left:3px}
	.s1{color:red}
	/*second的div属性*/
	#d1{width:20%;height:50px;float:left;line-height:auto}
	#d2{width:62%;float:left;line-height:auto;word-wrap:normal}
	/*last的div属性*/
	#inp1{position:absolute;left:170px;line-height:auto}
	</style>
</head>
<body>
	<center>
	<div id="first">
		<div class="d1">权限信息</div>
		<div class="d2"><p>当前角色:<span class="s1">{{$name->name}}</span>的权限信息</p></div>
	</div>
	<form  class="form form-horizontal" id="form-admin-role" action="/adminsaveauth" method="post">
	<div id="second">
		<div id="d1"></div>
		<div id="d2">
			@foreach ($node as $v)
			<span><input type="checkbox" name="nids[]" value="{{$v->id}}" @if (in_array($v->id,$nids)) checked @endif><span>{{$v->name}}</span></span>
			@endforeach
		</div>
	</div>
	<div id="last" style="background-color:red;clear:both">
			<div id="inp1">
				{{csrf_field()}}
				<input type="hidden" name="rid" value="{{$name->id}}">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;提交&nbsp;">
				<input class="btn btn-danger radius" type="reset" value="&nbsp;重置&nbsp;">
			</div>
	</div>
	</form>
	</center>
<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-role").validate({
		submitHandler:function(form){
			$('form').ajaxSubmit({
				type: 'post',
				url: $(this).attr('action'),
				success: function(data){
					if (data == 1){
					layer.msg('权限分配成功,重新登录后开始生效!',{icon:1,time:2000});
					setTimeout(function(){
					 window.parent.location.reload()}, 1500);
				  } 
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('发生未知错误!',{icon:0,time:1000});
				}
			});
		}
	});
});
</script> 
</body>
</html>