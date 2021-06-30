<?php
include("../payroll/connectdb.php");

$query1 = "INSERT INTO listmaster(Parameter,Value) VALUES ";
$query1 .= "('AcadmicYear','" . $_POST["cay"] . "');";

if ($con->query($query1)) {

    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>Academic Year</strong> Added Successfully!</div></div>";
} else {
    $alredynot = true;
    $query2 = "SELECT * FROM listmaster WHERE Parameter='AcadmicYear' AND Value='" . $_POST["cay"] . "';";
    $empidresult = mysqli_query($con, $query2);
    while ($eid = mysqli_fetch_array($empidresult)) {
        $alredynot = false;
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>Academic Year</strong> Already <strong>Available!</strong> </div></div>";
    }
    if ($alredynot) {

        echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>Academic Year</strong> Not Added Successfully!</div></div>";
    }
}
