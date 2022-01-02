        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?= base_url() ?>/assets/pagemobilaja/login/images/img-01.png" alt="IMG" />
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="login100-form" action="<?= base_url('Admin/auth') ?>" method="post">
                        <span class="login100-form-title"> Member Login </span>

                        <div class="wrap-input100">
                            <input class="input100" type="email" name="email" placeholder="Email" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100">
                            <input class="input100" type="password" name="password" placeholder="Password" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">Login</button>
                        </div>


                        <div class="text-center p-t-136">
                            <a class="txt2" href="<?= base_url('Page_Mobilaja/registrasi') ?>">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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