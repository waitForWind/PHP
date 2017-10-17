$(function(){
	$(".file").on("change","input[type='file']",function(){

	    var filePath=$(this).val();
	    var file=$(this)[0].files[0];
	    var r = new FileReader(file);
	    //读取图片数据
	    r.readAsDataURL(file);
	    //读取成功之后在标签当中显示
	    $(r).load(function(){

	    	$("#showImg").attr("src" ,this.result).show();
	    	// $.delay(3000);
	    	//图片加载之后页面变高，为了不出现滚动条，要改变父页面的高度
	    	// var frame = $(window.parent.document).find("#frame"); 
	    	// var thisheight = $(document).height(); 
	    	// frame.height(thisheight);
	    	// var height = $(window.parent.document).find('nav').height();
	    	// var windowH = $(window.parent.document).height();
	    	// var mainH = windowH - height;
	    	$(window.parent.document).find('.mainContent').height(780); 
	    	// alert('hello');
	    });
	     
	    if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("jpeg")!=-1|| filePath.indexOf("png")!=-1){
	        $(".fileerrorTip").html("").hide();
	        var arr=filePath.split('\\');
	        var fileName=arr[arr.length-1];
	        $(".showFileName").html(fileName);
	    }else{
	        $(".showFileName").html("");
	        $(".fileerrorTip").html("您未上传文件，或者您上传文件类型有误！").show();
	        return false;
	    }
	});


$("#menuform").submit(function(e){
	e.preventDefault();
	$("input[name='pic-name']").val($("#showFileName").html());
	var controller = $('#controller').val();
	var url = controller+"/upload";
	// alert(url);
	layer.confirm('您确定要上传吗？', {
	  btn: ['确定','取消'], //按钮
	}, function(index, layero){		
	  layer.close(index);
	  // alert(checkMenu());
	  if(checkMenu()){
	  	var url = controller+"/shangchuan";
	  	// var url = controller+"/checkTel";
	  	// alert(url);
	  	var data = new FormData($("#menuform")[0]);
	  	// console.log(data);
	  	$.ajax({
	  		type: "POST",
	  		url: url,
	  		data: data,
	  		dataType: 'JSON',
	  		cache: false,
	  		processData: false,
	  		contentType: false,
	  		success: function(respond, status, xhr){
	  			console.log(respond); 
	  			if(respond == "success"){
	  				// console.log(respond);
	  				layer.msg('上传成功', {icon: 1});
	  			}else{
	  				layer.msg('上传失败', {icon: 2});
	  			}
	  			
	  			// window.location.href = "__CONTROLLER__/lookupMembers";
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


function checkMenu(){
	var data = $("#menuform").serializeArray();
	var foodname = data[0].value;
	var price = data[1].value;
	var vip_price = data[2].value;
	var file = data[5].value;
	if($.trim(foodname)==""){
		alert("hello");
		layer.msg("请填写食物名称",{time: 3000});
		$('#foodname').focus();
		return false;
	}
	// if(/^\S+$/.test(foodname) == false){
	// 	layer.msg("食物名称填写不正确！(只能由数字、字母、下划线组成)",{time: 3000});
	// 	$('#foodname').focus();
	// 	return false;
	// }
	if($.trim(price)==""){
		layer.msg("请填写价格",{time: 3000});
		$('#price').focus();
		return false;
	}
	//如果不是一个数字就弹出提示
	if(isNaN(price)){
		layer.msg("价格只能填写数字",{time: 3000});
		$('#price').focus();
		return false;
	}
	if($.trim(vip_price)==""){
		layer.msg("请填写会员价格",{time: 3000});
		$('#vip_price').focus();
		return false;
	}
	//如果不是一个数字就弹出提示
	if(isNaN(vip_price)){
		layer.msg("会员价格只能填写数字",{time: 3000});
		$('#vip_price').focus();
		return false;
	}

	return true;
}

	
});