<?php
    require_once '../datab.php';
    $res = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $branch_name = mysqli_real_escape_string($conn, $_POST['branch']);

        $result = mysqli_query($conn, "INSERT INTO branch_data (`branch_name`, `status`, `dateTime`) VALUES ('$branch_name' , 'Active', '$dateTime')" );
        
        if($result)
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Branch Created';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to create branch';
        }
    }

    echo json_encode($res);
?>