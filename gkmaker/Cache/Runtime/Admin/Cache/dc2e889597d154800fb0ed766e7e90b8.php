<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>网站注册会员管理-后台管理首页-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
        <?php $addCss=""; $addJs=""; $currentNav ='网站注册会员管理 > 搜索个人会员'; ?>
        <base href="<?php echo ($site["WEB_ROOT"]); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=../Public/Css/base.css|../Public/Css/layout.css|__PUBLIC__/Js/asyncbox/skins/default.css<?php echo ($addCss); ?>" />
<script type="text/javascript" src="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=__PUBLIC__/Js/jquery-1.9.0.min.js|__PUBLIC__/Js/jquery.lazyload.js|__PUBLIC__/Js/functions.js|../Public/Js/base.js|__PUBLIC__/Js/jquery.form.js|__PUBLIC__/Js/asyncbox/asyncbox.js<?php echo ($addJs); ?>"></script>
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
                    <div >
                       <form action="__URL__/search" method="post">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
						  <tr align="left">
						    <td width="11%">搜索个人会员</td>
						    <td width="22%"><input type="text" name="keyword" size="30" class="input"></input></td>
						    <td width="9%">	<select name="kind">
						    			<option value='1'>按帐号</option>
						    			<option value='2'>按姓名</option>
						    		</select>
						    </td>
						    <td width="58%"><button class="btn submit">搜索</button></td>
						  </tr>
						</table> 
						</form>     	             
                    </div>                   
                    <div class="Item hr">
                        <div class="current">个人会员列表</div>
                    </div>
                    
                    <!-- content start -->
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
                        <thead>
                            <tr>
                                <td>会员ID</td>
                                <td>账号</td>
                                <td>真实姓名</td>
                                <td>性别</td>
                                <td>学院</td>
                                <td>专业</td>
                                <td>QQ</td>
                                <td>手机</td>
                                <td width="150">操作</td>
                            </tr>
                        </thead>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form>
                            <tr align="center">
                                <td><?php echo ($vo["uid"]); ?></td>
                                <td><?php echo ($vo["nickname"]); ?></td>
                                <td><?php echo ($vo["truename"]); ?></td>
                                <td>
                                    <?php if($vo['sex'] == 0): ?>女
                                        <?php else: ?>                            
                                        男<?php endif; ?>
                                </td>
                                <td><?php echo ($vo["academy"]); ?></td>
                                <td><?php echo ($vo["major"]); ?></td>
                                <td><?php echo ($vo["qq"]); ?></td>
                                <td><?php echo ($vo["phone"]); ?></td>
                                <td>
                                    <a href="__URL__/edit/uid/<?php echo ($vo["uid"]); ?>">编辑</a>
                                    <a  href="__URL__/delete/uid/<?php echo ($vo["uid"]); ?>">删除</a>
                                </td>
                            </tr>
                            </form><?php endforeach; endif; else: echo "" ;endif; ?> 
                            <tr><td colspan="9" align="right"><?php echo ($page); ?></td></tr>                      
                    </table>

                    <!-- content end -->
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