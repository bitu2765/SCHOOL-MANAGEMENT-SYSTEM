<?php
if (isset($_POST['UploadAttendance']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    include("db_con_inc.php");
    $dString = mysqli_real_escape_string($con, trim($_POST['hdDate']));
    $date = date("Y-m-d", strtotime($dString));
    $class = mysqli_real_escape_string($con, trim($_POST['hdCls']));
    $section = mysqli_real_escape_string($con, trim($_POST['hdSec']));
    $json = $_POST['absentArrays'];
    $absentArray = json_decode($json[0]);
    $sendSms = $_POST['sendSMS'];

    // absent students
    if (isset($_POST['absentArrays']) && is_array($_POST['absentArrays'])) {
        foreach ($absentArray as $num) {
            if ($sendSms == "Y") {
                $sql = "INSERT INTO attendancetrans(AttStudentName,AttStudentRollNo,AttStandard,AttDiv,
                    AttDate,AttSendSMS,AttPresentAbsent) 
                    VALUES((SELECT StuStudentName FROM studentmaster WHERE StuStudentRollNo = '$num' AND StuStandard = '$class' AND StuDiv = '$section'),
                            '$num','$class','$section','$date',true,'Absent')";
                if (!mysqli_query($con, $sql)) {
                    die("unable to upload absent student!!,M=Y");
                }
                //sendig message to parents
                // $sql = "SELECT StuParentMobileNumber1 FROM StudentMaster WHERE StuStudentRollNo = '$num'";
                // $result = mysqli_query($con,$sql);
                // $row = mysqli_fetch_assoc($result);

                // $parentMobileNumber = $row['StuParentMobileNumber1'];
                // $messgeToParents = "Your Ward is Absent on $date";      
            } 
            if ($sendSms == "N") {
                $sql = "INSERT INTO attendancetrans(AttStudentName,AttStudentRollNo,AttStandard,AttDiv,
                AttDate,AttPresentAbsent) VALUES((SELECT StuStudentName FROM studentmaster WHERE StuStudentRollNo = '$num' AND StuStandard = '$class' AND StuDiv = '$section'),
                '$num','$class','$section','$date','Absent')";
                if (!mysqli_query($con, $sql)) {
                    die("unable to upload absent student ,M=No!!");
                }
            }
        }
    }
    
    // present students
    if (isset($_POST['attend']) && is_array($_POST['attend'])) {
        foreach ($_POST['attend'] as $att) {
            $sql = "INSERT INTO attendancetrans(AttStudentName,AttStudentRollNo,AttStandard,AttDiv,AttDate) 
            VALUES((SELECT StuStudentName FROM StudentMaster WHERE StuStudentRollNo = '$att' AND StuStandard = '$class' AND StuDiv = '$section'),
            '$att','$class','$section','$date')";
            if (!mysqli_query($con, $sql)) {
                die("unable to upload present student!!");
            }
        }
    } 
    
    echo "<script>
        document.write('Attendance uploaded successfully');
        setInterval(() => {
            window.location.href = 'index.php';
    }, 1800);
    </script>";
} else {
    header('location:index.php');
    die("Access denied");
}
?>
<script>
</script>
<title>Uploading...</title>