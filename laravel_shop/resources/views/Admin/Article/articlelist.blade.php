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
<title>公告列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 公告管理 <span class="c-gray en">&gt;</span> 公告列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i>刷新</a></nav>
<div class="page-container">
	<div class="text-c">
		<!-- <button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button> -->
		<span class="l"><a href="javascript:;" onclick="datadel()" id="moredel" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a><!--  <a class="btn btn-primary radius" data-title="添加公告" data-href="/adminarticle/create" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加公告</a> --> <a style="text-decoration:none" class="btn btn-primary radius" onClick="article_edit('添加公告','/adminarticle/create','10001')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i>添加公告</a></span>
        <!-- 日期范围： -->
		<!-- <input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="" id="" placeholder=" 公告名称" style="width:250px" class="input-text"> -->
		<!-- <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜公告</button> -->
		<div style="background-color:red;width:20px;height:20px"></div>	
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><!-- <input type="checkbox" name="" value=""> --></th>
					<th width="80">ID</th>
					<th>标题</th>
					<th width="200">添加时间</th>
					<th width="60">发布状态</th>
					<th width="150">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($data as $v)
				<tr class="text-c">
					<td><input type="checkbox" value="{{$v->id}}"></td>
					<td>{{$v->id}}</td>
					<td class="text-c"><u style="cursor:pointer" class="text-primary" onClick="article_edit('公告内容','/adminarticle/{{$v->id}}','10001')" title="查看公告">{{$v->title}}</u></td>
					<td>{{$v->time}}</td>
					<td class="td-status">
					@if ($v->status == 1) <span class="label label-success radius">已发布</span> @elseif ($v->status == 0) <span class="label label-danger radius">未发布</span> @endif 
					</td>
					<td class="f-14 td-manage">
					@if ($v->status == 1) <a style="text-decoration:none" onClick="article_stop(this,{{$v->id}})" href="javascript:;" title="取消发布"><i class="Hui-iconfont">&#xe6de;</i></a> 
					@elseif ($v->status == 0)<a style="text-decoration:none" onClick="article_start(this,{{$v->id}})" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a> @endif
					<a style="text-decoration:none" class="ml-5" onClick="article_edit('公告编辑','/adminarticle/{{$v->id}}/edit','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
					{{method_field('DELETE')}}
					<a style="text-decoration:none" class="ml-5" onclick="article_del(this,{{$v->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
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
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"pading":false,
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,5]}// 不参与排序的列
	]
});

/*公告-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*公告-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*公告-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'get',
			url: /adminarticledel/+id,
			dataType: 'json',
			success: function(data){
				if (data == 1) {
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
				} else if (data == 2) {
				layer.msg('删除失败!',{icon:2,time:1000});	
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*公告-审核*/
// function article_shenhe(obj,id){
// 	layer.confirm('审核文章？', {
// 		btn: ['通过','不通过','取消'], 
// 		shade: false,
// 		closeBtn: 0
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布', {icon:6,time:1000});
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
// 		$(obj).remove();
//     	layer.msg('未通过', {icon:5,time:1000});
// 	});	
// }	
/*公告-未发布*/
function article_stop(obj,id){
	layer.confirm('确认取消发布吗？',function(index){
		  $.ajax({
             type: "get",
             url: /adminarticlestatus/+id,
             dataType: "json",
             success: function(data){
               $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未发布</span>');
				$(obj).remove();
				layer.msg('已取消发布!',{icon: 5,time:1000});        
            }
         });
	});
}

/*公告-发布*/
function article_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$.ajax({
             type: "get",
             url: /adminarticlestatus/+id,
             dataType: "json",
             success: function(data){
              $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
			  $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
			  $(obj).remove();
			  layer.msg('已发布!',{icon: 6,time:1000});       
            }
         });
	});
}
/*公告-申请上线*/
// function article_shenqing(obj,id){
// 	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
// 	$(obj).parents("tr").find(".td-manage").html("");
// 	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
// }

//单击复选框添加checked属性
$(':checkbox').click(function(){
	 if ($(this).attr("checked") == 'checked') {
      //已选中的行取消选中
      $(this).attr("checked", false);
    } else {
      //未选中的行，进行选中
      $(this).attr("checked", true);
    }
});

//批量删除
arr = [];
$('#moredel').click(function(){
	//遍历所有复选框
	$(':checkbox').each(function(){
		//判断
		if ($(this).attr("checked")) {
			id = $(this).val();
			arr.push(id);
		}
	});

  if(confirm("确认删除吗")){
  		if (arr == '') {
  			layer.msg('未选择删除目标!',{icon:0,time:1000});
  		} else {
	   $.get('/adminarticlemoredel',{arr:arr},function(data){
	   		if (data == '1') {
	   			layer.msg('批量删除成功!',{icon:1,time:1000});
	   			$(':checked').attr('checked',true).parents('tr').remove();
	   		}
	   });
	}
  }
});

</script> 
</body>
</html>