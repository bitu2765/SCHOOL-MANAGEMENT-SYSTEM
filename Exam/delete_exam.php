<?php
include 'connection.php';


$sql ="DELETE FROM `exammaster` WHERE `Examid`= '".$_GET["id"]."'";
$res = $conn->query($sql) ;

  header("Location:view_exam.php");

?>
<!-- <script>

window.location = "exam.php";
</script> -->