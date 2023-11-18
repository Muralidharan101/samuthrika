<?php
    require_once '../datab.php';

    $res = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $lead_name = mysqli_real_escape_string($conn, $_POST['LeadName']);
        $phone     = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
        $lead_req  = mysqli_real_escape_string($conn, $_POST['leadRequirement']);
        $price     = mysqli_real_escape_string($conn, $_POST['Price']);
        $service   = mysqli_real_escape_string($conn, $_POST['service']);
        $reference       = mysqli_real_escape_string($conn, $_POST['ref']);

        $sql = "INSERT INTO `lead_data` (`lead_name`, `phone`, `lead_req`, `price`, `service`, `reference_name`, `status`, `dateTime`) 
                VALUES ('$lead_name', '$phone', '$lead_req', '$price', '$service', '$reference', 'Active', '$dateTime')";

        if($result = mysqli_query($conn, $sql))
        {
            $inserted_lead_id  = mysqli_insert_id($conn);
            $follow_up_date    = mysqli_real_escape_string($conn, $_POST['follow_up_date']);
            $follow_up_details = mysqli_real_escape_string($conn, $_POST['follow_up_details']);

            $sql = "INSERT INTO `follow_up_data` (`lead_id`, `follow_up_date`, `follow_up_details`, `status`, `dateTime`) 
                            VALUES ('$inserted_lead_id', '$follow_up_date', '$follow_up_details', 'Active', '$dateTime') ";
            
            $result = mysqli_query($conn , $sql);
            
            if($result)
            {
                $res['status']  = 'Success';
                $res['remarks'] = 'Lead Data Created';
            }
            else
            {
                $res['status']  = 'Failed';
                $res['remarks'] = 'Unable to Create Follow Up'; 
            }
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to Create Lead';
        }

    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error while receiving data';
    }
    echo json_encode($res);
?>