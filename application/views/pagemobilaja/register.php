        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?= base_url() ?>/assets/pagemobilaja/login/images/img-01.png" alt="IMG" />
                    </div>
                    
                    <form class="login100-form validate-form" action="<?= base_url('admin/registrasi') ?>" method="post">
                        <span class="login100-form-title"> Member Sign Up </span>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="wrap-input100 validate-input" data-validate="Masukan Nama Lengkap">
                            <input class="input100" type="text" name="nama" placeholder="Nama" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-id-card" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Masukan Domisili Anda">
                            <input class="input100" type="text" name="domisili" placeholder="Domisili" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Masukan Provinsi Anda">
                            <input class="input100" type="text" name="provinsi" placeholder="Provinsi" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-compass" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Masukan Tanggal Lahir Anda">
                            <input class="input100" type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Contoh email yang valid: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Masukan Nomor Handphone">
                            <input class="input100" type="text" name="no_hp" placeholder="Nomor Handphone" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-hashtag" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <input class="input100" type="hidden" name="status" value="admin" />


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">Sign Up</button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1"> Forgot </span>
                            <a class="txt2" href="#"> Username / Password? </a>
                        </div>

                        <div class="text-center p-t-136">
                            <a class="txt2" href="#">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>/assets/pagemobilaja/login/vendor/bootstrap/js/popper.js"></script>
        <script src="<?= base_url() ?>/assets/pagemobilaja/login/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>/assets/pagemobilaja/login/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>/assets/pagemobilaja/login/vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $(".js-tilt").tilt({
                scale: 1.1,
            });
        </script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>/assets/pagemobilaja/login/js/main.js"></script>

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
        </body>

        </html>