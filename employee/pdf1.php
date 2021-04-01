<?php

require_once '../fpdf/fpdf.php';
 include("./connectdb.php");
 
$sql="SELECT * FROM employeemaster";
$data=mysqli_query($conn,$sql);


    $pdf = new FPDF();
    $pdf->SetLeftMargin(0);
    $pdf->AddPage('L',);
    
   
    $pdf->SetFont("Arial",'',10);
    $pdf->Cell(300,5,"Employee details",1,1,'C'); 
    $pdf->SetFont("Arial","",4);
    $pdf->cell(5,10,"Id no",1,0,'C');
    $pdf->cell(20,10,"Name",1,0,'C');
    $pdf->cell(10,10,"Designation",1,0,'C');
    $pdf->cell(11,10,"Birthdate",1,0,'C');
    $pdf->cell(40,10,"Address1",1,0,'C');
    $pdf->cell(40,10,"Address2",1,0,'C');
    $pdf->cell(10,10,"State",1,0,'C');
    $pdf->cell(10,10,"City",1,0,'C');
    $pdf->cell(10,10,"PinCode",1,0,'C');
    $pdf->cell(10,10,"ContNo",1,0,'C');
    $pdf->SetFont("Arial","",5);
    $pdf->cell(25,10,"EmailId",1,0,'C');
     $pdf->SetFont("Arial","",4);
    $pdf->cell(10,10,"Leaving",1,0,'C');
    $pdf->cell(10,10,"Category",1,0,'C');
    $pdf->cell(10,10,"AadhNo",1,0,'C');
    $pdf->cell(10,10,"PanNo",1,0,'C');
    $pdf->cell(10,10,"PFno",1,0,'C');
    $pdf->cell(10,10,"Status",1,0,'C');
    $pdf->cell(13,10,"ChangeDate",1,0,'C');
    $pdf->cell(13,10,"BankName",1,0,'C');
    $pdf->cell(10,10,"Acono",1,0,'C');
    $pdf->cell(10,10,"IFSCno",1,1,'C');
             while($row=mysqli_fetch_assoc($data))
             {
             $pdf->cell(5,10,$row['EmpNo'],1,0,'C');
             $pdf->cell(20,10,$row['EmpFirstName']. " " .$row['EmpMidName']. " ".$row['EmpLastName'],1,0,'C');  
             $pdf->cell(10,10,$row['EmpDesignation'],1,0,'C');
             $pdf->cell(11,10,$row['EmpDOB'],1,0,'C');
             $pdf->cell(40,10,$row['EmpAddress1'],1,0,'C');
             $pdf->cell(40,10,$row['EmpAddress2'],1,0,'C');
             $pdf->cell(10,10,$row['EmpState'],1,0,'C');
             $pdf->cell(10,10,$row['EmpCity'],1,0,'C');
             $pdf->cell(10,10,$row['EmpPinCode'],1,0,'C');
             $pdf->cell(10,10,$row['EmpContactNo'],1,0,'C');
              $pdf->SetFont("Arial","",5);
             $pdf->cell(25,10,$row['EmpEmailID'],1,0,'C');
              $pdf->SetFont("Arial","",4);
             $pdf->cell(10,10,$row['EmpDateofLeaving'],1,0,'C');
             $pdf->cell(10,10,$row['EmpCategory'],1,0,'C');
            $pdf->cell(10,10,$row['EmpAadharNo'],1,0,'C');
             $pdf->cell(10,10,$row['EmpPan'],1,0,'C');
             $pdf->cell(10,10,$row['EmpPFno'],1,0,'C');
             $pdf->cell(10,10,$row['EmpStatus'],1,0,'C');
             $pdf->cell(13,10,$row['EmpLastStatusChangeDate'],1,0,'C');
             $pdf->cell(13,10,$row['EmpBankName'],1,0,'C');
            $pdf->cell(10,10,$row['EmpBankAccount'],1,0,'C');
             $pdf->cell(10,10,$row['EmpBankIFSC'],1,1,'C');
             }
             
    $pdf->output();

 ?>