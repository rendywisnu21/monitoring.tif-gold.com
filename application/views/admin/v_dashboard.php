        <script type="text/javascript" src="<?= base_url() ?>assets/dist/jquery/jquery.min.js"></script>
            <script type="text/javascript">
            
                $(document).ready(function() {
                    setInterval(function() {
                        $("#cek_suhu").load("<?php echo site_url('admin/C_dashboard/ceksuhu'); ?>");
                        $("#cek_kelembaban").load("<?php echo site_url('admin/C_dashboard/cekkelembaban'); ?>");
                        $("#cek_kipas").load("<?php echo site_url('admin/C_dashboard/cekkipas'); ?>");
                        $("#cek_lampu").load("<?php echo site_url('admin/C_dashboard/ceklampu'); ?>");
                        $("#cek_pelembab").load("<?php echo site_url('admin/C_dashboard/cekpelembab'); ?>");
                        $("#bacasuhu").load("<?php echo site_url('admin/C_dashboard/bacasuhu'); ?>");
                        $("#bacakelembaban").load("<?php echo site_url('admin/C_dashboard/bacakelembaban'); ?>");
                    }, 5000); 
                });
				
            </script>
            
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header mb-1 pb-1">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="mt-2 mx-2 text-bold"><?= $title ?></h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- Info boxes -->
					<!-- Row 1 -->
					<div class="row">
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box">
								<span class="info-box-icon bg-success elevation-1"><i
										class="fas fa-temperature-low"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Nilai Suhu</span>
									<span class="info-box-number" id="cek_suhu"></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-info elevation-1"><i class="fas fa-tint"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Nilai Kelembaban</span>
									<span class="info-box-number"id="cek_kelembaban"></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
					</div>
					<!-- Row 2 -->
					<div class="row">
						<!-- fix for small devices only -->
						<div class="clearfix hidden-md-up"></div>

						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-primary elevation-1"><i class="fas fa-fan"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Kipas</span>
									<span class="info-box-number" id="cek_kipas"></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-lightbulb"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Lampu</span>
									<span class="info-box-number" id="cek_lampu"></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->

						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wind"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Pelembab</span>
									<span class="info-box-number" id="cek_pelembab"></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
					<br>
			
			<div class="row">
			<div class="container-fluid">
		        <h3 class="mt-2 mx-2 text-bold">Grafik Kondisi Ruangan</h3>
		    </div>
            <div class="col-md-12">
                <ul class="nav nav-pills bg-white p-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-suhu-tab" data-toggle="pill" href="#pills-suhu" role="tab" aria-controls="pills-suhu" aria-selected="true">Suhu</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-kelembaban-tab" data-toggle="pill" href="#pills-kelembaban" role="tab" aria-controls="pills-kelembaban" aria-selected="false">Kelembaban</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-suhu" role="tabpanel" aria-labelledby="pills-suhu-tab">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Grafik Suhu
                                </h3>
                            </div>
                            <div class="card-body" id="bacasuhu"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-kelembaban" role="tabpanel" aria-labelledby="pills-kelembaban-tab">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Grafik Kelembaban
                                </h3>
                            </div>
                            <div class="card-body" id="bacakelembaban"></div>
                        </div>
                    </div>
                </div>
                <p class="text-success text-center">Hasil perhitungan adalah</p>
                <div class="row justify-content-center">
                    <div class="col-sm-8 text-center">
                        <h1 id="grade">-</h1>
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover mt-2">
                    <thead>
                        <tr>
                            <th class="text-center">Suhu</th>
                            <th class="text-center">Kelembaban</th>
                            <th class="text-center">Kipas</th>
                            <th class="text-center">Lampu</th>
                            <th class="text-center">Pelembab</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" id="cek_suhu"></td>
                            <td class="text-center" id="cek_kelembaban"></td>
                            <td class="text-center" id="cek_kipas"></td>
                            <td class="text-center" id="cek_lampu"></td>
                            <td class="text-center" id="cek_pelembab"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
			</section>
		</div>
		</div>
		</div>

    
		<!-- Modal Aplikasi -->
		<div class="modal fade bd-example-modal-lg" id="modalAplikasi" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4><b>Informasi Aplikasi</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
								<p>
									<h5 class="text-justify">
										Website Monitoring Ruang Penyimpanan Cerutu
										adalah website yang digunakan untuk memantau kondisi ruang penyimpanan rokok cerutu berdasarkan parameter pengukuran variabel suhu dan kelembaban. Suhu dan kelembaban diatur menggunakan kipas, lampu, dan modul pelembab secara otomatis.
									</h5>
								</p>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
									<h4 class="font-weight-bold">
										Berikut merupakan alur atau proses kerja dari aplikasi
									</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/alurAplikasi.JPG") ?>" width="448px"
											height="546px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Aplikasi -->
