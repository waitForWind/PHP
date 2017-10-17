//搜索框的效果
$(function () {
    $("#kw").val("百度全站搜索").addClass("wait")
    .blur(function () {
        if ($(this).val() == "") {
            $("#kw").val("百度全站搜索").addClass("wait");
        }
    })	
    .click(function () {
        if ($(this).val() == "百度全站搜索") {
            $("#kw").val("").removeClass("wait");
        }
    })
/*    .mouseover(function () {
        $("#kw").select();
    });
*/});


/******改变创意园区的背景图片******/
$(function(){
		$(".changyi_2>a").hover(function(){
			var $img=$(this).find("img");//获取img对象
			$img.attr("src","../images/chaangyiB.jpg");
			},function(){
			var $img=$(this).find("img");
			$img.attr("src","../images/chaangyiA.jpg");
			});
	});
	
//登录框的效果
$(function () {
    $("#username").val("请输入用户名").addClass("wait")
    .blur(function () {
        if ($(this).val() == "") {
            $("#username").val("请输入用户名").addClass("wait");
        }
    })	
    .click(function () {
        if ($(this).val() == "请输入用户名") {
            $("#username").val("").removeClass("wait");
        }
    })
/*    .mouseover(function () {
        $("#kw").select();
    });
*/});

//人才宝库里面教师学生点击效果
$(function(){
	//直接用smarty输出页面控制。。
})

//人才宝库会员头像鼠标经过的效果，兼容IE6 
$(function(){
	$(".daibiao ul li").hover(function(){
		$(this).addClass('menberhover');
		},function(){
			$(this).removeClass('menberhover');
		})
})
//快速报名时候的切换图片,兼容IE6，但是要判断假如支持hover,则不调用js代码
$(function(){
		$(".fast_d_a").hover(function(){
			$(this).css("background","url(../images/fastTjiao01.jpg) no-repeat");
			//$(this).addClass('apply_hover');
			},function(){
			$(this).css("background","url(../images/fastTjiao.jpg) no-repeat");
			});
			
		$(".fast_c_R_a").hover(function(){
			$(this).css("background","url(../images/fastBaoming01.jpg) no-repeat");
			//$(this).addClass('apply_hover');
			},function(){
			$(this).css("background","url(../images/fastBaoming.jpg) no-repeat");
			});
		//快速报名的时候提交按钮
		$("#person").click(function(){
			$("#apply_person").submit();
			});
		//团队报名
		$("#team").click(function(){
			$("#apply_team").submit();
			});
		//注册提交
		$(".zhuce_a_b_a").click(function(){
			$("#regform").submit();
		});
		//检测复选框
		var $cr = $(".zhuce :checkbox");  //jQuery对象
		$cr.click(function(){
		if($cr.is(":checked")){ //jQuery方式判断
		}else {
			alert("您未支持我们的协议！");
		}
	})

	});
	//各种提交表单
$(function(){
	$("#replys").click(function(){
		$("#guestbook").submit();
		});
	//首页提交搜索
	$("#search").click(function(){
		var $keyword=$("#kw").val();
		if($keyword=="百度全站搜索"||$keyword==""){alert("请输入查询关键字！");return;}
		$("#matchs_serach").submit();
		});
	//会员的标签检索
	$("#tagsearch").click(function(){
		$("#tag_search").submit();
		});
	$("#usersearch").click(function(){
		$("#user_search").submit();
		});
	//发送私信表单提交
	$('.btn_2').click(function(){
		$("#send_msg").submit();
		});
	})
/* 添加hot显示 */
$(function(){
	//$(".main_b_2_b li:first a").addClass("promoted");
	$(".promoted").append('<span class="hot"></span>');
})
/*导航定位*/
$(document).ready(function(e) {
 $('#mynav').smohanfixednav(1,999);    
});
//第一个值： 你期望导航在距离顶部多少的位置浮动
//第二个值： 导航zindex

/*浏览器版本提醒*/
$(document).ready(function() {
	$("body").iealert();
});


//标题动画效果
$(function(){
	$('.main_b_1_b a,.scrollNews a,.main_kj_aaa a,.main_ms a,.hotwork a').hover(function(){
		$(this).css('position','relative').animate({'left':'10px'},300);
	},function(){
		$(this).animate({'left':'0px'},300);
	});
})

//返回顶部
$(document).ready(function(){
	$('#welcome').fadeTo(2000, 1).delay(2000).animate({
		opacity: 0,
		marginTop: '-=200'
	},
	1000,
	function() {
		$('#welcome').hide();
	});
	$(window).scroll(function() {
		if ($(window).scrollTop() > 50) {
			$('#jump li:eq(0)').fadeIn(800);
		} else {
			$('#jump li:eq(0)').fadeOut(800);
		}
	});
	$("#top").click(function() {
		$('body,html').animate({
			scrollTop: 0
		},
		1000);
		return false;
	});
});

	  	function showEWM()
			{
				document.getElementById("EWM").style.display = 'block';
				}
		function hideEWM()
			{
				document.getElementById("EWM").style.display = 'none';
				}
