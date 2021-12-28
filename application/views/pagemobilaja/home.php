	<section>
		<div class="features-search-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-car"></i>
									<div class="text-content">
										<h6>Sell &amp; Buy Cars</h6>
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi laboriosam quod voluptate, soluta ad quae!</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-search"></i>
									<div class="text-content">
										<h6>Car Dealer Research</h6>
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi laboriosam quod voluptate, soluta ad quae!</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-users"></i>
									<div class="text-content">
										<h6>Best Dealers</h6>
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi laboriosam quod voluptate, soluta ad quae!</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-globe"></i>
									<div class="text-content">
										<h6>National Known</h6>
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi laboriosam quod voluptate, soluta ad quae!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="search-content wow fadeIn" data-wow-duration="0.75s">
							<div class="search-heading">
								<div class="icon">
									<i class="fa fa-search"></i>
								</div>
								<div class="text-content">
									<h2>Quick Search</h2>
									<span>We made a quick search just for you</span>
								</div>
							</div>
							<div class="search-form">
								<div class="row">
									<div class="col-md-12">
										<div class="input-select">
											<select name="brand" id="brand">
												<option value="-1">Select Band</option>
												<option>Wolkswagen</option>
												<option>Audi</option>
												<option>Bmw</option>
												<option>Opel</option>
												<option>Citroen</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-select">
											<select name="mark" id="mark">
												<option value="-1">Select Mark</option>
												<option>Audi A3</option>
												<option>Audi A4</option>
												<option>Audi A5</option>
												<option>Audi A6</option>
												<option>Audi A7</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-select">
											<select name="min-price" id="min-price">
												<option value="-1">Min Price</option>
												<option>$500</option>
												<option>$1.000</option>
												<option>$1.500</option>
												<option>$2.000</option>
												<option>$2.500</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-select">
											<select name="max-price" id="max-price">
												<option value="-1">Max Price</option>
												<option>$5.000</option>
												<option>$7.500</option>
												<option>$10.000</option>
												<option>$15.500</option>
												<option>$20.000</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="secondary-button">
											<a href="#">Search <i class="fa fa-search"></i></a>
										</div>
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
						<div class="col-md-12">
							<div class="section-heading">
								<div class="icon">
									<i class="fa fa-car"></i>
								</div>
								<div class="text-content">
									<h2>Top Cars</h2>
									<span>Check our top cars</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<?php foreach ($iklan as $i) : ?>
							<div class="col-md-4 col-sm-6">
								<div class="car-item wow fadeIn" data-wow-duration="0.75s">
									<div class="thumb-content">
										<div class="car-banner">
											<a><?= $i->kondisi_kendaraan ?></a>
										</div>
										<div class="thumb-inner p-5">
											<button data-toggle="modal" data-target="#exampleModalCenter<?= $i->id ?>"><img src="data:image/jpeg;base64,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" alt=""></button>
										</div>
									</div>
									<div class="down-content">
										<a href="single_car.html">
											<h4><?= $i->info ?></h4>
										</a>
										<span>Rp.<?= $i->harga ?></span>
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