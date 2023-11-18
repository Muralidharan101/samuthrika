<?php 
    require_once '../datab.php';
    $res = [];

    // $product_image = mysqli_real_escape_string($conn, $_POST['product_image']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_code = mysqli_real_escape_string($conn, $_POST['product_code']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_desc = mysqli_real_escape_string($conn, $_POST['product_desc']);

    if(isset($_FILES['product_img']) && $_FILES['product_img']['error'] === UPLOAD_ERR_OK )
    {
        $file_name = $_FILES['product_img']['name'];
        $file_basename = basename($file_name);
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if(in_array(strtolower($file_ext), ['jpg', 'png', 'jpeg', 'webp']))
        {
            $result = mysqli_query($conn, "INSERT INTO product_tailoring (`product_name`, `product_code`, `product_price`, `product_desc`, `category`, `status`, `dateTime`) 
                                                                    VALUES ('$product_name' , '$product_code', '$product_price' ,'$product_desc' , 'tailoring', 'Active', '$dateTime')");
            
            if($result)
            {
                $inserted_id = mysqli_insert_id($conn);
                $path = '../../product_tailoring_images/'.$inserted_id.'/';

                if(!file_exists($path))
                {
                    mkdir($path, 0777, true);
                }

                $new_filename = $path .$file_basename;

                if(move_uploaded_file($_FILES['product_img']['tmp_name'], $new_filename))
                {
                    $update_query = "UPDATE product_tailoring SET `product_img`='$file_name' WHERE `id`='$inserted_id'";

                    if(mysqli_query($conn, $update_query))
                    {
                        $res['status']  = 'Success';
                        $res['remarks'] = 'Product Created Successfully';
                    }
                    else 
                    {
                        $res['status'] = 'Failed';
                        $res['remarks'] = 'Unable to update product image';
                    }
                }
                else {
                    $res['status'] = 'Failed';
                    $res['remarks'] = 'Unable to move uploaded file';
                }
            }
        }
        else
        {
            $res['status'] = 'Error';
            $res['remark'] = 'Invalid File Format';
        }
    }
    else
    {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error on file upload';
    }

    echo json_encode($res);
?>