<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)http://www.kjjlpt.com/game.php?show=apply&way=team&id=194 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title></title>
    <meta name="keywords" content="大学生科技交流平台,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛">
    <meta name="description" content="大学生科技交流平台是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能">
    <script type="text/javascript" src="__PUBLIC__/Js/main.js"></script>
    <script src="__PUBLIC__/js/daycoming.js"></script>
    <script src="__PUBLIC__/js/cookieclass.js"></script>
    <script src="__PUBLIC__/js/iealert.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/fixednav.js"></script>
    <script src="__PUBLIC__/js/baidu_search.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/fileprogress.js" charset="utf-8"></script>
    <script type="text/javascript" src="__PUBLIC__/js/handlers.js" charset="utf-8"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/team.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/apply.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/bdsstyle.css" />
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



    <div class="fast_all">
        <div class="fast_top"></div>
        <div class="fast">
            <div class="fast_a">
                <div class="place">
                    当前位置：
                    <a href="__GROUP__/Index/index">首页</a>
                    &gt; <strong>快速报名</strong>
                </div>
            </div>
            <hr width="98%" color="#f1f1f1">
            <div class="fast_b">
                您当前正在报名参加：
                <a href="__GROUP__/Game/index/id/<?php echo ($teamregister[0]["id"]); ?>"><?php echo ($teamregister[0]["title"]); ?></a>
                <br></div>
            <div class="fast_c">
                <div class="fast_c_L">
                    <div class="fast_c_L_top"></div>
                    <div class="fast_c_L_left"></div>
                    <div class="fast_c_L_right">
                        <!--<h4>
                        <a href="?show=apply&way=person&id=194">个人报名点击这里</a>
                    </h4>
                    <table>
                        -->
                        <form action="__URL__/teamregistergame" method="post" enctype="multipart/form-data">
                            <table width="480" border="0">
                                <tbody>
                                    <tr style="display:none">
                                        <td width="80">赛事名称：</td>
                                        <td>
                                            <input tpye="text" class="input" value="<?php echo ($registergame[0]["title"]); ?>" name="teamapply[gameName]" size="20"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="80">团队名称：</td>
                                        <td>
                                            <input type="text"   name="teamapply[teamname]" size="20"></td>
                                    </tr>
                                    <tr>
                                        <td>指导老师：</td>
                                        <td>
                                            <input type="text" name="teamapply[teacher]"  size="20"></td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3>--队长信息--</h3>
                            <table width="480" border="0" height="370">
                                <tbody>
                                    <tr>
                                        <td width="80">真实姓名：</td>
                                        <td width="390">
                                            <input type="text"   name="teamapply[relname]" size="20"></td>
                                    </tr>
                                    <tr>
                                        <td>性别</td>
                                        <td>
                                            <div style="width:100px; height:20px; float:left;">
                                                <input type="radio" name="teamapply[sex]"  checked="" value="0">男</div>
                                            <div style="width:100px; height:20px; float:left;">
                                                <input type="radio" name="teamapply[sex]" value="1">女</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>学院：</td>
                                        <td>
                                            <select name="apply[academy]" id="academy">
                                                <option selected="selected" value="">学院设置</option>
                                                <?php if(is_array($academyList)): $i = 0; $__LIST__ = $academyList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo["id"]); ?> ><?php echo ($vo["academy"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>年级：</td>
                                        <td>
                                            <select name="apply[class]" id="class">
                                                <option selected="selected" value="">年级设置</option>
                                                <?php if(is_array($gradeList)): $i = 0; $__LIST__ = $gradeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo["id"]); ?>><?php echo ($vo["grade"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>专业：</td>
                                        <td>
                                            <input type="text"    name="teamapply[major]" size="40"></td>
                                    </tr>
                                    <tr>
                                        <td>学号：</td>
                                        <td>
                                            <input type="text"    name="teamapply[number]" size="40"></td>
                                    </tr>
                                    <tr>
                                        <td>手机：</td>
                                        <td>
                                            <input type="text"    name="teamapply[phone]" size="40"></td>
                                    </tr>
                                    <tr>
                                        <td>QQ：</td>
                                        <td>
                                            <input type="text"    name="teamapply[qq]" size="40"></td>
                                    </tr>
                                    <tr height="100">
                                        <td height="150">团队简介：</td>
                                        <td height="150">
                                            <textarea name="teamapply[teamintro]" rows="5" type="text" style="width:350px;"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>--队员信息--</h3>

                            <table width="480" border="0">
                                <tbody>
                                    <tr>
                                        <td width="80">
                                            <big>队员1</big>
                                            姓名：
                                        </td>
                                        <td width="390">
                                            <input type="text" name="name1" size="20"></td>
                                    </tr>
                                    <tr>
                                        <td>学院班级：</td>
                                        <td>
                                            <input type="text" name="academy1" size="30"></td>
                                    </tr>
                                    <tr>
                                        <td>手机：</td>
                                        <td>
                                            <input type="text" name="phone1" size="30"></td>
                                    </tr>
                                </tbody>
                                <tbody id="team_apply"></tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="button" id="addmore" value="增加会员信息+" />
                                            <input type="hidden" id="num" name="num" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <tr>
                                <td>操作：</td>
                                <td>
                                    <input type="submit" size="40" align="centre" name="submit" value="提交"   id="sub" />
                                </td>
                            </tr>
                            <input type="hidden" name="teamapply[game_id]" value="<?php echo ($teamregister[0]["id"]); ?>" />
                        </form>
                    </div>
                </div>
                <div class="fast_c_R">
                    <div class="fast_c_R_top"></div>
                    <div class="fast_c_R_left"></div>
                    <a href="__GROUP__/Game/registergame/id/<?php echo ($teamregister[0]["id"]); ?>">
                        <img src="__PUBLIC__/images/person.jpg" />
                    </a>
                </div>
            </div>
            <div class="fast_d"></div>
            <div class="fast_d_left"></div>

        </div>
        <div class="fast_bottom"></div>
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
    <script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
    
</script>
</body>
</html>