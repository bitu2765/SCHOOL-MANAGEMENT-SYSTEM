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
            $tecount++;
        }
    }
    if ($tecount == 12) {
        $fepa = $fepmo;
    }
    $fedue = $fepmo - $fepa;
    $query = "UPDATE tbfeesmaster SET FeesJanuary='" . $stuar[$i][1] . "',FeesFebruary='" . $stuar[$i][2] . "',FeesMarch='" . $stuar[$i][3] . "',FeesApril='" . $stuar[$i][4] . "',FeesMay='" . $stuar[$i][5] . "',FeesJune='" . $stuar[$i][6] . "',FeesJuly='" . $stuar[$i][7] . "',FeesAugust='" . $stuar[$i][8] . "',FeesSeptember='" . $stuar[$i][9] . "',FeesOctomber='" . $stuar[$i][10] . "',FeesNovember='" . $stuar[$i][11] . "',FeesDecember='" . $stuar[$i][12] . "',FeesPaid='" . $fepa . "',FeesDue='" . $fedue . "' WHERE FeesAcademicYear='" . $sd->ay . "' AND FeesStandard='" . $sd->std . "' AND FeesDivison='" . $sd->div . "' AND FeesStudentRollNo='" . $stuar[$i][0] . "'; ";
    if ($con->query($query)) {
        $tt++;
    }
}
if (count($stuar) == $tt) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees Details Updated Successfully!</div></div>";
} else {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees Details Not Updated Successfully!</div></div>";
}


