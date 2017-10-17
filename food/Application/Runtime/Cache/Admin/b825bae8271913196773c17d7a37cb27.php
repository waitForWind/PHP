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
	  <caption style="font-size: 25px;" class="clearfix">
	  	订单列表
	  </caption>
	  <thead>
	    <tr>
	      <th>订单号</th>
	      <th>用户号码</th>
	      <th>地址</th>
	      <th>金额</th>
	      <th>状态</th>
	      <th>备注</th>
	      <th>下单时间</th>
	      <th style="text-align: center;">操作</th>
	    </tr>
	  </thead>
	  <tbody >
		  <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			  	<td><?php echo ($vo['order_id']); ?></td>
			  	<td><?php echo ($vo['tel']); ?></td>
			  	<td><?php echo ($vo['address']); ?></td>
			  	<td><?php echo ($vo['total_price']); ?></td>
			  	<td>
			  		<?php if($vo["order_status"] == 0): ?>配送中...
			  		<?php else: ?>已送达<?php endif; ?>
			  	</td>
			  	<td>
			  		<?php echo ($vo['remarks']); ?>
			  	</td>
			  	<td>

			  		<?php echo ($vo['order_time']); ?>
			  	</td>
			  	<td class="option" style="text-align: center;">
			  		<?php if($vo["order_status"] == 0): ?><a data-ID="<?php echo ($vo['order_id']); ?>" id="remark" class="btn btn-success" style="margin-right: 0!important;">标为已送达</a>
			  		<?php else: ?><span class="glyphicon glyphicon-ok text-info" style=""> </span><?php endif; ?>
			  	</td>
			  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		  <script type="text/javascript">
		  	$('#remark').click(function(e){
		  		e.preventDefault();
		  		var id = $(this).attr('data-ID');
		  		console.log(id);
		  		layer.confirm('您确定要标为"已送达"吗？', {
				  btn: ['确定','取消'], //按钮
				}, function(index, layero){
				layer.close(index); 
			  	var url = "/food/admin.php/Admin/Refectory/remark/id/" + id;
			  	
			  	$.ajax({
			  		type: "GET",
			  		url: url,
			  		success: function(respond, status, xhr){
			  			if(respond == "success"){
			  				layer.msg('标记成功', {icon: 1});
			  			}else{
			  				layer.msg('标记失败', {icon: 2});
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
	<div id="page" style="text-align: center;"><?php echo ($show); ?></div>

</body>
</html>