<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>大学生科技交流平台欢迎您！</title>
    <meta name="keywords" content="大学生科技交流平台,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛" />
    <meta name="description" content="大学生科技交流平台是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能" />
    
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/daycoming.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/cookieclass.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/iealert.js" ></script>
    <script type="text/javascript" src="__PUBLIC__/js/fixednav.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/baidu_search.js"></script>

    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/index.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/showpic.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/css">
    <script src="__PUBLIC__/js/logger.js"></script>
    <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"></head>
<body>
    <div class="head">
    <div class="head_a" >
        <img width="270" height="60" src="__ROOT__/Public/images/keChuangLogo.png" alt="" style="margin-top: 15px;"></div>
    <div style="width:130px; height:95px; float:left;"></div>
    <div class="head_b"></div>
    <div class="head_c">
        <div class="head_cinput">
            <form name="f1" onsubmit="return g(this)"  id="matchs_serach">
                <input type="text"  name="word"  x-webkit-speech placeholder="百度全站搜索" />
                <div style="display:none;">
                    <input name=tn type=hidden value="bds">
                    <input name=cl type=hidden value="3">
                    <input name=ct type=hidden>
                    <input name=si type=hidden value="http://localhost:88/gkmaker/">
                    <input name=s type=radio>
                    <input name=s type=radio checked></div>
            </form>
        </div>
        <div class="head_c_1">
            <a href="javascript:void(0);" id="search">
                <img src="__PUBLIC__/images/sousuoFDJ.jpg" />
            </a>
        </div>
        <div class="head_c_2">
            <div class="reg">
                <?php if($uid == 0): ?><a href="__GROUP__/Member/reg">免费注册</a>
                    &nbsp;|&nbsp;
                    <a href="__GROUP__/Member/login">登&nbsp;陆</a>
                    <?php else: ?>
                    <span style="color:#006495;"><?php echo ($nickname); ?></span>
                   <!--  <a class="notice_num" href="__GROUP__/Myzone/index">20</a> -->
                    我的：
                    <a href="__GROUP__/Myzone/zone">空间</a>
                    <span id="outcome"></span>
                    <a href="__GROUP__/Myzone/secureqa">设置</a>
                    &nbsp;|
                    <a href="__GROUP__/Member/loginout">退出</a><?php endif; ?>
            </div>
        </div>
    </div>
</div>
    <script src="__PUBLIC__/js/jquery.movebg.js"></script>
<div class="daohang_a"  id="mynav">
    <div class="daohang">
        <div class="nav">
            <ul>
                <li><a href="__GROUP__/Index/index" >首页</a></li>
                <li><a href="__GROUP__/Listmember/index" >人才宝库</a></li>
                <li><a href="__GROUP__/Game/game"  >赛事大厅</a></li>
                <li><a href="__GROUP__/Guestbook/index" >留言反馈</a></li>
                <li><a href="__GROUP__/Science/index">科技立项</a></li>          
                <li><a href="__GROUP__/Ourmaker/index" target="_blank" >柳州maker</a></li>
            </ul>
            <!--移动的滑动-->
        <div class="move-bg"></div>
        <!--移动的滑动 end-->
        </div>
        <div class="guanzhu">&nbsp;&nbsp; <a target="_blank" href="http://weibo.com/bdmaker"><img src="__PUBLIC__/images/sinaBG1.png"></a> &nbsp;&nbsp;
    </div>
    </div>
</div>
<script>
$(function(){
    $(".nav").movebg({width:128/*滑块的大小*/,extra:40/*额外反弹的距离*/,speed:300/*滑块移动的速度*/,rebound_speed:400/*滑块反弹的速度*/});
})
</script>



    <div class="login">
        <div class="login_top"></div>
        <div class="login_M">
            <div class="login_L"></div>
            <div class="login_R">
                <div class="login_R_t"></div>
                <div class="login_R_l"></div>
                <div class="login_R_m">
                    <div class="login_R_m_a">
                        <div class="login_R_m_a_top"></div>
                        <div class="login_R_m_a_left"></div>
                        会员登录
                    </div>
                    <div class="login_R_m_b"></div>
                    <form method="post" action="__GROUP__/Member/login">
                        <div class="login_R_m_b">
                            <div style="width:27px; height:45px; float:left;"></div>
                            用户名：
                            <input type="text" name="nickname" placeholder="请输入您的账号"></div>
                        <div class="login_R_m_b">
                            <div style="width:42px; height:45px; float:left;"></div>
                            密码：
                            <input type="password" name="pwd" placeholder="请输入您的密码">
                            <input type="hidden" name="action" value="login">
                            <!--  <input type="hidden" name="url" value="http://www.kjjlpt.com/index.php">--></div>
                        <div class="login_R_m_c">
                            <div class="login_R_m_c_left"></div>
                            <div class="login_R_m_c_a">
                                <input type="checkbox">记住我</div>
                            <div class="login_R_m_c_a">
                                <input type="checkbox">自动登录</div>
                        </div>
                        <div class="login_R_m_d">
                            <div class="login_R_m_d_left"></div>
                            <input class="login_submit" type="submit" value="">
                            <a href="#" class="link">&nbsp;&nbsp;忘记密码？</a>
                        </div>
                        <div class="login_R_m_e">
                            <div class="login_R_m_e_left"></div>
                            <span class="join_text">还没有加入科技交流平台？</span>
                            <a href="__GROUP__/Member/reg" class="apply_reg"></a>
                        </div>
                    </form>
                </div>

                <div class="login_R_r"></div>
                <div class="login_R_b"></div>
            </div>
        </div>
    </div>

    <div style="width:100%; height:10px; float:left;">
        <hr color="#eaeaea"></div>

    <div class="jieshu_a">
        <div style="width:1033px; height:17px; float:left;"></div>
        <div style="width:255px; height:28px; float:left;"></div>
        <div class="jieshu_a_a">
            <a href="#"> <strong>关注我们</strong>
            </a>
        </div>
        <div class="jieshu_a_b"> <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#">
                <strong>关于我们</strong>
            </a>
        </div>
        <div class="jieshu_a_b">
            <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#">
                <strong>联系我们</strong>
            </a>
        </div>
        <div class="jieshu_a_b">
            <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#" target="_blank">
                <strong>加入我们</strong>
            </a>
        </div>
        <div class="jieshu_a_b">
            <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#">
                <strong>申请链接</strong>
            </a>
        </div>
    </div>

    <div style="width:100%; height:10px; float:left;">
        <hr color="#eaeaea" />
    </div>

    <div class="jieshu_c">
        <div style="width:1033px; height:30px; float:left;"></div>
        <div class="footer">
            大学生科创中心版权所有&nbsp&nbsp版本号：v1.1 &nbsp;&nbsp;
            <a href="#" target="_blank"></a>
            <br />
            Copyright 2014-2015&nbsp;by&nbsp;
            <a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>
            &nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;
            <script src="#" language="JavaScript"></script>
        </div>
    </div>

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
</body>
</html>