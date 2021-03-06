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
	<div class="container">
		<div class="row">
			<img src="/food/Public/img/logo.png"/ class="col-md-2 col-md-offset-2" id="logo">
			<form class="form-inline col-md-6 col-md-offset-1" method="post" id="search" action="/food/index.php/Home/Index/query">
			  <div class="form-group form-group-md">
			    <div class="input-group" style="position: relative;top: 10px;width: 500px; ">
			      <input type="text" class="form-control" id="query" placeholder="请输入搜索内容" style="border-radius: 0;" name="query">
			      <div class="input-group-addon" style="width: 80px;background: #FF9700;color: white;border-radius: 0;border: none;cursor: pointer;">搜索</div>
			    </div>
			  </div>
			</form>
		</div>
	</div>
	<div class="row clearfix" style="margin-right: 0;margin-left: 0;">
		<nav class="navbar navbar-inverse" style="margin: 0;background: #452F65;border-radius: 0;">
		  <div class="container-fluid">
		    <div class="collapse navbar-collapse" style="padding:0;">
		      <ul class="nav navbar-nav " style="color: white;position:relative;left: 80px;" id="nav">
		        <li><a href="#">首页</a></li>
		        <li><a href="/food/index.php/Home/Index/fen">粉类</a></li>
		        <li><a href="/food/index.php/Home/Index/zhou">粥类</a></li>
		        <li><a href="/food/index.php/Home/Index/fan">饭类</a></li>
		        <li><a href="/food/index.php/Home/Index/mian">面食</a></li>
		        <li><a href="/food/index.php/Home/Index/xiaochao">小炒</a></li>
		       
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div id="myCarousel" class="carousel slide" style="float:left;width:940px;">
		    <!-- 轮播（Carousel）指标 -->
		    <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>   
		    <!-- 轮播（Carousel）项目 -->
		    <div class="carousel-inner">
		        <div class="item active">
		            <img src="/food/Public/img/food001.jpg" alt="First slide">
		        </div>
		        <div class="item">
		            <img src="/food/Public/img/food002.jpg" alt="Second slide">
		        </div>
		        <div class="item">
		            <img src="/food/Public/img/food003.jpg" alt="Third slide">
		        </div>
		    </div>
		    <!-- 轮播（Carousel）导航 -->
		    <a class="carousel-control left" href="#myCarousel" 
		        data-slide="prev">&lsaquo;
		    </a>
		    <a class="carousel-control right" href="#myCarousel" 
		        data-slide="next">&rsaquo;
		    </a>
		</div>
		<div class="col-md-4" style="background: #303030;float: right;padding: 0 0 0 30px;margin: 0;position: relative;color: #ddd;height: 400px;width: 409px;">
				<ul id="myTab" class="nav nav-tabs">
					<li class="active">
						<a href="#hot" data-toggle="tab">热门美食</a>
					</li>
					<li><a href="#new" data-toggle="tab">最新菜谱</a></li>
					<li>
						<a href="#gonggao" data-toggle="tab">公告栏</a>	
					</li>
				</ul>
				<div id="myTabContent" class="tab-content" style="padding-top: 20px;">
					<div class="tab-pane fade in active" id="hot">
						<ul class="menu2" style="margin-top: 0px;padding-left: 10px;">
							<li><span class="num">1</span><a href="#">桂林米粉</a></li>
							<li><span class="num">2</span><a href="#">蛋炒粉</a></li>
							<li><span class="num">3</span><a href="#">红烧排骨</a></li>
							<li><span class="num">4</span><a href="#">红烧排骨</a></li>
							<li><span class="num">5</span><a href="#">红烧排骨</a></li>
							<li><span class="num">6</span><a href="#">红烧排骨</a></li>
							<li><span class="num">7</span><a href="#">桂林米粉</a></li>
							<li><span class="num">8</span><a href="#">蛋炒粉</a></li>
							<li><span class="num">9</span><a href="#">红烧排骨</a></li>
						</ul>
					</div>
					<div class="tab-pane fade" id="new">
						<ul class="menu2" style="margin-top: 0px;padding-left: 10px;">
							<li><span class="num">1</span><a href="#">java</a></li>
							<li><span class="num">2</span><a href="#">c++</a></li>
							<li><span class="num">3</span><a href="#">js</a></li>
							<li><span class="num">4</span><a href="#">php</a></li>
							<li><span class="num">5</span><a href="#">phyon</a></li>
							<li><span class="num">6</span><a href="#">sqlsever</a></li>
							<li><span class="num">7</span><a href="#">ajax</a></li>
							<li><span class="num">8</span><a href="#">bootstrap</a></li>
							<li><span class="num">9</span><a href="#">oracal</a></li>
						</ul>
					</div>
					<div class="tab-pane fade" id="gonggao">
						今天推出了新活动哦，你还不赶快来参加！
					</div>
					
				</div>
		</div>
	</div>
	<div class="row">
		<div style="width: 92%;margin: 30px auto;" id="tuijian">
			<h3 class="index-title">推荐菜谱</h3>
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