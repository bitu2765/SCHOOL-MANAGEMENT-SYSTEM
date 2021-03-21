<?php

include("../payroll/connectdb.php");
require("../fpdf/fpdf.php");
$cpdf = "<link rel='stylesheet' href='css/app.css'><link href='css/gapi.css' rel='stylesheet'>";
$cpdf .= '<tr>';
$cpdf .=  "<td width='500' height='30'>SZ Vaghela High School</td>";
$cpdf .=  "<td width='500' height='30'>Education Office, Anand</td>";
// $cpdf .=  "<td width='60' height='30'>Page No:" . $pg . "</td>";
$cpdf .= '</tr>';
$cpdf  .= "<table class='table' style='width:1000px;'>";
// $cpdf .= '<thead>';
$cpdf .= '<tbody>';
$cpdf .= '<tr>';
$cpdf .=  "<td>Emp No.</td>";
$cpdf .=  "<td>Emp Name</td>";
$cpdf .=  "<td>Basic</td>";
$cpdf .=  "<td>DA</td>";
$cpdf .=  "<td>CLA</td>";
$cpdf .=  "<td>HRA </td>";
$cpdf .=  "<td>TA </td>";
$cpdf .=  "<td>SP Pay </td>";
$cpdf .=  "<td>DG Pay </td>";
$cpdf .=  "<td>MA </td>";
$cpdf .=  "<td>PT </td>";
$cpdf .=  "<td>Arreas1 </td>";
$cpdf .=  "<td>Arreas2 </td>";
$cpdf .=  "<td>PF</td>";
$cpdf .=  "<td>IT</td>";
$cpdf .=  "<td>Other</td>";
$cpdf .=  "<td>Total earn </td>";
$cpdf .=  "<td>Total deduction </td>";
$cpdf .=  "<td>Net Payable </td>";
$cpdf .= '</tr>';


