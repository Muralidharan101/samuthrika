<?php include 'dashboard/main/ajax/datab.php'; ?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/shop-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:28 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Shop Grid - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path;?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/responsive.css">
</head>
<style>
 

    .footer-img {
        margin-bottom: 14px;
    }

    .product-main-title {
        text-transform: capitalize;
    }

    #selectedOpts {
        font-size: .8rem;
        width: 100%;
    }
</style>

<body class="shop-page sidebar-filter shop-grid-view-page">
    <!--Page Wrapper-->
    <div class="page-wrapper">



        <!-- Body Container -->
        <div id="page-content">
            
        <!--Header-->
        <?php include 'header.php';?>
        <!--End Header-->
        <!--Mobile Menu-->
        <?php include 'sidebar.php';?>
        <!--End Mobile Menu-->

            <!--Page Header-->
            <div class="page-header text-center">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                            <div class="page-title">
                                <h1>Product Clothes</h1>
                            </div>
                            <!--Breadcrumbs-->
                            <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span
                                    class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span><span
                                    class="main-title"><i class="icon anm anm-angle-right-l"></i>Clothes</span></div>
                            <!--End Breadcrumbs-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->
            <!--Main Content-->
            <div class="container">


                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                        <div class="closeFilter"><i class="icon anm anm-times-r"></i></div>
                        <div class="sidebar-tags clearfix">
                            <!--Filter By-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Filter By</h2>
                                </div>
                                <div class="widget-content filterby filterDD">
                                    <ul class="items tags-list d-flex-wrap">
                                        <li class="item"><a href="#;" class="rounded-5"><span
                                                    class="filter-value">Women</span><i
                                                    class="icon anm anm-times-r"></i></a></li>
                                        <li class="item"><a href="#;" class="rounded-5"><span
                                                    class="filter-value">Blue</span><i
                                                    class="icon anm anm-times-r"></i></a></li>
                                        <li class="item"><a href="#;" class="rounded-5"><span
                                                    class="filter-value">XL</span><i
                                                    class="icon anm anm-times-r"></i></a></li>
                                    </ul>
                                    <a href="#;" class="btn btn-sm brd-link">Clear All</a>
                                </div>
                            </div>
                            <!--End Filter By-->
                            <!--Categories-->
                            <div class="sidebar-widget clearfix categories filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="sidebar-categories scrollspy morelist clearfix">
                                        <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Clothing</a>
                                            <ul class="sublinks">
                                                <li class="lvl2 sub-level sub-sub-level"><a href="#;"
                                                        class="site-nav">Men</a>
                                                    <ul class="sublinks">
                                                        <li class="lvl3"><a href="#" class="site-nav">Shirt <span
                                                                    class="count">(25)</span></a></li>
                                                        <li class="lvl3"><a href="#" class="site-nav">Jeans <span
                                                                    class="count">(6)</span></a></li>
                                                        <li class="lvl3"><a href="#" class="site-nav">Shoes <span
                                                                    class="count">(9)</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl2"><a href="#" class="site-nav">Women <span
                                                            class="count">(14)</span></a></li>
                                                <li class="lvl2"><a href="#" class="site-nav">Child <span
                                                            class="count">(26)</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Jewellery</a>
                                            <ul class="sublinks">
                                                <li class="lvl2"><a href="#" class="site-nav">Ring <span
                                                            class="count">(12)</span></a></li>
                                                <li class="lvl2"><a href="#" class="site-nav">Neckalses <span
                                                            class="count">(15)</span></a></li>
                                                <li class="lvl2"><a href="#" class="site-nav">Eaarings <span
                                                            class="count">(18)</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Accessories <span
                                                    class="count">(14)</span></a></li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Shoes <span
                                                    class="count">(18)</span></a></li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Electronic <span
                                                    class="count">(22)</span></a></li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Cosmetics <span
                                                    class="count">(27)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Categories-->
                            <!--Price Filter-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Price</h2>
                                </div>
                                <form class="widget-content price-filter filterDD" action="#" method="post">
                                    <div id="slider-range" class="mt-2"></div>
                                    <div class="row">
                                        <div class="col-6"><input id="amount" type="text" /></div>
                                        <div class="col-6 text-right"><button class="btn btn-sm">filter</button></div>
                                    </div>
                                </form>
                            </div>
                            <!--End Price Filter-->
                            <!--Color Swatches-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Color</h2>
                                </div>
                                <div class="widget-content filter-color filterDD">
                                    <ul class="swacth-list swatches d-flex-center clearfix pt-0">
                                        <li class="swatch large radius available active"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius available"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Black" /></li>
                                        <li class="swatch large radius available"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large radius available"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Red" /></li>
                                        <li class="swatch large radius available black"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span>
                                        </li>
                                        <li class="swatch large radius available red"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Red"></span>
                                        </li>
                                        <li class="swatch large radius available blue"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span>
                                        </li>
                                        <li class="swatch large radius available pink"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Pink"></span>
                                        </li>
                                        <li class="swatch large radius available gray"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Gray"></span>
                                        </li>
                                        <li class="swatch large radius available green"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span>
                                        </li>
                                        <li class="swatch large radius available orange"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Orange"></span>
                                        </li>
                                        <li class="swatch large radius soldout yellow"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Color Swatches-->
                            <!--Size Swatches-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Size</h2>
                                </div>
                                <div class="widget-content filter-size filterDD">
                                    <ul class="swacth-list size-swatches d-flex-center clearfix">
                                        <li class="swatch large radius soldout"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="X">X</span></li>
                                        <li class="swatch large radius available active"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XLL">XLL</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XXL">XXL</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="25">25</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="35">35</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Size Swatches-->
                            <!--Product type-->
                            <div class="sidebar-widget filterBox filter-widget product-type">
                                <div class="widget-title">
                                    <h2>Product type</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="clearfix">
                                        <li><input type="checkbox" value="fashion" id="fashion"><label
                                                for="fashion"><span></span>Fashion</label></li>
                                        <li><input type="checkbox" value="electronic" id="electronic"><label
                                                for="electronic"><span></span>Electronic</label></li>
                                        <li><input type="checkbox" value="shoes" id="shoes"><label
                                                for="shoes"><span></span>Shoes</label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Product type-->
                            <!--Brand-->
                            <div class="sidebar-widget filterBox filter-widget brand-filter">
                                <div class="widget-title">
                                    <h2>Brands</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="clearfix">
                                        <li><input type="checkbox" value="avone" id="avone"><label
                                                for="avone"><span></span>Avone</label></li>
                                        <li><input type="checkbox" value="diva" id="diva"><label
                                                for="diva"><span></span>Diva</label></li>
                                        <li><input type="checkbox" value="optimal" id="optimal"><label
                                                for="optimal"><span></span>Optimal</label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Brand-->
                            <!--Availability-->
                            <div class="sidebar-widget filterBox filter-widget availability">
                                <div class="widget-title">
                                    <h2>Availability</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="clearfix">
                                        <li><input type="checkbox" value="instock" id="instock"><label
                                                for="instock"><span></span>In stock</label></li>
                                        <li><input type="checkbox" value="outofstock" id="outofstock"><label
                                                for="outofstock"><span></span>Out of stock</label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Availability-->
                            <!--Product Tags-->
                            <div class="sidebar-widget filterBox filter-widget product-tag">
                                <div class="widget-title">
                                    <h2>Product Tags</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="tags-list product-tags d-flex-wrap clearfix">
                                        <li class="item active"><a class="rounded-5" href="#">Women</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Shoes</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Beauty</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Accessories</a></li>
                                        <li class="item"><a class="rounded-5" href="#">$100 - $400</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Above $800</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Black</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Blue</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Red</a></li>
                                        <li class="item"><a class="rounded-5" href="#">M</a></li>
                                        <li class="item"><a class="rounded-5" href="#">XS</a></li>
                                    </ul>
                                    <span class="btn btn-sm brd-link btnview">View all</span>
                                </div>
                            </div>
                            <!--End Product Tags-->
                        </div>
                    </div>
                    <!--End Sidebar-->

                    <!--Products-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                        <!--Product Grid-->
                        <div class="grid-products grid-view-items">
                            <div
                                class="row col-row product-options row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2" id="cart-product">

                                  
                            </div>

                            <!-- Pagination -->
                            <nav class="clearfix pagination-bottom">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#"><i
                                                class="icon anm anm-angle-left-l"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="icon anm anm-angle-right-l"></i></a></li>
                                </ul>
                            </nav>
                            <!-- End Pagination -->
                        </div>
                        <!--End Product Grid-->
                    </div>
                    <!--End Products-->
                </div>
            </div>
            <!--End Main Content-->
        </div>
        <!-- End Body Container -->

        <!--Footer-->
        <?php include 'footer.php';?>
        <!--End Footer-->

        <!--Scoll Top-->
        <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
        <!--End Scoll Top-->


  


        <!-- Sticky Cart 
        <div class="stickyCart">
            <div class="container">
                <form method="post" action="#" id="stickycart-form" class="d-flex-center justify-content-center">
                    <div class="product-featured-img"><img class="blur-up lazyload"
                            data-src="<?php echo $path ?>img/tennis.png"
                            src="<?php echo $path ?>assets/images/products/product1-120x170.jpg" alt="product"
                            width="120" height="170" /></div>
                    <div class="sticky-title ms-2 ps-1 pe-5">Tennis Trophy</div>
                    <div class="stickyOptions position-relative">
                        <div class="selectedOpt" id="selectedOpts">Small / 140mm -&nbsp;<span
                                class="money">₹2,50,000</span></div>
                        <ul>
                            <li class="vrOpt" data-val="31677941252156" data-no="0">Small / 120mm - ₹2,50,000</li>
                            <li class="vrOpt" data-val="31677941383228" data-no="1">Medium / 140mm - ₹3,75,000</li>
                            <li class="vrOpt" data-val="31677941514300" data-no="2">Large / 155mm - ₹5,50,000</li>
                        </ul>
                    </div>
                    <select name="id" id="variantOptions1" class="product-form__variants selectbox no-js d-none ms-3">
                        <option selected="selected" value="31677941252156">Red / S</option>
                        <option value="31677941383228">RSmall / 120mm</option>
                        <option value="31677941514300">Medium / 140m</option>
                        <option value="31677941678140">Large / 155mm</option>
                        </select>

                    <div class="qtyField mx-2">
                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                        <input type="text" name="quantity" value="1" class="product-form-input qty" />
                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                    </div>
                    <button type="submit" name="add" class="btn btn-secondary product-form-cart-submit">
                        <span>Add to cart</span>
                    </button>
                </form>
            </div>
        </div>
         End Sticky Cart -->

        <!-- Including Jquery/Javascript -->
        <!-- Plugins JS -->
        <script src="<?php echo $path;?>assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path;?>assets/js/main.js"></script>
        
