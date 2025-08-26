
<!doctype html>
<html lang="en" class="semi-dark">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{url('user-admin/assets/images/favicon-32x32.png')}}" type="image/png" />
	<link href="{{url('user-admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('user-admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('user-admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{url('user-admin/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('user-admin/assets/js/pace.min.js')}}"></script>
	<link href="{{url('user-admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('user-admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{url('user-admin/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{url('user-admin/assets/css/icons.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('user-admin/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{url('user-admin/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{url('user-admin/assets/css/header-colors.css')}}" />
	<title>User Admin | Digi Card</title>
</head>

<body>
	<div class="wrapper">
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Digi Card</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<ul class="metismenu" id="menu">
			
				<li>
					<a href="{{url('user-admin/dashboard')}}">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
			</ul>
		</div>
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					
					<div class="top-menu ms-auto"></div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<a class="dropdown-item d-flex align-items-center" href="javascript:;">
									<i class="bx bx-user fs-5"></i><span>Profile</span>
								</a>
							</li>
							
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li>
								<a class="dropdown-item d-flex align-items-center" href="javascript:;">
									<i class="bx bx-log-out-circle"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>