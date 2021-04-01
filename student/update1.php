<?php
error_reporting(0);
include("connectdb.php");



$StuUIDNo = $_GET['StuUIDNo'];
$StuGRNo = $_GET['StuGRNo'];
//$StuStudentRollNo=$_GET['StuStudentRollNo'];
$StuStudentName = strtoupper($_GET['StuStudentName']);
$StuStandard = $_GET['StuStandard'];
$StuDiv = $_GET['StuDiv'];


$StuDOB = $_GET['StuDOB'];
$StuDateOfAdmission = $_GET['StuDateOfAdmission'];
$StuParentMobileNumber1 = $_GET['StuParentMobileNumber1'];
$StuParentMobileNumber2 = $_GET['StuParentMobileNumber2'];
$StuHouseNo = $_GET['StuHouseNo'];
$StuStreetName = strtoupper($_GET['StuStreetName']);
$StuLocation = strtoupper($_GET['StuLocation']);
$StuCity = strtoupper($_GET['StuCity']);
$StuDist = strtoupper($_GET['StuDist']);
$StuBirthPlace = strtoupper($_GET['StuBirthPlace']);
$StuAadharNo = $_GET['StuAadharNo'] ?? "";
$StuCategory = $_GET['StuCategory'];
$StuCaste = strtoupper($_GET['StuCaste']);
$StuLastschoolname = strtoupper($_GET['StuLastschoolname']);
$StuBankname = strtoupper($_GET['StuBankname']);
$StuBankACno = $_GET['StuBankACno'] ?? "";
$StuBankIFSCcode = $_GET['StuBankIFSCcode'];
$StuStatus = $_GET['StuStatus'];
$StuStatusChangedDate = $_GET['StuStatusChangedDate'];


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

	<title>Form Layouts | Admin Demo</title>
	<script src="../logg.js"></script>

	<link href="../payroll/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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

					<li class="sidebar-item  active">
						<a href="#addstu" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle"></i> <span class="align-middle">Student</span>
						</a>
						<ul id="addstu" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="../student/Student.php">Add</a></li>
							<li class="sidebar-item  active"><a class="sidebar-link" href="../student/student-view.php">View</a></li>
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

					<h1 class="h3 mb-3" style="font-weight: bold;">Update Student</h1>


				</div>
				<div class="col-12 col-xl-10">
					<div class="card">
						<div class="card-header">


						</div>
						<div class="card-body">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" enctype="multipart/form-data">


								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Name</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" name="StuStudentName" value="<?php echo "$StuStudentName" ?>" placeholder="Enter Name">
									</div>

								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Standard</label>
									<div class="col-sm-2">

										<select class="form-control" name="StuStandard" value="<?php echo "$StuStandard" ?>">


											<option value="9" <?php
																if ($StuStandard == '9') {
																	echo "selected";
																}
																?>>9</option>
											<option <?php
													if ($StuStandard == '10') {
														echo "selected";
													}
													?>>10</option>
											<option <?php
													if ($StuStandard == '11') {
														echo "selected";
													}
													?>>11</option>
											<option <?php
													if ($StuStandard == '12') {
														echo "selected";
													}
													?>>12</option>

										</select>



									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Div</label>
									<div class="col-sm-2">
										<select class="form-control" name="StuDiv" value="<?php echo "$StuDiv" ?>">
											<option value="A" <?php
																if ($StuDiv == 'A') {
																	echo "selected";
																}
																?>>A</option>
											<option <?php
													if ($StuDiv == 'B') {
														echo "selected";
													}
													?>>B</option>
											<option <?php
													if ($StuDiv == 'C') {
														echo "selected";
													}
													?>>C</option <?php
																	if ($StuDiv == 'D') {
																		echo "selected";
																	}
																	?>>
											<option>D</option>


										</select>
									</div>
								</div>








								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date Of Birth</label>
									<div class="col-sm-4">

										<input type="date" class="form-control" name="StuDOB" value="<?php echo "$StuDOB" ?>">

									</div>
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Admission Date</label>
									<div class="col-sm-4">

										<input type="date" class="form-control" name="StuDateOfAdmission" value="<?php echo "$StuDateOfAdmission" ?>">

									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Mobile No</label>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuParentMobileNumber1" value="<?php echo "$StuParentMobileNumber1" ?>" placeholder="primary No">
									</div>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuParentMobileNumber2" value="<?php echo "$StuParentMobileNumber2" ?>" placeholder="Secondary No">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Address</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="StuHouseNo" placeholder="House No" value="<?php echo "$StuHouseNo" ?>">
									</div>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder="Street Name" name="StuStreetName" value="<?php echo "$StuStreetName" ?>">
									</div>

								</div>
								<div class="mb-3 row">

									<div class="col-sm-4 ml-sm-auto">
										<input type="text" class="form-control" placeholder="Location" name="StuLocation" value="<?php echo "$StuLocation" ?>">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="City" name="StuCity" value="<?php echo "$StuCity" ?>">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="Dist" name="StuDist" value="<?php echo "$StuDist" ?>">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Birth Place</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="StuBirthPlace" placeholder="" value="<?php echo "$StuBirthPlace" ?>">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">AadharNo</label>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuAadharNo" placeholder="" value="<?php echo "$StuAadharNo" ?>">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Category</label>
									<div class="col-sm-4">
										<select class="form-control" name="StuCategory" value="<?php echo "$StuCategory" ?>">
											<option class="form-check" value="General" <?php
																						if ($StuCategory == 'GENERAL')
																							echo "selected";
																						?>>GENERAL</option>
											<option class="form-check" <?php
																		if ($StuCategory == 'OTP')
																			echo "selected";
																		?>>OTP</option>
											<option class="form-check" <?php
																		if ($StuCategory == 'ST')
																			echo "selected";
																		?>>ST</option>
										</select>

									</div>
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Caste</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="StuCaste" placeholder="" value="<?php echo "$StuCaste" ?>">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Last School Name</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="StuLastschoolname" placeholder="" value="<?php echo "$StuLastschoolname" ?>">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Bank Details</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="StuBankname" placeholder="Bank Name" value="<?php echo "$StuBankname" ?>">
									</div>
									<div class="col-sm-3">
										<input type="number" class="form-control" name="StuBankACno" placeholder="A/c No" value="<?php echo "$StuBankACno" ?>">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="StuBankIFSCcode" placeholder="IFSC Code" value="<?php echo "$StuBankIFSCcode" ?>">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Status</label>
									<div class="col-sm-4">
										<select class="form-control" name="StuStatus" value="<?php echo "$StuStatus" ?>">
											<option value="ACTIVE" <?php
																	if ($StuStatus == 'ACTIVE') {
																		echo "selected";
																	}
																	?>>ACTIVE</option>
											<option <?php
													if ($StuStatus == 'LEFT') {
														echo "selected";
													}
													?>>LEFT</option>
											<option <?php
													if ($StuStatus == 'PASSED OUT') {
														echo "selected";
													}
													?>>PASSED OUT</option>
											<option <?php
													if ($StuStatus == 'TRANSFER') {
														echo "selected";
													}
													?>>TRANSFER</option>
										</select>
									</div>


									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Status Changed Date</label>
									<div class="col-sm-4">


										<input type="date" class="form-control" name="StuStatusChangedDate" value="<?php echo "$StuStatusChangedDate" ?>">


									</div>
								</div>


						</div>



						<div class="mb-3 row">
							<div class="col-sm-10 ml-sm-auto">
								<input type="submit" class="btn btn-custom-sm btn-success" name="test_update" id="updatebtn" value="Update">


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
									<a href="index.html" class="text-muted"><strong>Demo</strong></a> &copy;
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

	<script src="../payroll/js/app.js"></script>

