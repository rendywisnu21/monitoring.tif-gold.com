<style type="text/css">
	html {
		scroll-behavior: smooth;
	}

</style>

<div class="content-wrapper">
	<!-- Content Header -->
	<section class="content-header mb-1 pb-1">
		<!-- container -->
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="mt-2 mx-2 text-bold"><?= $title; ?></h1>
				</div>

			</div>
		</div>
		<!-- end of container -->
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- container -->
		<div class="container-fluid">
			<!-- metode -->
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title text-bold">
						Metode
					</h3>
				</div>
				<div class="card-body">
					<h4>Fuzzy Logic</h4>
					<div class="row">
						<div class="col-5 col-sm-3">
							<div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
								aria-orientation="vertical">
								<a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill"
									href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home"
									aria-selected="true">Definisi</a>
								<a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill"
									href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile"
									aria-selected="false">Tahapan</a>
								<a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill"
									href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages"
									aria-selected="false">Pencipta</a>
							</div>
						</div>
						<div class="col-7 col-sm-9">
							<div class="tab-content" id="vert-tabs-tabContent">
								<div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
									aria-labelledby="vert-tabs-home-tab">
									<span class="text-bold">Logika Fuzzy</span> merupakan salah satu cabang bidang soft
									computing berhitung menggunakan
									liguistic variable (kata - kata) untuk pengganti hitungan dengan bilangan.
									Pengembangan Logika Fuzzy dilakukan untuk mengatasi konsep nilai kebenaran (true)
									dan kesalahan (false). Penggunaan kata dalam Fuzzy Logic tidak sepresisi bilangan,
									tapi jauh lebih dekat dengan intuisi manusia. Pada dasarnya, dalam Logika Fuzzy
									semua keputusan tidak bisa dijelaskan dengan 1 atau 0, tapi ada kondisi diantara
									keduanya yang disebut dengan tersamar atau Fuzzy.
								</div>
								<div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
									aria-labelledby="vert-tabs-profile-tab">
									Implementasi Logika Fuzzy dibagi dalam 4 tahap, yaitu sebagai berikut.
									<ol>
										<li>Fuzzifikasi, adalah proses pemetaan himpunan Fuzzy dari masukan tegas.</li>
										<li>Pembentukan Rule Fuzzy, adalah penalaran aturan.</li>
										<li>Analisis Logika Fuzzy, adalah proses kombinasi output yang menyatakan
											himpunan
											Fuzzy.</li>
										<li>Defuzzifikasi, merupakan proses pengubahan himpunan Fuzzy ke nilai tegas.
										</li>
									</ol>
								</div>
								<div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
									aria-labelledby="vert-tabs-messages-tab">
									Pertama kali diperkenalkan oleh <span class="text-bold">Lothfi A. Zadeh pada tahun
										1965.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end of row 2 -->
				</div>
			</div>
			<!-- end of metode -->
			<!-- row -->
			<div class="row">
				<!-- suhu -->
				<div class="col-md-6">
					<div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title font-weight-bold">
								Suhu
							</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<dl>
								<dt>Definisi</dt>
								<dd>Suhu adalah ukuran yang menentukan panas dingin suatu ruangan.</dd>
								<dt>Nilai Ideal</dt>
								<dd><span class="text-bold">20 - 25 ℃</span> <br> Apabila suhu berada di bawah atau
									melebihi rentang tersebut, maka
									kualitas udara akan berpengaruh terhadap kondisi rokok cerutu.</dd>
								<hr>
								<div class="embed-responsive embed-responsive-16by9">
									<img class="embed-responsive-item"
										src="<?= base_url() ?>assets/dist/img/fungsi_suhu.png"
										alt="Gambar Fungsi Keanggotaan Suhu" allowfullscreen></img>
								</div>
								<hr>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width: 10px">No.</th>
											<th>Suhu</th>
											<th>Rentang Nilai</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td>Dingin</td>
											<td>10 - 20℃</td>
										</tr>
										<tr>
											<td>2.</td>
											<td>Normal</td>
											<td>19 - 26℃</td>
										</tr>
										<tr>
											<td>3.</td>
											<td>Panas</td>
											<td>25 - 40℃</td>
										</tr>
									</tbody>
								</table>
							</dl>
						</div>
					</div>
				</div>
				<!-- end of suhu -->
				<!-- kelembaban -->
				<div class="col-md-6">
					<div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title font-weight-bold">
								Kelembaban
							</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<dl>
								<dt>Definisi</dt>
								<dd>Kelembaban adalah banyaknya uap air yang ada di udara.</dd>
								<dt>Nilai Ideal</dt>
								<dd><span class="text-bold">45 - 60 %</span> <br> Apabila kelembaban berada di bawah
									atau melebihi rentang tersebut,
									maka kualitas udara akan berpengaruh terhadap kondisi rokok cerutu.</dd>
								<hr>
								<div class="embed-responsive embed-responsive-16by9">
									<img class="embed-responsive-item"
										src="<?= base_url() ?>assets/dist/img/fungsi_kelembaban.png"
										alt="Gambar Fungsi Keanggotaan Suhu" allowfullscreen></img>
								</div>
								<hr>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width: 10px">No.</th>
											<th>Kelembaban</th>
											<th>Rentang Nilai</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td>Kering</td>
											<td>25 - 45%</td>
										</tr>
										<tr>
											<td>2.</td>
											<td>Normal</td>
											<td>40 - 65%</td>
										</tr>
										<tr>
											<td>3.</td>
											<td>Basah</td>
											<td>60 - 80%</td>
										</tr>
									</tbody>
								</table>
							</dl>
						</div>
					</div>
				</div>
				<!-- end of kelembaban -->
			</div>
			<!-- end of row 1 -->
		</div>
		<!-- end of container -->
	</section>
	<br><br>
