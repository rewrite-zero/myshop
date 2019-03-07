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
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>订单管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单管理 <span class="c-gray en">&gt;</span> 订单列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i>刷新</a></nav>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="80">ID</th>
				<th width="350">订单号</th>
				<th width="120">用户ID</th>
				<th width="150">价格</th>
				<th width="250">下单时间</th>
				<th width="150">订单状态</th>
				<th>编辑</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $v)
			<tr class="text-c">
				<td>{{$v->id}}</td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">{{$v->order_num}}</u></td>
				<td>{{$v->user_id}}</td>
				<td>￥{{$v->total}}</td>
				<td class="td-status">{{$v->addtime}}</td>
				<td class="td-status">
				  @if ($v->status == 0)<span class="label label-danger radius">未付款</span>
				  @elseif ($v->status == 1)<span class="label label-warning radius">待发货</span>@elseif ($v->status == 2)<span class="label label-primary radius">已发货</span>
				  @elseif ($v->status == 3)<span class="label label-success radius">已收货</span>@elseif ($v->status == 4)<span class="label label-info radius">已评价</span>
				  @endif
				</td>
				<td class="td-manage">
					@if ($v->status == 0)等待付款
					@elseif ($v->status == 1)<a style="color:red" onclick="member_stop(this,{{$v->id}})" href="javascript:void(0);" title="发货">立即发货</a>
					@elseif ($v->status == 2)<span style="color:blue">等待收货</span>
					@elseif ($v->status == 3)等待评价
					@elseif ($v->status == 4)<span style="color:green">订单完成</span>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
  </div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[5,6]}// 制定列不参与排序
		]
	});
});
/*订单发货*/
function member_stop(obj,id){
	layer.confirm('确认发货吗？',function(index){
		$.ajax({
             type: "get",
             url: /orderstatus/+id,
             dataType: "json",
             success: function(data){
             	if (data == 1) {
             		layer.msg('发货成功!',{icon: 6,time:1000});
             		setTimeout(function(){
					 window.location.reload()}, 1500);
             	}     
            }
         });
	});
}
</script>
</body>
</html>
