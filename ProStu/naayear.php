<?php
include("../payroll/connectdb.php");
$empidquery = "SELECT DISTINCT Value FROM listmaster WHERE Parameter = 'AcadmicYear' ORDER BY Value DESC;";
$empidresult = mysqli_query($con, $empidquery);
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value='" . $eid["Value"] . "'> " . $eid["Value"] . "</option>";
}
?>

