<?php
include "./connectdb.php";
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

	<title></title>

	<link href="../css/app.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function get_data() {

			var checkedValue = "";
			$('input.hide:checkbox:checked').each(function() {
				checkedValue += $(this).val();
			});

			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('poll').innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET", "helper2.php?value=" + checkedValue, true);
			xmlhttp.send();
		}
	</script>

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
					<div class=" mb-3 row">
						<div class="col-sm-12 ml-sm-auto">
							<h1 class="h3 mb-3" style="font-weight: bold;">View Student</h1>
						</div>
						<div class="col-sm-1 ml-sm-auto">
							<a href="xls.php"><button type="sumit" name="test_save" class="btn btn-custom-sm btn-success">Export</button></a>
						</div>
					</div>





				</div>
				<div class="col-70 col-xl-70">
					<div class="card">
						<div class="card-header">

						</div>
						<div class="col-lg-12">

							<div class="button-group">
								<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
								<ul class="dropdown-menu">

									<li><input type="checkbox" class="hide" id="IDNo_col" name="Stu[]" value="StuUIDNo, "> UIDNo</li>
									<li><input type="checkbox" class="hide" id="Name_col" name="Stu[]" value="StuGRNo, "> GRNo</li>
									<li><input type="checkbox" class="hide" id="Name_col" name="Stu[]" value="StuRollNo, "> RollNo</li>

									<li><input type="checkbox" class="hide" id="Designation_col" name="Stu[]" value="StuStudentName, "> Name</li>
									<li><input type="checkbox" class="hide" id="Name_col" name="Stu[]" value="StuAcdemicyear, "> Year</li>
									<li><input type="checkbox" class="hide" id="DOB_col" name="Stu[]" value="StuStandard, "> Standard</li>
									<li><input type="checkbox" class="hide" id="Address1_col" name="Stu[]" value="StuDiv, "> Div</li>
									<li><input type="checkbox" class="hide" id="Address2_col" name="Stu[]" value="StuGender, "> Gender</li>
									<li><input type="checkbox" class="hide" id="State_col" name="Stu[]" value="StuDOB, "> DateOfBirth</li>
									<li><input type="checkbox" class="hide" id="City_col" name="Stu[]" value="StuDateOfAdmission, "> DateOfAdmission</li>
									<li><input type="checkbox" class="hide" id="Pincode_col" name="Stu[]" value="StuParentMobileNumber1, "> Mobile number1</li>
									<li><input type="checkbox" class="hide" id="Contanctno_col" name="Stu[]" value="StuParentMobileNumber2, "> Mobil number2</li>
									<li><input type="checkbox" class="hide" id="Emailid_col" name="Stu[]" value="StuHouseNo,StuStreetName,StuLocation,StuCity,StuDist, "> Address</li>
									<li><input type="checkbox" class="hide" id="Datofleaving_col" name="Stu[]" value="StuBirthPlace, "> BirthPlace</li>

									<li><input type="checkbox" class="hide" id="Datofleaving_col" name="Stu[]" value="StuCategory, "> Category</li>
									<li><input type="checkbox" class="hide" id="Category_col" name="Stu[]" value="StuCaste, "> Caste</li>
									<li><input type="checkbox" class="hide" id="AadharNo_col" name="Stu[]" value="StuLastschoolname, "> LastSchoolName</li>
									<li><input type="checkbox" class="hide" id="PanNo_col" name="Stu[]" value="StuBankname, "> BankName</li>
									<li><input type="checkbox" class="hide" id="PFno_col" name="Stu[]" value="StuBankACno, "> AccountNo</li>
									<li><input type="checkbox" class="hide" id="Status_col" name="Stu[]" value="StuBankIFSCcode, "> IFSCcode</li>
									<li><input type="checkbox" class="hide" id="Laststatuschangedate_col" name="Stu[]" value="StuStatus, "> Status</li>
									<li><input type="checkbox" class="hide" id="BankName_col" name="Stu[]" value="StuStatusChangedDate, "> StatusChangedDate</li>

									<li><button type="submit" class="btn btn-custom-center btn-info" name="get_emp" value="submit" onclick="get_data()">View</button></li>
								</ul>
							</div>
						</div>



						<div class="table-responsive " id="poll">
							<table class="table table-striped" id="myTable">
								<thead class="table table-dark">

									<tr>
										<th>UIDNo</th>
										<th>GRNo</th>
										<th>RollNo</th>
										<th>StudentName</th>
										<th>year</th>
										<th>Standard</th>
										<th>Div</th>
										<th>Gender</th>
										<th>DateOfBirth</th>
										<th>DateOfAdmission</th>
										<th>MobileNo1</th>
										<th>MobileNo2</th>
										<th>Address</th>
										<th>BirthPlace</th>
										<th>AadharNo</th>
										<th>Category</th>
										<th>Caste</th>
										<th>LastSchoolName</th>
										<th>BankName</th>
										<th>BankAccount</th>
										<th> BankIFSC</th>
										<th>Status</th>
										<th>StatusChangeDate</th>
										<th>Document</th>
										<th></th>
										<th></th>

									</tr>
								</thead>
								<tbody>
									<?php

									$sql = "SELECT*FROM studentmaster";
									$data = mysqli_query($conn, $sql);
									$total = mysqli_num_rows($data);

									if ($total != 0) {
										while ($result = mysqli_fetch_assoc($data)) {

											echo "
                           		<tr>
                           		<td>" . $result['StuUIDNo'] . "</td>
                           		<td>" . $result['StuGRNo'] . " </td>
                           		<td>" . $result['StuRollNo'] . " </td>
                           		<td>" . $result['StuStudentName'] . "</td>
                           		<td>" . $result['StuAcdemicyear'] . "</td>
                           		<td>" . $result['StuStandard'] . "</td>
                           		<td>" . $result['StuDiv'] . "</td>
                                <td>" . $result["StuGender"] . "</td>
                                <td>" . $result["StuDOB"] . "</td>
                                <td>" . $result['StuDateOfAdmission'] . "</td>
                                <td>" . $result['StuParentMobileNumber1'] . "</td>
                                <td>" . $result['StuParentMobileNumber2'] . "</td>             
                                <td>" . $result['StuHouseNo'] . "," . $result['StuStreetName'] . "," . $result['StuLocation'] . "," . $result['StuCity'] . "," . $result['StuDist'] . "</td>
                                <td>" . $result['StuBirthPlace'] . "</td>
                                <td>" . $result['StuAadharNo'] . "</td>
                                <td>" . $result['StuCategory'] . "</td>
                                <td>" . $result['StuCaste'] . "</td>
                                <td>" . $result['StuLastschoolname'] . "</td>
                                <td>" . $result['StuBankname'] . "</td>
                                <td>" . $result['StuBankACno'] . "</td>
                                <td>" . $result['StuBankIFSCcode'] . "</td>
                                <td>" . $result['StuStatus'] . "</td>
                                <td>" . $result['StuStatusChangedDate'] . "</td>
                               
                               <td><a href='view.php?StuUIDNo=$result[StuUIDNo]&StuGRNo=$result[StuGRNo]&StuStudentName=$result[StuStudentName]&StuStandard=$result[StuStandard]&StuDiv=$result[StuDiv]&StuGender=$result[StuGender]&StuDOB=$result[StuDOB]&StuDateOfAdmission=$result[StuDateOfAdmission]&StuParentMobileNumber1=$result[StuParentMobileNumber1]&StuParentMobileNumber2=$result[StuParentMobileNumber2]&StuHouseNo=$result[StuHouseNo]&StuStreetName=$result[StuStreetName]&StuLocation=$result[StuLocation]&StuCity=$result[StuCity]&StuDist=$result[StuDist]&StuBirthPlace=$result[StuBirthPlace]&StuAadharNo=$result[StuAadharNo]&StuCategory=$result[StuCategory]&StuCaste=$result[StuCaste]&StuLastschoolname=$result[StuLastschoolname]&StuBankname=$result[StuBankname]&StuBankACno=$result[StuBankACno]&StuBankIFSCcode=$result[StuBankIFSCcode]&StuStatus=$result[StuStatus]&StuStatusChangedDate=$result[StuStatusChangedDate]'><input type='submit' value='View' id='viewebtn' class='btn btn-custom-sm btn-info'></a></td>
                               
                                 <td><a href='update1.php?StuGRNo=$result[StuGRNo]'><input type='submit' value='Update' id='updatebtn' class='btn btn-custom-sm btn-success' onclick='return checkupdate()'></a></td>

                           	  <td><a href='delete1.php?StuUIDNo=$result[StuUIDNo]' onclick='return checkdelete()'><input type='submit' value='Delete' id='deletebtn' class='btn btn-custom-sm btn-danger'></a></td>
                                
                           		</tr>";
										}
									} else {
										echo "No records found";
									}

									?>

								</tbody>
							</table>
						</div>
						<script>
							function checkdelete() {
								return confirm('Are you sure you want to delete this record');
							}
                                                        function checkupdate()
                                                           {
									return confirm('Are you sure you want to Update this record');
								}
						</script>
					</div>
				</div>
			</main>

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
	<script src="../js/app.js">
		function hide_show_table(col_name) {
			var checkbox_val = document.getElementsById(col_name).value;
			if (checkbox_val = "hide") {
				var all_col = document.getElementsByClassName(col_name);
				for (var i = 0; i < all_col.length; i++) {
					all_col[i].style.display = "none";
				}
				document.getElementsById(col_name + "_head").style.display = "none";
				document.getElementsById(col_name).value = "show";
			} else {
				var all_col = document.getElementsByClassName(col_name);
				for (var i = 0; i < all_col.length; i++) {
					all_col[i].style.display = "table-cell";
				}
				document.getElementsById(col_name + "_head").style.display = "none";
				document.getElementsById(col_name).value = "hide";
			}
		}
	</script>
	<script src="../logg.js"></script>

</body>


</html>