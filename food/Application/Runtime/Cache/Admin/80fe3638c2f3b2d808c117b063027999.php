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
	
<a href="/food/admin.php/Admin/Refectory/menu" style="font-size: 20px;" class="return">
	<span class="glyphicon glyphicon-chevron-left" ></span>返回
</a>
<div class="container" style="margin-top: 10px;margin-left: 0;padding-left: 0;">
	<form class="form-horizontal" role="form"  enctype="multipart/form-data" id="menuform" method="post" action="/food/admin.php/Admin/Refectory/upload" >
	  <div class="form-group">
	    <label for="foodname" class="col-xs-2 control-label">名称</label>
	    <div class="col-xs-4">
	      <input type="text" class="form-control" name="foodname" id="foodname" value="<?php echo ($data["name"]); ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="price" class="col-xs-2 control-label">价格</label>
	    <div class="col-xs-4">
	      <input type="text" class="form-control" name="price" id="price" value="<?php echo ($data["price"]); ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="vip_price" class="col-xs-2 control-label">会员价格</label>
	    <div class="col-xs-4">
	      <input type="text" class="form-control" name="vip_price" id="vip_price" value="<?php echo ($data["vip_price"]); ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="foodclass" class="col-xs-2 control-label">所属类别</label>
	    <div class="col-xs-2">
	    	<select class="form-control" id="foodclass" name="foodclass">
		         <option <?php if($data["class"] == '粉类'): ?>selected = "selected"<?php endif; ?>>粉类</option>
		         <option <?php if($data["class"] == '饭类'): ?>selected = "selected"<?php endif; ?>>饭类</option>
		         <option <?php if($data["class"] == '面类'): ?>selected = "selected"<?php endif; ?>>面类</option>
		         <option <?php if($data["class"] == '粥类'): ?>selected = "selected"<?php endif; ?>>粥类</option>
		         <option <?php if($data["class"] == '小炒'): ?>selected = "selected"<?php endif; ?>>小炒</option>
	    	</select>
	    </div>
	  </div>
    <div class="form-group">
      <label for="recommend" class="col-xs-2 control-label">是否推荐</label>
      <div class="col-xs-3" style="padding-top:6px;">
      		<input type="radio" name="recommend" id="recommend" value="1" <?php if($data["status"] == 1): ?>checked<?php endif; ?>>是
      		<input type="radio" name="recommend" id="recommend" value="0" <?php if($data["status"] == 0): ?>checked<?php endif; ?>>否      		
      </div>
    </div>
 
    <div class="form-group">
	    <label for="commen" class="col-xs-2 control-label">菜品介绍</label>
	    <div class="col-xs-8">
	    	<textarea cols="38" rows="6" name="commen" id="commen"><?php echo ($data["introduce"]); ?></textarea>
	    </div>
	</div>
	<div class="form-group">
	    <div class="col-xs-offset-2 col-xs-4">
	      <input type="submit" class="btn btn-primary" value="修改">
	    </div>
	  </div>
	  <input type="hidden" id="controller" value="/food/admin.php/Admin/Refectory">
	  <input type="hidden" name="menu_id" value="<?php echo ($data["menu_id"]); ?>">
	</form>
</div>

<script type="text/javascript">
$("#menuform").submit(function(e){
	e.preventDefault();
	var controller = $('#controller').val();
	var url = controller+"/upload";
	// alert(url);
	layer.confirm('您确定要修改吗？', {
	  btn: ['确定','取消'], //按钮
	}, function(index, layero){		
	  layer.close(index);
	  // alert(checkMenu());
	  if(checkMenu()){
	  	var url = controller+"/modify";
	  	// var url = controller+"/checkTel";
	  	// alert(url);
	  	var data = new FormData($("#menuform")[0]);
	  	$.ajax({
	  		type: "POST",
	  		url: url,
	  		data: data,
	  		dataType: 'JSON',
	  		cache: false,
	  		processData: false,
	  		contentType: false,
	  		success: function(respond, status, xhr){
	  			if(respond == "success"){
	  				// console.log(respond);
	  				layer.msg('修改成功', {icon: 1});
	  			}else{
	  				layer.msg('修改失败', {icon: 2});
	  			}
	  			
	  			window.location.href = "/food/admin.php/Admin/Refectory/menu";
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

</script>

</body>
</html>