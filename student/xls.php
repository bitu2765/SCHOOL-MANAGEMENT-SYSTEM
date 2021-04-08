<?php
     include("./connectdb.php");   
 ?>
 <table class="table table-bordered border-dark" border="1" style="color: black" style="font-weight: bold style; " style="background:lightgreen">  
             
                    <tr>
                                            <th>UIDNo</th>
                                            <th>GRNo</th>
                                           <th>RollNo</th>
                                            <th>StudentName</th>
                                            <th>year</th>
                                            <th>Standard</th>
                                            <th>Div</th>
                                            <th>Gender</th>
                                            <th>DateOfBirth</th>
                                            <th>DateOfAdmission</th>
                                            <th>MobileNo1</th>
                                            <th>MobileNo2</th>
                                            <th>Address</th>
                                            <th>BirthPlace</th>
                                            <th>AadharNo</th>
                                            <th>Category</th>
                                            <th>Caste</th>
                                            <th>LastSchoolName</th>
                                            <th>BankName</th>
                                            <th>BankAccount</th>
                                            <th> BankIFSC</th>
                                            <th>Status</th>
                                            <th>StatusChangeDate</th>
                    </tr>
                </table>
<?php
 $output='';     
            $sql = "SELECT *FROM studentmaster ";
            $result = $conn->query($sql);  
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){ 
                
                $output .=' <table class="table table-bordered border-dark" border="1">  
             
                
                    <tr>
                       
                        <td>'.  $row["StuUIDNo"].'</td>
                        <td>'.  $row["StuGRNo"].'</td>
                        <td>'.  $row["StuRollNo"].'</td>
                         <td>'.$row["Stuprefix"]." ".  $row["StuStudentName"] ." ".$row["Stumiddle"]." ".$row["StuLastname"].'</td>
                         <td>'.  $row["StuAcdemicyear"].'</td>
                        <td>'.  $row["StuStandard"].'</td>
                        <td>'.  $row["StuDiv"].'</td>
                        <td>'.  $row["StuGender"].'</td>
                        <td> '. $row["StuDOB"].'</td>
                        <td> '. $row["StuDateOfAdmission"].'</td>
                        <td> '. $row["StuParentMobileNumber1"].'</td>             
                        <td> '. $row["StuParentMobileNumber2"].'</td>
                        <td> '. $row["StuHouseNo"].",". $row["StuStreetName"].",". $row["StuLocation"].",". $row["StuCity"]."". $row["StuDist"].'</td>
                         <td> '. $row["StuBirthPlace"].'</td>
                          <td> '. $row["StuAadharNo"].'</td>
                           <td> '. $row["StuCategory"].'</td>
                            <td> '. $row["StuCaste"].'</td>
                             <td> '. $row["StuLastschoolname"].'</td>
                              <td> '. $row["StuBankname"].'</td>
                               <td> '. $row["StuBankACno"].'</td>
                                <td> '. $row["StuBankIFSCcode"].'</td>
                                 <td> '. $row["StuStatus"].'</td>
                                  <td> '. $row["StuStatusChangedDate"].'</td>
                        
                    </tr>
                   
               ';
               $output .='</table>';
            }} 

header("Content-Type:applicatoin/xls");
header("Content-Disposition:atachment;filename=result.xls");
echo $output;
?>