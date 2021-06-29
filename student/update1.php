<?php
error_reporting(0);
include("connectdb.php");



$StuGRNo = $_GET['StuGRNo'];
$result = mysqli_query($conn, "SELECT * FROM studentmaster WHERE StuGRNo=$StuGRNo");
while ($res = mysqli_fetch_array($result)) {
	$Stuprefix = $res['Stuprefix'];
	$StuStudentName = strtoupper($res['StuStudentName']);
	$Stumiddle = strtoupper($res['Stumiddle']);
	$StuLastname = strtoupper($res['StuLastname']);
	$StuAcdemicyear = $res['StuAcdemicyear'];
	$StuStandard = $res['StuStandard'];
	$StuDiv = $res['StuDiv'];


	$StuDOB = $res['StuDOB'];
	$StuDateOfAdmission = $res['StuDateOfAdmission'];
	$StuParentMobileNumber1 = $res['StuParentMobileNumber1'];
	$StuParentMobileNumber2 = $res['StuParentMobileNumber2'];
	$StuHouseNo = $res['StuHouseNo'];
	$StuStreetName = strtoupper($res['StuStreetName']);
	$StuLocation = strtoupper($res['StuLocation']);
	$StuCity = strtoupper($res['StuCity']);
	$StuDist = strtoupper($res['StuDist']);
	$StuBirthPlace = strtoupper($res['StuBirthPlace']);
	$StuAadharNo = $res['StuAadharNo'] ?? "";
	$StuCategory = $res['StuCategory'];
	$StuCaste = strtoupper($res['StuCaste']);
	$StuLastschoolname = strtoupper($res['StuLastschoolname']);
	$StuBankname = strtoupper($res['StuBankname']);
	$StuBankACno = $res['StuBankACno'] ?? "";
	$StuBankIFSCcode = $res['StuBankIFSCcode'];
	$StuStatus = $res['StuStatus'];
	$StuStatusChangedDate = $res['StuStatusChangedDate'];
}



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

	<title>Update Student</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
							
							<li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_declare.php">Declare Result</a>
							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_serch.php">Generate MarkSheet</a>
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

					<h1 class="h3 mb-3" style="font-weight: bold;">Update Student</h1>


				</div>
				<div class="col-12 col-xl-10">
					<div class="card">
						<div class="card-header">


						</div>
						<div class="card-body">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" enctype="multipart/form-data" onsubmit="return validation()">


								<div class="mb-3 row">

									<div class="col-sm-3">
										<input type="hidden" class="form-control" name="StuGRNo" placeholder="" value="<?php echo $_GET['StuGRNo']; ?>" required>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Name</label>
									<div class="col-sm-1">
										<select class="form-control" value="<?php echo $Stuprefix ?>" name="Stuprefix">
											
											<option <?php
													if ($Stuprefix == 'MR.') {
														echo "selected";
													}
													?>>MR.</option>
											<option <?php
													if ($Stuprefix == 'MS.') {
														echo "selected";
													}
													?>>MS.</option>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="StuStudentName" value="<?php echo $StuStudentName ?>" placeholder="FirstName" required>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="Stumiddle" value="<?php echo $Stumiddle ?>" placeholder="MiddelName" required>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="StuLastname" value="<?php echo $StuLastname ?>" placeholder="LastName" required>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Year</label>

									<div class="col-sm-2">
										<select name="StuAcdemicyear" class="form-control" value="<?php echo "$StuAcdemicyear" ?>">
											<option value="">--Select Academic Year--</option>
											<option value="2020-21" <?php
																	if ($StuAcdemicyear == '2020-21') {
																		echo "selected";
																	}
																	?>>2020-21</option>
											<option <?php
													if ($StuAcdemicyear == '2021-22') {
														echo "selected";
													}
													?>>2021-22</option>

											</option>
										</select>
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

										<input type="date" class="form-control" name="StuDOB" value="<?php echo "$StuDOB" ?>" >

									</div>
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Admission Date</label>
									<div class="col-sm-4">

										<input type="date" class="form-control" name="StuDateOfAdmission" value="<?php echo "$StuDateOfAdmission" ?>">

									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Mobile No</label>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuParentMobileNumber1" value="<?php echo "$StuParentMobileNumber1" ?>" placeholder="primary No" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  id="mobile1" autocomplete="off">
										<span id="mobile" class="text-danger font-weight-bold"></span>
									</div>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuParentMobileNumber2" value="<?php echo "$StuParentMobileNumber2" ?>" id="mobile2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  placeholder="Secondary No">
										<span id="mo" class="text-danger font-weight-bold"></span>
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
										<input type="number" class="form-control" name="StuAadharNo" placeholder="" value="<?php echo "$StuAadharNo" ?>" id="aadharNo" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="12"  >
										<span id="Aadhar" class="text-danger font-weight-bold"></span>
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
										<input type="text" class="form-control" name="StuBankIFSCcode" placeholder="IFSC Code" value="<?php echo "$StuBankIFSCcode" ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" >
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


										<input type="date" class="form-control" name="StuStatusChangedDate" value="<?php echo "$StuStatusChangedDate" ?>" require >


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
									<a href="index.html" class="text-muted"><strong>Shree SZ Vaghela High School</strong></a> &copy;
								</p>
							</div>
						</div>
					</div>
				</footer>
		</div>
	</div>

	<script src="../logg.js"></script>
	<script src="../payroll/js/app.js"></script>
	<script src="../js/indapp.js"></script>
	<script type="text/javascript">
		function validation() {
			var mobile1 = document.getElementById('mobile1').value;
			var mobile2 = document.getElementById('mobile2').value;
			var aadharNo = document.getElementById('aadharNo').value;

			var answer = true;

			if (mobile1.length != 10) {
				document.getElementById('mobile').innerHTML = "**number must be 10 digit";
				answer =  false;
			}

			//return true;
			if (mobile2.length != 10) {
				document.getElementById('mo').innerHTML = "**number must be 10 digit";
				answer = false;
			}

			//return true;
			if (aadharNo.length != 12) {
				document.getElementById('Aadhar').innerHTML = "**number must be 12 digit";
				return false;
			}

			return answer;
		}
	</script>

