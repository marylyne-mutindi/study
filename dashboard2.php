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
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
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
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="row">
						<div class="col-xl-5">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h4 class="info-box-title">Total Students</h4>
													</div>
													<div class="col-auto">
														<div class="l-bg-green info-icon">
															<i class="fa fa-users pull-left col-orange font-30"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3 info-box-title">4,586</h1>
												<div class="mb-0">
													<span class="text-success m-r-10"><i
															class="material-icons col-green align-middle">trending_up</i>
														10.32%
													</span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h4 class="info-box-title">Total Course</h4>
													</div>
													<div class="col-auto">
														<div class="col-indigo info-icon">
															<i class="fa fa-book pull-left card-icon font-30"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3 info-box-title">103</h1>
												<div class="mb-0">
													<span class="text-danger m-r-10"><i
															class="material-icons col-red align-middle">trending_down</i>
														-10.64%
													</span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h4 class="info-box-title">New Students</h4>
													</div>
													<div class="col-auto">
														<div class="col-teal info-icon">
															<i class="fa fa-user pull-left card-icon font-30"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3 info-box-title">323</h1>
												<div class="mb-0">
													<span class="text-success m-r-10"><i
															class="material-icons col-green align-middle">trending_up</i>
														21..19%
													</span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h4 class="info-box-title">Visitors</h4>
													</div>
													<div class="col-auto">
														<div class="col-pink info-icon">
															<i class="fa fa-coffee pull-left card-icon font-30"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3 info-box-title">2,352</h1>
												<div class="mb-0">
													<span class="text-danger m-r-10"><i
															class="material-icons col-red align-middle">trending_down</i>
														-4.27%
													</span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-7">
							<div class="card card-box">
								<div class="card-head">
									<header>Subject Marks Chart</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<canvas id="bar-chart" height="300"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget -->
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Sport Student List</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row table-padding">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="add_student.html" id="addRow" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
												<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
													data-bs-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</a>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table
											class="table table-striped table-bordered table-hover table-checkable order-column"
											id="example4">
											<thead>
												<tr>
													<th>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="group-checkable"
																data-set="#sample_1 .checkboxes" />
															<span></span>
														</label>
													</th>
													<th class="center">Student Name</th>
													<th class="center">Assigned Coach</th>
													<th class="center">Date</th>
													<th class="center">Time</th>
													<th class="center">Actions </th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Jayesh Patel </td>
													<td class="center">
														<a href="mailto:shuxer@gmail.com"> Rajesh </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 10:45 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-warning dropdown-toggle center no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu pull-left" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Pooja Patel </td>
													<td class="center">
														<a href="mailto:looper90@gmail.com"> Sarah Smith </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 10:55 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-info dropdown-toggle no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Pankaj Singh </td>
													<td class="center">
														<a href="mailto:userwow@yahoo.com"> Rajesh </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:15 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-success dropdown-toggle no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Raj Malhotra </td>
													<td class="center">
														<a href="mailto:doctormail@gmail.com"> Megha Trivedi </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:25 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-primary dropdown-toggle no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Sneha Pandya </td>
													<td class="center">
														<a href="mailto:doctormail@gmail.com"> Sarah Smith </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:35 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-warning dropdown-toggle no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX ">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Sameer Jain </td>
													<td class="center">
														<a href="mailto:doctormail@gmail.com"> Megha Trivedi </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:45 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-danger dropdown-toggle no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Sarah Smith </td>
													<td class="center">
														<a href="mailto:userwow@yahoo.com"> Jayesh Patel </a>
													</td>
													<td class="center"> 25/01/2019 </td>
													<td class="center"> 12:10 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-success dropdown-toggle no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Pankaj Singh </td>
													<td class="center">
														<a href="mailto:userwow@yahoo.com"> Rajesh </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:15 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-success dropdown-toggle no-margin"
																type="button" data-bs-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Professors List</header>
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
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 25% High
										then last month</small> Bronze medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>35.80%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>45.20%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>5.50%</b>
									</div>
								</div>
								<div id="sparkline13"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-danger"><i
											class="fa fa-sort-desc"></i> 30% Low then
										last month</small>Silver Medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>20.60%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>65.30%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.90%</b>
									</div>
								</div>
								<div id="sparkline15"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 20% High
										then last month</small>Gold Medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>38.40%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>52.49%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.70%</b>
									</div>
								</div>
								<div id="sparkline14"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Salary Status</header>
								</div>
								<div class="card-body ">
									<div class="mdl-tabs mdl-js-tabs">
										<div class="mdl-tabs__tab-bar tab-left-side">
											<a href="#tab4-panel"
												class="mdl-tabs__tab tabs_three is-active">Professors</a>
											<a href="#tab5-panel" class="mdl-tabs__tab tabs_three">Librarian</a>
											<a href="#tab6-panel" class="mdl-tabs__tab tabs_three">Other</a>
										</div>
										<div class="mdl-tabs__panel is-active p-t-20" id="tab4-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user6.jpg" alt="">
															</td>
															<td>John Deo</td>
															<td>05-01-2017</td>
															<td><span class="label label-danger">Unpaid</span></td>
															<td>1200$</td>
															<td>#7234486</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg" alt="">
															</td>
															<td>Eugine Turner</td>
															<td>04-01-2017</td>
															<td><span class="label label-success">Paid</span></td>
															<td>1400$</td>
															<td>#7234417</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>1100$</td>
															<td>#7234454</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<button class="btn btn-primary btn-round btn-sm">Load
													More</button>
											</div>
										</div>
										<div class="mdl-tabs__panel p-t-20" id="tab5-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg" alt="">
															</td>
															<td>Eugine Turner</td>
															<td>04-01-2017</td>
															<td><span class="label label-success">Paid</span></td>
															<td>700$</td>
															<td>#7234417</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>500$</td>
															<td>#7234454</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg" alt="">
															</td>
															<td>Jayesh Parmar</td>
															<td>03-01-2017</td>
															<td><span class="label label-danger">Unpaid</span></td>
															<td>400$</td>
															<td>#72544</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<button class="btn btn-outline-primary btn-round btn-sm">Load
													More</button>
											</div>
										</div>
										<div class="mdl-tabs__panel p-t-20" id="tab6-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user8.jpg" alt="">
															</td>
															<td>Jane Elliott</td>
															<td>06-01-2017</td>
															<td><span class="label label-primary">Paid</span></td>
															<td>300$</td>
															<td>#7234421</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user7.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>450$</td>
															<td>#723344</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user9.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-primary">Paid</span></td>
															<td>550$</td>
															<td>#7235454</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<button class="btn btn-outline-primary btn-round btn-sm">Load
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
	<!-- counterup -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/counterup/jquery.counterup.min.js"></script>
	<!-- Common js-->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/app.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/layout.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/chart-js/Chart.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/chart-js/utils.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/pages/chart/chartjs/home-data2.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/dashboard2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:50 GMT -->
</html>