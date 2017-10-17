<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>大学生科创中心欢迎您！</title>
    <meta name="keywords" content="大学生科创中心,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛" />
    <meta name="description" content="大学生科创中心是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能" />
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.movebg.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/daycoming.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/cookieclass.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/iealert.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/fixednav.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/baidu_search.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/index.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/showpic.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css" />
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




    <script type="text/javascript" src="__PUBLIC__/js/scrollnews.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/imgshow.js"></script>

    <div class="main_all" style="clear:both;">
        <div style="width:1033px; height:10px; float:left;"></div>
        <div class="main">
            <div class="main_a">
                <div class="main_a_1">

                    <!-- 大屏广告 start -->

                    <div class="w733 fl" style="height:340px;clear:both;">
                        <div class="highlight_tip">
                            <ul class="tab clear">
                                <?php if(is_array($screen_news)): $i = 0; $__LIST__ = $screen_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i; if($i < 7): ?><li class="navigation">
                                            <img src="__PUBLIC__/Uploads/s_<?php echo ($new["filename"]); ?>" width="99" height="48" />
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                <li class="navigation">
                                    <img src="__PUBLIC__/images/20130803211024_45057.jpg" alt="欢迎新同学" height="48" width="99" />
                                </li>
                            </ul>
                        </div>
                        <div class="v_content_list">
                            <ul class="clear">
                                <?php if(is_array($screen_news)): $i = 0; $__LIST__ = $screen_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i; if($i < 7): ?><li>
                                            <a href="__GROUP__/News/index?show=new&nid=<?php echo ($new["id"]); ?>" target="_blank">
                                                <img src="__PUBLIC__/Uploads/m_<?php echo ($new["filename"]); ?>" width="706" height="337" />
                                            </a>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                <li>
                                    <a href="http://" target="_blank">
                                        <img src="__PUBLIC__/images/20130803211024_45057.jpg" alt="欢迎新同学" width="706" height="337" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- 大屏广告 end --> </div>
                <div class="main_a_2">
                    <DIV class="main_a_2_a">
                        <div style="width:720px; height:13px; float:left"></div>
                        <div style="float:left; width:200px; height:20px; margin-left:20px; font-size:20px;"> <strong>创意园区</strong>
                        </div>
                        <div class="more"> <strong><a href="#">更多</a></strong> 
                            <img src="__PUBLIC__/images/jiantouY.jpg" />
                        </div>
                    </DIV>
                    <div class="main_a_2_b">
                        <div class="scrollNews" style="height:260px; width:720px; float:left">
                            <ul>
                                <?php if(is_array($ideas)): $i = 0; $__LIST__ = $ideas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$idea): $mod = ($i % 2 );++$i;?><li>
                                        <a href="__GROUP__/Chuangyi/displayidea?id=<?php echo ($idea["id"]); ?>" class="tooltip" title="<?php echo ($idea["title"]); ?>"><?php echo ($idea["title"]); ?></a>
                                        <span class="time">
                                            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($idea["author"]); ?>&nbsp;发表于：<?php echo (date("Y-m-d H:i:s",$idea["time"])); ?>
                                        </span>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main_a_3a">
                    <div class="main_a_3">
                        <div class="main_a_3_a">
                            <div style="width:720px; height:8px; float:left"></div>
                            <div style="float:left; width:200px; height:20px; margin-left:20px; font-size:20px; color:#3182aa">
                                <strong>科技动态</strong>
                            </div>
                            <div class="more">
                                <strong><a href="#">更多</a></strong> 
                                <img src="__PUBLIC__/images/jiantouY.jpg" />
                            </div>
                        </div>
                        <div class="main_kj">
                            <div style="width:700px; height:10px; float:left;"></div>
                            <div style="width:700px; height:110px; float:left;">
                                <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i; if($i < 6): ?><div class="main_kj_1">
                                            <div class="main_kj_2">
                                                <a href="__GROUP__/News/index?show=new&nid=<?php echo ($new["id"]); ?>">
                                                    <img src="__PUBLIC__/Uploads/s_<?php echo ($new["filename"]); ?>" />
                                                </a>
                                            </div>
                                            <a href="__GROUP__/News/index?show=new&nid=<?php echo ($new["id"]); ?>"><?php echo (mb_substr($new["title"],0,8,'utf-8')); ?></a>
                                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div style="width:700px; height:10px; float:left;"></div>
                            <div class="main_kj_aaa">
                                <div style="width:10px; height:70px; float:left;"></div>
                                <ul>

                                    <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li>
                                            <a href="__GROUP__/News/index?show=new&nid=<?php echo ($new["id"]); ?>"><?php echo (mb_substr($new["title"],0,15,'utf-8')); ?></a>
                                            <span class="time"><?php echo (date('Y-m-d',$new["update_time"])); ?></span>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main_a_3a" style="height:200px;">
                    <div class="main_a_3" style="height:175px;">
                        <div class="main_a_3_a">
                            <div style="width:720px; height:8px; float:left"></div>
                            <div style="float:left; width:200px; height:20px; margin-left:20px; font-size:20px; color:#3182aa">
                                <strong>名师讲座</strong>
                            </div>
                            <div class="more">
                                <strong>
                                    <a href="#">更多</a>
                                </strong>
                                <img src="__PUBLIC__/images/jiantouY.jpg" />
                            </div>
                        </div>
                        <div style="width:700px; height:10px; float:left;"></div>
                        <div class="main_ms">
                            <div style="width:20px; height:110px; float:left"></div>
                            <ul>
                                <?php if(is_array($teachers)): $i = 0; $__LIST__ = $teachers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$teacher): $mod = ($i % 2 );++$i;?><li>
                                        <a href="__GROUP__/News/index/show/teacher/nid/<?php echo ($teacher["id"]); ?>"><?php echo (mb_substr($teacher["title"],0,15,'utf-8')); ?></a>
                                        <span class="timeother"><?php echo (date('Y-m-d',$teacher["update_time"])); ?></span>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_b">
                <div class="main_b_1">
                    <div style="width:310px; height:160px; float:left">
                        <div style="width:40px; height:160px; float:left"></div>
                        <div class="changyi_1"></div>
                        <div>
                            <a href="__GROUP__/Chuangyi/index" target="_blank" class="promoted">
                                <img src="__PUBLIC__/images/chaangyiA.jpg" />
                            </a>
                        </div>
                    </div>
                    <hr color="#e4eff8" style="width:260px;" />
                    <div style="width:310px; height:160px; float:left;">
                        <div style="width:30px; height:25px; float:left;"></div>
                        <div class="main_b_1_a">
                            <strong>公告</strong>
                        </div>
                        <div class="main_b_1_b">
                            <div style="width:30px; height:135px; float:left;"></div>
                            <div style="width:270px; height:135px; float:left;">
                                <div style="width:260px; height:7px; float:left;"></div>
                                <?php if(is_array($Relannounce)): foreach($Relannounce as $key=>$v): ?><ul>
                                        <li class="Relannounce_list">
                                            <a href="<?php echo U('Relannounce/index',array('id' => $v['id']));?>" class="linkscroll"><?php echo (mb_substr($v["title"],0,14,'utf-8')); ?>
                                            </a>
                                        </li>
                                        <li class="time">
                                            <span><?php echo (date("Y-m-d",$v["updata_time"])); ?></span>
                                        </li>
                                    </ul><?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_b_2">
                    <div class="main_b_2_a">
                        <div style="width:308px; height:13px; float:left"></div>
                        <div style="float:left; width:100px; height:20px; margin-left:20px; font-size:20px;">
                            <strong>热门赛事</strong>
                        </div>
                        <div class="more">
                            <strong>
                                <a href="__GROUP__/Game/game">更多</a>
                            </strong>
                            <img src="__PUBLIC__/images/jiantouY.jpg" />
                        </div>
                    </div>
                    <div class="hotwork">
                        <div style="width:4px; height:300px; float:left;"></div>
                        <div class="main_b_2_b">
                            <div style=" width:42px; height:338px; float:left;"></div>
                            <div style=" width:245px; height:13px; float:left;"></div>
                            <ul>
                                <?php if(is_array($gamelist)): $i = 0; $__LIST__ = $gamelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                        <a href="__GROUP__/Game/index?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,15,'utf-8')); ?></a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main_b_3">
                    <div style="width:4px; height:370px; float:left;"></div>

                    <div class="main_b_3_a">
                        <div class="main_b_3_a1">
                            <div style="width:300px; height:13px; float:left"></div>
                            <div style="float:left; width:100px; height:20px; margin-left:20px; font-size:20px;">
                                <strong>科技达人</strong>
                            </div>
                            <div class="more">
                                <strong>
                                    <a href="#">更多</a>
                                </strong>
                                <img src="__PUBLIC__/images/jiantouY.jpg" />
                            </div>
                        </div>

                        <div class="main_b_3_a2">
                            <div style="width:298px; height:14px; float:left;"></div>
                            <div style="width:12px; height:306px; float:left;"></div>

                            <?php if(is_array($vip)): $i = 0; $__LIST__ = $vip;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><div class="main_b_3_dr">
                                    <div style="width:93px; height:7px; float:left;"></div>
                                    <div style="width:10px; height:92px; float:left;"></div>
                                    <div class="main_b_3_dr_a">
                                        <div class="main_b_3_dr_b">
                                            <div style="width:65px; height:8px; float:left;"></div>
                                            <a href="__GROUP__/Myzone/mymessage/id/<?php echo ($vi["uid"]); ?>">
                                                <?php if($vi["avatar"] != NULL): ?><img width="48" height="48" alt="user name" src="__PUBLIC__/Uploads/s_<?php echo ($vi["avatar"]); ?>">
                                                    <?php else: ?>
                                                    <img width="48" height="48" alt="user name" src="__PUBLIC__/images/qz_middle.jpg"><?php endif; ?>
                                            </a>
                                        </div>
                                        <a href="__GROUP__/Myzone/mymessage/id/<?php echo ($vi["uid"]); ?>"><?php echo ($vi["email"]); ?></a>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jieshu">
    <div class="lianjie">
        <div style="width:1033px; height:20px; float:left;">
        </div>
        <div class="lianjie_a23">
            <div class="lianjie_a">
                <div class="lianjie_a_1"><strong>合作伙伴：</strong></div>
                <ul>
                    <li><a href="#" >智慧校园</a></li>
                    <li><a href="http://user.qzone.qq.com/764302375/infocenter?ptsig=AHKv*jVnebNu5l-8-UueSDkpVkM6ucPZEoClUzKMcsQ_" target="_blank">chytth</a></li>
                    <li><a href="#">csdn</a></li>
                    <li><a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a></li>
                </ul>
            </div>
            <div class="lianjie_a">
                <div class="lianjie_a_1"><strong>友情链接：</strong></div>
                <ul>
                    <li><a href="http://www.gxut.edu.cn/" target="_blank">广西科技大学</a></li>
                    <li><a href="http://online.gxut.edu.cn/chengji/" target="_blank">柳苑晨曦</a></li>
                    <li><a href="http://tieba.baidu.com/f?kw=%B9%E3%CE%F7%B9%A4%D1%A7%D4%BA" target="_blank">广西科技大学贴吧</a></li>
                    <li><a href="http://www.lvrobot.com/portal.php" target="_blank">爱机器人</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jieshu_a">
        <div style="width:1033px; height:17px; float:left;">
        </div>
        <div style="width:255px; height:28px; float:left;">
        </div>
        <div class="jieshu_a_a">
            <a href="#"> <strong>关注我们</strong></a>
        </div>
        <div class="jieshu_a_b">
            <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#"> <strong>关于我们</strong></a>
        </div>
        <div class="jieshu_a_b">
            <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#"> <strong>联系我们</strong></a>
        </div>
        <div class="jieshu_a_b">
            <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#" target="_blank"> <strong>加入我们</strong></a>
        </div>
        <div class="jieshu_a_b">
            <strong>|</strong>
        </div>
        <div class="jieshu_a_a">
            <a href="#"> <strong>申请链接</strong></a>
        </div>
    </div>

    <div style="width:100%; height:10px; float:left;">
        <hr color="#eaeaea" />
    </div>

    <div class="jieshu_c">
        <div style="width:1033px; height:30px; float:left;">
        </div>
        <div class="footer">
            大学生科创中心版权所有&nbsp&nbsp版本号：v1.1 &nbsp;&nbsp;<a href="#" target="_blank"></a><br />
            Copyright 2014-2015&nbsp;by&nbsp;<a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>
            &nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;<a>点击量：<?php echo ($count); ?></a>
            <script src="#" language="JavaScript"></script></div></div></div>
            
              <!----返回顶部,集成微博，微信---->
    <ul id="jump">
        <li style="display:none;height:50px;"><a id="top" href="#top"></a></li>
        <li style="height:50px"><a id="sina" rel="nofollow" href="#" target="_blank"></a></li>
        <li style="height:50px"><a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()">
        </a></li>
        <li style="height:50px"><a id="ceping" href="#" target="_blank"></a></li>
        <li style="height:50px"><a id="reply" href="guestbook.php#fadeback" target="_blank"></a></li>
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