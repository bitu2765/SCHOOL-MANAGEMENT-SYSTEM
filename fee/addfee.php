<?php
include("connectdb.php");

$query = "";
if($_POST["tag"]=="Inserted")
{
    $query .="INSERT INTO `tbfeessetmaster`(`AcademicYear`, `standard`, `AnnualFees`) VALUES ('".$_POST["ay"]."','".$_POST["std"]."','".$_POST["fee"]."')";
}
else if($_POST["tag"]=="Updated")
{
    $query .="UPDATE `tbfeessetmaster` SET `AnnualFees` = '".$_POST["fee"]."' WHERE AcademicYear = '".$_POST["ay"]."' AND standard = '".$_POST["std"]."'";
}
else
{
    $query .="DELETE FROM `tbfeessetmaster` WHERE AcademicYear = '".$_POST["ay"]."' AND standard = '".$_POST["std"]."'";
}
// echo "clicked!";
if($con -> query($query)){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees ".$_POST["tag"]." Successfully!</div></div>";
}
else
{

echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'>Fees Not ".$_POST["tag"]." Successfully!</div></div>";
}

?>