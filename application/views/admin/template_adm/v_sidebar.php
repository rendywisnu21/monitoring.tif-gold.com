		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('admin/C_dashboard') ?>" class="brand-link">
				<img src="<?= base_url() ?>assets/dist/img/cigar.png" alt="Gambar Rokok" class="brand-image"
					style="width: 30px;">
				<span class="brand-text">Cerutu</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url() ?>assets/dist/img/users.png" class="img-circle elevation-2"
							alt="Gambar Pengguna">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?=$_SESSION['nama_admin']?></a>
					</div>
				</div>

				<!-- untuk membaca link  -->
				<?php $link = $this->uri->segment(2); ?>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class 
						with font-awesome or any other icon font library -->
						<li class="nav-header">BERANDA</li>
						<li class="nav-item">
							<a href="<?=base_url('admin/C_dashboard')?>"
								class="nav-link <?php if($link === 'C_dashboard'){echo 'active';} ?> ">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Beranda</p>
							</a>
						</li>
						<li class="nav-header">MENU</li>
						<?php if($_SESSION['role'] == 1){ //jika status superadmin = 1 ?>
						<li class="nav-item">
							<a href="<?= base_url('admin/C_admin') ?>" class="nav-link 
								<?php if($link === 'C_admin'){echo 'active';} ?>">
								<i class="fas fa-user nav-icon"></i>
								<p>Admin</p>
							</a>
						</li>
						<?php } ?>
						<li class="nav-item">
							<a href="<?= base_url('admin/C_informasi') ?>" class="nav-link 
							<?php if($link === 'C_informasi'){echo 'active';} ?>">
								<i class="fas fa-file-alt nav-icon"></i>
								<p>Informasi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/C_riwayat') ?>" class="nav-link 
								<?php if($link === 'C_riwayat'){echo 'active';} ?>">
								<i class="fas fa-history nav-icon"></i>
								<p>Riwayat</p>
							</a>
						</li>
						</li>
				</nav>
			</div>
		</aside>
