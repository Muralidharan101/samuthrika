<?php
    require_once("../datab.php");
    $res = [];

    $sql = mysqli_query($conn,"SELECT * FROM user_data WHERE `status`='Active' ");

    if(mysqli_num_rows($sql) > 0) {
        session_start();
        
        $row = mysqli_fetch_assoc($sql);
        $customer_id = $row["id"];

        setcookie("samuthrika_login_id", $customer_id, time()+ 86400*24*60*60,"/");
        
        $res['status'] = 'Success';
        $res['remarks'] = 'Logged in';
        // $res['customer_id'] = $customer_id;
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'User not found';
    }
    echo json_encode($res);
?>