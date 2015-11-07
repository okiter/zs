<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.zs.com/Public/Admin/css/main.css" rel="stylesheet" />
<link rel="stylesheet" href="../plug/edit/themes/default/default.css" />
<script charset="utf-8" src="../plug/edit/kindeditor.js"></script>
<script charset="utf-8" src="../plug/edit/lang/zh_CN.js"></script>
</head>
<body>
<!--当前位置-->
<div class="pageCurrent" id="sidebar">
	<strong>您的当前位置：</strong><a href="#" target="_parent">管理后台</a><span>&gt;&gt;</span>案例管理<span>&gt;&gt;</span>案例分类
</div>
<!--END 当前位置-->

<div class="wrapper">
	<!--主体-->
	<div class="main">
		<!--tab-->
		<ul class="headTabs">
			<li><a href="type_list.html">分类列表</a></li>
			<li class="on"><a href="#">添加分类</a></li>
		</ul>
		
		<!--form-->
		<div class="form">
			<form action="" method="post">
			<div class="tr">
				<div class="col">分类名称：</div>
				<div class="td"><input type="text" id="type_name" name="type_name" value=""  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">关键字：</div>
				<div class="td"><input type="text" id="type_meatkeyword" name="type_meatkeyword" value=""  class="text" style="width:300px;" /><span class="helpBlock">设置meat关键字，便于搜索引擎抓取</span></div>
			</div>
			
			<div class="tr">
				<div class="col">分类描述：</div>
				<div class="td"><textarea id="type_meatdescription" name="type_meatdescription" class="text" style="width:300px; height:100px;"></textarea><span class="helpBlock">设置meta描述，便于搜索引擎抓取</span></div>
			</div>
			
			<div class="tr">
				<div class="col">分类背景：</div>
				<div class="td"><img src="http://usr.im/300x125" id="picurl" class="img1" style="width:300px; height:125px;" /></div>
			</div>
			<div class="tr">
				<div class="col"></div>
				<div class="td">
					<input name="type_bg" type="hidden" class="add" id="type_bg" style="width:200px;" value="" />
					<button type="button" class="btn3" id="bg_btn">选择图片</button><span class="helpBlock">图片尺寸 宽：1920像素，高：800像素</span>
				</div>
			</div>
			
			<div class="tr">
				<div class="col"></div>
				<div class="td">
					<button type="submit" id="submit" class="btn2">保<span style="padding-right:2em;"></span>存</button>
				</div>
			</div>
			</form>
		<div class="clear"></div>
		</div>
		<!--END form-->
	<div class="clear"></div>
	</div>
	<!--END 主体-->
<div class="clear"></div>
</div>
</body>
<script src="http://www.zs.com/Public/Admin/js/jquery.min.js?1.8.3"></script>
<script src="http://www.zs.com/Public/Admin/js/common.js"></script>
<script src="http://www.zs.com/Public/Admin/js/portamento-min.js"></script>
<script>
$(function(){
	$('#submit').click(function(){
		var type_name = $('#type_name').val();
			type_bg = $('#type_bg').val();
		if(type_name==''){
			alert('请输入分类名称');
			return false;
		}else if(type_bg==''){
			alert('请上传分类背景');
			return false;
		}else{
			return true;
		}	
	});
});

KindEditor.ready(function(K) {
	var thumbnail = K.editor({
		basePath: '../plugPublic/edit/'
		,uploadJson : '../plugfileup/upload_json.php?m=article&imageDir=thumbnail&fileSize=1'
		,uploadDir : 'thumbnail'	//图片保存目录名 get参数 carData=>模型名 imageDir => 图片保存目录 fileSize => 允许上传的文件大小
		,fileManagerJson : '../plug/fileup/file_manager_json.php?m=article&imageDir=thumbnail'
		,uploadDirName : 'thumbnail'
		,allowFileManager:true
	});
	K('#bg_btn').click(function() {
		thumbnail.loadPlugin('image', function() {
			thumbnail.plugin.imageDialog({
				imageUrl : K('#type_bg').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#type_bg').val(url);
					K('#picurl').attr('src',url);
					thumbnail.hideDialog();
				}
			});
		});
	});
});
</script>
</html>