</body>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "schoolmanage");
if (isset($_POST['test_update'])) {
	$StuGRNo = $_POST['StuGRNo'];
	$Stuprefix = $_POST['Stuprefix'];
	$StuStudentName = strtoupper($_POST['StuStudentName']);
	$Stumiddle = strtoupper($_POST['Stumiddle']);
	$StuLastname = strtoupper($_POST['StuLastname']);
	$StuAcdemicyear = $_POST['StuAcdemicyear'];
	$StuStandard = $_POST['StuStandard'];
	$StuDiv = $_POST['StuDiv'];
	$StuDOB = $_POST['StuDOB'];
	$StuDateOfAdmission = $_POST['StuDateOfAdmission'];
	$StuParentMobileNumber1 = $_POST['StuParentMobileNumber1'];
	$StuParentMobileNumber2 = $_POST['StuParentMobileNumber2'];
	$StuHouseNo = $_POST['StuHouseNo'];
	$StuStreetName = strtoupper($_POST['StuStreetName']);
	$StuLocation = strtoupper($_POST['StuLocation']);
	$StuCity = strtoupper($_POST['StuCity']);
	$StuDist = strtoupper($_POST['StuDist']);
	$StuBirthPlace = strtoupper($_POST['StuBirthPlace']);
	$StuAadharNo = $_POST['StuAadharNo'] ?? "";
	$StuCategory = $_POST['StuCategory'];
	$StuCaste = strtoupper($_POST['StuCaste']);
	$StuLastschoolname = strtoupper($_POST['StuLastschoolname']);
	$StuBankname = strtoupper($_POST['StuBankname']);
	$StuBankACno = $_POST['StuBankACno'] ?? "";
	$StuBankIFSCcode = $_POST['StuBankIFSCcode'];
	$StuStatus = $_POST['StuStatus'];
	$StuStatusChangedDate = $_POST['StuStatusChangedDate'];


	$result = mysqli_query($conn, "UPDATE studentmaster SET Stuprefix='$Stuprefix',StuStudentName='$StuStudentName',Stumiddle='$Stumiddle',StuLastname='$StuLastname',StuAcdemicyear='$StuAcdemicyear',StuStandard='$StuStandard',StuDiv='$StuDiv',StuDOB='$StuDOB',StuDateOfAdmission='$StuDateOfAdmission',StuParentMobileNumber1='$StuParentMobileNumber1',StuParentMobileNumber2='$StuParentMobileNumber2',StuHouseNo='$StuHouseNo',StuStreetName='$StuStreetName',StuLocation='$StuLocation',StuCity='$StuCity',StuDist='$StuDist',StuBirthPlace='$StuBirthPlace',StuAadharNo='$StuAadharNo',StuCategory='$StuCategory',StuCaste='$StuCaste',StuLastschoolname='$StuLastschoolname',StuBankname='$StuBankname',StuBankACno='$StuBankACno',StuBankIFSCcode='$StuBankIFSCcode',StuStatus='$StuStatus',StuStatusChangedDate='$StuStatusChangedDate' WHERE StuGRNo=$StuGRNo");
	if ($result) {
		echo "Updated";
?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL= ./student-view.php">
<?php

	} else {
		echo "failed";
	}
}

?>