<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/food/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/food/Public/css/main.css">
	<!-- <link rel="stylesheet" type="text/css" href="/food/Public/css/pagination.css"> -->
	<script type="text/javascript" src="/food/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/food/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/food/Public/js/layer.js"></script>
	<script type="text/javascript" src="/food/Public/js/indexController.js"></script>
	<script type="text/javascript" src="/food/Public/js/order.js"></script>
	<!-- <script type="text/javascript" src="/food/Public/js/jquery.pagination.js"></script> -->
</head>
<body>
	
<style type="text/css">
	.container{
		padding: 0;
		width: 1180px;
	    margin-right: auto;
	    margin-left: auto;
	    margin-top: 0px;
	}

	.back{
		line-height: 72px;
	    float: right;
	    color: #A0A0A0;
	    font-size: 12px;
	    text-decoration: none;
	}
	header{
		height: 72px;
    	border-bottom: 1px solid #E5E5E5;
	}

	 * {
            box-sizing: border-box;
        }
        body {
            margin: 0; 
            padding: 0;
            font: 16px/20px microsft yahei;
        }
        .wrap {
            width: 100%;
            height: 540px;
            padding: 40px 0;
            position: fixed;
            top: 50%;
            margin-top: -248.4px;
            opacity: 0.8;
            background: linear-gradient(to bottom right,#50a3a2,#53e3a6);
            background: -webkit-linear-gradient(to bottom right,#50a3a2,#53e3a6);
        }
        .container {
            width: 60%;
            margin: 0 auto;
        }
        .container h1 {
            text-align: center;
            color: #FFFFFF;
            font-weight: 500;
        }
        .container input {
            width: 320px;
            display: block;
            height: 36px;
            border: 0;
            outline: 0;
            padding: 6px 10px;
            line-height: 24px;
            margin: 32px auto;
            -webkit-transition: all 0s ease-in 0.1ms;
            -moz-transition: all 0s ease-in 0.1ms;
            transition: all 0s ease-in 0.1ms;
        }
        .container input[type="text"] , .container input[type="password"]  {
            background-color: #FFFFFF;
            font-size: 16px;
            color: #50a3a2;
        }
        .container input[type='submit'] {
            font-size: 16px;
            letter-spacing: 2px;
            color: #666666;
            background-color: #FFFFFF;
        }
        .container input:focus {
            width: 400px;
        }
        .container input[type='submit']:hover {
            cursor: pointer;
            width: 400px;
        }

        .wrap ul {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -10;
        }
        .wrap ul li {
            list-style-type: none;
            display: block;
            position: absolute;
            bottom: -120px;
            width: 15px;
            height: 15px;
            z-index: -8;
            background-color:rgba(255, 255, 255, 0.15);
            animotion: square 25s infinite;
            -webkit-animation: square 25s infinite;
        }
        .wrap ul li:nth-child(1) {
            left: 0;
            animation-duration: 10s;
            -moz-animation-duration: 10s;
            -o-animation-duration: 10s;
            -webkit-animation-duration: 10s;
        }
        .wrap ul li:nth-child(2) {
            width: 40px;
            height: 40px;
            left: 10%;
            animation-duration: 15s;
            -moz-animation-duration: 15s;
            -o-animation-duration: 15s;
            -webkit-animation-duration: 15s;
        }
        .wrap ul li:nth-child(3) {
            left: 20%;
            width: 25px;
            height: 25px;
            animation-duration: 12s;
            -moz-animation-duration: 12s;
            -o-animation-duration: 12s;
            -webkit-animation-duration: 12s;
        }
        .wrap ul li:nth-child(4) {
            width: 50px;
            height: 50px;
            left: 30%;
            -webkit-animation-delay: 3s;
            -moz-animation-delay: 3s;
            -o-animation-delay: 3s;
            animation-delay: 3s;
            animation-duration: 12s;
            -moz-animation-duration: 12s;
            -o-animation-duration: 12s;
            -webkit-animation-duration: 12s;
        }
        .wrap ul li:nth-child(5) {
            width: 60px;
            height: 60px;
            left: 40%;
            animation-duration: 10s;
            -moz-animation-duration: 10s;
            -o-animation-duration: 10s;
            -webkit-animation-duration: 10s;
        }
        .wrap ul li:nth-child(6) {
            width: 75px;
            height: 75px;
            left: 50%;
            -webkit-animation-delay: 7s;
            -moz-animation-delay: 7s;
            -o-animation-delay: 7s;
            animation-delay: 7s;
        }
        .wrap ul li:nth-child(7) {
            left: 60%;
            animation-duration: 8s;
            -moz-animation-duration: 8s;
            -o-animation-duration: 8s;
            -webkit-animation-duration: 8s;
        }
        .wrap ul li:nth-child(8) {
            width: 90px;
            height: 90px;
            left: 70%;
            -webkit-animation-delay: 4s;
            -moz-animation-delay: 4s;
            -o-animation-delay: 4s;
            animation-delay: 4s;
        }
        .wrap ul li:nth-child(9) {
            width: 100px;
            height: 100px;
            left: 80%;
            animation-duration: 20s;
            -moz-animation-duration: 20s;
            -o-animation-duration: 20s;
            -webkit-animation-duration: 20s;
        }
        .wrap ul li:nth-child(10) {
            width: 120px;
            height: 120px;
            left: 90%;
            -webkit-animation-delay: 6s;
            -moz-animation-delay: 6s;
            -o-animation-delay: 6s;
            animation-delay: 6s;
            animation-duration: 30s;
            -moz-animation-duration: 30s;
            -o-animation-duration: 30s;
            -webkit-animation-duration: 30s;
        }

        @keyframes square{
            0%  {
                    -webkit-transform: translateY(0);
                    transform: translateY(0)
                }
            100% {
                    bottom: 400px;
                    transform: rotate(600deg);
                    -webit-transform: rotate(600deg);
                    -webkit-transform: translateY(-500);
                    transform: translateY(-500)
            }
        }
        @-webkit-keyframes square {
            0%  {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
            100% {
                bottom: 400px;
                transform: rotate(600deg);
                -webit-transform: rotate(600deg);
                -webkit-transform: translateY(-500);
                transform: translateY(-500)
            }
        }
</style>
<header>
    <div class="container">
        <a href="http://bce.baidu.com" style="line-height: 70px;"><img style="width: 120px;" class="logo" src="/food/Public/img/logo.png" alt="窜天猴"></a>
        <span class="bae-auth-title" style="display: none;">授权管理控制面板</span>
        <a href="index.html" class="back" style="float: right;">返回首页</a>
    </div>
</header>
<div class="wrap">
        <div class="container">
            <h1>登录</h1>
            <form>
                <input type="text" name="account" id="account" placeholder="账号"/>
                <input type="password" name="password" id="password" placeholder="密码"/>
                <input type="submit" value="登录"/>
            </form>
        </div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script type="text/javascript">
        $('form').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "/food/index.php/Home/Index/login",
                data: $('form').serialize(),
                success:
                function(respond, status, xhr){
                    
                    if(respond['info'] == "success"){
                            console.log(respond);
                           
                            window.location.href = respond['redir'];
                    }else{
                        layer.msg('登录失败！请检查用户名或者密码是否正确', {icon: 2});
                    }
                },
                error: 
                function(xhr, textStatus, errorType){
                    alert(textStatus + ":" + errorType);
                }
            });
        });
        //用户名验证
    $("#account").blur(function(){
        var account = $.trim($(this).val());
        if(!account){
            $('#account').attr({
                "data-toggle": "tooltip",
                "data-placement": 'top',
                "title": "账号不能为空"
            }).tooltip('show');
            return false ;
        }else{
            var url = "/food/index.php/Home/Index/checkAccountExist";
            $.ajax({
                type: "POST",
                url: url,
                data: {"account" : account},
                success: function(respond, status, xhr){
                    if(respond['info'] == "success"){
                        $('account').removeAttr("data-toggle data-placement title").tooltip("destory");
                    }else{
                        $('#account').attr({
                            "data-toggle": "tooltip",
                            "data-placement": 'top',
                            "title": "账号不存在"
                        }).tooltip('show');
                    }
                },
                error: function(xhr, textStatus, errorType){
                    alert(textStatus + ":" + errorType);
                }

            });
        }

    });
    </script>

</body>
</html>