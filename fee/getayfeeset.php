<?php
// include("./connectdb.php");
$empidquery = "SELECT DISTINCT Value FROM listmaster WHERE Parameter='AcadmicYear';";
$empidresult = mysqli_query($con, $empidquery);
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value=" . $eid["Value"] . "> " . $eid["Value"] . "</option>";
}
?>