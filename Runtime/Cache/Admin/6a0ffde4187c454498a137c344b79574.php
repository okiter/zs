<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.zs.com/Public/Admin/css/main.css" rel="stylesheet" />
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
		<ul class="headTab">
			<li class="on"><a href="#">案例列表</a></li>
			<li><a href="<?php echo U('add');?>">添加案例</a></li>
		</ul>
		
		<!--表格-->
		<div class="tableBox">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
				<tr>
					<th scope="col" style="width:60px;">ID</th>
					<th scope="col" style="width:100px;">案例分类</th>
					<th scope="col" style="width:400px;">案例标题</th>
					<th scope="col" style="width:100px;">首页显示</th>
					<th scope="col" style="width:200px;">添加时间</th>
					<th scope="col" style="width:200px;">操作</th>
					<th scope="col">&nbsp;</th>
				</tr>
				<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
					<td class="center"><?php echo ($row["id"]); ?></td>
					<td class="left"><?php echo ($row["type_id"]); ?></td>
					<td class="left"><?php echo ($row["case_title"]); ?></td>
					<td class="center"><span class="tagBox4"><?php echo ($row['case_ishome']?'是':'否'); ?></span></td>
					<td class="center"><?php echo date('Y-m-d H:i:s',$row['inputtime']);?></td>
					<td class="center">
						<a href="<?php echo U('changeStatus',array('id'=>$row['id']));?>">删除</a>
						<span style="padding-right:1em;"></span>
						<a href="<?php echo U('edit',array('id'=>$row['id']));?>">编辑</a>
					</td>
					<td>&nbsp;</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>

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
<script src="http://www.zs.com/Public/Admin/js/jquery.min.js?1.8.3"></script>
<script src="http://www.zs.com/Public/Admin/js/common.js"></script>
<script src="http://www.zs.com/Public/Admin/js/portamento-min.js"></script>
</html>