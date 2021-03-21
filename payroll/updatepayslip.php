<?php
include("connectdb.php");

$query1 ="UPDATE ttbsalarymaster SET SalMonthdays='".$_POST["e7"]."', SalPresentdays='".$_POST["e8"]."', Salleavedays='".$_POST["e9"]."', SalLWP='".$_POST["e10"]."', SalBasic='".$_POST["e11"]."', SalDA='".$_POST["e13"]."', SalCLA='".$_POST["e27"]."', SalHRA='".$_POST["e17"]."', SalTA='".$_POST["e15"]."', SalSPPay='".$_POST["e23"]."', SalDGPay='".$_POST["e24"]."', SalMA='".$_POST["e19"]."', SalArreas1='".$_POST["e25"]."', SalArreas2='".$_POST["e26"]."', SalPTax='".$_POST["e14"]."', SalPF='".$_POST["e12"]."', SalIncomTax='".$_POST["e16"]."', Salother='".$_POST["e18"]."', SalTotalEarning='".$_POST["e20"]."', SalTotalDeduction='".$_POST["e21"]."', SalNetPayable='".$_POST["e22"]."' WHERE year = '" . $_POST["e28"] . "' AND SalMonthname = '" . $_POST["e6"] . "'AND SalEmpNo = '" . $_POST["e1"] . "';";
if($con -> query($query1)){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>Data</strong> Updated Successfully!</div></div>";
}
else
{

echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>Data</strong> Not Updated Successfully!</div></div>";
}
?>