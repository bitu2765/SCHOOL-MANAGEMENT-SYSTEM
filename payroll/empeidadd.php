<?php
$empidquery = "SELECT * FROM employeemaster WHERE Empstatus='ACTIVE';";
$empidresult = mysqli_query($con, $empidquery);
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value=" . $eid["EmpNo"] . "> " . $eid["EmpMidName"] . "</option>";
}
?>