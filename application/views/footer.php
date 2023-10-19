    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sr. No.462, Ambad-Link Road, Satpur, Nashik</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 75885 54482</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>mktransportcompany1199@gmail.com</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="#">Road Freight</a>
                    <a class="btn btn-link" href="#">Logistic Solutions</a>
                    <a class="btn btn-link" href="#">Industry solutions</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <!-- <a class="btn btn-link" href="<?= site_url('about');?>">About Us</a> -->
                    <a class="btn btn-link" href="<?= site_url('services');?>">Contact Us</a>
                    <a class="btn btn-link" href="<?= site_url('contact');?>">Our Services</a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->
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
    <script src="<?= site_url('assets/lib/wow/wow.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/easing/easing.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/waypoints/waypoints.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/counterup/counterup.min.js');?>"></script>
    <script src="<?= site_url('assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>

    <!-- Template Javascript -->
    <script src="<?= site_url('assets/js/main.js');?>"></script>
</body>

</html>