<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.adminkit.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Aug 2021 14:37:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link rel="shortcut icon" href="<?= base_url('assets') ?>/img/icons/icon-48x48.png" />

	<link rel="canonical" href="pages-blank.html" />

	<title>Admin Panel | Yakin Jek</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="<?= base_url('assets') ?>/css/light.css" rel="stylesheet">
	<!-- <link href="css/dark.css" rel="stylesheet"> -->
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index-2.html">
					<span class="sidebar-brand-text align-middle">
						Yakin Jek
						<sup><small class="badge bg-primary text-uppercase">Pro</small></sup>
					</span>
					<svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
						<path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
						<path d="M20 12L12 16L4 12"></path>
						<path d="M20 16L12 20L4 16"></path>
					</svg>
				</a>

				<div class="sidebar-user">
					<div class="d-flex justify-content-center">
						<div class="flex-shrink-0">
							<img src="<?= base_url('assets') ?>/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
						</div>
						<div class="flex-grow-1 ps-2">
							<a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
								Charles Hall
							</a>
							<div class="dropdown-menu dropdown-menu-start">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>

							<div class="sidebar-user-subtitle">Designer</div>
						</div>
					</div>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menus
					</li>
					<li class="sidebar-item">
						<a href="<?= site_url()?>" class="sidebar-link">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboards</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a href="<?= site_url('/page/transaksi')?>" class="sidebar-link">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Transaksi</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a href="#finance" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Finance</span>
						</a>
						<ul id="finance" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Wallet</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Manual Topup</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Manual Withdraw</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a href="#drivers" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Drivers</span>
						</a>
						<ul id="drivers" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="<?= site_url('/page/drivers')?>">Drivers</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Reg. Driver</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a href="#users" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
						</a>
						<ul id="users" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="<?= site_url('/page/customers')?>">Users</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Verifikasi Akun</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a href="#merchants" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Merchant</span>
						</a>
						<ul id="merchants" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Kategori Merchant</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="<?= site_url('/page/merchants')?>">Merchants</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Reg. Merchants</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="calendar.html">
							<i class="align-middle" data-feather="tag"></i> <span class="align-middle">Layanan</span>
						</a>
					</li>

					<li class="sidebar-header">
						Utility
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#banners" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Banners</span>
						</a>
						<ul id="banners" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Home</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Food</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link collapsed">
							<i class="align-middle" data-feather="copy"></i> <span class="align-middle">News</span>
							<!-- <span class="sidebar-badge badge bg-light">1.500+</span> -->
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link collapsed">
							<i class="align-middle" data-feather="send"></i> <span class="align-middle">App Notifications</span>

						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link collapsed">
							<i class="align-middle" data-feather="settings"></i> <span class="align-middle">App Settings</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>

				<!-- TO SHOW MEGA MENU, CHANGE CLASS FROM d-none to d-block -->
				<ul class="navbar-nav d-none">
					<li class="nav-item px-2 dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mega Menu
						</a>
						<div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="servicesDropdown">
							<div class="d-md-flex align-items-start justify-content-start">
								<div class="dropdown-mega-list">
									<div class="dropdown-header">UI Elements</div>
									<a class="dropdown-item" href="#">Alerts</a>
									<a class="dropdown-item" href="#">Buttons</a>
									<a class="dropdown-item" href="#">Cards</a>
									<a class="dropdown-item" href="#">Carousel</a>
									<a class="dropdown-item" href="#">General</a>
									<a class="dropdown-item" href="#">Grid</a>
									<a class="dropdown-item" href="#">Modals</a>
									<a class="dropdown-item" href="#">Tabs</a>
									<a class="dropdown-item" href="#">Typography</a>
								</div>
								<div class="dropdown-mega-list">
									<div class="dropdown-header">Forms</div>
									<a class="dropdown-item" href="#">Layouts</a>
									<a class="dropdown-item" href="#">Basic Inputs</a>
									<a class="dropdown-item" href="#">Input Groups</a>
									<a class="dropdown-item" href="#">Advanced Inputs</a>
									<a class="dropdown-item" href="#">Editors</a>
									<a class="dropdown-item" href="#">Validation</a>
									<a class="dropdown-item" href="#">Wizard</a>
								</div>
								<div class="dropdown-mega-list">
									<div class="dropdown-header">Tables</div>
									<a class="dropdown-item" href="#">Basic Tables</a>
									<a class="dropdown-item" href="#">Responsive Table</a>
									<a class="dropdown-item" href="#">Table with Buttons</a>
									<a class="dropdown-item" href="#">Column Search</a>
									<a class="dropdown-item" href="#">Muulti Selection</a>
									<a class="dropdown-item" href="#">Ajax Sourced Data</a>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item d-none">
							<a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
								<div class="position-relative">
									<i class="align-middle" data-feather="maximize"></i>
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
								<img src="<?= base_url('assets') ?>/img/avatars/avatar.jpg" class="avatar img-fluid rounded" alt="Charles Hall" />
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<?= $page ?>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="index-2.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>	
	<script src="<?= base_url('assets') ?>/js/app.js"></script>
	<script src="<?= base_url('assets') ?>/js/datatables.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
	</script>
</body>

</html>