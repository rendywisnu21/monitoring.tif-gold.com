		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url() ?>" class="brand-link">
				<!-- <a href="https://www.flaticon.com/free-icons/cigar" title="cigar icons">Cigar icons created by Freepik - Flaticon</a> -->
				<img src="<?= base_url() ?>assets/dist/img/cigar.png" alt="Gambar Rokok" class="brand-image"
					style="width: 30px;">
				<span class="brand-text">Cerutu</span>
				<!-- <span class="brand-text font-weight-light">Identifikasi Kualitas Air</span> -->
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
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
							<a href="<?=base_url('user/C_beranda')?>"
								class="nav-link <?php if($link === 'C_beranda'){echo 'active';} ?> ">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Beranda</p>
							</a>
						</li>
						<li class="nav-header">MENU</li>
						<li class="nav-item">
							<a href="<?= base_url('user/C_informasi') ?>" class="nav-link 
							<?php if($link === 'C_informasi'){echo 'active';} ?>">
								<i class="fas fa-file-alt nav-icon"></i>
								<p>Informasi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('user/C_riwayat') ?>" class="nav-link 
							<?php if($link === 'C_riwayat'){echo 'active';} ?>">
								<i class="fas fa-history nav-icon"></i>
								<p>Riwayat</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<!-- modal keluar -->
		<div class="modal fade" id="modalKeluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						Anda yakin ingin keluar?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<a href="<?=base_url('admin/C_auth/logout')?>" class="btn btn-danger">Keluar</a>
					</div>
				</div>
			</div>
		</div>
		<!-- modal keluar end -->
