<?php
include("connectdb.php");
$query = "SELECT * FROM employeemaster WHERE EmpNo = '".$_POST["e1"]."' ;";
$empbankac = "";
$empname="";
if($con->multi_query($query)){
    $result = $con ->store_result();
    while ($trow = $result->fetch_assoc())
    {
        $empbankac = $trow["EmpBankAccount"];
        $empname = $trow["EmpNamePrefix"];
        $empname .= " ".$trow["EmpFirstName"];
        $empname .= " ".$trow["EmpMidName"];
        $empname .= " ".$trow["EmpLastName"];
        $en =$trow["EmpFirstName"];
        $en .= " ".$trow["EmpLastName"];
    }
}
$query1 ="INSERT INTO ttbsalarymaster(SalEmpName,year, SalEmpNo, SalFullName, SalDesignation, SalPAN, SalPFNo, SalEmpBankAccount, SalMonthname, SalMonthdays, SalPresentdays, Salleavedays, SalLWP, SalBasic, SalDA, SalCLA, SalHRA, SalTA, SalSPPay, SalDGPay, SalMA, SalArreas1, SalArreas2, SalPTax, SalPF, SalIncomTax, Salother, SalTotalEarning, SalTotalDeduction, SalNetPayable) VALUES ";
$query1 .= "('".$en."','".$_POST["e28"]."','".$_POST["e1"]."','".$empname."','".$_POST["e4"]."','".$_POST["e3"]."','".$_POST["e5"]."','".$empbankac."','".$_POST["e6"]."','".$_POST["e7"]."','".$_POST["e8"]."','".$_POST["e9"]."','".$_POST["e10"]."','".$_POST["e11"]."','".$_POST["e13"]."','".$_POST["e27"]."','".$_POST["e17"]."','".$_POST["e15"]."','".$_POST["e23"]."','".$_POST["e24"]."','".$_POST["e19"]."','".$_POST["e25"]."','".$_POST["e26"]."','".$_POST["e14"]."','".$_POST["e12"]."','".$_POST["e16"]."','".$_POST["e18"]."','".$_POST["e20"]."','".$_POST["e21"]."','".$_POST["e22"]."');";

if($con -> query($query1)){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>".$_POST["e6"]."-".$_POST["e28"]." : ".$empname."</strong> PaySlip Added Successfully!</div></div>";
}
else
{

echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button><div class='alert-message'><strong>".$empname."</strong> PaySlip Not Added Successfully!</div></div>";
}
?>