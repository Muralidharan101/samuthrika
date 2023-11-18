<?php
    require_once '../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $result = mysqli_query($conn, "SELECT l.*,(f.id) follow_up_id,f.follow_up_date,f.follow_up_details 
                                    FROM lead_data AS l 
                                    JOIN follow_up_data AS f 
                                    ON l.id = f.lead_id
                                    WHERE l.status = 'Active'
                                    AND l.id='$id'
                                    AND f.lead_id='$id'");
    
    if($result)
    {
        $data = []; 
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent Successfully';
    }
    else
    {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Data not sent';
    }
    echo json_encode($res);
?>