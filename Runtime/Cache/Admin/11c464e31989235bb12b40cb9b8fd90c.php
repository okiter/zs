<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>嘉馨达 - 网站管理后台</title>
<link href="http://www.zs.com/Public/Admin/css/index.css" rel="stylesheet"  />
</head>

<body>
<!-- header start -->
<div class="top"> 
	<div class="header">
		<div id="logo"></div>
		
		<!--right-->
		<div class="rihgtBox">
			<div class="loginInfo">您好，<strong>admin</strong> 。身份：超级管理员</div>
			<div class="function">
				<a href="#">修改密码</a><span>|</span><a href="#">退出登陆</a>
			</div>
		</div>
	</div>	
</div>
<!-- header end -->

<!-- left start -->
<div class="side">
	<ul id="menu">
		<li>
			<span class="currl"><a href="javascript:void(0);">系统设置</a></span>
			<ul class="scl">
				<li><a href="<?php echo U('Sysconfig/site');?>" target="main">基本设置</a></li>
				<li><a href="<?php echo U('Sysconfig/contact');?>" target="main">联系方式</a></li>
				<li><a href="<?php echo U('Sysconfig/about');?>" target="main">关于我们</a></li>
				<li><a href="<?php echo U('Focus/index');?>" target="main">轮播图片</a></li>
				<li><a href="sysconfig/columnbg.html" target="main">栏目背景</a></li>
			</ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);" onclick="window.top.frames['main'].location.href='<?php echo U("Sysuser/index");?>'">系统用户</a></span>
			<ul class="scl"></ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);">案例管理</a></span>
			<ul class="scl">
				<li><a href="<?php echo U('Type/index');?>" target="main">案例分类</a></li>
				<li><a href="<?php echo U('Case/index');?>" target="main">案例管理</a></li>
			</ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);" onclick="window.top.frames['main'].location.href='<?php echo U('Gongyi/index');?>'">工艺管理</a></span>
			<ul class="scl"></ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);" onclick="window.top.frames['main'].location.href='<?php echo U('Activity/index');?>'">活动管理</a></span>
			<ul class="scl"></ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);" onclick="window.top.frames['main'].location.href='<?php echo U('Project/index');?>'">项目管理</a></span>
			<ul class="scl"></ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);" onclick="window.top.frames['main'].location.href='team/list.html'">团队管理</a></span>
			<ul class="scl"></ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);" onclick="window.top.frames['main'].location.href='job/list.html'">招聘管理</a></span>
			<ul class="scl"></ul>
		</li>
		<li>
			<span class="currl"><a href="javascript:void(0);" onclick="window.top.frames['main'].location.href='appointment/list.html'">预约管理</a></span>
			<ul class="scl"></ul>
		</li>
	</ul>
</div>
<!-- left end --> 

<!-- main start -->
<div class="main">
	<iframe src="main.html" name="main" width="100%" height="100%" scrolling="auto" frameborder="0" id="rightFrame"></iframe>
</div>
<!-- main end -->

</body>

<script src="http://www.zs.com/Public/Admin/js/jquery.min.js?1.8.3"></script>
<script>
$(function(){
	initMenu();
});
//主框架收缩菜单
function initMenu() {
	$('#menu ul').hide();
	//$('#menu ul:first').show();
	//$('.currl').eq(0).addClass('curr');
	$('.currl').click(function() {					   
		$('#menu li span').removeClass('curr');
		$(this).addClass('curr');
		$(".navigation ul li").removeClass('current'); //当单击左侧菜单时清除顶部菜单的当前高亮样式
		$(".navigation ul li").first().addClass('current');	   //当单击左侧菜单时为顶部菜单第一个节点添加当前高亮样式	
		var checkElement = $(this).next();
		if((checkElement.is('ul')) && (checkElement.is(':visible'))) {			
			return false;
		}
		if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			$('#menu ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
			return false;
		}
	});
	$(".scl li a").click(function(e){
		$(".scl li a").removeClass('current');
		$(this).addClass('current');
		$(".navigation ul li").removeClass('current'); //当单击左侧菜单时清除顶部菜单的当前高亮样式
		$(".navigation ul li").first().addClass('current');	   //当单击左侧菜单时为顶部菜单第一个节点添加当前高亮样式		
		e.stopPropagation();
	});
}
</script>
</html>