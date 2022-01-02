<div class="container-login100">
	<div>
		<div class="row mt-4">
			<div class="col-md">
			<?= $this->session->flashdata('message'); ?>
				<div class="card">
					<div class="card-header">Perbarui Datamu</div>
					<form action="<?= base_url('Admin/update_profile') ?>" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nama lengkap</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Nama lengkap" name="nama" required value="<?= $profile->nama_lengkap ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Tanggal lahir</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="tgl_lahir" required value="<?= $profile->tgl_lahir ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Domisili</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Domisili" name="domisili" required value="<?= $profile->domisili ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Provinsi</label>
								<div class="col-sm-9">
									<textarea class="form-control" placeholder="Alamat" name="alamat"><?= $profile->provinsi ?></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">No HP</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="No Hp" name="no_hp" value="<?= $profile->no_hp ?>">
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
	</div>
</div>