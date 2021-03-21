<?php
     include 'connection.php';
            
    $ResAcademicYear= $_GET['Res_Year'];
    $ResStandard= $_GET['Res_std'];
    $ResExamName= $_GET['Res_type'];
    $ResDivision=$_GET['Res_div'];
    $SubName = $_GET['Res_sub'];
    $ResSubName = trim($SubName," ");
    $isResult = false;



    $query = "SELECT * FROM `exammaster` WHERE ExamAcademicYear= '$ResAcademicYear' AND ExamName= '$ResExamName' AND ExamStandard = '$ResStandard' AND ExamSubjectName = '$ResSubName'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $isResult = $row['IsResultEntered'];
    }
    
    if($isResult)
    {
        echo' <td>
        <div class=" col alert alert-danger" role="alert">
            Result Has Been Already Entered!!
        </div>
    </td>'; 
    }
    else{

    ?>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 form-group">
        <b id="display">Total Marks</b>&nbsp:&nbsp&nbsp

        <?php  if ($result->num_rows > 0){
                $total = $row['ExamTotalMarks'];
                $passing = $row['ExamPassingMarks'];
                $sub = $row['ExamSubjectName'];
                }
                else{
                    $total = "";
                    $passing = "";
                    $sub = "";
                } 
                ?>

        <input type="hidden" name="Res_totalmarks" class="form-control" id="passingmarks"
            value="<?php echo $total ?>"><?php echo $total ?>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 form-group">
        <b>Passing Marks</b>&nbsp:&nbsp&nbsp


        <input type="hidden" name="Res_passingmarks" class="form-control" id="passingmarks"
            value="  <?php echo $passing; ?>"><?php echo $passing; ?>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 form-group">
        <b>Subject Name</b>&nbsp:&nbsp&nbsp
        <input type="hidden" name="Res_sub" class="form-control" id="passingmarks"
            value="  <?php echo $sub; ?>"><?php echo $sub; ?>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
        <table class="table table-hover">
            <tr>
                <th>Rollno</th>
                <th>Student Name</th>
                <th>Enter Marks</th>
            </tr>

            <?php
                $sql="SELECT * FROM `studentmaster` Where StuDiv='$ResDivision' AND StuStandard='$ResStandard'";
                $result11 = mysqli_query($conn,$sql);
                    while($row11 = mysqli_fetch_assoc($result11)){
                        $rollno = $row11['StuStudentRollNo'];
                        $name= $row11['StuStudentName'];

              ?>
            <tr>
                <td> <input type="hidden" name="rn[]" value="<?php echo $rollno ?>">
                    <?php echo $rollno ?>
                </td>
                <td><input type="hidden" name="name[]" value="<?php echo $name ?>">
                    <?php echo $name ?>
                </td>
                <td> <input type="text" name="marks[]" /> </td>
            </tr>
            <?php
            }
             ?>
        </table>
    </div>
</div>
<?php } ?>