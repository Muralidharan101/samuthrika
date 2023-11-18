<?php
    require_once '../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "SELECT id, product_img, product_name, product_code, product_price, product_desc, category FROM product_tailoring WHERE status='Active' AND id='$id' ";

    if($result = mysqli_query($conn, $sql))
    {
        $data = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data Sent';
    }
    else
    {
        $res['status'] = 'Failed';
        $rs['remarks'] = 'Unable to sent data';
    }

    echo json_encode($res);
?>