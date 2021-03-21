<?php
    include("../connection_to_db.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if(mysqli_connect_error())
    {
        echo "connection failed!";
    }


?>