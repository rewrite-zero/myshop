<!--_meta 作为公共模版分离出去-->
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
<!--[if IE 6]>
<script type="text/javascript" src="/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<link href="/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form action="/goodslist" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data" >
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="商品名称" id="" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品图片：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="pic" class="input-file">
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品类别：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="cate_id" class="select">
					<option value="">--请选择--</option>
				@foreach ($cates as $v)
					<option value="{{$v->id}}">{{$v->name}}</option>
				@endforeach
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="商品库存" id="" name="num">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品单价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="商品单价" id="" name="price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor" type="text/plain" name="descr" style="width:100%;height:400px;"></script> 
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
			    {{csrf_field()}}
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 添加商品</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Admin/lib/webuploader/0.1.5/webuploader.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
$(function(){
    $('.skin-minimal input').iCheck({
        checkboxClass: 'icheckbox-blue',
        radioClass: 'iradio-blue',
        increaseArea: '20%'
    });

    //自定义正整数
    jQuery.validator.addMethod("positiveinteger", function(value, element) {
	var aint=parseInt(value);
	return aint>0&& (aint+"")==value;
	}, "请输入一个正整数");

	//自定义大于0的数
	jQuery.validator.addMethod("isFloatGtZero", function (value, element) {
    value = parseFloat(value);
    return this.optional(element) || value > 0;
	}, "浮点数必须大于0");
	
    //表单验证
    $("#form-article-add").validate({
		rules: {
	      num: {
	        required: true,
	        positiveinteger:true
	      },
	      price: {
	      	required: true,
	        isFloatGtZero:true
	      },
	    // messages: {
	    //   num:  {
	    //     required: "请输入数量",
	    //     positiveinteger:"",
	    //   },
	    //   price: {
	    //     required: "请输入价格",
	    //     min: "价格不能为负数"
	    //  },
	    // },
		},
	    onkeyup:false,
		focusCleanup:true,
		success:"valid",
        submitHandler:function(form){
            $('form').ajaxSubmit({
                type: 'post',
                url: $(this).attr('action'),
                success: function(data){
                    if (data == 0) {
                    layer.msg('请填写所有内容!',{icon:0,time:1000});
                    } else if (data == 1){
                    layer.msg('添加成功!',{icon:1,time:1000});
                    setTimeout(function(){
                     window.close();
                     window.parent.location.reload()}, 1500);
                  } else if (data == 2) {
                    layer.msg('添加失败!',{icon:2,time:1000});
                  } else if (data == 3) {
                    layer.msg('图片格式不正确!',{icon:2,time:1000});
                  } else if (data == 4) {
                  	layer.msg('图片未上传!',{icon:2,time:1000});
                  }
                },
                error: function(XmlHttpRequest, textStatus, errorThrown){
                    layer.msg('请填写所有内容!',{icon:0,time:1000});
                }
            });
        }
    });
    
    //实例化百度编辑器
    var ue = UE.getEditor('editor');
    
});


</script>
</body>
</html>