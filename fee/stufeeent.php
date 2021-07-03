<?php
include("connectdb.php");
$json = $_POST["sfd"];
$sd = json_decode($json);
$stuar = $sd->stu;
$fepmo = intval($sd->fee);
$feesofmonth = intval($fepmo / 12);
$tt = 0;

for ($i = 0; $i < count($stuar); $i++) {
    $tecount = 0;
    $fepa = 0;
    for ($j = 1; $j <= 12; $j++) {
        if ($stuar[$i][$j]) {
            $fepa += $feesofmonth;
        }
        $tecount++;
    }
    if ($tecount == 12) {
        $fepa = $fepmo;
    }
    $query = "UPDATE tbfeesmaster SET FeesJanuary='" . intval($stuar[$i][1]) . "',FeesFebruary='" . intval($stuar[$i][2]) . "',FeesMarch='" . intval($stuar[$i][3]) . "',FeesApril='" . intval($stuar[$i][4]) . "',FeesMay='" . intval($stuar[$i][5]) . "',FeesJune='" . intval($stuar[$i][6]) . "',FeesJuly='" . intval($stuar[$i][7]) . "',FeesAugust='" . intval($stuar[$i][8]) . "',FeesSeptember='" . intval($stuar[$i][9]) . "',FeesOctomber='" . intval($stuar[$i][10]) . "',FeesNovember='" . intval($stuar[$i][11]) . "',FeesDecember='" . intval($stuar[$i][12]) . "',FeesPaid='" . $fepa . "',FeesDue='" . $fepmo - $fepa . "' WHERE FeesAcademicYear='" . $sd->ay . "' AND FeesStandard='" . intval($sd->std) . "' AND FeesDivison='" . $sd->div . "' AND FeesStudentRollNo='" . intval($stuar[$i][0]) . "'; ";
    if ($con->query($query)) {
        $tt++;
    }
}
if (count($stuar) == $tt) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees Details Updated Successfully!</div></div>";
} else {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees Details Not Updated Successfully!</div></div>";
}
