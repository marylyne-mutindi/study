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
	<!-- bootstrap -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="https://www.einfosoft.com/templates/admin/smart/source/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
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
						<?php
						require_once('includes/manage.php');
					?>
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
								<div class="page-title">Inbox</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Email</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Inbox</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body no-padding height-9">
									<div class="inbox">
										<div class="row">
											<div class="col-md-3">
												<div class="inbox-sidebar">
													<div class="d-grid gap-2">
														<a href="email_compose.html" class="btn red" type="button"><i
																class="fa fa-edit"></i>Compose</a>
													</div>
													<ul class="inbox-nav inbox-divider">
														<li class="active"><a href="email_inbox.html"><i
																	class="fa fa-inbox"></i> Inbox <span
																	class="label mail-counter-style label-danger pull-right">2</span></a>
														</li>
														<li><a href="#"><i class="fa fa-envelope"></i> Sent Mail</a>
														</li>
														<li><a href="#"><i class="fa fa-briefcase"></i> Important</a>
														</li>
														<li><a href="#"><i class="fa fa-star"></i> Starred </a>
														</li>
														<li><a href="#"><i class=" fa fa-external-link"></i> Drafts
																<span
																	class="label mail-counter-style label-info pull-right">30</span></a>
														</li>
														<li><a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
														</li>
													</ul>
													<ul class="nav nav-pills nav-stacked labels-info inbox-divider">
														<li>
															<h4>Labels</h4>
														</li>
														<li><a href="#"><i class="fa fa-tags"></i> Work</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-tags"></i> Design
															</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-tags "></i> Family
															</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-tags "></i> Friends
															</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-tags "></i> Office
															</a>
														</li>
													</ul>
													<ul class="nav nav-pills nav-stacked labels-info inbox-divider ">
														<li>
															<h4>Buddy online</h4>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-comments text-success"></i> Jhone Doe
																<span class="online-status">I do not think</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-comments text-danger"></i> Sumon
																<span class="online-status">Busy with coding</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-comments text-muted "></i> Anjelina
																Joli
																<span class="online-status">I out of control</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-comments text-muted "></i> Jonathan
																Smith
																<span class="online-status">I am not here</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class=" fa fa-comments text-muted "></i> Tawseef
																<span class="online-status">I do not think</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-md-9">
												<div class="inbox-body">
													<div class="inbox-header">
														<div class="mail-option no-pad-left">
															<div class="btn-group group-padding">
																<a class="btn mini tooltips" href="#"
																	data-bs-toggle="dropdown" data-placement="top"
																	data-original-title="Refresh">
																	<i class=" fa fa-refresh fa-lg"></i>
																</a>
																<a class="btn mini tooltips" href="#"
																	data-original-title="Archive"> <i
																		class=" fa fa-archive fa-lg"></i>
																</a>
																<a class="btn mini tooltips" href="#"
																	data-original-title="Trash"> <i
																		class=" fa fa-trash-o fa-lg"></i>
																</a>
															</div>
															<div class="btn-group res-email-btn">
																<a class="btn mini tooltips" href="#"
																	data-original-title="Folders"> <i
																		class=" fa fa-folder fa-lg"></i>
																</a>
																<a class="btn mini tooltips" href="#"
																	data-original-title="Tag"> <i
																		class=" fa fa-tag fa-lg"></i>
																</a>
															</div>
															<div class="btn-group hidden-phone">
																<a class="btn mini blue-bgcolor" href="#"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	More
																	<i class="fa fa-angle-down downcolor"></i>
																</a>
																<ul class="dropdown-menu">
																	<li><a href="#"><i class="fa fa-pencil"></i> Mark as
																			Read</a>
																	</li>
																	<li><a href="#"><i class="fa fa-ban"></i>
																			Spam</a>
																	</li>
																	<li class="divider"></li>
																	<li><a href="#"><i class="fa fa-trash-o"></i>
																			Delete</a>
																	</li>
																</ul>
															</div>
															<div class="btn-group pull-right btn-prev-next">
																<button class="btn btn-sm btn-primary" type="button">
																	<i class="fa fa-chevron-left"></i>
																</button>
																<button class="btn btn-sm btn-primary" type="button">
																	<i class="fa fa-chevron-right"></i>
																</button>
															</div>
															<!-- 				                                            <div class="todo-check pull-left m-l-20"> -->
															<!-- 			                                                    <input type="checkbox" value="None" id="todo-check30"> -->
															<!-- 			                                                    <label for="todo-check30"></label> -->
															<!-- 			                                                </div> -->
														</div>
													</div>
													<div class="inbox-body no-pad table-responsive">
														<table class="table table-inbox table-hover">
															<tbody>
																<tr class="unread">
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check1">
																			<label for="todo-check1"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user8.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message  dont-show">Leena Smith</td>
																	<td class="view-message "><a
																			href="email_compose.html">Jatin I found you
																			on LinkedIn.</a></td>
																	<td class="view-message  inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message  text-right">10:27 AM</td>
																</tr>
																<tr class="unread ">
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check2">
																			<label for="todo-check2"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Sarah Smith</td>
																	<td class="view-message"><a
																			href="email_compose.html">Fwd: Important
																			Notice Regarding Your Domain Name</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">Nov 15</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check3">
																			<label for="todo-check3"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<span class="bg-success">R</span>
																		</a>
																	</td>
																	<td class="view-message dont-show">Rakesh maheta
																	</td>
																	<td class="view-message"><a
																			href="email_compose.html">pls take a print
																			of attachments</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">may 11</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check4">
																			<label for="todo-check4"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Kehn Anderson
																	</td>
																	<td class="view-message"><a
																			href="email_compose.html">Apply for Ortho
																			Surgeon</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">may 01</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check5">
																			<label for="todo-check5"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<span class="bg-primary">X</span>
																		</a>
																	</td>
																	<td class="view-message dont-show">XYZ bank <span
																			class="label mail-label pull-right">Office</span>
																	</td>
																	<td class="view-message"><a
																			href="email_compose.html">Transaction Alert
																			from XYZ Bank</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">May 23</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check6">
																			<label for="todo-check6"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user2.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Sarah Smith</td>
																	<td class="view-message"><a
																			href="email_compose.html">Find web design
																			and develomnent work</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">june 24</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check7">
																			<label for="todo-check7"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<span class="bg-warning">V</span>
																		</a>
																	</td>
																	<td class="view-message dont-show">Viral Shah</td>
																	<td class="view-message"><a
																			href="email_compose.html">A big thank for
																			the support</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">Jan 09</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check8">
																			<label for="todo-check8"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user6.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Jennifer Maklen
																		<span
																			class="label mail-label pull-right">friends</span>
																	</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">(no subject)</a>
																	</td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">Mar 04</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check9">
																			<label for="todo-check9"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user7.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Vlad Cardella
																	</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">Problem List</a>
																	</td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">Mar 13</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check10">
																			<label for="todo-check10"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user1.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Rajesh <span
																			class="label mail-label pull-right">family</span>
																	</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">you have 1
																			notification</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">Mar 24</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check11">
																			<label for="todo-check11"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Kehn Anderson
																	</td>
																	<td class="view-message"><a
																			href="email_compose.html">Presenting WAF in
																			Munich web week</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">March 09</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check12">
																			<label for="todo-check12"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user10.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="dont-show">Anjelina Cardella</td>
																	<td class="view-message"><a
																			href="email_compose.html">Request for leave
																			application</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">july 10</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check13">
																			<label for="todo-check13"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">John Deo</td>
																	<td class="view-message"><a
																			href="email_compose.html">Web framework
																			presentation file</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">jan 18</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check14">
																			<label for="todo-check14"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user8.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="dont-show">Leena Smith</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">Wedding Reception
																			Invitation</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">feb 14</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check15">
																			<label for="todo-check15"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Kehn Anderson
																	</td>
																	<td class="view-message"><a
																			href="email_compose.html">Your Interview
																			schedule....</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">feb 17</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check16">
																			<label for="todo-check16"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<span class="blue-bgcolor">F</span>
																		</a>
																	</td>
																	<td class="view-message dont-show">Facebook</td>
																	<td class="view-message"><a
																			href="email_compose.html">Ritu jani tagged
																			you in a post on Facebook</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">mar 14</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check17">
																			<label for="todo-check17"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">John Deo</td>
																	<td class="view-message"><a
																			href="email_compose.html">And you thought
																			you recycled everything you
																			could !</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">Aug 10</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check18">
																			<label for="todo-check18"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user5.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Jacob Ryan</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">Presenting WAF in
																			Munich web week</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">Aug 14</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check19">
																			<label for="todo-check19"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user6.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Jennifer Maklen
																	</td>
																	<td class="view-message"><a
																			href="email_compose.html">Apply for web
																			developer</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">June 11</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check20">
																			<label for="todo-check20"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user9.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Jeff Adem</td>
																	<td class="view-message"><a
																			href="email_compose.html">pls take a print
																			of attachments</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">Aug 15</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check21">
																			<label for="todo-check21"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user10.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Anjelina Cardella
																	</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">Find web design
																			and develomnent
																			work</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">April 19</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check22">
																			<label for="todo-check22"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user7.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Vlad Cardella
																	</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">Transaction Alert
																			from XYZ Bank</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">April 14</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check23">
																			<label for="todo-check23"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user8.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Leena Smith</td>
																	<td class="view-message"><a
																			href="email_compose.html">Jatin I found you
																			on LinkedIn.</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">mar 26</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check24">
																			<label for="todo-check24"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star inbox-started"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user3.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">John Deo</td>
																	<td class="view-message"><a
																			href="email_compose.html">You have 1 new
																			message</a></td>
																	<td class="view-message inbox-small-cells"></td>
																	<td class="view-message text-right">Aug 10</td>
																</tr>
																<tr>
																	<td class="inbox-small-cells">
																		<div class="todo-check pull-left">
																			<input type="checkbox" value="None"
																				id="todo-check25">
																			<label for="todo-check25"></label>
																		</div>
																	</td>
																	<td class="inbox-small-cells"><i
																			class="fa fa-star-o"></i>
																	</td>
																	<td>
																		<a href="#" class="avatar">
																			<img src="https://www.einfosoft.com/templates/admin/smart/source/assets/img/user/user4.jpg"
																				alt="">
																		</a>
																	</td>
																	<td class="view-message dont-show">Kehn Anderson
																	</td>
																	<td class="view-message view-message"><a
																			href="email_compose.html">Merry
																			Christmas</a></td>
																	<td class="view-message inbox-small-cells"><i
																			class="fa fa-paperclip"></i>
																	</td>
																	<td class="view-message text-right">dec 14</td>
																</tr>
															</tbody>
														</table>
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
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/feather/feather.min.js"></script>
	<script src="https://www.einfosoft.com/templates/admin/smart/source/assets/plugins/popper/popper.js"></script>
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


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/email_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:34:54 GMT -->
</html>