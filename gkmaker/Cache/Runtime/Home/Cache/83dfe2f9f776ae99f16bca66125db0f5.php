<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo ($vo["title"]); ?></title>
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
                    <h1 class="title"><?php echo ($vo["title"]); ?></h1>
                  </div>
                  <div class="ninfo">
                    作者：<?php echo ($vo["cid"]); ?> &nbsp;&nbsp;&nbsp;日期：<?php echo (date('Y-m-d',$vo["update_time"])); ?>&nbsp;&nbsp;&nbsp;浏览次数:<?php echo ($vo["look_num"]); ?>
                  </div>
                  <div class="look_c acontent">
                    <p><?php echo ($vo["content"]); ?></p>
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
          <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li>
              <a href="__GROUP__/News/index/show/new/nid/<?php echo ($new["id"]); ?>"><?php echo (mb_substr($new["title"],0,15,'utf-8')); ?></a>

            </li><?php endforeach; endif; else: echo "" ;endif; ?>
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
          <?php if(is_array($about_news)): $i = 0; $__LIST__ = $about_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$about_new): $mod = ($i % 2 );++$i; if($i < 11): ?><li>
                <a href="__GROUP__/News/index/show/new/nid/<?php echo ($new["id"]); ?>"><?php echo (mb_substr($about_new["title"],0,15,'utf-8')); ?></a>
              </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

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
      <a href="#"> <strong>关注我们</strong>
      </a>
    </div>
    <div class="jieshu_a_b">
      <strong>|</strong>
    </div>
    <div class="jieshu_a_a">
      <a href="#">
        <strong>关注我们</strong>
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
</html>