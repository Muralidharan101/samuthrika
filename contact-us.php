<?php include 'dashboard/main/ajax/datab.php'; ?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/contact-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:37 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Contact Us Style1 - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path;?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/responsive.css">
</head>

<style>
    /*.navigation{
        transform: translate(20%,-5%);
    }*/
    #siteNav li {
        padding-inline-start: 25px;
    }

    .footer-img {
        margin-bottom: 14px;
    }

    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

<body class="contact-page contact-style1-page">
    <!--Page Wrapper-->
    <div class="page-wrapper">



        <!--Header-->
        <?php include 'header.php';?>
        <!--End Header-->

        <!--Mobile Menu-->
        <?php include 'sidebar.php';?>
        <!--End Mobile Menu-->

        <!-- Body Container -->
        <div id="page-content">
            <!--Page Header-->

            <!--End Page Header-->

            <!--Main Content-->
            <div class="container contact-style1 mt-5">
                <!-- Contact Form - Details -->
                <div class="contact-form-details section pt-0">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <!-- Contact Form -->
                            <div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
                                <div class="section-header">
                                    <h2>Contact Now</h2>
                                    <p>Communication is the key to understanding. Drop us a line, and let's unlock the
                                        possibilities together."</p>
                                </div>

                                <div name="contactus" id="contact-form" class="contact-form">
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="name" class="form-control"
                                                    placeholder="Name" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" id="ContactFormEmail" name="email"
                                                    class="form-control" placeholder="Email" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="number" id="ContactFormPhone"
                                                    name="phone"  placeholder="Phone Number" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="ContactSubject" name="subject"
                                                    class="form-control" placeholder="Subject" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="ContactFormMessage" name="message" class="form-control"
                                                    rows="5" placeholder="Message"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mailsendbtn mb-0 w-100">
                                                <button class="btn btn-lg" name="contactus"
                                                    style="background-color:orangered;" id="contact_submit">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="response-msg"></div>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <!-- Contact Details -->
                            <div class="contact-details bg-block">
                                <h3 class="mb-3 fs-5">Store information</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-2 address">
                                        <strong class="d-block mb-2">Address :<span class="slVariant ms-1 fw-bold"
                                                id="product_service"></span></strong>
                                        <div class="product-item swatches-image w-100 mb-3 swatch-0 option1"
                                            data-option-index="0">
                                            <ul class="d-flex-wrap pt-1 clearfix" id="serviceRadioContainer">
                                                <li class="customRadio me-3 mb-3">
                                                    <input name="swatch_service_radio" id="Tiruchirappalli"
                                                        value="Tiruchirappalli" type="radio"
                                                        onchange="updateAddress('Tiruchirappalli')" />
                                                    <label for="Tiruchirappalli" class="mb-0">Tiruchirappalli</label>
                                                </li>
                                                <li class="customRadio me-3 mb-3">
                                                    <input name="swatch_service_radio" id="Kumbakonam"
                                                        value="Kumbakonam" type="radio"
                                                        onchange="updateAddress('Kumbakonam')" />
                                                    <label for="Kumbakonam" class="mb-0">Kumbakonam</label>
                                                </li>
                                                <li class="customRadio me-3 mb-3">
                                                    <input name="swatch_service_radio" id="Kelambakkam"
                                                        value="Kelambakkam" type="radio"
                                                        onchange="updateAddress('Kelambakkam')" />
                                                    <label for="Kelambakkam" class="mb-0">Kelambakkam </label>
                                                </li>
                                                <li class="customRadio me-3 mb-3">
                                                    <input name="swatch_service_radio" id="Mogappair" value="Mogappair"
                                                        type="radio" onchange="updateAddress('Mogappair')" />
                                                    <label for="Mogappair" class="mb-0">Mogappair</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <div name="contactus" method="post" id="contact-form" class="contact-form">
                                        <p id="addressPlaceholder"><i
                                                class="icon anm anm-map-marker-al me-2 d-none"></i> </p>
                                    </div>
                                    <br>

                                    <li class="mb-2 phone"><strong>Phone :</strong><i
                                            class="icon anm anm-phone me-2 d-none"></i>
                                        <a><br>7904733124,<br>9843340141,<br>9361035207</a></li>
                                    <li class="mb-0 email"><strong>Email :</strong><i
                                            class="icon anm anm-envelope-l me-2 d-none"></i>
                                        <a><br>samuthrikaacademy@gmail.com<br>samuthrikaacademy2023@gmail.com</a></li>
                                </ul>
                                <hr>
                                <div class="open-hours">
                                    <strong class="d-block mb-2">Opening Hours</strong>
                                    <p class="lh-lg">
                                        Mon - Sat : 9:30 AM - 8:30 PM<br>
                                        Sunday: 11:00 AM - 5:00 PM
                                    </p>
                                </div>
                                <hr>
                                <div class="follow-us">
                                    <label class="d-block mb-3"><strong>Stay Connected</strong></label>
                                    <ul class="list-inline social-icons">
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Facebook"><i
                                                    class="icon anm anm-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Twitter"><i
                                                    class="icon anm anm-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Pinterest"><i
                                                    class="icon anm anm-pinterest-p"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Instagram"><i
                                                    class="icon anm anm-linkedin-in"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Google plus"><i
                                                    class="icon anm anm-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Whatsapp"><i
                                                    class="icon anm anm-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Contact Details -->
                        </div>
                    </div>
                </div>
                <!-- End Contact Form - Details -->

                <!-- Contact Map -->
                <!-- <div class="contact-maps section p-0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="map-section ratio ratio-16x9">
                                <iframe id="mapIframe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
                                    <div class="map-section-overlay rounded-0">
                                            <h3>Our store</h3>
                                            <div class="content mb-3">
                                                <p class="mb-2">123, The Company Name Inc,<br>Toronto, Canada</p>
                                                <p>Mon - Fri, 10am - 9pm<br>Saturday, 11am - 9pm<br>Sunday, 11am - 5pm</p>
                                            </div>
                                            <p><a href="https://www.google.com/maps?daddr=80+Spadina+Ave,+Toronto" class="btn btn-secondary btn-sm">Get directions</a></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    </div> -->

                <div class="row faqs-style mt-4 mt-md-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 mx-auto">
                        <div class="accordion" id="accordionFaq">
                            <div class="section pt-0">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed fs-6 " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">Tiruchirappalli</button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="map-section ratio ratio-16x9">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7837.750439487504!2d78.67490439650514!3d10.820860000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf5a195c72ca7%3A0x46e095381445fa48!2sSamuthrika%20Academy!5e0!3m2!1sen!2sin!4v1700548345811!5m2!1sen!2sin"
                                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                                        loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed fs-6 " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">Kumbakonam</button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="map-section ratio ratio-16x9">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3293.8658226075577!2d79.3890411298571!3d10.956674309107916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5533eb75bbdbb9%3A0x80c9177c63bbad78!2sSamuthrika%20Academy!5e0!3m2!1sen!2sin!4v1700548511156!5m2!1sen!2sin"
                                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                                        loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed fs-6 " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">Kelambakkam</button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="map-section ratio ratio-16x9">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.4751244224362!2d80.2287414!3d12.8125451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525a7e15df3d9f%3A0xa923201a74dc3858!2sTVH%20Ouranya%20Bay!5e0!3m2!1sen!2sin!4v1700549080810!5m2!1sen!2sin"
                                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                                        loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed fs-6 " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">Mogappair</button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="map-section ratio ratio-16x9">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2672104708777!2d80.16848159999999!3d13.0822442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5263e11a2ac599%3A0xd3cdd51f7168d0a1!2sSri%20Sumangali%20Thanga%20Maligai!5e0!3m2!1sen!2sin!4v1700548988157!5m2!1sen!2sin"
                                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                                        loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- End Faq's Style -->
                    </div>
                    <!-- End Contact Map -->
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <div class="footer footer-5 ftr-bg-black">

                <!--Promo bar
                 <div class="ftr-promo-bar style1">
                     <div class="container">
                         <div class="promo-slider-1items">
                             <div class="item text-center d-flex d-flex-justify-center flex-column flex-sm-row text-uppercase">
                                 <span class="icon-text d-flex-justify-center mb-2 mb-sm-0 "><i class="fs-3 icon anm anm-truck-l me-2 me-sm-3"></i> <strong class="me-1">100% Fast Free Delivery</strong> Without Contacting The Courier</span>
                                 <a href="shop-top-filter.html" class="btn btn-light ms-sm-3">Order Now</a>                        
                             </div>                       
                         </div>
                     </div>
                 </div>
                 End Promo bar-->

                <div class="footer-top border-0 clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="footer-newsletter icon-arrow">
                                    <img src="<?php echo $path; ?>assets/images/samlogo.jpg"
                                        alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template"
                                        class="footer-img" width="250" height="70" /><br>
                                    <p>Samuthrika academy, is our educational institution, we offers specialized
                                        tutoring, instruction, or training to students or individuals seeking to improve
                                        their skills, knowledge, or performance in a particular subject, field, or area.
                                    </p>


                                    <ul class="list-inline social-icons d-inline-flex mt-3 pt-3">
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Facebook"><i
                                                    class="icon anm anm-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Twitter"><i
                                                    class="icon anm anm-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Pinterest"><i
                                                    class="icon anm anm-pinterest-p"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Linkedin"><i
                                                    class="icon anm anm-linkedin-in"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Instagram"><i
                                                    class="icon anm anm-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Youtube"><i
                                                    class="icon anm anm-youtube"></i></a></li>


                                    </ul>

                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links ps-lg-5">
                                <h4 class="h4">My Account</h4>
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="faqs-style1.html">Order History</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                                <h4 class="h4">Information</h4>
                                <ul>
                                    <li><a href="aboutus-style1.html">About Us</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="blog-grid.html">Latest News</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms &amp; condition</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-contact">
                                <h4 class="h4">Contact Info</h4>
                                <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> 10th Cross
                                    West Extension, Thillai Nagar, Trichy - 620018</p>
                                <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i> <b
                                        class="me-2 fw-400">Mobile.No</b> <a href="tel:401234567890">07947336473</a></p>
                                <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b
                                        class="me-1 d-none">Email:</b> <a
                                        href="mailto:info@example.com">info@example.com</a></p>
                                <p class="work-hour d-flex mb-0"><i class="icon anm anm-clock-r pt-1"></i><span
                                        class="hour-time">Working Hours: <br />Mon - Sun / 9:00 AM - 8:00 PM</span></p>

                            </div>
                        </div>

                    </div>
                    <p class="copytext" style="text-align:center;margin-top:2%;">&copy; Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Ducimus, exercitationem? Nostrum labore praesentium eaque suscipit
                        ipsa et mollitia officia adipisci consequuntur ratione veniam dolore enim maiores magnam,
                        pariatur aspernatur consectetur..</p>


                </div>

                <!--<div class="footer-bottom clearfix">
                     <div class="container">
                         <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse py-lg-1">
                            
                        
                         </div>
                     </div>
                 </div>-->

            </div>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll" style="background-color:orangered;"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->




            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="<?php echo $path;?>assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?php echo $path;?>assets/js/main.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
                integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
                integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                const ContactFormName = document.getElementById('ContactFormName').value;
                const ContactFormEmail = document.getElementById('ContactFormEmail').value;
                const ContactFormPhone = document.getElementById('ContactFormPhone').value;
                const ContactSubject = document.getElementById('ContactSubject').value;
                const ContactFormMessage = document.getElementById('ContactFormMessage').value;

                var addressSmall = document.getElementById("product_service");
                var addressElement = document.getElementById("addressPlaceholder");
                var address = "";
                var addressLite = "";

                let addressValue;

                function updateAddress(city) {
                    // Add logic to determine the address based on the selected city
                    if (city === "Tiruchirappalli") {
                        address =
                            "Samuthrika Academy, 10th Cross West Extension, Thillai Nagar, Trichy - 620018 (Next Green Trends).";
                        addressLite = 'Tiruchirappalli';
                    } else if (city === "Kumbakonam") {
                        address =
                            "Samuthrika Academy, No 20, New Railway Road, Kumbakonam Railway Station, Kumbakonam - 612001 (Opp).";
                        addressLite = 'Kumbakonam';
                    } else if (city === "Kelambakkam") {
                        address =
                            "Samuthrika Academy,TVH Ouranya Bay, Padur, Kelambakkam, Chennai - 603103 (Kazhipattur).";
                        addressLite = 'Kelambakkam';
                    } else if (city === "Mogappair") {
                        address =
                            "Samuthrika Academy,No 2, PC 7/B, 1st Floor, Bus Depo Main Road, Mogappair West, Chennai - 600037.";
                        addressLite = 'Mogappair';
                    }

                    // Update the address in the HTML
                    addressElement.textContent = address;
                    addressSmall.textContent = addressLite;

                    addressValue = address;

                    // Show the contact form
                    document.getElementById("contact-form").style.display = "block";
                    updateMapIframe(addressValue);
                }


                $(document).ready(function () {
                    $('#contact_submit').click(function (event) {
                        var ContactFormName = document.getElementById('ContactFormName').value;
                        var ContactFormEmail = document.getElementById('ContactFormEmail').value;
                        var ContactFormPhone = document.getElementById('ContactFormPhone').value;
                        var ContactSubject = document.getElementById('ContactSubject').value;
                        var ContactFormMessage = document.getElementById('ContactFormMessage').value;

                        if (ContactFormName === '') {
                            toastr.error('Error!', 'Name is required!');
                        } else if (ContactFormEmail === '') {
                            toastr.error('Error!', 'Email is required!');
                        } else if (ContactFormPhone === '') {
                            toastr.error('Error!', 'Phone number is required!');
                        } else if (ContactSubject === '') {
                            toastr.error('Error!', 'Subject is required!');
                        } else if (ContactFormMessage === '') {
                            toastr.error('Error!', 'Message is required!');
                        } else {




                            // Call your updateAddress function here with the selected city
                            // Example: updateAddress('Tiruchirappalli');


                            var fd = new FormData();

                            fd.append("ContactFormName", ContactFormName);
                            fd.append("ContactFormEmail", ContactFormEmail);
                            fd.append("ContactFormPhone", ContactFormPhone);
                            fd.append("ContactSubject", ContactSubject);
                            fd.append("ContactFormMessage", ContactFormMessage);
                            fd.append("ContactAddress", addressValue);

                            $.ajax({
                                url: 'ajax',
                                data: fd,
                                type: 'post',
                                contentType: false,
                                processData: false,
                                success: function (response) {
                                    var data = JSON.parse(response);
                                    console.log(data);
                                    if (data.status == 'Success') {
                                        toastr.success('Welcome!', 'Success');
                                    } else {
                                        toastr.error('Error!', 'Error Found!')
                                    }
                                }
                            });
                        }

                    });

                });
            </script>
        </div>
        <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/contact-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:41 GMT -->

</html>