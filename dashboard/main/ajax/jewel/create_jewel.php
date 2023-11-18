<?php
    require_once '../datab.php';
    $res = [];

    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_code = mysqli_real_escape_string($conn, $_POST['product_code']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_desc = mysqli_real_escape_string($conn, $_POST['product_desc']);

    if (isset($_FILES['product_img']) && $_FILES['product_img']['error'] === UPLOAD_ERR_OK) 
    {
        $file_name = $_FILES['product_img']['name'];
        $file_basename = basename($file_name);
        $file_ext = pathinfo($file_basename, PATHINFO_EXTENSION);


        if (in_array(strtolower($file_ext), ['jpg', 'jpeg', 'png', 'gif'])) {

            $result = mysqli_query($conn, "INSERT INTO `product_jewel` (`product_name`, `product_code`, `product_price`, `product_desc`, `category`, `status`, `dateTime`) 
                                            VALUES ('$product_name', '$product_code', '$product_price', '$product_desc', 'jewel', 'Active', '$dateTime')");

            if ($result) {
                $inserted_id = mysqli_insert_id($conn);
                $path = '../../product_jewel_images/' . $inserted_id . '/';

                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }

                $new_filename = $path . $file_basename;

                if (move_uploaded_file($_FILES['product_img']['tmp_name'], $new_filename)) {
                    $sql = "UPDATE `product_jewel` SET `product_img`='$file_basename' WHERE `id`='$inserted_id'";

                    if (mysqli_query($conn, $sql)) {
                        $res['status'] = 'Success';
                        $res['remarks'] = 'Product Created Successfully';
                    } else {
                        $res['status'] = 'Failed';
                        $res['remarks'] = 'Unable to update product image';
                    }
                } else {
                    $res['status'] = 'Failed';
                    $res['remarks'] = 'Unable to move uploaded file';
                }
            } else {
                $res['status'] = 'Failed';
                $res['remarks'] = 'Unable to create product';
            }
        } else {
            $res['status'] = 'Error';
            $res['remarks'] = 'Invalid file format';
        }
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'No file uploaded or an error occurred';
    }

    echo json_encode($res);
?>
