<?php
include("./connectdb.php");


$EmpNo = $_GET['EmpNo'];
$EmpNamePrefix = strtoupper($_GET['EmpNamePrefix']);
$EmpFirstName = strtoupper($_GET['EmpFirstName']);
$EmpMidName = strtoupper($_GET['EmpMidName']);
$EmpLastName = strtoupper($_GET['EmpLastName']);
$EmpDesignation = strtoupper($_GET['EmpDesignation']);
//$EmpGender=$_GET['EmpGender'];
$EmpDOB = $_GET['EmpDOB'];
$EmpAddress1 = strtoupper($_GET['EmpAddress1']);
$EmpAddress2 = strtoupper($_GET['EmpAddress2']);
$EmpState = strtoupper($_GET['EmpState']);
$EmpCity = strtoupper($_GET['EmpCity']);
$EmpPinCode = $_GET['EmpPinCode'];
$EmpContactNo = $_GET['EmpContactNo'];
$EmpEmailID = $_GET['EmpEmailID'];
$EmpDateofjoining = $_GET['EmpDateofjoining'];
$EmpDateofLeaving = $_GET['EmpDateofLeaving'];
$EmpCategory = strtoupper($_GET['EmpCategory']);
$EmpAadharNo = $_GET['EmpAadharNo'];
$EmpPan = $_GET['EmpPan'];
$EmpPFno = $_GET['EmpPFno'];
$EmpStatus = strtoupper($_GET['EmpStatus']);
$EmpLastStatusChangeDate = $_GET['EmpLastStatusChangeDate'];
$EmpBankName = strtoupper($_GET['EmpBankName']);
$EmpBankAccount = $_GET['EmpBankAccount'];
$EmpBankIFSC = $_GET['EmpBankIFSC'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Employee</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

					<li class="sidebar-item active">
						<a href="#emp" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle"></i> <span class="align-middle">Employee</span>
						</a>
						<ul id="emp" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="../employee/Employee.php">Add</a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="../employee/employee-view.php">View</a></li>
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

					<h1 class="h3 mb-3" style="font-weight: bold;">Update Employee</h1>


				</div>
				<div class="col-12 col-xl-12">
					<div class="card">
						<div class="card-header">
							<!-- now try  -->
						</div>
						<div class="card-body">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Employee No</label>
									<div class="col-sm-5">
										<input type="number" class="form-control" value="<?php echo "$EmpNo" ?>" name="EmpNo" placeholder="">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Name</label>
									<div class="col-sm-1">
										<select class="form-control" value="<?php echo "$EmpNamePrefix" ?>" name="EmpNamePrefix">
											<option value="MRS." <?php
																	if ($EmpNamePrefix == 'MRS.') {
																		echo "selected";
																	}
																	?>>MRS.</option>
											<option <?php
													if ($EmpNamePrefix == 'MR.') {
														echo "selected";
													}
													?>>MR.</option>
											<option <?php
													if ($EmpNamePrefix == 'MISS.') {
														echo "selected";
													}
													?>>MISS.</option>
											<option <?php
													if ($EmpNamePrefix == 'MS.') {
														echo "selected";
													}
													?>>MS.</option>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="EmpFirstName" value="<?php echo "$EmpFirstName" ?>" placeholder="FirstName">
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="EmpMidName" value="<?php echo "$EmpMidName" ?>" placeholder="MiddelName">
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="EmpLastName" value="<?php echo "$EmpLastName" ?>" placeholder="LastName">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Designation</label>
									<div class="col-sm-3">
										<select name="EmpDesignation" value="<?php echo "$EmpDesignation" ?>" class="form-control">

											<option value="PRINCIPAL" <?php
																		if ($EmpDesignation == 'PRINCIPAL') {
																			echo "selected";
																		}
																		?>>PRINCIPAL</option>
											<option <?php
													if ($EmpDesignation == 'CLERK') {
														echo "selected";
													}
													?>>CLERK</option>
											<option <?php
													if ($EmpDesignation == 'ASSISTANT TEACHER') {
														echo "selected";
													}
													?>>ASSISTANT TEACHER</option>
											<option <?php
													if ($EmpDesignation == 'TEACHER') {
														echo "selected";
													}
													?>>TEACHER</option>
											<option <?php
													if ($EmpDesignation == 'ASSISTANT TEACHER ON PROBATION') {
														echo "selected";
													}
													?>>ASSISTANT TEACHER ON PROBATION</option>
											<option <?php
													if ($EmpDesignation == 'LIBRARIAN') {
														echo "selected";
													}
													?>>LIBRARIAN</option>
											<option <?php
													if ($EmpDesignation == 'PEON') {
														echo "selected";
													}
													?>>PEON</option>
											<option <?php
													if ($EmpDesignation == 'OTHER') {
														echo "selected";
													}
													?>>OTHER</option>
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date Of Birth</label>
									<div class="col-sm-4">
										<input type="date" name="EmpDOB" value="<?php echo "$EmpDOB" ?>" class="form-control" style="font-weight: bold;">
										<!-- <form action="https://example.com">
                                                    <input type="date" class="form-control" name="EmpDOB">
                                         </form> -->
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Address1</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="EmpAddress1" value="<?php echo "$EmpAddress1" ?>" placeholder="">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Address2</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="EmpAddress2" value="<?php echo "$EmpAddress2" ?>" placeholder="">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">City</label>
									<div class="col-sm-5">
										<input type="text" name="EmpCity" value="<?php echo "$EmpCity" ?>" class="form-control" placeholder="">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">State</label>
									<div class="col-sm-5">
										<input type="text" name="EmpState" value="<?php echo "$EmpState" ?>" class="form-control">

									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Pin Code</label>
									<div class="col-sm-5">
										<input type="number" class="form-control" name="EmpPinCode" placeholder="" id="pin" value="<?php echo "$EmpPinCode" ?>" autocomplete="off" required>
										<span id="pincode" class="text-danger font-weight-bold"></span>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Contact No</label>
									<div class="col-sm-5">
										<input type="number" class="form-control" name="EmpContactNo" id="mobile1" value="<?php echo "$EmpContactNo" ?>" placeholder="" autocomplete="off" required>

										<span id="mobile" class="text-danger font-weight-bold"></span>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Email</label>
									<div class="col-sm-5">
										<input type="email" class="form-control" name="EmpEmailID" id="emailID" placeholder="" value="EmpEmailID" autocomplete="off" required>
										<span id="EmailID1" class="text-danger font-weight-bold"></span>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date of joining</label>
									<div class="col-sm-4">
										<!-- <form action="https://example.com"> -->
										<input type="date" class="form-control " name="EmpDateofjoining" value="<?php echo "$EmpDateofjoining" ?>" style="font-weight:bold;">
										<!-- </form> -->
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date of Leaving</label>
									<div class="col-sm-4">
										<!-- <form action="https://example.com"> -->
										<input type="date" name="EmpDateofLeaving" value="<?php echo "$EmpDateofLeaving" ?>" class="form-control" style="font-weight: bold;">
										<!-- </form> -->
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Category</label>
									<div class="col-sm-5">
										<select name="EmpCategory" value="<?php echo "$EmpCategory" ?>" class="form-control" placeholder="">

											<option value="OPEN" <?php
																	if ($EmpCategory == 'OPEN') {
																		echo "selected";
																	}
																	?>>OPEN</option>
											<option <?php
													if ($EmpCategory == 'OBC') {
														echo "selected";
													}
													?>>OBC</option>
											<option <?php
													if ($EmpCategory == 'SC') {
														echo "selected";
													}
													?>>SC</option>
											<option <?php
													if ($EmpCategory == 'ST') {
														echo "selected";
													}
													?>>ST</option>
										</select>
									</div>
								</div>


								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Aadhar Card No</label>
									<div class="col-sm-5">
										<input type="text" name="EmpAadharNo" class="form-control" id="aadhar" value="<?php echo "$EmpAadharNo" ?>" autocomplete="off" placeholder="">
										<span id="AadharNo" class="text-danger font-weight-bold"></span>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Pan Card No</label>
									<div class="col-sm-5">
										<input type="number" name="EmpPan" class="form-control" placeholder="" id="pan" value="<?php echo "$EmpPan" ?>" autocomplete="off" required>
										<span id="panno" class="text-danger font-weight-bold"></span>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Phone No</label>
									<div class="col-sm-5">
										<input type="text" name="EmpPFno" value="<?php echo "$EmpPFno" ?>" class="form-control" placeholder="">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Status</label>
									<div class="col-sm-5">
										<select name="EmpStatus" value="<?php echo "$EmpStatus" ?>" class="form-control" placeholder="">

											<option value="ACTIVE" <?php
																	if ($EmpStatus == 'ACTIVE') {
																		echo "selected";
																	}
																	?>>ACTIVE</option>
											<option <?php
													if ($EmpStatus == 'RESIGNED') {
														echo "selected";
													}
													?>>RESIGNED</option>
											<option <?php
													if ($EmpStatus == 'RETIRED') {
														echo "selected";
													}
													?>>RETIRED</option>
										</select>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Last Status Change Date</label>
									<div class="col-sm-5">
										<input type="date" name="EmpLastStatusChangeDate" value="<?php echo "$EmpLastStatusChangeDate" ?>" class="form-control" placeholder="" style="font-weight: bold;">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Bank Details</label>
									<div class="col-sm-3">
										<input type="text" name="EmpBankName" value="<?php echo "$EmpBankName" ?>" class="form-control" placeholder="Bank Name">
									</div>
									<div class="col-sm-3">
										<input type="number" name="EmpBankAccount" value="<?php echo "$EmpBankAccount" ?>" class="form-control" placeholder="A/c No">
									</div>
									<div class="col-sm-3">
										<input type="text" name="EmpBankIFSC" class="form-control" value="<?php echo "$EmpBankIFSC" ?>" placeholder="IFSC Code">
									</div>
								</div>
								<div class="mb-3 row">
									<div class="col-sm-10 ml-sm-auto">

										<input type="submit" class="btn btn-success" name="test_update" id="updatebtn" value="update" onclick="return update()">

										<!-- <input type="submit"  value="submit" class="btn btn-primary"> -->

									</div>

							</form>
						</div>
					</div>
				</div>



				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-muted">
							<div class="col-6 text-left">
								<p class="mb-0">
									<a class="text-muted"><strong>Demo</strong></a> &copy;
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
	<script src="../logg.js"></script>
</body>

</html>

</html>
<?php
error_reporting(0);
if ($_GET['test_update'] ?? "") {

	$EmpNo = $_GET['EmpNo'];
	$EmpNamePrefix = $_GET['EmpNamePrefix'];
	$EmpFirstName = strtoupper($_GET['EmpFirstName']);
	$EmpMidName = strtoupper($_GET['EmpMidName']);
	$EmpLastName = strtoupper($_GET['EmpLastName']);
	$EmpDesignation = strtoupper($_GET['EmpDesignation']);

	$EmpDOB = $_GET['EmpDOB'];
	$EmpAddress1 = strtoupper($_GET['EmpAddress1']);
	$EmpAddress2 = strtoupper($_GET['EmpAddress2']);
	$EmpState = strtoupper($_GET['EmpState']);
	$EmpCity = strtoupper($_GET['EmpCity']);
	$EmpPinCode = $_GET['EmpPinCode'];
	$EmpContactNo = $_GET['EmpContactNo'];
	$EmpEmailID = $_GET['EmpEmailID'];
	$EmpDateofjoining = $_GET['EmpDateofjoining'];
	$EmpDateofLeaving = $_GET['EmpDateofLeaving'];
	$EmpCategory = strtoupper($_GET['EmpCategory']);
	$EmpAadharNo = $_GET['EmpAadharNo'];
	$EmpPan = $_GET['EmpPan'];
	$EmpPFno = $_GET['EmpPFno'];
	$EmpStatus = strtoupper($_GET['EmpStatus']);
	$EmpLastStatusChangeDate = $_GET['EmpLastStatusChangeDate'];
	$EmpBankName = strtoupper($_GET['EmpBankName']);
	$EmpBankAccount = $_GET['EmpBankAccount'];
	$EmpBankIFSC = $_GET['EmpBankIFSC'];


	$query = "UPDATE employeemaster SET EmpNo='$EmpNo',EmpNamePrefix='$EmpNamePrefix',
      EmpFirstName= '$EmpFirstName',EmpMidName= '$EmpMidName',EmpLastName= '$EmpLastName',
        EmpDesignation='$EmpDesignation',EmpDOB='$EmpDOB',EmpAddress1 ='$EmpAddress1',
        EmpAddress2 ='$EmpAddress2',EmpState ='$EmpState',EmpCity ='$EmpCity', EmpPinCode ='$EmpPinCode',
        EmpContactNo ='$EmpContactNo',EmpEmailID ='$EmpEmailID',EmpDateofjoining='$EmpDateofjoining',EmpDateofLeaving ='$EmpDateofLeaving',
        EmpCategory ='$EmpCategory',EmpAadharNo ='$EmpAadharNo',EmpPan ='$EmpPan',EmpPFno ='$EmpPFno',
        EmpStatus ='$EmpStatus', EmpLastStatusChangeDate ='$EmpLastStatusChangeDate',
        EmpBankName ='$EmpBankName',EmpBankAccount ='$EmpBankAccount',EmpBankIFSC ='$EmpBankIFSC' where EmpNo='$EmpNo'";
	$data = mysqli_query($conn, $query);
	if ($data) {
		echo "<scrpit>alert('Record update from database')</scrpit>";
?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL= ./employee-view.php">
<?php
	} else {
		echo "failed update";
	}
}

?>