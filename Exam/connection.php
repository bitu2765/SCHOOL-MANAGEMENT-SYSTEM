<?php
include("../connection_to_db.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: ");
}

?>
