<?php if (!defined('THINK_PATH')) exit();?>﻿ <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
   <title>云作坊重新回归计通学院--大学生科技交流平台</title>
   <meta name="keywords" content="大学生科技交流平台,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛" /> 
   <meta name="description" content="大学生科技交流平台是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能" /> 
   <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
   <script src="__PUBLIC__/js/daycoming.js"></script>
   <script src="__PUBLIC__/js/cookieclass.js"></script>
   <script src="__PUBLIC__/js/iealert.js" type="text/javascript"></script>
   <script src="__PUBLIC__/js/fixednav.js"></script>
   <script src="__PUBLIC__/js/baidu_search.js"></script>
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css" /> 
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/shownews.css" /> 
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/list.css" /> 
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css" /> 
 </head>
 <body>
   <div class="head">
     <div class="head_a" >
       <a href="index.php">
         <img src="__PUBLIC__/images/headlogo.jpg" width="260" height="95" alt=""></a>
     </div>
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
             <input name=si type=hidden value="www.kjjlpt.com"> 
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
           <a href="user.php?show=register">免费注册</a>
           &nbsp;|&nbsp;
           <a href="user.php?show=login">登&nbsp;陆</a>
           <a href="https://api.weibo.com/oauth2/authorize?client_id=3226403690&redirect_uri=http%3A%2F%2Fwww.kjjlpt.com%2Finclude%2Fsina%2Fcallback.php&response_type=code" class="reg_a sina_reg"></a>

         </div>
       </div>
     </div>
   </div>

   <div class="daohang_a"  id="mynav">
     <div class="daohang">

       <div class="nav">
         <ul>
           <li>
             <a href="index.php" >首页</a>
           </li>
           <li>
             <a href="member.php" >人才宝库</a>
           </li>
           <li>
             <a href="game.php" class="promoted" >赛事大厅</a>
           </li>
           <li>
             <a href="guestbook.php" >留言反馈</a>
           </li>
           <li>
             <a href="science.php"  class="promoted">科技立项</a>
           </li>
           <li>
             <a href="http://www.yunstudio.net/" target="_blank" class="promoted">Yuncms</a>
           </li>
         </ul>
       </div>
       <div class="guangzhu">
         &nbsp;&nbsp;
         <a href="http://weibo.com/yunstudio2012" target="_blank">
           <img src="__PUBLIC__/images/sina.png"/> 
         </a>
         &nbsp;&nbsp;
       </div>
     </div>
   </div>
   <script src="__PUBLIC__/js/primsg.js" type="text/javascript"></script>
   <script charset="utf-8" src="./include/editor/kindeditor-min.js"></script>
   <script charset="utf-8" src="./include/editor/lang/zh_CN.js"></script>
   <div class="news_BG">
     <div class="news_A">
       <div class="news_A_b">
         <div class="news_A_a">
           <div class="news_A_a_top"></div>
           <div class="news">

             <div class="news_L">
               <div class="news_L_top"></div>
               <div class="news_L_a">
                 <div class="news_L_a_top">
                   <div class="place">
                     当前位置：
                     <a href="index.php">首页</a>
                     > <strong>公告中心</strong>
                   </div>
                 </div>

                 <div class="look">
                   <div class="look_top"></div>
                   <div class="look_a">
                     <h1 class="title"><?php echo ($info["title"]); ?></h1>
                   </div>
                   <div class="ninfo">
                     日期：<?php echo (date("Y-m-d H:i:s",$vo["updata_time"])); ?>&nbsp;&nbsp;&nbsp;浏览次数:204
                   </div>
                   <div class="look_c acontent">
                     <p>
                       <?php echo ($info["content"]); ?>
                     </p>
                     <span></span>
                     <p>
                       <img style="height:437px;width:672px;" alt="" src="http://www.kjjlpt.com/uploads/image/20140628/20140628114446_53909.jpg" width="959" height="720" /> 
                       &nbsp;&nbsp;
                     </p>
                     <p>
                       <span></span>
                       <span></span>
                       <img style="height:484px;width:674px;" alt="" src="http://www.kjjlpt.com/uploads/image/20140628/20140628114446_94587.jpg" width="960" height="719" /> 
                       &nbsp;
                       <span></span>
                       <img style="height:527px;width:677px;" alt="" src="http://www.kjjlpt.com/uploads/image/20140628/20140628114448_82766.jpg" width="1597" height="1199" /> 
                     </p>
                   </div>
                   <div class="share">
                     <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                       <span class="bds_more">分享到：</span>
                       <a class="bds_qzone"></a>
                       <a class="bds_tsina"></a>
                       <a class="bds_tqq"></a>
                       <a class="bds_renren"></a>
                       <a class="shareCount"></a>
                     </div>
                     <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=646732" ></script>
                     <script type="text/javascript" id="bdshell_js"></script>
                     <script type="text/javascript">
  document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
                   </div>

                   <div class="ds-thread"></div>

                   <script type="text/javascript">

