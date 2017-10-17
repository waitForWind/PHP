<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>测试用例</title>
	<meta http-equiv="Content-Type" charset="utf-8" />
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
	<script src="__PUBLIC__/js/academy.js" type="text/javascript"></script>
	 <script src="__PUBLIC__/js/city.js" type="text/javascript"></script>

	<script type="text/javascript">
	     $(function(){
        $("#mymajor").major({
            a_val:"<?php echo ($info[0]["academy"]); ?>",
            m_val:"<?php echo ($info[0]["major"]); ?>",
            a_name:"academy",
            m_name:"major"

        });
    });

	    $(function(){
        $("#mycitys").citys({
            p_val:"<?php echo ($info[0]["province"]); ?>",
            c_val:"<?php echo ($info[0]["city"]); ?>",
            p_name:"province",
            c_name:"city"

        });
    });
	</script>

</head>
<body>
	<table>
		<tr>
			<td>学院：</td>
			<td>
				<select name="academy" id="academy">
					<?php if(is_array($academyList)): $i = 0; $__LIST__ = $academyList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=""><?php echo ($vo["academy"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>年级：</td>
			<td>
				<select name="grade" id="grade">
					<?php if(is_array($gradeList)): $i = 0; $__LIST__ = $gradeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=""><?php echo ($vo["grade"]); ?>级</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<tr>
		<td>城市</td>
			<td>
				 <span id="mycitys"></span>
			</td>
		</tr>
		<tr>
		<td>学院/专业</td>
			<td>
				  <span id="mymajor"></span>
			</td>
		</tr>
	</table>
</body>
</html>