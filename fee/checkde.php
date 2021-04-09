<?php
include("./connectdb.php");
$query = "SELECT * FROM tbfeessetmaster WHERE EXISTS (SELECT AnnualFees WHERE AcademicYear = '" . $_POST["ay"] . "' AND standard = '" . $_POST["std"] . "');";
if ($result = mysqli_query($con, $query)) {
    if ($eid = mysqli_fetch_array($result)) {
        echo "<div class='row' style='margin: 10px;'><div class='col-10'>";
        echo "<br><table class='table table-striped' id='fstab' >
    <thead class='table-dark'>
        <tr>
            <th scope='col'>Academic Year</th>
            <th scope='col'>Standard </th>
            <th scope='col'>Annual Fee</th>
        </tr>
    </thead>
    <tbody>";
        echo "<tr>";
        echo "<td>" . $eid["AcademicYear"] . "</td>";
        echo "<td>" . $eid["standard"] . "</td>";
        echo "<td onclick='editfee();'>" . $eid["AnnualFees"] . "</td>";
        echo "</tr></tbody></table></div></div><br>";
        // echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>FOUND!</div></div>";
        echo "<div class='row' style='margin: 10px;'><div class='col-md-2'></div>";
        echo "<div class='col-3'><button type='button' class='btn-success btn' id='upfee' onclick='return upfee();' >Update</button></div>";
        echo "<div class='col-3'><button type='button' class='btn-success btn' id='clfee' onclick='return clfee();' >Clear</button></div></div>";
    } else {
        echo "<div class='row' style='margin-bottom: 10px;'>
        <div class='col-3 font-weight-bold'>Annual Fees</div>
        <div class='col-4'>
            <input type='number' class='form-control' name='feede' id='fsde'>
        </div>
    </div>";
        echo "<div class='row' style='margin: 10px;'><div class='col-md-4'></div><div class='col-3'><button type='button' class='btn-success btn' id='sufee' onclick='return sufee();' >Submit</button></div></div>";

        // echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>NOT FOUND!</div></div>";
    }
}
?>



