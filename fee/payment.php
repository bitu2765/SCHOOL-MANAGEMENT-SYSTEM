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

    <title>Dashboard</title>
    <style>
        .scr-mod {
            height: 75px;
            overflow: hidden;
        }

        .scr-mod:hover {
            overflow-y: auto;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/table-to-json@1.0.0/lib/jquery.tabletojson.min.js" integrity="sha256-H8xrCe0tZFi/C2CgxkmiGksqVaxhW0PFcUKZJZo1yNU=" crossorigin="anonymous"></script>

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

                    <li class="sidebar-item  active">
                        <a href="#fee" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Fees</span>
                        </a>
                        <ul id="fee" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../fee/feesset.php">Fees Setup</a></li>
                            <li class="sidebar-item active"><a class="sidebar-link" href="../fee/payment.php">Fees Pay</a></li>
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
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_serch.php">Check For Result</a>
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
                        <button type="button" class="btn btn-sm btn-danger" id="logout">Logout</button>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>Fees</strong> Details</h3>
                        </div>

                        <span id="fscon"></span>
                        <div class="w-100">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="mt-1 mb-3 text-center">Fees Payment</h1>

                                    <div class="container text-left">
                                        <form action="stutabex.php" method="get">
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-2 font-weight-bold">Year</div>
                                                <div class="col-2">
                                                    <select class="form-control" name="feay" id="feay">
                                                        <option value="0" selected>Select Academic Year</option>
                                                        <?php
                                                        include("getacadyear.php");
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-2 font-weight-bold">Standard</div>
                                                <div class="col-2">
                                                    <select class="form-control" name="fest" id="fest">
                                                        <option value="0" selected>Select Standard</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-2 font-weight-bold">Divison</div>
                                                <div class="col-2">
                                                    <select class="form-control" name="fediv" id="fediv">
                                                        <option value="0" selected>Select Divison</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-2 font-weight-bold">Annual Fees</div>
                                                <div class="col-2"><span id="fedee"></span></div>
                                                <!-- <div class="col-7"></div>
                                                <div class="col-1">
                                                    <button type="button" class=" btn btn-success" onclick="stutab();" ><i class="align-middle" data-feather="refresh-cw"></i></button>
                                                </div> -->
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-1">
                                                    <!-- <button type="button" class=" btn btn-success" id="getstde"><i class="align-middle" data-feather="refresh-cw"></i></button> -->
                                                </div>
                                                <div class="col-2">
                                                </div>
                                                <div class="col-7"></div>
                                                <div class="col-2">

                                                </div>
                                            </div>
                                            <br>
                                            <span id="sttable"></span>
                                            <br>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-4"></div>
                                                <div class="col-2">
                                                    <button type="submit" id="etoex" class="btn btn-success">Export to excel</button>
                                                </div>
                                                <div class="col-2">
                                                    <button type="button" id="udfe" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
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
                                <a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>



    </div>




    <script src="../js/app.js"></script>
    <script src="../js/indapp.js"></script>
    <script src="feespayment.js"></script>
    <script src="../logg.js"></script>
</body>

</html>