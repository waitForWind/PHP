<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>网站注册会员管理-后台管理首页-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
  <?php $addCss=""; $addJs=""; $currentNav ='网站注册会员管理 > 添加会员信息'; ?>
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
          <div class="current">添加会员信息</div>
        </div>
        <!-- content start -->
        <form>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
            <tr>
              <td>帐号:</td>
              <td>
                <input id="nickname" class="input" type="text" name="memb[nickname]" size="25"/>
              </td>
              <td>昵称:</td>
              <td>
                <input type="text" class="input" name="memb[truename]" size="25" />
              </td>
              <td>密码:</td>
              <td>
                <input type="text" class="input" name="memb[pwd]" size="25" value="123456" />
              </td>
            </tr>
            <tr>
              <td>性别:</td>
              <td>
                <input type="radio" name="memb[sex]" checked="checked" value="1" />
                男 &nbsp;
                <input type="radio" name="memb[sex]"  value="0" />
                女
              </td>
              <td>手机:</td>
              <td>
                <input type="text" class="input" name="memb[phone]"  size="25" />
              </td>
              <td>QQ:</td>
              <td>
                <input type="text" class="input" name="memb[qq]"  size="25" />
              </td>
            </tr>
            <tr>
              <td>个人简介:</td>
              <td>
                <input type="text" class="input" name="memb[intr]"  size="25" />
              </td>
            </tr>
            <input type="hidden" name="memb[uid]" value="<?php echo ($info["uid"]); ?>"/>
          </table>
          <div class="commonBtnArea" >
            <button class="btn submit" >添加</button>
            |
            <input class="btn" type="reset" value="重置" />
          </div>
        </form>
        <!-- content end --> </div>
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
        $(".submit").click(function(){
        commonAjaxSubmit(); //提交表单
        return false;//阻止表单自动提交事件
    });
    
</script>
</body>
</html>