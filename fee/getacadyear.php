<?php
include("connectdb.php");

$empidquery = "SELECT DISTINCT FeesAcademicYear FROM tbfeesmaster;";
$empidresult = mysqli_query($con, $empidquery);
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value=" . $eid["FeesAcademicYear"] . "> " . $eid["FeesAcademicYear"] . "</option>";
}
?>