<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>表单组件 - 表单 - 统一开发平台 - UI库</title>
		<meta name="description" content="Restyling jQuery UI Widgets and Elements" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" />

		<link rel="stylesheet" href="{{asset('asset/css/jquery-ui.custom.min.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/chosen.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/datepicker.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/bootstrap-timepicker.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/daterangepicker.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/bootstrap-datetimepicker.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/colorpicker.css')}}" />

		<link rel="stylesheet" href="{{asset('asset/css/ace-fonts.css')}}" />
		<link rel="stylesheet" href="{{asset('asset/css/ace.min.css')}}" id="main-ace-style" />

		<script src="{{asset('asset/js/ace-extra.min.js')}}"></script>
			@yield('style')
			<style media="screen">
			th,td{

				text-align: center;
				font-size: smaller;
			}


			</style>
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
			@section('header')<!--导航栏-->
		<div id="navbar" class="navbar navbar-default">

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="index.html" class="navbar-brand">
						<small>
						<b>约键</b>
						</small>
					</a>
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">



						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{asset('asset/avatars/user.jpg')}}" alt="Jason's Photo" />
								<span class="user-info">
									欢迎您<br />
									{{$admin}}
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


								<li>
									<a href="{{url('Index/loginout')}}">
										<i class="ace-icon fa fa-power-off"></i>
										登出
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>
			@show<!--导航栏-->
			@section('menu') <!--侧边栏-->
		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar responsive">

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> 总控制台 </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="{{url('Club/club_index')}}">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> 俱乐部简介 </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="{{url('Club/coach_list')}}" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> 教练管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{url('Club/coach_list')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									教练信息
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="{{url('Club/coach_addview')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									添加教练
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="{{url('Club/video_list')}}" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>

							<span class="menu-text">视频管理</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{url('Club/video_list')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									视频信息
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="{{url('Club/video_addview')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									视频添加
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
			@show<!--侧边栏-->
				<!-- /section:basics/content.breadcrumbs -->
			@yield('content')
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->


		<script src="{{asset('asset/js/jquery.min.js')}}"></script>
		<script src="{{asset('asset/js/jquery.mobile.custom.min.js')}}"></script>
		<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('asset/js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{asset('asset/js/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{asset('asset/js/chosen.jquery.min.js')}}"></script>
		<script src="{{asset('asset/js/fuelux/fuelux.spinner.min.js')}}"></script>
		<script src="{{asset('asset/js/date-time/bootstrap-datepicker.min.js')}}"></script>
		<script src="{{asset('asset/js/date-time/bootstrap-timepicker.min.js')}}"></script>
		<script src="{{asset('asset/js/date-time/moment.min.js')}}"></script>
		<script src="{{asset('asset/js/date-time/daterangepicker.min.js')}}"></script>
		<script src="{{asset('asset/js/date-time/bootstrap-datetimepicker.min.js')}}"></script>
		<script src="{{asset('asset/js/bootstrap-colorpicker.min.js')}}"></script>
		<script src="{{asset('asset/js/jquery.knob.min.js')}}"></script>
		<script src="{{asset('asset/js/jquery.autosize.min.js')}}"></script>
		<script src="{{asset('asset/js/jquery.inputlimiter.1.3.1.min.js')}}"></script>
		<script src="{{asset('asset/js/jquery.maskedinput.min.js')}}"></script>
		<script src="{{asset('asset/js/bootstrap-tag.min.js')}}"></script>
		<script src="{{asset('asset/js/typeahead.jquery.min.js')}}"></script>

		<!-- ace scripts -->
		<script src="{{asset('asset/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('asset/js/ace.min.js')}}"></script>

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->

	</body>
</html>
