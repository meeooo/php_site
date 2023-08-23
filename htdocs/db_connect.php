<?php
    $sname = "localhost";
    $uname = "root";
    $passw = "";
    
    $dname = "test_db";

    $conn = mysqli_connect($sname, $uname, $passw, $dname);

    if (!$conn)
    {
        echo "DB connection failed!";
    }
?>