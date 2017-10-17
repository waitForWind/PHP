<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>留言--大学生科创中心</title>
        <meta name="keywords" content="大学生科创中心,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛">
        <meta name="description" content="大学生科创中心是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能">
        <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/daycoming.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/cookieclass.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/iealert.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/fixednav.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/baidu_search.js"></script>

        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/my.css"> 
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/guestbook.css" />
       
        <script src="__PUBLIC__/Css/logger.js"></script>
        <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css">
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




        <!----------------中间的部分-------------->
        <div class="liuyan_BG">
            <div class="liuyan_A">
                <div class="liuyan_A_b">
                    <div class="liuyanban">
                        <div class="liuyanban_top">
                        </div>
                        <div class="liuyanban_liuyan">
                            <div class="liuyanban_a">
                                <div class="liuyanban_a_top"></div>
                                <div class="liuyanban_a_left"></div>
                                <div align="left"><strong>留言板</strong></div>
                               
                            </div>
                            <div class="liuyan_H"> </div>
                            <div class="liuyan_All">
                                <div class="liuyan_All_top"> </div>
                    
                                <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><div class="liuyan_All_main">
                                        <div class="liuyan_All_tu">
                                        <?php if($li["photo"] != NULL): ?><a href="__GROUP__/Myzone/mymessage/id/<?php echo ($li["uid"]); ?>"><img height="50px" align="left" src="__PUBLIC__/Uploads/<?php echo ($li["photo"]); ?>" />
                                            </a>
                                        <?php else: ?><img height="50px" align="left" src="__PUBLIC__/images/qz_small.jpg" /><?php endif; ?>
                                        </div>
                                        <div class="liuyan_All_b">
                                            <div class="liuyan_All_b_a">
                                                <div align="left" class="liuyan_All_ni"> <span> <a href="__GROUP__/Myzone/mymessage/id/<?php echo ($li["uid"]); ?>"><?php echo ($li["name"]); ?></a></span></div>
                                                <!--<div class="liuyan_All_zhu"> <span>主题：</span> <span style="color:#999;"><?php echo ($li["title"]); ?></span></div>-->
                                                <div align="left"> <span>主题：</span> <span style="color:#999;"><?php echo ($li["title"]); ?></span><span class="liuyan_All_time"><?php echo (date("Y-m-d H:i:s",$li["time"])); ?></span></div>
                                                <!--<div  class="liuyan_All_time"><?php echo (date("Y-m-d H:i:s",$li["time"])); ?></div>-->
                                            </div>
                                            <div class="liuyan_All_wen" align="left"><?php echo ($li["content"]); ?></div>
                                            <?php if($li["respond"] != null): ?><div class="liuyan_All_huifu">
                                                <div class="liuyan_All_reply" align="left">回复：<span style="color:#999;"><?php echo ($li["respond"]); ?></span><span class="liuyan_All_time"></span>
                                                </div>
                                            </div><?php endif; ?>
                                        </div>
                                        <div class="liuyan_All_kongbai"> </div>
                                        <div class="liuyan_All_bottom"> </div>

                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                            </div>

                            <!-------------------------------翻页-------------------------->

                            <div class="fenye"><?php echo ($page); ?></div>
                            <div style="width:965px; height:10px; float:left;"></div>

                            <!-------------------------------------------------------------->
                        </div>

                        <div class="liuyan_WY">
                            <div class="liuyanban_a" align="left">
                                <div class="liuyanban_a_top">
                                </div>
                                <div class="liuyanban_a_left">
                                </div>
                                <strong><a name='fadeback'>我要留言</a></strong>
                            </div>
                            <div class="liuyan_H">
                            </div>

                            <form action="__GROUP__/Guestbook/add" method="post" id="guestbook">
                               
                                <!---------------------------留言表单---------------------------->
                                <div class="liuyan_WY_a">
                                    <div class="liuyan_WY_left">
                                    </div>

                                    <div class="liuyan_WY_right">
                                        <div class="liuyan_WY_r_top">
                                        </div>
                                        <div class="liuyan_WY_r">

                                            <div class="liuyan_WY_r_a">您的姓名：
                                            </div>
                                            <div class="liuyan_WY_r_b" align="left">
                                                <input type="text" name="guestbook[name]" value="" />
                                            </div>
                                        </div>
                                        <div class="liuyan_WY_r">

                                            <div class="liuyan_WY_r_a">留言主题：
                                            </div>
                                            <div class="liuyan_WY_r_b" align="left">
                                                <input type="text" name="guestbook[title]" />
                                            </div>
                                        </div>
                                        <div class="liuyan_WY_r">

                                            <div class="liuyan_WY_r_a">留言内容：
                                            </div>
                                            <div class="liuyan_WY_r_b wrap">
                                                <textarea class="limitedContent" name="guestbook[content]" cols="100" rows="7"></textarea>
                                                <br />
                                                <div class="limitword"><span id="msg"></span></div>
                                            </div>

                                        </div>

                                        <div class="liuyan_WY_r">

                                            <div class="liuyan_WY_r_a">验证码：
                                            </div>
                                            <div class="liuyan_WY_r_b" align="left">
                                                <input type="text" name="verifycode" />
                                                <img src="__GROUP__/Base/verify_code" onclick="this.src+='?rand='+Math.random()" title="点击更换" style="cursor:pointer; margin-bottom:-8px;">
                                            </div>
                                        </div>

                                        <div class="liuyan_WY_r">

                                            <div class="liuyan_WY_r_a">
                                            </div>
                                            <div class="liuyan_WY_r_b" align="left">
                                                <!--<div class="liuyan_WY_r_b"><a href="javascript:void(0)" class="reply" id="replys">留言</a></div>-->
                                                <input class="reply" type="submit" value="提交" align="middle"/>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>

                        <div style="width:1034px; height:20px; float:left">
                        </div>
                    </div>
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
            <hr color="#eaeaea">
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
                <a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()">
                </a>
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