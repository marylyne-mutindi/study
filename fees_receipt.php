<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


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
			?>>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Student Invoice</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								<li><a class="parent-item" href="#">Fees</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Invoice</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="white-box">
								<h3><b>INVOICE</b> <span class="pull-right">#345766</span></h3>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="pull-left">
											<address>
												<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/invoice_logo.png" alt="logo"
													class="logo-default" />
												<p class="text-muted m-l-5">
													Aditya University, <br> Opp. Town Hall, <br>
													Sardar Patel Road, <br> Ahmedabad - 380015
												</p>
											</address>
										</div>
										<div class="pull-right text-right">
											<address>
												<p class="addr-font-h3">To,</p>
												<p class="font-bold addr-font-h4">Jayesh Patel</p>
												<p class="text-muted m-l-30">
													207, Prem Sagar Appt., <br> Near Income Tax Office, <br>
													Ashram Road, <br> Ahmedabad - 380057
												</p>
												<p class="m-t-30">
													<b>Invoice Date :</b> <i class="fa fa-calendar"></i> 14th
													July 2017
												</p>
												<p>
													<b>Course :</b> Engineering
												</p>
											</address>
										</div>
									</div>
									<div class="col-md-12">
										<div class="table-responsive m-t-40">
											<table class="table table-hover">
												<thead>
													<tr>
														<th class="text-center">#</th>
														<th class="text-right">Fees Type</th>
														<th class="text-right">Frequency</th>
														<th class="text-right">Date</th>
														<th class="text-right">Invoice number</th>
														<th class="text-right">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">1</td>
														<td class="text-right">Annual Fees</td>
														<td class="text-right">Yearly</td>
														<td class="text-right">2016-11-19</td>
														<td class="text-right">#IN-345609865</td>
														<td class="text-right">$100</td>
													</tr>
													<tr>
														<td class="text-center">2</td>
														<td class="text-right">Tuition Fees</td>
														<td class="text-right">Monthly</td>
														<td class="text-right">2016-11-19</td>
														<td class="text-right">#IN-345604565</td>
														<td class="text-right">$50</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-md-12">
										<div class="pull-right m-t-30 text-right">
											<p>Sub - Total amount: $150</p>
											<p>Discount : $10 </p>
											<p>Tax (10%) : $14 </p>
											<hr>
											<h3><b>Total :</b> $164</h3>
										</div>
										<div class="clearfix"></div>
										<hr>
										<div class="text-right">
											<button class="btn btn-danger" type="submit"> Proceed to payment </button>
											<button onclick="javascript:window.print();"
												class="btn btn-default btn-outline" type="button"> <span><i
														class="fa fa-print"></i> Print</span> </button>
										</div>
									</div>
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


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/fees_receipt.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:54 GMT -->
</html>