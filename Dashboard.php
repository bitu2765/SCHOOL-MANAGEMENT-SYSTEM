<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./payroll/css/app.css">
    <link href="./payroll/css/gapi.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <span width="30px">&nbsp;</span>
                    <img src="logo.png" alt="logo" srcset="" height="90px">
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
                            <li class="sidebar-item"><a class="sidebar-link" href="./employee/Employee.php">Add</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./employee/employee-view.php">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#payr" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Payroll</span>
                        </a>
                        <ul id="payr" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="./payroll/addpayroll.php">Add Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./payroll/viewpayroll.php">View Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./payroll/Salarycert.php">Salary Certificate</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./payroll/payrepo.php">Month Report</a></li>
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
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/add_sub.php">Add Subject</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#exammaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Exam Managment</span>
                        </a>
                        <ul id="exammaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/exam_create.php">Create Exam</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/view_exam.php">Delete Exam</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#resultmaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Result Managment</span>
                        </a>
                        <ul id="resultmaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/result_entry.php">Result Entry</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/genrate.php">Result Data</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/result_serch.php">Check For Result</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/result_declare.php">Declare Result</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#timetable" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Time Table</span>
                        </a>
                        <ul id="timetable" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/add_time_table.php"> Add Time
                                    Table</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/view_time_table.php">View Time
                                    Table</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="./Exam/delete_time_table.php">Delete Time Table</a></li>

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

        <script>
            document.getElementById("logout").onclick = function(){
                var l =window.history.length-2;
                window.history.go(l-2*l);
            }
        </script>


    </div>




    <script src="./payroll/js/app.js"></script>
    <script src="./payroll/js/indapp.js"></script>
</body>

</html>