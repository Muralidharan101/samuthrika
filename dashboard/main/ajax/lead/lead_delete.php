<?php
    require_once '../datab.php';

    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $result = mysqli_query($conn, "UPDATE lead_data SET `status`='Inactive' WHERE `id`='$id' ");

    if($result)
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'Lead deleted successfully';
    }
    else
    {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to delete lead';
    }

    echo json_encode($res);
?>