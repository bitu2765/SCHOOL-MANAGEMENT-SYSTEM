<?php
include 'connection.php';
$ResAcademicYear1= $_REQUEST['Year'];
 $ResStandard1= $_REQUEST['Std'];
 $ResDivision1= $_REQUEST['Div'];
                                        $ResExamName1= $_REQUEST['Type'];
            $sql12 = "SELECT Resid,`ResAcademicYear`, `ResStandard`, `ResDivision`, `ResRollNo`, `ResStudentName`, `ResSubName`, `ResExamName`, `ResTotalMarks`, `ResPassingMarks`, `ResMarksObtained`, `ResStatus` FROM `resultmaster`
             WHERE `ResAcademicYear`='$ResAcademicYear1' And `ResStandard`='$ResStandard1' And `ResExamName`='$ResExamName1' AND `ResDivision`='$ResDivision1'  order BY ResRollNo ";
            $res1= $conn->query($sql12);  
            if ($res1->num_rows > 0) {
            while($row = $res1->fetch_assoc()){ ?>
                   
                        <tr>
                         
                            <td><?php echo $row['ResAcademicYear']?></td>
                            <td><?php echo $row['ResStandard']?></td>
                            <td><?php echo $row['ResDivision']?></td>
                            <td><?php echo $row['ResRollNo']?></td>
                            <td><?php echo $row['ResStudentName']?></td>
                            <td><?php echo $row['ResSubName']?></td>
                            <td><?php echo $row['ResExamName']?></td>
                            <td><?php echo $row['ResTotalMarks']?></td>
                            <td><?php echo $row['ResPassingMarks']?></td>
                            <td><?php echo $row['ResMarksObtained']?></td>
                            <td><?php echo $row['ResStatus']?></td>
                            <td> <a class="btn btn-success" href="_update_Result.php?rid=<?php echo $row['Resid']; ?>"
                                role="button">Edit</a></td>
                        </tr>
                        <?php }}
                        else{
                            echo '<br><div class="alert alert-danger" role="alert">
                            Record Does Not Exist.
                            </div>';
                        } ?>
                    