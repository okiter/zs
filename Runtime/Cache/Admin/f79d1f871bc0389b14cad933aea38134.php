<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.zs.com/Public/Admin/css/main.css" rel="stylesheet" />
<link href="http://www.zs.com/Public/Admin/css/common.css" rel="stylesheet" />
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
			<li><a href="<?php echo U('index');?>">分类列表</a></li>
			<li class="on"><a href="#">编辑分类</a></li>
		</ul>
		
		<!--form-->
		<div class="form">
			<form action="<?php echo U();?>" method="post">
			<div class="tr">
				<div class="col">分类名称：</div>
				<div class="td"><input type="text" id="type_name" name="type_name" value="<?php echo ($type_name); ?>"  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">关键字：</div>
				<div class="td"><input type="text" id="type_meatkeyword" name="type_meatkeyword" value="<?php echo ($type_meatkeyword); ?>"  class="text" style="width:300px;" /><span class="helpBlock">设置meat关键字，便于搜索引擎抓取</span></div>
			</div>
			
			<div class="tr">
				<div class="col">分类描述：</div>
				<div class="td"><textarea id="type_meatdescription" name="type_meatdescription" class="text" style="width:300px; height:100px;"><?php echo ($type_meatdescription); ?></textarea><span class="helpBlock">设置meta描述，便于搜索引擎抓取</span></div>
			</div>
			
			<div class="tr">
				<div class="col">分类背景：</div>
				<div class="td">
					<input  id="type_bg" type="hidden" name="type_bg" maxlength="60" value="<?php echo ($type_bg); ?>"/>
					<div class="upload-img-box" style="display: <?php echo ($type_bg?'block':'none'); ?>">
						<div class="upload-pre-item">
							<img src="/Uploads/<?php echo ($type_bg); ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="tr">
				<div class="col">wer</div>
				<div class="td">
					<input name="uploader" type="file"  id="uploader" style="width:200px;" />
				</div>
			</div>
			
			<div class="tr">
				<div class="col"></div>
				<div class="td">
					<input type="hidden" name="id" value="<?php echo ($id); ?>"/>
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
<script type="text/javascript" src="http://www.zs.com/Public/Admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="http://www.zs.com/Public/Admin/layer/layer.js"></script>
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




	//>>1.将上传表单元素替换为上传插件
	window.setTimeout(function(){
		//为了防止浏览器崩溃,所以说放到setTimeout中..
		$('#uploader').uploadify({
			'swf'      : 'http://www.zs.com/Public/Admin/uploadify/uploadify.swf',   //swf的地址
			'uploader' : "<?php echo U('Upload/index');?>",      //处理上传的地址地址
			'buttonText' : '选择图片',
			'width'    : 146, //设置插件的宽
//                   'fileObjName' : 'the_files',  //默认为Filedata,  $_FIELS['the_files']
//                   'fileSizeLimit' : '200KB',  //限制文件上传的大小
			'fileTypeExts' : '*.gif; *.jpg; *.png',  //限制上传的文件格式
			'formData'      : {'dir' : 'type'},  //I('post.dir')   //上传时传入的额外参数
			'multi'    : true,   //是否支持批量上传
			'onUploadError' : function(file, errorCode, errorMsg, errorString) {    //上传失败时要执行的方法
				layer.msg('上传失败!',{
					offset:0
				});
			},
			'onUploadSuccess' : function(file, data, response) {           //上传成功时要执行的方法
				//>>1.将路径放到隐藏中,再通过表单提交给服务器
				$('#type_bg').val(data);
				//>>2.将给地址放到img的src中,然后显示图片
				$('.upload-img-box img').attr('src','/Uploads/'+data);
				$('.upload-img-box').show();
			}
		});
	},50);


});
</script>
</html>