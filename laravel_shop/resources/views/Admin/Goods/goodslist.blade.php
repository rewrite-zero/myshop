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
<link rel="stylesheet" href="/Admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<!-- <link rel="stylesheet" type="text/css" href="/Admin/static/h-ui.admin/css/style.css" /> -->
<!--[if IE 6]>
<script type="text/javascript" src="/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>商品列表</title>
</head>
<body class="pos-r">
<div>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 商品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i>刷新</a></nav>
		<div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a href="javascript:;" id="moredel" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="goods_add('添加商品','/goodslist/create')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加商品</a></span>
		</div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><!-- <input name="" type="checkbox" value=""> --></th>
						<th width="40">ID</th>
						<th width="160">商品名称</th>
						<th width="100">缩略图</th>
						<th>类别</th>
						<th width="100">库存</th>
						<th width="100">单价</th>
						<th width="60">商品状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					@if (count($data)>0)
						@foreach ($data as $v)
						<tr class="text-c va-m">
							<td><input name="" type="checkbox" value="{{$v->gid}}"></td>
							<td>{{$v->gid}}</td>
							<td>{{$v->gname}}</td>
							<td class="text-l"><img src="{{$v->pic}}" width="100" height="100"></td>
							<td>{{$v->cname}}</td>
							<td>{{$v->num}}</td>
							<td>{{$v->price}}</td>
							<td class="td-status">@if ($v->status == 1) <span class="label label-success radius">已上架</span> @elseif ($v->status == 0) <span class="label label-danger radius">已下架</span> @endif</td>
							<td class="td-manage">
							<!-- <a style="text-decoration:none" onClick="goods_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> -->
							@if ($v->status == 1) <a style="text-decoration:none" onClick="goods_stop(this,{{$v->gid}})" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> 
							@elseif ($v->status == 0)<a style="text-decoration:none" onClick="goods_start(this,{{$v->gid}})" href="javascript:;" title="上架"><i class="Hui-iconfont">&#xe603;</i></a> @endif
							<a style="text-decoration:none" class="ml-5" onClick="goods_edit('商品编辑','/goodslist/{{$v->gid}}/edit','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
							<a style="text-decoration:none" class="ml-5" onClick="goods_del(this,{{$v->gid}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
							</td>
						</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
// var setting = {
// 	view: {
// 		dblClickExpand: false,
// 		showLine: false,
// 		selectedMulti: false
// 	},
// 	data: {
// 		simpleData: {
// 			enable:true,
// 			idKey: "id",
// 			pIdKey: "pId",
// 			rootPId: ""
// 		}
// 	},
// 	callback: {
// 		beforeClick: function(treeId, treeNode) {
// 			var zTree = $.fn.zTree.getZTreeObj("tree");
// 			if (treeNode.isParent) {
// 				zTree.expandNode(treeNode);
// 				return false;
// 			} else {
// 				//demoIframe.attr("src",treeNode.file + ".html");
// 				return true;
// 			}
// 		}
// 	}
// };

// var zNodes =[
// 	{ id:1, pId:0, name:"一级分类", open:true},
// 	{ id:11, pId:1, name:"二级分类"},
// 	{ id:111, pId:11, name:"三级分类"},
// 	{ id:112, pId:11, name:"三级分类"},
// 	{ id:113, pId:11, name:"三级分类"},
// 	{ id:114, pId:11, name:"三级分类"},
// 	{ id:115, pId:11, name:"三级分类"},
// 	{ id:12, pId:1, name:"二级分类 1-2"},
// 	{ id:121, pId:12, name:"三级分类 1-2-1"},
// 	{ id:122, pId:12, name:"三级分类 1-2-2"},
// ];
		
		
//分页	
$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	//demoIframe = $("#testIframe");
	//demoIframe.on("load", loadReady);
	var zTree = $.fn.zTree.getZTreeObj("tree");
	//zTree.selectNode(zTree.getNodeByParam("id",'11'));
});

$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
	]
});
/*商品-添加*/
function goods_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*商品-查看*/
// function goods_show(title,url,id){
// 	var index = layer.open({
// 		type: 2,
// 		title: title,
// 		content: url
// 	});
// 	layer.full(index);
// }
/*商品-审核*/
// function goods_shenhe(obj,id){
// 	layer.confirm('审核文章？', {
// 		btn: ['通过','不通过'], 
// 		shade: false
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="goods_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布', {icon:6,time:1000});
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="goods_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
// 		$(obj).remove();
//     	layer.msg('未通过', {icon:5,time:1000});
// 	});	
// }
/*商品-上架*/
function goods_start(obj,id){
	layer.confirm('确认上架吗？',function(index){
		$.ajax({
             type: "get",
             url: /goodslistchangeStatus/+id,
             dataType: "json",
             success: function(data){
               $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="goods_stop(this,{{$v->gid}})" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已上架</span>');
			  $(obj).remove();
			  layer.msg('已上架!',{icon: 6,time:1000});       
            }
         });
	});
}
/*商品-下架*/
function goods_stop(obj,id){
	layer.confirm('确认下架吗？',function(index){
		$.ajax({
             type: "get",
             url: /goodslistchangeStatus/+id,
             dataType: "json",
             success: function(data){
               $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="goods_start(this,{{$v->gid}})" href="javascript:;" title="上架"><i class="Hui-iconfont">&#xe603;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">已下架</span>');
				$(obj).remove();
				layer.msg('已下架!',{icon: 5,time:1000});        
            }
         });
	});
}


/*商品-申请上线*/
// function goods_shenqing(obj,id){
// 	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
// 	$(obj).parents("tr").find(".td-manage").html("");
// 	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
// }

/*商品-编辑*/
function goods_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*商品-删除*/
function goods_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'get',
			url: /goodslistdel/+id,
			dataType: 'json',
			success: function(data){
				if (data == 1) {
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1500});
				} else if (data == 2) {
					layer.msg('删除失败!',{icon:2,time:1500});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*商品-批量删除*/
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

  if(confirm('确认要删除吗？')){
  		if (arr == '') {
  			layer.msg('未选择删除目标!',{icon:0,time:1500});
  		} else {
	   $.get('/goodslistmoredel',{arr:arr},function(data){
	   		if (data == '1') {
	   			layer.msg('批量删除成功!',{icon:1,time:1500});
	   			$(':checked').attr('checked',true).parents('tr').remove();
	   		} else if (data == 2) { 
	   			layer.msg('批量删除失败!',{icon:2,time:1500});
	   		}
	   });
	}
  }
});
</script>
</body>
</html>