        <script type="text/javascript" src="<?= base_url() ?>assets/dist/jquery/jquery.min.js"></script>
        <script type="text/javascript">
        	$(document).ready(function () {
        		setInterval(function () {
        			$("#cek_suhu").load("<?php echo site_url('user/C_beranda/ceksuhu'); ?>");
        			$("#cek_kelembaban").load("<?php echo site_url('user/C_beranda/cekkelembaban'); ?>");
        			$("#cek_kipas").load("<?php echo site_url('user/C_beranda/cekkipas'); ?>");
        			$("#cek_lampu").load("<?php echo site_url('user/C_beranda/ceklampu'); ?>");
        			$("#cek_pelembab").load("<?php echo site_url('user/C_beranda/cekpelembab'); ?>");
        			$("#bacasuhu").load("<?php echo site_url('user/C_beranda/bacasuhu'); ?>");
        			$("#bacakelembaban").load("<?php echo site_url('user/C_beranda/bacakelembaban'); ?>");
        		}, 5000);
        	});

        </script>
        <div class="content-wrapper">
        	<!-- Content Header (Page header) -->
        	<section class="content-header mb-1 pb-1">
        		<div class="container-fluid">
        			<div class="row mb-2">
        				<div class="col-sm-6">
        					<h1 class="mt-2 mx-2 text-bold"><?= $title; ?></h1>
        					<!-- Clock -->
        					<iframe
        						src="https://free.timeanddate.com/clock/i8gh359z/n554/tlid38/fs48/tcf4f6f9/pcf4f6f9/ftb/pa10"
        						frameborder="0" width="212" height="75"></iframe>
        					<!-- End of Clock -->
        				</div>

        			</div>
        		</div><!-- /.container-fluid -->
        		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

        	</section>
        	<!-- Table -->
        	<section class="content">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="col-12">
        					<div class="card">
        						<div class="card-header bg-dark">
        							<h3 class="card-title">Tabel Riwayat Baca Sensor</h3>
        						</div>
        						<div class="card-body table-responsive p-0">
        							<table class="table table-hover">
        								<thead>
        									<tr class="text-center">
        										<th>No</th>
        										<th>Suhu</th>
        										<th>Kelembaban</th>
        										<th>Kipas</th>
        										<th>Lampu</th>
        										<th>Pelembab</th>
        										<th>Tanggal</th>
        									</tr>
        								</thead>
        								<tbody>
        									<?php $no = 1;
												foreach ($riwayat as $rw):
												$id = $rw->id_riwayat
											?>
        									<tr>
        										<td class="text-center"><?= $no; ?></td>
        										<td class="text-center" id="cek_suhu"><?= $rw->suhu; ?></td>
        										<td class="text-center" id="cek_kelembaban"><?= $rw->kelembaban; ?></td>
        										<td class="text-center" id="cek_kipas"><?= $rw->kipas; ?></td>
        										<td class="text-center" id="cek_lampu"><?= $rw->lampu; ?></td>
        										<td class="text-center" id="cek_pelembab"><?= $rw->pelembab; ?></td>
        										<td class="text-center"><?= $rw->tanggal; ?></td>
        									</tr>
        									<?php $no++; ?>
        									<?php endforeach; ?>
        								</tbody>
        								<tfoot>
        									<tr class="text-center">
        										<th>No</th>
        										<th>Suhu</th>
        										<th>Kelembaban</th>
        										<th>Kipas</th>
        										<th>Lampu</th>
        										<th>Pelembab</th>
        										<th>Tanggal</th>
        									</tr>
        								</tfoot>
        							</table>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
        	<!-- End of Table -->
        </div>
