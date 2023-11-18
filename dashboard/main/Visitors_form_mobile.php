<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <title>Samuthrika | Visitor's Registration</title>

    <style>
        body{
            margin:0;
        }
        .card{
            border: none !important;
        }

        input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button
            {
            -webkit-appearance:none;margin:0;
            }

            ::selection{
                color:black !important;
                background-color:rgb(255, 187, 61) !important;
            }

    </style>

</head>
<body>

    <h2 style="background-color:rgb(255, 187, 61);" class=" pt-2 pb-2 px-3 container">Visitor's Registration</h2>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form">
                                                <div class="mb-3">
                                                    <label for="yName" class="form-label">Visitors Name  <span style="color:red;">*</span></label>
                                                    <input type="text" id="yName" class="form-control shadow-none ">
                                                </div>
    
                                                <div class="mb-3">
                                                    <label for="contact" class="form-label">Contact Number  <span style="color:red;">*</span></label>
                                                    <input type="number" id="contact" class="form-control  shadow-none">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="pVisit" class="form-label">Purpose of visit  <span style="color:red;">*</span> </label>
                                                    <select class="form-select  shadow-none" id="pVisit" onchange="optionSelect()">
                                                        <option value="">-- SELECT --</option>
                                                        <option value="enquiry">Enquiry</option>
                                                        <option value="General">General Visit</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3" id="courses">
                                                    
                                                </div>

    
                                                <div class="mb-3">
                                                    <label for="doj" class="form-label">Date of joining <span style="color:red;">*</span> </label>
                                                    <select class="form-select  shadow-none" id="doj">
                                                        <option value="">---SELECT---</option>
                                                        <option value="decide">Yet to decide</option>
                                                        <option value="soon">Soon</option>
                                                    </select>
                                                </div>
    

                                                <div class="mb-3">
                                                    <label for="reason" class="form-label">Reason (optional)</label>
                                                    <textarea class="form-control  shadow-none" id="reason" rows="5" placeholder="Your Message"></textarea>
                                                </div>
    
                                                <button style="background-color:orange;" class="btn  float-end mt-4" id="create">Create Visitor</button>

                                            </div>
                                        </div> <!-- end col -->
    
                                    </div>
                                    <!-- end row-->                      
                               
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
           
        </div>
    </div>

    <!-- Footer Start -->
    <footer class="footer bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mt-2">
                                <script>document.write(new Date().getFullYear())</script>  <p class="mb-0">Copyright © . All rights reserved by Samuthrika </p>
                            </div>
                            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

    <!-- Jqeury -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        function optionSelect() {
            var mainOption = document.getElementById("pVisit");
            var courses = document.getElementById("courses");

            if (mainOption.value === "enquiry") {
                $('#courses').html(`<label for="pVisit" class="form-label">Courses<span style="color:red;">*</span> </label>
                                         <select class="form-select  shadow-none" id="enqVisit">
                                            <option value="">---SELECT---</option>
                                            <option value="tailoring">Tailoring</option>
                                            <option value="ecom">E commerce</option>
                                         </select>`);
                
            } else {
                $('#courses').html('');
            }
        }


        $(document).ready(function()
        {
    
        $('#create').click(function()
        {
            
        var YourName = $("#yName").val().trim();
        console.log(YourName)

        var contactNumber = $("#contact").val().trim();
        console.log(contactNumber)
    
        var purVisit = $("#pVisit").val().trim();
        console.log(purVisit)

        var DOJ = $("#doj").val();
        console.log(DOJ)

        var Reason = $("#reason").val().trim();

        var courses = $("#enqVisit").val();

        if(YourName == "")
        {
            toastr.error('Enter your Name !', 'Empty');
        }

        else if(contactNumber == "")
        {
            toastr.error('Enter Contact Number !', 'Empty');
    
        }
    
        else if( purVisit == "")
        {
            toastr.error('Select Purpose of Visit !', 'Empty');
    
        }

        else if( DOJ == "")
        {
            toastr.error('Select Date Of Joining !', 'Empty');
    
        }

        
    
        else
        {
            var fd = new FormData();

            if(purVisit == "enquiry")
            {
                fd.append("courses",courses);
            }
            
            fd.append("YourName", YourName);
            fd.append("purVisit", purVisit);
            fd.append("contactNumber",contactNumber);
            fd.append("reason",Reason);
            fd.append("DOJ",DOJ);
            
    
            $.ajax({
                url: 'ajax/visitors/visitors_creation.php',
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
                            
                            $("#yName").val("");
                            $("#contact").val("");
                            $("#pVisit").val("");
                            $("#courses").val("");
                            $("#doj").val("");
                            $("#reason").val("");
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
    </script>



</body>
</html>