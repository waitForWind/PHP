<?php if (!defined('THINK_PATH')) exit();?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($vo["title"]); ?></title>
<meta name="keywords" content="大学生科技交流平台,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛" />
<meta name="description" content="大学生科技交流平台是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能" />
<script type="text/javascript" src="./templates/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="./templates/js/main.js"></script>
<script src="./templates/js/daycoming.js"></script>
<script src="./templates/js/cookieclass.js"></script>
<script src="./templates/iealert/iealert.js" type="text/javascript"></script>
<script src="./templates/js/fixednav.js"></script>
<script src="./templates/js/baidu_search.js"></script>
<link rel="stylesheet" type="text/css" href="./templates/css/main.css" />
<link rel="stylesheet" type="text/css" href="./templates/css/shownews.css" /><link rel="stylesheet" type="text/css" href="./templates/css/list.css" />
<link rel="stylesheet" type="text/css" href="./templates/iealert/iealert.css" />
</head>
<body>
    <div class="head">
      <div class="head_a" >
        <a href="index.php">
        <img src="./templates/images/headlogo.jpg" width="260" height="95" alt="">
        </a>
       </div>
       <div style="width:130px; height:95px; float:left;">
       </div>
       <div class="head_b">
       </div>
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
                <input name=s type=radio checked> 
                </div>
         </form>
         </div> 
         <div class="head_c_1"> <a href="javascript:void(0);" id="search"><img src="./templates/images/sousuoFDJ.jpg" /></a>
         </div> 
         <div class="head_c_2">
           <div class="reg">
                        <a href="user.php?show=register">免费注册</a>&nbsp;|&nbsp;
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
        <li><a href="index.php" >首页</a></li>
        <li><a href="member.php" >人才宝库</a></li>
        <li> <a href="game.php" class="promoted" >赛事大厅</a></li>
        <li><a href="guestbook.php" >留言反馈</a></li>
        <li><a href="science.php"  class="promoted">科技立项</a></li>
        <li><a href="http://www.yunstudio.net/" target="_blank" class="promoted">Yuncms</a></li>
       </ul>
     </div>
     <div class="guangzhu">&nbsp;&nbsp; <a href="http://weibo.com/yunstudio2012" target="_blank"><img src="./templates/images/sina.png"/></a> &nbsp;&nbsp;
    </div>
  </div>
