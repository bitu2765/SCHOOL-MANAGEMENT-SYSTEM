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
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Result Entry</title>
    <link rel="shortcut icon" href="../logo.png"  type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <span width="30px">&nbsp;</span>
                    <img src="../logo.png" alt="logo" srcset="" height="213px">
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
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/add_sub.php">Add Subject</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#exammaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Exam Managment</span>
                        </a>
                        <ul id="exammaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/exam_create.php">Create Exam</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/view_exam.php">View Exam</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item active">
                        <a href="#resultmaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Result Managment</span>
                        </a>
                        <ul id="resultmaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item active"><a class="sidebar-link" href="../Exam/result_entry.php">Result
                                    Entry</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/genrate.php">Result Data</a>
                            </li>
                            
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_declare.php">Declare
                                    Result</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_serch.php">Generate
                                    MarkSheet</a>
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
                        <button type="button" class="btn btn-sm btn-danger" id="logout">Logout</button>

                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>RESULT</strong>&nbspENTRY</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="w-100">
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-sm-10 text-center">
                                <div class="card">
                                    <div class="card-body">
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
                                         `ResStudentName`,`ResSubName`,  `ResExamName`,
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
                                            } else {
                                                echo '<div class="alert alert-danger" role="alert">
                                            Something Went Wrong.!!!!!
                                            </div>';
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
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                            <div class="container text-left" style="margin-left: 30px;">
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-2 font-weight-bold mt-1">Academic Year</div>
                                                    <div class="col-4">
                                                        <select name="Res_Year" required="" id="SELECTYEAR" class="form-control">
                                                            <option value="">--Select Academic Year--</option>
                                                            <?php $c1 = "SELECT DISTINCT ExamAcademicYear FROM `exammaster`ORDER BY ExamAcademicYear ASC";
                                                            $result = $conn->query($c1);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $row['ExamAcademicYear']; ?>">
                                                                        <?php echo $row['ExamAcademicYear']; ?>
                                                                    </option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-2 font-weight-bold mt-1">Standard</div>
                                                    <div class="col-4">
                                                        <select name="Res_std" required="" id="selStd" class="form-control" onchange="my_fun(this.value)">
                                                            <option value="">--Select Standard--</option>
                                                            <?php $c2 = "SELECT DISTINCT ExamStandard FROM `exammaster` ORDER BY ExamStandard ASC";
                                                            $results1 = $conn->query($c2);
                                                            if ($results1->num_rows > 0) {
                                                                while ($row = $results1->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $row['ExamStandard']; ?>">
                                                                        <?php echo $row['ExamStandard']; ?>
                                                                    </option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-2 font-weight-bold mt-1">Exam Name</div>
                                                    <div class="col-4">
                                                        <select name="Res_type" required="" id="selType" class="form-control">
                                                            <option value="">--Select Exam --</option>
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
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-2 font-weight-bold mt-1">Division</div>
                                                    <div class="col-4">
                                                        <select name="Res_div" required="" id="selDiv" class="form-control">
                                                            <option value="">--Select Division--</option>
                                                            <?php $m4 = "SELECT `Value` FROM listmaster WHERE Parameter IN  ('Division')";
                                                            $result3 = $conn->query($m4);
                                                            if ($result3->num_rows > 0) {
                                                                while ($row = $result3->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $row['Value']; ?>">
                                                                        <?php echo $row['Value']; ?>
                                                                    </option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-2 font-weight-bold mt-1">Subject Name</div>
                                                    <div class="col-4">
                                                        <select name="Res_sub" required="" id="poll" class="form-control">
                                                            <option value="">--Select Subject--</option>
                                                            <!-- Fetching  Subject code on helper5.php -->
                                                            <script>
                                                                function my_fun(str) {

                                                                    if (window.XMLHttpRequest) {
                                                                        xmlhttp = new XMLHttpRequest();
                                                                    } else {
                                                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                                    }

                                                                    xmlhttp.onreadystatechange = function() {
                                                                        if (this.readyState == 4 && this.status ==
                                                                            200) {
                                                                            document.getElementById('poll').innerHTML =
                                                                                this.responseText;
                                                                        }
                                                                    }
                                                                    xmlhttp.open("GET", "helper5.php?value=" + str, true);
                                                                    xmlhttp.send();
                                                                }
                                                            </script>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row" style="margin-bottom: 10px;">

                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-outline-success" id="searchbtn" name="Res_Search" onclick="get_stu()">Search</button>
                                                    </div>
                                                </div>
                                                <!-- Fetching Students code on helper1.php -->
                                                <script>
                                                    function get_stu() {

                                                        document.getElementById("sbt").style.display = "block";
                                                        document.getElementById("re").style.display = "block";

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
                                                                document.getElementById('poll1').innerHTML = this
                                                                    .responseText;
                                                            }
                                                        }
                                                        xmlhttp.open("GET", "helper1.php?Res_Year=" + year + "&Res_std=" +
                                                            std +
                                                            "&Res_type=" + type + "&Res_div=" + div + "&Res_sub=" + sub,
                                                            true);
                                                        xmlhttp.send();
                                                    }
                                                </script>

                                                <div id="poll1">
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-2"></div>
                                                    <div class="col-3">
                                                        <input type="submit" name="Res_submit" id="sbt" class="btn btn-success" value="SUBMIT">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="reset" class="btn btn-outline-dark" id="re" value="CLEAR">
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
        <!-- Changing Color If Student is Fail -->
        <script>
            function changeColor(val, val1) {
                console.log(val);
                console.log(val1);

                var x = document.getElementById(val).value;
                console.log(x);
                if (x < val1) {
                    document.getElementById(val).style.borderColor = "red";
                    console.log("fail");
                } else {
                    document.getElementById(val).style.borderColor = "black";
                }
            }
        </script>


        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">

                    <div class="col-6 text-left">
                        <p class="mb-0">
                            <a class="text-muted"><strong>Shree SZ Vaghela High
                                    School</strong></a> &copy;
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script>
        window.onload = function() {
            document.getElementById("sbt").style.display = "none";
            document.getElementById("re").style.display = "none";


        };
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="js/app.js"></script>
    <script src="js/indapp.js"></script>
    <script src="../logg.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>