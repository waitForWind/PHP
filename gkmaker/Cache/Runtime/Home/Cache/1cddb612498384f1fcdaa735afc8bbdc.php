<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://www.kjjlpt.com/my.php?show=allnotice -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>通知--大学生科技交流平台</title>
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
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css" />

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




    <script src="__PUBLIC__/js/myguest.js" type="text/javascript"></script>
    <div style="width:850px; height:20px;"></div>
    <div class="wrap">
    <div class="side">
    <div class="head_id">
        <dl>
            <dt>
                <a href="__GROUP__/Myzone/mymessage?id=<?php echo ($li["uid"]); ?>">
                    <?php if($li["avatar"] != NULL): ?><img alt="user name" src="__PUBLIC__/Uploads/s_<?php echo ($li["avatar"]); ?>">
                        <?php else: ?>
                        <img alt="user name" src="__PUBLIC__/images/qz_middle.jpg"><?php endif; ?>
                </a>
            </dt>
        </dl>
        <dd>
            <a class="user_name" href="__GROUP__/Myzone/mymessage/id/<?php echo ($li["uid"]); ?>"><?php echo ($li["nickname"]); ?></a>
        </dd>
        <dd>

            <a class="edit_info" href="__GROUP__/Myzone/edit?id=<?php echo ($li["uid"]); ?>">修改资料||更改头像</a>
        </dd>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a class="album" href="__GROUP__/Myzone/state/id/<?php echo ($li["uid"]); ?>">状态</a>
            </li>
            <li>
                <a class="connection" href="__GROUP__/Submit/submit/id/<?php echo ($li["uid"]); ?>">申报立项</a>
            </li>
            <li>
                <a class="code" href="__GROUP__/Myzone/letter/id/<?php echo ($li["uid"]); ?>">收信箱</a>
            </li>
            <li>
                <a class="connection" href="__GROUP__/Myzone/outletter/id/<?php echo ($li["uid"]); ?>">发信箱</a>
            </li>
            <li>
                <a class="leaveword" href="__GROUP__/Myzone/messageboard/id/<?php echo ($li["uid"]); ?>">留言</a>
            </li>
            <li>
                <a class="letter" href="__GROUP__/Myzone/myidea/id/<?php echo ($li["uid"]); ?>">创意</a>
            </li>
            <li>
                <a class="notice" href="__GROUP__/Myzone/secureqa/id/<?php echo ($li["uid"]); ?>">安全设置</a>
            </li>
            <li>
                <a class="connection" href="#">账号绑定</a>
            </li>

        </ul>
    </div>
</div>
        <div class="right">
            <div class="per_notebook">
                <h2 class="tit_3">发表创意</h2>
                <form id="form_id" action="__GROUP__/Chuangyi/index" method="post">
                    <table border="0" cellspacing="0" cellpadding="0" class="table_1">
                        <colgroup>
                        <col width="70" />
                        <col />
                    </colgroup>
                    <tr>
                        <th>标题：</th>
                        <td>
                            <input name="idea[title]" type="text" class="input_2" value=""/>
                            <span id="user_error" class="obli"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>创意摘要：</th>
                        <td>
                            <textarea class="" Maxlength=80 name="idea[keywords]"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>内容：</th>
                        <td>
                            <textarea name="idea[content]" cols="" rows="" class="text_2" id="reply_content" style="height:400px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tc">
                            <input type="hidden" name="idea[uid]" value="6328"/>
                            <input type="hidden" name="nid" value=""/>
                            <input name="button" type="submit" class="btn_2" value="确定" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="page_nav"></div>
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
    <li style="height: 50px; display: list-item; ">
        <a id="top" href="http://www.kjjlpt.com/my.php?show=allnotice#top"></a>
    </li>
    <li style="height:50px">
        <a id="sina" rel="nofollow" href="http://weibo.com/yunstudio2" target="_blank"></a>
    </li>
    <li style="height:50px">
        <a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()">
            <div id="EWM">
                <img src="./通知--大学生科技交流平台_files/weixin_code.png"></div>
        </a>
    </li>
    <li style="height:50px">
        <a id="ceping" href="https://me.alipay.com/yunstudio" target="_blank"></a>
    </li>
    <li style="height:50px">
        <a id="reply" href="http://www.kjjlpt.com/guestbook.php#fadeback" target="_blank"></a>
    </li>
</ul>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732" src="./通知--大学生科技交流平台_files/bds_s_v2.js"></script>

<script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->

</body>
</html>