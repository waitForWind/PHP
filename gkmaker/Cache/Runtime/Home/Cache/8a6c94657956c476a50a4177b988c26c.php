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
    <script type="text/javascript" src="__PUBLIC__/js/iealert.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/fixednav.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/baidu_search.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/register.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/apply.css">

    <script src="__PUBLIC__/js/logger.js"></script>
    <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"></head>
   
</head>

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




     <script type="text/javascript">
     var PUBLIC= "__PUBLIC__";
     </script>
    <script src="__PUBLIC__/js/primsg.js" type="text/javascript"></script>
    <div class="fast_all">
        <div class="fast_top"></div>
        <div class="fast">
            <div class="fast_a">
                <div class="place">
                    当前位置：
                    <a href="#">首页</a>
                    &gt; <strong>注册</strong>
                </div>
            </div>
            <hr width="98%" color="#f1f1f1">
            <!--<span style="margin-left:200px; font-size:16px;">
            <a href="#">教师注册请点击这里</a>
        </span>
        -->
        <div class="zhuce">
            <div class="zhuce_top"></div>
            <div class="zhuce_left"></div>
            <form action="__GROUP__/Member/reg" method="post" id="regform">
                <div class="zhuce_a">
                    <div class="zhuce_a_a">
                        <table width="640" border="0">
                            <tbody>
                                <tr>
                                    <td width="83">用户名：</td>
                                    <td width="441">
                                        <input type="text" size="30" name="user[nickname]" placeholder="请输入您的用户名" onblur="is_registered(this.value)" required="required">
                                        <span id="username_notice" style="color:#FF0000">*</span>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>设置密码：</td>
                                    <td>
                                        <input type="password" size="30" name="user[pwd]" id="password" onblur="check_password(this.value);" placeholder="请设置您的密码" required="required">
                                        <span style="color:#FF0000" id="password_notice">*</span>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>确认密码:</td>
                                    <td>
                                        <input type="password" size="30" name="user[repwd]" id="conform_password" onblur="check_conform_password(this.value);" placeholder="请确认您的密码" required="required">
                                        <span style="color:#FF0000" id="conform_password_notice">*</span>
                                    </td>
                                  
                                </tr>

                                <tr>
                                    <td>验证码:</td>
                                    <td>
                                        <input type="text" name="verifycode" placeholder="请输入右侧的验证码" required="required">
                                        <img src="__GROUP__/Base/verify_code" onclick="this.src+='?rand='+Math.random()" title="点击更换" style="cursor:pointer; margin-bottom:-8px;"></td>

                                </tr>
                                <tr>
                                    <td height="47">&nbsp;</td>

                                    <td>
                                        <input type="checkbox" id="xieyi" checked="checked">
                                        <small style="padding-left:10px;">我已经看过并同意</small>
                                        <a href="#">《广科大创客科技交流平台服务协议（试行）》</a>
                                        <br>
                                        <input type="checkbox" name="" checked="checked" id="xieyi">
                                        <a href="javascript:void(0)">我坚决支持钓鱼岛是属于中国的！</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="zhuce_a_b">

                        <input class="reg_submit" type="submit" value=""></div>

                </div>
            </form>

            <div class="zhuce_b">
                <div class="zhuce_b_a"></div>

                <div class="zhuce_b_left"></div>

                <div class="zhuce_b_b">
                    <h3>已有广科大创客科技交流平台账号？</h3>
                </div>
                <div class="zhuce_b_c">
                    <a href="__GROUP__/Member/login">
                        <img src="__PUBLIC__/images/login.jpg"></a>
                </div>
                <div class="zhuce_b_d">
                    广科大创客科技交流平台是全国第一个自主创意，自主开发的科技交流平台。在这里你可以：
                    <p>寻找队友</p>
                    <p>孵化创意</p>
                    <p>参加比赛</p>
                    <p>科技交流</p>
                </div>
            </div>
        </div>
        <div class="fast_bottom"></div>
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
    <div class="jieshu_a_b">
        <strong>|</strong>
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
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732"></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000);
        </script>
<!-- Baidu Button END -->
</body>

</html>