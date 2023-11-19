
<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:51 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Samuthrika Login </title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="../assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="../assets/css/style-min.css">

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
            padding: 9px 14px;

            border: none;
            outline: none;
            background-color: white;
            transition: .1s ease-in;
        }

        .eyes:hover{
            background-color: whitesmoke;
        }

    </style>


    <body class="account-page login-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
            

           

            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <div class="page-header text-center" style="background-color:white;"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1></h1></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">   
                    <div class="login-register pt-2">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                                <div class="inner h-100">
                                    <div class="customer-form" style="margin-top:-5%;">	
                                        <h2 class="text-center fs-4 mb-3">Login</h2>
                                        <p class="text-center mb-4">If you have an account with us, please log in.</p>
                                        <div class="form-row justify-content-center" >
                                            <div class="form-group col-10">
                                                <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                                <input type="number" name="customer[email]" placeholder="Mobile.No" id="CustomerPhone" value="" required />
                                            </div>
                                            <div class="form-group col-10">
                                                <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                                <input type="password" name="customer[password]" placeholder="Password" id="CustomerPassword" value="" required />                        	
                                                <div class="eyeclass"><button class="eyes" id="showPassword"><i class="bi bi-eye"></i></button></div>
                                            </div>
                                            <div class="form-group col-10">
                                                <div class="login-remember-forgot d-flex justify-content-between align-items-center">
                                                    <div class="remember-check customCheckbox">
                                                        <input id="remember" name="remember" type="checkbox" value="remember" required />
                                                        <label for="remember"> Remember me</label>
                                                    </div>
                                                    <a href="forgot-password.html">Forgot your password?</a>
                                                </div>
                                            </div>
                                            <div class="form-group col-10 mb-0">
                                                <input type="submit" class="btn btn-primary btn-lg w-100" value="Sign In" id="submit"/>
                                             </div>
                                        </div>

                                    

                                        <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Don,t have an account? <a href="register.html" class="btn-link">Sign up now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    <script>
    $(document).ready(function()
    {
    
    $('#submit').click(function()
    {
    
    
    var CustomerPhone = $("#CustomerPhone").val().trim();
    console.log(CustomerPhone);
    
    
    var CustomerPassword = $("#CustomerPassword").val();
    console.log(CustomerPassword);
    
    
    
    
    if(CustomerPhone == "")
    {
    toastr.error('Enter Phone number plz !', 'Empty');
    }
    else if(CustomerPassword == "")
    {
    toastr.error('Enter Password plz !', 'Empty');
    }
    
    else
    {
    var fd = new FormData();
    
    
    fd.append("Customer Phone", CustomerPhone);
    
    fd.append("Customer Password", CustomerPassword);
    
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
    
                $("#CustomerPhone").val("");
                $("#CustomerPassword").val("");
                
      
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

      const mobile =document.querySelector('#CustomerPhone'),
            password=document.querySelector("CustomerPassword"),
            submit_btn=document.querySelector("#submit");






     </script>
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:51 GMT -->
</html>