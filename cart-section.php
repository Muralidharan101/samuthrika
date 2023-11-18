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
                                        class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary" >
                                        <b id="grand-total-price" ></b></span>
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
            function getCookie(name) {
                const cookieName = name + '=';
                const cookies = document.cookie.split(';');
                for (let i = 0; i < cookies.length; i++) {
                    const cookie = cookies[i].trim();
                    if (cookie.indexOf(cookieName) === 0) {
                        return cookie.substring(cookieName.length, cookie.length);
                    }
                }
                return '';
            }

            document.addEventListener('DOMContentLoaded', function () {
                // Retrieve and display cart data from the cookie
                const cartData = getCookie('cart');
                let product_Grand_total = 0, totalTax = 0, grandTotal;
                let shippingCharge = 50;


                let product_category, imgFile;

                let globalCart = [];
                if (cartData) {
                    globalCart = JSON.parse(cartData);
                    var product_cart = document.getElementById('product-carts');
                    console.log(globalCart);
                    globalCart.forEach(item => {

                        product_category = item.category;
                        console.log(product_category);

                        if (product_category === 'clothes') {
                            imgFile = 'product_clothes_images';
                        } else if (product_category === 'jewel') {
                            imgFile = 'product_jewel_images';
                        } else if (product_category === 'tailoring') {
                            imgFile = 'product_tailoring_images';
                        } else {
                            return '';
                        }

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
        <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>main/dashboard/main/${imgFile}/${item.id}/${item.image}" src="<?php echo $path; ?>main/dashboard/main/${product_category}/${item.id}/${item.image}" alt="" width="120" height="170" /></a>
      </td>
        <td class="cart-meta small-text-left cart-flex-item">
          <div class="list-view-item-title">
            <a href="product-layout1.html" class="Product_Name">${item.name}</a>
          </div>
          <div class="cart-meta-text">
            Code:${item.code}
          </div>
          <div class="cart-price d-md-none">
            <span class="money fw-500">₹${item.price}</span>
          </div>
        </td>
        <td class="cart-price cart-flex-item text-center small-hide">
          <span class="money" style="font-size:10px;">₹</span>${item.price}
        </td>
        <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
          <div class="cart-qty d-flex justify-content-end justify-content-md-center">
            <div class="qtyField">
              <button class="qtyBtn minus" data-id="${item.id}" ><i class="icon anm anm-minus-r"></i></button>
              <input class="cart-qty-input qty" type="text" value="${item.quantity}" data-id="${item.id}"/>
              <button class="qtyBtn plus" data-id="${item.id}" ><i class="icon anm anm-plus-r"></i></button>
            </div>
          </div>
          <button id="removemobile" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3" data-id="${item.id}">Remove</button>
        </td>
    
  <td class="cart-price cart-flex-item text-center small-hide">
    <span class="money fw-500" id="money-view-${item.id}">₹${(item.price * item.quantity).toFixed(2)}</span>
  </td>
  </tr>
    `;


                        product_cart.insertAdjacentHTML('beforebegin', html);
                        let product_qty = item.quantity,
                            product_img = item.image,
                            product_name = item.name,
                            product_code = item.code,
                            product_total = (item.price * item.quantity).toFixed(2);
                            



                        totalPrice = calculateTotalPrice();

                        product_Grand_total = totalPrice;
                        console.log('Total Price:', totalPrice);


                        console.log(product_name, product_code, product_qty, product_total,product_category,
                            product_Grand_total +
                            ".00")
                            updateProductRow(item.id);
                    });
                    updateProductGrandTotal();
                }


                const plusButtons = document.querySelectorAll('.qtyBtn.plus');
                plusButtons.forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        const itemId = this.getAttribute('data-id');
                        increaseQuantity(itemId);
                        
                    });
                });

                const minusButtons = document.querySelectorAll('.qtyBtn.minus');
                minusButtons.forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        const itemId = this.getAttribute('data-id');
                        decreaseQuantity(itemId);
                    });
                });

                const qtyInputs = document.querySelectorAll('.cart-qty-input');
                // Add an event listener to each quantity input field
                qtyInputs.forEach(input => {
                input.addEventListener('input', function () {
                    // Get the item ID associated with this quantity input
                    const itemId = this.getAttribute('data-id');

                    // Find the corresponding item in the globalCart
                    const item = globalCart.find(item => item.id === Number(itemId));

                    // Get the new quantity from the input field
                    const newQuantity = Number(this.value);

                    // Check if the new quantity is within a valid range (1 to 10)
                    if (item && newQuantity >= 1 && newQuantity <= 10) {
                        // Update the item's quantity in the globalCart
                         updateQuantity(itemId, newQuantity)

                        // Calculate and update the individual item's total price
                        const individualTotalPrice = item.price * newQuantity;
                        document.getElementById(`money-view-${itemId}`).textContent = `₹${individualTotalPrice.toFixed(2)}`;

                        // Recalculate the total price for the entire cart
                        const totalPrice = calculateTotalPrice(globalCart);

                        // Update the display for the total price
                        totalDisplay.textContent = `₹${totalPrice.toFixed(2)}`;

                        // Update the cart cookie with the new cart data
                        updateCart(globalCart);
                    } else {
                        // If the new quantity is not valid, restore the previous value
                        this.value = globalCart.find(item => item.id === itemId).quantity;
                    }  
                });
            });


            function calculateTax(price) {
                   
                    const CGSTRate = 9;  // 9% CGST
                    const SGSTRate = 9;  // 9% SGST
                    
                    const CGSTAmount = (price * CGSTRate) / 100;
                    const SGSTAmount = (price * SGSTRate) / 100;
                    return CGSTAmount + SGSTAmount;
                }

                // Calculate total tax and update grand total
                function updateProductGrandTotal() {
                let totalPrice = calculateTotalPrice(globalCart);
               

                // Define the shipping charge here with an appropriate value
                 // Replace 50 with the actual shipping charge value
                 if (globalCart.length === 0) {
                    // If the cart is empty, set the shipping charge to 0
                    shippingCharge = 0;
                }

                globalCart.forEach(item => {
                    totalTax += calculateTax(item.price) * item.quantity;
                });

                grandTotal = totalPrice + totalTax + shippingCharge;
                console.log('Total Price:', totalPrice);
                console.log('Total Tax:', totalTax);
                console.log('Grand Total:', grandTotal);

                let print_Grand_total = calculateTotalPrice(globalCart);
                console.log(print_Grand_total);

                const totalDisplay = document.getElementById('total-price');
                const grandtotalDisplay = document.getElementById('grand-total-price');
                const grandtotalgst = document.getElementById('gst-total');
                const shippingPrice = document.getElementById('shipping-price');

                if (totalDisplay) {
                    totalDisplay.textContent = `₹${totalPrice.toFixed(2)}`;
                    grandtotalDisplay.textContent = `₹${grandTotal.toFixed(2)}`;
                    grandtotalgst.textContent = `₹${totalTax.toFixed(2)}`;
                }

                // Update product_Grand_total
                product_Grand_total = totalPrice;

                if (product_Grand_total === 0) {
                    console.log(product_Grand_total);
                    
                 
                }
            }


                function checkAndUpdateGrandTotal() {
                    if (globalCart.length === 0) {
                        product_Grand_total = 0; // Set the product_Grand_total to 0
                        const totalDisplay = document.getElementById('total-price');
                        totalDisplay.textContent = '₹0.00'; // Update the totalDisplay to show 0
                    }
                }



                function increaseQuantity(itemId) {
                    const item = globalCart.find(item => item.id === itemId);

                    if (item) {
                        item.quantity++;
                        updateQuantityDisplay(itemId, item.quantity);
                        updateCart(globalCart); // Update the globalCart and the cart cookie


                        // Update the individual item's total price
                        const individualTotalPrice = item.price * item.quantity;
                        document.getElementById(`money-view-${itemId}`).textContent =
                            `₹${individualTotalPrice.toFixed(2)}`;

                        // Update the overall total price
                        updateProductGrandTotal();
                      

                    }
                }

                function decreaseQuantity(itemId) {
                    const item = globalCart.find(item => item.id === itemId);

                    if (item && item.quantity > 1) {
                        item.quantity--;
                        updateQuantityDisplay(itemId, item.quantity);
                        updateCart(globalCart); // Update the globalCart and the cart cookie


                        // Update the individual item's total price
                        const individualTotalPrice = item.price * item.quantity;
                        document.getElementById(`money-view-${itemId}`).textContent =
                            `₹${individualTotalPrice.toFixed(2)}`;

                        // Update the overall total price
                        updateProductGrandTotal();
                     

                    }
                }

                function updateQuantity(itemId, newQuantity) {
                const item = globalCart.find(item => item.id === itemId);

                if (item) {
                    item.quantity = newQuantity;
                    updateQuantityDisplay(itemId, newQuantity);
                    updateCart(globalCart);
                }
            }
                function updateQuantityDisplay(itemId, quantity) {
                // Update the quantity input for the item with itemId on the page
                const quantityInput = document.querySelector(`input[data-id="${itemId}"]`);
                if (quantityInput) {
                    quantityInput.value = quantity;
                }

                // Update the globalCart with the new quantity
                const item = globalCart.find(item => item.id === itemId);
                if (item) {
                    item.quantity = quantity;

                    // Update the individual item's total price
                    const individualTotalPrice = item.price * quantity;
                    document.getElementById(`money-view-${itemId}`).textContent = `₹${individualTotalPrice.toFixed(2)}`;

                    // Update the cart cookie with the new cart data
                    updateCart(globalCart);
                }
            }




                function calculateTotalPrice() {
                    let totalPrice = 0;

                    globalCart.forEach(item => {
                        totalPrice += item.price * item.quantity;
                    });


                    return totalPrice;
                }


                function updateProductRow(itemId) {
                    const item = globalCart.find((item) => item.id === itemId);

                    if (item) {
                        const row = document.querySelector(`tr[data-id="${itemId}"]`);

                        if (row) {
                            const quantityInput = row.querySelector('.cart-qty-input');
                            const moneyElement = row.querySelector('.money');

                            if (quantityInput && moneyElement) {
                                quantityInput.value = item.quantity;
                                moneyElement.textContent = `₹${(item.price * item.quantity).toFixed(2)}`;
                            } else {
                                console.error('Quantity input or money element not found in the row.');
                            }
                        } else {
                            console.error(`Row with data-id="${itemId}" not found.`);
                        }
                    } else {
                        console.error(`Item with id "${itemId}" not found in the cart.`);
                    }
                }

                // After making changes to the globalCart (e.g., after increasing or decreasing quantity), call this function to update the row


                const deleteButtons = document.querySelectorAll('.removeCookieButton');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault(); // Prevent the default behavior of the button
                        const itemIdToRemove = this.getAttribute('data-id');
                        removeCartCookie(itemIdToRemove);

                    });
                });
                

                const deleteMobile = document.querySelectorAll('#removemobile');
                deleteMobile.forEach(mbutton => {
                    mbutton.addEventListener('click', function (e) {
                        e.preventDefault(); // Prevent the default behavior of the button
                        const itemIdToRemove = this.getAttribute('data-id');
                        removeCartCookie(itemIdToRemove);

                    });
                });

                function removeCartCookie(itemIdToRemove) {
                    // Retrieve the current cart cookie
                    const cartData = getCookie('cart');

                    if (cartData) {
                        const cart = JSON.parse(cartData);

                        // Find the index of the item to remove
                        const itemIndex = cart.findIndex(item => item.id === itemIdToRemove);

                        if (itemIndex !== -1) {
                            // Get the price of the item to be removed
                            const removedItemPrice = cart[itemIndex].price;

                            // Remove the item from the cart array
                            cart.splice(itemIndex, 1);

                            // Update the cart cookie with the modified cart data
                            document.cookie =
                                `cart=${JSON.stringify(cart)}; expires=Fri, 31 Dec 9999 23:59:59 GMT;`;

                            // Remove the corresponding HTML element from the page
                            const buttonToRemove = document.querySelector(
                            `button[data-id="${itemIdToRemove}"]`);
                            const rowToRemove = buttonToRemove.closest('tr');
                            rowToRemove.remove();

                            updateCart(cart); // Update the cart in memory

                            // Deduct the removed item's price from the total price
                            product_Grand_total -= removedItemPrice;

                            // Update the total price display
                            const totalDisplay = document.getElementById('total-price');
                            if (cart.length === 0) {
                                // If the cart is empty, set total price to 0
                                totalDisplay.textContent = '₹0.00';
                                grandtotalDisplay.textContent = '₹0.00';
                            
               
                            } else {
                                totalDisplay.textContent = `₹${product_Grand_total.toFixed(2)}`;
                                grandtotalDisplay.textContent = `₹${grandTotal.toFixed(2)}`;
               
                            }
                        }
                    }
                }


                // Function to update the cart in memory and in the cookie
                function updateCart(cart) {
                    // Serialize the cart to a JSON string and save it in a cookie
                    document.cookie = `cart=${JSON.stringify(cart)}; expires=Fri, 31 Dec 9999 23:59:59 GMT;`;
                    checkAndUpdateGrandTotal();

                }


            
                
      function sendDataToServer(data) {
                    $.ajax({
                        type: 'POST',
                        url: 'ajax',
                        data: data,
                        success: function (response) {
                            console.log('AJAX request successful', response);
                            if (response.cart) {
                                globalCart = response.cart;
                                updateCart(globalCart);
                                if (response.grand_total) {
                                    product_Grand_total = response.grand_total;
                                    updateProductGrandTotal();
                                }
                            }
                        },
                        error: function (error) {
                            console.error('AJAX request error', error);
                        }
                    });
                }

                function updateCart(cart) {
                    // Serialize the cart to a JSON string and save it in a cookie
                    document.cookie = `cart=${JSON.stringify(cart)}; expires=Fri, 31 Dec 9999 23:59:59 GMT;`;
                    checkAndUpdateGrandTotal();
                }

               
                    // ... Your existing code for initializing the cart

                    $('#cartCheckout').on('click', function () {
                    sendDataToServer({
                        cart: globalCart,
                        grand_total: product_Grand_total,
                        total_tax: totalTax,
                        shipping_charge: shippingCharge,
                        overall_total: grandTotal
                    });
                });
            
            });


            
        </script>

        <script>
            $(document).ready(function(){
                $('#cartCheckout').click(function(){
                })
            })
        </script>


    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/cart-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:55 GMT -->

</html>