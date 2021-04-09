
<?php
include("connectdb.php");
$op = '<table class="table table-striped" border ="1" style="text-align:center:">
    <thead class="table-dark" style="text-align:center;">
        <tr>
            <th scope="col">Sr No.</th>
            <th scope="col">Roll No.</th>
            <th scope="col">Student Name</th>
            <th scope="col">Fees Due</th>
            <th scope="col">Due Month</th>
            <th scope="col">Fees Paid</th>
        </tr>';
$empidquery = "SELECT * FROM tbfeesmaster WHERE FeesAcademicYear='" . $_GET["feay"] . "' AND FeesStandard='" . $_GET["fest"] . "' AND FeesDivison='" . $_GET["fediv"] . "' ORDER BY FeesStudentRollNo;";
$empidresult = mysqli_query($con, $empidquery);
$cnt = 1;
$annualf = 0;
// echo "<select class='form-control' name='fea' id='fediv'>";
// echo "<option value='0' selected>Select Standard</option>";
while ($eid = mysqli_fetch_array($empidresult)) {
    $annualf = $eid["FeesAnnual"];
    $op .= "<tr>";
    $op .= "<td>" . $cnt++ . "</td>";
    $op .= "<td>" . $eid["FeesStudentRollNo"] . "</td>";
    $op .= "<td>" . $eid["FeesStudentName"] . "</td>";
    $op .= "<td>" . $eid["FeesDue"] . "</td>";
    $op .= "<td><table border='1'><tbody><tr>";
    if (!($eid["FeesJanuary"])) {
        $op .= "<tr><td class='text-success'>January</td></tr>";
    }
    if (!($eid["FeesFebruary"])) {
        $op .= "<tr><td class='text-success'>February</td></tr>";
    }
    if (!($eid["FeesMarch"])) {
        $op .= "<tr><td class='text-success'>March</td></tr>";
    }
    if (!($eid["FeesApril"])) {
        $op .= "<tr><td class='text-success'>April</td></tr>";
    }
    if (!($eid["FeesMay"])) {
        $op .= "<tr><td class='text-success'>May</td></tr>";
    }
    if (!($eid["FeesJune"])) {
        $op .= "<tr><td class='text-success'>June</td></tr>";
    }
    if (!($eid["FeesJuly"])) {
        $op .= "<tr><td class='text-success'>July</td></tr>";
    }
    if (!($eid["FeesAugust"])) {
        $op .= "<tr><td class='text-success'>August</td></tr>";
    }
    if (!($eid["FeesSeptember"])) {
        $op .= "<tr><td class='text-success'>September</td></tr>";
    }
    if (!($eid["FeesOctomber"])) {
        $op .= "<tr><td class='text-success'>Octomber</td></tr>";
    }
    if (!($eid["FeesNovember"])) {
        $op .= "<tr><td class='text-success'>November</td></tr>";
    }
    if (!($eid["FeesDecember"])) {
        $op .= "<tr><td class='text-success'>December</td></tr>";
    }

    $op .= "</tr></tbody></table></td>
                  <td>" . $eid["FeesPaid"] . "</td>
                  </tr>";
}
$op .= '</tbody></table>';
header("Content-Type:applicatoin/vnd.ms-excel");
header("Content-Disposition:atachment; filename=feespayment : ".date("d-m-y").".xls");
echo "Shree SZ Vaghela High School<br><br>";
echo  "Report Date       : ".date("d-m-Y")."<br>";
echo  "Academic Year     : ".$_GET["feay"];
echo  "<br>Standard      : ".$_GET["fest"];
echo  "<br>Division      : ".$_GET["fediv"];
echo  "<br>Annual Fee    : ".$annualf."<br>";

echo $op;
?>