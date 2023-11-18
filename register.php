
<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:51 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Create an Account - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="../assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="../assets/css/style-min.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">

        
        <link rel="stylesheet" href="../assets/css/responsive.css"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    </head>
    
    <style>
      .eyeclass{position: relative;
            
        }

        .eyes{
            position: absolute;
            bottom: 50%;
            right: 0.5%;

            margin-bottom: 1px;
            padding: 9.5px 14px;

            border: none;
            outline: none;
            background-color: white;
            transition: .1s ease-in;
        }

        .eyes:hover{
            background-color: whitesmoke;
        }

    </style>


    <body class="account-page register-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
          
         <!--Page Header-->
         <div class="page-header text-center" style="background-color:white;"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-5 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1></h1></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

            <!-- Body Container -->
            <div id="page-content">
              

                <!--Main Content-->
                <div class="container">   
                    <div class="login-register pt-2">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                                <div class="inner h-100">
                                    <div class="customer-form" style="margin-top:-12%">	
                                        <h2 class="text-center fs-4 fw-500 mb-4">Register here if you are a new customer</h2>
                                        <p class="text-center mb-4">If you dont have an account, please register.</p>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-8">
                                                <label for="CustomerUsername" class="d-none">Username <span class="required">*</span></label>
                                                <input type="text" name="customer[Username]" placeholder="Username" id="CustomerUsername" value="" required />
                                            </div>
                                            <div class="form-group col-8">
                                                <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                                <input type="email" name="customer[email]" placeholder="Phone number" id="CustomerPhone" value="" required />
                                            </div>
                                            <div class="form-group col-8">
                                                <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                                <input type="password" name="customer[password]" placeholder="Password" id="CustomerPassword" value="" required />                        	
                                                <div class="eyeclass"><button class="eyes" id="showPassword"><i class="bi bi-eye"></i></button></div>
                                          </div>
                                            <div class="form-group col-8">
                                                <label for="CustomerConfirmPassword" class="d-none">Confirm Password <span class="required">*</span></label>
                                                <input id="CustomerConfirmPassword" type="Password" name="customer[ConfirmPassword]" placeholder="Confirm Password" required />                         	
                                                <div class="eyeclass"><button class="eyes" id="showPassword2"><i class="bi bi-eye"></i></button></div>
                                         
                                            </div>
                                            <div class="form-group col-8">
                                               
                                            </div>
                                            <div class="form-group col-8 mb-0">
                                                <input type="submit" class="btn btn-primary btn-lg w-100" value="Register" id="submit"/>
                                            </div>
                                        </div>

                                            <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Already have an account? <a href="login.html" class="btn-link">Login now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->


           
          


            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="../assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="../assets/js/main.js"></script>

        </div>
        <!--End Page Wrapper-->
    </body>
  <!-- Jquery and toastr -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
<script>
$(document).ready(function()
{

$('#submit').click(function()
{
   
  var CustomerUsername = $('#CustomerUsername').val().trim();
  console.log(CustomerUsername)

var CustomerPhone = $("#CustomerPhone").val().trim();
console.log(CustomerPhone);

 
var CustomerPassword = $("#CustomerPassword").val().trim();
console.log(CustomerPassword);

 
var CustomerConfirmPassword = $("#CustomerConfirmPassword").val().trim();
console.log(CustomerConfirmPassword);

 


if(CustomerUsername == "")
{
    toastr.error('Insert Name plz !', 'Empty');
}
else if(CustomerPhone == "")
{
    toastr.error('Enter Phone number plz !', 'Empty');
}
else if(CustomerPassword == "")
{
    toastr.error('Enter Password plz !', 'Empty');
}
else if(CustomerConfirmPassword == "")
{
    toastr.error('Enter Confirm Password plz !', 'Empty');
}


else
{
    var fd = new FormData();

    fd.append("Customer Username", CustomerUsername);
    
    fd.append("Customer Phone", CustomerPhone);
    
    fd.append("Customer Password", CustomerPassword);
    
    fd.append("Confirm Password", CustomerConfirmPassword);

    $.ajax({
        url: 'ajax',
        data: fd,
        type:'post',
        contentType: false,
        processData: false,
        success: function(response)
        {
                // console.log(response);
                data = JSON.parse(response);
                console.log(data);
                if(data.status == 'Success')
                {
                    toastr.success('Welcome!', 'Success');
                    // window.location.href='Index';

                    $("#CustomerUsername").val("");
                    $("#CustomerPhone").val("");
                    $("#CustomerPassword").val("");
                    $("#CustomerConfirmPassword").val("");
                  
                    
          
                }
                
                else
                {
                    toastr.error('Error!', 'Error Found!')
                }
            }
        });
    }

})


})

const passwordInput = document.getElementById('CustomerPassword');
      const showButton = document.getElementById('showPassword');
     
      showButton.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
        } else {
          passwordInput.type = 'password';
        }
      });


      const confirmpasswordInput = document.getElementById('CustomerConfirmPassword');
      const showButton2 = document.getElementById('showPassword2');
     
      showButton2.addEventListener('click', function () {
        if (confirmpasswordInput.type === 'password') {
            confirmpasswordInput.type = 'text';
        } else {
            confirmpasswordInput.type = 'password';
        }
      });

      
   
    
</script>

<!-- Mirrored from www.annimexweb.com/items/hema/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:51 GMT -->
</html>