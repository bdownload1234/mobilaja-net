<div class="row mt-4">
	<div class="col-md-12">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">Lowongan pekerjaan</div>
			<div class="card-body">
				<a href="<?= base_url('admin/career_add') ?>" class="btn btn-link mb-3">Tambah Lowongan</a>
				<table class="table">	
					<thead>
						<tr>
							<th>#</th>
							<th>Info</th>
							<th>Nama Perusahaan</th>
							<th>Pilihan</th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($careers as $c):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $c->info ?></td>
							<td><?= $c->perusahaan ?></td>
							<td>
								<a href="<?= base_url('admin/career_edit/'.$c->id) ?>" class="btn btn-link">Edit</a>
								<a href="<?= base_url('admin/career_del/'.$c->id) ?>" class="btn btn-link" onclick="return confirm('Data ini akan dihapus? ')">Hapus</a>
							</td>
						</tr>
					<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<br>