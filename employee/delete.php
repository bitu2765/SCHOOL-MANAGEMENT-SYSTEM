<?php
include("../connection_to_db.php");
$conn = mysqli_connect($servername, $username, $password,$dbname);
//error_reporting(0);
$EmpNo=$_GET['EmpNo'];
$query="DELETE FROM employeemaster where EmpNo=$EmpNo";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<scrpit>alert('Record delete from database')</scrpit>";
     ?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/test4/employee-view.php">
	<?php
}

