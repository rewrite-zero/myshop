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
<title>节点管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 权限管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i>刷新</a></nav>
<div class="page-container">
	<div class="text-c">
		<form class="Huiform" method="get" action="/adminnodelist" target="_self">
			<input type="text" class="input-text" style="width:250px" placeholder="权限名称" name="name" value="{{$name}}">
			<button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜权限节点</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" id="moredel" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a></span> <span class="r">共有数据：<strong>{{$data->count()}}</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="7">权限节点</th>
			</tr>
			<tr class="text-c">
				<th width="25"><!-- <input type="checkbox" name="" value=""> --></th>
				<th width="40">ID</th>
				<th width="200">权限名称</th>
				<th width="200">控制器</th>
				<th width="200">方法</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $v)
			<tr class="text-c">
				<td><input type="checkbox" value="{{$v->id}}"></td>
				<td>{{$v->id}}</td>
				<td>{{$v->name}}</td>
				<td>{{$v->mname}}</td>
				<td>{{$v->aname}}</td>
				<td><a title="编辑" href="javascript:;" onclick="node_edit('节点编辑','/adminnodelist/{{$v->id}}/edit','1','','310')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="node_del(this,{{$v->id}})" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-节点-编辑*/
function node_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}

/*管理员-节点-删除*/
function node_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'get',
			url: /adminnodedelete/+id,
			dataType: 'json',
			success: function(data){
				if (data == 1) {
				$(obj).parents("tr").remove();
				layer.msg('节点已删除!',{icon:1,time:1000});
				} else if (data == 2) {
				layer.msg('删除节点失败!',{icon:2,time:1000});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

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
  			layer.msg('未选择删除目标!',{icon:1,time:1000});
  		} else {
	   $.get('/adminnodemoredel',{arr:arr},function(data){
	   		if (data == '1') {
	   			alert('批量删除成功');
	   			$(':checked').attr('checked',true).parents('tr').remove();
	   		} else if(data == '0') {
	   			layer.msg('未选择删除目标!',{icon:1,time:1000});
	   		}
	   });
	}
  }
});
</script>
</body>
</html>