<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>角色信息</title>
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/style.css" />
	<style>
	*{margin:0px;padding:0px;}
	.d1{width:20%;height:50px;float:left;line-height:50px;font-weight:777}
	.d2{width:80%;height:50px;float:left;line-height:50px;text-align:left}
	.d2 p,span{letter-spacing:2px}
	.d2 span{padding-left:3px}
	.s1{color:red}
	/*#last5{background-color:#DBCEDB}*/
	</style>
</head>
<body>
	<center>
	<div id="first">
		<div class="d1">角色信息</div>
		<div class="d2"><p>当前用户:<span class="s1">{{$admin->adminname}}</span>的角色信息</p></div>
	</div>
	<form  class="form form-horizontal" id="form-admin-role" action="/adminsaverole" method="post">
	<div id="second">
		<div class="d1"></div>
		<div class="d2">
			@foreach ($role as $r)
			<span><input type="checkbox" name="rids[]" value="{{$r->id}}" @if (in_array($r->id,$rids)) checked @endif><span>{{$r->name}}</span></span>
			@endforeach
		</div>
	</div>
	<div id="last5">
		<div class="d1"></div>
			<div class="d2">
				{{csrf_field()}}
				<input type="hidden" name="uid" value="{{$admin->id}}">
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
					layer.msg('分配角色成功!',{icon:1,time:1000});
					setTimeout(function(){
					 window.parent.location.reload()}, 1500);
				  } else if(data == 2) {
				  	 layer.msg('分配角色失败!',{icon:2,time:1000});
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