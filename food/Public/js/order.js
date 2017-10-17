$(function(){
	total();
	var controller = $('#controller').val();
	
	// alert(func);
	$('.intro').click(function(){
		// alert("hello");
		var id = $(this).attr('id');
		var user_id = $('#user_id').val();
		// alert(user_id);
		var url = controller +"/order/id/"+id+"/user_id/" + user_id ;
		window.location.href = url;
	
	});

	function total(){
		var price = parseInt($('.order-price').html());
		var num = parseInt($(".order-count").html());
		// var total = num * price;
		// alert(total);
		$('#total-price,#total-price2').html(price * num);
	}

	$(".subNum").click(function(){
		var num = parseInt($(".order-count").html()) - 1;
		if(num < 0){
			num = 0;
		}
		$(".order-count").html(num);
		total();
	});
	$(".addNum").click(function(){
		var num = parseInt($(".order-count").html()) + 1;
		$(".order-count").html(num);
		total();
	});

	$('.return').click(function(){
		window.history.back();
	})

	$('#order-submit').click(function(){
		if($.trim($('#user_id').val())==""){
			layer.msg('您还没有登录！', {icon: 2})
			return;
		}
		                                       
		layer.confirm('您确定要下单吗？', {
		  btn: ['确定','取消'], //按钮
		}, function(index, layero){
		layer.close(index); 
	  	var url = controller + "/order";
	  	
	  	$.ajax({
	  		type: "POST",
	  		url: url,
	  		data:{
	  			'refectory_id':$('#refectory_id').val(),
	  			'user_id': $('#user_id').val(),
	  			'menu_id': $('#menu_id').val(),
	  			'num': parseInt($(".order-count").html()),
	  			'total_price': parseFloat($('#total-price').html()),
	  			'tel': $('#tel').val(),
	  			'address': $('#address').val(),
	  			'remarks': $.trim($('#remarks').val()),

	  		},
	  		success: function(respond, status, xhr){
	  			console.log(respond);
	  			if(respond == "success"){
	  				layer.msg('下单成功', {icon: 1});
	  			}else{
	  				layer.msg('下单失败', {icon: 2});
	  			}
	  			window.location.reload();
	  		},

	  		error: function(xhr, textStatus, errorType){
				alert(textStatus + ":" + errorType);
			} 
	  	});
		 
		});
	});

	$('.btn-order').click(function(){
		$('#count').html($(".order-count").html());
	});

	$('#comment-submit').click(function(){
		if($.trim($('#user_id').val())==""){
			layer.msg('您还没有登录！', {icon: 2})
			return;
		}
		// alert($('#commentText').val());
		var comment = $.trim($('#commentText').val());
		// alert(comment);
		if(comment == ""){
			layer.msg('您还没有填写评论哦！', {icon: 2})
			return;
		}
		var url =  $('#controller').val() + "/comment";
		// alert(url);                                
		$.ajax({
	  		type: "POST",
	  		url: url,
	  		data:{
	  			'refectory_id':$('#refectory_id').val(),
	  			'user_id': $('#user_id').val(),
	  			'menu_id': $('#menu_id').val(),
	  			'comment': comment,
	  		},
	  		success: function(respond, status, xhr){
	  			console.log(respond);
	  			if(respond == "success"){
	  				layer.msg('评论成功', {icon: 1});
	  			}else{
	  				layer.msg('评论失败', {icon: 2});
	  			}
	  			window.location.reload();
	  		},

	  		error: function(xhr, textStatus, errorType){
				alert(textStatus + ":" + errorType);
			} 
	  	});
	});

	$('.fanhe-choice').click(function(){
		$('.fanhe-submenu').toggle();
	});
});