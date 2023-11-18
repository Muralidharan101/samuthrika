<?php
    require_once '../datab.php';
    $res = [];

    $p_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $p_code = mysqli_real_escape_string($conn, $_POST['product_code']);
    $p_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $p_desc = mysqli_real_escape_string($conn, $_POST['product_desc']);

    $file_name = $_FILES['product_img']['name'];
    $file_basename = basename($file_name);
    $file_ext = pathinfo($file_basename, PATHINFO_EXTENSION);
    $file_size = $_FILES['product_img']['name'];

    if($file_name)
    {
        $sql = "INSERT INTO product_clothes (`product_name`,`product_code`,`product_price`,`product_desc`, `category`, `status`, `dateTime`) 
                    VALUES ('$p_name', '$p_code', '$p_price', '$p_desc', 'clothes','Active', '$dateTime')";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            $insert_id = mysqli_insert_id($conn);

            if(!file_exists('../../product_clothes_images/'.$insert_id.'/'))
            {
                mkdir('../../product_clothes_images/'.$insert_id.'/', 0777, true);
            }

            $path = '../../product_clothes_images/'.$insert_id.'/';

            $new_filename = $path.''.$file_name.'';

            if(move_uploaded_file($_FILES["product_img"]["tmp_name"], $new_filename))
            {
                $update_sql = "UPDATE product_clothes SET `product_img`='$file_name' WHERE `id`='$insert_id'";
            
                if($update_result = mysqli_query($conn, $update_sql))
                {
                    $res['status'] = 'Success';
                    $res['remarks'] = 'Product Created Successfully';
                }
                else
                {
                    $res['status'] = 'Failed';
                    $res['remarks'] = 'Unable to create product';
                }
            }
        }
    }
    else
    {
        $res['status'] = 'Error';
        $res['remarks'] = 'Something went wrong';
    }

    echo json_encode($res);
?>