<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>科技新闻管理-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
    <?php $addCss=""; $addJs=""; $currentNav ='科技新闻管理 > 科技新闻列表'; ?>
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
            <div class="Item hr">
                <div class="current">添加教师</div>
            </div>
            <form action="__URL__/addTeacher" method="post" enctype="multipart/form-data">





                <input type="hidden" id="num" name="num" value=2 />
                <table width="480" border="0">
                    <tbody>
                    <tr>
                        <td align="right">教师1姓名:</td>
                        <td>
                        <select name="info[teacher1]">
                            <option selected="selected" value="">请选择</option>
                            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["email"]); ?>"><?php echo ($vo["email"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                        </select>
                        </td>
                    </tr>
                    <tbody id="team_apply"></tbody>
                    <tr>

                        <td align="right" height="100"><input type="button" id="addmore" value="增加教师+" name="addmore" onclick="add()"></td>
                    </tr>
                    </tbody><tbody id="team_apply"></tbody>
                    <tbody><tr>
                    </tr>



                    <tbody><tr>
                    </tr>

                    </tbody>



                <input type="hidden" name="info[uid]" value="<?php echo ($inf["id"]); ?>"/>
                <tr>
                    <td align="right">操作：</td>
                    <td> <button class="btn submit">提交</button></td>
                </tr>
                </table>

            </form>









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

    function add(){
        var num = document.getElementById("num").value;


        //第一个tr 姓名
        var html='<tr>';
        html+='<tr>';
        html+='<td align="right">教师'+num+'姓名:</td><td>';
        html+='<select name="info[teacher'+num+']">';
        html+='<option selected="selected" value="">请选择</option>';
        html+='<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>';
        html+='<option value="<?php echo ($vo["email"]); ?>"><?php echo ($vo["email"]); ?></option>';
        html+='<?php endforeach; endif; else: echo "" ;endif; ?>';
        html+='</select>';
        html+='</td>';
        html+='</tr>';

        //追加元素
        $(html).appendTo("#team_apply");

        document.getElementById("num").value++;


    }

</script>




</body>
</html>