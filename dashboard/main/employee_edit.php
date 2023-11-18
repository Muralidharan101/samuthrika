<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from coderthemes.com/hyper/saas/apps-ecommerce-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 10:17:51 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Samunthrika | Employee Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="../assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="../assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="../assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
       
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        
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
            <?php include "Navbar.php" ;?>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "Sidebar.php" ;?>
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
                                
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form">
                                                            <div class="mb-3">
                                                                <label for="emp-name" class="form-label">Employee Name <span style="color:red;">*</span></label>
                                                                <input type="text" id="emp-name" class="form-control">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="branch" class="form-label">Branch Name <span style="color:red;">*</span></label>
                                                                <select class="form-select" id="branch">
                                                                    </select>
                                                            </div>
        
                                                
                                                    </div>
                                                    </div> <!-- end col -->

                                                    <div class="col-lg-3">
                                                        
                                                        <div class="mb-3">
                                                                <label for="dob" class="form-label">Date Of Birth <span style="color:red;">*</span></label>
                                                                <input type="date" id="dob" class="form-control">
                                                        </div>

                                                         <div class="mb-3">
                                                                <label for="contact" class="form-label">Contact No <span style="color:red;">*</span></label>
                                                                <input type="number" id="contact" class="form-control" >
                                                        </div>        
                                                     </div> <!-- End col -->
                                                    

                                                         <div class="col-lg-3">
                                                        
                                                            <div class="mb-3">
                                                                    <label for="doj" class="form-label">Date Of Joining <span style="color:red;">*</span></label>
                                                                    <input type="date" id="doj" class="form-control">
                                                            </div>

                                                                <div class="mt-2" >
                                                                    <label for="" class="mb-2">Gender <span style="color:red;">*</span></label><br>
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="radio" id="male" value="male" name="gender" class="form-check-input">
                                                                        <label class="form-check-label" for="male">Male</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="radio" id="female" name="gender" value="female" class="form-check-input">
                                                                        <label class="form-check-label" for="female">Female</label>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>



                                                    </div>  <!-- End row -->

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        <div class="mb-3">
                                                                <label for="perm-address" class="form-label">Permanent Address <span style="color:red;">*</span></label>
                                                                <textarea class="form-control" id="perm-address" rows="5"></textarea>
                                                            </div>

                                                        </div><!-- End col -->

                                                        <div class="col-lg-6">
                                                        
                                                        <div class="mb-3">
                                                                <label for="email" class="form-label">Email <span>(optional)</span></label>
                                                                <input type="email" id="email" class="form-control">
                                                        </div>

                                                       

                                                     </div> <!-- End col -->
                                                    </div><!-- End row -->
                                                   
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                             <div class="mb-3">
                                                                <label for="emername" class="form-label">Emergency Contact Name <span style="color:red;">*</span></label>
                                                                <input type="text" id="emername" class="form-control" >
                                                             </div>

                                                             <div class="mb-3">
                                                                <label for="emernum" class="form-label">Emergency Contact Number <span style="color:red;">*</span></label>
                                                                <input type="number" id="emernum" class="form-control" >
                                                             </div>
                                                    </div><!-- End col -->

                                                    <div class="col-lg-6">
                                                            

                                                             <div class="mb-3">
                                                                <label for="refname" class="form-label">Referral Name (optional)</label>
                                                                <input type="text" id="refname" class="form-control">
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="refnum" class="form-label">Referral Number (optional)</label>
                                                                <input type="number" id="refnum" class="form-control">
                                                            </div>
                                                    </div><!-- End col -->

                                                </div> <!-- End row -->  
                                                    
                                                

                                                    <button type="button" id="update" style="background-color:orange;" class="btn  text-black mt-2 float-end ">Update Employee</button>    
                                                    
                                                
                                                
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- end row-->

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

        <!-- Select2 js  -->
        <script src="../assets/vendor/select2/js/select2.min.js"></script>

        <script src="../assets/vendor/jquery-mask-plugin/jquery.mask.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script>

            $(document).ready(function()
            {

                    var queryParams = new URLSearchParams(window.location.search);

                    if (queryParams.has('id')) 
                    {
                        var employeeId = queryParams.get('id');
                    }


                function fetchdata()
                {
                        console.log("Employee ID: " + employeeId);

                        var fd = new FormData();

                        fd.append('id', employeeId);

                        $.ajax({
                            url: 'ajax/employee/employee_edit_list.php',
                            type: 'post',
                            contentType: false,
                            processData: false,
                            data: fd,

                            success:function(response)
                            {
                                var result = JSON.parse(response); 
                                console.log(result);

                                if(result.status == 'Success')
                                {
                                    var data = result.data;
                                    console.log(data);

                                    if (data.length > 0) {
                                        var email = data[0].email;
                                        var emp_name = data[0].employee_name;
                                        var branchNameToSelect = data[0].branch_name;
                                        var dob = data[0].dob;
                                        var contact = data[0].phone;
                                        var emg_name = data[0].emg_name;
                                        var emg_num = data[0].phone_emg;
                                        var join_date = data[0].joining_date;
                                        var gender = data[0].gender;
                                        var address = data[0].address;
                                        var ref_name = data[0].ref_name;
                                        var ref_no = data[0].ref_no;
                                        console.log(address)
                                        
                                    } else {
                                        console.log('No data found');
                                    }


                                    var select = $('#branch');
                                    data.forEach(obj => {
                                        var option = $('<option>', {
                                            value: obj.branch_name,
                                            text: obj.branch_name
                                        });

                                        // Check if this option should be selected
                                        if (obj.branch_name === branchNameToSelect) {
                                            option.attr('selected', 'selected');
                                        }
                                    });

                                    

                                   
                                    document.getElementById('email').value = email;
                                    document.getElementById('emp-name').value = emp_name;
                                    document.getElementById('branch').value = branchNameToSelect;
                                    document.getElementById('dob').value = dob;
                                    document.getElementById('contact').value = contact;
                                    document.getElementById('emername').value = emg_name;
                                    document.getElementById('emernum').value = emg_num;
                                    document.getElementById('doj').value = join_date;
                                    document.querySelector('input[name="gender"][value="' + gender + '"]').checked = true;
                                    document.getElementById('perm-address').value = address;
                                    document.getElementById('refname').value = ref_name;
                                    document.getElementById('refnum').value = ref_no;
                                }
                            }
                        })
                    
                } fetchdata();
                
                $("#update").click(function()
                {
                var name = $("#emp-name").val().trim();
                console.log(name)
            
                var contact = $("#contact").val().trim();
                console.log(contact)
            
                var address = $("#perm-address").val().trim();
                console.log(address)
            
                var password = $("#password").val();
                console.log(password)
            
                var branchName = $("#branch").val();
                console.log(branchName)
            
                var eMail = $("#email").val().trim();
                console.log(eMail)

                var DOB = $("#dob").val().trim();
                console.log(DOB)
            
                var DOJ = $("#doj").val().trim();
                console.log(DOJ)
            
                var gender = $('input[name="gender"]:checked').val();
                console.log(gender)
            
                var emerName = $("#emername").val().trim();
                console.log(emerName)
                
                var emerNum = $("#emernum").val().trim();
                console.log(emerNum)

                var Refname = $("#refname").val().trim();
                console.log(Refname)

                var Refnum = $("#refnum").val().trim();
                console.log(Refnum)
                
                if(name == "")
                {
                    toastr.error('Enter your Name !', 'Empty');
                }
            
                else if( branchName == "")
                {
                    toastr.error('Enter Branch Name !', 'Empty');
            
                }
            
                else if(address == "")
                {
                    toastr.error('Enter Address !', 'Empty');
            
                }
            
                else if( DOB == "")
                {
                    toastr.error('Enter Date of birth !', 'Empty');
            
                }
            
                else if( DOJ == "")
                {
                    toastr.error('Enter Date of Joining !', 'Empty');
            
                }
            
            
                else if(contact == "")
                {
                    toastr.error('Enter your Contact Number !', 'Empty');
            
                }
            
                else if( gender == null)
                {
                    toastr.error('Select Gender !', 'Empty');
            
                }
            
               
                else if(password == "")
                {
                    toastr.error('Enter Password !', 'Empty');
            
                }
            
                else if( emerName == "")
                {
                    toastr.error('Enter Emergency Contact Name !', 'Empty');
            
                }
            
                else if( emerNum == "")
                {
                    toastr.error('Enter Emergency Contact Number !', 'Empty');
            
                }
                else
                {
                    var fd = new FormData();
                    fd.append("id",employeeId)
                    fd.append("name", name);
                    fd.append("contact", contact);
                    fd.append("address",address);
                    fd.append("password",password);
                    fd.append("branchName",branchName);
                    fd.append("email",eMail);
                    fd.append("DOB",DOB);
                    fd.append("DOJ",DOJ);
                    fd.append("gender",gender);
                    fd.append("emerName",emerName);
                    fd.append("emerNum",emerNum);
                    fd.append("refname",Refname);
                    fd.append("refnum",Refnum);
            
                    $.ajax({
                        url: 'ajax' ,
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
                                    $("#emp-name").val("");
                                    $("#contact").val("");
                                    $("#perm-address").val("");
                                    $("#password").val("");
                                    $("#branch").val("");
                                    $("#email").val("");
                                    $("#dob").val("");
                                    $("#doj").val("");
                                    $("#emername").val("");
                                    $("#emernum").val("");
                                    $("#refname").val("");
                                    $("#refnum").val("");
                                    
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

            function branchList()
                {
                    $.ajax({
                        url: 'ajax/branch/branch_list.php',
                        type: 'get',

                        success: function(response)
                        {
                            var result = JSON.parse(response);
                            
                            if(result.status == 'Success')
                            {
                                var data = result.data;

                                console.log(data);
                                var select = $('#branch');

                                data.map(obj => {
                                    
                                    select.append(`
                                        <option value="${obj.branch_name}">${obj.branch_name}</option>
                                    `)
                                })
                            }
                        }
                    })
                }
                branchList();
            
            </script>

            
    </body>


</html>


