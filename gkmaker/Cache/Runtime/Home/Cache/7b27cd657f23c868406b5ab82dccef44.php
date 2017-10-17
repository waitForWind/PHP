<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://www.yunstudio.net/yunstudio/index.html# -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>欢迎来到柳州maker</title>
    <meta name="keywords" content="广西科技大学创客联盟，广西科技大学chytth">
    <meta name="description" content="云作坊是归属于长沙理工大学现代技术教育中心的一个学生技术组织。先后开发了大量的web系统。">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Csschy/base.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/jquery.slider.css">
    <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.slider.min.js"></script>
    <script>
        $(function()
        {
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
        <a href="#" target="_blank"><!--广告超链接-->
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
            <a href="#">
                <img src="__PUBLIC__/imageschy/logo.gif">
            </a>
            <div>Yes, We Can!!!</div>
        </div>
        <!--end of logo-->
        <div class="searchBox">关注我们:<a href="http://weibo.com/u/3268258883"><img src="__PUBLIC__/imageschy/weibo.png" width="28" height="28"></a>
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
    <!--图片播放器-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".slider").slideshow({
                width      : 950,
                height     : 289,
                transition : 'bar'
            });
        });
    </script>

    <div style="a:hover{position:relative;left:0; right:0;};">
        <div class="jquery-slider-wrapper jquery-slider-option-navigation-selector-timer jquery-slider-hovered" style="width: 950px; height: 289px; "><div class="slider" style="width: 950px; height: 289px; overflow: hidden; position: relative; ">



            <div class="jquery-slider-slide jquery-slider-slide-1" style="opacity: 0; "><a href="#"><img src="__PUBLIC__/imageschy/20121229182227_9687.jpg"></a></div>

            <div class="jquery-slider-slide jquery-slider-slide-2" style="opacity: 0; "><a href="#"><img src="__PUBLIC__/imageschy/20121229182202_8281.jpg"></a></div>

            <div class="jquery-slider-slide jquery-slider-slide-3" style="opacity: 0; "><a href="#"><img src="__PUBLIC__/imageschy/20121229182110_5781.jpg"></a></div>

            <div class="jquery-slider-slide jquery-slider-slide-4 jquery-slider-slide-current" style="opacity: 1; "><a href="#"><img src="__PUBLIC__/imageschy/20121229182036_5000.jpg"></a></div>


        </div>
            <div class="jquery-slider-timer"><div class="jquery-slider-timer-mask">
            <div class="jquery-slider-timer-rotator"></div></div>
            <div class="jquery-slider-timer-bar" style="overflow: hidden; width: 88.33450520833333%; ">

            </div>
        <!--</div><div class="jquery-slider-navigation">-->
            <!--<a href="#" class="jquery-slider-navigation-prev" rel="-1">-->
                <!--<span>Prev</span></a>-->
            <!--<a href="#" class="jquery-slider-navigation-next" rel="+1">-->
                <!--<span>Next</span></a></div><div class="jquery-slider-selectors">-->
            <!--<a href="#" class="jquery-slider-selector" rel="1">-->
                <!--<span class="jquery-slider-selector-span jquery-slider-selector-1">-->
                    <!--<span>1</span></span></a>-->
            <!--<a href="#" class="jquery-slider-selector" rel="2">-->
                <!--<span class="jquery-slider-selector-span jquery-slider-selector-2">-->
                    <!--<span>2</span></span></a><a href="#" class="jquery-slider-selector" rel="3">-->
            <!--<span class="jquery-slider-selector-span jquery-slider-selector-3"><span>3</span></span></a>-->
            <!--<a href="#" class="jquery-slider-selector jquery-slider-selector-current" rel="4">-->
                <!--<span class="jquery-slider-selector-span jquery-slider-selector-4"><span>4</span></span></a></div>-->
        <!--</div>-->
    </div>

    <div id="toutiao"><!--新闻头条-->
        <img src="__PUBLIC__/imageschy/zuojiao.png" style="width:4px; height:26;">

        <div class="ttContent">
            <div class="ttCon1">热点新闻头条</div>
            <img src="__PUBLIC__/imageschy/hr.png" style="width: 12px; height: 22px;">

            <div id="ttCon2">
                <ul style="top: -57px; ">


                    <li><a href="#">13-12-05 	创客联盟十二月全体例会暨新老成员见面会</a></li>

                    <li><a href="#">13-07-18 	创客联盟发展历程</a></li>

                    <li><a href="#">13-07-16 	创客联盟暑假安全及工作安排会议 </a></li>

                    <li><a href="#">13-04-17 	创客联盟年庆视频</a></li>

                    <li><a href="#">13-03-25 	创客联盟2014年夏季招新考核结果公布</a></li>





                </ul>
            </div>
        </div>
        <script type="text/javascript">/*滚动字幕*/
        <!--
        var j=-19;
        function slipTop(){
            if(j<-114)
            {
                $("div#ttCon2 ul").css("top","0px");
                j=-19;
            }
            $("div#ttCon2 ul").animate({top:j+"px"},1000);
            j-=19;
        }
        slipTop();
        setInterval(slipTop,3000);
        -->
        </script>
        <img src="__PUBLIC__/imageschy/youjiao.png" style="width: 4px; height: 26px;">
    </div>
