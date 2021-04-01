<?php
include("connectdb.php");
$empidquery = "SELECT DISTINCT FeesDivison FROM tbfeesmaster WHERE FeesAcademicYear='" . $_GET["ay"] . "' AND FeesStandard='" . $_GET["std"] . "';";
$empidresult = mysqli_query($con, $empidquery);
echo "<select class='form-control' name='fea' id='fediv'>";
echo "<option value='0' selected>Select Standard</option>";
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value=" . $eid["FeesDivison"] . "> " . $eid["FeesDivison"] . "</option>";
}
