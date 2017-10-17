<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://www.kjjlpt.com/my.php?show=editmy -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/tag.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iealert.css">
    <script src="__PUBLIC__/js/logger.js"></script>
    <link href="__PUBLIC__/Css/bdsstyle.css" rel="stylesheet" type="text/css"></head>
<body>
    <div class="head">
    <div class="head_a" >
        <img width="270" height="60" src="__ROOT__/Public/images/keChuangLogo.png" alt="" style="margin-top: 15px;"></div>
    <div style="width:130px; height:95px; float:left;"></div>
    <div class="head_b"></div>
    <div class="head_c">
        <div class="head_cinput">
            <form name="f1" onsubmit="return g(this)"  id="matchs_serach">
                <input type="text"  name="word"  x-webkit-speech placeholder="百度全站搜索" />
                <div style="display:none;">
                    <input name=tn type=hidden value="bds">
                    <input name=cl type=hidden value="3">
                    <input name=ct type=hidden>
                    <input name=si type=hidden value="http://localhost:88/gkmaker/">
                    <input name=s type=radio>
                    <input name=s type=radio checked></div>
            </form>
        </div>
        <div class="head_c_1">
            <a href="javascript:void(0);" id="search">
                <img src="__PUBLIC__/images/sousuoFDJ.jpg" />
            </a>
        </div>
        <div class="head_c_2">
            <div class="reg">
                <?php if($uid == 0): ?><a href="__GROUP__/Member/reg">免费注册</a>
                    &nbsp;|&nbsp;
                    <a href="__GROUP__/Member/login">登&nbsp;陆</a>
                    <?php else: ?>
                    <span style="color:#006495;"><?php echo ($nickname); ?></span>
                   <!--  <a class="notice_num" href="__GROUP__/Myzone/index">20</a> -->
                    我的：
                    <a href="__GROUP__/Myzone/zone">空间</a>
                    <span id="outcome"></span>
                    <a href="__GROUP__/Myzone/secureqa">设置</a>
                    &nbsp;|
                    <a href="__GROUP__/Member/loginout">退出</a><?php endif; ?>
            </div>
        </div>
    </div>
</div>
    <script src="__PUBLIC__/js/jquery.movebg.js"></script>
<div class="daohang_a"  id="mynav">
    <div class="daohang">
        <div class="nav">
            <ul>
                <li><a href="__GROUP__/Index/index" >首页</a></li>
                <li><a href="__GROUP__/Listmember/index" >人才宝库</a></li>
                <li><a href="__GROUP__/Game/game"  >赛事大厅</a></li>
                <li><a href="__GROUP__/Guestbook/index" >留言反馈</a></li>
                <li><a href="__GROUP__/Science/index">科技立项</a></li>          
                <li><a href="__GROUP__/Ourmaker/index" target="_blank" >柳州maker</a></li>
            </ul>
            <!--移动的滑动-->
        <div class="move-bg"></div>
        <!--移动的滑动 end-->
        </div>
        <div class="guanzhu">&nbsp;&nbsp; <a target="_blank" href="http://weibo.com/bdmaker"><img src="__PUBLIC__/images/sinaBG1.png"></a> &nbsp;&nbsp;
    </div>
    </div>
</div>
<script>
$(function(){
    $(".nav").movebg({width:128/*滑块的大小*/,extra:40/*额外反弹的距离*/,speed:300/*滑块移动的速度*/,rebound_speed:400/*滑块反弹的速度*/});
})
</script>



    <script src="__PUBLIC__/js/city.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/cademy.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/base.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
        $("#mycitys").citys({


            p_val:"<?php echo ($info[0]["province"]); ?>",
            c_val:"<?php echo ($info[0]["city"]); ?>",
            p_name:"province",
            c_name:"city"

        });
    });
</script>
    <script type="text/javascript">
    $(function(){
        $("#mymajor").major({
            a_val:"<?php echo ($info[0]["academy"]); ?>",
            m_val:"<?php echo ($info[0]["major"]); ?>",
            a_name:"academy",
            m_name:"major"

        });
    });