</div>

<div class="allPart">
    <div class="part">
        <img src="__PUBLIC__/imageschy/bigzuobian.jpg" width="9" height="155">
        <div class="partCon">
            <h4>
                <img src="__PUBLIC__/imageschy/waw.png" width="32" height="13">
                <a href="__GROUP__/Ourmaker/introduce">创客介绍</a>
            </h4>
            <img src="__PUBLIC__/imageschy/0002.jpg" width="100" height="100" style="float:right;">
            <p><?php echo ($info[0]["introduce"]); ?>
            </p>

        </div>
        <img src="__PUBLIC__/imageschy/bigyoubian.jpg" width="9" height="155">
    </div>

    <div class="part" style="width:268px;">
        <img src="__PUBLIC__/imageschy/bigzuobian.jpg" width="9" height="155">
        <div class="partCon" style="width:250px;">
            <h4>
                <img src="__PUBLIC__/imageschy/new.png" width="34" height="16">
                <a href="__GROUP__/Ourmaker/introduce">创客口号</a>
            </h4>

            <p style="margin:0; padding:0;">
            </p><div style="width:140px;  float:left;">&nbsp;&nbsp;
            <?php echo ($info[0]["slogan"]); ?>
        </div>
            <img style="float:right; " src="__PUBLIC__/imageschy/yun.png" width="110" height="80">
            <p></p>

        </div>
        <img src="__PUBLIC__/imageschy/bigyoubian.jpg" width="9" height="155">
    </div>

    <div class="part" style="margin:0;">
        <img src="__PUBLIC__/imageschy/bigzuobian.jpg" width="9" height="155">
        <div class="partCon">
            <h4>
                <img src="__PUBLIC__/imageschy/hout.png" width="26" height="16">
                <a href="#">最新动态</a>
            </h4>
            <ul>



                <!--<li><a href="http://www.yunstudio.net/yunstudio/gzlh/2014171623.html" style="color:#333;"><span style="margin-right:5px;">14-01-07</span>	云作坊2013年下学期总结和寒假任务</a></li>-->

                <!--<li><a href="http://www.yunstudio.net/yunstudio/gzlh/2013125629.html" style="color:#333;"><span style="margin-right:5px;">13-12-05</span>	云作坊十二月全体例会暨新老成员见</a></li>-->

                <!--<li><a href="http://www.yunstudio.net/yunstudio/dsj/2013122621.html" style="color:#333;"><span style="margin-right:5px;">13-12-02</span>	云作坊“high爆全场”内部活动火热</a></li>-->

                <!--<li><a href="http://www.yunstudio.net/yunstudio/tzgg/20131121620.html" style="color:#333;"><span style="margin-right:5px;">13-11-21</span>	云作坊2013年秋季新人考核结果公布</a></li>-->

                <!--<li><a href="http://www.yunstudio.net/yunstudio/gzlh/2013114619.html" style="color:#333;"><span style="margin-right:5px;">13-11-04</span>	程序组组织新成员第二次培训</a></li>-->


            </ul>

        </div>
        <img src="__PUBLIC__/imageschy/bigyoubian.jpg" width="9" height="155">
    </div>

</div>

<div style="clear:both;">
    <table class="shuangxin" width="100%" border="0">
        <tbody><tr>
            <td width="5%" height="24">&nbsp;</td>
            <td width="22%">本创客承接各类商业项目</td>
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
                <td colspan="2" align="center"> Copyright © 2014-2015创客联盟 Inc. 保留所有权利 </td>
                <td width="7%"></td>
                <td width="2%"></td>
                <td width="20%"></td>
            </tr>
            <tr align="center">
            </tr>
            </tbody></table>
    </div>
</div>



</body></html>