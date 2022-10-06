<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/staff_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:54 GMT -->
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
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

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
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i data-feather="bell"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span>
													Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
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
						<li class="dropdown dropdown-user">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> Sneha
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
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
								<div class="page-title">Professor Profile</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Professors</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Professor Profile</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg" class="img-responsive" alt="">
											</div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> Celena Anderson </div>
											<div class="profile-usertitle-job"> Jr. Clerk </div>
										</div>
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Followers</b> <a class="pull-right">1,200</a>
											</li>
											<li class="list-group-item">
												<b>Following</b> <a class="pull-right">750</a>
											</li>
											<li class="list-group-item">
												<b>Friends</b> <a class="pull-right">11,172</a>
											</li>
										</ul>
										<!-- END SIDEBAR USER TITLE -->
										<!-- SIDEBAR BUTTONS -->
										<div class="profile-userbuttons">
											<button type="button"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Follow</button>
											<button type="button"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">Message</button>
										</div>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								<div class="card">
									<div class="card-head">
										<header>About Me</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="profile-desc">
											Hello I am Celena Anderson a Clerk in Xyz College Surat. I love to work with
											all my college staff and
											seniour professors.
										</div>
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Gender </b>
												<div class="profile-desc-item pull-right">Female</div>
											</li>
											<li class="list-group-item">
												<b>Operation Done </b>
												<div class="profile-desc-item pull-right">30+</div>
											</li>
											<li class="list-group-item">
												<b>Degree </b>
												<div class="profile-desc-item pull-right">M.Com.</div>
											</li>
											<li class="list-group-item">
												<b>Designation</b>
												<div class="profile-desc-item pull-right">Jr. Clerk</div>
											</li>
										</ul>
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 37 </div>
												<div class="uppercase profile-stat-text"> Projects </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 51 </div>
												<div class="uppercase profile-stat-text"> Tasks </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 61 </div>
												<div class="uppercase profile-stat-text"> Uploads </div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-head">
										<header>Address</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="row text-center m-t-10">
											<div class="col-md-12">
												<p>456, Pragri flat, varacha road, Surat
													<br> Gujarat, India.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-head">
										<header>Work Expertise</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="work-monitor work-progress">
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Telly</div>
													<div class="percent pull-right">50%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-danger progress-bar-striped active"
														role="progressbar" aria-valuenow="40" aria-valuemin="0"
														aria-valuemax="100" style="width: 70%">
														<span class="sr-only">50% </span>
													</div>
												</div>
											</div>
											<div class="states">
												<div class="info">
													<div class="desc pull-left">MS Office</div>
													<div class="percent pull-right">85%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-success progress-bar-striped active"
														role="progressbar" aria-valuenow="40" aria-valuemin="0"
														aria-valuemax="100" style="width: 45%">
														<span class="sr-only">85% </span>
													</div>
												</div>
											</div>
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Account</div>
													<div class="percent pull-right">20%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-info progress-bar-striped active"
														role="progressbar" aria-valuenow="40" aria-valuemin="0"
														aria-valuemax="100" style="width: 35%">
														<span class="sr-only">20% </span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="card">
										<div class="card-topline-aqua">
											<header></header>
										</div>
										<div class="white-box">
											<!-- Nav tabs -->
											<div class="p-rl-20">
												<ul class="nav customtab nav-tabs" role="tablist">
													<li class="nav-item"><a href="#tab1" class="nav-link active"
															data-bs-toggle="tab">About Me</a></li>
													<li class="nav-item"><a href="#tab2" class="nav-link"
															data-bs-toggle="tab">Activity</a></li>
												</ul>
											</div>
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo" id="tab1">
													<div id="biography">
														<div class="row">
															<div class="col-md-3 col-6 b-r"> <strong>Full Name</strong>
																<br>
																<p class="text-muted">Celena Anderson </p>
															</div>
															<div class="col-md-3 col-6 b-r"> <strong>Mobile</strong>
																<br>
																<p class="text-muted">(123) 456 7890</p>
															</div>
															<div class="col-md-3 col-6 b-r"> <strong>Email</strong>
																<br>
																<p class="text-muted">test@example.com</p>
															</div>
															<div class="col-md-3 col-6"> <strong>Location</strong>
																<br>
																<p class="text-muted">India</p>
															</div>
														</div>
														<hr>
														<p class="m-t-30">Completed my graduation in Commerce from the
															well known and renowned institution of
															India – SARDAR PATEL COMMERCE COLLEGE, BARODA in 2000-01,
															which was affiliated to M.S. University. I
															ranker in University exams from the same university from
															1996-01.</p>
														<p>Worked as Clerk and Head of the department at Sarda Collage,
															Rajkot, Gujarat from 2003-2015 </p>
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry. Lorem Ipsum has been the
															industry's standard dummy text ever since the 1500s, when an
															unknown printer took a galley of type and
															scrambled it to make a type specimen book. It has survived
															not only five centuries, but also the leap
															into electronic typesetting, remaining essentially
															unchanged.</p>
														<br>
														<h4 class="font-bold">Education</h4>
														<hr>
														<ul>
															<li>B.Com.,Gujarat University, Ahmedabad,India.</li>
															<li>M.Com.,Gujarat University, Ahmedabad, India.</li>
														</ul>
														<br>
														<h4 class="font-bold">Experience</h4>
														<hr>
														<ul>
															<li>One year experience as Jr. Clerk from April-2009 to
																march-2010 at B. J. Commerce College, Ahmedabad.</li>
															<li>Three year experience as Jr. Clerk at V.S. Arts &
																Commerse Collage from April - 2008 to April -
																2011.</li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
														</ul>
														<br>
														<h4 class="font-bold">Conferences, Cources & Workshop Attended
														</h4>
														<hr>
														<ul>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and
																typesetting industry. </li>
														</ul>
														<br>
													</div>
												</div>
												<div class="tab-pane" id="tab2">
													<div class="container-fluid">
														<div class="row">
															<div class="full-width p-rl-20">
																<div class="panel">
																	<form>
																		<textarea class="form-control p-text-area"
																			rows="4"
																			placeholder="Whats in your mind today?"></textarea>
																	</form>
																	<footer class="panel-footer">
																		<button
																			class="btn btn-post pull-right">Post</button>
																		<ul class="nav nav-pills p-option">
																			<li>
																				<a href="#"><i
																						class="fa fa-user"></i></a>
																			</li>
																			<li>
																				<a href="#"><i
																						class="fa fa-camera"></i></a>
																			</li>
																			<li>
																				<a href="#"><i
																						class="fa  fa-location-arrow"></i></a>
																			</li>
																			<li>
																				<a href="#"><i
																						class="fa fa-meh-o"></i></a>
																			</li>
																		</ul>
																	</footer>
																</div>
															</div>
															<div class="full-width p-rl-20">
																<ul class="activity-list">
																	<li>
																		<div class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg"
																				alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">Rajesh</a> <span>Uploaded 3
																					new photos</span></h5>
																			<p class="text-muted">7 minutes ago near
																				Alaska, USA</p>
																			<div class="album">
																				<a href="#">
																					<img alt=""
																						src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/mega-img1.jpg">
																				</a>
																				<a href="#">
																					<img alt=""
																						src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/mega-img2.jpg">
																				</a>
																				<a href="#">
																					<img alt=""
																						src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/mega-img3.jpg">
																				</a>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg"
																				alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">John Doe</a> <span>attended
																					a meeting with</span>
																				<a href="#">Lina Smith.</a></h5>
																			<p class="text-muted">2 days ago near
																				Alaska, USA</p>
																		</div>
																	</li>
																	<li>
																		<div class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg"
																				alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">Kehn Anderson</a>
																				<span>completed the task “wireframe
																					design” within the dead line</span>
																			</h5>
																			<p class="text-muted">4 days ago near
																				Alaska, USA</p>
																		</div>
																	</li>
																	<li>
																		<div class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg"
																				alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">Jacob Ryan</a> <span>was
																					absent office due to sickness</span>
																			</h5>
																			<p class="text-muted">4 days ago near
																				Alaska, USA</p>
																		</div>
																	</li>
																</ul>
																<div class="post-box"> <span
																		class="text-muted text-small"><i
																			class="fa fa-clock-o"
																			aria-hidden="true"></i>
																		13 minutes ago</span>
																	<div class="post-img"><img
																			src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/slider/fullimage1.jpg"
																			class="img-responsive" alt=""></div>
																	<div>
																		<h4 class="">Lorem Ipsum is simply dummy text of
																			the printing</h4>
																		<p>Lorem Ipsum is simply dummy text of the
																			printing and typesetting industry. Lorem
																			Ipsum has been
																			the industry's standard dummy text ever
																			since the 1500s, </p>
																		<p> <a href="#"
																				class="btn btn-raised btn-info btn-sm"><i
																					class="fa fa-heart-o"
																					aria-hidden="true"></i>
																				Like (5) </a> <a href="#"
																				class="btn btn-raised bg-soundcloud btn-sm"><i
																					class="zmdi zmdi-long-arrow-return"></i>
																				Reply</a> </p>
																	</div>
																</div>
																<div class="post-box"> <span
																		class="text-muted text-small"><i
																			class="fa fa-clock-o"
																			aria-hidden="true"></i>
																		37 minutes ago</span>
																	<div class="post-img"><img
																			src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/slider/fullimage2.jpg"
																			class="img-responsive" alt=""></div>
																	<div>
																		<h4 class="">Lorem Ipsum is simply dummy text of
																			the printing</h4>
																		<p>Lorem Ipsum is simply dummy text of the
																			printing and typesetting industry. Lorem
																			Ipsum has been
																			the industry's standard dummy text ever
																			since the 1500s, </p>
																		<p> <a href="#"
																				class="btn btn-raised btn-info btn-sm"><i
																					class="fa fa-heart-o"
																					aria-hidden="true"></i>
																				Like (5) </a> <a href="#"
																				class="btn btn-raised bg-soundcloud btn-sm"><i
																					class="zmdi zmdi-long-arrow-return"></i>
																				Reply</a> </p>
																	</div>
																</div>
																<div class="post-box"> <span
																		class="text-muted text-small"><i
																			class="fa fa-clock-o"
																			aria-hidden="true"></i>
																		53 minutes ago</span>
																	<div class="post-img"><img
																			src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/slider/fullimage3.jpg"
																			class="img-responsive" alt=""></div>
																	<div>
																		<h4 class="">Lorem Ipsum is simply dummy text of
																			the printing</h4>
																		<p>Lorem Ipsum is simply dummy text of the
																			printing and typesetting industry. Lorem
																			Ipsum has been
																			the industry's standard dummy text ever
																			since the 1500s, </p>
																		<p> <a href="#"
																				class="btn btn-raised btn-info btn-sm"><i
																					class="fa fa-heart-o"
																					aria-hidden="true"></i>
																				Like (5) </a> <a href="#"
																				class="btn btn-raised bg-soundcloud btn-sm"><i
																					class="zmdi zmdi-long-arrow-return"></i>
																				Reply</a> </p>
																	</div>
																</div>
																<div class="col-lg-12 p-t-20 text-center">
																	<button type="button"
																		class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Load
																		More</button>
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
							<!-- END PROFILE CONTENT -->
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
											<li class="media"><img class="media-object"
													src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg" width="35" height="35" alt="...">
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
											<li class="media"><img class="media-object"
													src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg" width="35" height="35" alt="...">
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
											<li class="media"><img class="media-object"
													src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg" width="35" height="35" alt="...">
												<i class="busy dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Sarah Smith</h5>
													<div class="media-heading-sub">Anaesthetics</div>
												</div>
											</li>
											<li class="media"><img class="media-object"
													src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user7.jpg" width="35" height="35" alt="...">
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
											<li class="media"><img class="media-object"
													src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user8.jpg" width="35" height="35" alt="...">
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
											<li class="media"><img class="media-object"
													src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user10.jpg" width="35" height="35"
													alt="...">
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
															<input type="checkbox" id="switch-1"
																class="mdl-switch__input" checked>
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
															<input type="checkbox" id="switch-7"
																class="mdl-switch__input" checked>
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
															<input type="checkbox" id="switch-2"
																class="mdl-switch__input" checked>
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
															<input type="checkbox" id="switch-3"
																class="mdl-switch__input" checked>
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
															<input type="checkbox" id="switch-4"
																class="mdl-switch__input" checked>
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
															<input type="checkbox" id="switch-5"
																class="mdl-switch__input" checked>
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
															<input type="checkbox" id="switch-6"
																class="mdl-switch__input" checked>
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
	</div>
	<!-- start js include path -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery/jquery.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/popper/popper.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- Common js-->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/app.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/layout.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/staff_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:54 GMT -->
</html>