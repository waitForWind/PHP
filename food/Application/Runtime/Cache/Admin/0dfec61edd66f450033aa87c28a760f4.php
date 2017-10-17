<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="/food/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/food/Public/css/main.css">
	<!-- <link rel="stylesheet" type="text/css" href="/food/Public/css/pagination.css"> -->
	<script type="text/javascript" src="/food/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/food/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/food/Public/js/layer.js"></script>
	<script type="text/javascript" src="/food/Public/js/indexController.js"></script>
	<script type="text/javascript" src="/food/Public/js/order.js"></script>
	<!-- <script type="text/javascript" src="/food/Public/js/jquery.pagination.js"></script> -->
</head>
<body>
	
<script type="text/javascript" src="/food/Public/js/loginCheck.js"></script>
<style type="text/css">
	body{
		background: #444;
	}
</style>
	<div class="col-xs-4 login-box" style="padding: 30px 100px 70px;margin-left: auto;margin-right: auto;float: none;">
		<h4>登录后台</h4>
	    <form class="loginform" role="form"  method="post">
	    	<input type="hidden" id="controller" value="/food/admin.php/Admin/Login"/>
	        <div class="input-group">
	            <span class="input-group-addon">
	            	<span class="glyphicon glyphicon-user"></span>
	            </span>
	            <input id="username" name="username" type="text" class="form-control" placeholder="用户名">
	        </div>
	        <br>
	        <div class="input-group">
	            <span class="input-group-addon">
	            	<span class="glyphicon glyphicon-lock"></span>
	            </span>
	            <input id="password" type="password" class="form-control" placeholder="密码" name="password">
	        </div>
	        <br>     
	        <input class="btn btn-info" type="submit" style="width: 100%;" value="登录" id="submit" />
	        <br>
	        <div class="col-xs-12 loginbottom">
	           <div class="checkbox" style="display: inline-block;">
	             <label>
	               <input type="checkbox" value="">记住密码
	             </label>
	           </div>
	           <a href="javascript:;">忘记密码？</a>
	        </div>	        
	    </form>

	</div>

</body>
</html>