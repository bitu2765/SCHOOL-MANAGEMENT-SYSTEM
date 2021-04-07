<?php
include 'connection.php';


$sql ="DELETE FROM `submaster` WHERE `Subid`= '".$_GET["sid"]."'";
$res = $conn->query($sql) ;

  header("Location:add_sub.php");

?>