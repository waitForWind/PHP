<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://www.kjjlpt.com/my.php?show=allnotice -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>查查--大学生科创中心</title>
    <meta name="keywords" content="大学生科技交流平台,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛">
    <meta name="description" content="大学生科技交流平台是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能">
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/daycoming.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/cookieclass.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/iealert.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/fixednav.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/baidu_search.js"></script>

    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/member_student.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/tag.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/my.css" />
    <script src="__PUBLIC__/Css/logger.js"></script>
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



    <script src="__PUBLIC__/js/base.js" type="text/javascript"></script>
    <div class="rencai">
        <div class="rencai_top"></div>
        <div class="feilei">
            <div class="feilei_top"></div>
            <div class="feilei_a"></div>
            <a href="__GROUP__/Listmember/index">
                <div class="feilei_b">

                    <div class="fenlei_2"></div>
                    学生
                </div>
            </a>
            <div class="feilei_c"></div>
            <div class="feilei_d"></div>
            <div class="feilei_c"></div>
            <a href="__GROUP__/Listmember/teacher">
                <div class="feilei_e">
                    <div class="fenlei_3"></div>
                    教师
                </div>
            </a>
        </div>
        <div class="kongge01"></div>
        <div class="xuanze">
            <div class="xuanze_top"></div>
            <div class="xuanze_left"></div>
            <div class="xuanze_K">
                <div class="xuanze_a">
                    <form action="__GROUP__/Listmember/index" method="post" id="tag_search">
                        <div style="POSITION: relative; MARGIN-BOTTOM: 5px;float: left;">
                            标签：
                            <input type="text" class="inputtext" id=user_style style="width:160px;" autocomplete="off" name="tag" value="">
                            <DIV class=fashion_list>
                                <SPAN class=tag>
                                    <A style="COLOR: #76ad00; FONT-SIZE: 14px">nba</A>
                                    <A style="COLOR: #76ad00; FONT-SIZE: 14px">网购</A>
                                    <A style="COLOR: #76ad00; FONT-SIZE: 14px">星座控</A>
                                    <A style="COLOR: #ff7878; FONT-SIZE: 14px">电影</A>
                                    <A style="COLOR: #ff7878; FONT-SIZE: 14px">艺术</A>
                                    <A style="COLOR: #327aff; FONT-SIZE: 16px">森碟</A>
                                    <A style="COLOR: #ff683f; FONT-SIZE: 14px">编程</A>
                                    <A style="COLOR: #327aff; FONT-SIZE: 12px">游戏</A>
                                    <A style="COLOR: #327aff; FONT-SIZE: 14px">软件</A>
                                    <A style="COLOR: #ff683f; FONT-SIZE: 16px">程序猿</A>
                                    <A style="COLOR: #327aff; FONT-SIZE: 16px">互联网</A>
                                    <A style="COLOR: #ff7878; FONT-SIZE: 12px">周润发</A>
                                    <A style="COLOR: #76ad00; FONT-SIZE: 14px">安静</A>
                                    <A style="COLOR: #84a9f4; FONT-SIZE: 14px">神经质</A>
                                    <A style="COLOR: #ff3998; FONT-SIZE: 14px">演讲</A>
                                    <A style="COLOR: #327aff; FONT-SIZE: 16px">网络开发</A>
                                    <A style="COLOR: #ff683f; FONT-SIZE: 14px">文学</A>
                                    <A style="COLOR: #ff683f; FONT-SIZE: 16px">土豪</A>
                                    <A style="COLOR: #ff683f; FONT-SIZE: 16px">高富帅</A>
                                    <A style="COLOR: #ff3998; FONT-SIZE: 12px">屌丝</A>
                                    <A style="COLOR: #FF9900; FONT-SIZE: 14px">K歌之王</A>
                                </SPAN>
                            </DIV>
                            <SCRIPT type=text/javascript src="__PUBLIC__/js/page-setting.js"></SCRIPT>

                            <input type="hidden" name="action" value="keytag" />
                            <a href="javascript:void(0);" id="tagsearch">
                                <img src="__PUBLIC__/images/zuanzeSS.jpg" />
                            </a>
                        </div>
                    </form>
                </div>
                <div class="xuanze_a">

                    <form action="__GROUP__/Listmember/search/flag/<?php echo ($flag); ?>" method="post" id="user_search">
                        <div class="xuanze_b">

                            <span>&nbsp;&nbsp;&nbsp;</span>
                            性别：
                            <select name="data[sex]">
                                <option value="" selected="selected">不限</option>
                                <option value="1">男</option>
                                <option value="0">女</option>
                            </select>
                        </div>

                        <div class="xuanze_kj"></div>
                        <div class="xuanze_b">
                            年级：
                            <select name="data[grade]">
                                <option value="" selected="selected">不限</option>
                                <option value="2014">2014级</option>
                                <option value="2013">2013级</option>
                                <option value="2012">2012级</option>
                                <option value="2011">2011级</option>
                                <option value="2010">2010级</option>
                                <option value="2009">2009级</option>
                                <option value="2008">2008级</option>
                                <option value="0000">其他</option>
                            </select>
                        </div>
                        <div class="xuanze_kj"></div>
                        <div class="xuanze_b">
                            学院：
                            <select name="data[academy]" id="academy">
                                <option value="" selected="selected">不限</option>
                            </select>
                        </div>
                        <div class="xuanze_kj"></div>
                        <div class="xuanze_b">
                            专业：
                            <select name="data[major]" id="major">
                                <option value="" selected="selected">不限</option>
                            </select>
                        </div>
                        <div class="xuanze_kj"></div>
                        <div class="xuanze_b">
                            形象照：
                            <select name="data[isphoto]">

                                <option value="" selected="selected">不限</option>
                                <option value="1">有</option>
                                <option value="0">无</option>
                            </select>
                        </div>
                        <input type="hidden" value="user" name="action" />
                        <!----<input type="submit" value="查  询"/>
                        ---->
                    </form>

                    <script src="__PUBLIC__/js/academy.js" type="text/javascript"></script>
                    <!--**引入JS的代码要放在表单之后，否则取不到对应的节点**--> </div>
            </div>
            <div class="xuanze_c_top"></div>
            <div class="xuanze_c">
                <a href="javascript:void(0);" id="usersearch">
                    <img src="__PUBLIC__/images/rencaiSSbig.jpg" />
                </a>
            </div>
        </div>
        <div class="daibiao">
            <ul>
                <?php if(is_array($info1)): $i = 0; $__LIST__ = $info1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li>
                        <div class="daibiao_A"></div>
                        <div class="daibiao_B"></div>
                        <div class="daibiao_T">
                            <div class="daibiao_T_top"></div>
                            <div class="daibiao_T_left"></div>
                            <a href="__GROUP__/Myzone/mymessage?id=<?php echo ($li["uid"]); ?>">
                                
                              <!--   <img src="__PUBLIC__/Uploads/s_<?php echo ($li["avatar"]); ?>" /> -->

                                <?php if($li["avatar"] != NULL): ?><img width="120" height="120" alt="user name" src="__PUBLIC__/Uploads/s_<?php echo ($li["avatar"]); ?>">
                                    <?php else: ?>
                                    <img width="120" height="120" alt="user name" src="__PUBLIC__/images/qz_middle.jpg"><?php endif; ?>
                            </a>
                        </div>
                        <div class="daibiao_R_left"></div>
                        <div class="daibiao_R">
                            <!--daibiao_R_a开始-->
                            <div class="daibiao_R_a">
                                <div class="daibiao_R_b">

                                    <div class="daibiao_R_b_right"> <b><?php echo (mb_substr($li["nickname"],0,10,'utf-8')); ?></b>
                                    </div>
                                </div>
                                <div class="daibiao_R_b">
                                    <br/>
                                    <div class="daibiao_R_b_right">
                                        状&nbsp;态：
                                        <br/>
                                        <br/>
                                        <?php if($li["state"] == 0): ?>有项目，求组队
                                            <?php elseif($li["state"] == 1): ?>
                                            无项目，求组队
                                            <?php else: ?>
                                            最近没有项目或者组队意向<?php endif; ?>
                                    </div>
                                </div>

                            </div>
                            <!--daibiao_R_a结束-->
                            <a href="__GROUP__/Myzone/sendmsg?id=<?php echo ($li["uid"]); ?>&uid=info[0].uid">
                                <img src="__PUBLIC__/images/kongjianSX.jpg" />
                            </a>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="daibiao_H"></div>
            <div class="fanye">
               <?php echo ($page); ?>
            </div>
            <div class="kongbai02"></div>
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
        <script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732"></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <script type="text/javascript">
                    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
                </script>
        <!-- Baidu Button END --> </div>
</body>

</html>