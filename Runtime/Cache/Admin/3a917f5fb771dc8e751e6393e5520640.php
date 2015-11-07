<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.zs.com/Public/Admin/css/main.css" rel="stylesheet" />
</head>
<body>
<!--当前位置-->
<div class="pageCurrent" id="sidebar">
	<strong>您的当前位置：</strong><a href="#" target="_parent">管理后台</a><span>&gt;&gt;</span>系统设置<span>&gt;&gt;</span>轮播图片
</div>
<!--END 当前位置-->

<div class="wrapper">
	<!--主体-->
	<div class="main">
		<!--tab-->
		<ul class="headTab">
			<li class="on"><a href="#">图片列表</a></li>
			<li><a href="add.html">添加图片</a></li>
		</ul>
		
		<!--表格-->
		<div class="tableBox">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
				<tr>
					<th scope="col" style="width:60px;">ID</th>
					<th scope="col" style="width:300px;">图片</th>
					<th scope="col" style="width:100px;">状态</th>
					<th scope="col" style="width:200px;">添加时间</th>
					<th scope="col" style="width:200px;">操作</th>
					<th scope="col">&nbsp;</th>
				</tr>

				<tr>
					<td class="center">1</td>
					<td class="center"><img src="http://usr.im/300x125" id="picurl" class="img1" style="width:300px; height:125px;" /></td>
					<td class="center"><span class="tagBox1">正常</span></td>
					<td class="center">2014-10-15 19:12:50</td>
					<td class="center">
						<a href="#">删除</a>
						<span style="padding-right:1em;"></span>
						<a href="edit.html">编辑</a>
					</td>
					<td>&nbsp;</td>
				</tr>
				
				<tr>
					<td class="center">2</td>
					<td class="center"><img src="http://usr.im/300x125" id="picurl" class="img1" style="width:300px; height:125px;" /></td>
					<td class="center"><span class="tagBox4">停用</span></td>
					<td class="center">2014-10-15 19:12:50</td>
					<td class="center">
						<a href="#">删除</a>
						<span style="padding-right:1em;"></span>
						<a href="edit.html">编辑</a>
					</td>
					<td>&nbsp;</td>
				</tr>

			</table>
		<div class="clear"></div>
		</div>
		
	<div class="clear"></div>
	</div>
	<!--END 主体-->
<div class="clear"></div>
</div>
</body>
<script src=".http://www.zs.com/Public/Admin/js/jquery.min.js?1.8.3"></script>
<script src=".http://www.zs.com/Public/Admin/js/common.js"></script>
<script src=".http://www.zs.com/Public/Admin/js/portamento-min.js"></script>
</html>