<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="assets/plugins/highcharts/css/highcharts-white.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">

	
	
	<title>Dashboard Jaksa Agung</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">DASJA</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-menu'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{route('dashboard')}}">
						<div class="parent-icon"><i class="bx bx-home"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li class="menu-label">Data Bidang</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-unite'></i>
						</div>
						<div class="menu-title">Pembinaan</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Kepegawaian</a>
						</li>
						<li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Absensi</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Kinerja</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Realisasi Anggaran</a>
						</li>
						<li> <a href="ecommerce-add-new-products.html"><i class="bx bx-right-arrow-alt"></i>PNBP</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>BMN</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>PPA</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>Data Aplikasi</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-data'></i>
						</div>
						<div class="menu-title">Intelijen</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Mafia Tanah</a>
						</li>
						<li> <a href="component-accordions.html"><i class="bx bx-right-arrow-alt"></i>DPO</a>
						</li>
						<li> <a href="component-badges.html"><i class="bx bx-right-arrow-alt"></i>SP4N</a>
						</li>
						<li> <a href="component-badges.html"><i class="bx bx-right-arrow-alt"></i>Dokumen Rapat</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-data"></i>
						</div>
						<div class="menu-title">Pidum</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>CMS Pidum</a>
						</li>
						<li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>Register Perakara</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="bx bx-data"></i>
						</div>
						<div class="menu-title">Pidsus</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>CMS Pidsus</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-data'></i>
						</div>
						<div class="menu-title">Datun</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>CMS Datun</a>
						</li>
						<li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>HaloJPN</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-network-chart"></i>
						</div>
						<div class="menu-title">Pidmil</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>Perkara Koneksitas</a>
						</li>
					</ul>
				</li>


				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-check-shield"></i>
						</div>
						<div class="menu-title">Pengawasan</div>
					</a>
					<ul>
						<li> <a href="authentication-signin.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Laporan Pengaduan</a>
						</li>
						<li> <a href="authentication-signup.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Kode Etik</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-book-alt"></i>
						</div>
						<div class="menu-title">Badiklat</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Program Diklat</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Pegawai Mengikuti Diklat</a>
						</li>
					</ul>
				</li>

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							
							<li class="nav-item dropdown dropdown-large">
								
								

									<div class="header-notifications-list">

									</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/pakJA.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Prof. Dr. Burhanuddin</p>
								<p class="designattion mb-0">Jaksa Agung</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-lock"></i><span>Ganti Password</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-book'></i><span>Panduan</span></a>
							</li>

							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->

@yield('konten')

<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
	<p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
</div>
<div class="switcher-body">
	<div class="d-flex align-items-center">
		<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
		<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
	</div>
	<hr/>
	<p class="mb-0">Gaussian Texture</p>
	<hr>
	<ul class="switcher">
		<li id="theme1"></li>
		<li id="theme2"></li>
		<li id="theme3"></li>
		<li id="theme4"></li>
		<li id="theme5"></li>
		<li id="theme6"></li>
	</ul>
	<hr>
	<p class="mb-0">Gradient Background</p>
	<hr>
	<ul class="switcher">
		<li id="theme7"></li>
		<li id="theme8"></li>
		<li id="theme9"></li>
		<li id="theme10"></li>
		<li id="theme11"></li>
		<li id="theme12"></li>
		<li id="theme13"></li>
		<li id="theme14"></li>
		<li id="theme15"></li>
	  </ul>
</div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
	$('#Transaction-History').DataTable({
		lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
	});
  } );
</script>
<script src="assets/js/index.js"></script>
<!--app JS-->
<script src="assets/js/app.js"></script>
<script>
new PerfectScrollbar('.product-list');
new PerfectScrollbar('.customers-list');
</script>
<script src="assets/plugins/highcharts/js/highcharts.js"></script>
<script type="text/javascript" src="assets/plugins/peta/jquery-1.11.3.min"></script>
<script type="text/javascript" src="assets/plugins/peta/dist/jquery.vmap.js"></script>
<script type="text/javascript" src="assets/plugins/peta/dist/maps/jquery.vmap.indonesia.js" charset="utf-8"></script>
<script>
jQuery(document).ready(function () {
  jQuery('#vmap').vectorMap({
	map: 'indonesia_id',
	backgroundColor: 'none',
	enableZoom: true,
	showTooltip: true,
	selectedColor: null,
	onRegionClick: function(event, code, region)
	{
		var message = 'You clicked "'
		+ region 
		+ '" which has the code: '
		+ code.toUpperCase();
		alert(message);
	}
  });
});
</script>
</body>

</html>