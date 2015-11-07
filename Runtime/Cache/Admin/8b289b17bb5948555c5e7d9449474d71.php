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
	<strong>您的当前位置：</strong><a href="#" target="_parent">管理后台</a><span>&gt;&gt;</span>系统设置<span>&gt;&gt;</span>关于我们
</div>
<!--END 当前位置-->

<div class="wrapper">
	<!--主体-->
	<div class="main">
		<!--tab-->
		<ul class="headTabs">
			<li class="on"><a href="#">关于我们</a></li>
		</ul>
		
		<!--form-->
		<div class="form">
			<form action="" method="post">
			<div class="tr">
				<textarea id="sysconfig_about" name="sysconfig_about" class="text"><?php echo ($sysconfig_about); ?></textarea>
			</div>

			<div class="tr">
				<button type="submit" class="btn2">保<span style="padding-right:2em;"></span>存</button>
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
<script src="../js/jquery.min.js?1.8.3"></script>
<script src="../js/common.js"></script>
<script src="../js/portamento-min.js"></script>
<script>
KindEditor.ready(function(K) {
	var editor = K.create('textarea[name="sysconfig_about"]',{
		width : '100%'
		,height: '500px'
		,items:[
        		'source', '|', 'undo', 'redo', '|', 'preview', 'template', 'cut', 'copy', 'paste',
        		'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        		'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        		'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
        		'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
        		'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
        		'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
        		'anchor', 'link', 'unlink'
		]
		,filterMode:true //是否过滤html代码
		,wellFormatMode:true //是否美化html代码
		,basePath: '../plug/edit/'
		,uploadJson : '../plug/fileup/upload_json.php?m=groupon&imageDir=details&fileSize=1'
		,uploadDir : 'details'	//图片保存目录名 get参数 carData=>模型名 imageDir => 图片保存目录 fileSize => 允许上传的文件大小
		,fileManagerJson : '../plug/fileup/file_manager_json.php?m=groupon&imageDir=details'
		,uploadDirName : 'details'
		,allowFileManager:true
		
		//将编辑器中的内容同步到文本域
		,afterChange:function(){ //内容发生变化后
			this.sync();
		}			
		,afterFocus:function(){ //得到焦点时
			this.sync();
		}			
		,afterBlur: function(){ //失去焦点时
			this.sync();
		}			
	});
	editor.sync();
});
</script>
</html>