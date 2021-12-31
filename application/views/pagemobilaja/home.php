	<section>
		<div class="features-search-section">
			<div class="container">
				<div class="row">
					<div class="col-md-auto">
						<div class="row">
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-car"></i>
									<div class="text-content">
										<h6>Jual &amp; Beli Mobil</h6>
										<p>Jual dan Beli mobil bekas idaman anda dengan harga yang kompetitif dan bisa di nego. Transaksi termudah, tercepat, dan terbuka!</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-search"></i>
									<div class="text-content">
										<h6>Temukan Mobil Bekas Idamanmu</h6>
										<p>Temukan mobil bekas idamanmu dari sabang sampai merauke, dari miangas sampai pulau rote!</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-users"></i>
									<div class="text-content">
										<h6>Tempat COD Terpercaya</h6>
										<p>Tertarik dan mau test drive? Hubungi kami untuk menyediakan tempat ketemuan terpercaya dengan dealer dan mekanik yang handal!</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-globe"></i>
									<div class="text-content">
										<h6>Dari Sabang Sampai Merauke</h6>
										<p>Kami hadir di seluruh provinsi indonesia, kamu bisa menemukan mobil idamanmu, hanya melalui kami!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="recent-cars">
			<div class="container">
				<div class="recent-car-content">
					<div class="row">
						<?php foreach ($iklan as $i) : ?>
							<div class="col-md-4 col-sm-6">
								<div class="car-item wow fadeIn" data-wow-duration="0.75s">
									<div class="thumb-content d-flex align-items-center justify-content-center" >
										<div class="car-banner">
											<a><?= $i->kondisi_kendaraan ?></a>
										</div>
										<div class="thumb-inner">
											<button data-toggle="modal" data-target="#exampleModalCenter<?= $i->id ?>"><img src="<?= base_url() ?>/assets/img/mobil/<?= $i->email?>/<?= $i->foto_kendaraan?> " style='height: 300px; width: 100%; object-fit: contain' alt=""></button>
										</div>
									</div>
									<div class="down-content">
										<a href="single_car.html">
											<h4><?= $i->info ?></h4>
										</a>
										<span>Rp. <?= number_format("$i->harga", 2, ",", "."); ?></span>
										<ul class="car-info">
											<li>
												<div class="item"><i class="flaticon flaticon-calendar"></i>
													<p><?= date('Y', strtotime($i->tahun_kendaraan)) ?></p>
												</div>
											</li>
											<li>
												<div class="item"><i class="flaticon flaticon-speed"></i>
													<p><?= $i->warna ?></p>
												</div>
											</li>
											<li>
												<div class="item"><i class="flaticon flaticon-road"></i>
													<p><?= $i->kilometer_kendaraan ?>km</p>
												</div>
											</li>
											<li>
												<div class="item"><i class="flaticon flaticon-fuel"></i>
													<p><?= $i->jenis_bahanbakar ?></p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="modal fade" id="exampleModalCenter<?= $i->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle"><?= $i->info ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<?= $i->deskripsi ?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary" onclick="window.open('http://wa.me/62<?= ltrim($i->nomor_person, '0')?>')">Hubungi Whatsapp a/n <?= $i->nama?></button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>