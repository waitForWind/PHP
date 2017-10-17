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
<div class="container">
	<form class="form-horizontal" role="form"  enctype="multipart/form-data" id="menuform" method="post" action="/food/admin.php/Admin/Refectory/upload">
	  <div class="form-group">
	    <label for="foodname" class="col-xs-2 control-label" >名称</label>
	    <div class="col-xs-4">
	      <input type="text" class="form-control" name="foodname" id="foodname" placeholder="请输入菜名">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="price" class="col-xs-2 control-label">价格</label>
	    <div class="col-xs-4">
	      <input type="text" class="form-control" name="price" id="price" placeholder="请输入价格">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="vip_price" class="col-xs-2 control-label">会员价格</label>
	    <div class="col-xs-4">
	      <input type="text" class="form-control" name="vip_price" id="vip_price" placeholder="请输会员价格">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="foodclass" class="col-xs-2 control-label">所属类别</label>
	    <div class="col-xs-2">
	    	<select class="form-control" id="foodclass" name="foodclass">
		         <option selected="selected">粉类</option>
		         <option>饭类</option>
		         <option>面类</option>
		         <option>粥类</option>
		         <option>小炒</option>
	    	</select>
	    </div>
	  </div>
    <div class="form-group">
      <label for="recommend" class="col-xs-2 control-label">是否推荐</label>
      <div class="col-xs-3" style="padding-top:6px;">
      		<input type="radio" name="recommend" id="recommend" value="1" checked>是
      		<input type="radio" name="recommend" id="recommend" value="0">否      		
      </div>
    </div>
    <div class="form-group">
      <label for="choosefile" class="col-xs-2 control-label">上传图片</label>
      <div class="col-xs-8">
      	<div class="file">
      		选择文件
	      	<input type="file" class="form-control" name="choosefile" id="choosefile" required="required">
      	</div>
      	<span class="showFileName" id="showFileName"></span>
      	<span class="fileerrorTip" id="fileerrorTip"></span> 
      	<input type="hidden" name="pic-name">     	  
	   </div>
    </div>
    <div class="form-group">
	    <img class="col-xs-8 col-xs-offset-2 thumbnail" id="showImg"/><br/>
	</div>  
    <div class="form-group">
	    <label for="commen" class="col-xs-2 control-label">菜品介绍</label>
	    <div class="col-xs-8">
	    	<textarea cols="38" rows="6" name="commen" id="commen"> </textarea>
	    </div>
	</div>
	<div class="form-group">
	    <div class="col-xs-offset-2 col-xs-4">
	      <input type="submit" class="btn btn-primary" value="上传">
	    </div>
	  </div>
	  <input type="hidden" id="controller" value="/food/admin.php/Admin/Refectory">
	</form>
</div>

<script type="text/javascript" src="/food/Public/js/menuController.js"></script>

</body>
</html>