<?php
    require_once '../datab.php';
    $res = [];

    $result = mysqli_query($conn, "SELECT * FROM `lead_data` WHERE status = 'Active'  ");
    
    if($result)
    {
        $data = []; 
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent Successfully';
    }
    else
    {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Data not sent';
    }
    echo json_encode($res);
?>