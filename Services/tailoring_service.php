<?php 
include '../dashboard/main/ajax/datab.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/product-layout5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:29:27 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Product Layout5 - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path; ?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/plugins.css">
    <!-- Photoswipe Gallery CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/vendor/photoswipe.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/responsive.css">
</head>
<style>
    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1050;
        display: none;
    }

    #quickview_modal {
        background: rgba(0, 0, 0, 0.5);
    }

    #first {
        width: 30px;
        height: 20px;
    }

    #text_others {
        resize: none;
    }
    
</style>

<body class="template-product product-layout5">
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
            <div class="page-header text-center" style="background-color:white;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <!--Breadcrumbs-->
                            <div class="breadcrumbs"><a href="index.html" title="Back to the home page"></a><span
                                    class="main-title fw-bold"></span></div>
                            <!--End Breadcrumbs-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Blouse Content-->
            <div class="container">
                <!--Product Content-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-12 product-layout-img-info">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                                    <!-- Product Horizontal -->
                                    <div class="product-details-img product-horizontal-style">
                                        <!-- Product Main -->
                                        <div class="zoompro-wrap rounded-0">
                                            <!-- Product Image -->
                                            <div class="zoompro-span"><img id="zoompro" class="zoompro rounded-0"
                                                    src="b1.jpg"
                                                    data-zoom-image="b1.jpg"
                                                    alt="product" width="625" height="808" /></div>
                                            <!-- End Product Image -->

                                        </div>
                                        <!-- End Product Main -->

                                        <!-- Product Thumb -->
                                        <div class="product-thumb product-horizontal-thumb mt-3">
                                            <div id="gallery" class="product-thumb-horizontal">
                                                <a data-image="b1.jpg"
                                                    data-zoom-image="b1.jpg"
                                                    class="slick-slide slick-cloned active">
                                                    <img class="blur-up lazyload rounded-0"
                                                        data-src="b1.jpg"
                                                        src="b1.jpg"
                                                        alt="product" width="625" height="808" />
                                                </a>
                                                <a data-image="b2.jpg"
                                                    data-zoom-image="b2.jpg"
                                                    class="slick-slide slick-cloned">
                                                    <img class="blur-up lazyload rounded-0"
                                                        data-src="b2.jpg"
                                                        src="b2.jpg"
                                                        alt="product" width="625" height="808" />
                                                </a>
                                                <a data-image="b3.jpg"
                                                    data-zoom-image="b3.jpg"
                                                    class="slick-slide slick-cloned">
                                                    <img class="blur-up lazyload rounded-0"
                                                        data-src="b3.jpg"
                                                        src="b3.jpg"
                                                        alt="product" width="625" height="808" />
                                                </a>
                                                <a data-image="b4.jpg"
                                                    data-zoom-image="b4.jpg"
                                                    class="slick-slide slick-cloned">
                                                    <img class="blur-up lazyload rounded-0"
                                                        data-src="b4.jpg"
                                                        src="b4.jpg"
                                                        alt="product" width="625" height="808" />
                                                </a>
                                                <a data-image="b5.jpg"
                                                    data-zoom-image="b5.jpg"
                                                    class="slick-slide slick-cloned">
                                                    <img class="blur-up lazyload rounded-0"
                                                        data-src="b5.jpg"
                                                        src="b5.jpg"
                                                        alt="product" width="625" height="808" />
                                                </a>
                                                <a data-image="b6.jpg"
                                                    data-zoom-image="b6.jpg"
                                                    class="slick-slide slick-cloned">
                                                    <img class="blur-up lazyload rounded-0"
                                                        data-src="b6.jpg"
                                                        src="b6.jpg"
                                                        alt="product" width="625" height="808" />
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Product Thumb -->

                                        <!-- Product Gallery -->
                                        <div class="lightboximages">
                                            <a href="<?php echo $path; ?>assets/images/products/product1.jpg"
                                                data-size="1000x1280"></a>
                                            <a href="<?php echo $path; ?>assets/images/products/product1-1.jpg"
                                                data-size="1000x1280"></a>
                                            <a href="<?php echo $path; ?>assets/images/products/product1-2.jpg"
                                                data-size="1000x1280"></a>
                                            <a href="<?php echo $path; ?>assets/images/products/product1-3.jpg"
                                                data-size="1000x1280"></a>
                                            <a href="<?php echo $path; ?>assets/images/products/product1-4.jpg"
                                                data-size="1000x1280"></a>
                                            <a href="<?php echo $path; ?>assets/images/products/product1-5.jpg"
                                                data-size="1000x1280"></a>
                                        </div>
                                        <!-- End Product Gallery -->
                                    </div>
                                    <!-- End Product Horizontal -->
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                                    <!-- Product Details -->
                                    <div class="product-single-meta">
                                        <h2 class="product-main-title">Blouse Tailoring service</h2>
                                        <!-- Product Reviews
                                            <div class="product-review d-flex-center mb-3">
                                                <div class="reviewStar d-flex-center"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span class="caption ms-2">8 Reviews</span></div>
                                                <a class="reviewLink d-flex-center" href="#reviews">Write a Review</a>
                                            </div>
                                             End Product Reviews -->
                                        <!-- Product Price -->

                                        <!-- End Product Price -->
                                        <!-- Product Info -->
                                        <div class="product-info">
                                            <p class="product-stock d-flex">Product Type:
                                                <span class="pro-stockLbl ps-0">
                                                    <span
                                                        class="d-flex-center stockLbl instock text-uppercase">Tailoring</span>
                                                </span>
                                            </p>

                                            <p class="product-stock d-flex" style="text-transform:capitalize;">size guide:
                                                <span class="pro-stockLbl ps-0">&nbsp;&nbsp;
                                                    <button class="sharing-lbl fw-600" id="sizechart_overlay">Size Chart
                                                        -></button>
                                                </span>
                                            </p>
                                            <!-- <p class="product-vendor">Vendor:<span class="text"><a href="#">HV</a></span></p>  
                                                <p class="product-type">Product Type:<span class="text">Stiching</span></p> 
                                                <p class="product-sku">SKU:<span class="text">RT12456</span></p> -->
                                        </div>

                                        <!-- End Product Info -->
                                        <!-- Product Info -->

                                        <!-- End Product Info -->

                                        <div class="product-price d-flex-center my-3">
                                            <span class="price" id="priceDisplay">₹450</span>
                                        </div>
                                    </div>
                                    <!-- End Product Details -->

                                    <!-- Swatches -->
                                    <div class="product-swatches-option">

                                        <div class="product-item swatches-image w-100 mb-3 swatch-0 option1"
                                            data-option-index="0">
                                            <label class="label d-flex align-items-center">Service type :<span
                                                    class="slVariant ms-1 fw-bold" id="product_service"></span></label>
                                            <ul class="d-flex-wrap pt-1 clearfix" id="serviceRadioContainer">
                                                <li class="customRadio me-3 mb-0">
                                                    <input name="swatch_service_radio" id="delivery"
                                                        value="Home pickup & delivery" type="radio" />
                                                    <label for="delivery" class="mb-0">Home pickup & delivery</label>
                                                </li>
                                                <br><br>
                                                <li class="customRadio me-3 mb-0">
                                                    <input name="swatch_service_radio" id="courier"
                                                        value="Through courier" type="radio" />
                                                    <label for="courier" class="mb-0">Through courier</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Swatches Size -->
                                        <div class="product-item swatches-size w-100 mb-4 swatch-1 option2"
                                            data-option-index="1">
                                            <label class="label d-flex align-items-center">Size:
                                                <span class="slVariant ms-1 fw-bold" id="product_size"></span></label>
                                            <ul class="d-flex-wrap pt-1 clearfix" id="sizeRadioContainer">
                                                <li class="customRadio me-3 mb-2">
                                                    <input name="swatch_size_radio" id="xs" value="26" type="radio" />
                                                    <label for="xs" class="mb-2">26</label>
                                                </li>
                                                <li class="customRadio me-3 mb-2">
                                                    <input name="swatch_size_radio" id="s" value="28" type="radio" />
                                                    <label for="s" class="mb-2">28</label>
                                                </li>
                                                <li class="customRadio me-3 mb-2">
                                                    <input name="swatch_size_radio" id="m" value="30" type="radio" />
                                                    <label for="m" class="mb-2">30</label>
                                                </li>
                                                <li class="customRadio me-3 mb-2">
                                                    <input name="swatch_size_radio" id="l" value="32" type="radio" />
                                                    <label for="l" class="mb-2">32</label>
                                                </li>
                                                <li class="customRadio me-3 mb-2">
                                                    <input name="swatch_size_radio" id="xl1" value="34" type="radio" />
                                                    <label for="xl1" class="mb-2">34</label>
                                                </li>
                                                <li class="customRadio me-3 mb-2">
                                                    <input name="swatch_size_radio" id="xl2" value="36" type="radio" />
                                                    <label for="xl2" class="mb-2">36</label>
                                                </li>
                                                <li class="customRadio me-3 mb-3">
                                                    <input name="swatch_size_radio" id="xl3" value="38" type="radio" />
                                                    <label for="xl3" class="mb-2">38</label>
                                                </li>
                                                 <li class="customRadio me-3 mb-2">
                                                    <input name="swatch_size_radio" id="others" value="Other sizes" type="radio" />
                                                    <label for="others" class="mb-2">Othersize</label>
                                                </li>
                                                <br><br>
                                                <li class="customRadio me-3 mb-3" id="Othersizeform" style="display: none;">
                                                    <div class="input-group mb-3">
                                                        <input type="text" id="Othersize" name="hand"
                                                            class="form-control" placeholder=""
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                            <button class="btn btn-sm" name="contactus" id="submitsizes">Submit</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Swatches Size -->
                                        <!-- Swatches Color -->
                                        <div class="product-item swatches-image w-100 mb-3 swatch-0 option1"
                                            data-option-index="0">
                                            <label class="label d-flex align-items-center">Stiching type :<span
                                                    class="slVariant ms-1 fw-bold" id="product_type"></span></label>
                                            <ul class="d-flex-wrap pt-1 clearfix" id="typeRadioContainer">
                                                <li class="customRadio me-3 mb-0">
                                                    <input name="swatch_stich_radio" id="blue"
                                                        value="Measure dresses send along with materials" type="radio" />
                                                    <label for="blue" class="mb-0">Measure dresses send along withmaterials</label>
                                                </li>
                                                <br><br>
                                                <li class="customRadio me-3 mb-0">
                                                    <input name="swatch_stich_radio" id="purple"
                                                        value="Measure dresses send with custom sizes" type="radio" />
                                                    <label for="purple" class="mb-0">Measure dresses send with custom
                                                        sizes</label>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- End Swatches Color -->



                                    </div>
                                    <!-- End Swatches -->

                                    <div name="contactus" method="post" id="contact-form" class="contact-form"
                                        style="display: none;">
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="tel" id="Shoulder" name="shoulder"
                                                        class="form-control" placeholder="shoulder">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="tel" id="Weist" name="weist"
                                                        class="form-control" placeholder="weist">
                                                    <span class="error_msg" id="email_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" id="Neck"
                                                        name="neck" placeholder="Neck">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="tel" id="Hand" name="hand"
                                                        class="form-control" placeholder="Hand">
                                                    <span class="error_msg" id="subject_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="text_others" name="text_others" class="form-control"
                                                    placeholder="others"></textarea>
                                                <span class="error_msg" id="subject_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mailsendbtn mb-0 w-100">
                                                    <input class="btn btn-lg" type="submit" name="contactus"
                                                        value="Submit" id="customsizes">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <!-- <div name="contactphoto" method="post" id="contactphoto" class="contactphoto" style="display: none;">	
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="file" id="vedio" name="" class="form-control">
                                                    <span class="error_msg" id="name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">                               
                                                <div class="form-group">
                                                    <input type="file" id="photo" name="" class="form-control">
                                                    <span class="error_msg" id="email_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mailsendbtn mb-0 w-100">	
                                                    <input class="btn btn-lg" type="submit" name="contactus" value="Submit">
                                                    <div class="loading"><img class="img-fluid" src="assets/images/icons/ajax-loader.gif" alt="loading" width="16" height="16"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->


                                    <div class="product-info">
                                        <p class="product-cat"><i class="bi bi-book"></i> Processes : <span></span></p>
                                        <div class="form-check lang">

                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Lining blouse"
                                                data-price="100">
                                            <label for="first" class="">Lining blouse</label>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Princess cut blouse"
                                                data-price="50">
                                            <label for="first" class="">Princess cut blouse</label>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Katori cut blouse"
                                                data-price="50">
                                            <label for="first" class="">Katori cut blouse</label>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Boar neck"
                                                data-price="50">
                                            <label for="first" class="">Boar neck</label>

                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Piping"
                                                data-price="50">
                                            <label for="first" class="">Piping</label>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Double piping"
                                                data-price="75">
                                            <label for="first" class="">Double piping</label>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Back open"
                                                data-price="100">
                                            <label for="first" class="">Back open</label>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Knot"
                                                data-price="100">
                                            <label for="first" class="">Knot</label>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                            <input id="first" name="level" type="checkbox" value="Beads and knots"
                                                data-price="120">
                                            <label for="first" class="">Beads and knots</label>

                                            </div>
                                          </div>

                                           
                                        </div>
                                    </div>
                                    <br>
                                   
                                    <div class="allow-cookies-section">
                                        <p>The customization for all dresses should be ordered directly for blouse.</p>
                                        <button class="btn btn-primary allow-cookies-button"
                                            onclick="createLeadForBlouse()">Enquiry </button>
                                    </div>

                                    <!-- Product Action -->
                                    <div class="product-action w-100 d-flex-wrap my-3 my-md-4">
                                        <!-- Product Quantity -->
                                        <div class="product-form-quantity d-flex-center">
                                            <div class="qtyField">
                                                <button class="qtyBtn minus"><i
                                                        class="icon anm anm-minus-r"></i></button>
                                                <input class="cart-qty-input qty" type="text" value="1" />
                                                <button class="qtyBtn plus"><i class="icon anm anm-plus-r"></i></button>
                                            </div>
                                        </div>
                                        <!-- End Product Quantity -->
                                        <!-- Product Add -->
                                        <div class="product-form-submit addcart fl-1 ms-3">
                                            <button type="submit" name="add"
                                                class="btn btn-secondary product-form-cart-submit"
                                                id="placeOrderButton"><span>Add to
                                                    cart</span></button>

                                        </div>
                                        <!-- Product Add -->
                                        <!-- Product Buy -->

                                        <!-- End Product Buy -->
                                    </div>
                                    <!-- End Product Action -->

                                    <!-- End Product Form -->

                                    <!-- Social Sharing -->

                                    <!-- End Social Sharing -->
                                </div>
                            </div>
                        </div>
                        <!---->

                        <div class="col-lg-3 col-md-12 col-sm-12 col-12 product-sidebar sidebar sidebar-bg">
                            <div class="sidebar-tags sidebar-sticky clearfix mt-4 mt-lg-0">
                                <!--Store Feature-->
                                <div class="sidebar-widget clearfix">
                                    <div class="widget-content pt-0 mt-0 border-0">
                                        <div class="store-info-item d-flex align-items-center">
                                            <div class="icon me-3"><i class="icon anm anm-truck-r fs-5"></i></div>
                                            <div class="content">
                                                <h5 class="title text-transform-none">Shipping & Returns</h5>
                                                <p class="text text-muted text-small">Shipping & Returns are priced from
                                                    100</p>
                                            </div>
                                        </div>
                                        <div class="store-info-item d-flex align-items-center">
                                            <div class="icon me-3"><i class="icon anm anm-lock-ar fs-4"></i></div>
                                            <div class="content">
                                                <h5 class="title text-transform-none">Secured Payment</h5>
                                                <p class="text text-muted text-small">We accept all major credit cards.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="store-info-item d-flex align-items-center">
                                            <div class="icon me-3"><i class="icon anm anm-phone-call-l fs-4"></i></div>
                                            <div class="content">
                                                <h5 class="title text-transform-none">Online Support</h5>
                                                <p class="text text-muted text-small">We support online 24/7 on day.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--End Store Feature-->
                                <!--Weekly Bestsellers-->
                                <div class="sidebar-widget clearfix">
                                    <div class="widget-title">
                                        <h2>customization for products</h2>
                                    </div>
                                    <div class="widget-content">
                                        <div class="list list-sidebar-products">
                                            <div class="mini-list-item d-flex w-100 clearfix">
                                                <div class="mini-image"><a class="item-link" href="#"><img
                                                            class="primary blur-up lazyload" data-src="lehenga.jpg"
                                                            src="lehenga.jpg" alt="image" title="product" width="120"
                                                            height="170"></a>
                                                </div>
                                                <div class="ms-3 details">
                                                    <div class="product-name"><a class="item-title"
                                                            href="product-layout1.html">lehenga</a></div>
                                                </div>
                                            </div>
                                            <div class="mini-list-item d-flex w-100 clearfix">
                                                <div class="mini-image"><a class="item-link"
                                                        href="product-layout1.html"><img
                                                            class="primary blur-up lazyload"
                                                            data-src="pattu-pavadai.jpg" src="pattu-pavadai.jpg"
                                                            alt="image" title="product" width="120" height="170"></a>
                                                </div>
                                                <div class="ms-3 details">
                                                    <div class="product-name"><a class="item-title"
                                                            href="product-layout1.html">pattu paavadai</a></div>

                                                </div>
                                            </div>
                                            <div class="mini-list-item d-flex w-100 clearfix">
                                                <div class="mini-image"><a class="item-link"
                                                        href="product-layout1.html"><img
                                                            class="primary blur-up lazyload" data-src="saree.jpg"
                                                            src="saree.jpg" alt="image" title="product" width="120"
                                                            height="170"></a>
                                                </div>
                                                <div class="ms-3 details">
                                                    <div class="product-name"><a class="item-title"
                                                            href="product-layout1.html">Readymade saree</a></div>

                                                </div>
                                            </div>
                                            <div class="mini-list-item d-flex w-100 clearfix">
                                                <div class="mini-image"><a class="item-link"
                                                        href="product-layout1.html"><img
                                                            class="primary blur-up lazyload"
                                                            data-src="alter.jpg" src="alter.jpg"
                                                            alt="image" title="product" width="120" height="170"></a>
                                                </div>
                                                <div class="ms-3 details">
                                                    <div class="product-name"><a class="item-title"
                                                            href="product-layout1.html">Saree Converted : Gowns, frocks, Chudi</a></div>

                                                </div>
                                            </div>
                                            <div class="allow-cookies-section">
                                        <p>The customization for all dresses should be ordered directly.</p>
                                        <button class="btn btn-primary allow-cookies-button"
                                            onclick="createLeadForCustomization()">Enquiry </button>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Weekly Bestsellers-->
                            </div>
                        </div>
                    </div>
                </div>
            <!--<div class="tabs-listing section pb-0">
                    <ul
                        class="product-tabs style3 border-bottom list-unstyled d-flex-wrap d-flex-justify-center d-none d-md-flex">
                        <li rel="description" class="active"><a class="tablink">Description</a></li>
                        <li rel="shipping-return"><a class="tablink">Shipping &amp; Return</a></li>
                        <li rel="reviews"><a class="tablink">Reviews</a></li>
                    </ul>

                    <div class="tab-container">
                       
                        <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
                        <div id="description" class="tab-content" style="display: block;">
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




                        <h3 class="tabs-ac-style d-md-none" rel="shipping-return">Shipping &amp; Return</h3>
                        <div id="shipping-return" class="tab-content" style="display: none;">
                            <h4 class="pb-1">Shipping &amp; Return</h4>
                            <ul class="checkmark-info">
                                <li>Dispatch: Within 24 Hours</li>
                                <li>1 Year Brand Warranty</li>
                                <li>Free shipping across all products on a minimum purchase of $50.</li>
                                <li>International delivery time - 7-10 business days</li>
                                <li>Cash on delivery might be available</li>
                                <li>Easy 30 days returns and exchanges</li>
                            </ul>
                        </div>

                        <h3 class="tabs-ac-style d-md-none" rel="reviews">Review</h3>
                        <div id="reviews" class="tab-content" style="display: none;">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                    <div class="ratings-main">
                                        <div class="avg-rating d-flex-center mb-3">
                                            <h4 class="avg-mark">5.0</h4>
                                            <div class="avg-content ms-3">
                                                <p class="text-rating">Average Rating</p>
                                                <div class="ratings-full product-review">
                                                    <a class="reviewLink d-flex-center" href="#reviews"><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star-o"></i><span
                                                            class="caption ms-2">24 Ratings</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ratings-list">
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="99"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:99%;"></div>
                                                </div>
                                                <div class="progress-value">99%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:75%;"></div>
                                                </div>
                                                <div class="progress-value">75%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star-o"></i><i
                                                            class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:50%;"></div>
                                                </div>
                                                <div class="progress-value">50%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star-o"></i><i
                                                            class="icon anm anm-star-o"></i><i
                                                            class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:25%;"></div>
                                                </div>
                                                <div class="progress-value">25%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i
                                                            class="icon anm anm-star"></i><i
                                                            class="icon anm anm-star-o"></i><i
                                                            class="icon anm anm-star-o"></i><i
                                                            class="icon anm anm-star-o"></i><i
                                                            class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="5"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:5%;"></div>
                                                </div>
                                                <div class="progress-value">05%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="spr-reviews">
                                        <h3 class="spr-form-title">Customer Reviews</h3>
                                        <div class="review-inner">
                                            <div class="spr-review d-flex w-100">
                                                <div class="spr-review-profile flex-shrink-0">
                                                    <img class="blur-up lazyload"
                                                        data-src="/samuthrika/assets/images/users/user-img1.jpg"
                                                        src="/samuthrika/assets/images/users/user-img1.jpg" alt=""
                                                        width="200" height="200">
                                                </div>
                                                <div class="spr-review-content flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-column mb-2">
                                                        <div
                                                            class="title-review d-flex align-items-center justify-content-between">
                                                            <h5
                                                                class="spr-review-header-title text-transform-none mb-0">
                                                                Eleanor Pena</h5>
                                                            <span class="product-review spr-starratings m-0"><span
                                                                    class="reviewLink"><i
                                                                        class="icon anm anm-star"></i><i
                                                                        class="icon anm anm-star"></i><i
                                                                        class="icon anm anm-star"></i><i
                                                                        class="icon anm anm-star"></i><i
                                                                        class="icon anm anm-star"></i></span></span>
                                                        </div>
                                                    </div>
                                                    <b class="head-font">Good and High quality</b>
                                                    <p class="spr-review-body">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have suffered alteration
                                                        in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                            <div class="spr-review d-flex w-100">
                                                <div class="spr-review-profile flex-shrink-0">
                                                    <img class="blur-up lazyload"
                                                        data-src="/samuthrika/assets/images/users/testimonial1.jpg"
                                                        src="/samuthrika/assets/images/users/testimonial1.jpg" alt=""
                                                        width="200" height="200">
                                                </div>
                                                <div class="spr-review-content flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-column mb-2">
                                                        <div
                                                            class="title-review d-flex align-items-center justify-content-between">
                                                            <h5
                                                                class="spr-review-header-title text-transform-none mb-0">
                                                                Courtney Henry</h5>
                                                            <span class="product-review spr-starratings m-0"><span
                                                                    class="reviewLink"><i
                                                                        class="icon anm anm-star"></i><i
                                                                        class="icon anm anm-star"></i><i
                                                                        class="icon anm anm-star"></i><i
                                                                        class="icon anm anm-star-o"></i><i
                                                                        class="icon anm anm-star-o"></i></span></span>
                                                        </div>
                                                    </div>
                                                    <b class="head-font">Feature Availability</b>
                                                    <p class="spr-review-body">The standard chunk of Lorem Ipsum used
                                                        since the 1500s is reproduced below for those interested.
                                                        Sections 1.10.32 and 1.10.33</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                    <form method="post" action="#" class="product-review-form new-review-form">
                                        <h3 class="spr-form-title">Write a Review</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <fieldset class="row spr-form-contact">
                                            <div class="col-sm-6 spr-form-contact-name form-group">
                                                <label class="spr-form-label" for="nickname">Name <span
                                                        class="required">*</span></label>
                                                <input class="spr-form-input spr-form-input-text" id="nickname"
                                                    type="text" name="name" required="">
                                            </div>
                                            <div class="col-sm-6 spr-form-contact-email form-group">
                                                <label class="spr-form-label" for="email">Email <span
                                                        class="required">*</span></label>
                                                <input class="spr-form-input spr-form-input-email " id="email"
                                                    type="email" name="email" required="">
                                            </div>
                                            <div class="col-sm-6 spr-form-review-title form-group">
                                                <label class="spr-form-label" for="review">Review Title </label>
                                                <input class="spr-form-input spr-form-input-text " id="review"
                                                    type="text" name="review">
                                            </div>
                                            <div class="col-sm-6 spr-form-review-rating form-group">
                                                <label class="spr-form-label">Rating</label>
                                                <div class="product-review pt-1">
                                                    <div class="review-rating">
                                                        <a href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                            href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                            href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                            href="#;"><i class="icon anm anm-star-o"></i></a><a
                                                            href="#;"><i class="icon anm anm-star-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 spr-form-review-body form-group">
                                                <label class="spr-form-label" for="message">Body of Review <span
                                                        class="spr-form-review-body-charactersremaining">(1500)
                                                        characters remaining</span></label>
                                                <div class="spr-form-input">
                                                    <textarea class="spr-form-input spr-form-input-textarea"
                                                        id="message" name="message" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="spr-form-actions clearfix">
                                            <input type="submit" class="btn btn-primary spr-button spr-button-primary"
                                                value="Submit Review">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div> -->
            </div>
            <!--End Blouse Content-->
            <br><br><br>




            <div class="modal-backdrop" id="overlay"></div>
            <div class="quickview-modal modal fade show" id="quickview_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">


                                <div
                                    class="col-6 col-sm-6 col-md-6 col-lg-5 mb-3 mb-md-0 d-flex justify-content-center">
                                    <div class="spr-form-actions clearfix">
                                        <img src="size_chart.jpg" alt="">
                                    </div>
                                </div>


                                <div
                                    class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2 mb-md-0 d-flex justify-content-center">
                                    <div class="spr-form-actions clearfix">
                                        <h2 class="product-main-title text-center">Size chart</h2>

                                        <p class="cart-shipping text-center mt-3">1. These are the measurement followed
                                            Tailoring service</p>

                                        <p class="cart-shipping text-center mt-3">2. The measurements below are Body
                                            Measurements.</p>
                                        <img src="size.jpg" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <?php include '../footer.php';?>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->


            <!-- Product Quickview Modal-->

            <!--End Product Quickview Modal-->

            <!-- Size Chart Modal -->
            <div class="sizechart-modal modal fade" id="sizechart_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div id="sizechart" class="sizechart-wrap text-center">
                                <h4 class="mb-2">Size Guide</h4>
                                <p class="mb-4">This is a standardised guide to give you an idea of what size you will
                                    need,
                                    however some brands may vary from these conversions.</p>
                                <div class="size-chart-tbl table-responsive px-1">
                                    <table class="table-bordered align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>XXS - XS</th>
                                                <th>XS - S</th>
                                                <th>S - M</th>
                                                <th>M - L</th>
                                                <th>L - XL</th>
                                                <th>XL - XXL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>UK</th>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>14</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <th>US</th>
                                                <td>2</td>
                                                <td>4</td>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <th>Italy (IT)</th>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                                <td>46</td>
                                                <td>48</td>
                                            </tr>
                                            <tr>
                                                <th>France (FR/EU)</th>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                            </tr>
                                            <tr>
                                                <th>Denmark</th>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <th>Russia</th>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                                <td>46</td>
                                                <td>48</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <th>Germany</th>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <th>Japan</th>
                                                <td>5</td>
                                                <td>7</td>
                                                <td>9</td>
                                                <td>11</td>
                                                <td>13</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <th>Australia</th>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>14</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <th>Korea</th>
                                                <td>33</td>
                                                <td>44</td>
                                                <td>55</td>
                                                <td>66</td>
                                                <td>77</td>
                                                <td>88</td>
                                            </tr>
                                            <tr>
                                                <th>China</th>
                                                <td>160/84</td>
                                                <td>165/86</td>
                                                <td>170/88</td>
                                                <td>175/90</td>
                                                <td>180/92</td>
                                                <td>185/94</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Size Chart Modal -->

            <!-- Shipping Modal -->
            <div class="shippingInfo-modal modal fade" id="shippingInfo_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div id="ShippingInfo" class="shippingInfo-wrap">
                                <h4 class="pb-1">Delivery</h4>
                                <ul class="checkmark-info mb-3">
                                    <li>Dispatch: Within 24 Hours</li>
                                    <li>1 Year Brand Warranty</li>
                                    <li>Free shipping across all products on a minimum purchase of $50</li>
                                    <li>International delivery time - 7-10 business days</li>
                                    <li>Cash on delivery might be available</li>
                                    <li>Easy 30 days returns and exchanges</li>
                                    <li>All orders shipped with UPS Express</li>
                                    <li>All orders are shipped with a UPS tracking number</li>
                                </ul>
                                <h4 class="pt-1">Returns</h4>
                                <p>If you do not like the product you can return it within 15 days - no questions asked.
                                    This excludes bodysuits, swimwear and clearance sale items. We have an easy and
                                    hassle
                                    free return policy. Please look at our Delivery & Returns section for further
                                    information.</p>
                                <h4 class="pt-1">Help</h4>
                                <ul class="list-info">
                                    <li>Give us a shout if you have any other questions and/or concerns.</li>
                                    <li class="my-1"><strong>Email:</strong> <a href="mailto:contact@example.com"><span
                                                class="email">contact@example.com</span></a></li>
                                    <li><strong>Phone:</strong> <a href="tel:401234567890">(+40) 123 456 7890</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Shipping Modal-->

            <!--Product Enuiry Modal-->
            <div class="productInquiry-modal modal fade" id="productInquiry_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div id="productInquiry" class="productInquiry-wrap">
                                <div class="page-title">
                                    <h3 class="mb-3">Product Inquiry Popup</h3>
                                </div>
                                <form method="post" action="#" id="productInquiry_form"
                                    class="productInquiry-form form-vertical">
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="contact[name]"
                                                    placeholder="Name" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" id="ContactFormEmail" name="contact[email]"
                                                    placeholder="Email" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="tel" id="ContactFormPhone" name="contact[phone]"
                                                    pattern="[0-9\-]*" placeholder="Phone Number" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormSubject" name="contact[subject]"
                                                    placeholder="Subject" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea rows="4" id="ContactFormMessage" name="contact[body]"
                                                    placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="submit" class="btn btn-lg w-100" value="Send Message" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Product Enuiry Modal-->

            <!--Product Video Modal-->
            <div class="productVideo-modal modal fade" id="productVideo_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="ratio ratio-16x9 productVideo-wrap">
                                <iframe class="rounded-0" src="https://www.youtube.com/embed/93A2jOW5Mog?rel=0"
                                    title="YouTube video" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Product Video Modal-->




            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="<?php echo $path; ?>assets/js/plugins.js"></script>

            <!-- Elevatezoom Zoom -->
            <script src="<?php echo $path; ?>assets/js/vendor/jquery.elevatezoom.js"></script>
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
            <script src="<?php echo $path; ?>assets/js/main.js"></script>

            <!-- Photoswipe Gallery JS -->
            <script src="<?php echo $path; ?>assets/js/vendor/photoswipe.min.js"></script>
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

        </div>
        <!--End Page Wrapper-->
