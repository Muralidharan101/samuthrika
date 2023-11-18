<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/saas/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:18:35 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Samuthrika | Lead Creation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Theme Config Js -->
        <script src="../assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="../assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- Outer spin css -->
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button
            {
            -webkit-appearance:none;margin:0;
            }
        </style>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <?php include 'Navbar.php' ;?>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include 'Sidebar.php' ;?>
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       
                                    </div>
                                    <h4 class="page-title">Lead Creation</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form">
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Lead Name <span style="color:red;">*</span></label>
                                                                <input type="text" id="leadName" class="form-control">
                                                            </div>
        
                                                        </div>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-3">
                                                        <div class="form">
                
                                                            <div class="mb-3">
                                                                <label for="mobilenum" class="form-label">Mobile Number <span style="color:red;">*</span></label>
                                                                <input type="number" id="mobilenum" class="form-control">
                                                            </div>

                                                        </div>
                                                    </div> <!-- end col -->

                                                    <div class="col-lg-3">
                                                        <div class="form">
                
                                                            <div class="mb-3">
                                                                <label for="reference" class="form-label">Reference (optional)</label>
                                                                <input type="text" id="ref" class="form-control">
                                                            </div>

                                                        </div>
                                                    </div> <!-- end col -->
                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <div class="form">
                                                            <div class="mb-3">
                                                                    <label for="leadReq" class="form-label">Lead Requirement <span style="color:red;">*</span></label>
                                                                    <select class="form-select" id="leadReq">
                                                                        <option>Courses</option>
                                                                        <option>Classes</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-lg-3">
                                                    <div class="form">
                                                            <div class="mb-3">
                                                                    <label for="example-select" class="form-label">Services <span style="color:red;">*</span></label>
                                                                    <select class="form-select" id="services">
                                                                        <option>Tailoring</option>
                                                                        <option>E-Commerce</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-lg-3">
                                                        <div class="form">
                                                            <div class="mb-3">
                                                                    <label for="price" class="form-label ">Price <span style="color:red;">*</span></label>
                                                                    <input type="number" id="price" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col -->

                                                   

                                                </div> <!-- end row--> 

                                                <div class="row">
                                                <div class="col-lg-3">
                                                        <div class="form">
                                                            <div class="mb-3">
                                                                    <label for="followup" class="form-label h5 pb-3 pt-3">Follow Up <span style="color:red;">*</span></label>
                                                                    <input type="date" id="followUpDate" class="form-control">
                                                                   
                                                            </div>
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="row">
                                                <div class="col-lg-6">
                                                        <div class="form">
                                                            <div class="mb-3">
                                                                    <textarea class="form-control mt-2" id="details" rows="5" placeholder="Your Details"></textarea>
                                                            </div>
                                                        </div>
                                                           
                                                    </div><!-- end col -->

                                                    <div class="col-lg-6">
                                                        <div class="form">
                                                            <div class="mt-5">
                                                    <button type="button" style="background-color:orange;" class="btn text-black  float-end mt-4" id="lead">Create Lead</button>
                                                                  
                                                            </div>
                                                        </div>
                                                           
                                                    </div><!-- end col -->

                                                    
                                                </div>
                                                   
                                                </div>
                                                <!-- end row-->                      
                                           
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                       

                      
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include "footer.php" ;?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

       

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- Code Highlight js -->
        <script src="../assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="../assets/vendor/clipboard/clipboard.min.js"></script>
        <script src="../assets/js/hyper-syntax.js"></script>
        
        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

        <!-- Jquery and toastr -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>

    <script>
        
    $(document).ready(function()
    {

    $('#lead').click(function()
    {
    
    var LeadName = $("#leadName").val().trim();
    console.log(LeadName)

    var mobileNumber = $("#mobilenum").val().trim();
    console.log(mobileNumber)

    var leadRequirement = $("#leadReq").val().trim();
    console.log(leadRequirement)

    var service = $("#services").val().trim();
    console.log(service)

    var Price = $("#price").val().trim();
    console.log(Price)

    var ref = $("#ref").val().trim();
   
   var details = $("#details").val().trim();

   var followDate = $("#followUpDate").val();
    
    
    if(LeadName == "")
    {
        toastr.error('Enter your Name !', 'Empty');
    }

    else if(mobileNumber == "")
    {
        toastr.error('Enter Mobile Number !', 'Empty');

    }

    else if( leadRequirement == "")
    {
        toastr.error('Select Lead Requirement !', 'Empty');

    }

    else if( service == "")
    {
        toastr.error('Select Service !', 'Empty');

    }

    else if( Price == "")
    {
        toastr.error('Enter Price !', 'Empty');

    }

    else if( followDate == "")
    {
        toastr.error('Select Follow date !', 'Empty');

    }
    else if( details == "")
    {
        toastr.error('Enter details !', 'Empty');

    }
  

    else
    {
        var fd = new FormData();

        fd.append("LeadName", LeadName);
        fd.append("mobileNumber", mobileNumber);
        fd.append("leadRequirement",leadRequirement);
        fd.append("Price",Price);
        fd.append("service",service);
        fd.append("ref",ref);
        fd.append("follow_up_date",followDate);
        fd.append("follow_up_details",details);
        

        $.ajax({
            url: 'ajax/lead/lead_creation.php',
            data: fd,
            type:'post',
            contentType: false,
            processData: false,
            success: function(response)
            {
                    // console.log(response);
                    data = JSON.parse(response);
                    // console.log(data);
                    if(data.status == 'Success')
                    {
                        toastr.success('Welcome!', 'Success');
                        // window.location.href='Index';

                        $("#leadName").val("");
                        $("#mobilenum").val("");
                        $("#leadReq").val("");
                        $("#services").val("");
                        $("#price").val("");
                        $("#ref").val("");
                        $("#details").val("");
                        $("#followUpDate").val("");
                       
                    }
                    // else if(data.status == 'PassWrong')
                    // {
                    //     toastr.warning('Check Your Password!', 'Password Wrong!')
                    // }
                    // else if(data.status == 'NotFound')
                    // {
                    //     toastr.warning('This Contact Number not Exists!', 'Contact number Wrong!')
                    // }
                    // else if(data.status == 'Deactivated')
                    // {
                    //     toastr.info('Your Account DEACTIVATED!, Contact Admin!', 'Deactivated!')
                    // }
                    else
                    {
                        toastr.error('Error!', 'Error Found!')
                    }
                }
            });
        }
    })
})
    </script>

</html>
