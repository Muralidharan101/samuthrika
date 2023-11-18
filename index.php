<?php include 'dashboard/main/ajax/datab.php'; ?> 

<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/index5-tools-parts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:12:57 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--BootStrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <!-- Title Of Site -->
        <title>Samuthrika Academy</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $path; ?>assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="<?php echo $path; ?>assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style-min.css">
        <link rel="stylesheet" href="<?php echo $path; ?>assets/css/responsive.css">
    </head>

    <style>
  
    .footer-img{
        margin-bottom: 14px;
    }

    .btn-hover{
        
    }

    </style>

    <body class="template-index index-demo5">
        <!--Page Wrapper-->
        <div class="page-wrapper">   
            <!--Header-->
            <!--End Mobile Menu-->
            
            <!-- Body Container -->
            <div id="page-content">               
                <?php include 'header.php';?>
                <!--End Header-->
               
                <!--Mobile Menu-->
                <?php include 'sidebar.php';?>
                <!--Home Slideshow-->
                <section class="slideshow slideshow-wrapper">
                    <div class="home-slideshow slick-arrow-dots">
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:318px)" srcset="<?php echo $path; ?>assets/images/slideshow/demo1-banner2-mbl.jpg" width="1150" height="800">
                                    <img class="blur-up lazyload" src="<?php echo $path; ?>assets/images/slideshow/demo1-banner2.jpg" alt="slideshow" title="" width="1920" height="795" />
                                </picture> 
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <p class="ss-sub-title xs-hide">Best Coaching here... </p>
                                                <h2 class="ss-mega-title">Samuthrika <br>Academy</h2>  
                                                <p class="ss-sub-title xs-hide">Our Courses are listed below</p>
                                                <div class="ss-btnWrap">
                                                    <a class="btn btn-primary" href="#course-category" style="transition:1s all ease;" id="btn-hover">View now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:318px)" srcset="<?php echo $path; ?>assets/images/slideshow/demo1-banner3-mbl.jpg" width="1150" height="800">
                                    <img class="blur-up lazyload" src="<?php echo $path; ?>assets/images/slideshow/demo1-banner2.jpg" alt="slideshow" title="" width="1920" height="795" />
                                </picture>  
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <h2 class="ss-mega-title">Our Next <br>Jewellary Products</h2>
                                                <p class="ss-sub-title xs-hide">The outfit that blend elegance and style for your casual wear</p>
                                                <p class="ss-sub-title xs-hide">The classic elegant jewellarys</p>
                                                <div class="ss-btnWrap">
                                                    <a class="btn btn-primary" href="jewel-product.php">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:318px)" srcset="<?php echo $path; ?>assets/images/slideshow/demo1-banner3-mbl.jpg" width="1150" height="800">
                                    <img class="blur-up lazyload" src="<?php echo $path; ?>assets/images/slideshow/demo1-banner2.jpg" alt="slideshow" title="" width="1920" height="795" />
                                </picture>  
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <h2 class="ss-mega-title">Our <br>Tailoring Products</h2>
                                                <p class="ss-sub-title xs-hide">The outfit that blend elegance and style for your casual wear</p>
                                                <p class="ss-sub-title xs-hide">The classic elegant jewellarys</p>
                                                <div class="ss-btnWrap">
                                                    <a class="btn btn-primary" href="tailoring-product.php">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:318px)" srcset="<?php echo $path; ?>assets/images/slideshow/demo1-banner3-mbl.jpg" width="1150" height="800">
                                    <img class="blur-up lazyload" src="<?php echo $path; ?>assets/images/slideshow/demo1-banner2.jpg" alt="slideshow" title="" width="1920" height="795" />
                                </picture>  
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <h2 class="ss-mega-title">Our Next <br>Clothing Products</h2>
                                                <p class="ss-sub-title xs-hide">The outfit that blend elegance and style for your casual wear</p>
                                                <p class="ss-sub-title xs-hide">The classic elegant jewellarys</p>
                                                <div class="ss-btnWrap">
                                                    <a class="btn btn-primary" href="cloth-product.php">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Home Slideshow-->

                <!--Popular Categories-->
                 <section class="section collection-slider section-clr cs_1"> 
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="section-header">
                                    <h2> Categories</h2>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="collection-slider-4items gp15 arwOut5 hov-arrow dots-hide">
                                    <div class="category-item zoomscal-hov">
                                        <a href="#" class="category-link clr-none">
                                            <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/dance.jpg" src="<?php echo $path; ?>assets/images/dance.jpg" alt="collection" title="" width="300" height="300" /></div>
                                            <div class="details mt-3 text-center">
                                                <h4 class="category-title mb-0">Dance</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="category-item zoomscal-hov">
                                        <a href="#" class="category-link clr-none">
                                            <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/fitness.jpg" src="<?php echo $path; ?>assets/images/fitness.jpg" alt="collection" title="" width="300" height="300" /></div>
                                            <div class="details mt-3 text-center">
                                                <h4 class="category-title mb-0">Fitness</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="category-item zoomscal-hov">
                                        <a href="#" class="category-link clr-none">
                                            <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/School Classes Assisted.jpg" src="<?php echo $path; ?>assets/images/School Tuition.jpg alt="collection" title="" width="300" height="300" /></div>
                                            <div class="details mt-3 text-center">
                                                <h4 class="category-title mb-0">School Tuition</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="category-item zoomscal-hov">
                                        <a href="#" class="category-link clr-none">
                                            <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/instruments.jpg" src="<?php echo $path; ?>assets/images/instruments.jpg" alt="collection" title="" width="300" height="300" /></div>
                                            <div class="details mt-3 text-center">
                                                <h4 class="category-title mb-0">Music Instruments</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="category-item zoomscal-hov">
                                        <a href="#" class="category-link clr-none">
                                            <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/handwrite.jpg" src="<?php echo $path; ?>assets/handwrite.jpg" alt="collection" title="" width="300" height="300" /></div>
                                            <div class="details mt-3 text-center">
                                                <h4 class="category-title mb-0">Traditional Courses</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Popular Categories-->

                <!--Products With Tabs-->
                <section class="section product-slider tab-slider-product pb-0" id="course-category">
                    <div class="container">
                        <div class="section-header d-none">
                            <h2>Special Offers</h2>
                            <p>Browse the huge variety of our best seller</p>
                        </div>

                        <div class="tabs-listing">
                            <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link head-font active" id="bestsellers-tab" data-bs-toggle="tab" data-bs-target="#bestsellers" type="button" role="tab" aria-controls="bestsellers" aria-selected="true">School Tuition</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link head-font" id="newarrivals-tab" data-bs-toggle="tab" data-bs-target="#newarrivals" type="button" role="tab" aria-controls="newarrivals" aria-selected="false">Arts courses</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link head-font" id="toprated-tab" data-bs-toggle="tab" data-bs-target="#toprated" type="button" role="tab" aria-controls="toprated" aria-selected="false">Personal Development Courses</button>
                                </li>
                            </ul>



                            <div class="tab-content" id="productTabsContent">
                            
                            
                                <div class="tab-pane show active" id="bestsellers" role="tabpanel" aria-labelledby="bestsellers-tab">
                               
                                <!--Product Grid-->
                                    <div class="grid-products grid-view-items">
                                        <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">                                   
                                           
                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-lkg.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-lkg.jpg" src="<?php echo $path; ?>assets/images/Class-lkg.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-lkg.jpg" src="<?php echo $path; ?>assets/images/Class-lkg.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-lkg.php">Class LKG</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                  
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-ukg.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload " data-src="<?php echo $path; ?>assets/images/Class-ukg.jpeg" src="<?php echo $path; ?>assets/images/Class-ukg.jpeg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-ukg.jpeg" src="<?php echo $path; ?>assets/images/Class-ukg.jpeg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-ukg.php">Class UKG</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                  
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-1.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-1.jpg" src="<?php echo $path; ?>assets/images/Class-1.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-1.jpg" src="<?php echo $path; ?>assets/images/Class-1.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-1.php">Class I</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                  
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-2.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-2.jpg" src="<?php echo $path; ?>assets/images/Class-2.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-2.jpg" src="<?php echo $path; ?>assets/images/Class-2.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-2.php">Class II</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                  
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-3.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-3.jpg" src="<?php echo $path; ?>assets/images/Class-3.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-3.jpg" src="<?php echo $path; ?>assets/images/Class-3.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-3.php">Class III</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-4.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-4.jpg" src="<?php echo $path; ?>assets/images/Class-4.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-4.jpg" src="<?php echo $path; ?>assets/images/Class-4.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-4.php">Class IV</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                       
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-5.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-5.jpg" src="<?php echo $path; ?>assets/images/Class-5.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-5.jpg" src="<?php echo $path; ?>assets/images/Class-5.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-5.php">Class V</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-6.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-6.jpg" src="<?php echo $path; ?>assets/images/Class-6.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-6.jpg" src="<?php echo $path; ?>assets/images/Class-6.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-6.php">Class VI</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                     
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-7.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-7.jpg" src="<?php echo $path; ?>assets/images/Class-7.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-7.jpg" src="<?php echo $path; ?>assets/images/Class-7.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-7.php">Class VII</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                       
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-8.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/classes.jpg" src="<?php echo $path; ?>assets/images/classes.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/classes.jpg" src="<?php echo $path; ?>assets/images/classes.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-8.php">Class VIII</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-9.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-9.jpg" src="<?php echo $path; ?>assets/images/Class-9.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-9.jpg" src="<?php echo $path; ?>assets/images/Class-9.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-9.php">Class IX</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-10.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-10.jpg" src="<?php echo $path; ?>assets/images/Class-10.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-10.jpg" src="<?php echo $path; ?>assets/images/Class-10.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-10.php">Class X</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-11.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-11.jpg" src="<?php echo $path; ?>assets/images/Class-11.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-11.jpg" src="<?php echo $path; ?>assets/images/Class-11.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-11.php">Class XI</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-12.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-12.jpg" src="<?php echo $path; ?>assets/images/Class-12.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/Class-12.jpg" src="<?php echo $path; ?>assets/images/Class-12.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">School Tuition</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-12.php">Class XII</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                        </div>  

                                        <!--<div class="view-collection text-center mt-4 mt-md-5">
                                            <a href="shop-left-sidebar.html" class="btn btn-primary btn-lg">View Collection</a>
                                        </div>-->

                                    </div>
                                <!--End Product Grid-->
                                </div>


                                <div class="tab-pane" id="newarrivals" role="tabpanel" aria-labelledby="newarrivals-tab">
                                    <!--Product Grid-->
                                    <div class="grid-products grid-view-items">
                                        <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">                                   
                                           
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" src="<?php echo $path; ?>assets/images/bharatanatyam.jpg" data-src="<?php echo $path; ?>assets/images/bharatanatyam.jpg" alt="Product" title="Product" width="625" height="781" /></a>
                                                        <!-- End Product Image -->
                                                       
                                                        <!-- Product label 
                                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                        End Product label -->
                                                        
                                                        <!--Countdown Timer
                                                        <div class="saleTime" data-countdown="2025/01/01"></div>-->
                                                        <!--End Countdown Timer-->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                   <!-- Start Product Details -->
                                                   <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Dance</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Classical Dance</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/bharatanatyam classicial.jpg" src="<?php echo $path; ?>assets/images/bharatanatyam classicial.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/bharatanatyam classicial.jpg" src="<?php echo $path; ?>assets/images/bharatanatyam classicial.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Dance</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Classical Dance</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/western-dance.jpg" src="<?php echo $path; ?>assets/images/western-dance.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/western-dance.jpg" src="<?php echo $path; ?>assets/images/western-dance.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Dance</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Western Dance</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/kungfu.jpg" src="<?php echo $path; ?>assets/images/kungfu.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/kungfu.jpg" src="<?php echo $path; ?>assets/images/kungfu.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Fitness</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Kung fu</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                       
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/yoga.jpg" src="<?php echo $path; ?>assets/images/yoga.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/yoga.jpg" src="<?php echo $path; ?>assets/images/yoga.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Fitness</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Yoga</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/mma.webp" src="<?php echo $path; ?>assets/images/mma.webp" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/mma.webp" src="<?php echo $path; ?>assets/images/mma.webp" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Fitness</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Mixed Martial Arts</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/fdc.jpg" src="<?php echo $path; ?>assets/images/fdc.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/fdc.jpg" src="<?php echo $path; ?>assets/images/fdc.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Stream</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Fashion Designing</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                     
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/music class.jpg" src="<?php echo $path; ?>assets/images/music class.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/music class.jpg" src="<?php echo $path; ?>assets/images/music class.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Musics</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                <li style="font-size:11px;"><i class="bi bi-book"></i> <span >All / Single subject</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Keyboard & guitar class</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="product-layout1.html" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/zumba.jfif" src="<?php echo $path; ?>assets/images/zumba.jfif" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/zumba.jfif" src="<?php echo $path; ?>assets/images/zumba.jfif" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                  <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="product-layout1.html">Zumba Class</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                       
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>



                                        </div>  

                                        <!--<div class="view-collection text-center mt-4 mt-md-5">
                                            <a href="shop-left-sidebar.html" class="btn btn-primary btn-lg">View Collection</a>
                                        </div>-->

                                    </div>
                                    <!--End Product Grid-->
                                </div>



                                <div class="tab-pane" id="toprated" role="tabpanel" aria-labelledby="toprated-tab">
                                    <!--Product Grid-->
                                    <div class="grid-products grid-view-items">
                                        <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">                                                                            
                                          

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-1.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/handwriting-classes.webp" src="<?php echo $path; ?>assets/images/handwriting-classes.webp" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/handwriting-classes.webp" src="<?php echo $path; ?>assets/images/handwriting-classes.webp" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                         <!-- Product Details -->
                                                         <div class="product-duration py-2 pb-0">
                                                        <ul class="publish-detail d-flex-wrap justify-content-between text-uppercase mb-2">                      
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Junior - 15 days</span></li>
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Senior - 7 days</span></li>
                                                        </ul>
                                                        </div>
                                                         <!-- End Product Details -->
                                                       
                                                        <!--End Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                  <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-1.php">HandWriting Class</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                        
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-2.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/speed-write.jpg" src="<?php echo $path; ?>assets/images/speed-write.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/speed-write.jpg" src="<?php echo $path; ?>assets/images/speed-write.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                  <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-2.php">Speed Writing Class</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                      
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-3.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/abacus.jpg" src="<?php echo $path; ?>assets/images/abacus.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/abacus.jpg" src="<?php echo $path; ?>assets/images/abacus.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="product-duration py-2 pb-0">
                                                        <ul class="publish-detail d-flex-wrap justify-content-between text-uppercase mb-2">                      
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Basic - 0 Level</span></li>
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Advance - 10 Level</span></li>
                                                        </ul>
                                                        </div>
                                                         <!-- End Product Details -->
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">    
                                                            <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>          
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-3.php">Abacus Class</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                   
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-4.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/spk-eng.jpg" src="<?php echo $path; ?>assets/images/spk-eng.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/spk-eng.jpg" src="<?php echo $path; ?>assets/images/spk-eng.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="product-duration py-2 pb-0">
                                                        <ul class="publish-detail d-flex-wrap justify-content-between text-uppercase mb-2">                      
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Basic - 20 days</span></li>
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Advance - 60 days</span></li>
                                                        </ul>
                                                        </div>
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                  <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-4.php">Spoken English</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                   
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-5.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/spk-hin.jpg" src="<?php echo $path; ?>assets/images/spk-hin.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/spk-hin.jpg" src="<?php echo $path; ?>assets/images/spk-hin.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="product-duration py-2 pb-0">
                                                        <ul class="publish-detail d-flex-wrap justify-content-between text-uppercase mb-2">                      
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Basic - 20 days</span></li>
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Advance - 60 days</span></li>
                                                        </ul>
                                                        </div>
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                  <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-5.php">Spoken Hindi</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                   
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-6.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/hindi class.jpg" src="<?php echo $path; ?>assets/images/hindi class.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/hindi class.jpg" src="<?php echo $path; ?>assets/images/hindi class.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="product-duration py-2 pb-0">
                                                        <ul class="publish-detail d-flex-wrap justify-content-between text-uppercase mb-2">                      
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Basic - 20 days</span></li>
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Advance - 60 days</span></li>
                                                        </ul>
                                                        </div>
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">              
                                                                <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-6.php">Hindi (Reading / Writing)</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                   
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-7.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/calligraphy.jpg" src="<?php echo $path; ?>assets/images/calligraphy.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/calligraphy.jpg" src="<?php echo $path; ?>assets/images/calligraphy.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="product-duration py-2 pb-0">
                                                        <ul class="publish-detail d-flex-wrap justify-content-between text-uppercase mb-2">                      
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Basic - 10 days</span></li>
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Advance - 20 days</span></li>
                                                        </ul>
                                                        </div>
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">                      
                                                                  <li style="font-size:11px;"><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-7.php">Calligraphy</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                   
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="pdc-8.php" class="product-img">
                                                            <!-- Image -->
                                                            <img class="primary blur-up lazyload" data-src="<?php echo $path; ?>assets/images/english class.jpg" src="<?php echo $path; ?>assets/images/english class.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->
                                                            <img class="hover blur-up lazyload" data-src="<?php echo $path; ?>assets/images/english class.jpg" src="<?php echo $path; ?>assets/images/hindi class.jpg" alt="Product" title="Product" width="625" height="781" />
                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->
                                                        
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor">Traditional Courses</div>
                                                        <!--End Product Vendor-->
                                                        <!-- Product Details -->
                                                        <div class="product-duration py-2 pb-0">
                                                        <ul class="publish-detail d-flex-wrap justify-content-between text-uppercase mb-2">                      
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Basic - 20 days</span></li>
                                                        <li style="font-size:11px;"><i class="bi bi-calendar-check"></i><span> Advance - 60 days</span></li>
                                                        </ul>
                                                        </div>
                                                        <div class="blog-content py-2 pb-0">
                                                            <ul class="publish-detail d-flex-nowrap justify-content-between text-uppercase mb-2">              
                                                                <li style="font-size:11px;"><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                                            </ul>
                                                            </div>
                                                             <!-- End Product Details -->

                                                        <!-- Product Name -->
                                                        <div class="product-name-price d-flex-nowrap justify-content-between">
                                                            <a href="pdc-8.php">English (Reading / Writing)</a>
                                                           
                                                        </div>
                                                        <!-- End Product Name -->
                                                   
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                        </div>

                                        

                                        </div>

                                        <!--<div class="view-collection text-center mt-4 mt-md-5">
                                            <a href="shop-left-sidebar.html" class="btn btn-secondary btn-lg">View Collection</a>
                                        </div>-->

                                    </div>
                                    <!--End Product Grid-->
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!--End Products With Tabs-->

                <!--Promo bar
                <section class="section pb-0">
                    <div class="container">
                        <div class="section-header d-none">
                            <h2>Promotion</h2>
                        </div>

                        <div class="top-info-bar style1 promoMsg">
                            <div class="topBar-slider-style1">
                                <div class="item text-center d-flex d-flex-justify-center">
                                    Best Deals and Lowest Price on Top Brands&nbsp;:&nbsp;<b>Get 25% Flat Off on Tools</b>
                                </div>
                                <div class="item text-center d-flex d-flex-justify-center">
                                    Leading&nbsp;<b>Hand Tools</b> &nbsp;Manufacturer. All Kinds Of&nbsp;<b>Safety Tools</b>&nbsp;Available.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                End Promo bar-->

                <!--Collection 
                <section class="section collection-banners three-one-bnr">
                    <div class="container">                      
                        <div class="collection-banner-grid three-bnr">
                            <div class="row sp-row">
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 collection-banner-item">
                                    <div class="collection-item sp-col">
                                        <a href="shop-left-sidebar.html" class="zoom-scal clr-none">
                                            <div class="img">
                                                <img class="w-100 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/collection/demo5-ct-img1.jpg" src="<?php echo $path; ?>assets/images/collection/demo5-ct-img1.jpg" alt="collection" title="" width="533" height="447" />
                                            </div>
                                            <div class="details middle-left">
                                                <div class="inner text-left">
                                                    <h3 class="title">Other<br>Classes</h3>
                                                    <p class="counts">25 Products</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>                                
                                </div>
                                <div class="col-12 col-sm-12 col-md-2 col-lg-2 collection-banner-item">
                                    <div class="collection-item sp-col h-100">
                                        <a href="shop-left-sidebar.html" class="zoom-scal clr-none h-100">
                                            <div class="img h-100">
                                                <img class="w-100 h-100 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/collection/demo5-ct-img2.jpg" src="<?php echo $path; ?>assets/images/collection/demo5-ct-img2.jpg" alt="collection" title="" width="533" height="447" />
                                            </div>
                                            <div class="details middle-center text-center d-flex-justify-center whiteText offerText w-100 h-100 p-0">
                                                <p class="tex-top text-uppercase m-0">Super Sale</p>
                                                <h3 class="pro-sale m-0"><span class="tex1 d-block">Get 40%</span><span class="tex2 d-block my-2 my-md-0">OFF</span><span class="tex3 d-block">All Products</span></h3>
                                                <p class="tex-bom m-0">Discount Code <span class="code fw-bold m-0 d-block text-uppercase">Hema40</span></p>
                                            </div>
                                        </a>
                                    </div>                                
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 collection-banner-item">
                                    <div class="collection-item sp-col">
                                        <a href="shop-left-sidebar.html" class="zoom-scal clr-none">
                                            <div class="img">
                                                <img class="w-100 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/collection/demo5-ct-img3.jpg" src="<?php echo $path; ?>assets/images/collection/demo5-ct-img3.jpg" alt="collection" title="" width="533" height="447" />
                                            </div>
                                            <div class="details middle-right">
                                                <div class="inner text-left">
                                                    <h3 class="title">Garden <br>Tools</h3>
                                                    <p class="counts">12 Products</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                End Collection banner-->

               

                <!--Blog Post-->
                <section class="section home-blog-post">
                    <div class="container">
                        <div class="section-header">
                            <h2>Latest from our Blog</h2>
                        </div>

                        <div class="blog-slider-3items blog-post-style2 gp15 arwOut5 hov-arrow">
                            <div class="blog-item">
                                <div class="blog-article zoomscal-hov bg-white">
                                    <div class="blog-img">
                                        <a class="featured-image zoom-scal m-0" href="blog-details.html"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/blog/demo5-post1.jpg" src="<?php echo $path; ?>assets/images/blog/demo5-post1.jpg" alt="New shop collection our shop" width="740" height="410" /></a>
                                    </div>
                                    <div class="blog-content py-4 pb-0">
                                        <ul class="publish-detail d-flex-wrap text-uppercase mb-2">                      
                                            <li><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                            <li><i class="icon anm anm-calendar"></i> <time datetime="">Mon - Fri ( 1hrs or 2hrs )</time></li>
                                        </ul>
                                        <h2 class="h3 m-0 text-none"><a href="blog-details.html">New shop collection our shop</a></h2>                                                                                
                                        <div class="blog-bottom d-flex-center justify-content-between mt-3">
                                            <a href="blog-details.html" class="text-link text-decoration-none text-uppercase">Read More<i class="icon anm anm-arw-right ms-2"></i></a>
                                            <a href="#" class="text-link text-decoration-none"><i class="icon anm anm-comments-l me-2"></i>12</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-article zoomscal-hov bg-white">
                                    <div class="blog-img">
                                        <a class="featured-image zoom-scal m-0" href="blog-details.html"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/blog/demo5-post2.jpg" src="<?php echo $path; ?>assets/images/blog/demo5-post2.jpg" alt="Gift ideas for everyone" width="740" height="410" /></a>
                                    </div>
                                    <div class="blog-content py-4 pb-0">
                                        <ul class="publish-detail d-flex-wrap text-uppercase mb-2">                      
                                            <li><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                            <li><i class="icon anm anm-calendar"></i> <time datetime="">Jan 24, 2023</time></li>
                                        </ul>
                                        <h2 class="h3 m-0 text-none"><a href="blog-details.html">Best gift ideas for everyone</a></h2>                                                                             
                                        <div class="blog-bottom d-flex-center justify-content-between mt-3">
                                            <a href="blog-details.html" class="text-link text-decoration-none text-uppercase">Read More<i class="icon anm anm-arw-right ms-2"></i></a>
                                            <a href="#" class="text-link text-decoration-none"><i class="icon anm anm-comments-l me-2"></i>12</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-article zoomscal-hov bg-white">
                                    <div class="blog-img">
                                        <a class="featured-image zoom-scal m-0" href="blog-details.html"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/blog/demo5-post3.jpg" src="<?php echo $path; ?>assets/images/blog/demo5-post3.jpg" alt="Sales with best collection" width="740" height="410" /></a>
                                    </div>
                                    <div class="blog-content py-4 pb-0">
                                        <ul class="publish-detail d-flex-wrap text-uppercase mb-2">                      
                                            <li><i class="icon anm anm-user-al"></i> <span>Online / Offline</span></li>
                                            <li><i class="icon anm anm-calendar"></i> <time datetime="">Feb 14, 2023</time></li>
                                        </ul>
                                        <h2 class="h3 m-0 text-none"><a href="blog-details.html">Sales with best collection</a></h2>                                     
                                        <div class="blog-bottom d-flex-center justify-content-between mt-3">
                                            <a href="blog-details.html" class="text-link text-decoration-none text-uppercase">Read More<i class="icon anm anm-arw-right ms-2"></i></a>
                                            <a href="#" class="text-link text-decoration-none"><i class="icon anm anm-comments-l me-2"></i>12</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Blog Post-->

                <!--Service Section
                <section class="section service-section section-clr mt-m6">
                    <div class="container">
                        <div class="service-info text-center service-slider-5items gp15 arwOut5 slick-arrow-dots">
                            <div class="service-wrap">
                                <div class="service-icon mb-2 pb-1">
                                    <i class="icon anm anm-check-badge-r"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="fs-5 mb-2">Products Quality</h3>
                                    <span class="text-muted">Comprehensive quality control and affordable prices</span>
                                </div>
                            </div>
                            <div class="service-wrap">
                                <div class="service-icon mb-2 pb-1">
                                    <i class="icon anm anm-home-r"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="fs-5 mb-2">Global Warehouse</h3>
                                    <span class="text-muted">Shop from 20+ warehouses world wide.</span>
                                </div>
                            </div>
                            <div class="service-wrap">
                                <div class="service-icon mb-2 pb-1">
                                    <i class="icon anm anm-truck-r"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="fs-5 mb-2">Fast Shipping</h3>
                                    <span class="text-muted">Fast and convenient door to door delivery</span>
                                </div>
                            </div>
                            <div class="service-wrap">
                                <div class="service-icon mb-2 pb-1">
                                    <i class="icon anm anm-lock-ar"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="fs-5 mb-2">Payment Security</h3>
                                    <span class="text-muted">More than 8 different secure payment methods</span>
                                </div>
                            </div>
                            <div class="service-wrap">
                                <div class="service-icon mb-2 pb-1">
                                    <i class="icon anm anm-phone-call-l"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="fs-5 mb-2">Dedicated Support</h3>
                                    <span class="text-muted">24/7 Customer Service - We're here & happy to help!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                End Service Section-->

            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <div class="footer footer-5 ftr-bg-black">


                <div class="footer-top border-0 clearfix">
                    <div class="container">                       
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="footer-newsletter icon-arrow">
                                <img src="<?php echo $path; ?>assets/images/samlogo.jpg" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" class="footer-img" width="250" height="70" /><br>
                                        <p>Samuthrika academy, is our educational institution, we offers specialized tutoring, instruction, or training to students or individuals seeking to improve their skills, knowledge, or performance in a particular subject, field, or area. </p>
                                   
                                       
                                        <ul class="list-inline social-icons d-inline-flex mt-3 pt-3" >
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                                  
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links ps-lg-5">
                                <h4 class="h4">My Account</h4>
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="faqs-style1.html">Order History</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="#">Orders & Cart</a></li>
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
                                <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> 10th Cross West Extension, Thillai Nagar, Trichy - 620018</p>
                                <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i>  <b class="me-2 fw-400">Mobile.No</b> <a href="tel:401234567890">07947336473</a></p>
                                <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b class="me-1 d-none">Email:</b> <a href="mailto:info@example.com">info@example.com</a></p>
                                <p class="work-hour d-flex mb-0"><i class="icon anm anm-clock-r pt-1"></i><span class="hour-time">Working Hours: <br/>Mon - Sun / 9:00 AM - 8:00 PM</span></p>    
                          
                            </div>
                        </div>
                          
                    </div>                      
                    <p class="copytext" style="text-align:center;margin-top:2%;">&copy; Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, exercitationem? Nostrum labore praesentium eaque suscipit ipsa et mollitia officia adipisci consequuntur ratione veniam dolore enim maiores magnam, pariatur aspernatur consectetur..</p>
                       

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
            <div id="site-scroll" style="background-color: orangered;"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->

            

            <!-- Product Quickshop Modal-->
            <div class="quickshop-modal modal fade" id="quickshop_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-quickshop" class="product-form align-items-center">
                                <!-- Product Info -->
                                <div class="row g-0 item mb-3">
                                    <a class="col-4 product-image" href="product-layout1.html"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools3.jpg" src="<?php echo $path; ?>assets/images/products/tools3.jpg" alt="Product" title="Product" width="625" height="781" /></a>
                                    <div class="col-8 product-details">
                                        <div class="product-variant ps-3">
                                            <div class="variant-cart mb-1">Tools-parts</div>
                                            <a class="product-title" href="product-layout1.html">Planes Hand tool</a>
                                            <div class="priceRow mt-2 mb-3">
                                                <div class="product-price m-0"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                            </div>
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                <input type="text" name="quantity" value="1" class="qty">
                                                <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Info -->
                                <!-- Swatches Color -->
                                <div class="variants-clr swatches-image clearfix mb-3 swatch-0 option1" data-option-index="0">
                                    <label class="label d-flex justify-content-center">Color:<span class="slVariant ms-1 fw-bold">Black</span></label>
                                    <ul class="swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large radius available active"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius available"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" /></li>
                                        <li class="swatch large radius available"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                        <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Color -->
                                <!-- Swatches Size -->
                                <div class="variants-size swatches-size clearfix mb-4 swatch-1 option2" data-option-index="1">
                                    <label class="label d-flex justify-content-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                    <ul class="size-swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                        <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Size -->
                                <!-- Product Action -->
                                <div class="product-form-submit d-flex-justify-center">
                                    <button type="submit" name="add" class="btn btn-primary product-cart-submit me-2"><span>Add to cart</span></button>
                                    <button type="submit" name="sold" class="btn btn-secondary product-sold-out d-none" disabled="disabled">Sold out</button>
                                    <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout">Buy it now</button>
                                </div>
                                <!-- End Product Action -->
                                <div class="text-center mt-3"><a class="text-link" href="product-layout1.html">View More Details</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Quickshop Modal -->

            <!-- Product Addtocart Modal-->
            <div class="addtocart-modal modal fade" id="addtocart_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-addtocart" class="product-form align-items-center">
                                <h3 class="title mb-3 text-success text-center">Added to cart Successfully!</h3>
                                <div class="row d-flex-center text-center">
                                    <div class="col-md-6">
                                        <!-- Product Image -->
                                        <a class="product-image" href="product-layout1.html"><img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools3.jpg" src="<?php echo $path; ?>assets/images/products/tools3.jpg" alt="Product" title="Product" width="625" height="781" /></a>
                                        <!-- End Product Image -->
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <!-- Product Info -->
                                        <div class="product-details">
                                            <div class="variant-cart mb-1">Tools-parts</div>
                                            <a class="product-title" href="product-layout1.html">Planes Hand tool</a>
                                            <p class="product-clr my-2 text-muted">Black / XL</p>
                                        </div>
                                        <div class="addcart-total rounded-5">
                                            <p class="product-items mb-2">There are <strong>1</strong> items in your cart</p>
                                            <p class="d-flex-justify-center">Total: <span class="price">$198.00</span></p>
                                        </div>
                                        <!-- End Product Info -->
                                        <!-- Product Action -->
                                        <div class="product-form-submit d-flex-justify-center">
                                            <a href="#" class="btn btn-outline-primary product-continue w-100">Continue Shopping</a>
                                            <a href="cart-style1.html" class="btn btn-secondary product-viewcart w-100 my-2 my-md-3">View Cart</a>
                                            <a href="checkout-style1.html" class="btn btn-primary product-checkout w-100">Proceed to checkout</a>
                                        </div>
                                        <!-- End Product Action -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Addtocart Modal -->

            <!-- Product Quickview Modal-->
            <div class="quickview-modal modal fade" id="quickview_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                    <!-- Model Thumbnail -->
                                    <div id="quickView" class="carousel slide">
                                        <!-- Image Slide carousel items -->
                                        <div class="carousel-inner">
                                            <div class="item carousel-item active" data-bs-slide-number="0">
                                                <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools1.jpg" src="<?php echo $path; ?>assets/images/products/tools1.jpg" alt="product" title="Product" width="625" height="781" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="1">
                                                <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools2.jpg" src="<?php echo $path; ?>assets/images/products/tools2.jpg" alt="product" title="Product" width="625" height="781" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="2">
                                                <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools3.jpg" src="<?php echo $path; ?>assets/images/products/tools3.jpg" alt="product" title="Product" width="625" height="781" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="3">
                                                <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools4.jpg" src="<?php echo $path; ?>assets/images/products/tools4.jpg" alt="product" title="Product" width="625" height="781" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="4">
                                                <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools5.jpg" src="<?php echo $path; ?>assets/images/products/tools5.jpg" alt="product" title="Product" width="625" height="781" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="5">
                                                <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools6.jpg" src="<?php echo $path; ?>assets/images/products/tools6.jpg" alt="product" title="Product" width="625" height="781" />
                                            </div>
                                        </div>
                                        <!-- End Image Slide carousel items -->
                                        <!-- Thumbnail image -->
                                        <div class="model-thumbnail-img">
                                            <!-- Thumbnail slide -->
                                            <div class="carousel-indicators list-inline">
                                                <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                                    <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools1.jpg" src="<?php echo $path; ?>assets/images/products/tools1.jpg" alt="product" title="Product" width="625" height="781" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                                    <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools2.jpg" src="<?php echo $path; ?>assets/images/products/tools2.jpg" alt="product" title="Product" width="625" height="781" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                                    <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools3.jpg" src="<?php echo $path; ?>assets/images/products/tools3.jpg" alt="product" title="Product" width="625" height="781" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                                    <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools4.jpg" src="<?php echo $path; ?>assets/images/products/tools4.jpg" alt="product" title="Product" width="625" height="781" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                                    <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools5.jpg" src="<?php echo $path; ?>assets/images/products/tools5.jpg" alt="product" title="Product" width="625" height="781" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-5" data-bs-slide-to="5" data-bs-target="#quickView">
                                                    <img class="blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/tools6.jpg" src="<?php echo $path; ?>assets/images/products/tools6.jpg" alt="product" title="Product" width="625" height="781" />
                                                </div>
                                            </div>
                                            <!-- End Thumbnail slide -->
                                            <!-- Carousel arrow button -->
                                            <a class="carousel-control-prev carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon anm anm-angle-left-r"></i></a>
                                            <a class="carousel-control-next carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon anm anm-angle-right-r"></i></a>
                                            <!-- End Carousel arrow button -->
                                        </div>
                                        <!-- End Thumbnail image -->
                                    </div>
                                    <!-- End Model Thumbnail -->
                                    <div class="text-center mt-3"><a href=" " class="text-link">View More Details</a></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="product-subtitle">Tools-parts</div>
                                    <div class="product-arrow d-flex justify-content-between">
                                        <h2 class="product-title">Product Quick View Popup</h2>
                                        <div class="arrows d-flex">
                                            <a class="pro-next" href="product-layout2.html" title="Previous"><i class="icon anm anm-angle-left-l"></i></a>
                                            <a class="pro-prev" href="product-layout3.html" title="Next"><i class="icon anm anm-angle-right-l"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-review d-flex mt-0 mb-2">
                                        <div class="rating"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                        <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-vendor">Vendor:<span class="text"><a href="#">Tools-parts</a></span></p>  
                                        <p class="product-type">Product Type:<span class="text">Plasterer</span></p> 
                                        <p class="product-sku">SKU:<span class="text">RF104</span></p>
                                    </div>
                                    <div class="pro-stockLbl my-2">
                                        <span class="d-flex-center stockLbl instock d-none"><i class="icon anm anm-check-cil text-primary"></i><span> In stock</span></span>
                                        <span class="d-flex-center stockLbl preorder d-none"><i class="icon anm anm-clock-r text-primary"></i><span> Pre-order Now</span></span>
                                        <span class="d-flex-center stockLbl outstock d-none"><i class="icon anm anm-times-cil text-primary"></i> <span>Sold out</span></span>
                                        <span class="d-flex-center stockLbl lowstock" data-qty="15"><i class="icon anm anm-exclamation-cir text-primary"></i><span> Order now, Only <span class="items text-primary">10</span> left!</span></span>
                                    </div>
                                    <div class="product-price d-flex-center my-3">
                                        <span class="price old-price">$135.00</span><span class="price">$99.00</span>

                                    </div>
                                    <div class="sort-description">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</div>
                                    <form method="post" action="#" id="product_form--option" class="product-form">
                                        <div class="product-options d-flex-wrap">
                                            <div class="product-item swatches-image w-100 mb-3 swatch-0 option1" data-option-index="0">
                                                <label class="label d-flex align-items-center">Color:<span class="slVariant ms-1 fw-bold">Blue</span></label>
                                                <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius available active"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large radius available"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" /></li>
                                                    <li class="swatch large radius available"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                    <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                                    <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                                </ul>
                                            </div>
                                            <div class="product-item swatches-size w-100 mb-3 swatch-1 option2" data-option-index="1">
                                                <label class="label d-flex align-items-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                                <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                                    <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                                </ul>
                                            </div>
                                            <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                                <div class="quantity">
                                                    <div class="qtyField rounded">
                                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>                                
                                                <div class="addtocart ms-3 fl-1">
                                                    <button type="submit" name="add" class="btn btn-primary product-cart-submit w-100"><i class="icon anm anm-cart-l me-2"></i><span>Add to cart</span></button>
                                                    <button type="submit" name="sold" class="btn btn-secondary product-sold-out w-100 d-none" disabled="disabled"><span>Sold out</span></button>
                                                    <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout w-100 d-none"><span>Buy it now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="wishlist-btn d-flex-center">
                                        <a class="add-wishlist d-flex-center me-3" href="wishlist-style1.html" title="Add to Wishlist"><i class="icon anm anm-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                                        <a class="add-compare d-flex-center" href="compare-style1.html" title="Add to Compare"><i class="icon anm anm-random-r me-2"></i> <span>Add to Compare</span></a>
                                    </div>
                                    <!-- Social Sharing -->
                                    <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                        <span class="sharing-lbl">Share :</span>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title d-none">Facebook</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon anm anm-twitter"></i><span class="share-title d-none">Tweet</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">Pin it</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon anm anm-linkedin-in"></i><span class="share-title d-none">Instagram</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon anm anm-envelope-l"></i><span class="share-title d-none">WhatsApp</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon anm anm-whatsapp"></i><span class="share-title d-none">Email</span></a>
                                    </div>
                                    <!-- End Social Sharing -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Product Quickview Modal-->

            <!--Newsletter Modal
            <div class="newsletter-modal style4 modal fade" id="newsletter_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-body p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="newsletter-wrap d-flex flex-row align-items-center">
                                <div class="newsltr-img col-12 col-md-5 d-none d-sm-none d-md-block">
                                    <img class="rounded-end-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/newsletter/newsletter-s7.jpg" src="<?php echo $path; ?>assets/images/newsletter/newsletter-s7.jpg" alt="image" width="350" height="466" />
                                </div>
                                <div class="newsltr-text col-12 col-md-7 text-center text-md-start">
                                    <div class="wraptext mw-100 text-center">
                                        <h2 class="title mb-3">Sign Up For Newsletters</h2>
                                        <p class="text mb-3">Subscribe to the mailing list to receive updates on new arrivals, special offers</p>
                                        <form action="#" method="post" class="mcNewsletter mb-3">                               
                                            <div class="input-group">
                                                <input type="email" class="form-control input-group-field newsletter-input" name="email" value="" placeholder="Enter your email address..." required />
                                                <button type="submit" class="input-group-btn btn btn-secondary newsletter-submit" name="commit">Subscribe</button>
                                            </div>
                                        </form>
                                        <ul class="list-inline social-icons d-inline-flex justify-content-center mb-3 w-100">
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                                        </ul>
                                        <div class="customCheckbox checkboxlink clearfix justify-content-center">
                                            <input id="dontshow" name="newsPopup" type="checkbox" />
                                            <label for="dontshow" class="mb-0">Don't show this popup again</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--End Newsletter Modal-->


            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="<?php echo $path; ?>assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?php echo $path; ?>assets/js/main.js"></script>

            <!--Newsletter Modal Cookies-->
            <script>
                $(window).ready(function () {
                    setTimeout(function () {
                        $('#newsletter_modal').modal("show");
                    }, 7000);
                });
            </script>
            <!--End Newsletter Modal Cookies-->

        </div>
        <!--End Page Wrapper-->
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/index5-tools-parts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:16:17 GMT -->
</html>