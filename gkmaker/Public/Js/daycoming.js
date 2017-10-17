//签到
$(function(){
		if(getCookie("isqiandao")=="1")
	    $("#outcome").html("");

	   $("#daycoming").click(function(){
			$.get("./ajax/daycoming.php",{},function(data){
				setCookie("isqiandao","1","d1");
				alert("签到成功，积分+5,记得明天继续来签到哦！");
				 $("#outcome").html(""); //把返回的数据添加到页面上，为什么显示的不是json数据啊

				//怎么判断啊	
                       
					});
	   });
	})
