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
	<div class="self-wrap">
		<img src="/food/Public/img/head.jpg" alt="" class="img-circle img-thumbnail Avatar">
		<div id="self-info">
			<h3 id="nickname"><?php echo ($data["nickname"]); ?></h3>
			<p id="account"><span>账号：</span> <?php echo ($data["account"]); ?></p>
			<p id="tel"><span>电话：</span> <?php echo ($data["tel"]); ?></p>
			<div class="self-mod"  data-toggle="modal" data-target="#myModal">修改用户信息</div>
		</div>
	</div>
	<div class="self-wrap">
		<table class="addr-complete">
			<tbody>
				<tr>
					<td class="orange">新增收货地址</td>
					<td>均为必填项</td>
				</tr>
				<tr>
					<td>
						所在地区<span class="orange">*</span></td>
					<td>
						<textarea class="addr-right" rows="5" cols="19" id="address"/></textarea>
					</td>
				</tr>
				<tr>
					<td>
						收货人姓名<span class="orange">*</span>
					</td>
					<td>
						<input type="text" name="name" id="name">
					</td>
				</tr>
				<tr>
					<td>
						电话号码<span class="orange">*</span>
					</td>
					<td>
						<input type="text" name="tel" id="ddd"/>
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<input type="checkbox" name="status" id="status" value="1">
						<span>设为默认收货地址</span>
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<span>
							<button type="button" class="btn btn-md btn-warning" id="add">
								保存
							</button>
						</span>
					</td>
				</tr>
			</tbody>
		</table>
		<table id="addr-info">
			<caption class="text-left orange" style="font-weight: bold;font-size: 14px;">已保存1条地址</caption>
			<thead>
				<tr>
					<td>收货人</td>
					<td>详细地址</td>
					<td>手机号码</td>
					<td>状态</td>
					<td style="padding-left: 40px;">操作</td>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($address)): foreach($address as $key=>$vo): ?><tr style="height: 50px;">
						<td><?php echo ($vo["name"]); ?></td>
						<td><?php echo ($vo["address"]); ?></td>
						<td><?php echo ($vo["tel"]); ?></td>
						<td>
							<?php if($vo["status"] == 1): ?>默认地址
								<else><?php endif; ?>
							<!-- <?php echo ($vo["status"]); ?> -->
						</td>
						<td>
							<a class="delData" data-ID="<?php echo ($vo["address_id"]); ?>">删除</a>
							<span style="display: inline-block;height: 0;width: 30px;"></span>
							<a href="/food/index.php/Home/Index/showModify/id/<?php echo ($vo["address_id"]); ?>">修改</a>
							<span style="display: inline-block;height: 0;width: 30px;"></span>
							<?php if($vo["status"] == 0): ?><else><div class="btn-warning set-default" style="display:inline-block;padding: 3px;font-size: 14px!important;cursor: pointer;" data-ID="<?php echo ($vo["address_id"]); ?>">设为默认</div><?php endif; ?>
						</td>
					</tr><?php endforeach; endif; ?>
					
				
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">修改用户信息</h4>
	      </div>
	      <div class="modal-body">
	      	<div>
	      		<span style="display: inline-block;width: 80px;text-align: right;">昵称：</span><input type="text" class="mod-nickname" value="<?php echo ($data["nickname"]); ?>">
	      	</div>
	      	<div style="height: 20px;"></div>
	       <div>
	       		<span style="display: inline-block;width: 80px;text-align: right;">电话号码：</span><input type="text" class="mod-tel" value="<?php echo ($data["tel"]); ?>">
	       </div>
	       	
	      </div>
	      <div class="modal-footer">
	      	
	        <button type="button" class="btn btn-primary" id="self-submit">提交修改</button>

	      </div>
	    </div>
	  </div>
	</div>
<script type="text/javascript">
// console.log(<?php echo ($data["address"]); ?>);
	$('#add').click(function(){
		$.ajax({
            type: 'POST',
            url: "/food/index.php/Home/Index/addAddr",
            data: {
            	'address': $("#address").val(),
            	'name' : $('#name').val(),
            	'tel': $('#ddd').val(),
            	'status': $('#status').is(':checked'),
            	'user_id': <?php echo ($data["user_id"]); ?>,
            },
            success:
            function(respond, status, xhr){
            	console.log(respond);
 				if(respond == "success"){
 					layer.msg('修改成功', {icon: 1});
 					window.location.reload();
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

  	$('#self-submit').click(function(){

  		layer.confirm('您确定要修改吗？', {
		  btn: ['确定','取消'], //按钮
		}, function(index, layero){
		layer.close(index); 
	  	var url = "/food/index.php/Home/Index/modUserInfo";
	  	
	  	$.ajax({
	  		type: "POST",
	  		url: url,
	  		data:{
	  			tel: $('.mod-tel').val(),
	  			nickname: $('.mod-nickname').val(),
	  		},
	  		success: function(respond, status, xhr){
	  			if(respond == "success"){
	  				layer.msg('修改成功', {icon: 1});
	  			}else{
	  				layer.msg('修改失败', {icon: 2});
	  			}
	  			window.location.reload();
	  		},

	  		error: function(xhr, textStatus, errorType){
				alert(textStatus + ":" + errorType);
			} 
	  	});
		 
		});
  	});

  	$('.set-default').click(function(){
  		var id = $(this).attr('data-ID');
  		// console.log(id);
  		layer.confirm('您确定要设为默认吗？', {
		  btn: ['确定','取消'], //按钮
		}, function(index, layero){
		layer.close(index); 
	  	var url = "/food/index.php/Home/Index/setDefault/id/" + id;
	  	
	  	$.ajax({
	  		type: "GET",
	  		url: url,
	  		success: function(respond, status, xhr){
	  			// console.log(respond);
	  			if(respond == "success"){
	  				layer.msg('设置成功', {icon: 1});
	  			}else{
	  				layer.msg('设置失败', {icon: 2});
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