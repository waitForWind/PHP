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
	
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">LOGO</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">餐厅</a></li>
	        <li id="index-user">
	        	<span class="glyphicon glyphicon-user"></span>
	        	<span class="username"><?php echo ($address["name"]); ?></span>
	        </li>
	      
	        
	        <li><a href="#">关于我们</a></li>
	     
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">搜索</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	      	 <li><a href="#" id="btn-login">我的订单</a></li>
	      	 <li><a href="#" id="btn-login">我的饭盒<span class="caret"></span> </a></li>
	      	 <li><a href="/food/index.php/Home/Index/exitLogin" id="btn-regist">退出</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	
	<div class="self-wrap">
		<a class="return"><span class="glyphicon glyphicon-arrow-left"></span><span style="position: relative;top: -2px;left: 3px;">返回</span></a>
		<input type="hidden" value="<?php echo ($address["address_id"]); ?>" id="address_id">
		<table class="addr-complete">
			<tbody>
				<tr>
					<td class="orange">修改地址信息</td>
					<td>均为必填项</td>
				</tr>
				<tr>
					<td>
						所在地区<span class="orange">*</span></td>
					<td>
						<textarea class="addr-right" rows="5" cols="19" id="address"/><?php echo ($address["address"]); ?></textarea>
					</td>
				</tr>
				<tr>
					<td>
						收货人姓名<span class="orange">*</span>
					</td>
					<td>
						<input type="text" name="name" id="name" value="<?php echo ($address["name"]); ?>">
					</td>
				</tr>
				<tr>
					<td>
						电话号码<span class="orange">*</span>
					</td>
					<td>
						<input type="text" name="tel" id="ddd" value="<?php echo ($address["tel"]); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<input type="checkbox" name="status" id="status" <?php if($address["status"] == 1): ?>checked = "checked"<?php endif; ?>>
						<span>设为默认收货地址</span>
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<span>
							<button type="button" class="btn btn-md btn-warning" id="modify">
								修改
							</button>
						</span>
					</td>
				</tr>
			</tbody>
		</table>
		
	</div>

<script type="text/javascript">
	$('.return').click(function(){
		window.history.back();
	});
	$('#modify').click(function(e){
		e.preventDefault();
		var url = "/food/index.php/Home/Index/modify";
		// alert(url);
		layer.confirm('您确定要修改吗？', {
		  btn: ['确定','取消'], //按钮
		}, function(index, layero){		
		  layer.close(index);
		  $.ajax({
            type: 'POST',
            url: "/food/index.php/Home/Index/modifyAddr",
            data: {
            	'address_id': $('#address_id').val(),
            	'address': $("#address").val(),
            	'name' : $('#name').val(),
            	'tel': $('#ddd').val(),
            	'status': $('#status').is(':checked'),
            	'user_id': <?php echo ($address["user_id"]); ?>,
            },
            success:
            function(respond, status, xhr){
            	console.log(respond);
 				if(respond == "success"){
 					layer.msg('修改成功', {icon: 1});
 					window.location.href = "/food/index.php/Home/Index/self";
 				} else{
 					alert("not success");
 				}              
            },
            error: 
            function(xhr, textStatus, errorType){
                alert(textStatus + ":" + errorType);
            }
        });	
		});	
	});

  	$('.delData').click(function(e){  
  		e.preventDefault();
  		var id = $(this).attr('data-ID');
  		// console.log(id);
  		layer.confirm('您确定要删除吗？', {
		  btn: ['确定','取消'], //按钮
		}, function(index, layero){
		layer.close(index); 
	  	var url = "/food/index.php/Home/Index/delData/id/" + id;
	  	
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

  	
</script>

</body>
</html>