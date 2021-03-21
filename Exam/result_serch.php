<?php  
     include 'connection.php';
 
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/_custom.css">
    <!-- <link href="css/gapi.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/stylefees.css">
    <link rel="stylesheet" href="css/ui_d.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>

    Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->

    <title></title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
        <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <span width="30px">&nbsp;</span>
                    <img src="../logo.png" alt="logo" srcset="" height="90px">
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
                        Academic
                    </li>

                    <li class="sidebar-item ">
                        <a href="#addsubject" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Subject Managment</span>
                        </a>
                        <ul id="addsubject" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item "><a class="sidebar-link" href="../Exam/add_sub.php">Add Subject</a></li>
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
                    <li class="sidebar-item active">
                        <a href="#resultmaster" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle"></i> <span class="align-middle">Result Managment</span>
                        </a>
                        <ul id="resultmaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_entry.php">Result Entry</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="../Exam/genrate.php">Result Data</a>
                            </li>
                            <li class="sidebar-item active"><a class="sidebar-link" href="../Exam/result_serch.php">Check For Result</a>
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
                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><strong>SERACH</strong>&nbspRESULT</h3>
                        </div>
                        <div class="container mt-5 ">
                            <div class="cont">
                            <?php
                                 if(isset($_GET['Message'])){
                                         echo $_GET['Message'];
                            }
                            ?>
                                <form action="marksheet.php" method="post">
                                    <div class="mb-3">
                                        <b>Academic Year</b>
                                        <select name="search_Year" class="form-control" required="">
                                            <option value="">--Select AcademicYear--</option>
                                            <?php  $m1="SELECT DISTINCT`ResAcademicYear` FROM `resultmaster`ORDER BY ResAcademicYear ASC";
                                                $results2 = $conn->query($m1);
                                                if ($results2->num_rows > 0) {
                                                    while($row = $results2->fetch_assoc()){ ?>
                                            <option value="<?php echo $row['ResAcademicYear'];?>">
                                                <?php echo $row['ResAcademicYear'];?>
                                            </option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <b> Standard</b>
                                        <select name="search_Std" id="Estd" required="" class="form-control">
                                            <option value="">--Select Standard--</option>
                                            <?php  $m3="SELECT DISTINCT `ResStandard` FROM `resultmaster`ORDER BY ResStandard ASC";
                                                $results1 = $conn->query($m3);
                                                if ($results1->num_rows > 0) {
                                                    while($row = $results1->fetch_assoc()){ ?>
                                            <option value="<?php echo $row['ResStandard'];?>">
                                                <?php echo $row['ResStandard'];?></option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <b>Exam Name</b>
                                        <select name="search_Exam" id="Estd" required="" class="form-control">
                                            <option value="">--Select Exam--</option>
                                            <?php  $m2="SELECT DISTINCT `ResExamName` FROM `resultmaster`ORDER BY ResExamName ASC";
                                                $results1 = $conn->query($m2);
                                                if ($results1->num_rows > 0) {
                                                    while($row = $results1->fetch_assoc()){ ?>
                                            <option value="<?php echo $row['ResExamName'];?>">
                                                <?php echo $row['ResExamName'];?></option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <b>Division</b>
                                        <select name="search_Div" required="" id="Selstd" class="form-control">
                                            <option value="">--Select Division--</option>
                                            <?php  $m4="SELECT DISTINCT`ResDivision` FROM `resultmaster`ORDER BY ResDivision ASC";
                                                $result3 = $conn->query($m4);
                                                if ($result3->num_rows > 0) {
                                                    while($row = $result3->fetch_assoc()){ ?>
                                            <option value="<?php echo $row['ResDivision'];?>">
                                                <?php echo $row['ResDivision'];?></option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <b>Roll No</b>
                                        <input type="number" name="search_Roll" required="" class="form-control"
                                            id="totalmarks" placeholder="Roll No">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">Show MarkSheet</button>

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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
    <script src="js/indapp.js"></script>
    <script src="addpay.js"></script>
    <script>
            document.getElementById("logout").onclick = function(){
                var l =window.history.length-2;
                window.history.go(l-2*l);
            }
        </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>