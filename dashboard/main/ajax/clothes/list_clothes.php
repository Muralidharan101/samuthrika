<?php
    require_once '../datab.php';
    $res = [];

    $sql = "SELECT *  FROM  `product_clothes` WHERE `status`='Active' ";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        $data = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        $res['data'] = $data; 
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent successfully';
    }
    else
    {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to sent data';
    }

    echo json_encode($res);
?>