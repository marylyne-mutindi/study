<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/add_fees_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:54 GMT -->
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
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/flatpicker/css/flatpickr.min.css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
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
									<a class="ukrainian"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/ua.png" alt=""> ????????????????????</a>
								</li>
								<li>
									<a class="english"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/gb.png" alt=""> English</a>
								</li>
								<li>
									<a class="espana"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/es.png" alt=""> Espa??a</a>
								</li>
								<li>
									<a class="russian"><img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/flags/ru.png" alt=""> ??????????????</a>
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
						<?php
						require_once ('includes/notification.php');
						?>
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
								<div class="page-title">Add Fees</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Fees</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Fees</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Fees</header>
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
								<div class="card-body" id="bar-parent">
									<form class="form-horizontal">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Roll No
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="rollno" data-required="1"
														placeholder="enter roll number"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Student Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="stdName" data-required="1"
														placeholder="enter student name"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Department/Class
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-select input-height" name="select">
														<option value="">Select...</option>
														<option value="Category 1">Mathematics</option>
														<option value="Category 2">Engineering</option>
														<option value="Category 3">Science</option>
														<option value="Category 3">M.B.A.</option>
														<option value="Category 3">Music</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Fees Type
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-select input-height" name="selectType">
														<option value="">Select...</option>
														<option value="Category 1">Annual</option>
														<option value="Category 2">Tuition</option>
														<option value="Category 3">Transport</option>
														<option value="Category 3">Exam</option>
														<option value="Category 3">Library</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Payment Duration
												</label>
												<div class="col-md-5">
													<div class="form-check">
														<label class="form-check-label">
															<input type="radio" class="form-check-input"
																name="optionsRadios" id="optionsRadios1" value="option1"
																checked>
															Monthly
														</label>
													</div>
													<div class="form-check">
														<label class="form-check-label">
															<input type="radio" class="form-check-input"
																name="optionsRadios" id="optionsRadios2"
																value="option2">
															Session
														</label>
													</div>
													<div class="form-check">
														<label class="form-check-label">
															<input type="radio" class="form-check-input"
																name="optionsRadios" id="optionsRadios3"
																value="option2">
															Yearly
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Amount
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="number" type="text" placeholder="enter amount"
														class="form-control input-height" /> </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Collection Date
												</label>
												<div class="col-md-5">
													<div class="input-append date">
														<div id="dateIcon" class="input-group datePicker">
															<input class="formDatePicker form-control" type="text"
																placeholder="Select Date.." data-input>
															<span class="dateBtn">
																<a class="input-button" title="toggle" data-toggle>
																	<i class="icon-calendar"></i>
																</a>
																<a class="input-button" title="clear" data-clear>
																	<i class="icon-close"></i>
																</a>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Payment Method
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-select input-height" name="select">
														<option value="">Select...</option>
														<option value="Category 1">Cash</option>
														<option value="Category 2">Cheque</option>
														<option value="Category 3">Credit Card</option>
														<option value="Category 4">Debit Card</option>
														<option value="Category 5">Netbanking</option>
														<option value="Category 6">Other</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Payment Reference Number
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="number" type="text"
														placeholder="enter reference amount"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Payment Status
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-select input-height" name="select">
														<option value="">Select...</option>
														<option value="Category 1">Paid</option>
														<option value="Category 2">Unpaid</option>
														<option value="Category 3">Pending</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Payment Details
												</label>
												<div class="col-md-5">
													<textarea name="details" placeholder="payment details"
														class="form-control-textarea" rows="5"></textarea>
												</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Submit</button>
													<button type="button" class="btn btn-default">Cancel</button>
												</div>
											</div>
										</div>
									</form>
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
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
	<!-- bootstrap -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/pages/date-time/date-time.init.js"></script>
	<!-- Common js-->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/app.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/pages/validation/form-validation.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/layout.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/add_fees_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:54 GMT -->
</html>