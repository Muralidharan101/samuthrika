<?php include '../dashboard/main/ajax/datab.php'; ?> 

<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/faqs-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:37:47 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Faq's Page - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $path ?>assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="<?php echo $path ?>assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo $path ?>assets/css/style-min.css">
        <link rel="stylesheet" href="<?php echo $path ?>assets/css/responsive.css">
    </head>
<style>
           body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        #sticky-button {
            position: fixed;
            top: 60%;
            right: 0;
            transform: translateY(-50%);
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
            transition: right 0.3s ease;
        }

        #sticky-button:hover {
            right: 10px;
        }

        #form-container {
            display: none;
            position: fixed;
            top: 60%;
            right: 0;
            transform: translateY(-50%);
            background-color: #f2f2f2;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            max-width: 300px;
            width: 100%;
        }

        #close-form {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
textarea{
    resize: none;
}
.contact-form {
    max-width: 400px; /* Adjust the max-width as needed */
    margin: 0 auto;
}

.form-row {
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 10px;
}

.btn {
    width: 100%;
}

#product-nav{
    display: block;
}
        /* Add media query for responsiveness */
        /* @media screen and (max-width: 768px) {
            #sticky-button {
                display: block;
            }

            #form-container {
                width: 100%;
                left: 0;
                right: unset;
                border-radius: 0;
            }
        } */

</style>
    <body class="faq-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
       
        <?php include('../header.php'); ?>
            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1>Beautitian Service</h1></div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">
                    <!-- Frequently Content -->
                    <!-- <div class="row help-center mb-4 mb-md-0">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-6 mx-auto">
                            <h2 class="mb-3 text-center">Frequently Asked Questions</h2>
                            <form class="frequently-search" id="frequentlysearch" action="#" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control input-group-field" name="search" value="" placeholder="Search…" required />
                                    <button type="submit" class="input-group-btn btn btn-secondary" name="search" style="background-color:#fe0609;">Search</button>
                                </div>
                            </form>
                        </div>
                    </div> -->
                  
                    <!-- End Frequently Content -->
                    <a href="#" class="product-nav d-flex-center justify-content-between" title="Next Product">
                    <button id="sticky-button">Click to Enquiry</button>
    <div id="form-container">
        <span id="close-form">X</span><br>
        <div name="contactus" method="post" id="contact-form" class="contact-form" style="display: block;">
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" id="name" name="shoulder" class="form-control" placeholder="Name">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <input type="email" id="email" name="weist" class="form-control" placeholder="Email">
                                                    <span class="error_msg" id="email_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" id="phone" name="neck" placeholder="phone">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <input type="tel" id="enquiry" name="hand" class="form-control" placeholder="Enquiey">
                                                    <span class="error_msg" id="subject_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="text_others" name="text_others" class="form-control" placeholder="Address"></textarea>
                                                <span class="error_msg" id="subject_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mailsendbtn mb-0 w-100">
                                                    <input class="btn btn-sm" type="submit" name="contactus" value="Submit" id="submit-form">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    </div>


                    </a>
                    <!-- Faq's Style -->
                    <div class="row faqs-style mt-4 mt-md-0">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 mx-auto">
                            <div class="accordion" id="accordionFaq">
                                <div class="section pt-0">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed fs-6 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Skin</button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body ">
                                                <p class>Skin care - Treatments</p>
                                                
                                                <p>Body Care</p>   

                                                <p>Skin Care</p>
                                                
                                                <p>Skin Care - Basics</p>
                                                
                                                <p>Skin Care - Deplication</p>
                                                
                                                <p>Consultation</p>

                                            </div>
                                        </div>
                                    </div>

                                           
                                    <div class="accordion-item ">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed fs-6 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Hair</button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                                <p> Form</p>
                                                <p> Hair care</p>
                                                <p> Colours</p>
                                                <p> Styling</p>
                                                <p> Haircut</p>
                                                <p> Consultation</p>
                                            </div>
                                        </div>
                                    </div>
                               
           
                                    
                                    

                            
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed fs-6 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Makeup</button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                            <p> Styling</p>
                                                <p>Saree Drape</p>
                                                <p>Makeup</p>
                                                <p>Outdoors</p>
                                                
                                                <p> Consultation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed fs-6 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Hands & Feet</button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                            <p> Hand Care</p>
                                                <p> Feet care</p>
                                                <p> Nails</p>
                                                <p> Consultation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed fs-6 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Service - Women</button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body">
                                            <p> Skin</p>
                                                <p>Hair</p>
                                                <p> Makeup</p>
                                                <p> Hands & Feet</p>    
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed fs-6 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Bridal</button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <!-- End Faq's Style -->
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->


            <!--Scoll Top-->
            <div id="site-scroll" class="rounded-circle" style="display: block;"><i class="icon anm anm-angle-up-r"></i></div>
            <!--End Scoll Top-->

            <!--Footer-->
            <?php include('../footer.php'); ?>
            <!--End Footer-->
            

            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="<?php echo $path ?>assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?php echo $path ?>assets/js/main.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <script>
                        var stickyButton = document.getElementById('sticky-button');
        var formContainer = document.getElementById('form-container');
        var closeForm = document.getElementById('close-form');

        stickyButton.addEventListener('click', function () {
            formContainer.style.display = 'block';
        });

        closeForm.addEventListener('click', function () {
            formContainer.style.display = 'none';
        });

        stickyButton.addEventListener('mouseenter', function () {
            stickyButton.style.right = '10px';
        });

        stickyButton.addEventListener('mouseleave', function () {
            stickyButton.style.right = '0';
        });

        $(document).ready(function () {
            $("#submit-form").click(function () {
                     
            var username = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var enquiry = document.getElementById('enquiry').value;
            var address = document.getElementById('text_others').value;

        if (username === '') {
            toastr.error('Error!', 'username is required!');
        } else if (email === '') {
            toastr.error('Error!', 'email is required!');
        }
        else if (enquiry === '') {
            toastr.error('Error!', 'phone is required!');
        }  
        else if (phone === '') {
            toastr.error('Error!', 'phone is required!');
        } else if (address === '') {
            toastr.error('Error!', 'address is required!');
        } 
        else {
    
                    var fd = new FormData();
                    fd.append("username", username);  
                    fd.append("email", email);  
                    fd.append("phone", phone);
                    fd.append("enquiry", enquiry);
                    fd.append("address", address);

                    var modal = $('#quickview_form');
                    modal.modal('hide');

                    $.ajax({
                        url: 'ajax',
                        type: 'post',
                        processData: false,
                        contentType: false,
                        data: fd,

                        success: function (response) {
                            var result = JSON.parse(response);

                            if (result.status == 'Success') {
                                toastr.success("Course Successfully Added ", "Success")
                            } else {
                                toastr.error("Unable to Add", "Error")
                            }
                        }
                    })
                }
            });
            });

            </script>

        </div>
        <!--End Page Wrapper-->
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/faqs-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:37:47 GMT -->
</html>
