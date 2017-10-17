<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://www.kjjlpt.com/my.php?show=editmy -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>个人空间--大学生科创中心</title>
    <meta name="keywords" content="大学生科技交流平台,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛">
    <meta name="description" content="大学生科技交流平台是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能">
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/daycoming.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/cookieclass.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/iealert.js" ></script>
    <script type="text/javascript" src="__PUBLIC__/js/fixednav.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/baidu_search.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/my.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/tag.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/user.css" />
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



    <script src="__PUBLIC__/js/primsg.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/limitWord.js" type="text/javascript"></script>
    <div class="kongjian_all">
        <div class="kongjian_top"></div>
        <div class="kongjian">
            <div class="kongjian_L">
                <div class="kongjian_L_a">
                    <div class="kongjian_L_a_top"></div>
                    <div class="kongjian_L_a_left"></div>
                    <div class="kongjian_L_a_a">
                        <div class="kongjian_L_a_a_1">
                            <a href="__GROUP__/Myzone/mymessage?id=<?php echo ($info1[0]["uid"]); ?>">
                                <?php if($info1[0]['avatar'] != NULL): ?><img width="127" height="123" alt="user name" src="__PUBLIC__/Uploads/s_<?php echo ($info1[0]['avatar']); ?>">
                                    <?php else: ?>
                                    <img width="127" height="123" alt="user name" src="__PUBLIC__/images/qz_middle.jpg"><?php endif; ?>
                            </a>
                        </div>
                        <div class="kongjian_L_a_a_2">
                            <a class="user_name" href="__GROUP__/Myzone/mymessage/id/<?php echo ($info1[0]["uid"]); ?>"><?php echo ($info1[0]['nickname']); ?></a>
                        </div>
                        <div class="kongjian_L_a_a_3"></div>
                        <div class="kongjian_L_a_a_4"></div>
                        <div class="kongjian_L_a_a_5">

                            <a href="__GROUP__/Myzone/sendmsg?id=<?php echo ($info1[0]["uid"]); ?>">
                                <img src="__PUBLIC__/images/kongjianSX.jpg" />
                            </a>

                        </div>
                    </div>
                </div>

                <div class="kongjian_L_b"></div>
                <div class="kongjian_L_c">
                    <div class="kongjian_L_c_left"></div>
                    <div class="kongjian_L_c_top">
                        <table border="0">
                            <tr>
                                <td width="121">
                                    <!--<img src="./templates/images/kongjianChangyi.jpg" align="bottom" />
                                    -->
                                个人创意
                                </td>
                                <td width="41">
                                    <a href="#">
                                        更多
                                        <!--<img src="./templates/images/jiantouY.jpg" align="bottom" />
                                        -->
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <ul></li>
                </ul>
            </div>
        </div>
        <div class="kongjian_M"></div>
        <div class="kongjian_R">
            <div class="kongjian_R_a">

                <div class="place">
                    当前位置：
                    <a href="__GROUP__/Index/index">首页</a>
                    > <strong>个人空间</strong>
                </div>
            </div>
            <div class="kongjian_R_b position">
                <div class="kongjian_R_b_top"></div>
                <div class="kongjian_R_b_L">
                    <div class="kongjian_R_b_L_a">
                        <table border="0">
                            <tr>
                                <td>基本信息</td>
                            </tr>
                        </table>
                    </div>
                    <div class="kongjian_R_b_L_b"></div>
                    <div class="kongjian_R_b_L_c">
                        <ul>
                            <li>
                                <div class="kongjian_R_b_L_c01">用户名：</div>
                                <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["nickname"]); ?></div>
                            </li>
                            <li>
                                <div class="kongjian_R_b_L_c01">真实姓名：</div>
                                <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["truename"]); ?></div>
                            </li>
                            <li>
                                <div class="kongjian_R_b_L_c01">性别：</div>
                                <div class="kongjian_R_b_L_c02">
                                <?php if($info1[0]['sex'] != NULL): if($info1[0]['sex'] == 0): ?>女
                                        <?php else: ?>
                                        男<?php endif; endif; ?>
                                </div>
                            </li>
                            <li>
                                <div class="kongjian_R_b_L_c01">学院：</div>
                                <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["academy"]); ?></div>
                            </li>
                            <li>
                                <div class="kongjian_R_b_L_c01">年级：</div>
                                <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["grade"]); ?></div>
                            </li>
                            <li>
                                <div class="kongjian_R_b_L_c01">专业：</div>
                                <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["major"]); ?></div>
                            </li>
                            <li>
                                <div class="kongjian_R_b_L_c01">籍贯：</div>
                                <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["province"]); echo ($info1[0]["city"]); ?></div>
                            </li>
                            <li>
                                <div class="kongjian_R_b_L_c01">QQ：</div>
                                <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["qq"]); ?></div>
                            </li>
                            <!--  <li>
                            <div class="kongjian_R_b_L_c01">手机：</div>
                            <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["phone"]); ?></div>
                        </li>
                        -->
                        <li>
                            <div class="kongjian_R_b_L_c01">个人标签：</div>
                            <div class="kongjian_R_b_L_c02"><?php echo ($info1[0]["tag"]); ?></div>
                        </li>

                        <li>
                            <div class="kongjian_R_b_L_c01">状态：</div>
                            <div class="kongjian_R_b_L_c02">
                                <?php if($info1[0]['state'] == 1): ?>有项目，求组队
                                    <?php elseif($info1[0]['state'] == 2): ?>
                                    无项目，求组队
                                    <?php else: ?>
                                    最近没有项目或者组队意向<?php endif; ?>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="kongjian_R_b_LR"></div>
            <div class="kongjian_R_b_R">
                <div class="kongjian_R_b_R_a">
                    <table width="223" border="0">
                        <tr>
                            <td width="171" height="22">参加的比赛</td>
                            <td width="31">
                                <a href="#">
                                    更多
                                    <img src="__PUBLIC__/images/jiantouY.jpg" align="bottom" />
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="kongjian_R_b_R_b"></div>
                <div class="kongjian_R_b_R_c">
                    <ul></ul>
                </div>
            </div>

        </div>
        <form action="__GROUP__/Myzone/messageboard?id=<?php echo ($info1[0]["uid"]); ?>" method="post">

            <div class="kongjian_R_c">
                <div class="kongjian_R_c_top">留言板</div>
                <div class="kongjian_R_c_a"></div>
                <div class="kongjian_R_c_b"></div>
                <div class="kongjian_R_c_c wrap">

                    <textarea class="limitedContent" id="content" cols="100" rows="7" name="content"></textarea>
                    <input type="hidden" value="<?php echo ($info1[0]["uid"]); ?>" id="myid" name="id"/>
                    <!--<input type="hidden" value="3826" id="id" />
                    -->
                    <br />
                    <div class="limitword">
                        <span id="msg"></span>
                    </div>
                </div>
                <div class="kongjian_R_c_d">
                    <!--<a href="javascript:void(0);" onClick="add_content()" class="reply">留言</a>
                -->
                <input type="submit" value="留言"></div>
        </div>
    </form>

