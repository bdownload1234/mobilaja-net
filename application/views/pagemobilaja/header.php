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

    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/pagemobilaja/login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/pagemobilaja/login/vendor/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/pagemobilaja/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/pagemobilaja/login/vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/pagemobilaja/login/vendor/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/pagemobilaja/login/vendor/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/login/css/util.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/login/css/main.css" />
    <!--===============================================================================================-->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/css/main.css" />
    <!-- Slider Pro Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/css/sliderPro.css" />
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/css/owl-carousel.css" />
    <!-- Flat Icons Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/css/flaticon.css" />
    <!-- Animated Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/pagemobilaja/css/animated.css" />
    <style>
        .wrap-login100 {
            margin-top: 70px;
        }

        @media only screen and (min-widht: 300px) and (max-width: 600px) {
            .wrap-login100 {
                margin-top: 70px;
            }
        }
    </style>

    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <script src="<?= base_url() ?>/assets/pagemobilaja/js/jquery-1.11.0.min.js"></script>

    <!-- Slider Pro Js -->
    <script src="<?= base_url() ?>/assets/pagemobilaja/js/sliderpro.min.js"></script>

    <!-- Slick Slider Js -->
    <script src="<?= base_url() ?>/assets/pagemobilaja/js/slick.js"></script>

    <!-- Owl Carousel Js -->
    <script src="<?= base_url() ?>/assets/pagemobilaja/js/owl.carousel.min.js"></script>

    <!-- Boostrap Js -->
    <script src="<?= base_url() ?>/assets/pagemobilaja/js/bootstrap.min.js"></script>

    <!-- Boostrap Js -->
    <script src="<?= base_url() ?>/assets/pagemobilaja/js/wow.animation.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url() ?>/assets/pagemobilaja/js/custom.js"></script>
    

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
                    <a href="<?= base_url('page_mobilaja') ?>"></a>
                </div>
                <div id='cssmenu'>
                    <ul>
                        <li><a href='<?= base_url('page_mobilaja') ?>'>Homepage</a></li>
                        <!-- <li class='active'><a href='#'>Car Listing</a>
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
					   	</li> -->
                        <li><a href='about_us.html'>About Us</a></li>
                        <li><a href='http://wa.me/089503037403'>Kontak Kami(WA)</a></li>
                        <?php if (!$this->session->has_userdata('email')) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('page_mobilaja/registrasi') ?>">Buat Akun</a>
                            </li>
                            <li class="nav-itme">
                                <a class="nav-link" href="<?= base_url('page_mobilaja/login') ?>">Masuk</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-itme">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                            </li>
                        <?php endif; ?>

                        <?php if ($this->session->has_userdata('email')) : ?>
                            <?php if ($this->session->has_userdata('role')) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('admin/profil') ?>"> Lihat Profil </a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <?php if ($this->session->has_userdata('role')) : ?>
                                    <a class="nav-link" href="<?= base_url('admin/career') ?>">Posting Iklan</a>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-dark" href="<?= base_url('user/logout') ?>">Logout</a>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>