</script>
    <div style="width:850px; height:20px;"></div>
    <div class="wrap">
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><div class="side">
    <div class="head_id">
        <dl>
            <dt>
                <a href="__GROUP__/Myzone/mymessage?id=<?php echo ($li["uid"]); ?>">
                    <?php if($li["avatar"] != NULL): ?><img alt="user name" src="__PUBLIC__/Uploads/s_<?php echo ($li["avatar"]); ?>">
                        <?php else: ?>
                        <img alt="user name" src="__PUBLIC__/images/qz_middle.jpg"><?php endif; ?>
                </a>
            </dt>
        </dl>
        <dd>
            <a class="user_name" href="__GROUP__/Myzone/mymessage/id/<?php echo ($li["uid"]); ?>"><?php echo ($li["nickname"]); ?></a>
        </dd>
        <dd>

            <a class="edit_info" href="__GROUP__/Myzone/edit?id=<?php echo ($li["uid"]); ?>">修改资料||更改头像</a>
        </dd>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a class="album" href="__GROUP__/Myzone/state/id/<?php echo ($li["uid"]); ?>">状态</a>
            </li>
            <li>
                <a class="connection" href="__GROUP__/Submit/submit/id/<?php echo ($li["uid"]); ?>">申报立项</a>
            </li>
            <li>
                <a class="code" href="__GROUP__/Myzone/letter/id/<?php echo ($li["uid"]); ?>">收信箱</a>
            </li>
            <li>
                <a class="connection" href="__GROUP__/Myzone/outletter/id/<?php echo ($li["uid"]); ?>">发信箱</a>
            </li>
            <li>
                <a class="leaveword" href="__GROUP__/Myzone/messageboard/id/<?php echo ($li["uid"]); ?>">留言</a>
            </li>
            <li>
                <a class="letter" href="__GROUP__/Myzone/myidea/id/<?php echo ($li["uid"]); ?>">创意</a>
            </li>
            <li>
                <a class="notice" href="__GROUP__/Myzone/secureqa/id/<?php echo ($li["uid"]); ?>">安全设置</a>
            </li>
            <li>
                <a class="connection" href="#">账号绑定</a>
            </li>

        </ul>
    </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="page_nav"></div>
        <div class="right">
            <h1 class="tit_1">资料修改</h1>
            <div class="per_dynamic">
                <form action="__GROUP__/Myzone/edit" method="post" enctype="multipart/form-data">
                    <table border="0">
                        <tbody>
                            <tr>
                                <td width="79" height="33" align="right">用户名:</td>
                                <td width="186">
                                <input type="hidden" name="id" >&nbsp;&nbsp;<?php echo ($li["nickname"]); ?></td>
                            </tr>
                            <tr>
                                <td align="right">真实姓名:</td>
                                <td>
                                    <input type="text" value="<?php echo ($li["truename"]); ?>" name="my[truename]" style="border-color: rgb(207, 207, 207); color: rgb(0, 0, 0); "></td>
                            </tr>
                            <tr>
                                <td align="right" >修改头像:</td>
                                <td>
                                    <input type="file"  name="file" class="input"/>
                                </td>
                            </tr>
                            <tr>
                                <th align="right">头像预览：</th>
                                <td>
                                    <?php if($li["avatar"] != NULL): ?><img alt="user name" src="__PUBLIC__/Uploads/<?php echo ($li["avatar"]); ?>" width="80" height="80">
                                        <?php else: ?>
                                        <img alt="user name" src="__PUBLIC__/images/qz_middle.jpg"><?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">籍贯:</td>
                                <td>
                                    <span id="mycitys"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">年级:</td>
                                <td>
                                    <select name="my[grade]">
                                        <option value=''<?php if (($li['grade'])=="0"){?>
                                            selected="selected"
                                            <?php }?>>年级设置</option>
                                        <option value="2015" <?php if (($li['grade'])=="2015"){?>
                                            selected="selected"
                                            <?php }?>>2015级</option>
                                        <option value="2014" <?php if (($li['grade'])=="2014"){?>
                                            selected="selected"
                                            <?php }?>>2014级</option>
                                        <option value="2013" <?php if (($li['grade'])=="2013"){?>
                                            selected="selected"
                                            <?php }?>>2013级</option>

                                        <option value="2012" <?php if (($li['grade'])=="2012"){?>
                                            selected="selected"
                                            <?php }?>>2012级</option>
                                        <option value="2011" <?php if (($li['grade'])=="2011"){?>
                                            selected="selected"
                                            <?php }?>>2011级</option>
                                        <option value="2010" <?php if (($li['grade'])=="2010"){?>
                                            selected="selected"
                                            <?php }?>>2010级</option>
                                        <option value="2009" <?php if (($li['grade'])=="2009"){?>
                                            selected="selected"
                                            <?php }?>>2009级</option>
                                        <option value="0000" <?php if (($li['grade'])=="0000"){?>
                                            selected="selected"
                                            <?php }?>>其他</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">性别:</td>

                                <td>
                                    <label>
                                        <input type="radio" name="my[sex]" value='1' <?php if($li['sex'] == 1): ?>checked="checked"<?php endif; ?>
                                    /> 男
                                </label>
                                &nbsp;
                                <label>
                                    <input type="radio" name="my[sex]" value='0'<?php if($li['sex'] == 0): ?>checked="checked"<?php endif; ?>
                                /> 女
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">学院/专业:</td>
                        <td>
                            <span id="mymajor"></span>
                        </td>
                    </tr>
                    <tr>
                        <td height="32" align="right">QQ:</td>
                        <td>
                            <input type="text" name="my[qq]" value="<?php echo ($li["qq"]); ?>"></td>
                    </tr>
                     <tr>
                        <td height="32" align="right">手机:</td>
                        <td>
                            <input type="text" name="my[phone]" value="<?php echo ($li["phone"]); ?>"></td>
                    </tr>
                    <tr>
                        <td valign="top" align="right" value="<?php echo ($li["tag"]); ?>">个人标签：</td>
                        <td valign="top">
                            <div style="POSITION: relative; MARGIN-BOTTOM: 5px">
                                <input type="text" class="inputtext" id="user_style" autocomplete="off" name="my[tag]" value="<?php echo ($info[0]["tag"]); ?>" style="width:400px;">
                                <div class="fashion_list">
                                    <span class="tag">
                                        <a style="COLOR: #76ad00; FONT-SIZE: 14px">nba</a>
                                        <a style="COLOR: #76ad00; FONT-SIZE: 14px">网购</a>
                                        <a style="COLOR: #76ad00; FONT-SIZE: 14px">星座控</a>
                                        <a style="COLOR: #ff7878; FONT-SIZE: 14px">电影</a>
                                        <a style="COLOR: #ff7878; FONT-SIZE: 14px">艺术</a>
                                        <a style="COLOR: #327aff; FONT-SIZE: 16px">森碟</a>
                                        <a style="COLOR: #ff683f; FONT-SIZE: 14px">编程</a>
                                        <a style="COLOR: #327aff; FONT-SIZE: 12px">游戏</a>
                                        <a style="COLOR: #327aff; FONT-SIZE: 14px">软件</a>
                                        <a style="COLOR: #ff683f; FONT-SIZE: 16px">程序猿</a>
                                        <a style="COLOR: #327aff; FONT-SIZE: 16px">互联网</a>
                                        <a style="COLOR: #ff7878; FONT-SIZE: 12px">周润发</a>
                                        <a style="COLOR: #76ad00; FONT-SIZE: 14px">安静</a>
                                        <a style="COLOR: #84a9f4; FONT-SIZE: 14px">神经质</a>
                                        <a style="COLOR: #ff3998; FONT-SIZE: 14px">演讲</a>
                                        <a style="COLOR: #327aff; FONT-SIZE: 16px">网络开发</a>
                                        <a style="COLOR: #ff683f; FONT-SIZE: 14px">文学</a>
                                        <a style="COLOR: #ff683f; FONT-SIZE: 16px">土豪</a>
                                        <a style="COLOR: #ff683f; FONT-SIZE: 16px">高富帅</a>
                                        <a style="COLOR: #ff3998; FONT-SIZE: 12px">屌丝</a>
                                        <a style="COLOR: #FF9900; FONT-SIZE: 14px">K歌之王</a>
                                    </span>
                                    <a class="close" href="javascript:;"></a>
                                </div>
                                <script type="text/javascript" src="__PUBLIC__/js/page-setting.js"></script>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td align="center">个人简介：</td>
                        <td>
                            <textarea name="my[intr]"><?php echo ($li["intr"]); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <input type="hidden" name="my[uid]" value="<?php echo ($id); ?>" />
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center">
                            <br>
                            <input class="btn_2" type="submit" value="确认修改" name="button"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</div>
