<?php
include 'connection.php';
$SubStandard1 = $_REQUEST['Standard'];
$SubAcademicYear1 = $_REQUEST['Year'];  
$sql = "SELECT Subid, `SubStandard`, `SubName`, `SubType`, `SubAcademicYear` FROM `submaster`
where SubStandard='$SubStandard1' AND SubAcademicYear='$SubAcademicYear1'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){ ?>
        <tr>

                                            <td><?php echo $row['SubAcademicYear']?></td>
                                            <td><?php echo $row['SubStandard']?></td>
                                            <td><?php echo $row['SubName']?></td>
                                            <td><?php echo $row['SubType']?></td>
                                            <td> <a class="btn btn-success" 
                                                            href="_update_Sub.php?sid=<?php echo $row['Subid'];?>"
                                                            role="button">Edit</a>
                                             <a class="btn btn-danger"  href="delete_Sub.php?sid=<?php echo $row['Subid'];?>" onclick="return checkdelete();" role="button">Delete</a></td>
                                                
                                           
                                        </tr>
                                        <?php }}
                                        else{
                                            echo '<br><div class="alert alert-danger" role="alert">
                                            Subject Does Not Exist.
                                            </div>';
                                        }
                                                 ?> 
                                                
