<?php

include("./connection.php");
require("../fpdf/fpdf.php");
// require_once '../dompdf/autoload.inc.php';
MakeFont("..\font\Lohit_Gujarati.ttf");


$sqlqu = "  SELECT * FROM employeemaster;";
$res = mysqli_query($conn, $sqlqu);
class myPDF extends FPDF
{
    function header()
    {
        
        $this->SetFont('Lohit_Gujarati', 'B', 10);
        $this->Cell(600, 5, "ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત");
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
        $this->Ln();
        $this->dline(200);
    }


    function dline($eny)
    {
     
    }

    function viewTable($k)
    {
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