<script>


$(document).ready(function(){
    var product_id;
                   

    function fetchdata(){   

               

                $.ajax({
                    url: 'dashboard/main/ajax/clothes/list_clothes.php',
                    type: 'get',

                    success:function(response)
                    {
                        var result = JSON.parse(response);
                        console.log(result);
                        
                      var cart =  document.getElementById('cart-product');

                        if(result.status == 'Success')
                        {
                            var data = result.data;


                            data.map(function(value) {
                        
                    
                                console.log(product_id);
                               
                                var cartHtml = `
                        <div class="item col-item" >

                            <div class="product-box">
                                
                                <div class="product-image">
                                    
                                    <a href="products-desc.php?id=${value.id}" class="product-img rounded-0">
                                        
                                        <img class=""
                                            data-src="dashboard/main/product_clothes_images/${value.id}/${value.product_img}"
                                            src="dashboard/main/product_clothes_images/${value.id}/${value.product_img}"
                                            alt="Product" title="Product" width="625" height="808" />
                                    </a>
                                    
                                </div>
                                
                                <div class="product-details text-left">
                                        <div class="product-vendor">Product-Clothes</div>
                                    
                                    <div class="product-name">
                                        <a href="products-desc.php?id=${value.id}">${value.product_name}</a>
                                    </div>
                                    
                                    <div class="product-price">
                                        <span class="price">${value.product_price}</span>
                                    </div>
                                    
                                    <p class="sort-desc hidden">${value.product_desc}</p>
                                    
                                    <div class="button-action hidden">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-cart-l me-2"></i><span
                                                        class="text">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                        </div>
                            </div>
                            `;

                            cart.insertAdjacentHTML("beforeend", cartHtml);




                                
                            });
                        }
                    }
                })
            } fetchdata();

})
         </script>

    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/shop-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:29 GMT -->

</html>