<?php
    require_once '../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_code = mysqli_real_escape_string($conn, $_POST['product_code']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_desc = mysqli_real_escape_string($conn, $_POST['product_desc']);

    if(isset($_FILES['product_img']) && $_FILES['product_img']['error'] == UPLOAD_ERR_OK ) {
        $file_name = $_FILES['product_img']['name'];
        $file_basename = basename($file_name);
        $file_ext = pathinfo($file_basename, PATHINFO_EXTENSION);

        $select_query = "SELECT `product_img` FROM `product_clothes` WHERE `id`='$id' ";
        $result1 = mysqli_query($conn, $select_query);
        if($result1) {
            $update_query1 = "UPDATE product_clothes SET `product_name`='$product_name', `product_code`='$product_code', `product_price`='$product_price', `product_desc`='$product_desc'  WHERE `id`='$id' ";
            
            if(mysqli_query($conn, $update_query1)) {
                $res['status'] = 'Success';
                $res['remarks'] = 'Cloth data updated';
            } else {
                $select_query2 = "SELECT product_img FROM product_clothes WHERE `id`='$id'";

                $result = mysqli_query($conn, $select_query2);
                if($row = mysqli_fetch_assoc($result)) {
                    $prod_filename = $row['product_img'];
                    $file_path = '../../product_clothes/'.$id.'/';

                    $filenames_inside_file_path = scandir($file_path);

                    if(in_array($prod_filename, $filenames_inside_file_path)) {
                        $file_to_delete = $file_path.$prod_filename;

                        $new_filename = $file_path.$file_basename;
                        if(unlink($file_to_delete)) {

                            if(move_uploaded_file($_FILES['product_img']['tmp_name'], $new_filename)) {
                                $update_query2 = "UPDATE product_clothes SET `product_img`='$file_name' WHERE `id`='$id'";

                                if(mysqli_query($conn, $update_query2)){
                                    $res['status'] = 'Success';
                                    $res['remarks'] = 'Cloth data updated';
                                }
                            } else {
                                $res['status'] = 'Failed';
                                $res['remarks'] = 'Unable to move file to the folder';
                            }
                        } else {
                            $res['status'] = 'Error';
                            $res['remarks'] = 'Unable to delete file';
                        } 
                    } else {
                        $res['status'] = 'Error';
                        $res['remarks'] = 'File not found';
                    }
                }
            }
        }
    }  else {
        $update_query2 = "UPDATE product_clothes SET `product_name`='$product_name', `product_code`='$product_code', `product_price`='$product_price', `product_desc`='$product_desc'  WHERE `id`='$id' ";
        
        if(mysqli_query($conn, $update_query2)) {
            $res['status'] = 'Success';
            $res['remarks'] = 'Product Updated';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Unable to update product';
        }
    }


    echo json_encode($res);
?>