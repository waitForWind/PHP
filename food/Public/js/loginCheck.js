$(function(){
	//表单提交验证
	//获取当前控制器
	var controller = $('#controller').val();
	$('.loginform').submit(function(event){
		event.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		if(username=="" || password==""){
			alert("用户名或密码不能为空！");
			$("#user_name").focus();
			return false;
		}
		var url = controller+"/login";
		// alert(url);
		$.ajax({
			type: "POST",
			url: url,
			data: $(".loginform").serialize(),
			success: function(respond, status, xhr){
				
				if(respond['info']=='ok'){
					window.location.href = respond['redir'];  					
				}else{
					alert("用户名或密码不正确")
				}
			},
				
			error: function(xhr, textStatus, errorType){
				alert(textStatus + ":" + errorType);
			}
		});			

	});

	//用户名验证
	$("#username").blur(function(){
		var username = $.trim($(this).val());
		if(!username){
			$('#username').attr({
				"data-toggle": "tooltip",
				"data-placement": 'top',
				"title": "用户名不能为空"
			}).tooltip('show');
			return false ;
		}else{
			var url = controller+"/checkUser";
			$.ajax({
				type: "POST",
				url: url,
				data: {"username" : username},
				success: function(respond, status, xhr){

					if(respond['info'] == "ok"){
						$('username').removeAttr("data-toggle data-placement title").tooltip("destory");
					}else{
						$('#username').attr({
							"data-toggle": "tooltip",
							"data-placement": 'top',
							"title": respond['info']
						}).tooltip('show');
					}
				},
				error: function(xhr, textStatus, errorType){
					alert(textStatus + ":" + errorType);
				}

			});
		}

	});
	
});