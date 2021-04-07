<?php
include 'connection.php';


$sql1 = "SELECT * FROM `exammaster` WHERE `Examid`= '".$_GET["id"]."'";
$result = $conn->query($sql1);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT *FROM `resultmaster`"; 
$result1 = $conn->query($sql2);
$row2 = mysqli_fetch_assoc($result1);

$ExamAcademicYear = $row['ExamAcademicYear'];
$ExamStandard = $row['ExamStandard'];
$ExamName =$row['ExamName'];  
$ExamSubName =$row['ExamSubjectName'];

$sql ="DELETE FROM `exammaster` WHERE `Examid`= '".$_GET["id"]."'";
$res = $conn->query($sql) ;
// do not remove white space 
$sql3 ="DELETE FROM `resultmaster` WHERE ResAcademicYear='$ExamAcademicYear'AND ResStandard='$ExamStandard'
 AND ResExamName='$ExamName' ";
$res3= $conn->query($sql3) ;

  header("Location:view_exam.php");

?>
<!-- AND ResSubName='  $ExamSubName' -->