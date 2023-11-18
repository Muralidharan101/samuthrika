<?php
    require_once '../datab.php';
    $res = [];

    $sql = "SELECT id, product_img, product_name, product_code, product_price, product_desc FROM product_tailoring WHERE `status`='Active'";

    if($result = mysqli_query($conn, $sql))
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