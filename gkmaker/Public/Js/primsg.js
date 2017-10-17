/****
 * design by  陈洪杨  2014.8.22
 * 功能：个人中心的私信回复及删除功能的ajax响应
 * 不需要function加载  因为都是函数
    注意：当js要传参数是可以写成函数！！！通过形参传输！！！！！
 * 
********/	

/*
	//留言方法
	function add_content(){

		var content=$("#content").val();
		
		//alert(content);

		$.post("/index.php/my/message/add_message", {"content":content},

				function (data){
								//alert(data.succ);

								if(data.succ ==1){
									window.location.reload();
									
								}else{
										alert(data.msg);
									}
							
					},"json");
		
		
	}*/

//删除留言方法   ajax删除。。同时删除其回复。。。
function delete_one(id){
		if(window.confirm("该操作将删除私信及其回复\n确定删除吗？")){
		//传个id值过去就删除了,用get或者post都行
				$.get("./ajax/delect_ajax.php",{"id": id},
				  function(data){
					 //alert(data);
					  window.location.reload();
					 // alert(data);
/*					if(data.succ==1){
						
						window.location.reload();
		    	}else
		    		{
			    		alert(data.msg);
		    		}
*/		   
				  });
		}

	}

//回复留言方法

function reply_content(id){

	$("#rep_"+id).css("display","block");
	//$("#rep_").css("display","none");  同级的隐藏啊
	
}

//回复留言的取消方法

function reply_cancel(id){

	$("#rep_"+id).css("display","none");
	
}


//回复留言的回复方法
///id是私信的id
//用的jquery 的ajax方法
function reply_reply(id){


	var content=$("#reply_content_reply_"+id).val();
	var receiver=$("#receiver").val();
	//输出测试下。。
	//alert(content+"\n"+author+"\n"+receiver);
	
	$.post("./ajax/reply_guestbook.php", {"content":content,"id":id,"receiver":receiver},

			function (data){
				//响应。。
				//alert(data);
		//加载好还是不加载好呢。。
				window.location.reload();
				//$("#reply_"+id).html(data);
				
				//只用响应成功才显示，不成功什么都不显示。。。
							//alert(data.succ);
				//alert("aaaaaaaaaaa");
/*							if(data.succ ==1){
								//成功
								alert("aaaaaaa");
								window.location.reload();//重新载入。。相当于刷新，ajax还一个毛用啊。。。。。
								
							}else{
									alert(data.msg);
								}
*/						
				});

	$("#rep_"+id).css("display","none");//隐藏输入框。。。。
	var content=$("#reply_content_reply_"+id).val("");//回复完成。。content值置空
}

//删除留言的回复内容,只删除当前的回复，不删除原留言内容

function delete_reply_content(id){

	if(window.confirm("确定删除吗？")){

	$.get("./ajax/delete_reply_content.php", {"id":id},

			function (data){
			window.location.reload();//重新加载。。相当于刷新
					//alert(data);
							//alert(data.succ);
/*
 * 
 *
							if(data.succ ==1){
								window.location.reload();
								
							}else{
									alert(data.msg);
								}
		 
 */				
				});
	}
}


//新闻的评论的ajax响应

function news_comment(){
	editor.sync();//同步kindeditor数据
	var content=$("#reply_content").val();
	var nid=$("#nid").val();
	var uid=$("#uid").val();//不用提交，用于检测是否登录
	var totle=$(".totle").html();
	totle++;//评论数加1
	//输出测试下。。
	//alert(content+"\n"+uid);
	//客户端验证
	/*
	 * 
	 * 
	 * */
	if(!uid){
		alert("暂时关闭匿名评论功能，请先登录后再发表！");
		//跳转到登录页面。。登录之后怎么跳转回来发评论。。。
		//window.location.href="login.php?action=login";
		return;
		}
	if(!content){
		//alert("请输入评论内容！");
		//客户端简单验证
		$("#msg").html("<font color=red>请输入评论内容！</font>");
		return;
	}
	//评论太过频繁，处理方法====
	$.post("./ajax/news_comment.php", {"content":content,"nid":nid},

			function (data){
				//响应。。
				//alert(data);
				//return;
				$reply=$("#reply").html(data);//赋值但不直接显示，用jquery动画显示
				//firefox不支持slideDown效果，下滑效果
				$reply.hide().appendTo('#reply_slide').slideDown();
				//自定义动画怎么弄呢
				//$reply.animate({height:"+=10"},400);
				//$(".totle").html(totle);
				});
	//评论完成。。content值置空
	   	editor.html('');
	   	$("#reply_content").html("");//
	}


