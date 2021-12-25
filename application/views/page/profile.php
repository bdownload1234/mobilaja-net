<?= $this->session->flashdata('message'); ?>
<div class="row mt-4">
	<div class="col-md">
		<div class="card">
			<div class="card-header">Perbarui Datamu</div>
			<form action="<?= base_url('pelamar/update_profile') ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Nama lengkap</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Nama lengkap" name="nama" required
								value="<?= $profile->nama_lengkap ?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Tanggal lahir</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="tgl_lahir" required
								value="<?= $profile->tgl_lahir ?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Domisili</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Domisili" name="domisili" required
								value="<?= $profile->domisili ?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Jenjang pendidikan</label>
						<div class="col-sm-9">
							<select class="form-control" name="jenjang_pendidikan">
								<option value="sd" <?= ($profile->jenjang_pendidikan == 'sd' ) ? 'selected' : '' ?>>SD
								</option>
								<option value="smp" <?= ($profile->jenjang_pendidikan == 'smp' ) ? 'selected' : '' ?>>
									SMP</option>
								<option value="smak" <?= ($profile->jenjang_pendidikan == 'smak' ) ? 'selected' : '' ?>>
									SMA/SMK</option>
								<option value="sarjana"
									<?= ($profile->jenjang_pendidikan == 'diploma' ) ? 'selected' : '' ?>>Diploma
								</option>
								<option value="sarjana"
									<?= ($profile->jenjang_pendidikan == 'sarjana' ) ? 'selected' : '' ?>>Sarjana
								</option>
								<option value="sarjana"
									<?= ($profile->jenjang_pendidikan == 'pascasarjana' ) ? 'selected' : '' ?>>
									Pasca-Sarjana</option>
								<option value="sarjana"
									<?= ($profile->jenjang_pendidikan == 'doktorat' ) ? 'selected' : '' ?>>Doktorat
								</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Jenis kelamin</label>
						<div class="col-sm-9">
							<select class="form-control" name="jk">
								<option value="Laki-laki"
									<?= ($profile->jenis_kelamin == 'Laki-laki' ) ? 'selected' : '' ?>>Laki laki
								</option>
								<option value="Perempuan"
									<?= ($profile->jenis_kelamin == 'Perempuan' ) ? 'selected' : '' ?>>Perempuan
								</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Alamat lengkap</label>
						<div class="col-sm-9">
							<textarea class="form-control" placeholder="Alamat"
								name="alamat"><?= $profile->alamat_lengkap ?></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">No HP</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="No Hp" name="no_hp"
								value="<?= $profile->no_hp ?>">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-link">Perbarui</button>
				</div>
			</form>
		</div>
	</div>
</div>
<br>
