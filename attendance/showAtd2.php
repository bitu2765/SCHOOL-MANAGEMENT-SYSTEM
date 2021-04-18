<?php
if (isset($_POST['submit_atd'])) {
    include("db_con_inc.php");
    $date = mysqli_real_escape_string($con, trim($_POST['atd_date']));
    $dateStr = date("d-m-Y", strtotime($date));
    $class = mysqli_real_escape_string($con, trim($_POST['atd_standard']));
    $section = mysqli_real_escape_string($con, trim($_POST['cls_section']));
    $atd_acd_year = mysqli_real_escape_string($con, trim($_POST['atd_acd_year']));
    $sql = "SELECT * FROM attendancetrans
     WHERE AttStandard = '$class' AND AttDiv = '$section' AND AttDate = '$date' AND AcadmicYear = '$atd_acd_year';";
    $res = mysqli_query($con, $sql);
} else {
    header('location:showAtd.php');
    die("Access denied");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/cr-1.5.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.1/datatables.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/cr-1.5.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.1/datatables.js">
    </script>

    <title>Attendance</title>

    <link rel="stylesheet" href="../css/app.css">
    <link href="../css/gapi.css" rel="stylesheet">
 
    <style>
        .container {
            background-color: white;
            padding: 50px;
        }

        /* Removing next page in datatables */
        .dataTables_paginate {
            display: none;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" style="text-align: center;">
                    <span width="30px">&nbsp;</span>
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

                    <li class="sidebar-item  active">
                        <a href="#attend" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Attendance</span>
                        </a>
                        <ul id="attend" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../attendance/index.php">Add</a></li>
                            <li class="sidebar-item active"><a class="sidebar-link" href="../attendance/showAtd.php">View</a></li>
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
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <b>DATE: <?php echo $dateStr; ?> </b>
                            </div>
                            <div class="col-lg-4" style="text-align: center;">
                                <b>STANDARD: <?php echo $class; ?> </b>
                            </div>
                            <div class="col-lg-4" style="text-align: right;">
                                <b>DIVISION: <?php echo $section; ?> </b>
                            </div>
                        </div>
                        <hr><br>

                        <!-- <form>
                            Select Students
                            <select name="students">
                                <option value="ALL" selected> ALL</option>
                                <option value="PR">Present</option>
                                <option value="AB">Absent</option>
                            </select>
                        </form><br><br> -->

                        <table id="myTable" class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr style="text-align:center">
                                    <th>Standard</th>
                                    <th>Div</th>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Attendance</th>
                                    <th>Sent SMS?</th>
                                    <th>date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr style="text-align:center">
                                        <td><?php echo $row["AttStandard"]; ?></td>
                                        <td><?php echo $row["AttDiv"]; ?></td>
                                        <td><?php echo $row["AttStudentRollNo"]; ?></td>
                                        <td><?php echo $row["AttStudentName"]; ?></td>
                                        <td><?php echo $row["AttPresentAbsent"]; ?></td>
                                        <td><?php echo $row["AttSendSMS"]; ?></td>
                                        <td><?php echo date("d-m-Y", strtotime($row["AttDate"])); ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a class="text-muted"><strong>Shree SZ Vaghela High School</strong></a> &copy;
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

</body>
<script>
    $(document).ready(function() {

        var table = $('#myTable').DataTable({
            "bInfo": false, //hiding Showing 1 to N of N entries
            // "display": none,
            order: [
                [2, 'asc']
            ],
            'columns': [{
                    data: 'AttStandard'
                }, //index - 0
                {
                    data: 'AttDiv'
                },
                {
                    data: 'StuRollNo'
                },
                {
                    data: 'AttStudentName'
                },
                {
                    data: 'AttPresentAbsent'
                },
                {
                    data: 'AttSendSMS'
                },
                {
                    data: 'AttDate'
                },
            ],
            'columnDefs': [{
                'targets': [0, 1, 3, 6],
                /* column index */
                'orderable': false,
                /* true or false */
            }],

            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf',
            ]
        });
    });
</script>
<script src="../js/app.js"></script>
<script src="../js/indapp.js"></script>
<script src="../logg.js"></script>

</html>