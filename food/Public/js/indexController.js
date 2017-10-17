$(function(){
		//动态调整高度
		var height = $('nav').height();
		var windowH = $(document).height();
		var mainH = windowH - height;
		$('.mainContent').height(mainH);

		//退出账号
		$('.quit').click(function(event){
			event.preventDefault();
			layer.confirm('确定要退出吗？', {
			  btn: ['确定','取消'] //按钮
			}, function(){
			
			  var url = $('.quit').attr('href').slice(0,-5);
			  var href = $(".location").val();
			  // var href = $(".location").val();
			  // alert("url is:"+url);
			  $.ajax({
			  	url: url,
			  	success:function(respond, status, xhr){
			  		// alert("hhhhh");
			  		window.location.href = href;
			  	}
			  });
			  
			});				
		});   

		//点击菜单切换颜色
		$(".menu ul li").click(function(){
			$(this).addClass("active").siblings().removeClass('active');

		});	
});