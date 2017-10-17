<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://www.kjjlpt.com/my.php?show=allnotice -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>个人空间--大学生科创中心</title>
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



    <script src="__PUBLIC__/Css/logger.js"></script><link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"></head>
<body>






<div class="head">
    <div class="head_a" >
        <a href="#">
            <img src="__PUBLIC__/images/headlogo.jpg" width="260" height="95" alt="">
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
        <div class="head_c_1"> <a href="javascript:void(0);" id="search"><img src="__PUBLIC__/images/sousuoFDJ.jpg" /></a>
        </div>

        <div class="head_c_2">
            <div class="reg">
                <span style="color:#006495;"><?php echo ($email); ?></span>
                <a class="notice_num" href="__GROUP__/Myzone/index">20</a>我的：
                <a href="__GROUP__/Myzone/zone">空间</a>
                <span id="outcome"></span>
                <a href="__GROUP__/Myzone/secureqa">设置</a>&nbsp;|
                <a href="__GROUP__/Member/loginout">退出</a>



            </div>
        </div>
    </div>
</div>









<div class="daohang_a"  id="mynav">
    <div class="daohang">

        <div class="nav">
            <ul>
                <li><a href="__GROUP__/Index/index" class="current">首页</a></li>
                <li><a href="__GROUP__/Listmember/index" >人才宝库</a></li>
                <li> <a href="__GROUP__/Game/game" class="promoted" >赛事大厅</a></li>
                <li><a href="__GROUP__/Guestbook/index" >留言反馈</a></li>
                <li><a href="__GROUP__/Science/index">科技立项</a></li>
                <!--<li><a href="__GROUP__/Venture/index">创业园</a></li>-->
                <!--<li><a href="__GROUP__/Venture/index">创业园</a></li>-->
                <li><a href="__GROUP__/Ourmaker/index" target="_blank" class="promoted">柳州maker</a></li>
            </ul>
        </div>
        <div class="guangzhu">&nbsp;&nbsp; <a href="http://weibo.com/u/3268258883" target="_blank"><img src="__PUBLIC__/images/sina.png"/></a> &nbsp;&nbsp;
        </div>
    </div>
</div>






<div style="width:850px; height:20px;"></div>
<div class="wrap">
    <div class="side">
        <div class="head_id">
            <dl>
                <dt>
                    <a href="__GROUP__/Myzone/mymessage/id/<?php echo ($info[0]["uid"]); ?>">
                        <img alt="user name" src="__PUBLIC__/Uploads/<?php echo ($info[0]["avatar"]); ?>">
                    </a>
                </dt>
            </dl>
            <dd><a class="user_name" href="__GROUP__/Myzone/mymessage/id/<?php echo ($info[0]["uid"]); ?>"><?php echo ($email); ?></a></dd>
            <dd>

                <a class="edit_info" href="__GROUP__/Myzone/edit/id/<?php echo ($info[0]["uid"]); ?>">修改资料||更改头像</a>
            </dd>




        </div>
        <div class="menu">
            <ul>
                <li><a class="album" href="__GROUP__/Myzone/state/id/<?php echo ($info[0]["uid"]); ?>">状态</a></li>
                <li><a class="connection" href="__GROUP__/Submit/submit/id/<?php echo ($info[0]["uid"]); ?>">申报立项</a></li>
                <li><a class="code" href="__GROUP__/Myzone/letter/id/<?php echo ($info[0]["uid"]); ?>">收信箱</a></li>
                <li><a class="connection" href="__GROUP__/Myzone/outletter/id/<?php echo ($info[0]["uid"]); ?>">发信箱</a></li>
                <li><a class="leaveword" href="__GROUP__/Myzone/messageboard/id/<?php echo ($info[0]["uid"]); ?>">留言</a></li>
                <li><a class="letter" href="__GROUP__/Myzone/myidea/id/<?php echo ($info[0]["uid"]); ?>">创意</a></li>
                <li><a class="notice" href="__GROUP__/Myzone/secureqa/id/<?php echo ($info[0]["uid"]); ?>">安全设置</a></li>
                <li><a class="connection" href="#">账号绑定</a></li>

            </ul>
        </div>
    </div>     <div class="right">
    <div class="per_notebook">
        <h1 class="tit_3">
            <a href="#">比赛通知</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">站内通知</a>
        </h1>






        <div class="per_dynamic">
		<form action="__GROUP__/Myzone/addAdvice" method="post">
        
            <ul>
                <?php if(is_array($file)): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><li>
						<span class="time"><input type="button" value="通过" onclick="pass('__GROUP__/Myzone/image/id/<?php echo ($f["id"]); ?>/status/1')" id="pa1"><input	type="button" value="不通过" onclick="unpass('__GROUP__/Myzone/image/id/<?php echo ($f["id"]); ?>/status/0')" id="pa2"><?php echo (date("Y-m-d		H:i:s",$f["time"])); ?></span>
						<a>[ 项目评定标题 ] </a>
						&nbsp;&nbsp;&nbsp;&nbsp;<a href="__GROUP__/Myzone/download/id/<?php echo ($f["id"]); ?>"><?php echo ($f["title"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php if($status[$i]["state"] == 1): ?><input type="button" value="已添加建议"><?php else: ?><input type="button" value="添加建议" onclick="reply_content('<?php echo ($f["id"]); ?>')" id="pa3"><?php endif; ?>
				</li>

                <ul class="answer" style="display:none" id="rep_<?php echo ($f["id"]); ?>">
                <li>项目标题建议:<?php echo ($i); ?><textarea name="info[title]"></textarea></li>
                <li>项目内容建议:<textarea name="info[content]"></textarea></li>
                <li>项目细节建议:<textarea name="info[detail]"></textarea></li>
                <input type="hidden" name="info[id]" value="<?php echo ($f["id"]); ?>" />
                
                
                
                <li class="tr">
                    <input class="btn_2" type="submit" value="提交建议" name="button">
                
                    <a href="javascript:void(0);" onclick="reply_cancel(<?php echo ($f["id"]); ?>)" class="cancel">取消</a>
                </li>
                </ul><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			
			
		</form>
      </div>
        <script type="text/javascript">
            var pa1=document.getElementById("pa1");
            var pa2=document.getElementById("pa2");
		    var pa3=document.getElementById("pa3");

            function pass(url)
            {

                window.location=url;


            }
            function unpass(url)
            {


                window.location=url;

            }

			//回复留言方法

			function reply_content(id){

				$("#rep_"+id).css("display","block");
				//$("#rep_").css("display","none");  同级的隐藏啊
			}
			//回复留言的取消方法

			function reply_cancel(id){

				$("#rep_"+id).css("display","none"); 
			}

        </script>

    </div>
    <!-- <div class="fanyelist"><span class=".$style.">首页</span><span class=".$style.">上一页</span><span class=".$style.">下一页</span><span class=".$style.">尾页</span>[共1页]</div> -->
</div>
    <!--<div class="page_nav"><共<?php echo ($page); ?>>-->
     <!--</div>-->
</div>



<div style="width:100%; height:10px; float:left;"> <hr color="#eaeaea">   </div>
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
    <hr color="#eaeaea">
</div>

<div class="jieshu_c">
    <div style="width:1033px; height:30px; float:left;">
    </div>
    <div class="footer">
        大学生科创中心版权所有&nbsp&nbsp版本号：v1.1 &nbsp;&nbsp;<a href="#" target="_blank"></a><br />
        Copyright 2014-2015&nbsp;by&nbsp;<a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>&nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;<script src="#" language="JavaScript"></script></div></div>

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

</body></html>