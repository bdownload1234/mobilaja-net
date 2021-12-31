<div class="container-login100 mx-auto">
	<div class="col mt-5">
		<br>
		<div class="card">
			<div class="card-header">Ubah Lowongan</div>
			<form action="<?= base_url('Admin/iklan_edit/' . $iklan->id) ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Merk/Tipe Mobil</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Contoh: Kijang Innova 2008" name="info" required value=<?= $iklan->info?>>
							<?= form_error('info', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Kondisi Kendaraan</label>
						<div class="col-sm-9">
							<select class="form-control" name="kondisi_kendaraan" value=<?= $iklan->kondisi_kendaraan?>>
								<option value="Bekas">Bekas</option>
								<option value="Baru">Baru</option>
								<option value="Disewakan">Disewakan</option>
							</select>
							<?= form_error('kondisi_kendaraan', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Tahun Kendaraan</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="tahun_kendaraan" required value=<?= $iklan->tahun_kendaraan?>>
							<?= form_error('tahun_kendaraan', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Kilometer Kendaraan</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Contoh: 20000 untuk 20.000KM" name="kilometer_kendaraan" required value=<?= $iklan->kilometer_kendaraan?>>
							<?= form_error('kilometer_kendaraan', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Jenis Bahan Bakar</label>
						<div class="col-sm-9">
							<select class="form-control" name="jenis_bahanbakar" value=<?= $iklan->jenis_bahanbakar?>>
								<option value="Bensin">Bensin</option>
								<option value="Solar">Solar</option>
								<option value="Lain">Lain</option>
							</select>
							<?= form_error('jenis_bahanbakar', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Warna Kendaraan</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Contoh: Putih" name="warna" required value=<?= $iklan->warna?>>
							<?= form_error('warna', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Harga</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Contoh: 100000000 untuk Rp. 100.000.000" name="harga" required value=<?= $iklan->harga?>>
							<?= form_error('harga', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Deskripsi Lebih Lanjut</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi" rows="3"><?= $iklan->deskripsi?></textarea>
							<?= form_error('deskripsi', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					
				</div>
				<div class="card-footer">
					<button class="btn btn-link">Simpan</button>
					<a href="<?= base_url('Admin/iklan') ?>" class="btn btn-link">Kembali</a>
				</div>
			</form>
		</div>
	</div>
</div>