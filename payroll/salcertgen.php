<?php
include("connectdb.php");
//require("fpdf/fpdf.php");
require("../html_table/html_table.php");
$count = 0;
$mon = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$querys = "";
for ($x = 1; $x <= 12; $x++) {
    $tem = "sc" . $x;
    if (isset($_GET[$tem])) {
        $querys .= "SELECT * FROM ttbsalarymaster WHERE year='" . $_GET["eye"] . "' AND SalMonthname = '" . $_GET[$tem] . "' AND SalEmpNo = '" . $_GET["emid"] . "';";
        $count++;
    }
}
// $cpdf = "<link rel='stylesheet' href='css/app.css'><link href='css/gapi.css' rel='stylesheet'>";
$cpdf = "<table class='table' border='1'>";
$cpdf .= '<tbody>';
$cpdf .= '<tr>';
$cpdf .=  "<td width='150' height='30'>Employee Name</td>";
$cpdf .=  "<td width='250' height='30'>" . $_GET["Emna"] . "</td>";
$cpdf .= '</tr>';
$cpdf .= '<tr>';
$cpdf .=  "<td width='150' height='30'>Employee Designation</td>";
$cpdf .=  "<td width='250' height='30'>" . $_GET["Emde"] . "</td>";
$cpdf .= '</tr>';
$cpdf .= "<br>";
$cpdf .= '<tr>';
$cpdf .=  "<td width='57' height='30'>Month</td>";
$cpdf .=  "<td width='62' height='30'>Basic</td>";
$cpdf .=  "<td width='49' height='30'>DA</td>";
$cpdf .=  "<td width='44' height='30'>CLA</td>";
$cpdf .=  "<td width='57' height='30'>HRA </td>";
$cpdf .=  "<td width='47' height='30'>TA </td>";
$cpdf .=  "<td width='62' height='30'>SP Pay </td>";
$cpdf .=  "<td width='62' height='30'>DG Pay </td>";
$cpdf .=  "<td width='62' height='30'>MA </td>";
$cpdf .=  "<td width='62' height='30'>PT </td>";
$cpdf .=  "<td width='62' height='30'>Arreas1 </td>";
$cpdf .=  "<td width='62' height='30'>Arreas2 </td>";
$cpdf .=  "<td width='57' height='30'>PF</td>";
$cpdf .=  "<td width='49' height='30'>IT</td>";
$cpdf .=  "<td width='44' height='30'>Other</td>";
$cpdf .=  "<td width='102' height='30'>Total earning </td>";
$cpdf .=  "<td width='102' height='30'>Total deduction </td>";
$cpdf .=  "<td width='102' height='30'>Net Payable </td>";
$cpdf .= '</tr>';
if ($con->multi_query($querys)) {
    do {
        $results = $con->store_result();
        while ($erow = $results->fetch_assoc()) {
            $cpdf .=  "<tr>";
            $cpdf .=  "<td width='57' height='30'>" . $erow["SalMonthname"] . "</td>";
            $cpdf .=  "<td width='62' height='30'>" . $erow["SalBasic"] . "</td>";
            $cpdf .=  "<td width='49' height='30'>" . $erow["SalDA"] . "</td>";
            $cpdf .=  "<td width='44' height='30'>" . $erow["SalCLA"] . "</td>";
            $cpdf .=  "<td width='57' height='30'>" . $erow["SalHRA"] . " </td>";
            $cpdf .=  "<td width='47' height='30'>" . $erow["SalTA"] . " </td>";
            $cpdf .=  "<td width='62' height='30'>" . $erow["SalSPPay"] . "</td>";
            $cpdf .=  "<td width='62' height='30'>" . $erow["SalDGPay"] . " </td>";
            $cpdf .=  "<td width='62' height='30'>" . $erow["SalMA"] . " </td>";
            $cpdf .=  "<td width='62' height='30'>" . $erow["SalPTax"] . " </td>";
            $cpdf .=  "<td width='62' height='30'>" . $erow["SalArreas1"] . " </td>";
            $cpdf .=  "<td width='62' height='30'>" . $erow["SalArreas2"] . " </td>";
            $cpdf .=  "<td width='57' height='30'>" . $erow["SalPF"] . "</td>";
            $cpdf .=  "<td width='49' height='30'>" . $erow["SalIncomTax"] . "</td>";
            $cpdf .=  "<td width='44' height='30'>" . $erow["Salother"] . "</td>";
            $cpdf .=  "<td width='102' height='30'>" . $erow["SalTotalEarning"] . " </td>";
            $cpdf .=  "<td width='102' height='30'>" . $erow["SalTotalDeduction"] . " </td>";
            $cpdf .=  "<td width='102' height='30'>" . $erow["SalNetPayable"] . "</td>";
            $cpdf .= "</tr>";
        }
    } while ($con->next_result());
}
$cpdf .=  "</tbody>";
$cpdf .=  "</table>";
// echo $cpdf;
$slip = new PDF();
$slip->AddPage('L');
$slip->SetFont('Arial', '', 8);
$slip->WriteHTML($cpdf);
$slip->Output();
