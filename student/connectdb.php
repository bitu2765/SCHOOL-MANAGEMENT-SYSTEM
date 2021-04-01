<?php
    include("../connection_to_db.php");

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(mysqli_connect_error())
    {
        echo "connection failed!";
    }

?>