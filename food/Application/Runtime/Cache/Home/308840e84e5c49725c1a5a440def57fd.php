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
	
<style type="text/css">
	#self{
		/*text-decoration: underline;*/
	}
	#self:hover{
		color: red!important;
	}
	#menu{
		padding: 0;
		height: 600px;
	}
	#menu>li{
		height: 50px;
		line-height: 50px;
		text-align: center;
	}
	#menu>li:nth-child(n+2){
		border-top: 1px solid #eee;
	}
	#menu>li>a{
		color: #777;
	}

	#menu>li>a:hover{
		color: orange;
	}
</style>
<input type="hidden" value="/food/index.php/Home/Index" id="controller">
<input type="hidden" id="user_id" value="<?php echo (session('user_id')); ?>">
	<nav class="navbar navbar-default" style="margin-bottom: 0;">
	  <div class="container-fluid">
	    <a href="/food/index.php/Home/Index/index" style="margin-top: 4px;display: inline-block;"><img src="/food/Public/img/logo.png" style="width: 108px;"></a>

	    <ul class="nav navbar-nav navbar-right">
	      	 <li><a href="/food/index.php/Home/Index/login" id="btn-login">登录</a></li>
	      	 <li><a href="/food/index.php/Home/Index/self" id="self" style="color: orange;">欢迎你,
				<span class="username">
					<?php echo (session('nickname')); ?>
				</span>
	      	 </a></li>
	      	 <li><a href="/food/index.php/Home/Index/regist" id="btn-regist">注册</a></li>
	     </ul>
	  </div>
	</nav>
	<ul id="menu" style="border:1px solid #eee;display: inline-block;width: 10%;border-top: none;">
		<li><a href="/food/index.php/Home/Index/index">首页</a></li>
		<li><a href="/food/index.php/Home/Index/fen">粉类</a></li>
		<li><a href="/food/index.php/Home/Index/zhou">粥类</a></li>
		<li><a href="/food/index.php/Home/Index/fan" style="color: orange;">饭类</a></li>
		<li><a href="/food/index.php/Home/Index/mian">面类</a></li>
		<li><a href="/food/index.php/Home/Index/xiaochao">小炒</a></li>
	</ul>
	<div style="width: 88%;display: inline-block;vertical-align: top;margin-top: 20px;" id="search-result">
		<p class="result">共找到<?php echo ($count); ?>个结果</p>
		<div class="clearfix">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 intro" id="<?php echo ($vo["menu_id"]); ?>">
					<div class="img-box" style="width: 100%;height: 150px;overflow: hidden;">
						<img class="food-img" src="/food/Public/img/<?php echo ($vo["image"]); ?>" style="width:100%;" />
					</div>
					<div class="intro-text">
						<span class="food-name" style="font-size: 17px;margin-bottom: 3px;display: inline-block;"><?php echo ($vo["name"]); ?></span><br>
						
						<span class="shop-name" style="font-size: 16px;display: inline-block;margin-bottom: 4px;color: #777;">店家:<?php echo ($vo["refectory_name"]); ?></span><br>
						<span class="food-vip">￥<?php echo ($vo["vip_price"]); ?></span>
						<span style="color: #999;float: right;margin-right: 10px;font-size: 13px;">门店价<span style="text-decoration: line-through;">￥<?php echo ($vo["price"]); ?></span></span>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		
		<div style="text-align: center;" id="page">
			<?php echo ($show); ?>
		</div>
	</div>
	
	
	

	<script type="text/javascript">

		var username = $('.username').html();
		// session['user_id'] = <?php echo (session('user_id')); ?>;
		
		if($.trim(username)){
			$('#index-user').show();
			$('#self').show();
			$('#btn-login').hide();
		}else{
			$('#index-user').hide();
			$('#self').hide();
			$('#btn-login').show();
		}
	</script>

</body>
</html>