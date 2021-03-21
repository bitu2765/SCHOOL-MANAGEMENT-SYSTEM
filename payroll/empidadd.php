<?php
$empidquery = "SELECT EmpNo FROM employeemaster WHERE Empstatus='ACTIVE';";
$empidresult = mysqli_query($con, $empidquery);
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value=" . $eid["EmpNo"] . "> " . $eid["EmpNo"] . "</option>";
}
?>