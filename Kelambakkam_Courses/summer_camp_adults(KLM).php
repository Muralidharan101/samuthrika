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
    <title>Samuthrika Academy Summer Camp For Adults In Kelambakkam</title>
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


    .product-cat span a {
        text-align: right;
    }


    .hour #one,
    #two,
    #three {
        accent-color: black;

    }

    .sub #all,
    #sin {
        accent-color: black;
    }
</style>



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
            <!--Page Header-->
            <div class="page-header text-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <!--Breadcrumbs-->
                            <div class="breadcrumbs"><span class="main-title fw-bold">Summer camp</span>
                            </div>
                            <!--End Breadcrumbs-->

                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Main Content-->
            <div class="container">
                <!--Product Content-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                            <!-- Product Horizontal -->

                            <div class="product-details-img product-horizontal-style">
                                <!-- Product Main -->
                                <div class="zoompro-wrap">

                                    <!-- Product Image -->
                                    <div class="zoompro-span"><img id="zoompro" class="w-100"
                                            src="<?php echo $path;?>assets/images/summer.jpg"
                                            data-zoom-image="<?php echo $path;?>assets/images/summer.jpg" alt="product"
                                            width="600" height="800" /></div>
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

                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                            <!-- Product Details -->
                            <div class="product-single-meta">
                                <h2 class="product-main-title" style="text-transform: capitalize;">Summer Camp classes
                                </h2>
                                <!-- Product Info -->
                                <div class="product-info">
                                    <p class="product-cat"><i class="icon anm anm-clock-r"></i> Hours : <span>
                                            <div class="form-check hour">

                                                <input id="one" name="hour" type="radio" value="one" />

                                                <label for="one" class="me-3">1 hr/day ( 1 Course For One Month
                                                    )</label>
                                                <br>
                                                <input id="two" name="hour" type="radio" value="two" />

                                                <label for="two" class="me-3">2 hrs/day ( 2 Course For One
                                                    Month)</label>
                                                <br>
                                                <input id="three" name="hour" type="radio" value="three" />

                                                <label for="three" class="me-3">3 hrs/day ( 3 Course For One Month
                                                    )</label>

                                            </div>
                                        </span></p>
                                    </p>

                                    <script>
                                        var tooltipTriggerList = [].slice.call(document.querySelectorAll(
                                            '[data-bs-toggle="tooltip"]'))
                                        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                                            return new bootstrap.Tooltip(tooltipTriggerEl)
                                        })
                                    </script>

                                    <p class="product-cat"><i class="bi bi-book"></i> Classes :<button type="button"
                                            class="btn btn-light btn-lg" data-bs-toggle="tooltip" data-bs-placement="right"
                                            title="Select Courses Carefully">
                                            <i style="color:red;"class="anm anm-info-circle"></i>
                                        </button><span>
                                            <div class="sub">

                                                <select style="display:none" class="form-select w-50" name="class"
                                                    id="class1">
                                                    <option value="">---SELECT COURSE--</option>
                                                    <option value="bharathanatyam">Bharathanatyam</option>
                                                    <option value="Western Dance">Western Dance</option>
                                                    <option value="Keyboard">Keyboard</option>
                                                    <option value="Guitar">Guitar</option>
                                                    <option value="Drums">Drums</option>
                                                    <option value="Carnatic Vocal">Carnatic Vocal</option>
                                                    <option value="Violin">Violin</option>
                                                    <option value="Hand Writing">Hand Writing</option>
                                                    <option value="Speed Writing">Speed Writing</option>
                                                    <option value="Abacus">Abacus</option>
                                                    <option value="Spoken English">Spoken English</option>
                                                    <option value="Spoken Hindi">Spoken Hindi</option>
                                                    <option value="Calligraphy">Calligraphy</option>
                                                    <option value="Drawing / Painting">Drawing / Painting</option>
                                                </select>

                                                <select style="display:none" class="form-select w-50 mt-3" name="class"
                                                    id="class2">
                                                    <option value="">---SELECT COURSE--</option>
                                                    <option value="bharathanatyam">Bharathanatyam</option>
                                                    <option value="Western Dance">Western Dance</option>
                                                    <option value="Keyboard">Keyboard</option>
                                                    <option value="Guitar">Guitar</option>
                                                    <option value="Drums">Drums</option>
                                                    <option value="Carnatic Vocal">Carnatic Vocal</option>
                                                    <option value="Violin">Violin</option>
                                                    <option value="Hand Writing">Hand Writing</option>
                                                    <option value="Speed Writing">Speed Writing</option>
                                                    <option value="Abacus">Abacus</option>
                                                    <option value="Spoken English">Spoken English</option>
                                                    <option value="Spoken Hindi">Spoken Hindi</option>
                                                    <option value="Calligraphy">Calligraphy</option>
                                                    <option value="Drawing / Painting">Drawing / Painting</option>
                                                </select>

                                                <select style="display:none" class="form-select w-50 mt-3" name="class"
                                                    id="class3">
                                                    <option value="">---SELECT COURSE--</option>
                                                    <option value="bharathanatyam">Bharathanatyam</option>
                                                    <option value="Western Dance">Western Dance</option>
                                                    <option value="Keyboard">Keyboard</option>
                                                    <option value="Guitar">Guitar</option>
                                                    <option value="Drums">Drums</option>
                                                    <option value="Carnatic Vocal">Carnatic Vocal</option>
                                                    <option value="Violin">Violin</option>
                                                    <option value="Hand Writing">Hand Writing</option>
                                                    <option value="Speed Writing">Speed Writing</option>
                                                    <option value="Abacus">Abacus</option>
                                                    <option value="Spoken English">Spoken English</option>
                                                    <option value="Spoken Hindi">Spoken Hindi</option>
                                                    <option value="Calligraphy">Calligraphy</option>
                                                    <option value="Drawing / Painting">Drawing / Painting</option>
                                                </select>

                                            </div>
                                        </span></p>
                                    <p class="product-cat"><i class="icon anm anm-eye-r"></i> Mode :<span><a
                                                href="#">Offline
                                                Classes</a></span></p>

                                    <p class="product-cat"><i class="icon anm anm-calendar"></i> Days:<span><a
                                                href="#">Monday</a> <a href="#">-</a> <a href="#">Friday</a> </span></p>



                                    <!-- End Product Info -->

                                 
                                    <!-- Product Price -->
                                    <div class="product-price d-flex-center my-2">
                                        <span style="display:none" class="price old-price one-price">₹2,500</span><span
                                            style="display:none" class="price one-price">₹2000</span>
                                        <span style="display:none" class="price old-price two-price">₹4,500</span><span
                                            style="display:none" class="price two-price">₹4000</span>
                                        <span style="display:none"
                                            class="price old-price three-price">₹6,500</span><span style="display:none"
                                            class="price three-price">₹6000</span>
                                    </div>
                                    <!-- End Product Price -->

                                </div>
                                <!-- End Product Details -->

                                <!-- Product Form -->
                                <div class="product-form product-form-border hidedropdown">
                                    <!-- Product Action -->
                                    <div class="product-action w-100 d-flex-wrap mb-2">


                                        <!-- Product Add -->
                                        <div class="product-form-submit addcart fl-1 ms-0 mt-0">
                                            <button type="submit" name="add"
                                                class="btn btn-secondary product-form-cart-submit"><span>Add to
                                                    cart</span></button>
                                        </div>
                                        <!-- Product Add -->

                                    </div>
                                    <!-- End Product Action -->

                                </div>
                                <!-- End Product Form -->

                                <!-- Social Sharing -->
                                <div class="social-sharing d-flex-center mt-2 lh-lg">
                                    <span class="sharing-lbl fw-600">Share :</span>

                                    <a href="#" class="d-flex-center btn btn-link btn--share share-email"><i
                                            class="icon anm anm-share"></i><span class="share-title">Email</span></a>
                                </div>
                                <!-- End Social Sharing -->
                                <div class="trustseal-img mt-3 mt-md-4"><img
                                        src="<?php echo $path;?>assets/images/icons/powerby-cards.jpg"
                                        alt="powerby cards" width="470" /></div>
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
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. the majority have suffered
                                                alteration in some form randomised words which don't look even slightly
                                                believable.</p>
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
        </div>
    </div>
    </div>
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

            const one = $("#one");
            const two = $("#two");
            const three = $("#three");

            const class1 = $("#class1");
            const class2 = $("#class2");
            const class3 = $("#class3");

            const op = $(".one-price");
            const tp = $(".two-price");
            const thp = $(".three-price");

            function resetSelections() {
                class1.hide();
                class2.hide();
                class3.hide();
                op.hide();
                tp.hide();
                thp.hide();
            }

            resetSelections();

            function hideSelectedOption(selectBox, selectedValue) {
                selectBox.find('option').show();
                selectBox.find(`option[value="${selectedValue}"]`).hide();
            }

            $(one).change(function () {
                if (one.is(":checked")) {
                    resetSelections();
                    op.show();
                    class1.show();
                    hideSelectedOption(class2, class1.val());
                    hideSelectedOption(class3, class1.val());
                }
            });

            $(two).change(function () {
                if (two.is(":checked")) {
                    resetSelections();
                    tp.show();
                    class1.show();
                    class2.show();
                    hideSelectedOption(class3, class2.val());
                }
            });

            $(three).change(function () {
                if (three.is(":checked")) {
                    resetSelections();
                    thp.show();
                    class1.show();
                    class2.show();
                    class3.show();
                }
            });

        });




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
    <script>
        $(function () {
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function () {
                    var items = [];
                    $('.lightboximages a').each(function () {
                        var $href = $(this).attr('href'),
                            $size = $(this).data('size').split('x'),
                            item = {
                                src: $href,
                                w: $size[0],
                                h: $size[1]
                            };
                        items.push(item);
                    });
                    return items;
                };
            var items = getItems();

            $.each(items, function (index, value) {
                image[index] = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();

                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index - 1;

                var options = {
                    index: $index,
                    bgOpacity: 0.7,
                    showHideOpacity: true
                };
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
    </script>
    <div class="pswp" tabindex="-1" role="dialog">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Threesixty JS -->
    <script src="<?php echo $path;?>assets/js/vendor/jquery.threesixty.min.js"></script>
    <script src="<?php echo $path;?>assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
    <!-- Threesixty Gallery -->
    <script>
        window.onload = init;

        function init() {
            var product;
            if (!$(".threesixty_images li").length) {
                product1 = $('.threesixty').ThreeSixty({
                    totalFrames: 30, // Total no. of image you have for 360 slider
                    endFrame: 30, // end frame for the auto spin animation
                    currentFrame: 1, // This the start frame for auto spin
                    imgList: '.threesixty_images', // selector for image list
                    progress: '.spinner', // selector to show the loading progress
                    imagePath: '<?php echo $path;?>assets/images/products/360degree-images/', // path of the image <?php echo $path;?>assets
                    filePrefix: '', // file prefix if any
                    ext: '.jpg', // extention for the <?php echo $path;?>assets
                    height: 500,
                    width: 800,
                    responsive: false,
                    navigation: true
                });
            }
            $('.nav_bar_previous').bind('click', function (e) {
                product.previous();
            });
            $('.nav_bar_next').bind('click', function (e) {
                product.next();
            });
            $('.nav_bar_play').bind('click', function (e) {
                product.play();
            });
        }
    </script>

    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/prodcut-360-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:21 GMT -->

</html>