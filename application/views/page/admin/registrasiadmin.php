<div class="row mt-4">
	<div class="col-md">
		<div class="card">
			<div class="card-header">Buat Akun</div>
			<form action="<?= base_url('admin/registrasi') ?>" method="post" enctype="multipart/form-data">
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
						<label class="col-sm-3 col-form-label">Role</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Role" name="status" required>
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
				<li class="btn list-group-item"><a href="<?= base_url('page/login') ?>">Masuk</a></li>
			</ul>
		</div>
	</div>
</div>
<br>