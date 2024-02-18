<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-12">
                    <img src="<?= site_url('assets/img/logo-w.png')?>" alt="MK Transport" class="img-fluid mb-4" />
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with A wonderful serenity</p>
                </div>
                <div class="col-lg-3 col-md-6 pt-4">
                    <h2 class="text-white font-weight-700 mb-4">EXPLORE</h2>
                    <a class="btn btn-link" href="<?= site_url()?>">Home</a>
                    <a class="btn btn-link" href="<?= site_url().'frontend/about'?>">About us</a>
                    <a class="btn btn-link" href="<?= site_url().'frontend/services'?>">Our Services</a>
                    <a class="btn btn-link" href="<?= site_url().'frontend/contact'?>">Contact us</a>
                </div>
                <div class="col-lg-3 col-md-6 pt-4">
                    <h2 class="text-white font-weight-700 mb-4">Services</h2>
                    <a class="btn btn-link" href="<?= site_url().'frontend/services'?>">Warehousing</a>
                    <a class="btn btn-link" href="<?= site_url().'frontend/services'?>">Industrial Transport</a>
                    <a class="btn btn-link" href="<?= site_url().'frontend/services'?>">Domestic Shifting</a>
                    <a class="btn btn-link" href="<?= site_url().'frontend/services'?>">Loading and Unloading</a>
                </div>
                <div class="col-lg-3 col-md-6 pt-4">
                    <h2 class="text-white font-weight-700 mb-4">Address</h2>
                    <p class="mb-2 d-flex gap-2 mb-4"><i class="fa fa-map-marker-alt me-3"></i>Sr. No.462, Ambad-Link Road, Satpur, Nashik</p>
                    <p class="mb-2 d-flex gap-2 mb-4"><i class="fa fa-phone-alt me-3"></i>+91 75885 54482</p>
                    <p class="mb-2 d-flex gap-2 mb-2"><i class="fa fa-envelope me-3"></i>mktransportcompany1199@gmail.com</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                
            </div>
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 text-center text-lg-start">
                        <p class="elementor-heading-title elementor-size-default">© Copyright 2024 MK Transport.</p>
                    </div>
<!--                     <div class="col-12 col-lg-6 text-center text-lg-end">
                        <div class="social-icons d-flex align-items-center">
                            <a href="https://www.facebook.com/"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <a class="socialright shake" href="https://wa.me/+917588554482?text=Hey%20MK%20Transport%20I%20would%20like%20to%20know%20more%20about%20your%20services?" target="_blank"><img src="<?= site_url('assets/img/whtatsapp.png')?>"></a>
    
    <script>
        function onlyNumberKey(evt) {
             
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Modernizer JS -->
    <script src="<?= site_url('assets/js/vendor/modernizr-2.8.3.min.js')?>"></script>

    <!-- jQuery JS -->
    <script src="<?= site_url('assets/js/vendor/jquery.min.js')?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?= site_url('assets/js/vendor/bootstrap.min.js')?>"></script>

    <!-- Popper JS -->
    <script src="<?= site_url('assets/js/vendor/popper.min.js')?>"></script>

    <!-- Swiper Slider JS -->
    <script src="<?= site_url('assets/js/plugins/swiper.min.js')?>"></script>

    <!-- Tippy JS -->   
    <script src="<?= site_url('assets/js/plugins/tippy.min.js')?>"></script>
    <script src="<?= site_url('assets/lib/wow/wow.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/easing/easing.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/waypoints/waypoints.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/counterup/counterup.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>

    <!-- Template Javascript -->
    <script src="<?= site_url('assets/js/main.js');?>"></script>
</body>

</html>

