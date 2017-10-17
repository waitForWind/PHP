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
	<input type="hidden" id="controller" value="/food/index.php/Home/Index">
	<input type="hidden" id="refectory_id" value="<?php echo ($food["refectory_id"]); ?>">
	<input type="hidden" id="user_id" value="<?php echo (session('user_id')); ?>">
	<input type="hidden" id="menu_id" value="<?php echo ($food["menu_id"]); ?>">
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
		<li><a href="/food/index.php/Home/Index/fen" style="color: orange;">粉类</a></li>
		<li><a href="/food/index.php/Home/Index/zhou">粥类</a></li>
		<li><a href="/food/index.php/Home/Index/fan">饭类</a></li>
		<li><a href="/food/index.php/Home/Index/mian">面类</a></li>
		<li><a href="/food/index.php/Home/Index/xiaochao">小炒</a></li>
	</ul>

	<div  id="order-main">
		<div class="return" style="margin: 0 0 20px 0;font-size: 16px;color: orange;"><<  返回</div>
		<h3 class="order-head"><?php echo ($food["refectory_name"]); ?>【<?php echo ($food["name"]); ?>】</h3>
		<p class="order-remark"><?php echo ($food["introduce"]); ?></p>
		<div class="order-body clearfix">
			<div class="order-border clearfix">
				<div class="order-img">
					<img src="/food/Public/img/<?php echo ($food["image"]); ?>"/>
				</div>
			</div>
			
			<table class="order-data">
				<tr>
					<td >网购价</td>
					<td >
						<div style="display: inline-block;width: 30px;"></div>
						<span style="color: #f76120;font-size: 18px;position: relative;top: 4px;">￥</span><span class="order-price" style="font-weight: bold;color:#f76120;font-size: 28px;vertical-align: middle;"><?php echo ($food["vip_price"]); ?></span>
						<span class="gray-price" style="position: relative;top: 4px;left: 20px;">门店价<span class="through">￥<?php echo ($food["price"]); ?></span></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<span>已售<span class="order-orange-text"></span></span>
					</td>
				</tr>
				<tr>
					<td>数量</td>
					<td>
						<div id="order-num" class="clearfix">
							<div class="subNum" style="width: 25%;">
								<span class="glyphicon glyphicon-minus"></span>
							</div>
							<div class="order-count" style="width: 50%;text-align: center;">1</div>
							<div class="addNum" style="width: 25%;">
								<span class="glyphicon glyphicon-plus"></span>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>合计</td>
					<td class="total">
						￥ <span id="total-price">12</span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<div class="btn btn-order" data-toggle="modal" data-target="#myModal">
							立即抢购
						</div>
						<a class="write-comment" data-toggle="modal" data-target="#myComment">我要评论</a>
					</td>
				</tr>
			</table>
		</div>
		<div id="comment">
			<h3>消费评价<span style="margin-left: 20px;display: inline-block;">(共<?php echo ($commentCount); ?>条评论)</span></h3>
			<hr>
			<?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="comment-box clearfix">
					<div class="comment-left" style="text-align: center;">
						<div class="comment-head">
							<img src="/food/Public/img/heada1.jpg" >
						</div>
						
						<span class="comment-name" style="margin-top: 10px;display: inline-block;">用户：<?php echo ($vo["nickname"]); ?></span>
					</div>
					<div class="comment-right">
						<p class="comment-date"><?php echo ($vo["comment_time"]); ?></p>
						<span class="comment-text"><?php echo ($vo["comment"]); ?></span>
					</div>
					
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div style="text-align: center;margin: 20px;" id="page">
				<?php echo ($show); ?>
			</div>
		</div>
	</div>
	

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">订购清单</h4>
	      </div>
	      <div class="modal-body">
	       	<table class="order-toggle">
	       		<tr>
	       			<td>店家:</td>
	       			<td><?php echo ($food["refectory_name"]); ?></td>
	       		</tr>
	       		<tr>
	       			<td>订购项目:</td>
	       			<td><?php echo ($food["name"]); ?></td>
	       		</tr>
	       		<tr>
	       			<td>数量:</td>
	       			<td id="count"></td>
	       		</tr>
	       		<!-- <tr>
	       			<td>总价:</td>
	       			<td id="total-price2"></td>
	       		</tr> -->
	       		<tr>
	       			<td>联系电话:</td>
	       			<td ><input type="text" id="tel" value="<?php echo ($address["tel"]); ?>"></td>
	       		</tr>
	       		<tr>
	       			<td>送货地址:</td>
	       			<td ><input type="text" id="address" value="<?php echo ($address["address"]); ?>" style="width: 300px;" /></td>
	       		</tr>
	       		<tr>
	       			<td>备注信息:</td>
	       			<td >
	       				<textarea rows="1" cols="40" id="remarks"></textarea>
	       			</td>
	       		</tr>

	       	</table>
	      </div>
	      <div class="modal-footer">
	      	<span style="display: inline-block;font-size: 18px;color: red;float: left;margin-left: 24px;font-weight: bold;">￥ <span id="total-price2"></span></span>
	        <button type="button" class="btn btn-primary" id="order-submit">提交订单</button>

	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="myComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">我的评论</h4>
	      </div>
	      <div class="modal-body">
	       	<textarea type="text" style="width: 100%;border:none;height: 100px;" id="commentText">
	       	</textarea>
	      </div>
	      <div class="modal-footer">
	      	
	        <button type="button" class="btn btn-primary" id="comment-submit">提交评论</button>

	      </div>
	    </div>
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