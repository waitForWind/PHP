<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0050)http://www.yunstudio.net/yunstudio/tdwh/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Hello! 云作坊</title>
    <meta name="keywords" content="长沙理工大学技术开发团队，长沙理工大学云作坊">
    <meta name="description" content="云作坊是归属于长沙理工大学现代技术教育中心的一个学生技术组织。先后开发了大量的web系统。">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Csschy/base.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/jquery.slider.css">
    <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.slider.min.js"></script>
    <script>
        $(function(){
            var aImg = document.getElementById("nav").getElementsByTagName("img");
            for(i = 0; i < aImg.length; i+=2) {
                aImg[i].onmouseover = function () {
                    this.src = this.src.replace("out","hover");
                }

                aImg[i].onmouseout = function () {
                    this.src = this.src.replace("hover","out");
                }
            }
        })
    </script>
    <style type="text/css">
        div#topdis {
            background:url("__PUBLIC__/imageschy/gjyc.jpg") no-repeat;
            width:950px;
            height: 134px;
            margin-top:-2px;
        }
        .clear {
            clear: both;
        }
        #center {
            margin: 0 auto;
            clear: both;
        }
        .mabox {
            clear: both;
            margin: 0 auto;
            width: 1003px;
        }
        .place {
            background: url("__PUBLIC__/imageschy/icon15.gif") no-repeat scroll 0 0 transparent;
            clear: both;
            color: #FFFFFF;
            height: 24px;
            line-height: 24px;
            margin: 8px 0 0 -13px;
            padding: 0 0 9px 18px;
            position: relative;
            width: 316px;
        }
        .place a {
            color: #FFFFFF;
        }
        .mleft {
            background: url("__PUBLIC__/imageschy/bgs0.gif") repeat scroll 0 0 #FFFFFF;
            border: 1px solid #E3E3E3;
            float: left;
            margin: 0 auto;
            min-height: 500px;
            width: 950px;
        }
        .mbox {
            background: none repeat scroll 0 0 #FFFFFF;
            border: 1px solid #D5D5D5;
            clear: both;
            margin: 8px 6px 6px;
            min-height: 500px;/*限制最小高度*/
        }
        .ndetail {
            clear: both;
            padding: 10px 15px;
        }
        h1.title {
            clear: both;
            color: #06328D;
            font-size: 14px;
            line-height: 26px;
            text-align: center;
        }
        .ninfo {
            border-bottom: 1px dashed #DDDDDD;
            clear: both;
            color: #333333;
            font-family: Arial,Helvetica,sans-serif;
            padding-bottom: 15px;
            text-align: center;
        }
        .acontent {
            clear: both;
            color: #000000;
            font-size: 14px;
            line-height: 26px;
            padding: 10px;
        }
        .share{ height:30px;}
        .captionline {
            width: 900px;
            height: 30px;
            border-bottom: 1px #bfbfbf solid;
        }
        .captionline .ch_zn {
            margin-left:10px;
            font-size:16px;
            font-family:"微软雅黑";
        }
        .captionline .en {
            margin-left:10px;
            color:#20B2AA;
            font-size:12px;
            font-family:"微软雅黑";
        }
        .culture{
            padding-left:10px;
            font-size:13px;
        }
        .culture span
        {
            color: #11858F;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="header">
    <!--这是我加的广告样式，感觉那个关闭按钮还可以换一张图片更好看，不过我没有找到感觉更好的了。所需要额外的图片均在images文件夹里，增加的代码部分在广告部分里，从开始到结束。因为是直接从主站上下载来的主页，所以就没改文件夹名称了，有的图片没有下载下来也没管了-->
    <!--广告部分开始-->
    <script type="text/javascript">
        $(window).load(function(){
            $("#pageflip img").animate({
                width:'50px',
                height:'54px',
            },1000)
            $("#pageflip .msg_block").animate({
                width: '50px',
                height: '50px'
            },1000);
        });
        $(document).ready(function(){

//Page Flip on hover
            $("#pageflip").hover(function(e) {
                        $("#pageflip img").stop()
                                .animate({
                                    width: '100px',
                                    height: '100px'
                                }, 500);
                        $("#pageflip .msg_block").stop()
                                .animate({
                                    width: '98px',
                                    height: '92px'
                                }, 500);
                        $("#pageflip .closeBtn").show();
                    } ,

                    function(e) {
                        $("#pageflip img").stop()
                                .animate({
                                    width: '50px',
                                    height: '54px'
                                }, 520);
                        $("#pageflip .msg_block").stop()
                                .animate({
                                    width: '50px',
                                    height: '50px'
                                }, 500);
                        $("#pageflip .closeBtn").hide();
                    });


            $("#pageflip .closeBtn").click(function(){
                $("#pageflip img").stop()
                        .animate({
                            width: '0px',
                            height: '0px'
                        }, 220);

                $("#pageflip .msg_block").stop()
                        .animate({
                            width: '0px',
                            height: '0px'
                        }, 200);
                $(this).hide();
                $("#pageflip").unbind();
            });

        });
    </script>

    <style type="text/css">
        #pageflip {RIGHT: 0px; FLOAT: right; POSITION: relative; TOP: 0px}
        #pageflip IMG {Z-INDEX: 99; RIGHT: 0px; WIDTH: 0px; POSITION: absolute; TOP: 0px; HEIGHT: 0px; ms-interpolation-mode: bicubic}
        #pageflip .msg_block { z-index:20; RIGHT: 0px; BACKGROUND:url("__PUBLIC__/imageschy/girl.jpg") no-repeat right top; OVERFLOW: hidden; WIDTH: 0px; POSITION: absolute; TOP: 0px; HEIGHT: 0px}
        #pageflip .closeBtn{
            display:none;
            width:22px;
            height:22px;
            position:absolute;
            right:0;
            top:0;
            z-index:100;
            background:url("__PUBLIC__/imageschy/close.png") center no-repeat;
        }

    </style>
    <div id="pageflip">
        <a href="http://pic.yunstudio.net/" target="_blank"><!--广告超链接-->
            <img src="__PUBLIC__/imageschy/page-peel.png" style="width: 50px; height: 54px; overflow: hidden; ">
            <div class="msg_block" style="width: 50px; height: 50px; overflow: hidden; ">
            </div>
        </a>
        <div class="closeBtn" style="display: none; ">
        </div>
    </div>
    <!--广告部分结束-->

    <div class="headCenter">
        <!--logo-->
        <div class="logo">
            <a href="http://www.yunstudio.net/yunstudio/tdwh/index.html#">
                <img src="__PUBLIC__/imageschy/logo.gif">
            </a>
            <div>Yes, We Can!!!</div>
        </div>
        <!--end of logo-->
        <div class="searchBox">关注我们:<a href="http://weibo.com/u/3268258883"><img src="__PUBLIC__/imageschy/weibo.png" width="28" height="28" index.html=""></a>
        </div>

    </div>
