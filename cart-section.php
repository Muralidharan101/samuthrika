<?php include 'dashboard/main/ajax/datab.php'; ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/cart-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:53 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Cart Style1 - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path; ?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/responsive.css">
</head>

<style>
    .footer-img {
        margin-bottom: 14px;
    } 
                    #no_prod {
                        background-color: rgba(0, 0, 0, 0.5);
      
                    } 
                    #quickview_modal{
                        background-color: rgba(0, 0, 0, 0.5);  display: flex !important;
        align-items: center !important;
        justify-content: center !important;
                    }

     


</style>

<body class="cart-page cart-style1-page">
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
                                <h1>Your Cart</h1>
                            </div>
                            <!--Breadcrumbs-->
                            <div class="breadcrumbs"></div>
                            <!--End Breadcrumbs-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Main Content-->
            <div class="container">
                <div class="row">
                    <!--Cart Content-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">

                        <!--End Alert msg-->

                        <!--Cart Form-->
                        <form action="#" method="post" class="cart-table table-bottom-brd">
                            <table class="table align-middle">
                                <thead class="cart-row cart-header small-hide position-relative">
                                    <tr>
                                        <th class="action">&nbsp;</th>
                                        <th colspan="2" class="text-start">Product</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart-row cart-flex position-relative" id="product-carts">


                                    </tr>


                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </form>
                        <!--End Cart Form-->

                    </div>
                    <!--End Cart Content-->

                    <!--Cart Sidebar-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                        <div class="cart-info sidebar-sticky">
                            <div class="cart-order-detail cart-col">
                                <div class="row g-0 border-bottom pb-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            class="money" id="total-price"></span></span>
                                </div>

                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>CGST</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            class="money">18%</span></span>
                                </div>

                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>SGST</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            class="money">18%</span></span>
                                </div>

                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            id="shipping-price">₹50</span></span>
                                </div>

                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>GST calc</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            id="gst-total"></span></span>
                                </div>

                                <div class="row g-0 pt-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                    <span
                                        class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary">
                                        <b id="grand-total-price"></b></span>
                                </div>

                                <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p>
                                <p class="cart-shipping fst-normal freeShipclaim"><i
                                        class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE
                                </p>
                                <div class="customCheckbox cart-tearm">
                                    <input type="checkbox" value="allen-vela" id="cart-tearm">
                                    <label for="cart-tearm">I agree with the terms and conditions</label>
                                </div>
                                <a href="#" id="cartCheckout" class="btn btn-lg my-4 checkout w-100"
                                    style="background-color:orangered;">Proceed To Checkout</a>
                                <div class="paymnet-img text-center"><img
                                        src="<?php echo $path; ?>assets/images/icons/safepayment.png" alt="Payment"
                                        width="299" height="28" /></div>
                            </div>
                        </div>
                    </div>
                    <!--End Cart Sidebar-->
                </div>
            </div>
            <!--End Main Content-->
            <div class="modal fade" id="no_prod" tabindex="" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>Your Orders have been placed. Our associate will call you.</p>
                        <a href="shop_trophy.php" class="btn btn-lg btn-success">
                            Send Message
                        </a>
                        <a href="shop_trophy.php" class="btn btn-lg btn-success">
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
        <!-- End Body Container -->

        <!--Footer-->
        <div class="footer footer-5 ftr-bg-black">


            <div class="footer-top border-0 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="footer-newsletter icon-arrow">
                                <img src="<?php echo $path; ?>assets/images/samlogo.jpg"
                                    alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template"
                                    class="footer-img" width="250" height="70" /><br>
                                <p>Samuthrika academy, is our educational institution, we offers specialized tutoring,
                                    instruction, or training to students or individuals seeking to improve their skills,
                                    knowledge, or performance in a particular subject, field, or area. </p>


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
                            <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> 10th Cross West
                                Extension, Thillai Nagar, Trichy - 620018</p>
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
                    ipsa et mollitia officia adipisci consequuntur ratione veniam dolore enim maiores magnam, pariatur
                    aspernatur consectetur..</p>


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
        <script src="<?php echo $path; ?>assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path; ?>assets/js/main.js"></script>



        <script>
                let product_Grand_total = 0,
                    totalTax = 0,
                    grandTotal;
                let shippingCharge = 50;


                let product_category, imgFile;
               // Dummy data array (replace this with your actual data)
let dummyData = [
  {
    id: 1,
    name: 'Product 1',
    code: 'ABC123',
    price: 100.00,
    quantity: 2,
    image: 'saree9.jpg',
  },
  {
    id: 2,
    name: 'Product 2',
    code: 'DEF456',
    price: 50.00,
    quantity: 1,
    image: 'jewel7.jpg',
  },
  // Add more dummy data objects as needed
];

// Get the product cart element
const productCart = document.getElementById('product-carts');

// Function to render the cart items

  productCart.innerHTML = ''; // Clear existing content

  dummyData.forEach(item => {
    let html = `
      <tr data-id="${item.id}">
        <td class="cart-delete text-center small-hide">
          <button class="removeCookieButton" data-id="${item.id}">
            <div class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from Cart">
              <i class="icon anm anm-times-r"></i>
            </div>
          </button>
        </td>
        <td class="cart-image cart-flex-item">
          <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload" data-src="${item.image}" src="${item.image}" alt="${item.name}" width="120" height="170" /></a>
        </td>
        <td class="cart-meta small-text-left cart-flex-item">
          <div class="list-view-item-title">
            <a href="product-layout1.html" class="Product_Name">${item.name}</a>
          </div>
          <div class="cart-meta-text">
            Code: ${item.code}
          </div>
          <div class="cart-price d-md-none">
            <span class="money fw-500">₹${item.price}</span>
          </div>
        </td>
        <td class="cart-price cart-flex-item text-center small-hide">
          <span class="money" style="font-size:10px;">₹${item.price}</span>
        </td>
        <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
          <div class="cart-qty d-flex justify-content-end justify-content-md-center">
            <div class="qtyField">
              <button class="qtyBtn minus" data-id="${item.id}"><i class="icon anm anm-minus-r"></i></button>
              <input class="cart-qty-input qty" type="text" value="${item.quantity}" data-id="${item.id}"/>
              <button class="qtyBtn plus" data-id="${item.id}"><i class="icon anm anm-plus-r"></i></button>
            </div>
          </div>
          <button class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3" data-id="${item.id}">Remove</button>
        </td>
        <td class="cart-price cart-flex-item text-center small-hide">
          <span class="money fw-500" id="money-view-${item.id}">₹${(item.price * item.quantity).toFixed(2)}</span>
        </td>
      </tr>
    `;
    productCart.insertAdjacentHTML('beforebegin', html);
  });


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

    $('#cartCheckout').on('click', function() {
                // $('#ref_no').text('ON' + Math.floor(10000 + Math.random() * 90000));

                var modal = $('#no_prod');
                modal.modal('show');
            });
 </script>

    

    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/cart-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:55 GMT -->

</html>