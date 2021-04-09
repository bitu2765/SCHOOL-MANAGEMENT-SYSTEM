<?php
//error_reporting(0);
include("./connectdb.php");

$error = "";
if (isset($_POST{
	'test_save'})) {
	$EmpNo = $_POST['EmpNo'];
	$EmpNamePrefix = strtoupper($_POST['EmpNamePrefix']);
	$EmpFirstName = strtoupper($_POST['EmpFirstName']);
	$EmpMidName = strtoupper($_POST['EmpMidName']);
	$EmpLastName = strtoupper($_POST['EmpLastName']);
	$EmpDesignation = strtoupper($_POST['EmpDesignation']);
	$EmpGender = strtoupper($_POST['EmpGender']);
	$EmpDOB = $_POST['EmpDOB'];
	$EmpAddress1 = strtoupper($_POST['EmpAddress1']);
	$EmpAddress2 = strtoupper($_POST['EmpAddress2']);
	$EmpState = strtoupper($_POST['EmpState']);
	$EmpCity = strtoupper($_POST['EmpCity']);
	$EmpPinCode = $_POST['EmpPinCode'];
	if (empty($EmpContactNo = $_POST['EmpContactNo'])) {
		$error = "please enter mobile number";
	} elseif (strlen($_POST['EmpContactNo']) < 10) {
		$error = "moblile number should be of 10 digit";
	}
	$EmpEmailID = $_POST['EmpEmailID'];
        $EmpDateofjoining=$_POST['EmpDateofjoining'];
	$EmpDateofLeaving = $_POST['EmpDateofLeaving'];
	$EmpCategory = strtoupper($_POST['EmpCategory']);
	$EmpAadharNo = $_POST['EmpAadharNo'];
	$EmpPan = $_POST['EmpPan'];
	$EmpPFno = $_POST['EmpPFno'];
	$EmpStatus = strtoupper($_POST['EmpStatus']);
	$EmpLastStatusChangeDate = $_POST['EmpLastStatusChangeDate'];
	$EmpBankName = strtoupper($_POST['EmpBankName']);
	$EmpBankAccount = $_POST['EmpBankAccount'];
	$EmpBankIFSC = $_POST['EmpBankIFSC'];

	$sql = " INSERT INTO `employeemaster` values('$EmpNo','$EmpNamePrefix','$EmpFirstName','$EmpMidName','$EmpLastName', '$EmpDesignation','$EmpGender','$EmpDOB','$EmpAddress1', 
          '$EmpAddress2', '$EmpState', '$EmpCity',$EmpPinCode,$EmpContactNo, '$EmpEmailID','$EmpDateofjoining',  '$EmpDateofLeaving', '$EmpCategory','$EmpAadharNo', '$EmpPan', '$EmpPFno', '$EmpStatus', '$EmpLastStatusChangeDate', '$EmpBankName', '$EmpBankAccount', '$EmpBankIFSC')";

	$res = mysqli_query($conn, $sql);
	if ($res) {
		echo "<script>alert('Data Inserted successfully...!!');</script>";
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

	<title>Form Layouts | AdminKit Demo</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" style="text-align: center;" >
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
							<li class="sidebar-item active"><a class="sidebar-link" href="../employee/Employee.php">Add</a></li>
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

					<h1 class="h3 mb-3" style="font-weight: bold;">Add Employee</h1>


				</div>
				<div class="col-12 col-xl-12">
					<div class="card">
						<div class="card-header">
							<!-- now try  -->
						</div>
						<div class="card-body">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validation()">
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Employee No</label>
											<div class="col-sm-5">
												<input type="number" class="form-control input-sm" name="EmpNo" placeholder="" required>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Name</label>
											<div class="col-sm-1">
												<select class="form-control" name="EmpNamePrefix">
													<option>Mrs.</option>
													<option>Mr.</option>
													<option>Miss.</option>
													<option>Ms.</option>
												</select>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control"
												name="EmpFirstName" placeholder="FirstName"  required>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control"
												name="EmpMidName" placeholder="MiddelName" required>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control"
												name="EmpLastName" placeholder="LastName" required>
											</div>
										</div>
										
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Designation</label>
											<div class="col-sm-2">
												<select name="EmpDesignation" class="form-control">
													<option></option>
													<option>PRINCIPAL</option>
													<option>CLERK</option>
													<option>ASSISTANT TEACHER</option>
													<option>TEACHER</option>
													<option>ASSISTANT TEACHER ON PROBATION</option>
													<option>LIBRARIAN</option>
													<option>PEON</option>
													<option>OTHER</option>
													
												</select>
											</div>
										</div>
							
								<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right pt-sm-0" style="font-weight: bold;">Gender</label>
								<div class="col-sm-10">
													
                                     <input type="radio" value ="Male" name="EmpGender"><label class="form-check-label" style="margin-left:5px; ">Male</label>
                                      <input type="radio" value="Female" name="EmpGender"><label class="form-check-label" style="margin-left:5px; ">Female</label>
                                      <input type="radio" value="Other" name="EmpGender"><label class="form-check-label" style="margin-left:5px; ">Other</label>
                                 </div>
                   
								</div>
							
							
								<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date Of Birth</label>
											<div class="col-sm-4">
												<input type="date" name="EmpDOB" class="form-control" style="font-weight:bold;" required>
                                         <!-- <form action="https://example.com">
                                                    <input type="date" class="form-control" name="EmpDOB">
                                         </form> -->
											</div>
										</div>
										
										 
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Address1</label>
											<div class="col-sm-6">
												<input type="text" class="form-control"
												name="EmpAddress1" placeholder="" required>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Address2</label>
											<div class="col-sm-6">
												<input type="text" class="form-control"
												name="EmpAddress2" placeholder="">
											</div>
										</div>
										
                                          <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">City</label>
											<div class="col-sm-5">
												<input type="text" name="EmpCity" class="form-control" placeholder="" required>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">State</label>
											<div class="col-sm-5">
												<input type="text" name="EmpState" class="form-control" required>
											</div>
										</div>
										 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Pin Code</label>
											<div class="col-sm-5">
												<input type="number" class="form-control"
												name="EmpPinCode" placeholder="" id="pin" autocomplete="off" required>
												<span id="pincode" class="text-danger font-weight-bold"></span>
											</div>
										</div>
										 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Contact No</label>
											<div class="col-sm-5">
												<input type="number" class="form-control"
												name="EmpContactNo" id="mobile1" placeholder="" 
												autocomplete="off" required>
												
												<span id="mobile" class="text-danger font-weight-bold"></span>
											</div>
										</div>
										 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Email</label>
											<div class="col-sm-5">
												<input type="email" class="form-control" name="EmpEmailID" id="emailID" placeholder="" autocomplete="off" required>
												<span id="EmailID1" class="text-danger font-weight-bold"></span>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date of joining</label>
											<div class="col-sm-4">
                                         <!-- <form action="https://example.com"> -->
                                                    <input type="date" class="form-control " name="EmpDateofjoining" style="font-weight:bold;">
                                         <!-- </form> -->
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Date of Leaving</label>
											<div class="col-sm-4">
                                         <!-- <form action="https://example.com"> -->
                                                    <input type="date" class="form-control " name="EmpDateofLeaving" style="font-weight:bold;">
                                         <!-- </form> -->
											</div>
										</div>
										 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Category</label>
											<div class="col-sm-5">
												<select name="EmpCategory" class="form-control" >
													<option></option>
													<option>OPEN</option>
													<option>OBC</option>
													<option>SC</option>
													<option>ST</option>
                                                 </select>
											</div>
										</div>
									
											 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Aadhar Card No</label>
											<div class="col-sm-5">
												<input type="text" name="EmpAadharNo" class="form-control" id="aadhar" autocomplete="off" placeholder="">
												<span id="AadharNo" class="text-danger font-weight-bold"></span>
											</div>
										</div>
											 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Pan Card No</label>
											<div class="col-sm-5">
												<input type="number" name="EmpPan" class="form-control" placeholder="" id="pan" autocomplete="off" required>
												<span id="panno" class="text-danger font-weight-bold"></span>
											</div>
										</div>
											 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Phone No</label>
											<div class="col-sm-5">
												<input type="text" name="EmpPFno" class="form-control" placeholder="" required>
											</div>
										</div>
											 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Status</label>
											<div class="col-sm-5">
												<select name="EmpStatus" class="form-control" required>
													<option></option>
													<option>ACTIVE</option>
													<option>RESIGNED</option>
													<option>RETIRED</option>
												</select>
											</div>
										</div>
											 <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Last Status Change Date</label>
											<div class="col-sm-4">
												<input type="date" name="EmpLastStatusChangeDate" class="form-control" style="font-weight:bold;" placeholder="">
											</div>
										</div>
											<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right" style="font-weight: bold;">Bank Details</label>
											<div class="col-sm-3">
												<input type="text" name="EmpBankName" class="form-control" placeholder="Bank Name" required>
											</div>
											<div class="col-sm-3">
												<input type="number" name="EmpBankAccount" class="form-control" placeholder="A/c No">
											</div>
											<div class="col-sm-3">
												<input type="text" name="EmpBankIFSC" class="form-control  " placeholder="IFSC Code" required>
											</div>
										</div>
										
										
										<div class="mb-3 row">
											<div class="col-sm-10 ml-sm-auto">
                                          
                        <input type="submit" class="btn btn-success" name="test_save" id="submitbtn" value="Save">

                       
                   
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
									<a href="index.html" class="text-muted"><strong>SZ Vaghela High School</strong></a> &copy;
								</p>
							</div>
						</div>
					</div>
				</footer>
		</div>
	</div>

	<script src="../js/app.js"></script>
	<script src="../js/indapp.js"></script>
	<script src="../logg.js"></script>
<script type="text/javascript">
		function validation()
		{
		
			var pin = document.getElementById('pin').value;
			var mobile1 = document.getElementById('mobile1').value;
			var EmailID=document.getElementById('EmailID').value;
			var aadhar = document.getElementById('aadhar').value;
			var pan =document.getElementById('pan').value;

			

			

			
			 if (pin == "") 
			{
                    document.getElementById('pincode').innerHTML="**please fill the pincode";
                    return false;
			}
			if (pin.length<6)
			 {
			 	document.getElementById('pincode').innerHTML="**number must be 6 digit";
                    return false;
			 }
			 if (pin.length>6)
			 {
			 	document.getElementById('pincode').innerHTML="**number must be 6 digit";
                    return false;
			 }


			if (mobile1 == "") 
			{
                    document.getElementById('mobile').innerHTML="**please fill the mobile no";
                    return false;
			}
			if (mobile1.length<10)
			 {
			 	document.getElementById('mobile').innerHTML="**number must be 10 digit";
                    return false;
			 }
			 if (mobile1.length>10)
			 {
			 	document.getElementById('mobile').innerHTML="**number must be 10 digit";
                    return false;
			 }
			 if((mobile1.charAt()!=9) && (mobile1.charAt()!=8) && (mobile1.charAt()!=6) )
			 {
                  document.getElementById('mobile').innerHTML="**number start must be 9,8 and 6";
                    return false;
			 }
			 if (emailID == "")
			  {
			  	document.getElementById('EmailID1').innerHTML="**please fill the EmailID";
			  	return false;
			  }
			  if (emailID.indexof('@') <= 0) {
			  	document.getElementById('EmailID1').innerHTML="**please fill the email id proper format @";
			  	return false;
			  }
			  if ((emailID.charAt(emailID.length-4)!='.') && (emailID.charAt(emailID.length-3)!='.'))  {
			  	document.getElementById('EmailID1').innerHTML="please fill the email id proper format .";
			  	return false;
			  }
            if (aadhar == "") 
			{
                    document.getElementById('AadharNo').innerHTML="**please fill the Aadhar no";
                    return false;
			}
			if (aadhar.length<12)
			 {
			 	document.getElementById('AadharNo').innerHTML="**number must be 12 digit";
                    return false;
			 }
			 if (aadhar.length>12)
			 {
			 	document.getElementById('AadharNo').innerHTML="**number must be 12 digit";
                    return false;
			 }
			 if(pan == "")
			 {
			 	document.getElementById('panno').innerHTML="**please file the filed";
			 	return false;
			 }
			  if(pan.length>10)
			 {
			 	document.getElementById('panno').innerHTML="**number must be 10 digit";
			 	return false;
			 }
			 if(pan.length<10)
			 {
			 	document.getElementById('panno').innerHTML="****number must be 10 digit";
			 	return false;
			 }


            

			 
		}
		
			
			
			
			

	</script>
</body>

</html>

</html>