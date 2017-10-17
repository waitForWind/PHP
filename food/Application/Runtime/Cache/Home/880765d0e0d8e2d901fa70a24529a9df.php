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
</style>
	<input type="hidden" id="controller" value="/food/index.php/Home/Index"/>
	<input type="hidden" id="user_id" value="<?php echo (session('user_id')); ?>">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">LOGO</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">餐厅</a></li>
	        <li><a href="#">关于我们</a></li>
	     
	      </ul>
	    
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
	  </div>
	</nav>
	
	<div class="row">
		<div style="width: 92%;margin: 30px auto;" id="tuijian">
			<h3 class="index-title">搜索结果</h3>
			<hr>
			<?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 intro" id="<?php echo ($vo["menu_id"]); ?>">
					<div class="img-box" style="width: 100%;height: 150px;overflow: hidden;">
						<img class="food-img" src="/food/Public/img/<?php echo ($vo["image"]); ?>" />
					</div>
					<div class="intro-text">
						<span class="food-name" style="font-size: 17px;margin-bottom: 3px;display: inline-block;"><?php echo ($vo["name"]); ?></span><br>
						
						<span class="shop-name" style="font-size: 16px;display: inline-block;margin-bottom: 4px;color: #777;">店家:<?php echo ($vo["refectory_name"]); ?></span><br>
						<span class="food-vip">￥<?php echo ($vo["vip_price"]); ?></span>
						<span style="color: #999;float: right;margin-right: 10px;font-size: 13px;">门店价<span style="text-decoration: line-through;">￥<?php echo ($vo["price"]); ?></span></span>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
		</div>
		
	</div>


	<script type="text/javascript">
		// $('form#search').submit(function(){
		// 	var query = $('#query').val();
		// 	alert(query);
		// });
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