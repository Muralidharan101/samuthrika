<?php include '../dashboard/main/ajax/datab.php'; ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/prodcut-360-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:29:58 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Samuthrika Academy Beautician Courses Abroad</title>

    <!--BootStrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path;?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/plugins.css">
    <!-- Photoswipe Gallery CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/vendor/photoswipe.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/responsive.css">
</head>
<style>
    .footer-img {
        margin-bottom: 14px;
    }



    .lang [id^="c"]:checked {
        accent-color: orange;
    }

    .table tbody tr td input:checked {
        color: orange;
        /* Change this to your desired background color */
    }
</style>


<body class="template-product prodcut-360-view">
    <!--Page Wrapper-->
    <div class="page-wrapper">


        <!--Header-->
        <?php include '../header.php';?>
        <!--End Header-->
        <!--Mobile Menu-->
        <?php include '../sidebar.php';?>
        <!--End Mobile Menu-->

        <!-- Body Container -->
        <div id="page-content">


            <div class="section-header">
                <h1 style="font-size:2.3rem" class="pt-4"> Beautician <span style="color:orange;">Courses</span></h1>
            </div>

            <!--Main Content-->
            <div style="padding-top:-20px" class="container">
                <!--Product Content-->
                <div class="product-single">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                            <!-- Product Horizontal -->

                            <div class="product-details-img product-horizontal-style">
                                <!-- Product Main -->
                                <div class="zoompro-wrap ">

                                    <!-- Product Image -->
                                    <div class="zoompro-span ">

                                        <center>
                                            <img id="zoompro" class="w-50"
                                                src="<?php echo $path;?>assets/images/btc.png" alt="product" width="600"
                                                height="800" />
                                        </center>
                                    </div>
                                    <br><br>
                                    <!-- End Product Image -->


                                </div>
                                <!-- End Product Main -->


                                <!-- Product Gallery 
                                    <div class="lightboximages">
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/1.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/5.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/10.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/15.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/20.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/25.jpg" data-size="1000x1280"></a>
                                    </div>
                                     End Product Gallery -->

                            </div>
                            <!-- End Product Horizontal -->
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 product-layout-info">
                            <!-- Product Details -->
                            <div class="product-single-meta">

                                <div class="section-header">
                                    <h1 style="font-size:2.3rem" class="pt-4">Types Of <span
                                            style="color:orange;">Beautician Courses</span></h1>
                                </div>

                                <!-- Product Info -->
                                <table id="product-table" class="table table-striped table-dark text-white">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Course Title</th>
                                            <th>Duration</th>
                                            <th>Actual Price</th>
                                            <th>Discounted Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c1" name="course" type="checkbox"
                                                        value="Basic Certificate Course in Skin & Beauty" />

                                                </div>
                                            </td>
                                            <td>Basic Certificate Course in Skin & Beauty</td>
                                            <td>360 hrs</td>
                                            <td>22000</td>
                                            <td>17000</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c2" name="course" type="checkbox"
                                                        value="Advanced Certificate Course in Skin & Beauty" />

                                                </div>
                                            </td>
                                            <td>Advanced Certificate Course in Skin & Beauty</td>
                                            <td>240 hrs</td>
                                            <td>22000</td>
                                            <td>17000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c3" name="course" type="checkbox"
                                                        value="Diploma Course in Skin & Beauty" />

                                                </div>
                                            </td>
                                            <td>Diploma Course in Skin & Beauty</td>
                                            <td>600 hrs</td>
                                            <td>35000</td>
                                            <td>30000</td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c4" name="course" type="checkbox"
                                                        value="Basic Certificate in Course in Hair" />

                                                </div>
                                            </td>
                                            <td>Basic Certificate in Course in Hair</td>
                                            <td>360 hrs</td>
                                            <td>28000</td>
                                            <td>23000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c5" name="course" type="checkbox"
                                                        value="Advance Certificate in Course in Hair" />

                                                </div>
                                            </td>
                                            <td>Advance Certificate in Course in Hair</td>
                                            <td>480 hrs</td>
                                            <td>28000</td>
                                            <td>23000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c6" name="course" type="checkbox"
                                                        value="Diploma Course in Hair" />

                                                </div>
                                            </td>
                                            <td>Diploma Course in Hair</td>
                                            <td>720 hrs</td>
                                            <td>47500</td>
                                            <td>43500</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c7" name="course" type="checkbox"
                                                        value="Diploma in Skin, Beauty and Hair" />

                                                </div>
                                            </td>
                                            <td>Diploma in Skin, Beauty and Hair</td>
                                            <td>720 hrs</td>
                                            <td>42000</td>
                                            <td>37000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c8" name="course" type="checkbox"
                                                        value="Advance Diploma in Skin, Beauty and Hair" />

                                                </div>
                                            </td>
                                            <td>Advance Diploma Course in Skin, Beauty and Hair</td>
                                            <td>720 hrs</td>
                                            <td>42000</td>
                                            <td>37000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c9" name="course" type="checkbox"
                                                        value="Professional Course in Grooming" />

                                                </div>
                                            </td>
                                            <td>Professional Course in Grooming</td>
                                            <td>1320 hrs</td>
                                            <td>75000</td>
                                            <td>70000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c10" name="course" type="checkbox"
                                                        value="Master Diploma in Grooming" />

                                                </div>
                                            </td>
                                            <td>Master Diploma in Grooming</td>
                                            <td>1560 hrs</td>
                                            <td>88000</td>
                                            <td>83000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c11" name="course" type="checkbox"
                                                        value="Certificate Course in Make-Up Artistry" />

                                                </div>
                                            </td>
                                            <td>Certificate Course in Make-Up Artistry</td>
                                            <td>240 hrs</td>
                                            <td>28500</td>
                                            <td>23500</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c12" name="course" type="checkbox"
                                                        value="Certificate Course in Bridal Make Over" />

                                                </div>
                                            </td>
                                            <td>Certificate Course in Bridal Make Over</td>
                                            <td>360 hrs</td>
                                            <td>48500</td>
                                            <td>43500</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c13" name="course" type="checkbox"
                                                        value="Certificate Course in Hair Dressing" />

                                                </div>
                                            </td>
                                            <td>Certificate Course in Hair Dressing</td>
                                            <td>160 hrs</td>
                                            <td>12000</td>
                                            <td>7000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c14" name="course" type="checkbox"
                                                        value="Certificate Course in Personal Grooming" />

                                                </div>
                                            </td>
                                            <td>Certificate Course in Personal Grooming</td>
                                            <td>80 hrs</td>
                                            <td>12000</td>
                                            <td>7000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c15" name="course" type="checkbox"
                                                        value="Certificate Course in Mehandi" />

                                                </div>
                                            </td>
                                            <td>Certificate Course in Mehandi</td>
                                            <td>80 hrs</td>
                                            <td>12000</td>
                                            <td>7000</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check lang">


                                                    <input id="c16" name="course" type="checkbox"
                                                        value="Certificate Course in Nail Art" />

                                                </div>
                                            </td>
                                            <td>Certificate Course in Nail Art</td>
                                            <td>80 hrs</td>
                                            <td>12000</td>
                                            <td>7000</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <!-- End Product Info -->


                            </div>
                            <!-- End Product Details -->


                            <!-- Product Form -->
                            <!-- <form method="post" action="#" class="product-form product-form-border hidedropdown"> -->
                            <!-- Product Action -->
                            <div class="product-action w-100 d-flex-wrap mb-2">


                                <!-- Product Add -->
                                <div class="product-form-submit addcart fl-1 ms-0 mt-0">
                                    <button id="submit" name="add"
                                        class="btn btn-secondary product-form-cart-submit"><span>Add to
                                            cart</span></button>
                                </div>
                                <!-- Product Add -->

                            </div>
                            <!-- End Product Action -->

                            <!-- </form> -->
                            <!-- End Product Form -->

                            <!-- Social Sharing -->
                            <div class="social-sharing d-flex-center mt-2 lh-lg">
                                <span class="sharing-lbl fw-600">Share :</span>

                                <!-- Copy to Clipboard Button -->
                                <button class="d-flex-center btn btn-link btn--share copy-to-clipboard"
                                    onclick="copyToClipboard()">
                                    <i class="icon anm anm-share"></i>
                                </button>
                            </div>
                            <!-- End Social Sharing -->
                        </div>
                    </div>
                </div>
                <!--Product Content-->

                <!--Product Tabs-->
                <div class="tabs-listing section pb-0">
                    <ul
                        class="product-tabs style3 border-bottom list-unstyled d-flex-wrap d-flex-justify-center d-none d-md-flex">
                        <li rel="description" class="active"><a class="tablink">Description</a></li>

                    </ul>

                    <div class="tab-container">
                        <!--Description-->
                        <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
                        <div id="description" class="tab-content">
                            <div class="product-description">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-0 mb-md-0">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. the majority have suffered alteration in some
                                            form randomised words which don't look even slightly believable.</p>
                                        <h4 class="mb-3">Features</h4>
                                        <ul class="checkmark-info">
                                            <li>High quality fabric, very comfortable to touch and wear.</li>
                                            <li>This cardigan sweater is cute for no reason,perfect for travel and
                                                casual.</li>
                                            <li>It can tie in front-is forgiving to you belly or tie behind.</li>
                                            <li>Light weight and perfect for layering.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Description-->




                    </div>
                </div>
                <!--End Product Tabs-->
            </div>
            <!--End Main Content-->

        </div>
        <!-- End Body Container -->

        <!--Footer-->
        <?php include '../footer.php';?>
        <!--End Footer-->

        <!--Scoll Top-->
        <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
        <!--End Scoll Top-->





        <!-- Including Jquery/Javascript -->
        <!-- Plugins JS -->
        <script src="<?php echo $path;?>assets/js/plugins.js"></script>

        <!-- Elevatezoom Zoom -->
        <script src="<?php echo $path;?>assets/js/vendor/jquery.elevatezoom.js"></script>
        <script>
            $(document).ready(function () {
                /* Product Zoom */
                function product_zoom() {
                    $(".zoompro").elevateZoom({
                        gallery: "gallery",
                        galleryActiveClass: "active",
                        zoomWindowWidth: 300,
                        zoomWindowHeight: 100,
                        scrollZoom: false,
                        zoomType: "inner",
                        cursor: "crosshair"
                    });
                }
                product_zoom();
            });
        </script>

        <!-- Main JS -->
        <script src="<?php echo $path;?>assets/js/main.js"></script>

        <!-- Photoswipe Gallery JS -->
        <script src="<?php echo $path;?>assets/js/vendor/photoswipe.min.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script>
            function copyToClipboard() {
                // Get the text you want to copy (replace with your actual URL or content)
                var textToCopy = window.location.href;

                // Create a temporary input element
                var tempInput = document.createElement("input");
                tempInput.setAttribute("value", textToCopy);
                document.body.appendChild(tempInput);

                // Select the text in the input element
                tempInput.select();
                tempInput.setSelectionRange(0, 99999); // For mobile devices

                // Execute the "copy" command
                document.execCommand("copy");

                // Remove the temporary input element
                document.body.removeChild(tempInput);

                // Optionally, provide feedback to the user
                toastr.info("Link copied ");
            }

            $("#submit").click(function () {
                var courses = $('input[name="course"]:checked');

                if (courses.length === 0) {
                    toastr.error("Please Select at Least One Course Before Purchase");
                } else {
                    // Clear the existing list or container content

                    // Array to store selected course values
                    var selectedCourses = [];
                    // Reset the table without adding the courses
                    $("#product-table tbody").find("input[type='checkbox']").prop('checked', false);

                    // Iterate through each selected course, append it to the list, and add to the array
                    courses.each(function () {
                        var course = $(this).val();
                        $("#selected-courses-list tbody").append('<tr><td>' + course + '</td></tr>');
                        selectedCourses.push(course);
                    });

                    // Convert the array to a comma-separated string
                    var coursesString = selectedCourses.join(', ');

                    // Your existing code for AJAX request goes here
                    var fd = new FormData();
                    fd.append("courses", coursesString);

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
        </script>


        <!-- Threesixty JS -->
        <script src="<?php echo $path;?>assets/js/vendor/jquery.threesixty.min.js"></script>
        <script src="<?php echo $path;?>assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
        <!-- Threesixty Gallery -->


    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/prodcut-360-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:21 GMT -->

</html>