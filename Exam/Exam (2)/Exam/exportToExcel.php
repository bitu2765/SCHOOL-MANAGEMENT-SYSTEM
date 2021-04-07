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
                        <th>Roll No</th>
                        <th>Student Name</th>
                        <th>Subject Name</th>
                        <th>Total Marks</th>
                        <th>Passing Marks</th>
                        <th>Marks Obtained</th>
                        <th>Status</th>

                    </tr>'; 

          
            $sql = "SELECT DISTINCT `ResRollNo`, `ResStudentName`FROM `resultmaster` 
             WHERE `ResAcademicYear`='$ResAcademicYear' And `ResStandard`='$ResStandard' And `ResExamName`='$ResExamName' AND `ResDivision`='$ResDivision'  GROUP BY ResRollNo";
            
              $result = $conn->query($sql);
              while($row = mysqli_fetch_assoc($result)){
                $rollno = $row['ResRollNo'];
                $name = $row['ResStudentName'];

                $sql1 = "SELECT `ResRollNo`, `ResStudentName`, `ResSubName`, `ResTotalMarks`, `ResPassingMarks`, `ResMarksObtained`, `ResStatus` FROM `resultmaster` 
                WHERE `ResRollNo`='$rollno' AND `ResAcademicYear`='$ResAcademicYear' And `ResStandard`='$ResStandard' And `ResExamName`='$ResExamName' AND `ResDivision`='$ResDivision'";

                $result1 = mysqli_query($conn,$sql1);
                $num = mysqli_num_rows($result1);
                $output .= '<tr><td rowspan='.$num.'>'.$rollno.'</td><td rowspan='.$num.'>'.$name.'</td>';

                while($row1 = mysqli_fetch_assoc($result1)){

                    $output .='   
                                <td>'.  $row1["ResSubName"].'</td>
                                <td> '. $row1["ResTotalMarks"].'</td>
                                <td> '. $row1["ResPassingMarks"].'</td>
                                <td> '. $row1["ResMarksObtained"].'</td>             
                                <td> '. $row1["ResStatus"].'</td>
                     
                            </tr> ';

                }
              }
            
           
            $output .='</table>';

header("Content-Type:applicatoin/xls");
header("Content-Disposition:atachment;filename=$a.xls");
echo $output;

?>