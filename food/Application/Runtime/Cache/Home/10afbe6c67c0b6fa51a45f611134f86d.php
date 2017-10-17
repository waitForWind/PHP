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
			<div class="fanhe-img">
				<img src="/food/Public/img/<?php echo ($vo["image"]); ?>"/>
			</div>
			<div class="fanhe-intro">
				<h4>菜谱名称：<?php echo ($vo["name"]); ?></h4>
				<p>简介：<?php echo ($vo["introduce"]); ?></p>
				<p>价格：￥<span id="single"><?php echo ($vo["vip_price"]); ?></span></p>
				<p>数量：<span id="num"><?php echo ($vo["num"]); ?></span></p>
				<p style="color: red;">总价：￥<?php echo ($vo["total_price"]); ?><span class="total"></span></p>
				<div class="fanhe-btn-group" style="float: right;margin-left: 500px;margin-top: -28px;">
					<a class="btn btn-danger btn-md qs" data-ID="<?php echo ($vo["order_id"]); ?>">签收订单</a>
					<a class="btn btn-success btn-md td" data-ID="<?php echo ($vo["order_id"]); ?>">退单</a>
				</div>
			</div>
			
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	
<script type="text/javascript">
	$('.td').click(function(e){  
		// alert("hello");
			e.preventDefault();
			var id = $(this).attr('data-ID');
			// console.log(id);
			layer.confirm('您确定要退单吗？', {
		  btn: ['确定','取消'], //按钮
		}, function(index, layero){
		layer.close(index); 
	  	var url = "/food/index.php/Home/Index/delOrder/id/" + id;
	  	
	  	$.ajax({
	  		type: "GET",
	  		url: url,
	  		success: function(respond, status, xhr){
	  			if(respond == "删除成功"){
	  				layer.msg('删除成功', {icon: 1});
	  			}else{
	  				layer.msg('删除失败', {icon: 2});
	  			}
	  			window.location.reload();
	  		},

	  		error: function(xhr, textStatus, errorType){
				alert(textStatus + ":" + errorType);
			} 
	  	});
		 
		});
  	});

  	$('.qs').click(function(e){  
		// alert("hello");
			e.preventDefault();
			var id = $(this).attr('data-ID');
			// console.log(id);
			layer.confirm('您确定要签收订单吗？', {
		  btn: ['确定','取消'], //按钮
		}, function(index, layero){
		layer.close(index); 
	  	var url = "/food/index.php/Home/Index/qianshou/id/" + id;
	  	
	  	$.ajax({
	  		type: "GET",
	  		url: url,
	  		success: function(respond, status, xhr){
	  			console.log(respond);
	  			if(respond == "success"){
	  				layer.msg('签收成功,可以在吃货历史当中查看！', {
	  					icon: 1,
	  					time: 4000
	  				});
	  			}else{
	  				layer.msg('签收失败', {icon: 2});
	  			}
	  			window.location.reload();

	  		},

	  		error: function(xhr, textStatus, errorType){
				alert(textStatus + ":" + errorType);
			} 
	  	});
		 
		});
  	});
</script>

</body>
</html>