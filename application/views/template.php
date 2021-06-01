<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sekud | Dashboard</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/AdminLTE/dist/css/adminlte.min.css">
	<!-- datatables -->
	<link rel="stylesheet"
		href="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<!-- <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script> -->
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?php echo base_url() ?>assets/AdminLTE/index3.html" class="brand-link">
				<img src="<?php echo base_url() ?>assets/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Sekud</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url() ?>assets/AdminLTE/dist/img/user2-160x160.jpg"
							class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?= ucfirst($this->fungsi->user_login()->name) ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-header">MAIN NAVIGATION</li>
						<li class="nav-item">
							<a href="<?= base_url('dashboard') ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt" style="font-size:25px;"></i>
								&nbsp;&nbsp;<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-calendar-alt" style="font-size:25px;"></i>
								&nbsp;&nbsp;<p>
									Event
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('tryout') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Tryout Event</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-cubes" style="font-size:25px;"></i>
								&nbsp;&nbsp;<p>
									Test 
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('package') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Tes Package</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-question-circle" style="font-size:25px;"></i>
								&nbsp;&nbsp;<p>
									Test Question
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url() ?>assets/AdminLTE/index.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v1</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url() ?>assets/AdminLTE/index2.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v2</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url() ?>assets/AdminLTE/index3.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v3</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('school') ?>" class="nav-link">
								<i class="nav-icon fas fa-school" style="font-size:25px;"></i>
								&nbsp;&nbsp;<p>
									Schools
								</p>
							</a>
						</li>
						<li class="nav-header">SETTING</li>
						<?php if ($this->fungsi->user_login()->type == 99) { ?>
						<li class="nav-item">
							<a href="<?php echo base_url('user') ?>" class="nav-link">
								<i class="nav-icon far fa-user" style="font-size:25px;"></i>
								&nbsp;&nbsp;<p>
									Users
								</p>
							</a>
						</li>
						<?php } ?>

						<li class="nav-item">
							<a href="<?php echo base_url('auth/logout') ?>" class="nav-link">
								<i class="fas fa-sign-out-alt" style="font-size:25px;"></i>
								&nbsp;&nbsp;<p>Logout</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<!-- jQuery -->
		<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
		<!-- datatables -->
		<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
		</script>
		<script
			src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js">
		</script>
		<script
			src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
		</script>


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?= $contents ?>
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
			</div>
			<strong>Copyright &copy; 2020-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->


	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/demo.js"></script>

	<script>
		$(document).ready(function () {
			$('#table1').DataTable()
		})

	</script>

</body>

</html>
