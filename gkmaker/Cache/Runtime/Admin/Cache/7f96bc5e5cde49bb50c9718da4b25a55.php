<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>资讯管理-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
        <?php $addCss=""; $addJs=""; $currentNav ='测试用例'; ?>
        <base href="<?php echo ($site["WEB_ROOT"]); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=../Public/Css/base.css|../Public/Css/layout.css|__PUBLIC__/js/asyncbox/skins/default.css<?php echo ($addCss); ?>" />
<script type="text/javascript" src="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=__PUBLIC__/js/jquery-1.9.0.min.js|__PUBLIC__/js/jquery.lazyload.js|__PUBLIC__/js/functions.js|../Public/Js/base.js|__PUBLIC__/js/jquery.form.js|__PUBLIC__/js/asyncbox/asyncbox.js<?php echo ($addJs); ?>"></script>
        <script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
        <script>
            //获取数据
            // function getData(){ 
            //     $.ajax({
            //         type: 'POST',
            //         url: <?php echo U("TestAction/getData");?>,
            //         dataType:'json',
            //         success:function(json){
                
            //             var tr = "";
            //             var list = json.list;
            //             $.each(list,function(index,array){ //遍历json数据列
            //                 tr += "<tr><td>"+array['id']+"<td/><td>"+array['relname']+"</td>";
            //             });
            //             $("#tableList").append(tr);
            //         },
                   
            //         error:function(){
            //             alert("数据加载失败");
            //         }
            //     });
            // }
            // 
            
        function getData(){ 
            $.ajax({
                type: 'POST',
                url:"<?php echo U("Test/getData");?>",
                dataType:'json',
              
                success:function(json){

                    $("#test ul").empty();
                    var li = "";

                     var list = json.list;
                     $.each(list,function(index,array){ //遍历json数据列
                        li += "<li><a href='#'>id:"+array['id']+"name:"+array['name']+"</a><li>";
                    });
                    $("#test ul").append(li);
                },
                error:function(){
                    alert("数据加载失败");
                }
            });
        }


            $(function(){
                $("#test button").live('click',function(){
              
                 getData();
                });
            });
        </script>
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
                        <div class="current">测试用例</div>
                        <ul></ul>
                    </div>

                    <div id="test">
                        <button>显示信息</button>
                    </div>
                   <!--  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab" id="tableList">
                        <thead>
                            <tr>
                                <td>序号</td>
                                <td>姓名</td>
                                <td width="200">操作</td>
                            </tr>
                        </thead>
                        <tr> <button>显示信息</button> </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" > 
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["relname"]); ?></td>
                                <td> <button>显示队员</button></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table> -->
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