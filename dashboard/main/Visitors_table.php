<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:18:41 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Samuthrika | Visitors List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Datatables css -->
    <link href="../assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

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
                                <h4 class="page-title">Visitors Table</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- Danger Alert Modal -->
                                    <div id="danger-alert-modal" class="modal fade" tabindex="-1" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content modal-filled bg-white">
                                                <div class="modal-body">
                                                    <button type="button" class="btn float-end"
                                                        data-bs-dismiss="modal"><i
                                                            class="mdi mdi-window-close"></i></button>
                                                    <div class="text-center">
                                                        <i class="ri-close-circle-line h1"></i>
                                                        <h4 class="mt-2 text-dark">Remarks</h4>
                                                        <div class="mb-3">
                                                            <label for="example-textarea" class="form-label">Purpose of
                                                                visit</label>
                                                            <textarea class="form-control" id="example-textarea"
                                                                rows="5" placeholder="Your Message"></textarea>
                                                        </div>
                                                        <button type="button" id="continue" class="btn btn-light my-2"
                                                            data-bs-dismiss="modal">Continue</button>
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
                                                <th>Visitors Name</th>
                                                <th>Contact</th>
                                                <th>Enquiry</th>
                                                <th>Branch</th>
                                                <th>Reason</th>
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

</body>

<script>
    var data;

    function fetchdata() {
        $.ajax({
            url: 'ajax/visitors/visitors_list.php',
            type: 'get',

            success: function (response) {
                var result = JSON.parse(response);
                console.log(result);
                var dataTable = $('#tbody').DataTable();

                if (result.status == 'Success') {
                    data = result.data;
                    console.log(data);
                    data.map(function (value) {
                        dataTable.row.add([
                            value.visitor_name,
                            value.visit_purpose,
                            value.phone,
                            value.DOJ,
                            value.reason,
                            `<button type="button"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#danger-alert-modal">Close</button>`
                        ]).draw(false);
                    });
                }
            }
        })
    }
    fetchdata();

    $(document).ready(function () {

        $("#continue").click(function () {

        })
    })
</script>

</html>