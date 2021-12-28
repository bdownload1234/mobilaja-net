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
											<button data-toggle="modal" data-target="#exampleModalCenter<?= $i->id ?>"><img src="https://www.toyota.astra.co.id/sites/default/files/2020-07/4_super%20white-min.png" alt=""></button>
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