<?php
    require_once '../datab.php';
    $res = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $emp_name   = mysqli_real_escape_string($conn, $_POST['name']);
        $phone      = mysqli_real_escape_string($conn, $_POST['contact']);
        $phone_emg  = mysqli_real_escape_string($conn, $_POST['emerNum']);
        $ref_name   = mysqli_real_escape_string($conn, $_POST['refname']);
        $ref_no     = mysqli_real_escape_string($conn, $_POST['refnum']);
        $name_emg   = mysqli_real_escape_string($conn, $_POST['emerName']);
        $address    = mysqli_real_escape_string($conn, $_POST['address']);
        $branchName = mysqli_real_escape_string($conn, $_POST['branchName']);
        $dob        = mysqli_real_escape_string($conn, $_POST['DOB']);
        $doj        = mysqli_real_escape_string($conn, $_POST['DOJ']);
        $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
        $email      = mysqli_real_escape_string($conn, $_POST['email']);
        $password   = mysqli_real_escape_string($conn, $_POST['password']);

        $enc_pass   = md5('samuthrika'. $password);

        $sql = "INSERT INTO employee_data (`employee_name`, `branch_name`, `dob`, `phone`, `emg_name`,`phone_emg`, `joining_date`, `gender`, `address`, `ref_name`, `ref_no`, `email`, `password`, `status`, `dateTime`) 
                                VALUES ('$emp_name', '$branchName', '$dob', '$phone', '$name_emg','$phone_emg', '$doj', '$gender', '$address', '$ref_name', '$ref_no', '$email', '$enc_pass', 'Active', '$dateTime')";

        if($result = mysqli_query($conn, $sql))
        {
            $res['status'] = 'Success';
            $res['remarks'] = 'Employee Created Successfully';
        }
        else
        {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Unable to create employee';
        }
    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Check request method';
    }

    echo json_encode($res);
?>