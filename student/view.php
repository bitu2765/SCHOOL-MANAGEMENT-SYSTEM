<?php
error_reporting(0);
include("connectdb.php");



  $StuUIDNo=$_GET['StuUIDNo'];
  $StuGRNo=$_GET['StuGRNo'];
  //$StuStudentRollNo=$_GET['StuStudentRollNo'];
  $StuStudentName=strtoupper($_GET['StuStudentName']);
  $StuStandard=$_GET['StuStandard'];
  $StuDiv=$_GET['StuDiv'];
  $StuGender=strtoupper($_GET['StuGender'])??"";
  $StuDOB=$_GET['StuDOB'];
  $StuDateOfAdmission=$_GET['StuDateOfAdmission'];
  $StuParentMobileNumber1=$_GET['StuParentMobileNumber1'];
  $StuParentMobileNumber2=$_GET['StuParentMobileNumber2'];
  $StuHouseNo=$_GET['StuHouseNo'];
  $StuStreetName=strtoupper($_GET['StuStreetName']);
  $StuLocation=$_GET['StuLocation'];
  $StuCity=$_GET['StuCity'];
  $StuDist=$_GET['StuDist'];
  $StuBirthPlace=strtoupper($_GET['StuBirthPlace']);
  $StuAadharNo=$_GET['StuAadharNo']??"";
  $StuCategory=$_GET['StuCategory'];
  $StuCaste=strtoupper($_GET['StuCaste']);
  $StuLastschoolname=strtoupper($_GET['StuLastschoolname']);
  $StuBankname=strtoupper($_GET['StuBankname']);
  $StuBankACno=$_GET['StuBankACno']??"";
  $StuBankIFSCcode=$_GET['StuBankIFSCcode'];
  $StuStatus=$_GET['StuStatus'];
  $StuStatusChangedDate=$_GET['StuStatusChangedDate'];

?>
<?php
										
										// $conn = mysqli_connect("localhost", "root", "", "test4");
                   
										$sql = "SELECT*FROM studentmaster WHERE StuGRNo=$StuGRNo";
										$data = mysqli_query($conn, $sql);
									

										
											while ($result = mysqli_fetch_assoc($data)) 
											{
												
								echo "
                           		<tr>
                           		
                                <td><img src=upload/$result[file] width=70%></td>
                             
                             
                                <td><img src=upload/$result[filename] width=70%></td>
                                
                                <td><img src=upload/$result[uploadfile] width=70%></td>
                                
                                <td><img src=upload/$result[uploadfilename] width=70%></td>
                                 
                                
                           		</tr>";
									}
										
									?>