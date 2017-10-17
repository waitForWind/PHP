<?php if (!defined('THINK_PATH')) exit();?>
<!-- saved from url=(0050)http://www.kjjlpt.com/game.php?show=oldgame&page=1 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"
        >
    <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"></head>
<body class="topic" style="margin-top:-12px;">

    <title>往期比赛--大学生科技交流平台</title>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/scrollnews.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/top.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/imgshow.js"></script>
    <script src="__PUBLIC__/js/daycoming.js"></script>
    <script src="__PUBLIC__/js/cookieclass.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/reset.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Topic.css">

    <center>
        <div class="header">
            <div class="w1000">
                <div class="top">
                    <div class="logo">
                        <a href="">
                            <img src="__PUBLIC__/images/headlogo.jpg"></a>
                    </div>
                    <div class="topr">
                        <?php if($uid == 0): ?><a href="__GROUP__/Member/reg">免费注册</a>
                            &nbsp;|&nbsp;
                            <a href="__GROUP__/Member/login">登&nbsp;陆</a>
                            <?php else: ?>
                            <span style="color:#006495;"><?php echo ($email); ?></span>
                            <a class="notice_num" href="__GROUP__/Myzone/index">20</a>
                            我的：
                            <a href="__GROUP__/Myzone/zone">空间</a>
                            <span id="outcome"></span>
                            <a href="__GROUP__/Myzone/secureqa">设置</a>
                            &nbsp;|
                            <a href="__GROUP__/Member/loginout">退出</a><?php endif; ?>
                    </div>
                    <div class="clear"></div>
                </div>

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
                        <li>
                            <a href="__GROUP__/Ourmaker/index" target="_blank" class="promoted">柳州maker</a>
                        </li>
                    </ul>
                    <div class="n_bt">
                        <a href="#"></a>
                    </div>
                </div>

                <div class="nab">
                    <div class="nab1">截止目前，大学生科创中心已发布赛事数量 94，参与人次 2680</div>
                    <div class="nab2">
                        <ul>
                            <li class="nab2_a">
                                <div class="u_box">
                                    <div id="u_select">选择分类</div>
                                    <ul class="u_option">
                                        <li>全部分类</li>
                                    </ul>
                                </div>
                            </li>
                            <input type="hidden" id="header_search_catid" value="">
                            <li class="nab2_b">
                                <input type="text" class="tx02"></li>
                            <li class="nab2_c">
                                <input type="submit" value="" val="header_search" class="bts02"></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>
        </div>

        <div class="mbox">
            <div class="w1000">

                <div class="icg">
                    <div class="icg1">
                        <ul>
                            <li class="cur">
                                <a href="javascript:void(0)">往期回顾</a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="icg2">
                        <?php if(is_array($morelist)): $i = 0; $__LIST__ = $morelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                                <dt>
                                    <a href="__GROUP__/Game/index/id/<?php echo ($vo["id"]); ?>">
                                        <img src="__PUBLIC__/images/nopic.jpg"></a>
                                </dt>
                                <dd>
                                    <a href="__GROUP__/Game/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                                </dd>
                                <dd>
                                    参与人数：
                        717
                                </dd>
                                <dd>
                                    剩余时间：
                                    <span style="color:red">比赛已结束</span>
                                </dd>
                                <dd class="bm">
                                    <a href="__GROUP__/Game/index/id/<?php echo ($vo["id"]); ?>" class="a301">查看比赛</a>
                                </dd>

                                <!--<dd>
                                剩余时间：
                                <span style="color:red">专题已结束</span>
                            </dd>
                            <dd class="bm">
                                <a href="" class="a301">查看专题</a>
                            </dd>
                            -->
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>

                    <div class="clear"></div>
                </div>

                <div class="pages">
                    <span class=".$style.">上一页</span>
                    <span class="nowpage">1</span>
                    <a class="nowpage" href="#">2</a>
                    <a class="nowpage" href="#">3</a>
                    <a class="nowpage" href="#">4</a>
                    <a class="nowpage" href="#">5</a>
                    <a class="nowpage" href="#">6</a>
                    <a class="nowpage" href="#">7</a>
                    <a class="nowpage" href="#">8</a>
                    <a class="nowpage" href="#">9</a>
                    <a class="nowpage" href="#">10</a>
                    <a class="nextpage" href="http://www.kjjlpt.com/game.php?show=oldgame&page=2">下一页</a>
                    [共11条]
                </div>

            </div>

        </div>
    </div>
    <div class="w1000 footer">
        <p class="fnav">
            <a href="#" target="_blank">关注我们</a>
            <span>|</span>
            <a href="#" target="_blank">关于我们</a>
            <span>|</span>
            <a href="#" target="_blank">联系我们</a>
            <span>|</span>
            <a href="#" target="_blank">加入我们</a>
            <span>|</span>
            <a href="#" target="_blank">申请链接</a>
        </p>
        <p>大学生科技交流平台版权所有&nbsp;&nbsp;版本号：v1.1</p>
        <p>
            Copyright 2014&nbsp;by&nbsp;
            <a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>
            &nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;
            <script src="#" language="JavaScript"></script>
            <script src="#" charset="utf-8" type="text/javascript"></script>
            <a href="#" target="_blank" title="站长统计">
                <img border="0" hspace="0" vspace="0" src="__PUBLIC__/images/pic1.gif"></a>
        </p>
    </div>
</center>
<!----返回顶部,集成微博，微信---->
<ul id="jump">
    <li style="display:none;height:50px;">
        <a id="top" href="#top"></a>
    </li>
    <li style="height:50px">
        <a id="sina" rel="nofollow" href="#" target="_blank"></a>
    </li>
    <li style="height:50px">
        <a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()"></a>
    </li>
    <li style="height:50px">
        <a id="ceping" href="#" target="_blank"></a>
    </li>
    <li style="height:50px">
        <a id="reply" href="guestbook.php#fadeback" target="_blank"></a>
    </li>
</ul>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->

<script src="__PUBLIC__/js/logger.js"></script>
</body>
</html>