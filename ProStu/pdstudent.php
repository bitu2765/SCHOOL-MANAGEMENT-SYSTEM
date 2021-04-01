<?php
include("../payroll/connectdb.php");
$std = $_POST["nstd"];
$query = "";
if ($std == "PASSOUT") {
    $query .= "UPDATE studentmaster SET  Stustatus = '" . $std . "' WHERE StuAcdemicyear = '" . $_POST["cay"] . "' AND StuStandard = '" . $_POST["cstd"] . "';";
} else {
    $query .= "UPDATE studentmaster SET  StuAcdemicyear = '" . $_POST["nay"] . "',StuStandard = '" . $_POST["nstd"] . "' WHERE StuAcdemicyear = '" . $_POST["cay"] . "' AND StuStandard = '" . $_POST["cstd"] . "';";
}
// echo $query;
// if($con->query($query))
// {
//     echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Details Updated Successfully!</div></div>";
// }
// else
// {
//     echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Details Not Updated Successfully!</div></div>";
// }
if ($std != "PASSOUT") {

    $query2 = "INSERT INTO `tbfeesmaster`(`FeesStudentName`, `FeesStudentRollNo`, `FeesStudentGRNo`, `FeesStuDateOfAdmission`, `FeesStuParentMoNo`, `FeesAcademicYear`, `FeesStandard`, `FeesDivison`, `FeesJanuary`, `FeesFebruary`, `FeesMarch`, `FeesApril`, `FeesMay`, `FeesJune`, `FeesJuly`, `FeesAugust`, `FeesSeptember`, `FeesOctomber`, `FeesNovember`, `FeesDecember`, `FeesAnnual`, `FeesPaid`, `FeesDue`)";
    $query2 .= " SELECT x.StuStudentName,x.StuRollNo,x.StuGRNo,x.StuDateOfAdmission,x.StuParentMobileNumber1,'" . $_POST["nay"] . "','" . $_POST["nstd"] . "',x.StuDiv,'0','0','0','0','0','0','0','0','0','0','0','0',y.AnnualFees,y.AnnualFees,'0'  FROM studentmaster x INNER JOIN tbfeessetmaster y ON y.AcademicYear ='" . $_POST["nay"] . "' AND y.standard = '" . $_POST["nstd"] . "' AND x.StuAcdemicYear = '" . $_POST["cay"] . "' AND x.StuStandard = '" . $_POST["cstd"] . "' AND x.StuStatus = 'ACTIVE'; ";

    if ($con->query($query2)) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Fees Details Added Successfully!</div></div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Fees Details Not Added Successfully!</div></div>";
    }
}
