<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)http://www.kjjlpt.com/game.php?show=apply&way=team&id=194 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title></title>
    <meta name="keywords" content="大学生科技交流平台,科技交流,科技交友,寻找交友,创意孵化,在线报名,热门比赛">
    <meta name="description" content="大学生科技交流平台是一个科技学术交友的平台，并兼有科技交流、名师检索、资料下载、赛事预览、在线报名等功能">
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
    <script src="__PUBLIC__/js/daycoming.js"></script>
    <script src="__PUBLIC__/js/cookieclass.js"></script>
    <script src="__PUBLIC__/js/iealert.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/fixednav.js"></script>
    <script src="__PUBLIC__/js/baidu_search.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/main.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/apply.css"/>
    <link rel="stylesheet" type="text/css" href="_PUBLIC__/Css/css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css"/>
    <script src="__PUBLIC__/js/logger.js"></script>
    <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"/>
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



    <script type="text/javascript" src="__PUBLIC__/js/swfupload.js" charset="utf-8"></script>
    <script type="text/javascript" src="__PUBLIC__/js/swfupload.queue.js" charset="utf-8"></script>
    <script type="text/javascript" src="__PUBLIC__/js/fileprogress.js" charset="utf-8"></script>
    <script type="text/javascript" src="__PUBLIC__/js/handlers.js" charset="utf-8"></script>
    <script charset="utf-8" src="__PUBLIC__/js/kindeditor-min.js"></script>

    <script>
    //利用kindeditor的上传功能
    var swfu;
    window.onload = function() {
        var settings = {
            flash_url : "./images/swfupload/swfupload.swf",

            upload_url: "http://www.kjjlpt.com/include/swfuploadnew.php",

            post_params: {"PHPSESSID" : "39fd202364598a20fd476cf9c95a357f"},
            file_size_limit : "100 MB",
            file_types : "*.*",//检测的所有类型啊
            file_types_description : "All Files",
            file_upload_limit : 10,  //配置上传个数
            file_queue_limit : 0,
            custom_settings : {
                progressTarget : "fsUploadProgress",
                cancelButtonId : "btnCancel"
            },
            debug: false,

            // Button settings
            button_image_url: "images/browse.png",
            button_width: "65",
            button_height: "29",
            button_placeholder_id: "upload",
            button_text: '<span class="browse">浏览</span>',
            button_text_style: ".browse { font-size: 15; }",
            button_text_left_padding: 12,
            button_text_top_padding: 8,

            file_queued_handler : fileQueued,
            file_queue_error_handler : fileQueueError,
            file_dialog_complete_handler :fileDialogComplete,
            upload_start_handler : uploadStart,
            upload_progress_handler : uploadProgress,
            upload_error_handler : uploadError,
            upload_success_handler : uploadSuccess,
            upload_complete_handler : uploadComplete,
            queue_complete_handler : queueComplete
        };

        swfu = new SWFUpload(settings);
    };
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
                <a href="__GROUP__/Game/index/id/<?php echo ($registergame[0]["id"]); ?>"><?php echo ($registergame[0]["title"]); ?></a>
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
                        <form action="__URL__/registergame" method="post" enctype="multipart/form-data">
                            <table width="480" border="0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="80">真实姓名：</td>
                                            <td width="390">
                                                <input type="text" class="input"  id="name" value="<?php echo ($apply["relname"]); ?>" name="apply[relname]" size="20"></td>
                                        </tr>

                                        <tr>
                                            <td>性别</td>
                                            <td>
                                                <div style="width:100px; height:20px; float:left;">
                                                    <input type="radio" name="apply[sex]" value="0" checked="">男</div>
                                                <div style="width:100px; height:20px; float:left;">
                                                    <input type="radio" name="apply[sex]" value="1">女</div>
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
                                                <input type="text" class="input"  value="<?php echo ($apply["major"]); ?>" name="apply[major]" size="40"></td>
                                        </tr>
                                        <tr>
                                            <td>学号：</td>
                                            <td>
                                                <input type="text" class="input"  value="<?php echo ($apply["number"]); ?>" name="apply[number]" size="40"></td>
                                        </tr>
                                        <tr>
                                            <td>手机：</td>
                                            <td>
                                                <input type="text" class="input"  value="<?php echo ($apply["phone"]); ?>" name="apply[phone]" size="40"></td>
                                        </tr>
                                        <tr>
                                            <td>QQ：</td>
                                            <td>
                                                <input type="text" class="input"    value="<?php echo ($apply["qq"]); ?>" name="apply[qq]" size="40"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <tr>
                                    <td>操作：</td>
                                    <td>
                                        <input type="submit" size="40" name="submit" value="提交" class="btn" id="sub" />
                                    </td>
                                </tr>
                            </table>
                            <input type="hidden" name="apply[game_id]" value="<?php echo ($registergame[0]["id"]); ?>" />
                        </form>

                    </div>
                </div>
                <div class="fast_c_R">
                    <div class="fast_c_R_top"></div>
                    <div class="fast_c_R_left"></div>
                    <a href="__GROUP__/Game/teamregistergame/id/<?php echo ($registergame[0]["id"]); ?>">

                        <img src="__PUBLIC__/images/team.jpg"  ></a>
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
    <script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732" src="__PUBLIC__/js/bds_s_v2.js"></script>

    <script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
    <!-- Baidu Button END -->

</body>
</html>

<script type="text/javascript">

    document.getElementById("sub").onclick=function(){
        if( document.getElementById("name").value==""){
            alert("请填写真实姓名");
            return false;
        };
        if( document.getElementById("academy").value==""){
            alert("请选择学院");
            return false;
        };

        if( document.getElementById("class").value==""){
            alert("请选择年级");
            return false;
        };

        if( document.getElementById("major").value==""){
            alert("请输入您的专业");
            return false;
        };

        if( document.getElementById("number").value==""){
            alert("请输入您的学号");
            return false;
        };
        if( document.getElementById("phone").value==""){
            alert("请输入您的手机");
            return false;
        };
        if( document.getElementById("qq").value==""){
            alert("请输入您的QQ");
            return false;
        };
    }

</script>