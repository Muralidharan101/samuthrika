<?php
    require_once '../datab.php';
    $res = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $visitor_name  = mysqli_real_escape_string($conn, $_POST['YourName']);
        $visit_purpose = mysqli_real_escape_string($conn, $_POST['purVisit']);
        $phone         = mysqli_real_escape_string($conn, $_POST['contactNumber']);
        $reason        = mysqli_real_escape_string($conn, $_POST['reason']);
        $DOJ           = mysqli_real_escape_string($conn, $_POST['DOJ']);

        if($visit_purpose === 'enquiry')
        {
            $courses = mysqli_real_escape_string($conn, $_POST['courses']);
            $sql = "INSERT INTO `visitors_data` (`visitor_name`, `visit_purpose`, `phone`, `courses`,`reason`, `DOJ`, `status`, `dateTime`) 
                         VALUES('$visitor_name', '$visit_purpose', '$phone', '$courses' ,'$reason', '$DOJ', 'Active', '$dateTime')";
            
            $result = mysqli_query($conn , $sql);
        }
        else
        {
            $sql = "INSERT INTO `visitors_data` (`visitor_name`, `visit_purpose`, `phone`, `courses`,`reason`, `DOJ`, `status`, `dateTime`) 
                        VALUES('$visitor_name', '$visit_purpose', '$phone', '' ,'$reason', '$DOJ', 'Active', '$dateTime')";

            $result = mysqli_query($conn , $sql);
        }
       if($result)
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Visitor created';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to create visitor';
        }

    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error while receiving data';
    }

    echo json_encode($res);
?>