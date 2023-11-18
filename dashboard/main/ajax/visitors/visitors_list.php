<?php
    require_once '../datab.php';
    $res = [];

    $result = mysqli_query($conn, "SELECT * FROM visitors_data WHERE `status` = 'Active'");

    if($result)
    {
        $data = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        $res['data']    = $data;
        $res['status']  = 'Success';
        $res['remarks'] = 'Data Sent Successfully';  
    }
    else
    {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error in backend';
    }
    echo json_encode($res);
?>