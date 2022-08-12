<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?= base_url() ?>assets/dist/img/cigar.png" alt="Gambar Cerutu"
				height="60" width="60">
			<!-- Ganti Icon!! -->
		</div>

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
					<?php if(!isset($_SESSION['auth'])){ ?>
					<a href="<?= base_url('admin/C_auth') ?>" class="btn btn-primary" type="button">
						Masuk sebagai Admin
					</a>
					<?php } else { ?>
					<a href="<?= base_url('admin/C_auth/logout') ?>" class="btn btn-danger" type="button">
						Keluar
					</a>
					<?php } ?>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->