</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    let service_value, size_value, stich_value, price_value, leadValue1,leadValue2, productQuantity,process_value, custom_shoulder,custom_neck,custom_waist,custom_hand,text_others,custom_others;

    var modal = document.getElementById('quickview_modal');
    var overlay = document.getElementsByClassName('modal-backdrop');
    var size_btn = document.getElementById('sizechart_overlay');

    size_btn.addEventListener('click', function () {
        var modal = $('#quickview_modal');

        modal.modal('show');
    })

    var show_product_type = document.getElementById('typeRadioContainer');
    var product_type = document.getElementById('product_type');
    var radioButtons = document.querySelectorAll('input[name="swatch_stich_radio"]');
    var contactForm = document.getElementById('contact-form');
    var contactPhoto = document.getElementById('contactphoto');

    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener('change', function () {
            // Update the product_type span with the selected value
            product_type.textContent = this.value;

            stich_value = this.value;
            console.log(stich_value);

            // Check the selected value and update sections accordingly
            if (this.value === 'Measure dresses send with custom sizes' && this.checked) {
                // Show the contact-form section
                contactForm.style.display = 'block';
                // Hide the contactphoto section
                // contactPhoto.style.display = 'none';
            } else if (this.value === 'Measure dresses send with dresses' && this.checked) {
                // Show the contactphoto section
                // contactPhoto.style.display = 'block';
                // Hide the contact-form section
                contactForm.style.display = 'none';
            } else {
                // Hide both sections when no specific option is selected
                contactForm.style.display = 'none';
                // contactPhoto.style.display = 'none';
            }
        });
    });



    var show_product_service = document.getElementById('serviceRadioContainer');
    var product_service = document.getElementById('product_service');
    var radioButtons2 = document.querySelectorAll('input[name="swatch_service_radio"]');

    radioButtons2.forEach(function (radioButtonservice) {
        radioButtonservice.addEventListener('change', function () {
            // Update the product_service span with the selected value
            product_service.textContent = this.value;

            service_value = this.value;
            console.log(service_value);

        });
    });



    var show_product_size = document.getElementById('sizeRadioContainer');
    var product_size = document.getElementById('product_size');
    var radioButtons1 = document.querySelectorAll('input[name="swatch_size_radio"]');
    var otherSizeForm = document.getElementById('Othersizeform');
