<?php
include("../payroll/connectdb.php");
$empidquery = "SELECT DISTINCT StuAcdemicyear FROM studentmaster;";
$empidresult = mysqli_query($con, $empidquery);
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value='" . $eid["StuAcdemicyear"] . "'> " . $eid["StuAcdemicyear"] . "</option>";
}
?>