<div style="width:100%; height:10px; float:left;">
<hr color="#eaeaea"></div>
<div class="jieshu_a">
<div style="width:1033px; height:17px; float:left;"></div>
<div style="width:255px; height:28px; float:left;"></div>
<div class="jieshu_a_a">
    <a href="#"> <strong>关注我们</strong>
    </a>
</div>
<div class="jieshu_a_b"> <strong>|</strong>
</div>
<div class="jieshu_a_a">
    <a href="#">
        <strong>关于我们</strong>
    </a>
</div>
<div class="jieshu_a_b">
    <strong>|</strong>
</div>
<div class="jieshu_a_a">
    <a href="#">
        <strong>联系我们</strong>
    </a>
</div>
<div class="jieshu_a_b">
    <strong>|</strong>
</div>
<div class="jieshu_a_a">
    <a href="#" target="_blank">
        <strong>加入我们</strong>
    </a>
</div>
<div class="jieshu_a_b">
    <strong>|</strong>
</div>
<div class="jieshu_a_a">
    <a href="#">
        <strong>申请链接</strong>
    </a>
</div>
</div>
<div style="width:100%; height:10px; float:left;">
<hr color="#eaeaea"></div>
<div class="jieshu_c">
<div style="width:1033px; height:30px; float:left;"></div>
<div class="footer">
    大学生科创中心版权所有&nbsp&nbsp版本号：v1.1 &nbsp;&nbsp;
    <a href="#" target="_blank"></a>
    <br />
    Copyright 2014-2015&nbsp;by&nbsp;
    <a href="__GROUP__/Ourmaker/index" target="_blank">柳州maker</a>
    &nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;
    <script src="#" language="JavaScript"></script>
</div>
</div>
<!----返回顶部,集成微博，微信---->
<ul id="jump">
<li style="display:none;height:50px;">
    <a id="top" href="#top"></a>
</li>
<li style="height:50px">
    <a id="sina" rel="nofollow" href="#" target="_blank"></a>
</li>
<li style="height:50px">
    <a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()"></a>
</li>
<li style="height:50px">
    <a id="ceping" href="#" target="_blank"></a>
</li>
<li style="height:50px">
    <a id="reply" href="guestbook.php#fadeback" target="_blank"></a>
</li>
</ul>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=646732" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
</body>
</html>