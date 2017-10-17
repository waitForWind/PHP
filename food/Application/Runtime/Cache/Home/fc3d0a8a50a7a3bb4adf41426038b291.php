<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	
	<input type="hidden" id="user_id" value="<?php echo (session('user_id')); ?>"/>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">LOGO</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <!-- <li><a href="#">餐厅</a></li> -->
	       
	        <li class="active"><a href="/food/index.php/Home/Index/fen">我要点餐</a></li>
	      </ul>
	 
	      <ul class="nav navbar-nav navbar-right">
	      	 <li><a href="/food/index.php/Home/Index/self" >个人主页</a></li>
	      	 <li><a href="/food/index.php/Home/Index/fanhe">我的饭盒</a></li>
	      	 <li><a href="/food/index.php/Home/Index/history">吃货记录</a></li>
	      	 <li><a href="/food/index.php/Home/Index/exitLogin" id="btn-regist">退出</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="fanhe-wrap clearfix">
			<span class="close glyphicon glyphicon-remove" style="font-size: 16px;color: #444;"></span>
			<div class="fanhe-img">
				<img src="/food/Public/img/<?php echo ($vo["image"]); ?>"/>
			</div>
			<div class="fanhe-intro">
				<h4>菜谱名称：<?php echo ($vo["name"]); ?></h4>
				<p>简介：<?php echo ($vo["introduce"]); ?></p>
				<p>价格：￥<span id="single"><?php echo ($vo["vip_price"]); ?></span></p>
				<p>数量：<span id="num"><?php echo ($vo["num"]); ?></span></p>
				<p style="color: red;">总价：￥<?php echo ($vo["total_price"]); ?><span class="total"></span></p>
				<div class="fanhe-btn-group text-success" style="float: right;margin-left: 500px;margin-top: -28px; font-size: 24px;color: #00AEEF; ">
					已签收
				</div>
			</div>
			
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	
<script type="text/javascript">
	$('.close').click(function(){
		$(this).parent('.fanhe-wrap').slideUp('fast');
	});
</script>

</body>
</html>