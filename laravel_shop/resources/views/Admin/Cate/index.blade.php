<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/paginate.css">
<!--[if IE 6]>
<script type="text/javascript" src="/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>分类列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i>刷新</a></nav>
<div class="page-container">
	<form action="/admincate" method="get" class="r">
		{{csrf_field()}}
		<input type="text" class="input-text" style="width:250px" placeholder="输入分类名称" id="" name="name" value="{{$name}}">
		<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜分类</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="cate_add('添加分类','/admincate/create','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加分类</a></span> <span class="r">共有数据：<strong>{{$data->total()}}</strong> 条</span> </div>
	<table class="table table-border table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="9">分类列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th width="250">分类名</th>
				<th width="190">PID</th>
				<th width="150">PATH</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $v)
			<tr class="text-c">
				<td>{{$v->id}}</td>
				<td>{{$v->name}}</td>
				<td>{{$v->pid}}</td>
				<td>{{$v->path}}</td>
				<td class="td-manage">
				  <a title="编辑" href="javascript:;" onclick="cate_edit('分类编辑','/admincate/{{$v->id}}/edit','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
				  <!-- <form action="/admins/{{$v->id}}" method="post"> -->
				  <!-- {{csrf_field()}} -->
				    <a title="删除" href="javascript:;" onclick="cate_delete(this,{{$v->id}})" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				  <!-- </form>  -->
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	 <div id="pull_right">
       <div class="pull-right">
  		{!!$data->appends(array('name'=>$name))->render()!!}
       </div>
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
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*分类-增加*/
function cate_add(title,url,w,h){
	layer_show(title,url,w,h);
}

/*分类-删除*/
function cate_delete(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'get',
			url: /admincatedelete/+id,
			dataType: 'json',
			success: function(data){
				if (data == 0) {
				layer.msg('该分类下有子类,请先删除子类!',{icon:0,time:2000});
				} else if (data == 1) {
				$(obj).parents("tr").remove();
				layer.msg('分类已删除!',{icon:1,time:1500});
				} else if (data == 2) {
				layer.msg('删除分类失败!',{icon:2,time:1500});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
	});
}

/*分类-编辑*/
function cate_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
</script>
</body>
</html>