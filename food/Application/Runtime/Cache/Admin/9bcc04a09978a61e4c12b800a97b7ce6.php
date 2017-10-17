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
	.form-group{
		margin-top: 30px;
	}
	.btn{
		height: 30px!important;
		line-height: 30px!important;
		margin-right: 20px!important;
		padding: 0 14px!important;
	}
	.fanhui:hover{
		color: cyan;
	}
</style>
<div class="fanhui text-primary" style="font-size: 16px;margin-top: 10px;cursor: pointer;">
	<<返回
</div>
	<div class="container center-block" style="margin-top: 40px;">
		<legend class="">修改商户信息</legend>
		<form class="form-horizontal" role="form"  enctype="multipart/form-data" id="addMembersForm">
		  <div class="form-group">
		    <label for="foodname" class="col-xs-2 control-label" >商户id</label>
		    <div class="col-xs-4">
		      <input type="text" class="form-control" name="refectory_id" id="refectory_id" value="<?php echo ($data["refectory_id"]); ?>" readonly>
		    </div>
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="username" class="col-xs-2 control-label">商户账号(邮箱)</label>
		    <div class="col-xs-4">
		      <input type="email" class="form-control" name="username" id="username" value="<?php echo ($data["username"]); ?>" >
		    </div>
		    <span class="tips"></span>
		  </div>
		   <div class="form-group">
		    <label for="refectory_name" class="col-xs-2 control-label">店名</label>
		    <div class="col-xs-4">
		      <input type="text" class="form-control" name="refectory_name" id="refectory_name" maxlength="16" value="<?php echo ($data["refectory_name"]); ?>">
		    </div>
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-xs-2 control-label" >密码</label>
		    <div class="col-xs-4">
		      <input  class="form-control" name="password" id="password" value="<?php echo ($data["password"]); ?>">
		    </div>
		    <span class="tips"></span>
		  </div>
		 

	   
	     <div class="form-group">
		    <label for="tel" class="col-xs-2 control-label">请输入电话号码</label>
		    <div class="col-xs-4">
		      <input type="tel" class="form-control" name="tel" id="tel" maxlength="11" value="<?php echo ($data["tel"]); ?>">
		    </div>
		    <span class="tips"></span>
		 </div>


		<div class="form-group">
		    <div class="col-xs-offset-2 col-xs-4">
		      <button type="submit" class="btn btn-primary" id="modify">修改</button>
		      <div class="btn btn-primary" id="reset">重置</div>
		    </div>
		  </div>
		  <input type="hidden" id="controller" value="/food/admin.php/Admin/Admin">
		  <input type="hidden" id="public" value="/food/Public">
		</form>
	</div>
	<script type="text/javascript">
		$(function(){
			var controller = $('#controller').val();
			var public = $('#public').val();
			var usernameFlag = refectory_nameFlag = passwordFlag =telFlag =false;
			//用户名验证
			

			//记录原值
			var copyusername = $('#username').val();
			var copytel = $('#tel').val();
		

			$("#username").blur(function(){
				var username = $.trim($(this).val());
				// console.log(username);
				// alert(username);
				if(!username){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  用户名不能为空"+"</span>";
					$('#username').parent().siblings('.tips').html(html);
					return false ;	
				}else{
					var url = controller+"/checkEmail";
					if(username == copyusername){
						var html = '<img src="' + public +"/img/success.png"+'">';
						$('#username').parent().siblings('.tips').html(html);
						usernameFlag = true;
					}else{
						$.ajax({
							type: "POST",
							url: url,
							data: {"username" : username},
							success: function(respond, status, xhr){
								if(respond['info'] == "ok"){
									var html = '<img src="' + public +"/img/success.png"+'">';
									$('#username').parent().siblings('.tips').html(html);
									usernameFlag = true;
								}else{
									var html = '<img src="' + public +"/img/err.png"+'">' +"  " + respond['info'];
									$('#username').parent().siblings('.tips').html(html);
								}
							},
							error: function(xhr, textStatus, errorType){
								alert(textStatus + ":" + errorType);
							}

						});
					}
					
				}

			});

			$("#refectory_name").blur(function(){
				var refectory_name = $.trim($(this).val());
				if(!refectory_name){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  店名不能为空"+"</span>";
					$('#refectory_name').parent().siblings('.tips').html(html);
					return false ;	
				}else{
					var html = '<img src="' + public +"/img/success.png"+'">';
					$('#refectory_name').parent().siblings('.tips').html(html);
					refectory_nameFlag = true;
				}

			});

			$("#password").blur(function(){
				var password = $.trim($(this).val());
				if(!password){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  密码不能为空"+"</span>";
					$('#password').parent().siblings('.tips').html(html);
					return false ;	
				}else{
					if(/^\S{6,17}$/.test(password) == false){
						var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  密码格式不正确!长度在6-18之间,不能有空格"+"</span>";
						$('#password').parent().siblings('.tips').html(html);
						return false;
					}
					var html = '<img src="' + public +"/img/success.png"+'">';
					$('#password').parent().siblings('.tips').html(html);
					passwordFlag = true;
				}

			});

			

			$("#tel").blur(function(){
				var tel = $.trim($(this).val());
				// console.log(tel);
				// alert(tel);
				if(!tel){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  电话号码不能为空"+"</span>";
					$('#tel').parent().siblings('.tips').html(html);
					return false ;	
				}else{
					var url = controller+"/checkTel";
					if (tel == copytel) {
						var html = '<img src="' + public +"/img/success.png"+'">';
						$('#tel').parent().siblings('.tips').html(html);
						telFlag = true;
					} else {
						$.ajax({
							type: "POST",
							url: url,
							data: {"tel" : tel},
							success: function(respond, status, xhr){
								if(respond['info'] == "ok"){
									var html = '<img src="' + public +"/img/success.png"+'">';
									$('#tel').parent().siblings('.tips').html(html);
									telFlag = true;
								}else{
									var html = '<img src="' + public +"/img/err.png"+'">' +"  " + respond['info'];
									$('#tel').parent().siblings('.tips').html(html);
								}

							},
							error: function(xhr, textStatus, errorType){
								alert(textStatus + ":" + errorType);
							}

						});
					}
					
				}

			});

			$('#addMembersForm').submit(function(e){
				e.preventDefault();
				var flag = false;
				layer.confirm('您确定要修改吗？', {
				  btn: ['确定','取消'], //按钮
				}, function(index, layero){
					// alert("hello");
					
				  flag = check();
				  layer.close(index);
				  if(flag == true){
				  	var url = controller+"/update";
				  	// var url = controller+"/checkTel";
				  	// alert(url);
				  	$.ajax({
				  		type: "POST",
				  		url: url,
				  		data: $("#addMembersForm").serialize(),
				  		success: function(respond, status, xhr){
				  			// console.log(respond);
				  			if(respond == "修改成功"){
				  				layer.msg('修改成功', {icon: 1});
				  			}else{
				  				layer.msg('修改失败', {icon: 2});
				  			}
				  			
				  			window.location.href = "/food/admin.php/Admin/Admin/lookupMembers";
				  		},

				  		error: function(xhr, textStatus, errorType){
							alert(textStatus + ":" + errorType);
						} 
				  	});
				  }else{
				  	layer.msg("提交失败,请检查填写的信息格式是否正确！", {icon: 2});
				  }
				});
				

			});

			function check(){
				var username = $.trim($('#username').val());
				// console.log(username);
				// alert(username);
				if(!username){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  用户名不能为空"+"</span>";
					$('#username').parent().siblings('.tips').html(html);
					$('#username').focus();
					return false ;	
				}else{
					var url = controller+"/checkEmail";
					if(username == copyusername){
						var html = '<img src="' + public +"/img/success.png"+'">';
						$('#username').parent().siblings('.tips').html(html);
					}else{
						$.ajax({
							type: "POST",
							url: url,
							data: {"username" : username},
							success: function(respond, status, xhr){
								if(respond['info'] == "ok"){
									var html = '<img src="' + public +"/img/success.png"+'">';
									$('#username').parent().siblings('.tips').html(html);
									// usernameFlag = true;
								}else{
									var html = '<img src="' + public +"/img/err.png"+'">' +"  " + respond['info'];
									$('#username').parent().siblings('.tips').html(html);
									$('#username').focus();
									return false ;	
								}
							},
							error: function(xhr, textStatus, errorType){
								alert(textStatus + ":" + errorType);
							}

						});
					}	
				}

				var refectory_name = $.trim($('#refectory_name').val());
				if(!refectory_name){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  店名不能为空"+"</span>";
					$('#refectory_name').parent().siblings('.tips').html(html);
					$('#refectory_name').focus();
					return false ;	
				}else{
					var html = '<img src="' + public +"/img/success.png"+'">';
					$('#refectory_name').parent().siblings('.tips').html(html);
					// refectory_nameFlag = true;
				}

				var password = $.trim($('#password').val());
				if(!password){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  密码不能为空"+"</span>";
					$('#password').parent().siblings('.tips').html(html);
					$('#password').focus();
					return false ;	
				}else{
					if(/^\S{6,17}$/.test(password) == false){
						var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  密码格式不正确!长度在6-18之间,不能有空格"+"</span>";
						$('#password').parent().siblings('.tips').html(html);
						$('#password').focus();
						return false;
					}
					var html = '<img src="' + public +"/img/success.png"+'">';
					$('#password').parent().siblings('.tips').html(html);
					// passwordFlag = true;
				}

				var tel = $.trim($('#tel').val());
				// console.log(tel);
				// alert(tel);
				if(!tel){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  电话号码不能为空"+"</span>";
					$('#tel').parent().siblings('.tips').html(html);
					$('#tel').focus();
					return false ;	
				}else{
					var url = controller+"/checkTel";
					if (tel == copytel) {
						var html = '<img src="' + public +"/img/success.png"+'">';
						$('#tel').parent().siblings('.tips').html(html);
					} else {
						$.ajax({
							type: "POST",
							url: url,
							data: {"tel" : tel},
							success: function(respond, status, xhr){
								if(respond['info'] == "ok"){
									var html = '<img src="' + public +"/img/success.png"+'">';
									$('#tel').parent().siblings('.tips').html(html);
								}else{
									var html = '<img src="' + public +"/img/err.png"+'">' +"  " + respond['info'];
									$('#tel').parent().siblings('.tips').html(html);
									$('#tel').focus()
									return false;
								}

							},
							error: function(xhr, textStatus, errorType){
								alert(textStatus + ":" + errorType);
							}

						});
					}
					
				}
				return true;

			}

			$('#reset').click(function(){
				$('input').not('#refectory_id').attr('value','');
			});

			$('.fanhui').click(function(){
				window.location.href = "/food/admin.php/Admin/Admin/lookupMembers";
			})
		});
	</script>

</body>
</html>