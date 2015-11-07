<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.zs.com/Public/Admin/css/main.css" rel="stylesheet" />
</head>
<body>
<!--当前位置-->
<div class="pageCurrent" id="sidebar">
	<strong>您的当前位置：</strong><a href="#" target="_parent">管理后台</a><span>&gt;&gt;</span>工艺管理
</div>
<!--END 当前位置-->

<div class="wrapper">
	<!--主体-->
	<div class="main">
		<!--tab-->
		<ul class="headTab">
			<li class="on"><a href="#">工艺列表</a></li>
			<li><a href="add.html">添加工艺</a></li>
		</ul>
		
		<!--表格-->
		<div class="tableBox">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
				<tr>
					<th scope="col" style="width:60px;">ID</th>
					<th scope="col" style="width:400px;">标题</th>
					<th scope="col" style="width:200px;">添加时间</th>
					<th scope="col" style="width:200px;">操作</th>
					<th scope="col">&nbsp;</th>
				</tr>

				<tr>
					<td class="center">1</td>
					<td class="left">马太太的花园</td>
					<td class="center">2014-10-15 11:20:50</td>
					<td class="center">
						<a href="#">删除</a>
						<span style="padding-right:1em;"></span>
						<a href="edit.html">编辑</a>
					</td>
					<td>&nbsp;</td>
				</tr>
				
				<tr>
					<td class="center">2</td>
					<td class="left">马太太的花园</td>
					<td class="center">2014-10-15 11:20:50</td>
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
		
		<!--分页-->
		<div class="page" style="margin-bottom:10px;">
			<div>
				<span class="current">1</span><a class="num" href="#">2</a> <a class="next" href="#">下一页</a> </div>
			</div> 
		<div class="clear"></div>
		</div>
		
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