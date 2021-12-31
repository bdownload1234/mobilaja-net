<div class="container-login100">
	<div>
		<div class="row mt-4">
			<div class="col-md-12">
				<?= $this->session->flashdata('message'); ?>
				<div class="card">
					<div class="card-header">Postingan Iklan</div>
					<div class="card-body">
						<a href="<?= base_url('Admin/iklan_add') ?>" class="btn btn-link mb-3">Pasang Iklan</a>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Info</th>
									<th>Kondisi Kendaraan</th>
									<th>Tahun Kendaraan</th>
									<th>Kilometer Kendaraan</th>
									<th>Jenis Bahan Bakar</th>
									<th>Warna</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($iklan as $i) : ?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $i->info ?></td>
										<td><?= $i->kondisi_kendaraan ?></td>
										<td><?= $i->tahun_kendaraan ?></td>
										<td><?= $i->kilometer_kendaraan ?></td>
										<td><?= $i->jenis_bahanbakar ?></td>
										<td><?= $i->warna ?></td>
										<td><?= $i->harga ?></td>
										<td>
											<a href="<?= base_url('Admin/iklan_edit/' . $i->id) ?>">Edit</a>
										</td>
										<td><a href="<?= base_url('Admin/iklan_del/' . $i->id) ?>" onclick="return confirm('Data ini akan dihapus? ')">Hapus</a></td>
									</tr>
								<?php $no++;
								endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>