var duoshuoQuery = {short_name:"kjjl"};
  (function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = 'http://static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] 
    || document.getElementsByTagName('body')[0]).appendChild(ds);
  })();
    
  </script>

                 </div>

               </div>

             </div>

             <div class="news_R">
               <div class="news_R_a">
                 <div class="news_R_a_T">
                   <div class="news_R_a_T_top"></div>
                   <h2>热点推荐</h2>
                 </div>
                 <div class="news_R_a_L"></div>
                 <div class="news_R_a_M">
                   <div class="news_R_a_M_left"></div>

                   <div class="news_R_a_M_m">
                     <ul>
                       <li>
                         <a href="shownews.php?show=news&nid=206">dreamweaver 配色</a>
                         <!--<span>2013-06-14</span>
                       -->
                     </li>
                     <li>
                       <a href="shownews.php?show=news&nid=183">Windows下C语言的So</a>
                       <!--<span>2013-05-13</span>
                     -->
                   </li>
                   <li>
                     <a href="shownews.php?show=news&nid=244">win8,win7安装mat</a>
                     <!--<span>2014-03-01</span>
                   -->
                 </li>
                 <li>
                   <a href="shownews.php?show=news&nid=270">云作坊“掌上通”项目在“创青</a>
                   <!--<span>2014-05-26</span>
                 -->
               </li>
               <li>
                 <a href="shownews.php?show=news&nid=161">长理掌上通</a>
                 <!--<span>2013-04-25</span>
               -->
             </li>
             <li>
               <a href="shownews.php?show=news&nid=137">哈尔滨工业大学吴少华受聘我校</a>
               <!--<span>2012-12-10</span>
             -->
           </li>
           <li>
             <a href="shownews.php?show=news&nid=265">云作坊“掌上通”项目在“创青</a>
             <!--<span>2014-04-03</span>
           -->
         </li>
         <li>
           <a href="shownews.php?show=news&nid=264">大学生随时可做的工作！！</a>
           <!--<span>2014-03-29</span>
         -->
       </li>
       <li>
         <a href="shownews.php?show=news&nid=267">云作坊举行四周年定向越野活动</a>
         <!--<span>2014-04-17</span>
       -->
     </li>
     <li>
       <a href="shownews.php?show=news&nid=145">四川外语学院胡安江教授、熊沐</a>
       <!--<span>2012-12-28</span>
     -->
   </li>
 </ul>

 </div>

 </div>
 <div class="news_R_a_R"></div>
 </div>

 <div class="news_R_b">
 <div class="news_R_b_left"></div>
 <div class="news_R_b_a">
 <div class="news_R_b_a_top">
 <div class="news_R_b_a_top_T"></div>
 <div class="news_R_b_a_top_L"></div>
 <div class="news_R_b_a_top_M">

   <h2>相关新闻</h2>
 </div>
 <div class="news_R_b_a_top_more">
   <a href="#">
     更多
     <img src="__PUBLIC__/images/jiantouY.jpg" /> 
   </a>
 </div>
 </div>
 <div class="news_R_b_a_A">
 <div class="news_R_b_a_A_left"></div>
 <ul>
   <li>
     <a href="shownews.php?show=news&nid=274">云作坊重新回归计通学院</a>
     <!--<span>2014-06-28</span>
   -->
 </li>
 <li>
   <a href="shownews.php?show=news&nid=270">云作坊“掌上通”项目在“创青春”暨挑战</a>
   <!--<span>2014-05-26</span>
 -->
 </li>
 <li>
 <a href="shownews.php?show=news&nid=268">长沙理工大学第六届“守正杯”辩论赛8进</a>
 <!--<span>2014-04-28</span>
 -->
 </li>
 <li>
 <a href="shownews.php?show=news&nid=266">设计艺术学院举办第十一届大学生艺术文化</a>
 <!--<span>2014-04-17</span>
 -->
 </li>
 <li>
 <a href="shownews.php?show=news&nid=252">第九届交通科技大赛校内选拔赛落幕</a>
 <!--<span>2014-03-25</span>
 -->
 </li>
 <li>
 <a href="shownews.php?show=news&nid=248">设计艺术学院第六届“挑战杯”预答辩暨经</a>
 <!--<span>2014-03-14</span>
 -->
 </li>
 <li>
 <a href="shownews.php?show=news&nid=247">化学学院成功举行第六届“挑战杯”创业计</a>
 <!--<span>2014-03-12</span>
 -->
 </li>
 <li>
 <a href="shownews.php?show=news&nid=241">平台接入新浪微博</a>
 <!--<span>2014-01-23</span>
 -->
 </li>
 </ul>
 </div>
 </div>

 </div>
 </div>

 </div>
 </div>
 </div>
 </div>
 </div>
 <div style="width:100%; height:10px; float:left;">
 <hr color="#eaeaea" /> 
 </div>

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
 <a href="aboutus.php">
 <strong>关于我们</strong>
 </a>
 </div>
 <div class="jieshu_a_b">
 <strong>|</strong>
 </div>
 <div class="jieshu_a_a">
 <a href="aboutus.php">
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
 <a href="showuser.php?uid=1">
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
 大学生科技交流平台版权所有&nbsp&nbsp版本号：v2.3 &nbsp;&nbsp;
 <a href="https://me.alipay.com/yunstudio" target="_blank">
 <img src="__PUBLIC__/images/pay_encourage.jpg" /> 
 </a>
 <br /> 
 Copyright 2012-2014&nbsp;by&nbsp;
 <a href="http://cms.yunstudio.net" target="_blank">Yuncms</a>
 &nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;
 <script src="http://s22.cnzz.com/stat.php?id=4125145&web_id=4125145&show=pic1" language="JavaScript"></script>
 </div>
 </div>

 <!----返回顶部,集成微博，微信----> 
 <ul id="jump">
 <li style="display:none;height:50px;">
 <a id="top" href="#top"></a>
 </li>
 <li style="height:50px">
 <a id="sina" rel="nofollow" href="http://weibo.com/yunstudio2" target="_blank"></a>
 </li>
 <li style="height:50px">
 <a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()">
 <div id="EWM">
 <img src="__PUBLIC__/images/top/weixin_code.png" /> 
 </div>
 </a>
 </li>
 <li style="height:50px">
 <a id="ceping" href="https://me.alipay.com/yunstudio" target="_blank"></a>
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
 <!-- Baidu Button END --> </body>
 </html>