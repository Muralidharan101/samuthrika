<?php
    require_once '../datab.php';
    $res = [];

    $result = mysqli_query($conn, "SELECT id, branch_name FROM `branch_data` WHERE `status` = 'Active' ");

    if($result)
    {
        $data = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        $res['data']    = $data;
        $res['status']  = 'Success';
        $res['remarks'] = 'Data sent';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Data Not sent';
    }

    echo json_encode($res);
?>