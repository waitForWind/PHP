<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广科创业园交流平台</title>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/science.css" />
</head>

<body>

<!--    head   -->    
<div class="headCenter">
	<div class="headLeft">
    </div>
    <div class="headRight">
    </div>
    
    
    <a href="index.php" class="logo"></a>
    
    <div class="headInfo">
    	<dl>
        	<dt>主办单位：</dt>
            <dd>
            	共青团长沙理工大学委员会
			</dd>
        </dl>
        
        
        <dl class="clearfix">
            <dt>承办单位：</dt>
            <dd></dd>
        </dl>
        
        <div class="nav">
          <ul>
          <li><a href="__GROUP__/Index/index" class="current">首页</a></li>
                <li><a href="__GROUP__/Listmember/index" >人才宝库</a></li>
                <li> <a href="__GROUP__/Game/game" class="promoted" >赛事大厅</a></li>
                <li><a href="__GROUP__/Guestbook/index" >留言反馈</a></li>
                <li><a href="__GROUP__/Science/index">科技立项</a></li>
                <!--<li><a href="__GROUP__/Venture/index">创业园</a></li>-->
                <!--<li><a href="__GROUP__/Venture/index">创业园</a></li>-->
                <li><a href="__GROUP__/Ourmaker/index" target="_blank" class="promoted">柳州maker</a></li>
            </ul>
        </div>
            
    </div>

    <div class="bananer">
    	<!--<a href="#">比赛入口......</a>-->
    </div>
</div>



<!--  main  -->
<div class="main">
	<div class="content">
    	<div class="head">
        	创业园简介
        </div>
        
        <div class="mainBody">
        	<div class="news1">
            <ul>
                  <?php if(is_array($introduction)): foreach($introduction as $key=>$v): echo ($v["content"]); endforeach; endif; ?>
               </ul>
            </div>
            
        	<!--<a href="#"><img src="__PUBLIC__/science/more.jpg" /></a>-->
        </div>
        
        <div class="foot">
        </div>
    </div>
    
    <div class="content">
    	<div class="head">
        	创业园新闻
        </div>
        
        <div class="mainBody">
        	
                    <?php if(is_array($Venture)): foreach($Venture as $key=>$v): ?><ul>
                        <li><a href="__URL__/showVenture?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a><span><?php echo (date("Y-m-d H:i:s",$v["published"])); ?></span></li>
                    </ul><?php endforeach; endif; ?>
                               
        	<a href="list.php?show=matchs&cid=55"><img src="__PUBLIC__/science/more.jpg" /></a>
        </div>
        
        <div class="foot">
        </div>
    </div>
    
    <div class="content">
    	<div class="head">
        	创业园资料下载
        </div>
        
        <div class="mainBody">
        	<?php if(is_array($download)): foreach($download as $key=>$v): ?><ul>
                        <li><?php echo ($v["content"]); ?><span><?php echo (date("Y-m-d H:i:s",$v["publish"])); ?></span></li>
                    </ul><?php endforeach; endif; ?>
        	<a href="science.php?show=upload"><img src="__PUBLIC__/science/more.jpg" /></a>
        </div>
        
        <div class="foot">
        </div>
    </div>

    <div class="footer">
    	<a href="aboutus.php"> 联系我们</a>|<a href="aboutus.php"> 关于我们</a>
       | <a href="http://www.yunstudio.net/baoming/"> 加入我们</a>
        <br />
Copyright © 2012-2014 All Rights Reserved. “科技立项”科技作品竞赛 <a href="http://www.yunstudio.net" target="_blank">云作坊</a> 版权所有
    </div>
</div>

   
   </body>
</html>