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

    <title>Create Exam</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <span width="30px">&nbsp;</span>
                    <img src="../logo.png" alt="logo" srcset="" height="90px">
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
                            <li class="sidebar-item"><a class="sidebar-link" href="../employee/Employee.php">Add</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="../employee/employee-view.php">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#payr" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Payroll</span>
                        </a>
                        <ul id="payr" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/addpayroll.php">Add
                                    Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/viewpayroll.php">View
                                    Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/Salarycert.php">Salary
                                    Certificate</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/payrepo.php">Month
                                    Report</a></li>
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
                            <li class="sidebar-item"><a class="sidebar-link" href="../student/student-view.php">View</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#attend" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Attendance</span>
                        </a>
                        <ul id="attend" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../attendance/index.php">Add</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../attendance/showAtd.php">View</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#fee" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Fees</span>
                        </a>
                        <ul id="fee" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../fee/feesset.php">Fees Setup</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../fee/payment.php">Fees Pay</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#pstu" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Promote Student </span>
                        </a>
                        <ul id="pstu" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../ProStu/addacademicyear.php">Add
                                    Academic</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../ProStu/StudentPromote.php">Promote
                                    Student</a></li>
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
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/add_sub.php">Add Subject</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item active">
                        <a href="#exammaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Exam Managment</span>
                        </a>
                        <ul id="exammaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item active"><a class="sidebar-link"
                                    href="../Exam/exam_create.php">Create
                                    Exam</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/view_exam.php">View Exam</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#resultmaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Result Managment</span>
                        </a>
                        <ul id="resultmaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_entry.php">Result
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
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/view_time_table.php">View
                                    Time
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
                            <h3><strong>CREATE</strong>&nbspEXAM</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="w-100">
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-sm-5 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        if (isset($_POST['create'])) {
                                            $ExamAcademicYear = $_POST['year'];
                                            $ExamStandard = $_POST['std'];
                                            // $ExamSubjectName = $_POST['sub'];
                                            $ExamName = $_POST['type'];
                                            $ExamTotalMarks = $_POST['totalmarks'];
                                            $ExamPassingMarks = $_POST['passingmarks'];

                                            foreach ($_POST['sub'] as $ExamSubjectName) {
                                                $query = "INSERT INTO `exammaster` (`ExamAcademicYear`, `ExamStandard`, `ExamSubjectName`, `ExamName`, `ExamTotalMarks`, `ExamPassingMarks`)
                                            VALUES ('$ExamAcademicYear', '$ExamStandard', '$ExamSubjectName', '$ExamName', '$ExamTotalMarks', '$ExamPassingMarks');";
                                                $sql = mysqli_query($conn, $query);
                                            }

                                            if ($sql) {
                                                echo '<div class="alert alert-success" role="alert">
                                                    Exam Created Sucessfully.
                                            </div>';
                                            } else {

                                                echo '<div class="alert alert-danger" role="alert">
                                                    Exam  Is Alredy Created .
                                            </div>';
                                            }
                                        }
                                        ?>
                                        <form name="examForm" action="<?php $_SERVER['PHP_SELF']; ?>" method="post"
                                            onsubmit="return validateData()">
                                            <div class="container text-left" style="margin-left: 30px;">
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Academic Year</div>
                                                    <div class="col-7">
                                                        <select name="year" id="Selstd" required=""
                                                            class="form-control">
                                                            <option value="">--Select Academic Year --</option>
                                                            <!-- Fetching From Listmaster -->
                                                            <?php $s2 = "SELECT `Value` FROM listmaster WHERE Parameter IN  ('AcadmicYear');";
                                                            $results2 = $conn->query($s2);
                                                            if ($results2->num_rows > 0) {
                                                                while ($row = $results2->fetch_assoc()) { ?>
                                                            <option value="<?php echo $row['Value']; ?>">
                                                                <?php echo $row['Value']; ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Standard</div>
                                                    <div class="col-7">
                                                        <select name="std" id="Selstd" required="" class="form-control"
                                                            onchange="my_fun(this.value)">
                                                            <!-- Fetching From Listmaster -->
                                                            <option value="">--Select Standard--</option>
                                                            <?php $s1 = "SELECT `Value` FROM listmaster WHERE Parameter IN  ('Standard');";
                                                            $results1 = $conn->query($s1);
                                                            if ($results1->num_rows > 0) {
                                                                while ($row = $results1->fetch_assoc()) { ?>
                                                            <option value="<?php echo $row['Value']; ?>">
                                                                <?php echo $row['Value']; ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Subject Name</div>
                                                    <div class="col-7">
                                                        <select name="sub[]" class="form-control" multiple id="poll"
                                                            required>
                                                            <!-- code on helper.php -->
                                                            <option value="">Select Subject</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Fetching From subject using Std code on helper.php -->
                                                <script>
                                                function my_fun(str) {

                                                    if (window.XMLHttpRequest) {
                                                        xmlhttp = new XMLHttpRequest();
                                                    } else {
                                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                    }

                                                    xmlhttp.onreadystatechange = function() {
                                                        if (this.readyState == 4 && this.status == 200) {
                                                            document.getElementById('poll').innerHTML = this
                                                                .responseText;
                                                        }
                                                    }
                                                    xmlhttp.open("GET", "helper.php?value=" + str, true);
                                                    xmlhttp.send();
                                                }
                                                </script>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Exam Name</div>
                                                    <div class="col-7">
                                                        <input type="text" required="" name="type"
                                                            placeholder="Enter Exam Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Total Marks</div>
                                                    <div class="col-7">
                                                        <input type="number" name="totalmarks" required=""
                                                            class="form-control" id="Totalmarks"
                                                            placeholder="total marks" min="0" max="101">
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Passing Marks</div>
                                                    <div class="col-7">
                                                        <input type="number" name="passingmarks" required=""
                                                            class="form-control" id="Passingmarks"
                                                            placeholder="Passing marks" min="0" max="100">
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-2"></div>
                                                    <div class="col-4">
                                                        <input type="submit" name="create" class="btn btn-success"
                                                            value="CREATE">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="reset" class="btn btn-outline-dark" value="CLEAR">
                                                    </div>
                                                </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <script>
                            function validateData() {

                                var totalMarks = document.getElementById("Totalmarks").value;
                                var passingMarks = document.getElementById("Passingmarks").value;

                                console.log(Number(totalMarks));
                                console.log(Number(passingMarks));
                               
                                if ((Number(passingMarks)) > (Number(totalMarks))) {
                                    console.log("yesss");

                                    alert("passing marks must be less than or equal to Total marks");
                                    return false;
    
                                }
                                else{
                                    console.log("NOOOO");

                                    return true;
                                }
                            }
                            </script>
                        </div>
                    </div>
                </div>
        </div>
        </main>

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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="../js/app.js"></script>
    <script src="../js/indapp.js"></script>
    <script src="../logg.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>