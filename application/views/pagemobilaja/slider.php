<div class="Modern-Slider">
	  <!-- Slide 1 -->
	  <div class="item">
	    <div class="img-fill">
	      <img src="https://www.honda-indonesia.com/uploads/images/home-sliders/images/city1__1635417482487.jpg" class="w-100" alt="">
	      <!-- <div class="info">
	        <div >
	        	<h5>ACROPOS HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
          		<h6 class="secondary-button">
	          		<a href="#">Find Your Car <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div> -->
	    </div>
	  </div>
	  <!-- // Slide 1 -->
	  <!-- Slide 2 -->
	  <div class="item">
	    <div class="img-fill">
	      <img src="https://www.honda-indonesia.com/uploads/images/home-sliders/images/civic1__1635417535807.jpg" class="w-100" alt="">
	      <!-- <div class="info">
	        <div>
	        	<h5>ACROPOS HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
	          	<h6 class="secondary-button">
	          		<a href="#">Find Your Car <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div> -->
	    </div>
	  </div>
	  <!-- // Slide 2 -->
	  <!-- Slide 3 -->
	  <div class="item">
	    <div class="img-fill">
	      <img src="https://www.honda-indonesia.com/uploads/images/home-sliders/images/slidercityhb__1614920243990.jpg" class="w-100" alt="">
	      <!-- <div class="info">
	        <div>
	        	<h5>ACROPOS HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
	          	<h6 class="secondary-button">
	          		<a href="#">Find Your Car <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div> -->
	    </div>
	  </div>
	  <!-- // Slide 3 -->
	</div>


	<section class="top-slider-features wow fadeIn" data-wow-duration="1.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="slider-top-features">
						<div id="owl-top-features" class="owl-carousel owl-theme">
						<?php foreach ($iklan as $i) : ?>
							<div class="item car-item">
								<div class="thumb-content d-flex align-items-center justify-content-center" >
								<button data-toggle="modal" data-target="#exampleModalCenter<?= $i->id ?>"><img src="<?= base_url() ?>/assets/img/mobil/<?= $i->email?>/<?= $i->foto_kendaraan?> " style='height: 120px; width: 100%; object-fit: contain' alt=""></button>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4><?= $i->info ?></h4></a>
									<span>Rp. <?= number_format("$i->harga", 2, ",", ".");  ?></span>
								</div>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>