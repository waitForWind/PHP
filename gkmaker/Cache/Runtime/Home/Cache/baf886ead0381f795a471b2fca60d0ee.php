<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://www.kjjlpt.com/game.php?show=list&id=194 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>大学生科技交流平台</title>
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/scrollnews.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/top.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/imgshow.js"></script>
    <script src="__PUBLIC__/Js/daycoming.js"></script>
    <script src="__PUBLIC__/Js/cookieclass.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Topic.css"/>
    <script src="__PUBLIC__/Js/logger.js"></script>
    <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"/>
</head>

<body class="topic" style="margin-top:6px;">

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
                        <span style="color:#006495;"><?php echo ($nickname); ?></span>
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
                        <a href="__GROUP__/Index/index">首页</a>
                    </li>
                    <li>
                        <a href="__GROUP__/Listmember/index">人才宝库</a>
                    </li>
                    <li>
                        <a href="__GROUP__/Game/game" class="cur">赛事大厅</a>
                    </li>
                    <li>
                        <a href="__GROUP__/Guestbook/index">留言反馈</a>
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
            <div class="icd">
                <div class="icd1"></div>
                <div class="icd2">
                    <div class="box4">
                        <div class="box4s">
                            <h2 class="t8">赛事介绍</h2>
                            <div class="box4a">
                                <dl>
                                    <dt class="d01">
                                        <td><?php echo ($gamelist[0]["title"]); ?></td>
                                    </dt>
                                    <dd>
                                        <p class="MsoNormal">
                                            <span style="font-family:宋体;"></span>
                                        </p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>

                                        <p>
                                            <td>主办方:</td>
                                            <td><?php echo ($gamelist[0]["organizer"]); ?></td>
                                        </p>
                                        <p>
                                            <td>承办方:</td>
                                            <td><?php echo ($gamelist[0]["sponsor"]); ?></td>
                                        </p>
                                        <p>
                                            <td>赛事级别:</td>
                                            <td>
                                                <!--     <?php if($gamelist[0].grade == 1): ?>国家级
                                                <elseif  condition="$gamelist[0].grade eq 2 ">省级</elseif>
                                                <elseif  condition="$gamelist[0].grade eq 3 ">校级</elseif>
                                                <?php else: ?>
                                                院级<?php endif; ?>
                                            -->
                                <?php echo ($gamelist[0]["grade"]); ?>
                                        </td>
                                    </p>
                                    <p>
                                        <td>发布时间:</td>
                                        <td><?php echo (date("Y-m-d",$gamelist[0]["update_time"])); ?></td>
                                    </p>

                                    <p>
                                        <br></p>
                                    <span lang="EN-US"></span>
                                    <p class="MsoNormal">
                                        <span style="font-size:12px;"><?php echo ($gamelist[0]["content"]); ?></span>
                                    </p>
                                    <p class="MsoNormal">
                                        <span style="font-family:宋体;"></span>
                                    </p>
                                </dd>
                            </dl>

                            <div class="box4a_1">
                                <a href="__GROUP__/Game/registergame/id/<?php echo ($gamelist[0]["id"]); ?>">
                                    <img src="__PUBLIC__/images/bts31.jpg"></a>
                            </div>
                        </div>
                        <div class="box4b">
                            <dl>
                                <dt class="d03">比赛报名时间</dt>
                                <dd>
                                    <p>
                                        开始时间：
                                        <td><?php echo ($gamelist[0]["start_time"]); ?></td>
                                    </p>
                                    <p>
                                        结束时间：
                                        <td><?php echo ($gamelist[0]["end_time"]); ?></td>
                                    </p>
                                    <p>
                                        比赛状态：
                                        <span class="red">正在进行</span>
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt class="d04">评分机制</dt>
                                <dd>
                                    <p class="MsoNormal" align="left">
                                        <span style="line-height:1.5;"></span>
                                    </p>
                                    <p class="MsoNormal" style="white-space:normal;" align="left"> <b><br></b>
                                    </p>
                                    <p class="MsoNormal" style="white-space:normal;" align="left"> <b>评选规则</b>
                                    </p>
                                    <p class="MsoNormal" style="white-space:normal;" align="left">
                                        <b><br></b>
                                    </p>
                                    <p></p>
                                    <p class="MsoNormal" align="left">
                                        <br>
                                        <span style="line-height:1.5;"></span>
                                    </p>
                                    <p class="MsoNormal" align="left">
                                        <span style="line-height:1.5;">
                                            <br></span>
                                    </p>
                                    <p class="MsoListParagraph" style="margin-left:18.75pt;">
                                        <span>
                                            <br></span>
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt class="d05">奖项设置</dt>
                                <dd style="padding-left:0;">
                                    <div class="box4b_1">
                                        <p class="MsoListParagraph" style="margin-left:18.75pt;">
                                            <span></span>
                                        </p>
                                        <p>
                                            <td><?php echo ($gamelist[0]["prize"]); ?></td>
                                        </p>

                                        <div class="clear"></div>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="icd3"></div>
        </div>
        <div class="ice">
            <div class="ice1">
                <div class="icd">
                    <div class="icd1"></div>
                    <div class="icd2">
                        <h2 class="t8">赛事时讯</h2>
                        <div class="ice1_a">
                            <ul>
                                <li>
                                    <a target="_blank" href="#">关于开展2013-2014学年学生课外科技立项工作的通知</a>
                                    <span>2013-12-26</span>
                                </li>
                                <li>
                                    <a target="_blank" href="#">2013&mdash;2014科技立项参考模板</a>
                                    <span>2013-12-31</span>
                                </li>
                                <li>
                                    <a target="_blank" href="#">参考文献的正确列举方式</a>
                                    <span>2014-03-01</span>
                                </li>
                                <li>
                                    <a target="_blank" href="#">科技立项予以立项汇总表</a>
                                    <span>2014-03-17</span>
                                </li>
                                <li>
                                    <a target="_blank" href="#">科技立项中期答辩评分标准</a>
                                    <span>2014-03-17</span>
                                </li>
                                <li>
                                    <a target="_blank" href="#">科技立项答辩顺序</a>
                                    <span>2014-03-17</span>
                                </li>
                                <li>
                                    <a target="_blank" href="#">关于开展科技立项中期检查通知</a>
                                    <span>2014-03-20</span>
                                </li>
                                <li>
                                    <a target="_blank" href="#">关于开展2013-2014学年学生科技立项工作结题的通知1</a>
                                    <span>2014-10-08</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="icd3"></div>
                </div>
            </div>
            <div class="ice2">

                <div class="icd">
                    <div class="icd1"></div>
                    <div class="icd2">
                        <h2 class="t8">最新参赛</h2>
                        <div class="ice2_a">当前报名人数:<?php echo ($applyNumber); ?></div>

                        <div class="ice2_b">
                            <?php if(is_array($applyList)): $i = 0; $__LIST__ = $applyList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><dl>
                                <dt>
                                    <a uid="" class="usertips" href="#">
                                        <img src="face/images/qz_small.jpg"></a>
                                </dt>
                                <dd>
                                    <h3>
                                        <a uid="" class="usertips" href="javascript:void(0)"><?php echo ($li["relname"]); ?></a>
                                    </h3>
                                    <p> <?php echo ($li["academy"]); ?> </p>
                                    <p> 年级：<?php echo ($li["grade"]); ?> </p>
                                </dd>
                                <div class="clear"></div>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="icd3"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="uceng" id="uceng" style="display:none;">
    <div class="t99">
        <h2>报名成功</h2>
        <span>
            <a href="javascript:void(0)" class="dialog_close" title="关闭"></a>
        </span>
    </div>
    <div class="icd">
        <div class="tca">已报名成功，请于2013-05-08前提交您的参赛作品！</div>
        <div class="ubca">
            <dl>
                <dt>
                    <a href="javascript:void(0)" class="adimg" check="login" val="227">
                        <img src="__PUBLIC__/images/20130403085708_78667.jpeg"></a>
                </dt>
                <dd>
                    <a href="javascript:void(0)">百度手机浏览器</a>
                </dd>
                <dd>
                    <a href="javascript:void(0)" class="a10" check="login" val="227">提交方案</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    <a href="javascript:void(0)" class="adimg" check="login" val="228">
                        <img src="__PUBLIC__/images/20130403085607_79411.jpeg"></a>
                </dt>
                <dd>
                    <a href="javascript:void(0)">百度手机输入法</a>
                </dd>
                <dd>
                    <a href="javascript:void(0)" class="a10" check="login" val="228">提交方案</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    <a href="javascript:void(0)" class="adimg" check="login" val="229">
                        <img src="__PUBLIC__/images/20130403085546_10777.jpeg"></a>
                </dt>
                <dd>
                    <a href="javascript:void(0)">百度语音助手</a>
                </dd>
                <dd>
                    <a href="javascript:void(0)" class="a10" check="login" val="229">提交方案</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    <a href="javascript:void(0)" class="adimg" check="login" val="230">
                        <img src="__PUBLIC__/images/20130403085525_76912.jpeg"></a>
                </dt>
                <dd>
                    <a href="javascript:void(0)">百度美拍</a>
                </dd>
                <dd>
                    <a href="javascript:void(0)" class="a10" check="login" val="230">提交方案</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    <a href="javascript:void(0)" class="adimg" check="login" val="244">
                        <img src="__PUBLIC__/images/20130403085739_57235.jpeg"></a>
                </dt>
                <dd>
                    <a href="javascript:void(0)">其他百度产品</a>
                </dd>
                <dd>
                    <a href="javascript:void(0)" class="a10" check="login" val="244">提交方案</a>
                </dd>
            </dl>
            <div class="clear"></div>
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
    <p>大学生科创中心版权所有&nbsp;&nbsp;版本号：v1.1</p>
    <p>
        Copyright 2013&nbsp;by&nbsp;
        <a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>
        &nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;
        <script src="#" language="JavaScript"></script>
        <script src="#" charset="utf-8" type="text/javascript"></script>
        <a href="#" target="_blank" title="站长统计">
            <img border="0" hspace="0" vspace="0" src="__PUBLIC__/images/pic1.gif"></a>
    </p>
</div>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732" src="__PUBLIC__/js/bds_s_v2.js"></script>

<script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->

</body>
</html>