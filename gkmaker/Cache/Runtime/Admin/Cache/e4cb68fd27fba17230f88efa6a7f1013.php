<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>权限管理-后台管理-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
        <?php $addCss=""; $addJs=""; $currentNav ='权限管理 > 管理员列表'; ?>
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
                        <div class="current">管理员列表</div>
                    </div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
                        <thead>
                            <tr>
                                <td>AID</td>
                                <td>账号</td>
                                <td>状态</td>
                                <td>备注</td>
                                <td>开通时间</td>
                                <td width="150">操作</td>
                            </tr>
                        </thead>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" aid="<?php echo ($vo["aid"]); ?>">
                                <td><?php echo ($vo["aid"]); ?></td>
                                <td><?php echo ($vo["email"]); ?></td>
                                <td><?php echo ($vo["statusTxt"]); ?></td>
                                <td><?php echo ($vo["remark"]); ?></td>
                                <td><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></td>
                                <td><?php if($vo["email"] == C('ADMIN_AUTH_KEY')): ?>--<?php else: ?>[ <a href="__URL__/editAdmin?aid=<?php echo ($vo["aid"]); ?>">编辑</a> ]<?php endif; ?></td>
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
    </body>
</html>