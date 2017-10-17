<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>科技立项--大学生科创中心</title>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/science.css" />
</head>

<body>

    <!--    head   -->
    <div class="headCenter">
        <div class="headLeft"></div>
        <div class="headRight"></div>

        <a href="index.php" class="logo"></a>

        <div class="headInfo">
            <dl>
                <dt</dt>
                    <dd></dd>
                </dl>

                <dl class="clearfix">
                    <dt></dt>
                    <dd></dd>
                </dl>

                <div class="nav">
                    <ul>
                        <li>
                            <a href="__GROUP__/Index/index" class="current">首页</a>
                        </li>
                        <li>
                            <a href="__GROUP__/Listmember/index" >人才宝库</a>
                        </li>
                        <li>
                            <a href="__GROUP__/Game/game" class="promoted" >赛事大厅</a>
                        </li>
                        <li>
                            <a href="__GROUP__/Guestbook/index" >留言反馈</a>
                        </li>
                        <li>
                            <a href="__GROUP__/Science/index">科技立项</a>
                        </li>
                        <!--<li>
                        <a href="__GROUP__/Venture/index">创业园</a>
                    </li>
                    -->
                    <!--<li>
                    <a href="__GROUP__/Venture/index">创业园</a>
                </li>
                -->
                <li>
                    <a href="__GROUP__/Ourmaker/index" target="_blank" class="promoted">柳州maker</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="bananer">

        <a href="__GROUP__/Submit/submit">
            <img src="__PUBLIC__/images/111.jpg" alt="比赛入口"></a>

    </div>
    <!--<div class="bananer">
    -->
    <!--<div class="scrollNews" style="height:260px; width:720px; float:left">
    -->
    <!--<a href="#">比赛入口......</a>
-->
<!--<a href="#">比赛入口......</a>
-->
<!--<a href="#">比赛入口......</a>
-->
<!--<a href="#">比赛入口......</a>
-->
<!--<a href="#">比赛入口......</a>
-->
<!--</div>
-->
<!--</div>--></div>

<!--  main  -->
<div class="main">
<div class="content">
<div class="head">科技立项简介</div>

<div class="mainBody">
<div class="news1">
<ul>
<?php if(is_array($introduction)): foreach($introduction as $key=>$v): echo ($v["content"]); endforeach; endif; ?>
</ul>
<!--<ul>
-->
<!--<div class="main_a_2_b">
-->
<!--<div class="scrollNews" style="height:260px; width:720px; float:left">
-->
<!--<ul>
-->
<!--<li>
<a>vfdvfd</a>
</li>
-->
<!--<li>
<a>vfdvfd</a>
</li>
-->
<!--<li>
<a>vfdvfd</a>
</li>
-->
<!--<li>
<a>vfdvfd</a>
</li>
-->
<!--</ul>
-->
<!--</div>
-->
<!--</div>
-->
<!--</ul>--></div>

<!--<a href="#">
<img src="__PUBLIC__/science/more.jpg" />
</a>
-->
</div>

<div class="foot"></div>
</div>

<div class="content">
<div class="head">立项申报流程</div>

<div class="mainBody">

<!--  <?php if(is_array($science)): foreach($science as $key=>$v): ?><ul>
<li>
<a href="__URL__/showScience?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
<span><?php echo (date("Y-m-d H:i:s",$v["published"])); ?></span>
</li>
</ul><?php endforeach; endif; ?>
-->
<?php if(is_array($download)): foreach($download as $key=>$v): ?><ul>
<li>
<a href="__URL__/download?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
</li>
</ul><?php endforeach; endif; ?>
<a href="#">
<img src="__PUBLIC__/science/more.jpg" />
</a>
</div>

<div class="foot"></div>
</div>

<div class="content">
<div class="head">立项申报成功的团队或个人</div>
<div class="mainBody">
<?php if(is_array($file)): foreach($file as $key=>$v): ?><ul>
<li>
<a href="__URL__/download?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
</li>
</ul><?php endforeach; endif; ?>
<a href="#">
<img src="__PUBLIC__/science/more.jpg" />
</a>
</div>

<div class="foot"></div>
</div>

<div class="footer">
<a href="#">联系我们</a>
|
<a href="#">关于我们</a>
|
<a href="#">加入我们</a>
<br />
Copyright © 2014-2015 All Rights Reserved. “科技立项”科技作品竞赛
<a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>
版权所有
</div>
</div>

</body>
</html>