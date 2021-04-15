<?php
include("connectdb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="../css/gapi.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/ui_d.css">

    <title>Slary Certificate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <span width="30px">&nbsp;</span>
                    <img src="../logo.png" alt="logo" srcset="" height="100px">
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

                    <li class="sidebar-item active">
                        <a href="#payr" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Payroll</span>
                        </a>
                        <ul id="payr" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/addpayroll.php">Add Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/viewpayroll.php">View Pay</a></li>
                            <li class="sidebar-item active"><a class="sidebar-link" href="../payroll/Salarycert.php">Salary Certificate</a></li>
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
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/exam_create.php">Create Exam</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/view_exam.php">Delete Exam</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#resultmaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Result Managment</span>
                        </a>
                        <ul id="resultmaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_entry.php">Result Entry</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/genrate.php">Result Data</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_serch.php">Generate MarkSheet</a>
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
                            <h3><strong>Salary</strong> Certificate</h3>
                        </div>

                        <!-- <div class="col-auto ml-auto text-right mt-n1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                                    <li class="breadcrumb-item"><a href="#">AdminKit</a></li>
                                    <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                                </ol>
                            </nav>
                        </div> -->
                    </div>
                </div>
                <span id="SucAdd"></span>
                <div class="row">
                    <div class="w-100">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h5 class="card-title mb-4">Payroll</h5> -->
                                <h1 class="mt-1 mb-3 text-center">Certificate</h1>
                                <div class="container">
                                    <form action="salcertgen.php" method="get">
                                        <div class="row">
                                            <div class="col-md-2 text-center">
                                            </div>
                                            <div class="col-md-2 text-left">
                                                <label for="eid" class="font-weight-bold">Employee Id :</label>
                                            </div>
                                            <div class="col-md-2 text-left">
                                                <!-- <input class="form-control" type="text" placeholder="Employee Id" name="pano"> -->
                                                <select class="form-control" name="emid" placeholder="ei" id="esid" required>
                                                    <option value="" selected>Select Employee Id</option>
                                                    <?php
                                                    include("empidadd.php");
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-2 text-left">
                                                <label for="eid" class="font-weight-bold">A. Y. :</label>
                                            </div>
                                            <div class="col-md-3 text-left">
                                                <select class="form-control" name="eye" id="esye" required>
                                                    <?php
                                                    include("acadyear.php");
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <span id="txtHint"></span>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-2 text-center">
                                            </div>
                                            <div class="col-md-1 text-left">
                                                <label for="mon" class="font-weight-bold">Month :</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc1" value="January">
                                                <label for="jan">Jan</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc2" value="February">
                                                <label for="jan">Feb</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc3" value="March">
                                                <label for="jan">Mar</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc4" value="April">
                                                <label for="jan">Apr</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc5" value="May">
                                                <label for="jan">May</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc6" value="June">
                                                <label for="jan">Jun</label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc7" value="July">
                                                <label for="jan">Jul</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc8" value="August">
                                                <label for="jan">Aug</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc9" value="September">
                                                <label for="jan">Sep</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc10" value="Octomber">
                                                <label for="jan">Oct</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc11" value="November">
                                                <label for="jan">Nov</label>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <input type="checkbox" name="sc12" value="December">
                                                <label for="jan">Dec</label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <button type="submit" class="btn btn-lg btn-success">SAVE</button>
                                            </div>
                                            <!-- <div class="col-md-4 text-center">
                                            <button type="button" class="btn btn-lg btn-pill btn-success" id="bd">GET</button>
                                        </div> -->
                                        </div>
                                    </form>
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
                                <a href="index.html" class="text-muted"><strong>Shree SZ Vaghela High School</strong></a> &copy;
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


    </div>

    <script src="js/app.js"></script>
    <script src="js/indapp.js"></script>
    <script src="salcer.js"></script>
    <script src="../logg.js"></script>
</body>

</html>