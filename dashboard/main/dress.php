<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:18:35 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Samuthrika | Branch Creation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />


    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css"   />

    <!-- Theme Config Js -->
    <script src="../assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="../assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Outer spin css -->
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
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
                                <h4 class="page-title">Dress Creation</h4>
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
                                                    <label for="branch" class="form-label">Dress Name</label>
                                                    <input type="text" id="branch" class="form-control">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="form">
                                                <div class="mt-5">
                                                    <button type="button" id="create" style="background-color:orange;"
                                                        class="btn  text-black mt-2 mb-3 float-end ">Create
                                                        Branch</button>

                                                </div>
                                            </div>
                                        </div> <!-- end col -->




                                    </div>
                                    <!-- end row-->


                                    <!-- Danger Alert Modal -->
                                    <div id="edit" class="modal fade" tabindex="-1" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content modal-filled bg-white">
                                                <div class="modal-body p-4">
                                                    <button type="button" class="btn my-2 float-end"
                                                        data-bs-dismiss="modal"><i
                                                            class="mdi mdi-window-close"></i></button>
                                                    <div class="text-center">
                                                        <i class="ri-close-circle-line h1"></i>
                                                        <h4 class="pb-3 text-dark mb-2 ">Branch Edit</h4>
                                                        <div class="mb-3">

                                                            <label for="edit_branch"
                                                                class="form-label text-dark float-start">Branch
                                                                Name</label>
                                                            <input type="text" class="form-control" id="edit_branch">
                                                        </div>

                                                        <button type="button" class="btn btn-success my-2"
                                                            id="post">Edit</button>
                                                        <button type="button" class="btn btn-danger my-2 ms-2"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="card-body">
                                        <table id="tbody" class="table  table-striped  dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>SI No</th>
                                                    <th>Branch Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>


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


    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- Code Highlight js -->
    <script src="../assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="../assets/vendor/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/hyper-syntax.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
    </script>
    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>

    <!-- Jquery and toastr -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script>
        $(document).ready(function () {

            $('#create').click(function () {

                var branch = $("#branch").val().trim();
                console.log(branch)


                if (branch == "") {
                    toastr.error('Enter your Branch !', 'Empty');
                } else {
                    var fd = new FormData();

                    fd.append("branch", branch);

                    $.ajax({
                        url: 'ajax/branch/branch_create.php',
                        data: fd,
                        type: 'post',
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            // console.log(response);
                            data = JSON.parse(response);
                            console.log(data);
                            if (data.status == 'Success') {
                                toastr.success('Welcome!', 'Success');
                                // window.location.href='Index';

                                $("#branch").val("");

                                fetchdata();
                            } else {
                                toastr.error('Error!', 'Error Found!')
                            }
                        }
                    });
                }
            })

            function fetchdata() {
                $.ajax({
                    url: 'ajax/branch/branch_list.php',
                    type: 'get',

                    success: function (response) {
                        var result = JSON.parse(response);

                        var dataTable = $('#tbody').DataTable();

                        if (result.status == 'Success') {
                            var data = result.data;
                            dataTable.clear().draw();
                            data.map(function (value) {
                                dataTable.row.add([
                                    value.id,
                                    value.branch_name,
                                    `<button type="button" class="btn btn-success" data-id="${value.id}" data-bs-toggle="modal" data-bs-target="#edit"><i class="ri ri-pencil-fill"></i></button>
                                    <button  type="button" class="btn btn-danger ms-2" data-id="${value.id}"><i class="ri ri-delete-bin-5-fill"></i></button>`
                                ]).draw(false);
                            });
                        }
                    }
                })
            }
            fetchdata();
        })
    </script>


</body>

</html>