</body>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "test4");
if ($_GET['test_update']) {

	$StuUIDNo = $_GET['StuUIDNo'];
	$StuGRNo = $_GET['StuGRNo'];
	//$StuStudentRollNo=$_GET['StuStudentRollNo'];
	$StuStudentName = strtoupper($_GET['StuStudentName']);
	$StuStandard = $_GET['StuStandard'];
	$StuDiv = $_GET['StuDiv'];

	$StuDOB = $_GET['StuDOB'];
	$StuDateOfAdmission = $_GET['StuDateOfAdmission'];
	$StuParentMobileNumber1 = $_GET['StuParentMobileNumber1'];
	$StuParentMobileNumber2 = $_GET['StuParentMobileNumber2'];
	$StuHouseNo = $_GET['StuHouseNo'];
	$StuStreetName = strtoupper($_GET['StuStreetName']);
	$StuLocation = strtoupper($_GET['StuLocation']);
	$StuCity = strtoupper($_GET['StuCity']);
	$StuDist = strtoupper($_GET['StuDist']);
	$StuBirthPlace = strtoupper($_GET['StuBirthPlace']);
	$StuAadharNo = $_GET['StuAadharNo'] ?? "";
	$StuCategory = $_GET['StuCategory'];
	$StuCaste = strtoupper($_GET['StuCaste']);
	$StuLastschoolname = strtoupper($_GET['StuLastschoolname']);
	$StuBankname = strtoupper($_GET['StuBankname']);
	$StuBankACno = $_GET['StuBankACno'] ?? "";
	$StuBankIFSCcode = $_GET['StuBankIFSCcode'];
	$StuStatus = $_GET['StuStatus'];
	$StuStatusChangedDate = $_GET['StuStatusChangedDate'];






	$query = "UPDATE studentmaster SET StuUIDNo='$StuUIDNo',StuGRNo='$StuGRNo',
      StuStudentName= '$StuStudentName',StuStandard= '$StuStandard',
      StuDiv ='$StuDiv',StuDOB ='$StuDOB', StuDateOfAdmission ='$StuDateOfAdmission',
      StuParentMobileNumber1 ='$StuParentMobileNumber1',StuParentMobileNumber2 ='$StuParentMobileNumber2',StuHouseNo ='$StuHouseNo',StuStreetName='$StuStreetName',StuLocation='$StuLocation',StuCity='$StuCity',StuDist='$StuDist',StuBirthPlace ='$StuBirthPlace',StuAadharNo ='$StuAadharNo',StuCategory ='$StuCategory',StuCaste ='$StuCaste',StuLastschoolname ='$StuLastschoolname', StuBankname ='$StuBankname',
       StuBankACno ='$StuBankACno',StuBankIFSCcode ='$StuBankIFSCcode',StuStatus ='$StuStatus',StuStatusChangedDate='$StuStatusChangedDate' where StuUIDNo='$StuUIDNo'";
	$data = mysqli_query($conn, $query);
	if ($data) {
		echo "<scrpit>alert('Record update from database')</scrpit>";
?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/test4/student-view.php">
<?php
	} else {
		echo "failed update";
	}
}
?>