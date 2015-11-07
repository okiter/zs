<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.zs.com/Public/Admin/css/main.css" rel="stylesheet" />
</head>
<body>
<!--当前位置-->
<div class="pageCurrent" id="sidebar">
	<strong>您的当前位置：</strong><a href="#" target="_parent">管理后台</a><span>&gt;&gt;</span>系统用户管理
</div>
<!--END 当前位置-->

<div class="wrapper">
	<!--主体-->
	<div class="main">
		<!--tab-->
		<ul class="headTabs">
			<li><a href="list.html">用户列表</a></li>
			<li class="on"><a href="#">添加用户</a></li>
		</ul>
		
		<!--form-->
		<div class="form">
			<form action="" method="post">
			<div class="tr">
				<div class="col">用<span style="padding-right:0.5em;"></span>户<span style="padding-right:0.5em;"></span>名：</div>
				<div class="td"><input type="text" id="sysuser_name" name="sysuser_name" value=""  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">邮<span style="padding-right:2em;"></span>箱：</div>
				<div class="td"><input type="text" id="sysuser_email" name="sysuser_email" value=""  class="text" style="width:200px;" /></div>
			</div>
			
			<div class="tr">
				<div class="col">角<span style="padding-right:2em;"></span>色：</div>
				<div class="td">
					<select name="sysuser_role" id="sysuser_role" class="text">
						<option value="9">超级管理员</option>
						<option value="1">普通管理员</option>
					</select>
				</div>
			</div>
			
			<div class="tr">
				<div class="col">密<span style="padding-right:2em;"></span>码：</div>
				<div class="td"><input type="password" id="sysuser_password" name="sysuser_password" value=""  class="text" style="width:200px;" /><span class="helpBlock">密码长度不得小于6位</span></div>
			</div>
			
			<div class="tr">
				<div class="col">确认密码：</div>
				<div class="td"><input type="password" id="is_sysuser_password" name="is_sysuser_password" value=""  class="text" style="width:200px;" /></div>
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
<script>
$(function(){
	$('button').click(function(){
		var sysuser_name = $('#sysuser_name').val();
			sysuser_email = $('#sysuser_email').val();
			sysuser_password = $('#sysuser_password').val();
			is_sysuser_password = $('#is_sysuser_password').val();
		var mailReg = /^[\w\+\-]+(\.[\w\+\-]+)*@[a-z\d\-]+(\.[a-z\d\-]+)*\.([a-z]{2,4})$/i;
		if(sysuser_name==''){
			alert('请输入用户名');
			return false;
		}
        if(sysuser_email!='' && !mailReg.test(sysuser_email)){
            alert('请输入正确的邮箱地址');
            return false;
		}
        if(sysuser_password==''){
			alert('请输入密码');
			return false;
		}
        if(sysuser_password.length<6){
			alert('密码长度至少6位，请重新输入');
			return false;
		}
        if(is_sysuser_password!=sysuser_password){
			alert('确认密码与密码不一致，请重新输入');
			return false;
		}
	});
});
</script>
</html>