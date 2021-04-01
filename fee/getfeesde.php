<?php
include("connectdb.php");
$empidquery = "SELECT DISTINCT FeesAnnual FROM tbfeesmaster WHERE FeesAcademicYear='" . $_GET["ay"] . "' AND FeesStandard='" . $_GET["std"] . "' AND FeesDivison='" . $_GET["div"] . "';";
$empidresult = mysqli_query($con, $empidquery);
// echo "<select class='form-control' name='fea' id='fediv'>";
// echo "<option value='0' selected>Select Standard</option>";
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<label for='anfe' type='number' id='fedee'  value='".$eid["FeesAnnual"]."'>".$eid["FeesAnnual"]."</label>";
}

?>
