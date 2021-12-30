<div class="container-login100 mx-auto">
	<div class="col mt-5">
		<br>
		<div class="card">
			<div class="card-header">Posting Iklan</div>
			<form action="<?= base_url('admin/iklan_add') ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Merk/Tipe Mobil</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Contoh: Kijang Innova 2008" name="info" required>
							<?= form_error('info', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Kondisi Kendaraan</label>
						<div class="col-sm-9">
							<select class="form-control" name="kondisi_kendaraan">
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
							<input type="date" class="form-control" name="tahun_kendaraan" required>
							<?= form_error('tahun_kendaraan', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Kilometer Kendaraan</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Contoh: 20000 untuk 20.000KM" name="kilometer_kendaraan" required>
							<?= form_error('kilometer_kendaraan', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Jenis Bahan Bakar</label>
						<div class="col-sm-9">
							<select class="form-control" name="jenis_bahanbakar">
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
							<input type="text" class="form-control" placeholder="Contoh: Putih" name="warna" required>
							<?= form_error('warna', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Harga</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Contoh: 100000000 untuk Rp. 100.000.000" name="harga" required>
							<?= form_error('harga', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Deskripsi Lebih Lanjut</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi" rows="3"></textarea>
							<?= form_error('deskripsi', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Foto Mobil</label>
						<div class="col-sm-9">
							<input type="file" class="form-control" name="cv" lang="es" multiple>
							<?= form_error('cv', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>

					<input class="input100" type="hidden" name="nama" value=<?=$this->session->userdata('nama') ?>/>
					<input class="input100" type="hidden" name="nomor_person" value=<?=$this->session->userdata('no_hp') ?>/>

				</div>
				<div class="card-footer">
					<button class="btn btn-link" type="submit">Simpan</button>
					<a href="<?= base_url('admin/iklan') ?>" class="btn btn-link">Kembali</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>