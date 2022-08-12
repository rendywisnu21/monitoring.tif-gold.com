<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header mb-1 pb-1">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="mt-2 mx-2 text-bold"><?= $title; ?></h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

	</section>
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header bg-dark">
						<h3 class="card-title">Tabel Riwayat Baca Sensor</h3>
						<a href="#" class="btn btn-danger float-right mr-4" data-target="#modalHapus"
							data-toggle="modal">Hapus Semua
						</a>
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
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
									foreach ($riwayat as $rw):
										$id = $rw->id_riwayat
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center"><?= $rw->suhu; ?></td>
									<td class="text-center"><?= $rw->kelembaban; ?></td>
									<td class="text-center"><?= $rw->kipas; ?></td>
									<td class="text-center"><?= $rw->lampu; ?></td>
									<td class="text-center"><?= $rw->pelembab; ?></td>
									<td class="text-center"><?= $rw->tanggal; ?></td>
									<td class="text-center">
										<button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
											data-target="#modalHapus<?= $id ?>">Hapus</button>
									</td>
									</td>
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
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- modal hapus -->
<?php foreach ($riwayat as $rw):
	$id 			= $rw->id_riwayat;
	$suhu 			= $rw->suhu;
	$kelembaban 	= $rw->kelembaban;
	?>
<form action="<?php echo base_url() . 'admin/C_riwayat/hapus' ?>" method="post">
	<div class="modal fade" id="modalHapus<?= $id; ?>" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Hapus </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body justify-content-center">
					<div>
						<h5>Apakah Anda yakin untuk menghapus data dengan suhu <b><?= $suhu ?></b> dan kelembaban
							<b><?= $kelembaban ?></b> ini?</h5>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-default" data-dismiss="modal">Batal</button>
					<input type="hidden" name="delete_id" value="<?= $id; ?>" required>
					<button type="submit" class="btn btn-danger">Hapus</button>
				</div>
			</div>
		</div>
	</div>
</form>
<?php endforeach; ?>
<!-- modal hapus end -->

<!-- modal hapus -->
<div class="modal fade" id="modalHapus" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Hapus Semua</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body justify-content-center">
				<div>
					<h5>Anda yakin untuk menghapus semua data ini?</h5>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-default" data-dismiss="modal">Batal</button>
				<a href="<?=base_url('admin/C_hasil/clear')?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
<!-- modal hapus end -->
