<?php
include("connectdb.php");

$query ="INSERT INTO `tbfeessetmaster`(`AcademicYear`, `standard`, `AnnualFees`) VALUES ('".$_POST["ay"]."','".$_POST["std"]."','".$_POST["fee"]."')";
// echo "clicked!";
if($con -> query($query)){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees added Successfully!</div></div>";
}
else
{

echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees Not added Successfully!</div></div>";
}

?>