<?php
include("../payroll/connectdb.php");
$std = $_POST["nstd"];

$mainquery = "SELECT * FROM tbfeessetmaster WHERE AcademicYear='" . $_POST["nay"] . "' AND standard='" . $std . "';";

$tempresult = true;
$empidresult = mysqli_query($con, $mainquery);
while ($eid = mysqli_fetch_array($empidresult)) {
    $tempresult = false;
}

if ($tempresult) {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>Fees Not Set</strong> For Next Academic Year And Standard!</div></div>";

} 
else {
    $query = "";
    if ($std == "PASSOUT") {
        $query .= "UPDATE studentmaster SET  Stustatus = '" . $std . "' WHERE StuAcdemicyear = '" . $_POST["cay"] . "' AND StuStandard = '" . $_POST["cstd"] . "' AND StuStatus = 'ACTIVE';";
    } else {
        $query .= "UPDATE studentmaster SET  StuAcdemicyear = '" . $_POST["nay"] . "',StuStandard = '" . $_POST["nstd"] . "' WHERE StuAcdemicyear = '" . $_POST["cay"] . "' AND StuStandard = '" . $_POST["cstd"] . "' AND StuStatus = 'ACTIVE';";
    }
    if ($con->query($query)) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Details Updated Successfully!</div></div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Details Not Updated Successfully!</div></div>";
    }
    if ($std != "PASSOUT") {

        $query2 = "INSERT INTO `tbfeesmaster`(`FeesStudentName`, `FeesStudentRollNo`, `FeesStudentGRNo`, `FeesStuDateOfAdmission`, `FeesStuParentMoNo`, `FeesAcademicYear`, `FeesStandard`, `FeesDivison`, `FeesJanuary`, `FeesFebruary`, `FeesMarch`, `FeesApril`, `FeesMay`, `FeesJune`, `FeesJuly`, `FeesAugust`, `FeesSeptember`, `FeesOctomber`, `FeesNovember`, `FeesDecember`, `FeesAnnual`, `FeesPaid`, `FeesDue`)";
        $query2 .= " SELECT x.StuStudentName,x.StuRollNo,x.StuGRNo,x.StuDateOfAdmission,x.StuParentMobileNumber1,'" . $_POST["nay"] . "','" . $_POST["nstd"] . "',x.StuDiv,'0','0','0','0','0','0','0','0','0','0','0','0',y.AnnualFees,y.AnnualFees,'0'  FROM studentmaster x INNER JOIN tbfeessetmaster y ON y.AcademicYear ='" . $_POST["nay"] . "' AND y.standard = '" . $_POST["nstd"] . "' AND x.StuAcdemicYear = '" . $_POST["nay"] . "' AND x.StuStandard = '" . $_POST["nstd"] . "' AND x.StuStatus = 'ACTIVE'; ";

        if ($con->query($query2)) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Fees Details Added Successfully!</div></div>";
        } else {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Students Fees Details Not Added Successfully!</div></div>";
        }
    }
}
