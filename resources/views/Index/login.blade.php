<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<title>约健@yield('title')</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="{{asset('assets/Css/layout.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('assets/Css/login.css')}}" />
		<script type="text/javascript" src="{{asset('assets/Js/jquery-1.7.2.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/Js/js.js')}}"></script>
	</head>
	<style>
	.ibar {display: none;}
</style>
	<body class="login-bg">
		<div class="main ">
			<!--登录-->
			<div class="login-dom login-max">
				<div class="logo text-center">
					<a href="#">
					<img src="{{asset('assets/images/logo1.png')}}" width="180px" height="180px">
					</a>
				</div>
				<div class="login container " id="login">
					<p class="text-big text-center logo-color">
						约键系统
					</p>
					@if($data==0)
					<p class=" text-center margin-small-top logo-color text-small">
						俱乐部管理控制台
					</p>
					<form class="login-form" action="{{url('Index/clubadmin_login')}}" method="post" autocomplete="off">
					@elseif($data==1)
					<p class=" text-center margin-small-top logo-color text-small">
						管理员控制台
					</p>
					<form class="login-form" action="{{url('Index/admin_login')}}" method="post" autocomplete="off">
					@else
					<p class=" text-center margin-small-top logo-color text-small">
						超管控制台
					</p>
					<form class="login-form" action="{{url('Index/superadmin_login')}}" method="post" autocomplete="off">
					@endif
						<div class="login-box border text-small" id="box">

							<div class="name border-bottom">
								<input type="text" placeholder="手机 / 邮箱 / 某某账号" id="email" name="name" datatype="*" nullmsg="请填写帐号信息">
							</div>
							<div class="pwd">
								<input type="password" placeholder="密码" datatype="*" id="password" name="password" nullmsg="请填写帐号密码">
							</div>
						</div>
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<input type="submit" class="btn text-center login-btn" value="立即登录">
					</form>
					<div class="forget">
						<a href="{{url('Index/superadmin_index')}}" class="forget-pwd text-small fl">超管登录</a>
						<a href="{{url('Index/clubadmin_index')}}" class="forget-new text-small fr" id="forget-new">俱乐部管理登录</a>
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