//赛事新闻评论的ajax
function matchs_comment(){
	editor.sync();//同步kindeditor数据
	var content=$("#reply_content").val();
	var mid=$("#nid").val();
	var uid=$("#uid").val();//不用提交，用于检测是否登录
	var totle=$(".totle").html();
	totle++;//评论数加1
	//输出测试下。。
	//alert(content+"\n"+uid);
	//客户端验证
	/*
	 * 
	 * 
	 * */
	if(!uid){
		alert("暂时关闭匿名评论功能，请先登录后再发表！");
		//跳转到登录页面。。登录之后怎么跳转回来发评论。。。
		//window.location.href="login.php?action=login";
		return;
		}
	if(!content){
		//alert("请输入评论内容！");
		//客户端简单验证
		$("#msg").html("<font color=red>请输入评论内容！</font>");
		return;
	}
	//评论太过频繁，处理方法====
	$.post("./ajax/matchs_comment.php", {"content":content,"mid":mid},

			function (data){
				//响应。。
				//alert(data);
				//return;
				$reply=$("#reply").html(data);//赋值但不直接显示，用jquery动画显示
				//firefox不支持slideDown效果，下滑效果
				$reply.hide().appendTo('#reply_slide').slideDown();
				//自定义动画怎么弄呢
				//$reply.animate({height:"+=10"},400);
				//$(".totle").html(totle);
				});
			editor.html('');
			$("#reply_content").html("");//评论完成。。content值置空
	}


//会员空间的留言：
function add_content(){
	var content=$("#content").val();
	var uid=$("#myid").val();//不用提交，用于检测是否登录
	var r_uid=$("#id").val();
	if(!uid){
		alert("暂时关闭匿名留言功能，请先登录后再发表！");
		//跳转到登录页面。。登录之后怎么跳转回来发评论。。。
		//window.location.href="login.php?action=login";
		return;
		}
	if(!content){
		//alert("请输入评论内容！");
		//客户端简单验证
		$("#msg").html("<font color=red>*请输入留言内容！</font>");
		return;
	}

	$.post("./ajax/user_guest.php", {"content":content,"r_uid":r_uid},function (data){
	
	$("#content").val("");
	window.location.reload();
	
	});
}


//注册的用户名检测
function is_registered(username){
	if(username==""){
		$("#username_notice").html("<font color=red>&nbsp;请输入用户名！</font>");
		return;
	}
	 else
    {
        $("#username_notice").html("<img src='"+PUBLIC+"/images/success.gif'/>");
    }
	
	
}

//注册的输入密码检测
function check_password(password){
	 var length=password.length;
	 if (length<6)
    {
        $('#password_notice').html("<font color=red>&nbsp;密码不能少于6个字符！</font>");
    }
    else
    {
        $('#password_notice').html("<img src='"+PUBLIC+"/images/success.gif'/>");
    }

}
//注册的再次输入密码检测
function check_conform_password(conform_password)
{
    var password=$('#password').val();
    if (conform_password.length<6 )
    {
        $('#conform_password_notice').html("<font color=red>&nbsp;密码不能少于6个字符！</font>");
        return false;
    }
    if (conform_password!=password)
    {
        $('#conform_password_notice').html("<font color=red>&nbsp;两次输入密码不一致！</font>");
    }
    else
    {
        $('#conform_password_notice').html("<img src='"+PUBLIC+"/images/success.gif'/>");
    }
}




