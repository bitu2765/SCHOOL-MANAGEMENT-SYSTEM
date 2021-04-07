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
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_serch.php">Generate
                                    subSheet</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_declare.php">Declare
                                    Result</a>
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
                            <h3><strong>EDIT</strong>&nbspEXAM</h3>
                        </div>
                    </div>


                </div>
                <a class="btn btn-dark" href="view_exam.php" role="button">Back</a>
                <div class="row">
                    <div class="w-100">
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-sm-8 text-center">

                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        $sql = "SELECT * FROM `exammaster`where Examid = '" . $_GET["id"] . "'";
                                        $result = $conn->query($sql);
                                        $row = mysqli_fetch_assoc($result);


                                        if (isset($_POST{
                                        'Exam_update'})) {
                                            $ExamAcademicYear2 = $_POST['exam_year'];
                                            $ExamStandard2 = $_POST['exam_std'];
                                            $ExaName2 = $_POST['exam_name'];
                                            $ExamSubjectName2 = $_POST['exam_sub'];
                                            $ExamTotalMarks2 = $_POST['exam_tm'];
                                            $ExamPassingMarks2 = $_POST['exam_pm'];


                                            $sql = "UPDATE `exammaster` SET`ExamAcademicYear`='$ExamAcademicYear2',`ExamStandard`='$ExamStandard2',
                                      `ExamSubjectName`='$ExamSubjectName2',`ExamName`='$ExaName2',`ExamTotalMarks`='$ExamTotalMarks2',`ExamPassingMarks`='$ExamPassingMarks2'
                                       WHERE `Examid`= '" . $_GET["id"] . "'";

                                            $res = $conn->query($sql);

                                            if ($res) {
                                                echo '<div class="alert alert-success" role="alert">
                                              Record Updated  Sucessfully.
                                      </div>';
                                            } else {
                                                echo '<div class="alert alert-danger" role="alert">
                                          Something Went Wrong.!!!!!
                                      </div>';
                                            }
                                        }
                                        ?>
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                            <div class="container text-left" style="margin-left: 30px;">
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Academic Year</div>
                                                    <div class="col-7">
                                                        <?php $m1 = "SELECT DISTINCT ExamAcademicYear FROM `exammaster` WHERE `Examid`= '" . $_GET["id"] . "'";
                                                        $results2 = $conn->query($m1);
                                                        if ($results2->num_rows > 0) {
                                                            while ($row = $results2->fetch_assoc()) { ?>
                                                                <input type="text" name="exam_year" required="" id="" class="form-control" value="<?php echo $row['ExamAcademicYear']; ?>">
                                                        <?php }
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Standard</div>
                                                    <div class="col-7">
                                                        <?php $m3 = "SELECT DISTINCT ExamStandard FROM `exammaster` WHERE `Examid`= '" . $_GET["id"] . "'";
                                                        $results1 = $conn->query($m3);
                                                        if ($results1->num_rows > 0) {
                                                            while ($row = $results1->fetch_assoc()) { ?>
                                                                <input type="text" name="exam_std" id="" required="" class="form-control" value="<?php echo $row['ExamStandard']; ?>">
                                                        <?php }
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Exam Name</div>
                                                    <div class="col-7">
                                                        <?php $m4 = "SELECT  DISTINCT ExamName FROM exammaster  WHERE `Examid`= '" . $_GET["id"] . "'";
                                                        $result3 = $conn->query($m4);
                                                        if ($result3->num_rows > 0) {
                                                            while ($row = $result3->fetch_assoc()) { ?>
                                                                <input type="text" id="" class="form-control" name="exam_name" value="<?php echo $row['ExamName']; ?>">
                                                        <?php }
                                                        } ?>

                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Subject Name</div>
                                                    <div class="col-7">
                                                        <?php $m4 = "SELECT ExamSubjectName FROM `exammaster`where Examid = '" . $_GET["id"] . "'";
                                                        $result3 = $conn->query($m4);
                                                        if ($result3->num_rows > 0) {
                                                            while ($row = $result3->fetch_assoc()) { ?>
                                                                <input type="text" id="" class="form-control" name="exam_sub" value="<?php echo $row['ExamSubjectName']; ?>">
                                                        <?php }
                                                        } ?>

                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Total Marks</div>
                                                    <div class="col-7">
                                                        <?php $m4 = "SELECT ExamTotalMarks FROM `exammaster`where Examid = '" . $_GET["id"] . "'";
                                                        $result3 = $conn->query($m4);
                                                        if ($result3->num_rows > 0) {
                                                            while ($row = $result3->fetch_assoc()) { ?>
                                                                <input type="text" id="" class="form-control" name="exam_tm" value="<?php echo $row['ExamTotalMarks']; ?>">
                                                        <?php }
                                                        } ?>

                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4 font-weight-bold mt-1">Passing Marks</div>
                                                    <div class="col-7">
                                                        <?php $m4 = "SELECT ExamPassingMarks FROM `exammaster`where Examid = '" . $_GET["id"] . "'";
                                                        $result3 = $conn->query($m4);
                                                        if ($result3->num_rows > 0) {
                                                            while ($row = $result3->fetch_assoc()) { ?>
                                                                <input type="text" id="" class="form-control" name="exam_pm" value="<?php echo $row['ExamPassingMarks']; ?>">
                                                        <?php }
                                                        } ?>

                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-4">
                                                        <input type="submit" name="Exam_update" class="btn btn-success" value="UPDATE">
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