</div><!--end of header-->
<div id="menu">
    <ul id="nav"><!--nav-->
        <li><a href="__GROUP__/Ourmaker/index"><img src="__PUBLIC__/imageschy/out_menu_01.gif" width="95" height="35"></a></li>
        <li><img src="__PUBLIC__/imageschy/out_menu_02.gif" width="5" height="35"></li>
        <li><a href="__GROUP__/Ourmaker/introduce"><img src="__PUBLIC__/imageschy/out_menu_03.gif" width="129" height="35"></a></li>
        <li><img src="__PUBLIC__/imageschy/out_menu_02.gif" width="5" height="35"></li>
        <li><a href="#"><img src="__PUBLIC__/imageschy/out_menu_05.gif" width="132" height="35"></a></li>
        <li><img src="__PUBLIC__/imageschy/out_menu_02.gif" width="5" height="35"></li>
        <li><a href="#"><img src="__PUBLIC__/imageschy/out_menu_07.gif" width="128" height="35"></a></li>
        <li><img src="__PUBLIC__/imageschy/out_menu_02.gif" width="5" height="35"></li>
        <li><a href="#"><img src="__PUBLIC__/imageschy/out_menu_09.gif" width="127" height="35"></a></li>
        <li><img src="__PUBLIC__/imageschy/out_menu_02.gif" width="5" height="35"></li>
        <li><a href="#"><img src="__PUBLIC__/imageschy/out_menu_11.gif" width="102" height="35"></a></li>
    </ul>
</div>


<div class="main">
    <div id="center">
        <div id="cc">
            <div id="topdis"> </div>
            <div class="mleft">
                <div class="mbox">
                    <div class="ndetail">
                        <div class="captionline"><img src="__PUBLIC__/imageschy/waw.png"><span class="ch_zn">创客简介</span><span class="en">The Introduction</span>
                        </div>
                        <div class="culture">
                        <?php echo ($maker[0]["introduce"]); ?>
                        </div>
                        <br>

                        <div class="captionline"><img src="__PUBLIC__/imageschy/waw.png">
                            <span class="ch_zn">创客发展</span><span class="en">The Development</span>
                        </div>
                        <div class="culture">
                            <p>
                                <span>历史</span>
                                <br>
                                <br>
                               <?php echo ($maker[0]["history"]); ?>
                                <br>
                                <br>
                                <span>成绩</span>
                                <br>
                                <br>
                                <?php echo ($maker[0]["score"]); ?>
                                <br>
                                <br>
                                <span>目标</span>
                                <br>
                                <br>
                                <?php echo ($maker[0]["aim"]); ?>
                                <br>

                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>


</div>

<div style="clear:both;">
    <table class="shuangxin" width="100%" border="0">
        <tbody><tr>
            <td width="5%" height="24">&nbsp;</td>
            <td width="22%">本实验室承接各类商业项目</td>
            <td width="22%">主管邮箱：<a href="#">gkmaker2014@qq.com</a></td>
            <td width="13%">&nbsp;</td>
            <td width="7%"><a href="#">网站地图</a></td>
            <td width="2%">|</td>
            <td width="7%"><a href="#">热点新闻</a></td>
            <td width="2%"><a href="#"></a>|</td>
            <td width="7%"><a href="#">寻求帮助</a></td>
            <td width="2%"><a href="#"> </a>|</td>
            <td width="11%"><a href="#">联系我们</a></td>
        </tr>
        </tbody></table>
    <div class="footer">
        <table width="100%" border="0">
            <tbody><tr>
                <td width="30%" height="39">&nbsp;</td>
                <td colspan="2" align="center"> Copyright © 2014 云作坊 Inc. 保留所有权利 </td>
                <td width="7%"></td>
                <td width="2%"></td>
                <td width="20%"></td>
            </tr>
            <tr align="center"></tr>
            </tbody></table>
    </div>
</div>


</body></html>