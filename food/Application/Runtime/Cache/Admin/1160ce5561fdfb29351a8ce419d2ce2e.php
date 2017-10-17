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
	
	<table class="table table-striped">
	  <caption style="font-size: 18px;">共<?php echo ($count); ?>条评论</caption>
	  <thead>
	    <tr>
	      <th>用户id</th>
	      <th>菜谱id</th>
	      <th>评论内容</th>
	      <th>评论时间</th>
	      <th style="text-align: center;">操作</th>
	    </tr>
	  </thead>
	  <tbody >
		  <?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><tr>
			  	<td><?php echo ($sub['user_id']); ?></td>
			  	<td><?php echo ($sub['menu_id']); ?></td>
			  	<td><?php echo ($sub['comment']); ?></td>
			  	<td><?php echo ($sub['comment_time']); ?></td>
			  	<td class="option" style="text-align: center;">
			  		<a class="delData" data-ID="<?php echo ($sub['comment_id']); ?>">删除</a>
			  		<!-- <span style="display: inline-block;width: 40px;"></span>
			  		<a class="modData" href="javascript:;">修改</a> -->
			  	</td>
			  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		  <script type="text/javascript">
		  	$('.delData').click(function(e){
		  		e.preventDefault();
		  		var id = $(this).attr('data-ID');
		  		console.log(id);
		  		layer.confirm('您确定要删除吗？', {
				  btn: ['确定','取消'], //按钮
				}, function(index, layero){
				layer.close(index); 
			  	var url = "/food/admin.php/Admin/Refectory/delComment/id/" + id;
			  	
			  	$.ajax({
			  		type: "GET",
			  		url: url,
			  		success: function(respond, status, xhr){
			  			if(respond == "删除成功"){
			  				layer.msg('删除成功', {icon: 1});
			  			}else{
			  				layer.msg('删除失败', {icon: 2});
			  			}
			  			window.location.reload();
			  		},

			  		error: function(xhr, textStatus, errorType){
						alert(textStatus + ":" + errorType);
					} 
			  	});
				 
				});
		  	});
		  </script>
	  </tbody>
	  
	</table>
	<div id="page" style="text-align: center;">
	  	<?php echo ($show); ?>
	</div>


</body>
</html>