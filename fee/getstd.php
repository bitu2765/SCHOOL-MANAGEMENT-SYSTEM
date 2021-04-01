<?php
include("connectdb.php");
$empidquery = "SELECT DISTINCT FeesStandard FROM tbfeesmaster WHERE FeesAcademicYear='" . $_GET["ay"] . "';";
$empidresult = mysqli_query($con, $empidquery);
echo "<select class='form-control' name='fea' id='fest'>";
echo "<option value='0' selected>Select Standard</option>";
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value=" . $eid["FeesStandard"] . "> " . $eid["FeesStandard"] . "</option>";
}
