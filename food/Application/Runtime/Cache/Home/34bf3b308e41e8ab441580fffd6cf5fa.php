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
	
<?php echo (session('user_id')); ?>
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
	      	 <li><a href="/food/index.php/Home/Index/index" id="btn-regist">返回首页</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	
	<div >
		<div style="width: 40%;margin:30px auto 0 auto;">
			<h3 class="title">用户注册</h3>
			<hr>
		</div>
		
		<form style="width: 30%;margin: 30px auto;">
		  <div class="form-group">
		    <label for="account">账号</label>
		    <input class="form-control" id="account" placeholder="账号" name="account">
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="nickname">昵称</label>
		    <input class="form-control" id="nickname" placeholder="昵称" name="nickname">
		    <span class="tips"></span>
		  </div>
		   <div class="form-group">
		    <label for="tel">手机号</label>
		    <input class="form-control" id="tel" placeholder="昵称" name="tel" maxlength="11">
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="password">密码</label>
		    <input type="password" class="form-control" id="password" placeholder="请输入密码" name="password" maxlength="16">
		    <span class="tips"></span>
		  </div>
		  <div class="form-group">
		    <label for="confirm">确认密码</label>
		    <input type="password" class="form-control" id="confirm" placeholder="再次输入密码" maxlength="16">
		    <span class="tips"></span>
		  </div>
		
		  <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px;border-radius: 0">注册
		  </button>
		</form>
	</div>

	<script type="text/javascript">
		// var url = "/food/index.php/Home/Index/regist";
		$("form").submit(function(e){
			e.preventDefault();

			
			// alert(url);
			layer.confirm('您确定要注册吗？', {
			  btn: ['确定','取消'], //按钮
			}, function(index, layero){		
			  layer.close(index);
			  if(check()){
			  	
			  	var url = "/food/index.php/Home/Index/regist"
			  	var data = $('form').serialize();
			  	$.ajax({
			  		type: "POST",
			  		url: url,
			  		data: data,
			  		success: function(respond, status, xhr){
			  			console.log(respond);
			  			if(respond == "success"){
			  				// console.log(respond);
			  				layer.msg('注册成功，即将登陆个人界面', {icon: 1});
			  				window.location.href = "/food/index.php/Home/Index/self";
			  			}else{
			  				layer.msg('注册失败', {icon: 2});
			  			}
			  			
			  			
			  		},

			  		error: function(xhr, textStatus, errorType){
						alert(textStatus + ":" + errorType);
					} 
			  	});
			  }else{
			  	layer.msg("请检查填写的信息格式是否正确！", {icon: 2});
			  }
			});
			
		});
		var public = "/food/Public";
		var accountFlag = nicknameFlag = passwordFlag = confirmFlag = telFlag =false;
			//用户名验证
			$("#account").blur(function(){
				// alert("hello");
				var account = $.trim($(this).val());
				// console.log(account);
				if(!account){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  用户名不能为空"+"</span>";
					$('#account').next('.tips').html(html);
					return false ;			
				}else{
					var url = "/food/index.php/Home/Index/checkAccount";
					// alert(url)
					$.ajax({
						type: "POST",
						url: url,
						data: {"account" : account},
						success: function(respond, status, xhr){
							if(respond['info'] == "success"){
								var html = '<img src="/food/Public/img/success.png">';
								$('#account').next('.tips').html(html);
								accountFlag = true;
							}else{
								var html = '<img src="/food/Public/img/err.png">' +"  用户名已存在" ;
								$('#account').next('.tips').html(html);
							}
						},
						error: function(xhr, textStatus, errorType){
							alert(textStatus + ":" + errorType);
						}

					});
				}

			});


			$("#nickname").blur(function(){
				var nickname = $.trim($(this).val());
				if(!nickname){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  昵称不能为空"+"</span>";
					$('#nickname').next('.tips').html(html);
					return false ;	
				}else{
					var html = '<img src="' + public +"/img/success.png"+'">';
					$('#nickname').next('.tips').html(html);
					nicknameFlag = true;
				}

			});

			$("#password").blur(function(){
				var password = $.trim($(this).val());
				if(!password){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  密码不能为空"+"</span>";
					$('#password').next('.tips').html(html);
					return false ;	
				}else{
					if(/^\S{6,17}$/.test(password) == false){
						var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  密码格式不正确!长度在6-18之间,不能有空格"+"</span>";
						$('#password').next('.tips').html(html);
						return false;
					}
					var html = '<img src="' + public +"/img/success.png"+'">';
					$('#password').next('.tips').html(html);
					passwordFlag = true;
				}

			});

			$("#confirm").blur(function(){
				var confirm = $.trim($(this).val());
				var password = $.trim($('#password').val());
				if(password == false){
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'> 确认密码不能为空"+"</span>";
					$('#confirm').next('.tips').html(html);
					return false ;	
				}else{
					if(confirm != password){
						var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>两次密码输入不一致</span>";
						$('#confirm').next('.tips').html(html);
						return false;
					}
					var html = '<img src="' + public +"/img/success.png"+'">';
						$('#confirm').next('.tips').html(html);
					confirmFlag = true;
				}

			});

			$("#tel").blur(function(){
				var tel = $.trim($(this).val());
				
				if(!tel){
					// alert("hello");
					var html = '<img src="' + public +"/img/err.png"+'">' + "  <span color='red'>  电话号码不能为空"+"</span>";
					$('#tel').next('.tips').html(html);
					return false ;	
				}else{
					var url = "/food/index.php/Home/Index/checkTel";
					$.ajax({
						type: "POST",
						url: url,
						data: {"tel" : tel},
						success: function(respond, status, xhr){
							console.log(respond);
							if(respond['info'] == "ok"){
								var html = '<img src="' + public +"/img/success.png"+'">';
								$('#tel').next('.tips').html(html);
								telFlag = true;
							}else{
								// alert("hhhh");
								var html = '<img src="' + public +"/img/err.png"+'">' +"  " + respond['info'];
								$('#tel').next('.tips').html(html);
							}

						},
						error: function(xhr, textStatus, errorType){
							alert(textStatus + ":" + errorType);
						}

					});
				}

			});

			function check(){
				if(!accountFlag){
					$('#account').focus();
					return false;
				}
				if(!nicknameFlag){
					$('#username').focus();
					return false;
				}
				
				if(!passwordFlag){
					$('#password').focus();
					return false;
				}
				if(!confirmFlag){
					$('#confirm').focus();
					return false;
				}
				if(!telFlag){
					$('#tel').focus();
					return false;
				}
				return true;
			}

	</script>

</body>
</html>