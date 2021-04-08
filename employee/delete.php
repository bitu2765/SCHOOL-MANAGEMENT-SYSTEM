<?php
include("./connectdb.php");
//error_reporting(0);
$EmpNo=$_GET['EmpNo'];
$query="DELETE FROM employeemaster where EmpNo=$EmpNo";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<scrpit>alert('Record delete from database')</scrpit>";
     ?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://SCHOOL-MANAGEMENT-SYSTEM-main/SCHOOL-MANAGEMENT-SYSTEM-main/employee/employee-view.php">
	<?php
}

