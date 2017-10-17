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
</style>
	<div class="container center-block" style="margin-top: 40px;">
		<legend class="">输入商户信息(以下所有字段都必须填写！)</legend>
		<form class="form-horizontal" role="form"  enctype="multipart/form-data" id="addMembersForm">
		  <div class="form-group">
		    <label for="foodname" class="col-xs-2 control-label" >商户id</label>
		    <div class="col-xs-4">
		      <input type="text" class="form-control" name="refectory_id" id="refectory_id" placeholder="请输入商户id(由数字组成)">
		    </div>
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="username" class="col-xs-2 control-label">商户账号(邮箱)</label>
		    <div class="col-xs-4">
		      <input type="email" class="form-control" name="username" id="username" placeholder="请输入邮箱地址" >
		    </div>
		    <span class="tips"></span>
		  </div>
		   <div class="form-group">
		    <label for="refectory_name" class="col-xs-2 control-label">店名</label>
		    <div class="col-xs-4">
		      <input type="text" class="form-control" name="refectory_name" id="refectory_name" placeholder="请输入店名(最多不超过16位字符)" maxlength="16">
		    </div>
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-xs-2 control-label">请输入密码</label>
		    <div class="col-xs-4">
		      <input type="password" class="form-control" name="password" id="password" placeholder="长度在6-18之间,不能有空格">
		    </div>
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="m_confirm" class="col-xs-2 control-label">请确认密码</label>
		    <div class="col-xs-4">
		      <input type="password" class="form-control" name="m_confirm" id="m_confirm" placeholder="请再次输入密码" maxlength="16">
		    </div>
		    <span class="tips"></span>
		  </div>

	   
	     <div class="form-group">
		    <label for="tel" class="col-xs-2 control-label">请输入电话号码</label>
		    <div class="col-xs-4">
		      <input type="tel" class="form-control" name="tel" id="tel" placeholder="请输入电话号码" maxlength="11">
		    </div>
		    <span class="tips"></span>
		 </div>


		<div class="form-group">
		    <div class="col-xs-offset-2 col-xs-4">
		      <button type="submit" class="btn btn-primary" >提交</button>
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
			var refectory_idFlag = usernameFlag = refectory_nameFlag = passwordFlag = m_confirmFlag = telFlag =false;
			//用户名验证
			$("#refectory_id").blur(function(){
				var mark = 0;
				var refectory_id = $.trim($(this).val());
				// console.log(refectory_id);
				if(!refectory_id){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  用户名不能为空"+"</span>";
					$('#refectory_id').parent().siblings('.tips').html(html);
					return false ;			
				}else{
					var url = controller+"/checkUser";
					// alert(url)
					$.ajax({
						type: "POST",
						url: url,
						data: {"refectory_id" : refectory_id},
						success: function(respond, status, xhr){
							if(respond['info'] == "ok"){
								var html = '<img src="' + public +"/img/success.png"+'">';
								$('#refectory_id').parent().siblings('.tips').html(html);
								refectory_idFlag = true;
							}else{
								var html = '<img src="' + public +"/img/err.png"+'">' +"  " + respond['info'];
								$('#refectory_id').parent().siblings('.tips').html(html);
							}
						},
						error: function(xhr, textStatus, errorType){
							alert(textStatus + ":" + errorType);
						}

					});
				}

			});

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
					// alert(url)
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

			$("#m_confirm").blur(function(){
				var m_confirm = $.trim($(this).val());
				var password = $.trim($('#password').val());
				if(password == false){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  密码不能为空"+"</span>";
					$('#m_confirm').parent().siblings('.tips').html(html);
					return false ;	
				}else{
					if(m_confirm != password){
						var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>两次密码输入不一致</span>";
						$('#m_confirm').parent().siblings('.tips').html(html);
						return false;
					}
					var html = '<img src="' + public +"/img/success.png"+'">';
					$('#m_confirm').parent().siblings('.tips').html(html);
					m_confirmFlag = true;
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
					// alert(url)
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

			});

			$('#addMembersForm').submit(function(e){
				e.preventDefault();
				var flag = false;
				layer.confirm('您确定要提交吗？', {
				  btn: ['确定','取消'], //按钮
				}, function(index, layero){
					// alert("hello");
					
				  flag = check();
				  layer.close(index);
				  if(flag == true){
				  	var url = controller+"/addM";
				  	// var url = controller+"/checkTel";
				  	// alert(url);
				  	$.ajax({
				  		type: "POST",
				  		url: url,
				  		data: $("#addMembersForm").serialize(),
				  		success: function(respond, status, xhr){
				  			if(respond == "添加成功"){
				  				layer.msg('添加成功', {icon: 1});
				  			}else{
				  				layer.msg('添加失败', {icon: 2});
				  			}
				  			
				  			console.log(respond);
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
				if(!refectory_idFlag){
					$('#refectory_id').focus();
					return false;
				}
				if(!usernameFlag){
					$('#username').focus();
					return false;
				}
				if(!refectory_nameFlag){
					$('#refectory_name').focus();
					return false;
				}
				if(!passwordFlag){
					$('#password').focus();
					return false;
				}
				if(!m_confirmFlag){
					$('#m_confirm').focus();
					return false;
				}
				if(!telFlag){
					$('#tel').focus();
					return false;
				}
				return true;
			}
		});
	</script>

</body>
</html>