<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>科技新闻管理-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
    <?php $addCss=""; $addJs=""; $currentNav ='科技新闻管理 > 科技新闻列表'; ?>
    <base href="<?php echo ($site["WEB_ROOT"]); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=../Public/Css/base.css|../Public/Css/layout.css|__PUBLIC__/js/asyncbox/skins/default.css<?php echo ($addCss); ?>" />
<script type="text/javascript" src="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=__PUBLIC__/js/jquery-1.9.0.min.js|__PUBLIC__/js/jquery.lazyload.js|__PUBLIC__/js/functions.js|../Public/Js/base.js|__PUBLIC__/js/jquery.form.js|__PUBLIC__/js/asyncbox/asyncbox.js<?php echo ($addJs); ?>"></script>
</head>
<body>
    <div class="wrap">
        <div id="Top">
    <div class="logo"><a href="<?php echo ($site["WEB_ROOT"]); ?>"><img src="../Public/Img/logo.gif" /></a></div>
    <div class="help"><a href="#">使用帮助</a><span><a href="#">关于</a></span></div>
    <div class="menu">
        <ul> <?php echo ($menu); ?> </ul>
    </div>
</div>
<div id="Tags">
    <div class="userPhoto"><img src="../Public/Img/userPhoto.jpg" /> </div>
    <div class="navArea">
        <div class="userInfo"><div><a href="<?php echo U('Webinfo/index');?>" class="sysSet"><span>&nbsp;</span>系统设置</a> <a href="<?php echo U("Public/loginOut");?>" class="loginOut"><span>&nbsp;</span>退出系统</a></div>欢迎您，<?php echo ($my_info["email"]); ?> | <a href="#">个人信息管理</a> | <a href="#">个人信息管理</a> | <a href="#">个人信息管理</a></div>
        <div class="nav"><font id="today"><?php echo date("Y-m-d H:i:s"); ?></font>您的位置：<?php echo ($currentNav); ?></div>
    </div>
</div>
<div class="clear"></div>
        <div class="mainBody">
            <div id="Left">
    <div id="control" class=""></div>
    <div class="subMenuList">
        <div class="itemTitle"><?php if(MODULE_NAME == 'Index'): ?>常用操作<?php else: ?>子菜单<?php endif; ?> </div>
        <ul>
            <?php if(is_array($sub_menu)): foreach($sub_menu as $key=>$sv): ?><li><a href="<?php echo ($sv["url"]); ?>"><?php echo ($sv["title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="QRcode">移动设备访问本页：<br/><br/><img src="<?php echo ($QRcodeUrl); ?>"/></div>
</div>
            <div id="Right">
                <div class="Item hr">
                    <div class="current">科技新闻列表</div>
                </div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
                    <thead>
                        <tr>
                            <!--<td>立项申报人</td>
                        -->
                        <td>立项标题</td>
                        <td>立项审核状态</td>
                        <td>申请时间</td>

                        <!-- <td>发布人</td>
                    -->
                    <td width="350">操作</td>
                </tr>
            </thead>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" id="<?php echo ($vo["id"]); ?>">
                    <td width="200px">
                        <a style="color:red" href="__URL__/dowfile?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                    </td>
                    <td>
                        <?php if($vo["status"] == 2): ?>待审核<?php endif; ?>
                        <?php if($vo["status"] == 1): ?>已通过<?php endif; ?>
                        <?php if($vo["status"] == 0): ?>未通过<?php endif; ?>
                    </td>
                    <td><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></td>
                    <!-- <td><?php echo ($vo["aidName"]); ?></td>
                -->
                <td width="300px">
                    [
                    <a href="__URL__/status?id=<?php echo ($vo["id"]); ?>">
                        <?php if($vo["status"] == 0 ): ?>申请通过
                            <?php else: ?>
                            申请失败<?php endif; ?>
                    </a>
                    ][
                    <a href="__URL__/addTeacher?id=<?php echo ($vo["id"]); ?>">添加教师</a>
                    ] [
                    <a href="__URL__/editTeacher?id=<?php echo ($vo["id"]); ?>">编辑教师</a>
                    ][
                    <a href="__URL__/advice?id=<?php echo ($vo["id"]); ?>">教师意见</a>
                    ][
                    <a link="<?php echo U('Science/delfile/',array('id'=>$vo['id']));?>" href="javascript:void(0)"  class="del">删除</a>
                    ]
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>
</div>
</div>
<div class="clear"></div>
<div id="Bottom">© 2013 本后台由 <a href="http://weibo.com/ybyq2010" target="_blank">@_永不言弃_</a> 所写，博客：<a href="blog.51edm.org" target="_blank" >blog.51edm.org</a> <?php echo ($site["SITE_INFO"]["name"]); ?> <?php echo ($site["WEB_ROOT"]); ?> All rights reserved 联系我们 <?php echo ($site["SITE_INFO"]["icp"]); ?></div>
<script type="text/javascript">
    $(window).resize(autoSize);
    $(function(){
        autoSize();
        $(".loginOut").click(function(){
            var url=$(this).attr("href");
            popup.confirm('你确定要退出吗？','你确定要退出吗',function(action){
                if(action == 'ok'){ window.location=url; }
            });
            return false;
        });

        var time=self.setInterval(function(){$("#today").html(date("Y-m-d H:i:s"));},1000);


    });

</script>
<script type="text/javascript">
            $(function(){
                $(".del").click(function(){
                    var delLink=$(this).attr("link");
                    popup.confirm('你真的打算删除【<b>'+$(this).attr("name")+'</b>】吗?','温馨提示',function(action){
                        if(action == 'ok'){
                            top.window.location.href=delLink;
                        }
                    });
                    return false;
                });
            });
        </script>
</body>
</html>