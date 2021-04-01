<?php
include("../payroll/connectdb.php");
$empidquery = "SELECT DISTINCT StuStandard  FROM studentmaster WHERE StuAcdemicYear = '".$_POST["ay"]."';";
$empidresult = mysqli_query($con, $empidquery);
echo "<select class='form-control' id='pstd' placeholder='ei'>";
echo "<option value='0'>Select Standard</option>";
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value='" . $eid["StuStandard"] . "'> " . $eid["StuStandard"] . "</option>";
}
echo "</select>";
?>

