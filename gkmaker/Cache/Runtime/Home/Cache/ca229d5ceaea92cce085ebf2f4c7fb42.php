<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0030)http://www.kjjlpt.com/game.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>赛事大厅--大学生科创中心</title>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/scrollnews.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/top.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/imgshow.js"></script>
    <script src="__PUBLIC__/Css/daycoming.js"/>
    <script src="__PUBLIC__/js/cookieclass.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/reset.css"/>
    <link href="__PUBLIC__/Css/game.css" rel="stylesheet" type="text/css"/>
    <script src="__PUBLIC__/js/logger.js"></script>
    <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"/>
</head>

<body class="topic" style="margin-top:6px;">

<div class="header">
    <div class="w1000">
        <div class="top">
            <div class="logo"><a href=""><img src="__PUBLIC__/images/headlogo.jpg"></a></div>
            <div class="topr">
                <?php if($uid == 0): ?><a href="__GROUP__/Member/reg">免费注册</a>&nbsp;|&nbsp;
                    <a href="__GROUP__/Member/login">登&nbsp;陆</a>
                    <?php else: ?>
                    <span style="color:#006495;"><?php echo ($email); ?></span>
                    <a class="notice_num" href="__GROUP__/Myzone/index">20</a>我的：
                    <a href="__GROUP__/Myzone/zone">空间</a>
                    <span id="outcome"></span>
                    <a href="__GROUP__/Myzone/secureqa">设置</a>&nbsp;|
                    <a href="__GROUP__/Member/loginout">退出</a><?php endif; ?>

            </div>
            <div class="clear"></div>
        </div>

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
            <div class="n_bt"><a href="#"></a></div>
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
                    <li class="nab2_b"><input type="text" class="tx02"></li>
                    <li class="nab2_c"><input type="submit" value="" val="header_search" class="bts02"></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>

<div class="icbanbg">
    <div class="icban" style="background:url() no-repeat center"></div>
</div>





<!----------------中间的部分--------------------------------------------------------------------------->
<div class="ibnr"></div>
<div class="mbox">
    <div class="w1000">
        <div class="in">
            <div class="in1">
                <div class="t101"><div style="height:10px;"></div>赛事分类</div>
                <div class="in1a">
                    <ul>
                        <li>
                            <a class="a111" href="#">
                                文学精品
                                <br>
                                <small>classical culture</small>
                            </a>
                        </li>
                        <li>
                            <a class="a112" href="#">
                                科技学术
                                <br>
                                <small> Science and academic</small>
                            </a>
                        </li>
                        <li>
                            <a class="a113" href="#">
                                艺术展示
                                <br>
                                <small>art show</small>
                            </a>
                        </li>
                        <li>
                            <a class="a114" href="#">
                                其它类型
                                <br>
                                <small>Other types</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="in2">

                <div class="t102">
                    <div style="height:14px;"></div>
                    热门赛事
                </div>
                <div class="in2a">
                    <div class="ib2b">

                        <div class="ib2b_a">
                            <?php if(is_array($glist)): $i = 0; $__LIST__ = $glist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                                <dt>
                                    <a href="__GROUP__/Game/index/id/<?php echo ($vo["id"]); ?>">
                                        <img src="__PUBLIC__/images/nopic.jpg">
                                    </a>
                                </dt>
                                <dd>
                                    <h3>
                                        <a href="__GROUP__/Game/index/id/<?php echo ($vo["id"]); ?>"><td><?php echo ($vo["title"]); ?></td></a>
                                    </h3>
                                    <p>报名人数：5</p>
                                    <p>赛事级别：<td><?php echo ($vo["grade"]); ?></td></p>
                                </dd>
                                <div class="clear"></div>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>




                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="in2b"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="margintop">
            <a target="_blank" href="__GROUP__/Game/moregame">
                <img width="1000" height="98" alt="往期精比赛回顾" src="__PUBLIC__/images/oldgame.jpg">
            </a>
        </div>
        <!-----------------------中间部分的结束---------------------------------------------------------------->


        <div style="width:100%; height:10px; float:left;">
            <hr color="#eaeaea">
        </div>
        <div class="w1000 footer">
            <p class="fnav"><a href="#" target="_blank">关注我们</a><span>|</span><a href="#" target="_blank">关于我们</a><span>|</span>
                <a href="#" target="_blank">联系我们</a><span>|</span><a href="#" target="_blank">加入我们
                </a><span>|</span><a href="#" target="_blank">申请链接</a></p>
            <p>大学生科创中心版权所有&nbsp;&nbsp;版本号：v1.1 </p><p> Copyright 2014&nbsp;by&nbsp;
            <a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>&nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;
            <script src="#" language="JavaScript">

            </script><script src="#" charset="utf-8" type="text/javascript">

            </script><a href="#" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="__PUBLIC__/images/pic1.gif"></a>
        </p>
        </div>
        <!-- Baidu Button BEGIN -->
        <script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732"
                src="__PUBLIC__/js/bds_s_v2.js"></script>

        <script type="text/javascript">
            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
        </script>
        <!-- Baidu Button END --></div></div></body></html>