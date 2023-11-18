<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper/saas/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:18:35 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Samuthrika | Clothes Creation</title>
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
                                    <h4 class="page-title">Clothes Creation</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form">
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Upload Product Image <span style="color:red;">*</span></label>
                                                    <input type="file" id='p_img' class="form-control" onchange="previewImage()">
                                                    <br>
                                                    <p id="fileSizeMessage"></p>
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="mb-3">
                                                    <img id="imagePreview" src="#" alt="Preview" style="width: 80%;">
                                                </div>
                                            </div>
                                        </div> <!-- end col (left) -->

                                        <div class="col-lg-6">
                                            <div class="form">
                                                <div class="mb-3">
                                                    <label for="p_name" class="form-label">Product Name <span style="color:red;">*</span></label>
                                                    <input type="text" id="p_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="mb-3">
                                                    <label for="p_code" class="form-label">Product Code</label>
                                                    <input type="text" id="p_code" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="mb-3">
                                                    <label for="price" class="form-label">Price <span style="color:red;">*</span></label>
                                                    <input type="number" id="p_price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="mb-3">
                                                    <label for="price" class="form-label">Product Description <span style="color:red;">*</span></label>
                                                    <textarea name=""  class="form-control" id="p_desc" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col (right) -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card-footer text-end">
                                                    <button class="btn btn-primary" style="border: .5px solid #9b9999"  id="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div> <!-- end row -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end row -->
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

        function previewImage() 
        {
            const input = document.getElementById('p_img');
            const preview = document.getElementById('imagePreview');
            const fileSizeMessage = document.getElementById('fileSizeMessage');
            const submit_btn = document.getElementById('submit');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }

            const selectedFile = input.files[0]; // Get the selected file
            const maxSizeInBytes = 1024 * 100; // 1 MB (adjust as needed)

            if ( selectedFile && selectedFile.size > maxSizeInBytes) {
                fileSizeMessage.textContent = 'File size exceeds the allowed limit .';
                submit_btn.style.display = 'none'; 

            } else {
                fileSizeMessage.textContent = 'Successfully Uploaded'; // Clear any previous error message
                submit_btn.style.display = 'inline-block'; 
            }
        }

        $(document).ready(function(){

            $('#submit').click(function(){
                var product_img = $('#p_img')[0].files[0];
                console.log(product_img)

                var product_code = $("#p_code").val().trim();
                console.log(product_code);
                
                var product_name = $("#p_name").val().trim();
                console.log(product_name);
                
                var product_price = $("#p_price").val().trim();
                console.log(product_price);

                var product_desc = $("#p_desc").val().trim();
                console.log(product_desc);


                if(product_img == "")
                {
                    toastr.error('Insert Images plz !', 'Empty');
                }
                else if(product_code == "")
                {
                    toastr.error('Enter product code plz !', 'Empty');
                }
                else if(product_name == "")
                {
                    toastr.error('Enter product name plz !', 'Empty');
                }
                else if(product_price == "")
                {
                    toastr.error('Enter product price plz !', 'Empty');
                }
                else if(product_desc == "")
                {
                    toastr.error('Enter product desc plz !', 'Empty');
                }
                else
                {
                    var fd = new FormData();

                    fd.append("product_img", product_img);
                    fd.append("product_name", product_name);
                    fd.append("product_code", product_code);
                    fd.append("product_price", product_price);
                    fd.append("product_desc", product_desc);
                    
                    $.ajax({
                        url: 'ajax/clothes/create_clothes.php',
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

                                    $("#product_img").val("");
                                    $("#product_code").val("");
                                    $("#product_name").val("");
                                    $("#product_price").val("");
                                    $("#product_desc").val("");
                                }
                                else
                                {
                                    toastr.error('Error!', 'Error Found!')
                                }
                            }
                        });
                }

            })
        });


    </script>

</html>
