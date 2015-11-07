<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.zs.com/Public/Admin/css/main.css" rel="stylesheet" />
</head>
<body>
<!--当前位置-->
<div class="pageCurrent" id="sidebar">
	<strong>您的当前位置：</strong><a href="#" target="_parent">管理后台</a><span>&gt;&gt;</span>系统设置<span>&gt;&gt;</span>基本设置
</div>
<!--END 当前位置-->

<div class="wrapper">
	<!--主体-->
	<div class="main">
		<!--tab-->
		<ul class="headTabs">
			<li class="on"><a href="#">基本设置</a></li>
		</ul>
		
		<!--form-->
		<div class="form">
			<form action="" method="post">
			<div class="tr">
				<div class="col">网站名称：</div>
				<div class="td"><input type="text" id="sysconfig_base_sitename" name="sysconfig_base_sitename" value="<?php echo ($sysconfig_base_sitename); ?>"  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">网站标题：</div>
				<div class="td"><input type="text" id="sysconfig_base_sitetitle" name="sysconfig_base_sitetitle" value="<?php echo ($sysconfig_base_sitetitle); ?>"  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">网站关键词：</div>
				<div class="td"><input type="text" id="sysconfig_base_sitekeyword" name="sysconfig_base_sitekeyword" value="<?php echo ($sysconfig_base_sitekeyword); ?>"  class="text" style="width:200px;" /><span class="helpBlock">设置网站meta关键词，多个关键词请使用英文逗号隔开</span></div>
			</div>
			
			<div class="tr">
				<div class="col">网站描述：</div>
				<div class="td"><textarea id="sysconfig_base_sitedescription" name="sysconfig_base_sitedescription" class="text" style="width:300px; height:100px;"><?php echo ($sysconfig_base_sitedescription); ?></textarea><span class="helpBlock">设置网站meta描述</span></div>
			</div>

			<div class="tr">
				<div class="col">网站版权：</div>
				<div class="td"><input type="text" id="sysconfig_base_sitecopyright" name="sysconfig_base_sitecopyright" value="<?php echo ($sysconfig_base_sitecopyright); ?>"  class="text" style="width:300px;" /></div>
			</div>

			<div class="tr">
				<div class="col">ICP备案号：</div>
				<div class="td"><input type="text" id="sysconfig_base_siteicp" name="sysconfig_base_siteicp" value="<?php echo ($sysconfig_base_siteicp); ?>"  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">统计代码：</div>
				<div class="td"><textarea id="sysconfig_base_sitecountcode" name="sysconfig_base_sitecountcode" class="text" style="width:300px; height:100px;"><?php echo ($sysconfig_base_sitecountcode); ?></textarea></div>
			</div>
			
			<div class="tr">
				<div class="col"></div>
				<div class="td">
					<button type="submit" class="btn2">保<span style="padding-right:2em;"></span>存</button><span id="msg"></span>
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
<script src="../js/jquery.min.js?1.8.3"></script>
<script src="../js/common.js"></script>
<script src="../js/portamento-min.js"></script>
</html>