<?php
$empidquery = "SELECT DISTINCT year FROM ttbsalarymaster";
$empidresult = mysqli_query($con, $empidquery);
echo '<option value="" >select Year</option>';
while ($eid = mysqli_fetch_array($empidresult)) {
    echo "<option value=" . $eid["year"] . "> " . $eid["year"] . "</option>";
}
