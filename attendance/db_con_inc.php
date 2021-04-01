<?php 
include("../connection_to_db.php");
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    echo "<script>alert('unable to connect to database..!');</script>";
    die();
}
?>
