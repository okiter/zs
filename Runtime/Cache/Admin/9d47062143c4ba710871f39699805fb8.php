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
	<strong>您的当前位置：</strong><a href="#" target="_parent">管理后台</a><span>&gt;&gt;</span>案例管理
</div>
<!--END 当前位置-->

<div class="wrapper">
	<!--主体-->
	<div class="main">
		<!--tab-->
		<ul class="headTabs">
			<li><a href="<?php echo U('index');?>">案例列表</a></li>
			<li class="on"><a href="#">编辑案例</a></li>
		</ul>
		
		<!--form-->
		<div class="form">
			<form action="" method="post">
			<div class="tr">
				<div class="col">案例标题：</div>
				<div class="td"><input type="text" id="case_title" name="case_title" value="<?php echo ($case_title); ?>"  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">案例子标题：</div>
				<div class="td"><input type="text" id="case_subtitle" name="case_subtitle" value="<?php echo ($case_subtitle); ?>"  class="text" style="width:300px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">案例分类：</div>
				<div class="td">
					<select name="type_id" id="case_type" class="text">
						<option value="0">请选择</option>
						<?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
			</div>
			
			<div class="tr">
				<div class="col">首页推荐：</div>
				<div class="td">
					<input type="radio" name="case_ishome" class="case_ishome" id="case_ishome0" value="0" checked="checked" /><label for="case_ishome0">否</label>
					<input type="radio" name="case_ishome" class="case_ishome" id="case_ishome1" value="1" /><label for="case_ishome1">是</label>
				</div>
			</div>
			
			<div id="isHome" style="display:none;">
				<div class="tr" style="margin-bottom:5px;">
					<div class="col">推荐封面：</div>
					<div class="td">
						<div style="float:left; margin-right:10px;"><img src="http://usr.im/300x125" id="homecover_leftimg" class="img1" style="width:300px; height:125px;" /></div>
						<div style="float:left"><img src="http://usr.im/300x125" id="homecover_rightimg" class="img1" style="width:300px; height:125px;" /></div>
					<div class="clear"></div>
					</div>
				</div>
				<div class="tr">
					<div class="col"></div>
					<div class="td">
						<input name="case_homecover[]" type="hidden" class="add" id="case_homecover_left" style="width:200px;" value="" />
						<input name="case_homecover[]" type="hidden" class="add" id="case_homecover_right" style="width:200px;" value="" />
						左图：<button type="button" class="btn3" id="homecover_left_btn" style="margin-right:190px;">选择图片</button>右图：<button type="button" class="btn3" id="homecover_right_btn">选择图片</button>
						<p><span class="helpBlock">图片尺寸 宽：960像素，高：600像素</span></p>
					</div>
				</div>
			</div>
			
			<div class="tr">
				<div class="col">案例标签：</div>
				<div class="td"><input type="text" id="case_tags" name="case_tags" value="<?php echo ($case_tags); ?>"  class="text" style="width:300px;" /><span class="helpBlock">多个标签请使用英文逗号分隔，如：简约,时尚,西欧</span></div>
			</div>
			
			<div class="tr" style="margin-bottom:5px;">
				<div class="col">列表封面：</div>
				<div class="td"><img src="http://usr.im/200x125" id="coverimg" class="img1" style="width:200px; height:125px;" /></div>
			</div>
			<div class="tr">
				<div class="col"></div>
				<div class="td">
					<input name="case_cover" type="hidden" class="add" id="case_cover" style="width:200px;" value="" />
					<input type="file" id="uploader"/><span class="helpBlock">图片尺寸 宽：480像素，高：300像素</span>
				</div>
			</div>
			
			<div class="tr" style="margin-bottom:5px;">
				<div class="col">内容封面：</div>
				<div class="td"><img src="http://usr.im/152x200" id="showcoverimg" class="img1" style="width:152px; height:200px;" /></div>
			</div>
			<div class="tr">
				<div class="col"></div>
				<div class="td">
					<input name="case_showcover" type="hidden" class="add" id="case_showcover" style="width:200px;" value="" />
					<input type="file" id="showcover_btn"/><span class="helpBlock">图片尺寸 宽：480像素，高：632像素</span>
				</div>
			</div>
			
			<div class="tr">
				<div class="col">案例描述：</div>
				<div class="td"><textarea id="case_description" name="case_description" class="text" style="width:500px; height:200px;"><?php echo ($case_description); ?></textarea></div>
			</div>
			
			<div class="tr">
				<div class="col">案例详情：</div>
				<div class="td"><textarea id="case_body" name="case_body"><?php echo ($case_body); ?></textarea></div>
			</div>
			
			<div class="tr">
				<div class="col">案例组图：</div>
				<div class="td"><span class="helpBlock">案例组图，建议尺寸：980x564</span><textarea id="case_pics" name="case_pics"><?php echo ($case_pics); ?></textarea></div>
			</div>
			
			<div class="line"></div>
			
			<div class="tr">
				<div class="col">关键字：</div>
				<div class="td"><input type="text" id="case_meatkeyword" name="case_meatkeyword" value="<?php echo ($case_meatkeyword); ?>"  class="text" style="width:200px;" /><span class="helpBlock">设置meat关键字，便于搜索引擎抓取</span></div>
			</div>
			
			<div class="tr">
				<div class="col">描述：</div>
				<div class="td"><textarea id="case_meatdescription" name="case_meatdescription" class="text" style="width:300px; height:100px;"><?php echo ($case_meatdescription); ?></textarea><span class="helpBlock">设置meat描述，便于搜索引擎抓取</span></div>
			</div>
			
			<div class="tr">
				<div class="col"></div>
				<div class="td">
					<button type="submit" id="submit" class="btn2">保<span style="padding-right:2em;"></span>存</button><span id="msg"></span>
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
	$('#case_type').val([<?php echo ((isset($type_id) && ($type_id !== ""))?($type_id):0); ?>]);
	$('.case_ishome').val([<?php echo ((isset($case_ishome) && ($case_ishome !== ""))?($case_ishome):0); ?>]);

	$('#submit').click(function(){
		var case_title = $('#case_title').val();
			case_subtitle = $('#case_subtitle').val();
			case_type = $('#case_type').val();
			case_ishome = $('#case_ishome1')
			case_homecover_left = $('#case_homecover_left').val();
			case_homecover_right = $('#case_homecover_right').val();
			case_cover = $('#case_cover').val();
			case_showcover = $('#case_showcover').val();
			case_description = $('#case_description').val();
			case_body = $('#case_body').val();
			case_pics = $('#case_pics').val();
		if(case_title==''){
			alert('请输入案例标题');
			return false;
		}else if(case_subtitle==''){
			alert('请输入案例子标题');
			return false;
		}else if(case_type==0){
			alert('请选择案例分类');
			return false;
		}else if(case_ishome.attr('checked')=='checked'){
			if(case_homecover_left=='' || case_homecover_right==''){
				alert('请上传首页推荐图片');
				return false;
			}
		}else if(case_cover==''){
			alert('请上传列表封面图片');
			return false;
		}else if(case_showcover==''){
			alert('请上传内容封面图片');
			return false;
		}else if(case_description==''){
			alert('请输入案例描述');
			return false;
		}else if(case_body==''){
			alert('请输入案例详情');
			return false;
		}else if(case_pics==''){
			alert('请上传案例组图');
			return false;
		}else{
			return true;
		}
	});
	
	//页面载时显示上传首页推荐封面图
	if($('input[name="case_ishome"]').val()==0){
		$('#isHome').hide();
	}else if($('input[name="case_ishome"]').val()==1){
		$('#isHome').show();
	}
	//选择开关时显示上传首页推荐封面图	
	$('input[name="case_ishome"]').click(function(){
		var _this = $(this).val();
		if(_this==0){
			$('#isHome').hide();
		}else if(_this==1){
			$('#isHome').show();
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
				$('#coverimg').attr('src',"/Uploads/"+data);
				$('#case_cover').val(data);
			}
		});








		//为了防止浏览器崩溃,所以说放到setTimeout中..
		$('#showcover_btn').uploadify({
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
				$('#showcoverimg').attr('src',"/Uploads/"+data);
				$('#case_showcover').val(data);
			}
		});









	},50);





});

</script>
</html>