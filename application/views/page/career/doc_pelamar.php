<div class="row mt-4">
	<div class="col-md">
		<div class="card">
			<div class="card-header">Silahkan Lengkapi Data Berikut untuk Melamar</div>
			<form action="<?= base_url('pelamar/uploadcv') ?>" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<input type="hidden" name="id_loker" value="<?= $id_loker ?>">
				<div class="form-group">
					<label>Name </label>
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label>Upload CV</label>
					  <input type="file" class="form-control" name="cv" lang="es">
					<small>*) Format File "PDF"</small>
				</div>
				
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-link">Apply</button>
			</div>
			</form>
		</div>
	</div>
</div>
<br>