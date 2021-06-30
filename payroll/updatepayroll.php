<?php
include("connectdb.php");
$empidquery = "SELECT * FROM ttbsalarymaster WHERE year = '" . $_GET["ye"] . "' AND SalMonthname = '" . $_GET["mo"] . "'AND SalEmpNo = '" . $_GET["id"] . "';";
$empidresult = mysqli_query($con, $empidquery);
$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";
$e5 = "";
$e6 = "";
$e7 = "";
$e8 = "";
$e9 = "";
$e10 = "";
$e11 = "";
$e12 = "";
$e13 = "";
$e14 = "";
$e15 = "";
$e16 = "";
$e17 = "";
$e18 = "";
$e19 = "";
$e20 = "";
$e21 = "";
$e22 = "";
$e23 = "";
$e24 = "";
$e25 = "";
$e26 = "";
$e27 = "";

while ($eid = mysqli_fetch_array($empidresult)) {
    $e1 = $eid["SalFullName"];
    $e2 = $eid["SalDesignation"];
    $e3 = $eid["SalPAN"];
    $e4 = $eid["SalPFNo"];
    $e5 = $eid["SalEmpBankAccount"];
    $e6 = $eid["SalMonthname"];
    $e7 = $eid["SalMonthdays"];
    $e8 = $eid["SalPresentdays"];
    $e9 = $eid["Salleavedays"];
    $e10 = $eid["SalLWP"];
    $e11 = $eid["SalBasic"];
    $e12 = $eid["SalDA"];
    $e13 = $eid["SalCLA"];
    $e14 = $eid["SalHRA"];
    $e15 = $eid["SalTA"];
    $e16 = $eid["SalSPPay"];
    $e17 = $eid["SalDGPay"];
    $e18 = $eid["SalMA"];
    $e19 = $eid["SalArreas1"];
    $e20 = $eid["SalArreas2"];
    $e21 = $eid["SalPTax"];
    $e22 = $eid["SalPF"];
    $e23 = $eid["SalIncomTax"];
    $e24 = $eid["Salother"];
    $e25 = $eid["SalTotalEarning"];
    $e26 = $eid["SalTotalDeduction"];
    $e27 = $eid["SalNetPayable"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="../css/gapi.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/ui_d.css">

    <title>Update Payroll</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

                    <li class="sidebar-item active">
                        <a href="#payr" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Payroll</span>
                        </a>
                        <ul id="payr" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../payroll/addpayroll.php">Add Pay</a></li>
                            <li class="sidebar-item active"><a class="sidebar-link" href="../payroll/viewpayroll.php">View Pay</a></li>
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
                            <h3><strong>Payroll</strong> Employee</h3>
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
                                <h1 class="mt-1 mb-3 text-center">Payroll</h1>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="eid" class="font-weight-bold">Employee Id :</label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <!-- <input class="form-control" type="text" placeholder="Employee Id" name="pano"> -->
                                            <input class="form-control" type="hidden" name="emid" value=<?php echo $_GET["id"]; ?> id="esid" readonly>
                                            <label for="eid"><?php echo $_GET["id"]; ?></label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="eid" class="font-weight-bold">A. Y. :</label>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <input class="form-control" type="hidden" value=<?php echo $_GET["ye"]; ?> name="acye" id="esay" readonly>
                                            <label for="eid"><?php echo $_GET["ye"]; ?></label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-left">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="ename" class="font-weight-bold">Employee Name : </label>
                                        </div>
                                        <div class="col-md-2 text-left ">
                                            <!-- <input class="form-control" type="text" value=<?php echo $e1; ?> name="Emna" id="esna" readonly> -->
                                            <label for="eid"><?php echo $e1; ?></label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="epan" class="font-weight-bold">PAN No : </label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <!-- <input class="form-control" type="text" value=<?php echo $employeepan; ?> name="Empan" id="espan" readonly> -->
                                            <label for="eid"><?php echo $e3; ?></label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-left">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="edesg" class="font-weight-bold">Employee Designation : </label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <!-- <input class="form-control" type="text" value=<?php echo $employeedesg; ?> name="Emde" id="esdesg" readonly> -->
                                            <label for="eid"><?php echo $e2; ?></label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="epfno" class="font-weight-bold">Employee PF No : </label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <!-- <input class="form-control" type="text" value=<?php echo $employeepfno; ?> name="Empfn" id="espfn" readonly> -->
                                            <label for="eid"><?php echo $e4; ?></label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Month :</label>
                                        </div>
                                        <div class="col-md-2 text-left form-row">
                                            <!-- <input class="form-control" type="text" placeholder="Month" name="pano"> -->
                                            <input class="form-control" type="hidden" name="mon" value=<?php echo $_GET["mo"]; ?> id="esmo" readonly>
                                            <label for="eid"><?php echo $e6; ?></label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-1 text-left">
                                            <label for="mon" class="font-weight-bold">Total Day:</label>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e7; ?> name="pano" id="estd" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-1 text-left">
                                            <label for="mon" class="font-weight-bold">Present :</label>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e8; ?> name="pano" id="espd" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-1 text-left">
                                            <label for="mon" class="font-weight-bold">Leave :</label>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e9; ?> name="pano" id="esld" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-1 text-left">
                                            <label for="mon" class="font-weight-bold">LWP:</label>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e10; ?> name="pano" id="eslwp" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Basic :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e11; ?> name="Emba" id="esba" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">P.F :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e22; ?> name="Empf" id="espf" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">SPPay :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e16; ?> name="Emsp" id="essp" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">DGPay :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e17; ?> name="Emdg" id="esdg" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Sal Arreas1 :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e19; ?> name="Emsa1" id="essa1" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Sal Arreas2 :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e20; ?> name="Emsa2" id="essa2" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">D.A :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e12; ?> name="Emda" id="esda"  oninput="validity.valid||(value='');" min="0" >
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">P.T :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e21; ?> name="Empt" id="espt"  oninput="validity.valid||(value='');" min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">T.A :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e15; ?> name="Emta" id="esta" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">I.T :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e23; ?> name="Emit" id="esit" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">H.A :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e14; ?> name="Emha" id="esha" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class='col-md-2 text-left'>
                                            <label for='mon' class="font-weight-bold">CLA :</label>
                                        </div>
                                        <div class='col-md-2 text-center'>
                                            <input class='form-control' type='number' value=<?php echo $e13; ?> name='Emcla' id='escla' oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">M.A :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e18; ?> name="Emma" id="esma" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Other :</label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <input class="form-control" type="number" value=<?php echo $e24; ?> name="Emot" id="esot" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Total Earning :</label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <input class="form-control" type="number" value=<?php echo $e25; ?> name="Emte" id="este" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Total Deduction :</label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <input class="form-control" type="number" value=<?php echo $e26; ?> name="Emtde" id="estde" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <label for="mon" class="font-weight-bold">Net Payable :</label>
                                        </div>
                                        <div class="col-md-2 text-left">
                                            <input class="form-control" type="number" value=<?php echo $e27; ?> name="Emnp" id="esnp" oninput="validity.valid||(value='');"  min="0" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                        </div>
                                        <div class="col-md-1 text-center">
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <button type="button" class="btn btn-lg btn-pill btn-success" id="upd">Update</button>
                                        </div>
                                        <div class="col-md-1 text-center">
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <button type="button" class="btn btn-lg btn-pill btn-success" id="cad">Cancel</button>
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
                                <a class="text-muted"><strong>Shree SZ Vaghela High School</strong></a> &copy;
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


    </div>

    <script src="js/app.js"></script>
    <script src="js/indapp.js"></script>
    <script src="updatepay.js"></script>
    <script src="../logg.js"></script>

</body>

</html>