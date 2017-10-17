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
	
	<nav class="navbar navbar-inverse" role="navigation" style="border-radius: 0;height: 52px;margin-bottom: 0px;">
	    <div class="container-fluid" style="height: 50px;">
	    <div class="navbar-header">
	    <img src="/food/Public/img/admin01.jpg" class="avatar" />
	    <span class="webname">超级管理员</span>
	       
	    </div>
	    <div style="padding-right: 20px;">
	        <ul class="nav navbar-nav navbar-right">
	            <li class="active"><a href="#">网站信息</a></li>
	            <li><a href="#">修改网站信息</a></li>
	            <li><a href="#">修改密码</a></li>
	            <input type="hidden" class="controller" value="/food/admin.php/Admin/Admin">
	            <input type="hidden" class="location" value="<?php echo U('Login/index');?>">
	            <li><a class="quit" href="<?php echo U('Admin/exitLogin');?>">退出</a></li>  
	           <!--  <script type="text/javascript">
	            	$('.quit').click(function(){
	            		alert($(this).attr("href"));
	            	});
	            </script>   -->    
	        </ul>
	    </div>
	    </div>
	</nav>
	<div class="row mainContent" style="width: 100%;">
		<div class="col-xs-2 menu">
			<ul class="nav nav-pills nav-stacked">
			  <li class="active"><a href="/food/admin.php/Admin/Admin/lookupMembers" target="frame">查看商户</a></li>
			  <li><a href="/food/admin.php/Admin/Admin/addMembers" target="frame">添加商户</a></li>
			  <li><a href="/food/admin.php/Admin/Admin/lookupUsers" target="frame">查看用户</a></li>
			  <li><a href="/food/admin.php/Admin/Admin/lookupComment" target="frame">评论管理</a></li>
			</ul>
		</div>
		<iframe name="frame" id="frame" src="" class="col-xs-10" style="height: 100%;border: none;" scrolling="no"></iframe>
	</div>
	<!-- <script type="text/javascript" src="/food/Public/js/indexController.js"></script> -->
	<script type="text/javascript">
    $('iframe').attr('src',"/food/admin.php/Admin/Admin/lookupMembers");
</script>

</body>
</html>