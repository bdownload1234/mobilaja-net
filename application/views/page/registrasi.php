<div class="row mt-4">
	<div class="col-md">
		<div class="card">
			<div class="card-header">Buat Akun</div>
			<form action="<?= base_url('pelamar/registrasi') ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Username</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Username" name="username" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" placeholder="Password" name="password" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Tanggal lahir</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="tgl_lahir" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Domisili</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Domisili" name="domisili" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
						<div class="col-sm-9">
							<select class="form-control" name="jenjang_pendidikan">
								<option value="sd">SD</option>
								<option value="smp">SMP</option>
								<option value="smak">SMA/SMK</option>
								<option value="diploma">Diploma</option>
								<option value="sarjana">Sarjana</option>
								<option value="pascasarjana">Pasca-Sarjana</option>
								<option value="doktorat">Doktorat</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Jenis kelamin</label>
						<div class="col-sm-9">
							<select class="form-control" name="jk">
								<option value="Laki-laki">Laki laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Alamat lengkap</label>
						<div class="col-sm-9">
							<textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Nomor Handphone</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Nomor Handphone" name="no_hp">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-link">Registrasi</button>
				</div>
			</form>
		</div>
	</div>
	<br>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header text-center">Sudah Punya Akun?</div>
			<ul class="list-group list-group-flush">
				<li class="btn btn-link"><a href="<?= base_url('page/login') ?>">Masuk</a></li>
			</ul>
		</div>
	</div>
</div>
<br>