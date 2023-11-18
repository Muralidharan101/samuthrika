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
                                <h4 class="page-title">Lead List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-check-label">Lead Name :</label>&emsp;
                                            <label class="form-check-label" style="color: blue"
                                                id="leadname">(null)</label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-check-label">Mobile Number :</label>&emsp;
                                            <label class="form-check-label" style="color: blue"
                                                id="mobileNum">(null)</label>
                                        </div>


                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-check-label" id="dynamic1">Lead
                                                Requirements</label>&emsp;
                                            <label class="form-check-label" style="color: blue"
                                                id="leadReq">(null)</label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-check-label" id="dynamic2">Services</label>&emsp;
                                            <label class="form-check-label" style="color: blue"
                                                id="services">(null)</label>
                                        </div>


                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-check-label">Price</label>&emsp;
                                            <label class="form-check-label" style="color: blue"
                                                id="price">(null)</label>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-check-label">Referal Name</label>&emsp;
                                            <label class="form-check-label" style="color: blue" id="ref">(null)</label>
                                        </div>
                                    </div>


                                </div>

                            </div> <!-- card body end -->

                        </div> <!-- card end -->

                    </div> <!-- row end -->

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Follow Up Activity</h4>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <button class="btn btn-success float-end me-3 d-flex align-items-center mt-2"
                                        data-bs-toggle="modal" data-bs-target="#follow"><i
                                            class="ri-add-line ri-xl"></i>New Follow Up</button>
                                    <button class="btn btn-danger float-end me-3 mt-2 d-none">Convert Lead</button>

                                    <!-- Danger Alert Modal -->
                                    <div id="follow" class="modal fade" tabindex="-1" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content modal-filled bg-white">
                                                <div class="modal-body p-4">
                                                    <button type="button" class="btn my-2 float-end"
                                                        data-bs-dismiss="modal"><i
                                                            class="mdi mdi-window-close"></i></button>
                                                    <div class="text-center">
                                                        <i class="ri-close-circle-line h1"></i>
                                                        <h4 class="pb-3 text-dark mb-2">Follow Up Activity</h4>
                                                        <div class="mb-3">
                                                            <input type="date" class="form-control" id="fol_date">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-textarea"
                                                                class="form-label">Details</label>
                                                            <textarea class="form-control" id="fol_details" rows="5"
                                                                placeholder="Your Message"></textarea>
                                                        </div>
                                                        <button type="button" class="btn btn-primary my-2"
                                                            id="post">Post</button>
                                                        <button type="button" class="btn btn-danger my-2 ms-2"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!-- Action Modal -->
                                    <div id="action" class="modal fade" tabindex="-1" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content modal-filled bg-white">
                                                <div class="modal-body p-4">
                                                    <button type="button" class="btn my-2 float-end"
                                                        data-bs-dismiss="modal"><i
                                                            class="mdi mdi-window-close"></i></button>
                                                    <div class="text-center">
                                                        <i class="ri-close-circle-line h1"></i>
                                                        <h4 class="pb-3 text-dark mb-2">Response</h4>

                                                        <div class="mb-3">
                                                            <label for="example-textarea"
                                                                class="form-label text-dark fw-bold float-start mb-2">Enter
                                                                Response</label>
                                                            <textarea class="form-control" id="fol_details" rows="5"
                                                                placeholder="Your Response"></textarea>
                                                        </div>
                                                        <button type="button" class="btn btn-primary my-2"
                                                            id="post">Post</button>
                                                        <button type="button" class="btn btn-danger my-2 ms-2"
                                                            data-bs-dismiss="modal">Cancel</button>
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
                                                <th>S no</th>
                                                <th>Follow Up Date</th>
                                                <th>Follow Up Details</th>

                                                <!-- <th>Response</th> -->

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        $(document).ready(function () {
            var queryParams = new URLSearchParams(window.location.search);

            if (queryParams.has('id')) {
            var leadId = queryParams.get('id');
            }
            $("#post").click(function () {
                var followUpDate = document.getElementById("fol_date").value;
                console.log(followUpDate)
                var followUpDetails = document.getElementById("fol_details").value;
                console.log(followUpDetails)

                var fd = new FormData();
                fd.append("id", leadId)
                fd.append("date", followUpDate);
                fd.append("details", followUpDetails);

                $.ajax({
                    url: 'ajax',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: fd,

                    success: function (response) {
                        var result = JSON.parse(response);
                        if (result.status == "Success") {
                            toastr.success("Follow up data posted successfully")
                        } else {
                            toastr.error("Error")
                        }

                    }
                })
            });


            function fetchdata() {

                var fd = new FormData();

                fd.append('id', leadId);

                $.ajax({
                    url: 'ajax/lead/lead_edit_list.php',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: fd,

                    success: function (response) {
                        var result = JSON.parse(response);
                        console.log(result);

                        var dataTable = $('#tbody').DataTable();

                        if (result.status == 'Success') {
                            var data = result.data;

                            console.log(data)
                            console.log(data.length)
                            if (data.length > 0) {
                                var leadname = data[0].lead_name;
                                var mobileNum = data[0].phone;
                                var leadReq = data[0].lead_req;
                                var price = data[0].price;
                                var services = data[0].service;
                                var ref = data[0].reference_name;


                            } else {
                                console.log('No data found');
                            }

                            document.getElementById('leadname').innerHTML = leadname;
                            document.getElementById('mobileNum').innerHTML = mobileNum;
                            document.getElementById('leadReq').innerHTML = leadReq;
                            document.getElementById('services').innerHTML = services;
                            document.getElementById('price').innerHTML = price;
                            document.getElementById('ref').innerHTML = ref;

                            data.map(function (value) {


                                dataTable.row.add([
                                    value.follow_up_id,
                                    value.follow_up_date,
                                    value.follow_up_details,
                                    // value.response,
                                    `<button class='btn me-2' data-bs-toggle="modal" data-bs-target="#action"><i class="ri  ri-chat-4-fill ri-xl"></i></button>`
                                ]).draw(false);
                            });
                        }
                    }
                })
            }
            fetchdata();
        });

    </script>


</body>

</html>