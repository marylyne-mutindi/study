<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/widget.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:56 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="../../../../../../fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/material_style.css">
	<!-- inbox style -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- Owl Carousel Assets -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Smart</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a class="fullscreen-btn"><i data-feather="maximize"></i></a></li>
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
									src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/gb.png" class="position-left" alt=""> English
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="deutsch"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/de.png" alt=""> Deutsch</a>
								</li>
								<li>
									<a class="ukrainian"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/ua.png" alt=""> Українська</a>
								</li>
								<li>
									<a class="english"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/gb.png" alt=""> English</a>
								</li>
								<li>
									<a class="espana"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/es.png" alt=""> España</a>
								</li>
								<li>
									<a class="russian"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/ru.png" alt=""> Русский</a>
								</li>
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<?php
						require_once ('includes/notification.php');
						?>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i data-feather="mail"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user8.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<?php
						require_once('includes/manage.php');
					?>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Setting Panel
					</div>
					<div class="quick-setting slimscroll-style">
						<ul id="themecolors">
							<li>
								<p class="sidebarSettingTitle">Sidebar Color</p>
							</li>
							<li class="complete">
								<div class="theme-color sidebar-theme">
									<a href="#" data-theme="white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header Brand color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color logo-theme">
									<a href="#" data-theme="logo-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color header-theme">
									<a href="#" data-theme="header-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php
			require_once('includes/sidebar.php')
			?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Widgets</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Widgets</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="row clearfix">
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>New Client</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-success" role="progressbar"
													aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
													style="width: 65%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">14% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>New Project</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-danger" role="progressbar"
													aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
													style="width: 68%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">7% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Open Project</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-warning" role="progressbar"
													aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"
													style="width: 52%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">34% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Complete Project</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-info" role="progressbar"
													aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"
													style="width: 56%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">20% higher than last
												month</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="row1 clearfix top-report">
								<div class="col-12-1">
									<div class="card">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-bs-target="#carousel-example-generic" data-slide-to="0"
													class="active"></li>
												<li data-bs-target="#carousel-example-generic" data-slide-to="1"
													class="">
												</li>
												<li data-bs-target="#carousel-example-generic" data-slide-to="2"
													class="">
												</li>
											</ol>
											<!-- Wrapper for slides -->
											<div class="carousel-inner owl-carousel" role="listbox" id="owl-demo">
												<div class="item active"> <img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/slider/slider1.jpg"
														alt=""> </div>
												<div class="item"> <img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/slider/slider2.jpg" alt="">
												</div>
												<div class="item"> <img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/slider/slider3.jpg" alt="">
												</div>
											</div>
											<!-- Controls -->
											<a class="left carousel-control" href="#carousel-example-generic"
												role="button" data-slide="prev"> <span
													class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a> <a class="right carousel-control" href="#carousel-example-generic"
												role="button" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"
													aria-hidden="true"></span> <span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="state-overview">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel purple">
									<div class="symbol">
										<i class="fa fa-users usr-clr"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="23">0</p>
										<p>APPOINTMENTS</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel deepPink-bgcolor">
									<div class="symbol">
										<i class="fa fa-user"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
										<p>NEW STUDENTS</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel orange">
									<div class="symbol">
										<i class="fa fa-heartbeat"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="14">0</p>
										<p>TODAY'S OPT</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="fa fa-money"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">0</p>
										<span>$</span>
										<p>University Earning</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget -->
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/blog/blog1.jpg"></div>
								<div class="white-box">
									<div class="text-muted"><span class="m-r-10">June 16</span>
										<a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 56</a>
									</div>
									<h3 class="m-t-20 m-b-20">White Woman Practices Yoga In</h3>
									<p>There is a new neighbor on Sesame Street. Her name is Julia </p>
									<button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read
										more</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/blog/blog2.jpg"></div>
								<div class="white-box">
									<div class="text-muted"><span class="m-r-10">Feb 12</span>
										<a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 45</a>
									</div>
									<h3 class="m-t-20 m-b-20">How Much Radon is In Your Home?</h3>
									<p>There is a new neighbor on Sesame Street. Her name is Julia</p>
									<button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read
										more</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/blog/blog3.jpg"></div>
								<div class="white-box">
									<div class="text-muted"><span class="m-r-10">Dec 17</span>
										<a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 79</a>
									</div>
									<h3 class="m-t-20 m-b-20">White Woman Practices Yoga In</h3>
									<p>There is a new neighbor on Sesame Street. Her name is Julia </p>
									<button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read
										more</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/blog/blog4.jpg"></div>
								<div class="white-box">
									<div class="text-muted"><span class="m-r-10">April 23</span>
										<a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
									</div>
									<h3 class="m-t-20 m-b-20">How Much Radon is In Your Home?</h3>
									<p>There is a new neighbor on Sesame Street. Her name is Julia</p>
									<button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read
										more</button>
								</div>
							</div>
						</div>
					</div>
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i data-feather="users"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">Appointments</span>
										<span class="info-box-number">450</span>
										<div class="progress">
											<div class="progress-bar" style="width: 45%"></div>
										</div>
										<span class="progress-description">
											45% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i data-feather="user"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">New Students</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar" style="width: 40%"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">content_cut</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Operations</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">University Earning</span>
										<span class="info-box-number">13,921</span><span>$</span>
										<div class="progress">
											<div class="progress-bar" style="width: 50%"></div>
										</div>
										<span class="progress-description">
											50% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>CHAT</header>
									<button id="chatlist" class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="chatlist">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<ul class="chat nice-chat small-slimscroll-style">
											<li class="in"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg" class="avatar"
													alt="">
												<div class="message">
													<span class="arrow"></span> <a class="name" href="#">Jone
														Doe</a> <span class="datetime">at Mar 12, 2014 6:12</span> <span
														class="body"> Lorem ipsum dolor sit
														amet,
														consectetuer adipiscing elit </span>
												</div>
											</li>
											<li class="out"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/dp.jpg" class="avatar" alt="">
												<div class="message">
													<span class="arrow"></span> <a class="name" href="#">Kiran
														Patel</a> <span class="datetime">at Mar 12, 2014 6:13</span>
													<span class="body"> sed diam nonummy nibh
														euismod
														tincidunt ut </span>
												</div>
											</li>
											<li class="in"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg" class="avatar"
													alt="">
												<div class="message">
													<span class="arrow"></span> <a class="name" href="#">Jone
														Doe</a> <span class="datetime">at Mar 12, 2014 6:12</span> <span
														class="body"> aoreet dolore magna
														aliquam erat
														volutpat. </span>
												</div>
											</li>
											<li class="out"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/dp.jpg" class="avatar" alt="">
												<div class="message">
													<span class="arrow"></span> <a class="name" href="#">Kiran
														Patel</a> <span class="datetime">at Mar 12, 2014 6:13</span>
													<span class="body"> sed diam nonummy nibh
														euismod
														tincidunt ut </span>
												</div>
											</li>
											<li class="in"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg" class="avatar"
													alt="">
												<div class="message">
													<span class="arrow"></span> <a class="name" href="#">Jone
														Doe</a> <span class="datetime">at Mar 12, 2014 6:12</span> <span
														class="body"> aoreet dolore magna
														aliquam erat
														volutpat. </span>
												</div>
											</li>
											<li class="out"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/dp.jpg" class="avatar" alt="">
												<div class="message">
													<span class="arrow"></span> <a class="name" href="#">Kiran
														Patel</a> <span class="datetime">at Mar 12, 2014 6:13</span>
													<span class="body"> sed diam nonummy nibh
													</span>
												</div>
											</li>
										</ul>
										<div class="box-footer chat-box-submit">
											<form action="#" method="post">
												<div class="input-group">
													<input type="text" name="message" placeholder="Enter your ToDo List"
														class="form-control">
													<span class="input-group-btn">
														<button type="submit" class="btn btn-warning btn-flat"><i
																class="fa fa-arrow-right"></i></button>
													</span> </div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Professors List</header>
									<button id="prfList" class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="prfList">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="row">
										<ul class="docListWindow small-slimscroll-style">
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Rajesh</a> -(M.Com, PHD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a> -(M.A., B.Ed)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a> - (B.C.A., M.C.A.)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a> - (B.E., M.E.)
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jacob Ryan</a> - (M.Phil)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user6.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Megha Trivedi</a> - (M.S.W, PHD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a> -(B.S.C, M.S.C.)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a> - (B.E., M.E.)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a> - (B.C.A., M.C.A.)
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
										</ul>
										<div class="full-width text-center p-t-10">
											<a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Quick Mail start -->
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="inbox">
								<div class="card">
									<div class="card-body no-padding height-9">
										<div class="inbox-body">
											<div class="mail-list">
												<div class="compose-mail">
													<form method="post">
														<div class="email-form">
															<label for="to" class="">To:</label> <input type="text"
																tabindex="1" id="to" class="form-control itemField">
															<div class="compose-options">
																<a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();"
																	href="javascript:;">Cc</a> <a
																	onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();"
																	href="javascript:;">Bcc</a>
															</div>
														</div>
														<div class="email-form hidden">
															<label for="cc" class="">Cc:</label> <input type="text"
																tabindex="2" id="cc" class="form-control itemField">
														</div>
														<div class="email-form hidden">
															<label for="bcc" class="">Bcc:</label> <input type="text"
																tabindex="2" id="bcc" class="form-control itemField">
														</div>
														<div class="email-form">
															<label for="subject" class="">Subject:</label> <input
																type="text" tabindex="1" id="subject"
																class="form-control itemField">
														</div>
														<div class="mt-4">
															<div id="summernote"></div>
															<input type="file" class="default" multiple>
														</div>
														<div class="box-footer clearfix">
															<button type="button"
																class="mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">
																Send <i class="fa fa-paper-plane-o"></i>
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Quick Mail end -->
						<!-- Activity feed start -->
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Activity Feed</header>
									<button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="feedMenu">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<ul class="feedBody">
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg" class="img-radius "
													alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small
													class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												hii John, I have upload doc related to task.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg" class="img-radius "
													alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small
													class="text-muted">5 hours
													ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Please do as specify. Let me know if you have any query.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg" class="img-radius "
													alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblCommentStyle">comment</span> Lina
												Smith<small class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Hey, How are you??
											</p>
										</li>
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg" class="img-radius "
													alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan
												<small class="text-muted">7 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												I am fine. You??
											</p>
										</li>
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg" class="img-radius "
													alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small
													class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												hii John, I have upload doc related to task.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user6.jpg" class="img-radius "
													alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small
													class="text-muted">5 hours
													ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Please do as specify. Let me know if you have any query.
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Activity feed end -->
					</div>
					<!-- start new student list -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>New Student List</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>Name</th>
														<th>Assigned Professor</th>
														<th>Date Of Admit</th>
														<th>Fees</th>
														<th>Branch</th>
														<th>Edit</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Jens Brincker</td>
														<td>Kenny Josh</td>
														<td>27/05/2016</td>
														<td>
															<span class="label label-sm label-success">paid</span>
														</td>
														<td>Mechanical</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Mark Hay</td>
														<td> Mark</td>
														<td>26/05/2017</td>
														<td>
															<span class="label label-sm label-warning">unpaid </span>
														</td>
														<td>Science</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Anthony Davie</td>
														<td>Cinnabar</td>
														<td>21/05/2016</td>
														<td>
															<span class="label label-sm label-success ">paid</span>
														</td>
														<td>Commerce</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>4</td>
														<td>David Perry</td>
														<td>Felix </td>
														<td>20/04/2016</td>
														<td>
															<span class="label label-sm label-danger">unpaid</span>
														</td>
														<td>Mechanical</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Anthony Davie</td>
														<td>Beryl</td>
														<td>24/05/2016</td>
														<td>
															<span class="label label-sm label-success ">paid</span>
														</td>
														<td>M.B.A.</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Alan Gilchrist</td>
														<td>Joshep</td>
														<td>22/05/2016</td>
														<td>
															<span class="label label-sm label-warning ">unpaid</span>
														</td>
														<td>Science</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>7</td>
														<td>Mark Hay</td>
														<td>Jayesh</td>
														<td>18/06/2016</td>
														<td>
															<span class="label label-sm label-success ">paid</span>
														</td>
														<td>Commerce</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Sue Woodger</td>
														<td>Sharma</td>
														<td>17/05/2016</td>
														<td>
															<span class="label label-sm label-danger">unpaid</span>
														</td>
														<td>Mechanical</td>
														<td>
															<a href="javascript:void(0)" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)" class="tblDelBtn">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end new student list -->
					<!--start calander , to-do & goal process -->
					<div class="row">
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Todo List</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<ul class="to-do-list ui-sortable" id="sortable-todo">
										<li class="clearfix">
											<div class="todo-check pull-left">
												<input type="checkbox" value="None" id="todo-check1">
												<label for="todo-check1"></label>
											</div>
											<p class="todo-title">Add fees details in system
											</p>
											<div class="todo-actionlist pull-right clearfix">
												<a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li class="clearfix">
											<div class="todo-check pull-left">
												<input type="checkbox" value="None" id="todo-check2">
												<label for="todo-check2"></label>
											</div>
											<p class="todo-title">Announcement for holiday
											</p>
											<div class="todo-actionlist pull-right clearfix">
												<a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li class="clearfix">
											<div class="todo-check pull-left">
												<input type="checkbox" value="None" id="todo-check3">
												<label for="todo-check3"></label>
											</div>
											<p class="todo-title">call bus driver</p>
											<div class="todo-actionlist pull-right clearfix">
												<a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li class="clearfix">
											<div class="todo-check pull-left">
												<input type="checkbox" value="None" id="todo-check4">
												<label for="todo-check4"></label>
											</div>
											<p class="todo-title">School picnic</p>
											<div class="todo-actionlist pull-right clearfix">
												<a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li class="clearfix">
											<div class="todo-check pull-left">
												<input type="checkbox" value="None" id="todo-check5">
												<label for="todo-check5"></label>
											</div>
											<p class="todo-title">Exam time table generate
											</p>
											<div class="todo-actionlist pull-right clearfix">
												<a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
											</div>
										</li>
										<li class="clearfix">
											<div class="todo-check pull-left">
												<input type="checkbox" value="None" id="todo-check6">
												<label for="todo-check6"></label>
											</div>
											<p class="todo-title">Add fees details in system
											</p>
											<div class="todo-actionlist pull-right clearfix">
												<a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Notifications</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<div class="noti-information notification-menu">
											<div class="notification-list mail-list not-list small-slimscroll-style">
												<a href="javascript:;" class="single-mail"> <span
														class="icon bg-primary"> <i class="fa fa-user-o"></i>
													</span> <span class="text-purple">Abhay Jani</span> Added you as
													friend
													<span class="notificationtime">
														<small>Just Now</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon blue-bgcolor"> <i class="fa fa-envelope-o"></i>
													</span> <span class="text-purple">John Doe</span> send you a mail
													<span class="notificationtime">
														<small>Just Now</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon bg-success"> <i class="fa fa-check-square-o"></i>
													</span> Success Message
													<span class="notificationtime">
														<small> 2 Days Ago</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon bg-warning"> <i class="fa fa-warning"></i>
													</span> <strong>Database Overloaded Warning!</strong>
													<span class="notificationtime">
														<small>1 Week Ago</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon bg-primary"> <i class="fa fa-user-o"></i>
													</span> <span class="text-purple">Abhay Jani</span> Added you as
													friend
													<span class="notificationtime">
														<small>Just Now</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon blue-bgcolor"> <i class="fa fa-envelope-o"></i>
													</span> <span class="text-purple">John Doe</span> send you a mail
													<span class="notificationtime">
														<small>Just Now</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon bg-success"> <i class="fa fa-check-square-o"></i>
													</span> Success Message
													<span class="notificationtime">
														<small> 2 Days Ago</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon bg-warning"> <i class="fa fa-warning"></i>
													</span> <strong>Database Overloaded Warning!</strong>
													<span class="notificationtime">
														<small>1 Week Ago</small>
													</span>
												</a>
												<a href="javascript:;" class="single-mail"> <span
														class="icon bg-danger"> <i class="fa fa-times"></i>
													</span> <strong>Server Error!</strong>
													<span class="notificationtime">
														<small>10 Days Ago</small>
													</span>
												</a>
											</div>
											<div class="full-width text-center p-t-10">
												<button type="button"
													class="btn purple btn-outline btn-circle margin-0">View All</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="white-box border-gray">
								<div class="user-bg">
									<div class="overlay-box">
										<div class="user-content">
											<a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle"
													src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/dp.jpg"></a>
											<h4 class="text-white">Kiran Patel</h4>
											<h5 class="text-white">info@kiranpatel.com</h5>
										</div>
									</div>
								</div>
								<div class="user-btm-box">
									<div class="row">
										<div class="col-md-4 col-sm-4 text-center">
											<p class="text-purple"><i class="fa fa-facebook"></i></p>
											<h1>467</h1>
										</div>
										<div class="col-md-4 col-sm-4 text-center">
											<p class="text-success"><i class="fa fa-twitter"></i></p>
											<h1>234</h1>
										</div>
										<div class="col-md-4 col-sm-4 text-center">
											<p class="text-danger"><i class="fa fa-instagram"></i></p>
											<h1>686</h1>
										</div>
									</div>
									<div class="col-md-12  m-b-0 text-center">
										<div class="stat-item">
											<h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h3 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 34% High
										then last month</small> Site Traffic</h3>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>40.40%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>55.40%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.50%</b>
									</div>
								</div>
								<div id="sparkline13"><canvas width="378" height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i
											class="fa fa-sort-desc"></i> 34% Low then
										last month</small>Site Traffic</h3>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>40.40%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>55.40%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.50%</b>
									</div>
								</div>
								<div id="sparkline15"><canvas width="378" height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h3 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 18% High
										then last month</small>Site Traffic</h3>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>40.40%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>55.40%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.50%</b>
									</div>
								</div>
								<div id="sparkline14"><canvas width="378" height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="analysis-box m-b-0 bg-purple">
								<h3 class="text-white box-title">Total Students <span class="pull-right"><i
											class="fa fa-caret-up"></i> 345</span></h3>
								<div id="sparkline7"><canvas
										style="display: inline-block; width: 267px; height: 70px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="analysis-box m-b-0 bg-danger">
								<h3 class="text-white box-title">New Students <span class="pull-right"><i
											class="fa fa-caret-up"></i> 643</span></h3>
								<div id="sparkline12"><canvas
										style="display: inline-block; width: 367px; height: 70px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="analysis-box m-b-0 bg-blue">
								<h3 class="text-white box-title">Total Course <span class="pull-right"><i
											class="fa fa-caret-up"></i>765</span></h3>
								<div id="sparkline9"><canvas
										style="display: inline-block; width: 267px; height: 70px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="analysis-box m-b-0 bg-success">
								<h3 class="text-white box-title">Visitors <span class="pull-right"><i
											class="fa fa-caret-up"></i> 323</span></h3>
								<div id="sparkline16" class="text-center"><canvas
										style="display: inline-block; width: 215px; height: 70px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">chat</i>Chat
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- Start User Chat -->
						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
							id="quick_sidebar_tab_1">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg"
												width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user7.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user6.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user8.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user9.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user10.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End User Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery/jquery.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/popper/popper.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/feather/feather.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/moment/moment.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/counterup/jquery.counterup.min.js"></script>
	<!-- owl carousel -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/pages/owl-carousel/owl_data.js"></script>
	<!-- Common js-->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/app.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/layout.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- summernote -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/summernote/summernote.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/pages/summernote/summernote-data.js"></script>
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/widget.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:56 GMT -->
</html>