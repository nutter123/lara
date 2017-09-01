<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>约健@yield('title')</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="{{asset('assets/Css/layout.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('assets/Css/login.css')}}" />
		<script type="text/javascript" src="{{asset('assets/Js/jquery-1.7.2.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/Js/js.js')}}"></script>
	</head>
	<body class="login-bg">
		<div class="main ">
			<!--登录-->
			<div class="login-dom login-max">
				<div class="logo text-center">
					<a href="#">
					<img src="{{asset('asset/images/logo.png')}}" width="180px" height="180px">
					</a>
				</div>
				<div class="login container " id="login">
					<p class="text-big text-center logo-color">
						约键系统
					</p>
					<p class=" text-center margin-small-top logo-color text-small">
						俱乐部控制台 | 管理员管理平台
					</p>
					<form class="login-form" action="{{url('Index/login')}}" method="post" autocomplete="off">
						<div class="login-box border text-small" id="box">

							<div class="name border-bottom">
								<input type="text" placeholder="手机 / 邮箱 / 某某账号" id="email" name="email" datatype="*" nullmsg="请填写帐号信息">
							</div>
							<div class="pwd">
								<input type="password" placeholder="密码" datatype="*" id="password" name="password" nullmsg="请填写帐号密码">
							</div>
						</div>
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<input type="submit" class="btn text-center login-btn" value="立即登录">
					</form>
					<div class="forget">
						<a href="repassword.html" class="forget-pwd text-small fl">忘记登录密码？</a><a href="register.html" class="forget-new text-small fr" id="forget-new">创建一个新账号</a>
					</div>
				</div>
			</div>

			<div class="footer text-center text-small ie">
				Copyright 2013-2016 某某科技科技有限公司 版权所有 <a href="#" target="_blank">滇ICP备13005806号</a>
				<span class="margin-left margin-right">|</span>
				<script src="#" language="JavaScript"></script>
			</div>
			<div class="popupDom">
				<div class="popup text-default">
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="{{asset('asset/Js/Validform_v5.3.2_min.js')}}"></script>
	<script type="text/javascript">
		function popup_msg(msg) {
			$(".popup").html("" + msg + "");
			$(".popupDom").animate({
				"top": "0px"
			}, 400);
			setTimeout(function() {
				$(".popupDom").animate({
					"top": "-40px"
				}, 400);
			}, 2000);
		}

		/*动画（注册）*/
		$(document).ready(function(e) {
			// $("input[name=username]").focus();
			// $('.login-form').Validform({
			// 	ajaxPost: true,
			// 	tiptype: function(msg) {
			// 		if (msg) popup_msg('' + msg + '');
			// 	},
			// 	callback: function(ret) {
			// 		popup_msg('' + ret.info + '');
			// 		if (ret.status == 1) {
			// 			if (ret.uc_user_synlogin) {
			// 				$("body").append(ret.uc_user_synlogin);
			// 			}
			// 			setTimeout("window.location='" + ret.url + "'", 2000);
			// 		}
			// 	}
			// })

		});
	</script>

</html>
