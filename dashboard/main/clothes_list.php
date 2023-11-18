<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:18:41 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Samuthrika | Lead List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Datatables css -->
        <link href="../assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="../assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="../assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
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
                                    <h4 class="page-title">Clothes List</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">   
                                    <!-- Danger Alert Modal -->
                                    <div id="danger-alert-modal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-white">
                                                    <div class="modal-body p-4">
                                                    <button type="button" class="btn btn-danger my-2 float-end" data-bs-dismiss="modal"><i class="mdi mdi-window-close"></i></button>
                                                        <div class="text-center">
                                                            <i class="ri-close-circle-line h1"></i>
                                                            <h4 class="mt-2 text-dark">Remarks</h4>
                                                            <div class="mb-3">
                                                        <label for="example-textarea" class="form-label">Purpose of visit</label>
                                                        <textarea class="form-control" id="example-textarea" rows="5" placeholder="Your Message"></textarea>
                                                    </div>
                                                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->        
                                    </div>

                                    <div class="card-body">
                                    
                                    <table id="tbody" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Product Images</th> 
                                                <th>Product  Name</th>
                                                <th>product Code</th>
                                                <th>Product Price</th>
                                                <th>Product Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>  
                                        <tbody></tbody>
                                    </table>                                           
                            
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->

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

        <!-- Datatables js -->
        <script src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="../assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="../assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
        <script src="../assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

        <!-- Datatable Demo Aapp js -->
        <script src="../assets/js/pages/demo.datatable-init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script>
            var dataTable;
            var product_id;

            function fetchdata(){
                $.ajax({
                    url: 'ajax/clothes/list_clothes.php',
                    type: 'get',

                    success:function(response)
                    {
                        var result = JSON.parse(response);
                        console.log(result);
                        
                        dataTable = $('#tbody').DataTable();

                        if(result.status == 'Success')
                        {
                            var data = result.data;

                            data.map(function(value) {
                                product_id=value.id;
                                console.log(product_id)
                                var editButton = `<a href="clothes_edit.php?id=${value.id}" class='btn btn-success me-2'><i class="ri ri-pencil-fill"></i></a>`;
                                var viewButton = `<a href="lead_followUp.php?id=${value.id}" class='btn btn-success me-2'><i class="ri ri-share-box-fill"></i></a>`;
                                dataTable.row.add([
                                    `<img src="product_clothes_images/${value.id}/${value.product_img}" width="70" height="100"/>`,
                                    value.product_name,
                                    value.product_code,
                                    value.product_price,
                                    value.product_desc,
                                    `${editButton}<a data-id="${value.id}" class='btn btn-danger me-2 delete_button'><i class="ri ri-delete-bin-5-fill"></i></a>${viewButton}`
                                ]).draw(false);
                            });
                        }
                    }
                })
            } fetchdata();

            $(document).on('click','.delete_button',function(){
                var deleteId = $(this).data("id");
                console.log(deleteId);

                var fd = new FormData();

                fd.append('id',deleteId);

                $.ajax({
                    url: 'ajax/lead/lead_delete.php',
                    data: fd,
                    type: 'post',
                    contentType:false,
                    processData:false,

                    success: function(response)
                    {
                        dataTable.clear().draw();
                        data = JSON.parse(response);

                        if(data.status == "Success")
                        {
                            toastr.success("Lead Deleted !","Success")
                            
                            fetchdata();
                        }
                        else{
                            toastr.error("Error","Error Found!")
                        }
                    }
                });
            });


            
        </script>

    </body>

</html>
