<?php
include("db_con_inc.php");
if (isset($_POST['submit_atd'])) {
    $dString = mysqli_real_escape_string($con, trim($_POST['atd_date']));
    $date = date("d-m-Y", strtotime($dString));
    $stuStandard = mysqli_real_escape_string($con, trim($_POST['atd_standard']));
    $stuDiv = mysqli_real_escape_string($con, trim($_POST['cls_section']));
    $sql = "SELECT * FROM studentmaster WHERE StuStandard ='$stuStandard' AND StuDiv='$stuDiv'
           ORDER BY StuStudentRollno";
    $res = mysqli_query($con, $sql);
} else {
    header('location:index.php');
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/cr-1.5.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.1/datatables.js"></script>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/gapi.css">

    <style>
        input[type="checkbox"] {
            width: 30px;
            height: 30px;
        }

        .container {
            background-color: white;
            padding: 50px;
        }
    </style>
</head>

<body onload="viewPresent()">

    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" style="text-align: center;">
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

                    <li class="sidebar-item ">
                        <a href="#payr" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Payroll</span>
                        </a>
                        <ul id="payr" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item "><a class="sidebar-link" href="../payroll/addpayroll.php">Add Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/viewpayroll.php">View Pay</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/salcertgen.php">Salary Certificate</a></li>
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

                    <li class="sidebar-item active">
                        <a href="#attend" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Attendance</span>
                        </a>
                        <ul id="attend" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item active"><a class="sidebar-link" href="../attendance/index.php">Add</a></li>
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
                    <div class="container">
                        <form method="POST" action="atd3.php">
                            <div class="row">
                                <div class="col-lg-4">
                                    <b>DATE: <?php echo $date; ?> </b>
                                </div>
                                <div class="col-lg-4" style="text-align: center;">
                                    <b>STANDARD: <?php echo $stuStandard; ?> </b>
                                </div>
                                <div class="col-lg-4 mr-0" style="text-align: right;">
                                    <b>DIVISION: <?php echo $stuDiv; ?> </b>
                                </div>
                            </div>
                            <hr>
                            <table id="myTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align:center">
                                        <th> <input type="checkbox" value="selectorAll" id="selectAll" onchange="selectAllStudent()">
                                        </th>
                                        <th>Number</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <tr style="text-align:center">
                                            <td style="width: 50px;">
                                                <input type="checkbox" id="ckbx" name="attend[]" value="<?php echo $row['StuStudentRollno']; ?>" onchange="viewPresent()">
                                            </td>
                                            <td><?php echo $row["StuStudentRollno"]; ?></td>
                                            <td><?php echo $row["StuStudentName"]; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <br>
                            <input type="hidden" name="hdDate" value="<?php echo $date; ?>">
                            <input type="hidden" name="hdCls" value="<?php echo $stuStandard; ?>">
                            <input type="hidden" name="hdSec" value="<?php echo $stuDiv; ?>">
                            <input type="hidden" name="absentArrays[]" value="" id="absentArray">
                            <div style="margin: 10px;" id="showStudent">
                                <div id="show"></div>
                                <!-- this divs print count and no.of students at bottom -->
                                <div id="show2"></div>
                            </div>
                            <p><B>Send SMS to parents?</B>
                                <input type="radio" id="yes" name="sendSMS" value="Y">Yes
                                <input type="radio" id="yes" name="sendSMS" value="N" checked="checked" class="ml-2">No
                            </p>
                            <input type="submit" class="btn btn-success mx-auto" name="UploadAttendance" id="UploadAttendance" value="Upload Attendance">
                        </form>
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
</body>
<script src="../logg.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#myTable').DataTable({
            scrollY: '60vh',
            scrollCollapse: true,
            responsive: true,
            paging: false,
            columnDefs: [{
                orderable: false,
                targets: 0
            }],
            order: [
                [1, 'asc']
            ]
        });
    });

    function viewPresent() {
        var array = [];
        var show = document.getElementById("show");
        var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].value == 'selectorAll') {
                continue;
            } else {
                array.push(checkboxes[i].value);
            }
        }
        var absent = [];
        var show2 = document.getElementById("show2");
        var ucheckboxes = document.querySelectorAll('input[type=checkbox]:not(:checked)');
        for (var i = 0; i < ucheckboxes.length; i++) {
            if (ucheckboxes[i].value == 'selectorAll') {
                continue;
            } else {
                absent.push(ucheckboxes[i].value);
            }
        }
        show.innerHTML = "<B>Present students(" + array.length + ") :</B> " + array;
        show2.innerHTML = "<B>Absent students(" + absent.length + ") :</B> " + absent;
        var str = JSON.stringify(absent);
        document.getElementById('absentArray').value = str;
    }

    function selectAllStudent() {
        if (document.getElementById('selectAll').checked) {
            var items = document.getElementsByName('attend[]');
            for (var i = 0; i < items.length; i++) {
                if (items[i].type == 'checkbox')
                    items[i].checked = true;
            }
        } else {
            var items = document.getElementsByName('attend[]');
            for (var i = 0; i < items.length; i++) {
                if (items[i].type == 'checkbox') {
                    items[i].checked = false;
                }
            }
        }
        viewPresent();
    }
</script>
<script>
    document.getElementById("logout").onclick = function() {
        var l = window.history.length - 2;
        window.history.go(l - 2 * l);
    }
</script>
<script src="../js/app.js"></script>
<script src="../js/indapp.js"></script>

</html>