var otherSizeInput = document.getElementById('Othersize');
var submitButton = document.querySelector('button[name="contactus"]');

radioButtons1.forEach(function (radioButtonsize) {
    radioButtonsize.addEventListener('change', function () {
        if (this.value === 'Other sizes') {
            // If "Othersize" radio button is selected, show the input field
            otherSizeForm.style.display = 'block';
            product_size.textContent = ''; // Clear the product_size span when Othersize is selected
        } else {
            // Update the product_size span with the selected size
            product_size.textContent = this.value;
            size_value = this.value;
            console.log(size_value);
            // Hide the Othersize input field
            otherSizeForm.style.display = 'none';
        }
    });
});

submitButton.addEventListener('click', function (event) {
    event.preventDefault(); // Prevent form submission to allow handling the input

    if (otherSizeForm.style.display === 'block') {
        // Use the value from the "Othersize" input field if it is visible
        size_value = otherSizeInput.value;
        console.log(size_value);
    }
});


    const checkboxes = document.querySelectorAll('input[name="level"]');
    // Display element for the total price
    const priceDisplay = document.getElementById('priceDisplay');

    // Add event listener to each checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            let totalPrice = 450,selectedCheckboxes = [];
            // Calculate the total price based on selected checkboxes
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    totalPrice += parseInt(checkbox.getAttribute('data-price'));
                    selectedCheckboxes.push(checkbox.value);
                }
            });
            // Update the displayed price
            priceDisplay.textContent = "₹" + totalPrice;

            price_value = totalPrice;
            console.log(price_value);

        // selectedCheckboxesDisplay.textContent = selectedCheckboxes.join(', ');
        process_value=selectedCheckboxes.join(', ');

        console.log("Selected Checkboxes:",process_value);


        });
    });

    function createLeadForBlouse() {
        leadValue1 = "Lead created, Direct contact for Blouse";

        // You can perform additional actions here, such as storing the value in a variable, sending it to a server, etc.
        console.log(leadValue1);
        toastr.success('Lead generated! Thank you for your attention!', 'Success');

    }

    function createLeadForCustomization() {
        leadValue2 = "Lead created, Direct contact for dress customization";

        // You can perform additional actions here, such as storing the value in a variable, sending it to a server, etc.
        console.log(leadValue2);
        toastr.success('Lead generated! Thank you for your attention!', 'Success');

    }

    const quantityInput = document.querySelector('.cart-qty-input');
    const minusButton = document.querySelector('.qtyBtn.minus');
    const plusButton = document.querySelector('.qtyBtn.plus');

    let currentValue = 1;
    // Add event listeners to the minus and plus buttons
    minusButton.addEventListener('click', () => {
        // Get the current value of the input


        // Check if the current value is greater than the minimum (1)
        if (currentValue > 1) {
            // Decrease the quantity by 1
            currentValue--;
            quantityInput.value = currentValue;

            productQuantity = currentValue;
            console.log(productQuantity);
        }
    });

    plusButton.addEventListener('click', () => {
        // Get the current value of the input

        // Increase the quantity by 1
        currentValue++;
        quantityInput.value = currentValue;

        productQuantity = currentValue;
        console.log(productQuantity);
    });

    const shoulder = document.getElementById('Shoulder').value;
    const neck = document.getElementById('Neck').value;
    const weist = document.getElementById('Weist').value;
    const hand = document.getElementById('Hand').value;
    const others = document.getElementById('text_others').value;
   
    $(document).ready(function () {
    $('#customsizes').click(function(event) {
        const shoulder = document.getElementById('Shoulder').value;
        const neck = document.getElementById('Neck').value;
        const weist = document.getElementById('Weist').value;
        const hand = document.getElementById('Hand').value;
        const others = document.getElementById('text_others').value;

        if (shoulder === '') {
            toastr.error('Error!', 'Shoulder value is required!');
        } else if (neck === '') {
            toastr.error('Error!', 'Neck value is required!');
        } else if (weist === '') {
            toastr.error('Error!', 'Waist value is required!');
        } else if (hand === '') {
            toastr.error('Error!', 'Hand value is required!');
        } else if (others === '') {
            toastr.error('Error!', 'Others value is required!');
        } 
      
        else {
            custom_shoulder = shoulder,
            custom_neck = neck,
            custom_waist = weist,
            custom_hand = hand,
            custom_others = others;
            console.log(custom_shoulder, custom_neck, custom_waist, custom_hand, custom_others);
        }
    });
});
    $('#placeOrderButton').click(function (event) {
    event.preventDefault(); // Prevent the default form submission behavior
    

        if (service_value === undefined || service_value === '') {
            toastr.error('Error!', 'Select Service, value is required!');
        } else if (size_value === undefined || size_value === '') {
            toastr.error('Error!', 'Select Size, value is required!');
        } else if (stich_value === undefined || stich_value === '') {
            toastr.error('Error!', 'Select Stiching type, value is required!');
        }  else if (process_value === undefined || process_value === '') {
            toastr.error('Error!', 'Select Processes, value is required!');
        }  
        // A
        else{
    
            toastr.success('Order Recieved !', 'Success');
        var fd = new FormData();
        
        fd.append("Custom shoulder", custom_shoulder);
            fd.append("Custom neck", custom_neck);  
            fd.append("Custom weist", custom_waist);  
            fd.append("Custom hand", custom_hand);
            fd.append("Custom others", custom_others);

        fd.append("Service", service_value);
        fd.append("Stiching", stich_value);
        fd.append("Size", size_value);
        fd.append("Price", price_value);
        fd.append("Quantity", currentValue);
        fd.append("Processes",process_value)
        fd.append("Lead for Blouse", leadValue1);
        fd.append("Lead for Customisation", leadValue2);
    
        $.ajax({
           

            url: 'ajax',
            data: fd,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (response) {
                // console.log(response);
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
    })
    // $('#sizechart_overlay').click(function(){


    //     $("#overlay, #quickview_modal").fadeIn();

    // // Close modal and overlay when close button or overlay is clicked
    // $("#overlay, #quickview_modal button[data-bs-dismiss='modal']").click(function () {
    //     $("#overlay, #quickview_modal").fadeOut();
    // });

    // // Prevent modal from closing when clicking inside the modal
    // $("#quickview_modal").click(function (event) {
    //     event.stopPropagation();
    // });
    // })
</script>
<!-- Mirrored from www.annimexweb.com/items/hema/product-layout5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:29:31 GMT -->

</html>