</div>
</div>
<div class="kongjian_bottom"></div>
<div class="fanye"></div>
</div>

<!-----------------------------------------中间要加的部分的结束---------------------------------------->

<div style="width:100%; height:10px; float:left;">
<hr color="#eaeaea"></div>
<div class="jieshu_a">
<div style="width:1033px; height:17px; float:left;"></div>
<div style="width:255px; height:28px; float:left;"></div>
<div class="jieshu_a_a">
<a href="http://weibo.com/yunstudio2012"> <strong>关注我们</strong>
</a>
</div>
<div class="jieshu_a_b">
<strong>|</strong>
</div>
<div class="jieshu_a_a">
<a href="http://www.kjjlpt.com/aboutus.php">
    <strong>关于我们</strong>
</a>
</div>
<div class="jieshu_a_b">
<strong>|</strong>
</div>
<div class="jieshu_a_a">
<a href="http://www.kjjlpt.com/aboutus.php">
    <strong>联系我们</strong>
</a>
</div>
<div class="jieshu_a_b">
<strong>|</strong>
</div>
<div class="jieshu_a_a">
<a href="http://www.yunstudio.net/sites/Demo/pub/gjyc/" target="_blank">
    <strong>加入我们</strong>
</a>
</div>
<div class="jieshu_a_b">
<strong>|</strong>
</div>
<div class="jieshu_a_a">
<a href="http://www.kjjlpt.com/showuser.php?uid=1">
    <strong>申请链接</strong>
</a>
</div>
</div>

<div style="width:100%; height:10px; float:left;">
<hr color="#eaeaea"></div>

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