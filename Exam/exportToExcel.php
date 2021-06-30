<?php
  include 'connection.php';    
  $ResAcademicYear= $_POST['mark_year'];
  $ResStandard= $_POST['mark_std'];
  $ResDivision= $_POST['mark_Div'];
  $ResExamName= $_POST['mark_Exam'];
$a="Result_$ResAcademicYear-Std_$ResStandard-Div_$ResDivision";
$b=" 
Academic Year: $ResAcademicYear
<br>
Standard: $ResStandard
<br>
Divison: $ResDivision
<br>
Exam Name: $ResExamName
<br>";

echo $b;  
$output='<table border="1">        
                 <tr>    
                        <th rowspan="2">Roll No</th>
                        <th rowspan="2">Student Name</th>';
$fetchSub = "SELECT DISTINCT ResSubName, ResTotalMarks, ResPassingMarks FROM resultmaster WHERE ResAcademicYear='$ResAcademicYear' And ResStandard='$ResStandard' And ResExamName='$ResExamName' AND ResDivision='$ResDivision' ORDER BY ResSubName ";
$result3 = $conn->query($fetchSub);
$op1="";
while($row2 = mysqli_fetch_assoc($result3))
{
  $output .= '<th>'.$row2["ResSubName"].'</th>';
  $op1 .= '<th>'. $row2["ResPassingMarks"].'|'.$row2["ResTotalMarks"].'</th>';
}
$output .= '<th rowspan="2">Status</th></tr><tr>';
$output .= $op1;
$output .= '</tr>'; 


            $sql = "SELECT DISTINCT `ResRollNo`, `ResStudentName`FROM `resultmaster` 
             WHERE `ResAcademicYear`='$ResAcademicYear' And `ResStandard`='$ResStandard' And `ResExamName`='$ResExamName' AND `ResDivision`='$ResDivision'  GROUP BY ResRollNo";
            
              $result = $conn->query($sql);
              while($row = mysqli_fetch_assoc($result)){
                $rollno = $row['ResRollNo'];
                $name = $row['ResStudentName'];
                $status = true;

                $sql1 = "SELECT `ResRollNo`, `ResStudentName`, `ResSubName`, `ResTotalMarks`, `ResPassingMarks`, `ResMarksObtained`, `ResStatus` FROM `resultmaster` 
                WHERE `ResRollNo`='$rollno' AND `ResAcademicYear`='$ResAcademicYear' And `ResStandard`='$ResStandard' And `ResExamName`='$ResExamName' AND `ResDivision`='$ResDivision' ORDER BY ResSubName";

                $output .= '<tr><td>'.$row["ResRollNo"] .'</td><td>'.$row["ResStudentName"];

                $result1 = mysqli_query($conn,$sql1);
                while($row3 = mysqli_fetch_assoc($result1)){

                  $getStatus = $row3["ResStatus"];
                  if($getStatus=="FAIL"){
                    $status = false;
                  }
                  $output .= '<td>'.$row3["ResMarksObtained"] .'</td>';
                }
                if(!$status){
                  $output .= '<td>FAIL</td>';
                }else{
                  $output .= '<td>PASS</td>';
                }
                $output .= '</tr>';
              }
            
           
            $output .='</table>';

header("Content-Type:applicatoin/xls");
header("Content-Disposition:atachment;filename=$a.xls");
echo $output;

?>