<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:18:41 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Samuthirika | Employee List</title>
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
                                    <h4 class="page-title">Employee Registration</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-body">
                                        
                                                <table id="tbody" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Employee Name</th>
                                                            <th>Contact</th>
                                                            <th>Branch</th>
                                                            <th class="text-center">Action</th>
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


                function fetchdata(){
                $.ajax({
                    url: 'ajax/employee/employee_list.php',
                    type: 'get',

                    success:function(response)
                    {
                        var result = JSON.parse(response);
                        console.log(result);
                        
                        var dataTable = $('#tbody').DataTable();

                        if(result.status == 'Success')
                        {
                            var data = result.data;

                            data.map(function(value) {

                                var editButton = `<a href="employee_edit.php?id=${value.id}" class='btn btn-success me-2'><i class="ri ri-pencil-fill"></i></a>`;
                                var viewButton = `<a href="employee_view.php?id=${value.id}" class='btn btn-info me-2'><i class="mdi mdi-eye"></i></a>`;
                                // var deleteButton = ``;
                                dataTable.row.add([
                                    value.employee_name,
                                    value.phone,
                                    value.branch_name,
                                    `${viewButton}${editButton}<a data-id="${value.id}" class='btn btn-danger me-2 delete_button'><i class="ri ri-delete-bin-5-fill"></i></a>`
                                ]).draw(false);
                            });
                        }
                    }
                })
            } fetchdata();


            $(document).on("click",".delete_button",function(){
                var deleteId = $(this).data("id");
                console.log(deleteId);
                var fd = new FormData();

                fd.append("id",deleteId);

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
                                // console.log(data);
                                if(data.status == 'Success')
                                {
                                    toastr.success('Lead deleted!', 'Success');
                                    // window.location.href='Index';
                               
                                    
                                }
                                else
                                {
                                    toastr.error('Error!', 'Error Found!')
                                }
                            }
                        });
            });

            


        </script>

    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:18:47 GMT -->
</html>
