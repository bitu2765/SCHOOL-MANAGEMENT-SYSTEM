<?php
include("./connectdb.php");
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
			xmlhttp.open("GET", "helper1.php?value=" + checkedValue, true);
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
							<h1 class="h3 mb-3" style="font-weight: bold;">View Employee</h1>
						</div>
						<div class="col-sm-2 ml-sm-auto">
							<a href="pdf1.php"><button type="sumit" name="test_save" class="btn btn-danger btn-sm">PDF download</button></a>
						</div>
					</div>





				</div>
				<div class="col-50col-xl-50">
					<div class="card">
						<div class="card-header">

						</div>

						<div class="col-lg-12">
							<div class="button-group">
								<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<form action="temev.php" method="get">
										<li><input type="checkbox" class="hide" id="IDNo_col" checked name="EmpNo" style="margin-left: 5px;" onclick="return false"> ID No</li>
										<li><input type="checkbox" class="hide" id="Name_col" name="EmpName" style="margin-left: 5px;"> Name</li>
										<li><input type="checkbox" class="hide" id="Designation_col" name="EmpDesignation" style="margin-left: 5px;"> Designation</li>
										<li><input type="checkbox" class="hide" id="Designation_col" name="EmpGender" style="margin-left: 5px;"> Gender</li>
										<li><input type="checkbox" class="hide" id="DOB_col" name="EmpDOB" style="margin-left: 5px;"> DOB</li>
										<li><input type="checkbox" class="hide" id="Address1_col" name="EmpAddress1" style="margin-left: 5px;"> Address1</li>
										<li><input type="checkbox" class="hide" id="Address2_col" name="EmpAddress2" style="margin-left: 5px;"> Address2</li>
										<!-- <li><input type="checkbox" class="hide" id="State_col" name="EmpState, ">State</li> -->
										<!-- <li><input type="checkbox" class="hide" id="City_col" name="EmpCity, ">City</li> -->
										<!-- <li><input type="checkbox" class="hide" id="Pincode_col" name="EmpPinCode, ">Pincode</li> -->
										<li><input type="checkbox" class="hide" id="Contanctno_col" name="EmpContactNo" style="margin-left: 5px;"> Contanct No</li>
										<li><input type="checkbox" class="hide" id="Emailid_col" name="EmpEmail" style="margin-left: 5px;"> Email Id</li>
										<li><input type="checkbox" class="hide" id="Datofleaving_col" name="EmpDateofLeaving" style="margin-left: 5px;"> Date Of Leaving</li>
										<li><input type="checkbox" class="hide" id="Category_col" name="EmpCategory" style="margin-left: 5px;"> Category</li>
										<li><input type="checkbox" class="hide" id="AadharNo_col" name="EmpAadharNo" style="margin-left: 5px;"> Aadhar No</li>
										<li><input type="checkbox" class="hide" id="PanNo_col" name="EmpPan" style="margin-left: 5px;"> Pan No</li>
										<li><input type="checkbox" class="hide" id="PFno_col" name="EmpPFno" style="margin-left: 5px;"> PF No</li>
										<li><input type="checkbox" class="hide" id="Status_col" name="EmpStatus" style="margin-left: 5px;"> Status</li>
										<li><input type="checkbox" class="hide" id="Laststatuschangedate_col" name="EmpLastStatusChangeDate" style="margin-left: 5px;"> Last Status Change Date </li>
										<li><input type="checkbox" class="hide" id="BankName_col" name="EmpBankName" style="margin-left: 5px;"> Bank Name</li>
										<li><input type="checkbox" class="hide" id="Accountno_col" name="EmpBankAccount" style="margin-left: 5px;"> Account No</li>
										<li><input type="checkbox" class="hide" id="IFSCNo_col" name="EmpBankIFSC" style="margin-left: 5px;"> IFSC No</li>
										<li><button type="submit" class="btn btn-outline-info">View</button></li>
									</form>
								</ul>
							</div>
						</div>

						<div class="mb-1 row">
							<div class="col-sm-1 ml-sm-auto">
								<a href="Employee.php"><input type="submit" value="Add" id="Addbtn" class="btn btn-success btn-LG" name=""></a>
							</div>
						</div>

						<div class="table-responsive" id="poll">
							<table class="table table-striped" id="myTable">
								<thead class="table table-dark">

									<tr>
										<th>IDNo</th>
										<th>EmployeeFullName</th>
										<th>Designation</th>
										<th>Gender</th>
										<th>DateOfBirth</th>
										<th>Address1</th>
										<th>Address2</th>
										<th>state</th>
										<th>City</th>
										<th>Pincode</th>
										<th>Contactno</th>
										<th>Emailid</th>
										<th>Dateofleaving</th>
										<th>Category</th>
										<th>AadharNo</th>
										<th>PanNo</th>
										<th>PFno</th>
										<th>Status</th>
										<th style="width:170px">LastStatuschangedate</th>
										<th>BankName</th>
										<th style="width:100px">BankAccount</th>
										<th style="width:50px"> BankIFSC</th>

										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT*FROM employeemaster";
									$data = mysqli_query($conn, $sql);
									$total = mysqli_num_rows($data);
									if ($total != 0) {
										while ($result = mysqli_fetch_assoc($data)) {
											echo "
                           		<tr>
                           		<td>" . $result['EmpNo'] . "</td>
                           		<td>" . $result['EmpNamePrefix'] . " " . $result['EmpFirstName'] . " " . $result['EmpMidName'] . " " . $result['EmpLastName'] . "</td>
                           		<td>" . $result['EmpDesignation'] . "</td>
                           		<td>" . $result['EmpGender'] . "</td>
                           		<td>" . $result['EmpDOB'] . "</td>
                           		<td>" . $result['EmpAddress1'] . "</td>
                                <td>" . $result["EmpAddress2"] . "</td>
                                <td>" . $result["EmpState"] . "</td>
                                <td> " . $result["EmpCity"] . "</td>
                                <td> " . $result["EmpPinCode"] . "</td>
                                <td> " . $result["EmpContactNo"] . "</td>             
                                <td> " . $result["EmpEmailID"] . "</td>
                                <td> " . $result["EmpDateofLeaving"] . "</td>
                                <td> " . $result["EmpCategory"] . "</td>
                                <td> " . $result["EmpAadharNo"] . "</td>
                                <td> " . $result["EmpPan"] . "</td>
                                <td> " . $result["EmpPFno"] . "</td>
                                <td> " . $result["EmpStatus"] . "</td>
                                <td> " . $result["EmpLastStatusChangeDate"] . "</td>
                                <td> " . $result["EmpBankName"] . "</td>
                                <td> " . $result["EmpBankAccount"] . "</td>
                                <td> " . $result["EmpBankIFSC"] . "</td>
                                
                           		
                           		<th><a href='update.php?EmpNo=$result[EmpNo]&EmpNamePrefix=$result[EmpNamePrefix]&EmpFirstName=$result[EmpFirstName]&EmpMidName=$result[EmpMidName]&EmpLastName=$result[EmpLastName]&EmpDesignation=$result[EmpDesignation]&EmpDOB=$result[EmpDOB]&EmpAddress1=$result[EmpAddress1]&EmpAddress2=$result[EmpAddress2]&EmpState=$result[EmpState]&EmpCity=$result[EmpCity]&EmpPinCode=$result[EmpPinCode]&EmpContactNo=$result[EmpContactNo]&EmpEmailID=$result[EmpEmailID]&EmpDateofLeaving=$result[EmpDateofLeaving]&EmpCategory=$result[EmpCategory]&EmpAadharNo=$result[EmpAadharNo]&EmpPan=$result[EmpPan]&EmpPFno=$result[EmpPFno]&EmpStatus=$result[EmpStatus]&EmpLastStatusChangeDate=$result[EmpLastStatusChangeDate]&EmpBankName=$result[EmpBankName]&EmpBankAccount=$result[EmpBankAccount]&EmpBankIFSC=$result[EmpBankIFSC]'><input type='submit' value='Edit' id='updatebtn' class='btn btn-success btn-lg'></a></th>
                           		<th><a href='delete.php?EmpNo=$result[EmpNo]' onclick='return checkdelete()'><input type='submit' value='delete' id='deletebtn' class=' btn btn-danger btn-lg'></a></th>
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
						</script>
					</div>
				</div>
			</main>

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
	<script src="../js/indapp.js"></script>
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
	<script src="../logg.js" ></script>

</body>


</html>