<?php

include("connectdb.php");
//error_reporting(0);

$StuUIDNo=$_GET['StuUIDNo'];
$sql="SELECT * FROM studentmaster where StuUIDNo=$StuUIDNo";
$result=mysqli_query($conn,$sql) or die("Query Failed:");
$row=mysqli_fetch_assoc($result);
 unlink("upload/".$row['file']);
  unlink("upload/".$row['filename']);
   unlink("upload/".$row['uploadfile']);
    unlink("upload/".$row['uploadfilename']);



$StuUIDNo=$_GET['StuUIDNo'];
$query="DELETE FROM studentmaster where StuUIDNo=$StuUIDNo";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<scrpit>alert('Record delete from database')</scrpit>";
     ?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/test4/student-view.php">
	<?php
}

