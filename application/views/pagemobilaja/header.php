<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Car Dealer Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mobil Aja - Solusi Terbaik Mencari Mobil</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?= base_url() ?>/views/pagemobilaja/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>/views/pagemobilaja/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/views/pagemobilaja/assets/css/main.css">
	<!-- Slider Pro Css -->
	<link rel="stylesheet" href="<?= base_url() ?>/views/pagemobilaja/assets/css/sliderPro.css">
	<!-- Owl Carousel Css -->
	<link rel="stylesheet" href="<?= base_url() ?>/views/pagemobilaja/assets/css/owl-carousel.css">
	<!-- Flat Icons Css -->
	<link rel="stylesheet" href="<?= base_url() ?>/views/pagemobilaja/assets/css/flaticon.css">
	<!-- Animated Css -->
	<link rel="stylesheet" href="<?= base_url() ?>/views/pagemobilaja/assets/css/animated.css">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
	
	<div id="search">
	    <button type="button" class="close">×</button>
	    <form>
	        <input type="search" value="" placeholder="type keyword(s) here" />
	        <button type="submit" class="primary-button">Search <i class="fa fa-search"></i></button>
	    </form>
	</div>
	
	<header class="site-header wow fadeIn" data-wow-duration="1s">
		<div id="main-header" class="main-header">
			<div class="container clearfix">
				<div class="logo">
					<a href="index.html"></a>
				</div>
				<div id='cssmenu'>
					<ul>
					   	<li><a href='index.html'>Homepage</a></li>
					   	<li class='active'><a href='#'>Car Listing</a>
					      	<ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href='car_listing_sidebar.html'>Car Listing</a></li>
					               		<li><a href='car_grid_sidebar.html'>Car Grid</a></li>
					            	</ul>
					        	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href='car_listing_no_sidebar.html'>Car Listing</a></li>
					               		<li><a href='car_grid_no_sidebar.html'>Car Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href="single_car.html">Single Car</a></li>
					      	</ul>
					   	</li>
					   <li><a href='about_us.html'>About Us</a></li>
					   <li><a href='contact_us.html'>Contact Us</a></li>
					   <li><a href='login.html'><strong>Login</strong></a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>


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
							<div class="item car-item">
								<div class="thumb-content d-flex align-items-center justify-content-center" style="height: 150px;">
									<a href="single_car.html"><img src="https://www.honda-indonesia.com/uploads/images/models/variants/type_prestige__1636515822474.png" class="w-100" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Honda BR-V</h4></a>
									<span>Rp. 323.000.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content d-flex align-items-center justify-content-center" style="height: 150px;">
									<a href="single_car.html"><img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/1_veloz-black-metallic.png" class="w-100" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Honda Civic</h4></a>
									<span>Rp. 256.000.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content d-flex align-items-center justify-content-center" style="height: 150px;">
									<a href="single_car.html"><img src="https://www.toyota.astra.co.id/sites/default/files/2021-06/1.%20alphard%20colors%20white%20pearl.png" class="w-100" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Honda Brio</h4></a>
									<span>Rp. 256.000.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content d-flex align-items-center justify-content-center" style="height: 150px;">
									<a href="single_car.html"><img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/01_attitude-black_0.png" class="w-100" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>City Hatchback</h4></a>
									<span>Rp. 256.000.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content d-flex align-items-center justify-content-center" style="height: 150px;">
									<a href="single_car.html"><img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-citrus-mica-metallic.png" class="w-100" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Honda City</h4></a>
									<span>Rp. 256.000.000</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>