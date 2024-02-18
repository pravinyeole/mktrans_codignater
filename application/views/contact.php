<?php include("header.php") ?>
    <!-- Banner -->
    <section role="banner">
        <div class="innerBanner">
            <img src="<?= base_url('assets/img/inner-contact-banner.jpg" alt="Services" class="img-fluid w-100')?>" />
            <div class="caption">
                <div class="container"><h1>About Us</h1></div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="map pt-5">
        <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.8145818650064!2d73.72514997601566!3d19.974298523157284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddec95a5abe73f%3A0xb5f44a1e23ffd43e!2sMk%20Transport%20Company!5e0!3m2!1sen!2sus!4v1706440906261!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- About Start -->
    <div class="container overflow-visible py-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-7 about-text wow fadeInUp" data-wow-delay="0.3s">
                     <div class="bg-white text-start py-0 pe-lg-5 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <h1 class="mb-2 f36">Contact Us</h1>
                        <p class="mb-5 dark-text">Do you have queries and not sure who to contact? Clients and associates, we are here to help you and revert to any concerns you might have. Please complete the form to get in touch or e-mail us at info@mktransport.in, we assure you an immediate response.</p>
                        <?php if($this->session->flashdata('msg')): ?>
                            <p style="color:green;"><?php echo $this->session->flashdata('msg'); ?></p>
                        <?php endif; ?>
                        <form method="post" action="<?= site_url('index.php/Quote/quote_insert') ?>">
                                <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" name="company_name" placeholder="Your Company Name" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" name="name" placeholder="Your Name" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" name="email" placeholder="Your Email" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" name="mobile_number" placeholder="Your Mobile" style="height: 55px;" onkeypress="return onlyNumberKey(event)" required="" pattern="[0-9]{10}">
                                </div>
                                <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" name="to_location" placeholder="My Location" style="height: 55px;" required="">
                                </div>
                                <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" name="from_location" placeholder="Enter Destination" style="height: 55px;" required="">
                                </div>
                                <div class="col-12">
                                        <textarea class="form-control border-0" name="desc" placeholder="Material Description" required=""></textarea>
                                </div>
                                <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="contact-details">
                        <ul class="list-unstyled contact-page-details__list">
                                <li>
                                        <span>Call Us On</span>
                                        <p><a href="#" target="_blank">MK Transport</a><br>
                                        <a href="tel:800 355 7447" target="_blank">+91 75885 54482</a></p>
                                </li>
				                <!-- <li>
                                    <span>Landline</span>
                                    <p><a href="tel:+912536622907" target="_blank">+91-253-6622907</a></p>
                                    
                                </li> -->
                                <li>
                                    <span>Mobile</span>
                                    <!--<p><a href="tel:+971559362789" target="_blank">+971 55 936 2789</a></p>-->
                                    <p><a href="tel:+971569966830" target="_blank">+91 758 855 4482</a></p>
                                </li>
								
								 <li>
                                    <span>WhatsApp</span>
                                    <p><a href="https://wa.me/+917588554482?text=Hey%20MK%20Transport%20I%20would%20like%20to%20know%20more%20about%20your%20services?" target="_blank">+91 758 855 4482</a></p>
                                </li>
								
                                <li>
                                    <span>Send Email</span>
                                    <p><a href="mailto:info@mktransport.in" target="_blank">mktransportcompany1199@gmail.com</a></p>
                                </li>
                                <li>
                                    <span>Corporate Office</span>
                                    <p>Sr. No.462, Ambad-Link Road,<br />Satpur, Nashik<br />Maharashtra, India</p>
                                </li>
                            </ul>
                            <div class="contact-page-details__social">
                              
                                <!-- <a href="https://www.facebook.com/" target="_blank"><img src="<?= base_url('assets/img/facebookft.png') ?>"></a> -->
                                    
                                <!-- <a href="https://www.instagram.com/" target="_blank"><img src="<?= base_url('assets/img/instagramft.png')?>"></a> -->
                                     
                                <!-- <a href="https://twitter.com/" target="_blank"><img src="<?= base_url('assets/img/twitterft.png')?>"></a> -->
                                        
                                 
                                <a href="https://wa.me/+917588554482?text=Hey%20MK%20Transport%20I%20would%20like%20to%20know%20more%20about%20your%20services?" target="_blank"><img src="<?php site_url('assets/img/whatsappft.png')?>"></a>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Clients -->
    <div class="container-fluid">
        <div class="section clients text-center">
            <h6 class="text-primary text-uppercase mb-3 f18 font-weight-400 wow fadeInUp">Our Clients</h6>
            <h2 class="mb-5 f30 font-weight-900 text-capitalize wow fadeInUp">Trusted by Clients</h2>
            <div class="owl-carousel client-slider">
                <div class="client-list" data-tooltip="tooltip" title="Mahindra EPC Irrigation Limited">
                    <img src="<?= site_url('assets/img/1200px-Mahindra_EPC_Logo.svg.png')?>" alt="">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Garware Technical Fibres Limited">
                    <img src="<?= site_url('assets/img/garware-logo.png')?>" alt="Garware Technical Fibres Limited">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Tritech Disconnecters IND Pvt Ltd">
                    <img src="<?= site_url('assets/img/tritech.jpg')?>" alt="Tritech Disconnecters IND Pvt Ltd">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Sahyadri Farms">
                    <img src="<?= site_url('assets/img/Sahyadri_logo.svg')?>" alt="Sahyadri Farms">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Apras">
                    <img src="<?= site_url('assets/img/APRAS_Master_Logo.png')?>" alt="Apras">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Go Gas Limited">
                    <img src="<?= site_url('assets/img/Gogas_logo.png')?>" alt="Go Gas Limited">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Popular Switchgears Pvt Ltd">
                    <img src="<?= site_url('assets/img/ps-logo.jpg')?>" alt="Popular Switchgears Pvt Ltd">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Huphen Electromech">
                    <img src="<?= site_url('assets/img/he.png')?>" alt="Huphen Electromech">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Hexagone Graphite">
                    <img src="<?= site_url('assets/img/Hexagon_logo.png')?>" alt="Hexagone Graphite">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Epcos">
                    <img src="<?= site_url('assets/img/Epcos-Logo.png')?>" alt="Epcos">
                </div>
                <div class="client-list" data-tooltip="tooltip" title="Dham Fasteners">
                    <img src="<?= site_url('assets/img/dham-fasteners.jpg')?>" alt="Dham Fasteners">
                </div>
            </div>
        </div>
    </div>
    <!-- Clients End -->

    <?php include("footer.php"); ?>
