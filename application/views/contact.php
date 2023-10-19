<?php include("header.php") ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">Request A Free Qoute!</h1>
                    <p class="mb-4">Are you ready to experience hassle-free transportation solutions with Mk Transport Company? Get started by requesting a free, no-obligation quote today! We're here to provide you with competitive pricing and personalized service tailored to your specific needs.</p>
                    <div class="bg-light p-4">
                        <form method="post" action="#">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="company_name" placeholder="Your Company Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="mobile_number" placeholder="Your Mobile" style="height: 55px;" onkeypress="return onlyNumberKey(event)" required pattern="[0-9]{10}">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="to_location" placeholder="My Location" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="from_location" placeholder="Enter Destination" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name="desc" placeholder="Material Description" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5504.36867341608!2d73.72284233387886!3d19.976933183896328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddec95a5abe73f%3A0xb5f44a1e23ffd43e!2sMk%20Transport%20Company!5e0!3m2!1sen!2sin!4v1696086184928!5m2!1sen!2sin" 
                            frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include("footer.php"); ?>