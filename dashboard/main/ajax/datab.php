<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'samuthrika'; 

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn)
    {
        die("Connection error:" .mysqli_connect_error());
    }

    if(function_exists('date_default_timezone_set'))
    {
        date_default_timezone_set("Asia/Kolkata");
    }

    $dateTime = date('Y-m-d H:i:s');
    $today    = date('Y-m-d');

    $path = '/samuthrika/';
?>