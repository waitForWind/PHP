<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>添加赛事-后台管理-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
        <?php $addCss=""; $addJs=""; $currentNav ='赛事管理 > 添加赛事'; ?>
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
                        <div class="current">添加赛事</div>
                    </div>
                    <form>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
                            <tr>
                                <th width="100">赛事标题：</th>
                                <td><input id="title" type="text" class="input" size="60" name="info[title]" value="<?php echo ($info["title"]); ?>"/> </td>
                            </tr>
							<tr>
							<th width="100">主办方：</th>
							<td><input type="text" class="input" size="20" name="info[organizer]" value="<?php echo ($info["organizer"]); ?>"/></td>
							</tr>
							<tr>
							<th width="100">承办方：</th>
							<td><input type="text" class="input" size="20" name="info[sponsor]" value="<?php echo ($info["sponsor"]); ?>"/></td>
							</tr>
							
							<tr>
							<th width="100">赛事级别：</th>
							<td>
							 <select name="info[grade]">
							  	<option value="1">国家级</option>
								<option value="2">省级</option>
								<option value="3">校级</option>
								<option value="4">院级</option>
							  </select>
							  </td>
							  </tr> 
							   
                            <tr>
                                <th width="100">赛事发布状态：</th>
                                <td><label><input type="radio" name="info[cid]" value="0" <?php if($info["cid"] == 0): ?>checked="checked"<?php endif; ?> /> 赛事审核状态</label> &nbsp; <label><input type="radio" name="info[cid]" value="1" <?php if($info["cid"] == 1): ?>checked="checked"<?php endif; ?> /> 赛事已发布状态</label> </td>
                            </tr>
                           <tr>
							<th width="100">开始时间：</th>
							<td><input type="text" class="input" size="20" name="info[start_time]" value="<?php echo ($info["start_time"]); ?>"/>(1997-08-21)</td>
							</tr>
							
							<tr>
							<th width="100">结束时间：</th>
							<td><input type="text" class="input" size="20" name="info[end_time]" value="<?php echo ($info["end_time"]); ?>"/>(1997-08-21)</td>
							</tr>
                            
                      <!--      <tr>
                                <th>赛事摘要：</th>
                                <td><textarea class="input" style="height: 60px; width: 600px;" name="info[summary]"><?php echo ($info["summary"]); ?></textarea> 如果不填写则系统自动截取文章前200个字符</td>
                            </tr>
                            <tr>          -->
							
							<tr>
                                <th>赛事奖项：</th>
                                <td><textarea class="input" style="height: 60px; width: 600px;" name="info[prize]"><?php echo ($info["prize"]); ?></textarea></td>
                            </tr>
                                <th>赛事内容：</th>
                                <td><textarea id="content" class="input" style="height: 300px; width: 100%;" name="info[content]"><?php echo ($info["content"]); ?></textarea></td>
                            </tr>
							
							
							
                        </table>
                        <input type="hidden" name="info[id]" value="<?php echo ($info["id"]); ?>" />
                    </form>
                    <div class="commonBtnArea" >
                        <button class="btn submit">提交</button>
                    </div>
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
        <script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor.js"></script><script type="text/javascript" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
        <script type="text/javascript">
            $(function(){var  content ;
                KindEditor.ready(function(K) {
                    content = K.create('#content');
                });
                
                $(".submit").click(function(){
                    content.sync();
                    commonAjaxSubmit();
                    return false;
                });
            });
        </script>
    </body>
</html>