</div><script src="./templates/js/primsg.js" type="text/javascript"></script> 
<script charset="utf-8" src="./include/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./include/editor/lang/zh_CN.js"></script>
<div class="news_BG">
    <div class="news_A">
        <div class="news_A_b">
            <div class="news_A_a">
                <div class="news_A_a_top">
                </div>
                <div class="news">
                
                    
                    
                    
                    <div class="news_L">
                        <div class="news_L_top">
                        </div>
                         <div class="news_L_a">
                          <div class="news_L_a_top">
                <div class="place">当前位置：<a href="index.php">首页</a> > <strong>新闻中心</strong></div>
                          </div>
                          
                          
                          
                          
                          
  
  <div class="look">
        <div class="look_top">
        </div>
        <div class="look_a">
              <h1 class="title"><?php echo ($vo["title"]); ?></h1>
        </div>
    <div class="ninfo">作者：<?php echo ($vo["cid"]); ?> &nbsp;&nbsp;&nbsp;日期：<?php echo (date('Y-m-d',$vo["update_time"])); ?>&nbsp;&nbsp;&nbsp;浏览次数:<?php echo ($vo["look_num"]); ?></div>
    <div class="look_c acontent">
      <p style="text-align:left;text-indent:24pt;" align="left">

    <div>   <?php echo ($vo["content"]); ?> </div>
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
                           <div class="news_R_a_T_top">
                           </div>
                            <h2>热点推荐</h2>
                        </div> 
                        <div class="news_R_a_L">
                        </div> 
                        <div class="news_R_a_M">
                            <div class="news_R_a_M_left">
                            </div>
                            
                            
                            
                            
                            
                            <div class="news_R_a_M_m">
                             <ul>
                                                               <li><a href="shownews.php?show=news&nid=206">dreamweaver 配色</a><!--<span>2013-06-14</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=183">Windows下C语言的So</a><!--<span>2013-05-13</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=244">win8,win7安装mat</a><!--<span>2014-03-01</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=270">云作坊“掌上通”项目在“创青</a><!--<span>2014-05-26</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=161">长理掌上通</a><!--<span>2013-04-25</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=137">哈尔滨工业大学吴少华受聘我校</a><!--<span>2012-12-10</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=265">云作坊“掌上通”项目在“创青</a><!--<span>2014-04-03</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=264">大学生随时可做的工作！！</a><!--<span>2014-03-29</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=145">四川外语学院胡安江教授、熊沐</a><!--<span>2012-12-28</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=267">云作坊举行四周年定向越野活动</a><!--<span>2014-04-17</span>--></li>
                                                                </ul>
                            
                            
                            </div>

                        </div> 
                        <div class="news_R_a_R">
                        </div> 
                      </div>
                      
                      <div class="news_R_b">
                         <div class="news_R_b_left"> 
                         </div>
                          <div class="news_R_b_a"> 
                             <div class="news_R_b_a_top">
                                 <div class="news_R_b_a_top_T">
                                 </div>
                              <div class="news_R_b_a_top_L">
                                  </div>
                                  <div class="news_R_b_a_top_M">
                                  
                               <h2>相关新闻 </h2></div>
                                 <div class="news_R_b_a_top_more">
                                   <a href="#">更多<img src="./templates/images/jiantouY.jpg" />
                                 </a></div>
                             </div>
                             <div class="news_R_b_a_A">
                                 <div class="news_R_b_a_A_left">
                                 </div>
                                 <ul>
                                                                   <li><a href="shownews.php?show=news&nid=275">全国“挑战杯”大学生课外艺术作品竞赛作</a><!--<span>2014-06-30</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=146">四川外语学院胡安江教授、熊沐清教授来校</a><!--<span>2013-01-03</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=145">四川外语学院胡安江教授、熊沐清教授来校</a><!--<span>2012-12-28</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=142">清华大学博士生导师封宗信来校讲学</a><!--<span>2012-12-17</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=139">我校刘解龙教授在省社科界第三届年会作专</a><!--<span>2012-12-11</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=137">哈尔滨工业大学吴少华受聘我校客座教授并</a><!--<span>2012-12-10</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=136">化学院举办“全民消防 生命至上”防火安</a><!--<span>2012-12-09</span>--></li>
                                                                    <li><a href="shownews.php?show=news&nid=131">运筹数学与管理论坛暨杰出海外学者报告会</a><!--<span>2012-12-05</span>--></li>
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
          <div style="width:1033px; height:17px; float:left;">
          </div>
          <div style="width:255px; height:28px; float:left;">
          </div>
          <div class="jieshu_a_a">
          <a href="http://weibo.com/yunstudio2012"> <strong>关注我们</strong></a>
        </div>
          <div class="jieshu_a_b">
          <strong>|</strong>
          </div>
        <div class="jieshu_a_a">
          <a href="aboutus.php"> <strong>关于我们</strong></a>
          </div>
          <div class="jieshu_a_b">
          <strong>|</strong>
          </div>
        <div class="jieshu_a_a">
          <a href="aboutus.php"> <strong>联系我们</strong></a>
          </div>
          <div class="jieshu_a_b">
          <strong>|</strong>
          </div>
        <div class="jieshu_a_a">
          <a href="http://www.yunstudio.net/sites/Demo/pub/gjyc/" target="_blank"> <strong>加入我们</strong></a>
          </div>
          <div class="jieshu_a_b">
          <strong>|</strong>
          </div>
        <div class="jieshu_a_a">
          <a href="showuser.php?uid=1"> <strong>申请链接</strong></a>
          </div>
      </div>
      
      <div style="width:100%; height:10px; float:left;">
      <hr color="#eaeaea" />
      </div>
      
      <div class="jieshu_c">
          <div style="width:1033px; height:30px; float:left;">
          </div>
        <div class="footer">
              大学生科技交流平台版权所有&nbsp&nbsp版本号：v2.3 &nbsp;&nbsp;<a href="https://me.alipay.com/yunstudio" target="_blank"><img src="./templates/images/pay_encourage.jpg" /></a><br />
          Copyright 2012-2014&nbsp;by&nbsp;<a href="http://cms.yunstudio.net" target="_blank">Yuncms</a>&nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;<script src="http://s22.cnzz.com/stat.php?id=4125145&web_id=4125145&show=pic1" language="JavaScript"></script></div></div>
 
 <!----返回顶部,集成微博，微信----> 
  <ul id="jump">
    <li style="display:none;height:50px;"><a id="top" href="#top"></a></li>
    <li style="height:50px"><a id="sina" rel="nofollow" href="http://weibo.com/yunstudio2" target="_blank"></a></li>
    <li style="height:50px"><a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()">
      <div id="EWM"><img src="./templates/images/top/weixin_code.png" /></div>
      </a></li>
    <li style="height:50px"><a id="ceping" href="https://me.alipay.com/yunstudio" target="_blank"></a></li>
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