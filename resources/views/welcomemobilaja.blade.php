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

	<link rel="stylesheet" href="{{asset('styles/assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('styles/assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('styles/assets/css/main.css')}}">
	<!-- Slider Pro Css -->
	<link rel="stylesheet" href="{{asset('styles/assets/css/sliderPro.css')}}">
	<!-- Owl Carousel Css -->
	<link rel="stylesheet" href="{{asset('styles/assets/css/owl-carousel.css')}}">
	<!-- Flat Icons Css -->
	<link rel="stylesheet" href="{{asset('styles/assets/css/flaticon.css')}}">
	<!-- Animated Css -->
	<link rel="stylesheet" href="{{asset('styles/assets/css/animated.css')}}">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    <script src="{{asset('styles/assets/js/jquery-1.11.0.min.js')}}"></script>

	<!-- Slider Pro Js -->
	<script src="{{asset('styles/assets/js/sliderpro.min.js')}}"></script>

	<!-- Slick Slider Js -->
	<script src="{{asset('styles/assets/js/slick.js')}}"></script>

	<!-- Owl Carousel Js -->
    <script src="{{asset('styles/assets/js/owl.carousel.min.js')}}"></script>

	<!-- Boostrap Js -->
    <script src="{{asset('styles/assets/js/bootstrap.min.js')}}"></script>

    <!-- Boostrap Js -->
    <script src="{{asset('styles/assets/js/wow.animation.js')}}"></script>

	<!-- Custom Js -->
    <script src="{{asset('styles/assets/js/custom.js')}}"></script>


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
					   {{-- <li><a href='login.html'><strong>Login</strong></a></li> --}}

                        @if (Route::has('login'))
                           @auth
                               <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                           @else
                               <li><a href="{{ route('login') }}"><strong>Login</strong></a></li>

                               @if (Route::has('register'))
                                   <li><a href="{{ route('register') }}">Register</a></li>
                               @endif
                           @endauth
                        @endif
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
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Rent</a>
									</div>
									<div class="thumb-inner p-5">
										<a href="single_car.html"><img src="https://www.toyota.astra.co.id/sites/default/files/2020-07/4_super%20white-min.png" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Toyota Land Cruiser</h4></a>
									<span>Rp. 2.134.232.000</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Sale</a>
									</div>
									<div class="thumb-inner p-5">
										<a href="single_car.html"><img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/2-silver-metallic.png" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Toyota Fortuner</h4></a>
									<span>Rp. 523.000.000</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Rent</a>
									</div>
									<div class="thumb-inner p-5">
										<a href="single_car.html"><img src="https://www.toyota.astra.co.id/sites/default/files/2020-07/3_silver%20metallic.png" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Toyota Hiace</h4></a>
									<span>Contact US</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-item">
						<div class="about-us">
							<h2>About Us</h2>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's. Intelligentsia as actually +1 meh photo booth.</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="what-offer">
							<h2>What We Offer ?</h2>
							<ul>
								<li><a href="#">Rent a car now</a></li>
								<li><a href="#">Search for sale</a></li>
								<li><a href="#">Try search form</a></li>
								<li><a href="#">Best daily dealers</a></li>
								<li><a href="#">Weekly lucky person</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="need-help">
							<h2>Need Help ?</h2>
							<ul>
								<li><a href="#">Modern wheels</a></li>
								<li><a href="#">Awesome spoilers</a></li>
								<li><a href="#">Dynamic Enetrior</a></li>
								<li><a href="#">Save accidents </a></li>
								<li><a href="#">Recorded Racing</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2 ml-auto">
					<div class="footer-item">
						<div class="quick-search">
							<h2>Quick Search</h2>
							<input type="text" class="footer-search" name="s" placeholder="Search..." value="">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="sub-footer">
						<p>Copyright 2021. All rights reserved by: <a href="#">Unezira Team</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>




</body>
</html>
