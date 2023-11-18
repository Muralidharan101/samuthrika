<?php
    require_once '../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "SELECT id, employee_name, branch_name, dob, phone, emg_name, phone_emg, joining_date, gender, address, ref_name, ref_no, email
            FROM employee_data 
            WHERE `status`='Active' AND `id`='$id'";

    if($result = mysqli_query($conn, $sql))
    {
        $data = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row; 
        }
        $res['data'] = $data;
        $res['status']  = 'Success';
        $res['remarks'] = 'Data Sent Successfully';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to sent data';
    }
    echo  json_encode($res);
?>