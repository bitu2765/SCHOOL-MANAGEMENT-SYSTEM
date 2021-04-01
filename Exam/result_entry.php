<?php
include 'connection.php';

?>
<!doctype html>
<html lang="en">

<head>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/_custom.css">
    <link href="css/gapi.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/stylefees.css">
    <link rel="stylesheet" href="css/ui_d.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="../logg.js"></script>

    <title>RESULT entry</title>

</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" style="text-align: left;">
                    <img src="../logo.png" alt="logo" s srcset="" height="100px">
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Employee
                    </li>

                    <li class="sidebar-item">
                        <a href="#emp" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Employee</span>
                        </a>
                        <ul id="emp" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../employee/Employee.php">Add</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../employee/employee-view.php">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#payr" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Payroll</span>
                        </a>
                        <ul id="payr" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/addpayroll.php">Add Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/viewpayroll.php">View Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/Salarycert.php">Salary Certificate</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/payrepo.php">Month Report</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                    <li class="sidebar-header">
                        
                        </li>
                    </li>
                    <li class="sidebar-header">
                        Student
                    </li>

                    <li class="sidebar-item ">
                        <a href="#addstu" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Student</span>
                        </a>
                        <ul id="addstu" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../student/Student.php">Add</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../student/student-view.php">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#attend" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Attendance</span>
                        </a>
                        <ul id="attend" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../attendance/index.php">Add</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../attendance/showAtd.php">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#fee" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Fees</span>
                        </a>
                        <ul id="fee" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../fee/feesset.php">Fees Setup</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../fee/payment.php">Fees Pay</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#pstu" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Promote Student </span>
                        </a>
                        <ul id="pstu" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../ProStu/addacademicyear.php">Add Academic</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../ProStu/StudentPromote.php">Promote Student</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-header">

                    </li>
                    <li class="sidebar-header">
                        Academic
                    </li>

                    <li class="sidebar-item ">
                        <a href="#addsubject" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Subject Managment</span>
                        </a>
                        <ul id="addsubject" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item "><a class="sidebar-link" href="../Exam/add_sub.php">Add Subject</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#exammaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Exam Managment</span>
                        </a>
                        <ul id="exammaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/exam_create.php">Create Exam</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/view_exam.php">Delete Exam</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item active">
                        <a href="#resultmaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Result Managment</span>
                        </a>
                        <ul id="resultmaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_entry.php">Result Entry</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/genrate.php">Result Data</a>
                            </li>
                            <li class="sidebar-item active"><a class="sidebar-link" href="../Exam/result_serch.php">Check For Result</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_declare.php">Declare Result</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#timetable" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Time Table</span>
                        </a>
                        <ul id="timetable" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/add_time_table.php"> Add Time
                                    Table</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/view_time_table.php">View Time
                                    Table</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/delete_time_table.php">Delete Time Table</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>RESULT</strong>&nbspENTRY</h3>
                        </div>
                        <div id="result" class="container mt-5 ">

                            <div class="cont">
                                <?php
                                if (isset($_POST{
                                    'Res_submit'})) {
                                    $ResAcademicYear = $_POST['Res_Year'];
                                    $ResStandard = $_POST['Res_std'];
                                    $ResExamName = $_POST['Res_type'];
                                    $ResDivision = $_POST['Res_div'];
                                    $ResSubName = $_POST['Res_sub'];
                                    $ResTotalMarks = $_POST['Res_totalmarks'];
                                    $ResPassingMarks = $_POST['Res_passingmarks'];


                                    $marks = $_POST['marks'];
                                    $rollno = $_POST['rn'];
                                    $grn = $_POST['gn'];
                                    $name = $_POST['name'];


                                    $query12 = 'INSERT INTO `resultmaster`(`ResAcademicYear`, `ResStandard`,
                                        `ResDivision`, `ResRollNo`, `ResGRNO`,
                                         `ResSubName`, `ResStudentName`, `ResExamName`,
                                          `ResTotalMarks`, `ResPassingMarks`, `ResMarksObtained`, `ResStatus`) VALUES ';

                                    $query_parts = array();

                                    for ($x = 0; $x < count($rollno); $x++) {

                                        if ($marks[$x] >= $ResPassingMarks) {
                                            $ResStatus = "PASS";
                                        } else {
                                            $ResStatus = "FAIL";
                                        }
                                        $query_parts[] = "('$ResAcademicYear','$ResStandard','$ResDivision','" . $rollno[$x] . "','" . $grn[$x] . "','" . $name[$x] . "','$ResSubName',
                                            '$ResExamName', '$ResTotalMarks','$ResPassingMarks','" . $marks[$x] . "','$ResStatus')";
                                    }
                                    $query12 .= implode(',', $query_parts);
                                    if (mysqli_query($conn, $query12)) {
                                    }
                                    $exe = mysqli_query($conn, $query12);
                                    if ($query12) {
                                        $sub = trim($ResSubName, " ");
                                        $var = 1;
                                        $str123 =  "UPDATE `exammaster` SET IsResultEntered='$var' WHERE ExamAcademicYear='$ResAcademicYear'AND ExamStandard='$ResStandard' AND ExamSubjectName='$sub' AND ExamName='$ResExamName'";
                                        $query123 = mysqli_query($conn, $str123);

                                        if ($query123) {
                                            echo '<div class="alert alert-success" role="alert">
                                                    Entry Added Sucessfully.
                                                    </div>';
                                        }
                                    }
                                }
                                ?>
                                <script>
                                    function my_fun(str) {

                                        if (window.XMLHttpRequest) {
                                            xmlhttp = new XMLHttpRequest();
                                        } else {
                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                        }

                                        xmlhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById('poll').innerHTML = this.responseText;
                                            }
                                        }
                                        xmlhttp.open("GET", "helper.php?value=" + str, true);
                                        xmlhttp.send();
                                    }
                                </script>
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <b>Academic Year</b>
                                            <select name="Res_Year" required="" id="SELECTYEAR" class="form-control">
                                                <option value="">--Select Academic Year--</option>
                                                <?php $c1 = "SELECT DISTINCT ExamAcademicYear FROM `exammaster`ORDER BY ExamAcademicYear ASC";
                                                $result = $conn->query($c1);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row['ExamAcademicYear']; ?>"><?php echo $row['ExamAcademicYear']; ?>
                                                        </option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <b> Standard</b>
                                            <select name="Res_std" required="" id="selStd" class="form-control" onchange="my_fun(this.value)">
                                                <option value="">--Select Standard--</option>
                                                <?php $c2 = "SELECT DISTINCT ExamStandard FROM `exammaster` ORDER BY ExamStandard ASC";
                                                $results1 = $conn->query($c2);
                                                if ($results1->num_rows > 0) {
                                                    while ($row = $results1->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row['ExamStandard']; ?>"><?php echo $row['ExamStandard']; ?>
                                                        </option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <b>Exam Name</b>&nbsp:&nbsp&nbsp
                                            <select name="Res_type" required="" id="selType" class="form-control">
                                                <option value="">--Select Exam Type--</option>
                                                <?php $c5 = "SELECT  DISTINCT ExamName FROM exammaster ORDER BY ExamName ASC";
                                                $result5 = $conn->query($c5);
                                                if ($result5->num_rows > 0) {
                                                    while ($row = $result5->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row['ExamName']; ?>">
                                                            <?php echo $row['ExamName']; ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <b>Division</b>
                                            <select name="Res_div" required="" id="selDiv" class="form-control">
                                                <option value="">--Select Division--</option>
                                                <?php $m4 = "SELECT `Value` FROM listmaster WHERE Parameter IN  ('Division')";
                                                $result3 = $conn->query($m4);
                                                if ($result3->num_rows > 0) {
                                                    while ($row = $result3->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row['Value']; ?>"><?php echo $row['Value']; ?>
                                                        </option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <b>select subject</b>
                                            <select name="Res_sub" required="" id="poll" class="form-control">
                                                <option value="">--Select Subject--</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                            <button type="button" class="btn btn-outline-success" id="searchbtn" name="Res_Search" onclick="get_stu()">Search</button>
                                        </div>
                                    </div>

                                    <script>
                                        function get_stu() {

                                            document.getElementById("sbt").style.display = "block";
                                            document.getElementById("searchbtn").style.display = "none";


                                            var year = document.getElementById("SELECTYEAR").value;
                                            var std = document.getElementById('selStd').value;
                                            var type = document.getElementById('selType').value;
                                            var div = document.getElementById('selDiv').value;
                                            var sub = document.getElementById('poll').value;

                                            if (window.XMLHttpRequest) {
                                                xmlhttp = new XMLHttpRequest();
                                            } else {
                                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                            }

                                            xmlhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById('poll1').innerHTML = this.responseText;
                                                }
                                            }
                                            xmlhttp.open("GET", "helper1.php?Res_Year=" + year + "&Res_std=" + std +
                                                "&Res_type=" + type + "&Res_div=" + div + "&Res_sub=" + sub, true);
                                            xmlhttp.send();
                                        }
                                    </script>

                                    <div id="poll1">
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <input type="submit" name="Res_submit" id="sbt" class="btn btn-success" value="ADD" onclick='return checkdelete()'>
                                            <script>
                                                function checkdelete() {
                                                    return confirm('PLEASE COMFIRM  MARKS!');
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">

                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a href="index.html" class="text-muted"><strong>Shree SZ Vaghela High
                                        School</strong></a> &copy;
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
    <script src="js/indapp.js"></script>
    <script src="addpay.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>