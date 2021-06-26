<?php
error_reporting(0);
include("./connectdb.php");
$error = "";
if (isset($_POST{
	'test_save'})) {
	$StuUIDNo = $_POST['StuUIDNo'];
	$StuGRNo = $_POST['StuGRNo'];
	$StuRollNo = $_POST['StuRollNo'];
	$Stuprefix = $_POST['Stuprefix'];
	$StuStudentName = strtoupper($_POST['StuStudentName']);
	$Stumiddle = strtoupper($_POST['Stumiddle']);
	$StuLastname = strtoupper($_POST['StuLastname']);
	$StuAcdemicyear = $_POST['StuAcdemicyear'];
	$StuStandard = $_POST['StuStandard'];
	$StuDiv = $_POST['StuDiv'];
	$StuGender = strtoupper($_POST['StuGender']) ?? "";
	$StuDOB = $_POST['StuDOB'];
	$StuDateOfAdmission = $_POST['StuDateOfAdmission'];
	if (empty($StuParentMobileNumber1 = $_POST['StuParentMobileNumber1'])) {
		$error = "please enter mobile number";
	} elseif (strlen($_POST['StuParentMobileNumber1']) < 10) {
		$error = "moblile number should be of 10 digit";
	}

	if (empty($StuParentMobileNumber2 = $_POST['StuParentMobileNumber2'])) {
		$error = "please enter mobile number";
	} elseif (strlen($_POST['StuParentMobileNumber2']) < 10) {
		$error = "moblile number should be of 10 digit";
	}
	$StuParentMobileNumber2 = $_POST['StuParentMobileNumber2'];
	$StuHouseNo = $_POST['StuHouseNo'];
	$StuStreetName = strtoupper($_POST['StuStreetName']);
	$StuLocation = strtoupper($_POST['StuLocation']);
	$StuCity = strtoupper($_POST['StuCity']);
	$StuDist = strtoupper($_POST['StuDist']);
	$StuBirthPlace = strtoupper($_POST['StuBirthPlace']);
	$StuAadharNo = $_POST['StuAadharNo'];
	$StuCategory = $_POST['StuCategory'];
	$StuCaste = strtoupper($_POST['StuCaste']);
	$StuLastschoolname = strtoupper($_POST['StuLastschoolname']);
	$StuBankname = strtoupper($_POST['StuBankname']);
	$StuBankACno = $_POST['StuBankACno'] ?? "";
	$StuBankIFSCcode = $_POST['StuBankIFSCcode'];
	$StuStatus = strtoupper($_POST['StuStatus']);
	$StuStatusChangedDate = $_POST['StuStatusChangedDate'];

	$info = pathinfo($_FILES['file']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "$StuGRNo." . $ext;
	$name1 = "1_." . $newname;

	$target = "upload/" . $name1;
	move_uploaded_file($_FILES['file']['tmp_name'], $target);

	$info = pathinfo($_FILES['filename']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "$StuGRNo." . $ext;
	$name2 = "2_." . $newname;

	$target = "upload/" . $name2;
	move_uploaded_file($_FILES['filename']['tmp_name'], $target);

	$info = pathinfo($_FILES['uploadfile']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "$StuGRNo." . $ext;
	$name3 = "3_." . $newname;

	$target = "upload/" . $name3;
	move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target);

	$info = pathinfo($_FILES['uploadfilename']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "$StuGRNo." . $ext;
	$name4 = "4_." . $newname;

	$target = "upload/" . $name4;
	move_uploaded_file($_FILES['uploadfilename']['tmp_name'], $target);





	$sql = "INSERT INTO `studentmaster` values(NOW(),'$StuUIDNo','$StuGRNo','$StuRollNo','$Stuprefix','$StuStudentName','$Stumiddle','$StuLastname','$StuAcdemicyear',
	'$StuStandard','$StuDiv','$StuGender','$StuDOB','$StuDateOfAdmission','$StuParentMobileNumber1',
	'$StuParentMobileNumber2','$StuHouseNo','$StuStreetName','$StuLocation','$StuCity','$StuDist','$StuBirthPlace','$StuAadharNo','$StuCategory','$StuCaste',
    '$StuLastschoolname','$StuBankname','$StuBankACno','$StuBankIFSCcode','$StuStatus','$StuStatusChangedDate','$name1','$name2','$name3','$name4')";

	$res = mysqli_query($conn, $sql);
	if ($res) {
		echo "<script>alert('Data Inserted successfully...!!');</script>";
		$query2 = "INSERT INTO `tbfeesmaster`(`FeesStudentName`, `FeesStudentRollNo`, `FeesStudentGRNo`, `FeesStuDateOfAdmission`, `FeesStuParentMoNo`, `FeesAcademicYear`, `FeesStandard`, `FeesDivison`, `FeesJanuary`, `FeesFebruary`, `FeesMarch`, `FeesApril`, `FeesMay`, `FeesJune`, `FeesJuly`, `FeesAugust`, `FeesSeptember`, `FeesOctomber`, `FeesNovember`, `FeesDecember`, `FeesAnnual`, `FeesPaid`, `FeesDue`)";
		$query2 .= " SELECT x.StuStudentName,x.StuRollNo,x.StuGRNo,x.StuDateOfAdmission,x.StuParentMobileNumber1,x.StuAcdemicyear,x.StuStandard,x.StuDiv,'0','0','0','0','0','0','0','0','0','0','0','0',y.AnnualFees,'0',y.AnnualFees  FROM studentmaster x INNER JOIN tbfeessetmaster y ON X.StuGRNo = '" . $StuGRNo . "' AND y.AcademicYear ='" . $StuAcdemicyear . "' AND y.standard = '" . $StuStandard . "'"; // AND x.StuAcdemicYear = '" . $_POST["cay"] . "' AND x.StuStandard = '" . $_POST["cstd"] . "' AND x.StuStatus = 'ACTIVE'; ";
		if ($conn->query($query2)) {
		}
	} else {
		echo "<script>alert('something went wrong!!...!!');</script>";
	}
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

	<title>Add Student</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link href="../css/app.css" rel="stylesheet">
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
							<li class="sidebar-item  active"><a class="sidebar-link" href="../student/Student.php">Add</a></li>
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

					<h1 class="h3 mb-3" style="font-weight: bold;">Add Student</h1>


				</div>
				<div class="col-12 col-xl-10">
					<div class="card">
						<div class="card-header">


						</div>
						<div class="card-body">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return validation()">
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">UID No</label>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuUIDNo" placeholder="" required>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">GR No</label>
									<div class="col-sm-3">
										<input type="number" class="form-control" name="StuGRNo" placeholder="" required>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Roll No</label>
									<div class="col-sm-3">
										<input type="number" class="form-control" name="StuRollNo" placeholder="" required>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Name</label>
									<div class="col-sm-1">
										<select class="form-control" name="Stuprefix">
											<option>MRS.</option>
											<option>MR.</option>
											<option>MISS.</option>
											<option>MS.</option>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="StuStudentName" placeholder="FirstName" required>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="Stumiddle" placeholder="MiddelName" required>
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="StuLastname" placeholder="LastName" required>
									</div>

								</div>


								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Year</label>

									<div class="col-sm-2">
										<select name="StuAcdemicyear" required="" class="form-control">
											<option value="">--Select Academic Year--</option>
											<?php $c1 = "SELECT DISTINCT Value FROM listmaster WHERE Parameter = 'AcadmicYear' ORDER BY Value DESC;";
											$result = $conn->query($c1);
											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) { ?>
													<option value="<?php echo $row['Value']; ?>"><?php echo $row['Value']; ?>
													</option>
											<?php }
											} ?>
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Standard</label>
									<div class="col-sm-2">

										<select name="StuStandard" required="" class="form-control" id="standard">
											<option value="">--Select Standard--</option>

											<?php $a2 = "SELECT `Value` FROM listmaster WHERE Parameter IN  ('Standard');";
											$res = $conn->query($a2);
											if ($res->num_rows > 0) {
												while ($row = $res->fetch_assoc()) { ?>
													<option value="<?php echo $row['Value']; ?>">
														<?php echo $row['Value']; ?></option>
											<?php }
											} ?>
										</select>


									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Div</label>
									<div class="col-sm-2">
										<select name="StuDiv" required="" id="selDiv" class="form-control">
											<option value="">--Select Division--</option>
											<?php $m4 = "SELECT `Value` FROM listmaster WHERE Parameter IN  ('Division')";
											$result3 = $conn->query($m4);
											if ($result3->num_rows > 0) {
												while ($row = $result3->fetch_assoc()) { ?>
													<option value="<?php echo $row['Value']; ?>">
														<?php echo $row['Value']; ?>
													</option>
											<?php }
											} ?>
										</select>
									</div>
								</div>



								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right pt-sm-0" style="font-weight: bold;">Gender</label>
									<div class="col-sm-10">

										<input type="radio" value="Male" name="StuGender" style="margin-left:5px; ">Male
										<input type="radio" value="Female" name="StuGender" style="margin-left:5px; ">Female

									</div>

								</div>



								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date Of Birth</label>
									<div class="col-sm-4">

										<input type="date" class="form-control" name="StuDOB" required style="font-weight: bold;">

									</div>
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Admission Date</label>
									<div class="col-sm-4">

										<input type="date" class="form-control" name="StuDateOfAdmission" required style="font-weight: bold;">

									</div>
								</div>


								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Mobile No</label>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuParentMobileNumber1" placeholder="primary No" id="mobile1" autocomplete="off">
										<span id="mobile" class="text-danger font-weight-bold"></span>
									</div>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuParentMobileNumber2" id="mobile2" placeholder="Secondary No" autocomplete="off">
										<span id="mo" class="text-danger font-weight-bold"></span>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Address</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="StuHouseNo" placeholder="House No">
									</div>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder="Street Name" name="StuStreetName">
									</div>

								</div>
								<div class="mb-3 row">

									<div class="col-sm-4 ml-sm-auto">
										<input type="text" class="form-control" placeholder="Location" name="StuLocation">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="City" name="StuCity">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="Dist" name="StuDist">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Birth Place</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="StuBirthPlace" placeholder="">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Aadhar No</label>
									<div class="col-sm-4">
										<input type="number" class="form-control" name="StuAadharNo" placeholder="" id="aadharNo" required>
										<span id="Aadhar" class="text-danger font-weight-bold"></span>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Category</label>
									<div class="col-sm-4">
										<select class="form-control" name="StuCategory">
											<option class="form-check">GENERAL</option>
											<option class="form-check">OBC</option>
											<option class="form-check">SC</option>
											<option class="form-check">ST</option>
										</select>

									</div>
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Caste</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="StuCaste" placeholder="">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Last School Name</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="StuLastschoolname" placeholder="">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Bank Details</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="StuBankname" placeholder="Bank Name">
									</div>
									<div class="col-sm-3">
										<input type="number" class="form-control" name="StuBankACno" placeholder="A/c No">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="StuBankIFSCcode" placeholder="IFSC Code">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Status</label>
									<div class="col-sm-4">
										<select class="form-control" name="StuStatus">
											<option>ACTIVE</option>
											<option>LEFT</option>
											<option>PASSED OUT</option>
											<option>TRANSFER</option>
										</select>
									</div>


									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Status Changed Date</label>
									<div class="col-sm-4">


										<input type="date" class="form-control" name="StuStatusChangedDate" style="font-weight: bold;" required>


									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Upload Document (Last Standard Marksheet)</label>
									<div class="col-sm-5">
										<input type="file" name="file" class="form-control" required>


									</div>


								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Upload Document (LC)</label>
									<div class="col-sm-5">
										<input type="file" name="filename" class="form-control">


									</div>

								</div>

								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Upload Document (Aadhar Card)</label>
									<div class="col-sm-5">
										<input type="file" name="uploadfile" class="form-control" required>


									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Upload Document (Bank PassBook)</label>
									<div class="col-sm-5">
										<input type="file" name="uploadfilename" class="form-control" required>


									</div>
								</div>

								<div class="mb-3 row">
									<div class="col-sm-10 ml-sm-auto">
										<input type="submit" class="btn btn-custom-sm btn-success" name="test_save" id="submitbtn" value="Save">
										<input type="submit" class="btn btn-custom-sm btn-danger" name="Reset" value="Reset" onclick="window.location.href='student.php'">

									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</main>
			<!-- </div> -->



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
	<script src="../js/app.js"></script>
	<script src="../js/indapp.js"></script>
	<script type="text/javascript">
		function validation() {
			var mobile1 = document.getElementById('mobile1').value;
			var mobile2 = document.getElementById('mobile2').value;
			var AadharNo = document.getElementById('aadharNo').value;

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