$sqlqu = "  SELECT * FROM employeemaster;";
$res = mysqli_query($con, $sqlqu);
class myPDF extends FPDF
{
    function header()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(600, 5, "SZ VAGHELA HIGH SCHOOL");
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->Cell(276, 5, "Employees List ");
        $this->Ln(10);
        $this->headerTable();
    }


    function footer()
    {
        $this->SetXY(-30, -17);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(60, 20, "Page : " . $this->PageNo());
    }

    function headerTable()
    {
        $this->SetFont("Times", "B", 11);
        if (isset($_GET["EmpNo"])) {
            $this->Cell(15, 10, "Emp N.", "T");
        }
        if (isset($_GET["EmpName"])) {
            $this->Cell(62, 10, "Emp Name", "T");
        }
        if (isset($_GET["EmpAddress1"])) {
            $this->Cell(57, 10, "Address", "T");
        } else if (isset($_GET["EmpAddress2"])) {
            $this->Cell(57, 10, "Address", "T");
        }
        if (isset($_GET["EmpDesignation"])) {
            $this->Cell(51, 10, "Designation", "T");
        }
        if (isset($_GET["EmpGender"])) {
            $this->Cell(17, 10, "Gender", "T");
        }
        if (isset($_GET["EmpDOB"])) {
            $this->Cell(22, 10, "BirthDate", "T");
        }
        if (isset($_GET["EmpContactNo"])) {
            $this->Cell(22, 10, "Contact no", "T");
        }
        if (isset($_GET["EmpDateofLeaving"])) {
            $this->Cell(20, 10, "Leaving", "T");
        }
        if (isset($_GET["EmpCategory"])) {
            $this->Cell(17, 10, "Category", "T");
        }
        if (isset($_GET["EmpAadharNo"])) {
            $this->Cell(26, 10, "Adhaar No", "T");
        }
        if (isset($_GET["EmpPan"])) {
            $this->Cell(21, 10, "PAN", "T");
        }
        if (isset($_GET["EmpPFno"])) {
            $this->Cell(22, 10, "PF No", "T");
        }
        if (isset($_GET["EmpStatus"])) {
            $this->Cell(21, 10, "Status", "T");
        }
        if (isset($_GET["EmpLastStatusChangeDate"])) {
            $this->Cell(22, 10, "Change Date", "T");
        }
        if (isset($_GET["EmpBankName"])) {
            $this->Cell(37, 10, "Bank Name", "T");
        }
        if (isset($_GET["EmpBankAccount"])) {
            $this->Cell(34, 10, "Ac. No.", "T");
        }
        if (isset($_GET["EmpBankIFSC"])) {
            $this->Cell(25, 10, "IFSC Code", "T");
        }
        if (isset($_GET["EmpEmail"])) {
            $this->Cell(56, 10, "Email Id", "T");
        }
        $this->Ln();
        $this->dline(200);
    }

    function setcol($i, $j)
    {
        if (($i % $j) == 0) {
            $this->SetY($i * 10 + 35);
        } else {
            $this->SetY($i * 10 + 25);
        }
        $this->SetX(194);
    }

    function dline($eny)
    {
        $sty = 25;
        $ax = 10;

        if (isset($_GET["EmpNo"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(15, 10, "Emp N.", 1);
            $ax += 15;
        }
        if (isset($_GET["EmpName"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(62, 10, "Emp Name", 1);
            $ax += 62;
        }
        if (isset($_GET["EmpAddress1"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(57, 10, "Address", 1);
            $ax += 57;
        } else if (isset($_GET["EmpAddress2"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(57, 10, "Address", 1);
            $ax += 57;
        }
        if (isset($_GET["EmpDesignation"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(51, 10, "Designation", 1);
            $ax += 51;
        }
        if (isset($_GET["EmpGender"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(15, 10, "Gender", 1);
            $ax += 17;
        }
        if (isset($_GET["EmpDOB"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(22, 10, "BirthDate", 1);
            $ax += 22;
        }
        if (isset($_GET["EmpContactNo"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(22, 10, "Contact no", 1);
            $ax += 22;
        }
        if (isset($_GET["EmpDateofLeaving"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(20, 10, "Leaving", 1);
            $ax += 20;
        }
        if (isset($_GET["EmpCategory"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(17, 10, "Category", 1);
            $ax += 17;
        }
        if (isset($_GET["EmpAadharNo"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(26, 10, "Adhaar No", 1);
            $ax += 26;
        }
        if (isset($_GET["EmpPan"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(21, 10, "PAN", 1);
            $ax += 21;
        }
        if (isset($_GET["EmpPFno"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(22, 10, "PF No", 1);
            $ax += 22;
        }
        if (isset($_GET["EmpStatus"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(21, 10, "Status", 1);
            $ax += 21;
        }
        if (isset($_GET["EmpLastStatusChangeDate"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(22, 10, "Change Date", 1);
            $ax += 22;
        }
        if (isset($_GET["EmpBankName"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(37, 10, "Bank Name", 1);
            $ax += 37;
        }
        if (isset($_GET["EmpBankAccount"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(34, 10, "Ac. No.", 1);
            $ax += 34;
        }
        if (isset($_GET["EmpBankIFSC"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(25, 10, "IFSC Code", 1);
            $ax += 25;
        }
        if (isset($_GET["EmpEmail"])) {
            $this->Line($ax, $sty, $ax, $eny);
            // $this->Cell(56, 10, "Email Id", 1);
            $ax += 56;
        }
        $this->Line($ax, $sty, $ax, $eny);
    }

    function viewTable($k)
    {
        $px = $this->GetX();
        $py = $this->GetY();
        $nx = 10;
        $ny = 10;
        $this->SetFont("Times", "", 10);
        while ($ansr = mysqli_fetch_assoc($k)) {
            $py = $this->GetY();
            if (isset($_GET["EmpName"]) && isset($_GET["EmpAddress"])) {
                $tword = substr_count(wordwrap($ansr["EmpNamePrefix"] . " " . $ansr["EmpFirstName"] . " " . $ansr["EmpMidName"] . " " . $ansr["EmpLastName"], 28, "\n"), "\n");
                $tword1 = substr_count(wordwrap($ansr["EmpAddress1"], 22, "\n"), "\n");
                if ($this->GetY() + max($tword + 1, $tword1 + 1) * 10 > $this->PageBreakTrigger) {
                    $this->AddPage("L", "A4", 0);
                    $py = $this->GetY();
                }
            } else if (isset($_GET["EmpName"])) {
                $tword = substr_count(wordwrap($ansr["EmpNamePrefix"] . " " . $ansr["EmpFirstName"] . " " . $ansr["EmpMidName"] . " " . $ansr["EmpLastName"], 28, "\n"), "\n");
                // $tword1 = substr_count(wordwrap($ansr["EmpAddress1"], 22, "\n"), "\n");
                if ($this->GetY() + ($tword + 1) * 10 > $this->PageBreakTrigger) {
                    $this->AddPage("L", "A4", 0);
                    $py = $this->GetY();
                }
            } else if (isset($_GET["EmpAddress"])) {
                // $tword = substr_count(wordwrap($ansr["EmpNamePrefix"] . " " . $ansr["EmpFirstName"] . " " . $ansr["EmpMidName"] . " " . $ansr["EmpLastName"], 28, "\n"), "\n");
                $tword1 = substr_count(wordwrap($ansr["EmpAddress1"], 22, "\n"), "\n");
                if ($this->GetY() + ($tword1 + 1) * 10 > $this->PageBreakTrigger) {
                    $this->AddPage("L", "A4", 0);
                    $py = $this->GetY();
                }
            } else {
                if ($this->GetY() + 10 > $this->PageBreakTrigger) {
                    $this->AddPage("L", "A4", 0);
                    $py = $this->GetY();
                }
            }
            if (isset($_GET["EmpNo"])) {
                $this->Cell(15, 10, $ansr["EmpNo"], "T");
            }
            if (isset($_GET["EmpName"])) {
                $this->MultiCell(62, 10, $ansr["EmpNamePrefix"] . " " . $ansr["EmpFirstName"] . " " . $ansr["EmpMidName"] . " " . $ansr["EmpLastName"], "T");
                $ny = $this->GetY();
                $px = $this->GetX();
                $this->SetY($py);
                if (isset($_GET["EmpNo"])) {
                    $this->SetX($px + 77);
                } else {
                    $this->SetX($px + 62);
                }
            }

            if (isset($_GET["EmpAddress1"])) {
                // $this->SetFont("Times", "", 8);
                $this->MultiCell(57, 10, $ansr["EmpAddress1"] . " ," . $ansr["EmpCity"] . " ," . $ansr["EmpState"] . " ," . $ansr["EmpPinCode"] . " .", "T");
                $ny = $this->GetY();
                $px = $this->GetX();
                $this->SetY($py);
                if (isset($_GET["EmpNo"])) {
                    if (isset($_GET["EmpName"])) {
                        $this->SetX($px + 134);
                    } else {
                        $this->SetX($px + 72);
                    }
                } else {
                    if (isset($_GET["EmpName"])) {
                        $this->SetX($px + 119);
                    } else {
                        $this->SetX($px + 57);
                    }
                }
                // $this->setcol($lin,$tlin);
                // $this->SetFont("Times", "", 10);
            } else if (isset($_GET["EmpAddress2"])) {
                // $this->SetFont("Times", "", 8);
                $this->MultiCell(57, 10, $ansr["EmpAddress2"] . " ," . $ansr["EmpCity"] . " ," . $ansr["EmpState"] . " ," . $ansr["EmpPinCode"] . " .", "T");
                $ny = $this->GetY();
                $px = $this->GetX();
                $this->SetY($py);
                if (isset($_GET["EmpNo"])) {
                    if (isset($_GET["EmpName"])) {
                        $this->SetX($px + 134);
                    } else {
                        $this->SetX($px + 72);
                    }
                } else {
                    if (isset($_GET["EmpName"])) {
                        $this->SetX($px + 119);
                    } else {
                        $this->SetX($px + 57);
                    }
                }
                // $this->setcol($lin,$tlin);
                // $this->SetFont("Times", "", 10);
            }
            if (isset($_GET["EmpDesignation"])) {
                $this->Cell(51, 10, $ansr["EmpDesignation"], "T");
            }
            if (isset($_GET["EmpGender"])) {
                $this->Cell(17, 10, $ansr["EmpGender"], "T");
            }
            if (isset($_GET["EmpDOB"])) {
                $this->Cell(22, 10, $ansr["EmpDOB"], "T");
            }
            if (isset($_GET["EmpContactNo"])) {
                $this->Cell(22, 10, $ansr["EmpContactNo"], "T");
            }
            if (isset($_GET["EmpDateofLeaving"])) {
                $this->Cell(20, 10, $ansr["EmpDateofLeaving"], "T");
            }
            if (isset($_GET["EmpCategory"])) {
                $this->Cell(17, 10, $ansr["EmpCategory"], "T");
            }
            if (isset($_GET["EmpAadharNo"])) {
                $this->Cell(26, 10, $ansr["EmpAadharNo"], "T");
            }
            if (isset($_GET["EmpPan"])) {
                $this->Cell(21, 10, $ansr["EmpPan"], "T");
            }
            if (isset($_GET["EmpPFno"])) {
                $this->Cell(22, 10, $ansr["EmpPFno"], "T");
            }
            if (isset($_GET["EmpStatus"])) {
                $this->Cell(21, 10, $ansr["EmpStatus"], "T");
            }
            if (isset($_GET["EmpLastStatusChangeDate"])) {
                $this->Cell(22, 10, $ansr["EmpLastStatusChangeDate"], "T");
            }
            if (isset($_GET["EmpBankName"])) {
                $this->Cell(37, 10, $ansr["EmpBankName"], "T");
            }
            if (isset($_GET["EmpBankAccount"])) {
                $this->Cell(34, 10, $ansr["EmpBankAccount"], "T");
            }
            if (isset($_GET["EmpBankIFSC"])) {
                $this->Cell(25, 10, $ansr["EmpBankIFSC"], "T");
            }
            if (isset($_GET["EmpEmail"])) {
                $this->Cell(56, 10, $ansr["EmpEmailID"], "T");
            }
            //$this->Ln();
            // $this->SetLeftMargin(116);
            if (isset($_GET["EmpName"]) || isset($_GET["EmpAddress"])) {
                $this->SetY($ny);
                $this->SetX($nx);
            } else {
                // $this->Cell(15);
                // $this->Cell(45,10,"Sudani");
                $this->Ln();
            }
        }
    }
}











$slip = new myPDF();
$slip->AliasNbPages();
$slip->AddPage('L', 'A4', 0);
$slip->viewTable($res);
// $slip->SetFont('Arial', '', 8);
// $slip->WriteHTML($cpdf);
$slip->Output();
?>


<!-- <table style="width: 100 ;"></table> -->