<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md">
			<?= $this->session->flashdata('message'); ?>
			<div class="card">
				<div class="card-body">
					<h4>
						<strong>
							Selamat datang di SILOKERNF
						</strong>
					</h4>
					<br>
					<p>
						SILOKERNF adalah website untuk membantu memberikan informasi terkait lowongan kerja yang sedang
						di butuhkan saat ini, Agar memudahkan anda untuk mencari pekerjaan tentunya kami juga telah
						bekerja sama dengan perusahaan-perusahaan lain sebagai mitra untuk memberikan lowongan kerja
						langsung dari mitra terkait.
					</p>
					<p>
						Kami menyediakan fitur isi lowongan untuk perusahaan yang sedang mencari karyawan.
					</p>

					<div class="row">
						<div class="col-md-6 mb-2 mt-2">
							<h4> <strong>Hoerudin</strong> </h4>
							<h6> 0110220290</h6>
						</div>
						<div class="col-md-6 mb-2 mt-2">
							<h4> <strong>Mukhammad Maulana</strong> </h4>
							<h6> 0110220140</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mt-4">
							<h4> <strong>Richal Juliansyah</strong> </h4>
							<h6> 0110220177</h6>
						</div>
					</div>

					<div class="row mt-4">
						<div class="col-md">
							<div class="card">
								<div class="card-header">Lowongan Tersedia</div>
								<div class="card-body">
									<div id="accordion">
										<?php foreach($careers as $c): ?>

										<div class="card">
											<div class="card-header" id="headingOne">
												<h5 class="mb-0">
													<button class="btn btn-link text-uppercase" data-toggle="collapse"
														data-target="#coll<?= $c->id ?>" aria-expanded="false"
														aria-controls="collapseOne">
														<?= $c->info ?>
													</button>
												</h5>
											</div>
											<div id="coll<?= $c->id ?>" class="collapse show"
												aria-labelledby="headingOne" data-parent="#accordion">
												<div class="card-body">
													Perusahaan : <?= $c->perusahaan ?> <br>
													Batas akhir : <?= $c->tanggal_akhir ?>
													<br>
													<?php if(! $this->session->has_userdata('username')): ?>
													<a href="<?= base_url('page/registrasi') ?>"
														class="btn btn-link mt-3">Apply</a>
													<?php else: ?>
													<a href="<?= base_url('pelamar/apply/'.$c->id) ?>"
														class="btn btn-link mt-3">Apply</a>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<br>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
