
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
    .myLogo {
        display: inline;
        float: left;
        margin-left: 10px;
        margin-top: 30px;
        content: url("logo1.png");
    }

    .myheadings {
        white-space: nowrap;
        display: inline;
        float: right;
        margin-top: 20px;
        margin-right: 30px;
    }

    .header {
        display: inline-block;
        width: 100%;
        clear: both;
    }

    .first {
        font-size: 2rem;
    }

    .secound {
        font-size: 4rem;
    }

    .third {
        font-size: 1rem;
    }
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/app.css">
    <link href="css/gapi.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/stylefees.css">
    <link rel="stylesheet" href="css/ui_d.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

                <!-- <ul class="sidebar-nav">
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
                    </li> -->
<!-- 
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
                        <li class="sidebar-item"><a class="sidebar-link" href="../Exam/exam_create.php">Create Exam</a>
                        </li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Exam/view_exam.php">View Exam</a></li>
                    </ul>
                </li>
                <li class="sidebar-item ">
                    <a href="#resultmaster" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle"></i> <span class="align-middle">Result Managment</span>
                    </a>
                    <ul id="resultmaster" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_entry.php">Result
                                Entry</a>
                        </li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Exam/genrate.php">Result Data</a>
                        </li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_serch.php">Generate
                                MarkSheet</a>
                        </li>
                        <li class="sidebar-item"><a class="sidebar-link" href="../Exam/result_declare.php">Declare
                                Result</a>
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
        </nav> -->


        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                    </ul>
                </div>
            </nav> <?php
    // $year = $_GET['y'];
    // $standard = $_GET['s'];
    // $exam = $_GET['e'];
    $year = $_POST['search_Year'];
    $standard = $_POST['search_Std'];
    $exam = $_POST['search_Exam'];
    $div = $_POST['search_Div'];

     include 'connection.php';

     $str1 = "SELECT `IsResultVisible` FROM  exammaster  WHERE ExamAcademicYear='$year' AND ExamStandard='$standard' AND ExamName='$exam'";
    

     $que = mysqli_query($conn,$str1);
     $row = mysqli_fetch_assoc($que);
     $statu = $row['IsResultVisible'];

     if(!$statu)
     {
        $Message = urlencode( '
        <div class="card alert alert-danger" role="alert">
        <h4 class="alert-heading">Result Is Not Declared Yet!</h4>
        <p></p>
        <p class="mt-12"></p>
      
      </div>');
         
     }
     else{

     
     
     
     $resultStatus = true;
     $totalSum ="";
     $obtainSum ="";
     $Rank="";
     $arr = array();
     $str =" SELECT  GROUP_CONCAT(ResId SEPARATOR ',') AS 'ResID' FROM `resultmaster`
      WHERE ResAcademicYear='$year' And ResStandard='$standard' And ResExamName='$exam' And ResDivision='$div'group by ResRollNo" ;
     $query = mysqli_query($conn,$str);
     while($row = mysqli_fetch_assoc($query)){
         $arr[] = explode(',',$row['ResID']);
     }
  
         for ($y=0; $y<count($arr); $y++) {
             $in = $arr[$y];
             $total=0;
             $obtain=0;

             $sql = "SELECT * FROM resultmaster WHERE ResId IN (" . implode(',', $in) . ")";
             $query1 = mysqli_query($conn,$sql);
             $row11 = mysqli_fetch_assoc($query1);

            $stuRollNo = $row11['ResRollNo'];
            $stuName = $row11['ResStudentName'];
            $stuGRNo = $row11['ResGRNO'];      
            $stuStd = $row11['ResStandard'];      
            $stuDiv = $row11['ResDivision'];
            $examYear =$row11['ResAcademicYear'];
            $examName =$row11['ResExamName'];     
            
            ?>
            
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row mb-2 mb-xl-3">


                        <div class="container border border-dark mt-3">
                            <div class="header">
                                <span class="mylogo">
                                    <img src="images/logo1.png"></span>
                                <span class="myheadings">
                                    <div class="first fw-bolder">&nbsp&nbspઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​
                                    </div>
                                    <div class="secound fw-bold">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
                                    <div class="third fw-bolder">&nbsp&nbspબેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
                                </span>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm fw-bold">
                                    વિદ્યાર્થીનું નામ &nbsp:&nbsp<?php echo $stuName; ?>
                                </div>
                                <div class="col-sm fw-bold">
                                    રોલ નંબર &nbsp:&nbsp<?php echo $stuRollNo; ?>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3 fw-bold">
                                <div class="col">જ.ર નંબર &nbsp:&nbsp<?php echo $stuGRNo; ?></div>
                                <div class="col"> ધોરણ &nbsp:&nbsp<?php echo $stuStd; ?></div>
                                <div class="col"> વગૅ &nbsp:&nbsp<?php echo $stuDiv; ?></div>

                            </div>
                            <div class="col fw-bold mb-3">
                                પરીક્ષા વર્ષ &nbsp:&nbsp<?php echo $examYear ?>
                            </div>
                            <table class="table table-bordered border-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">પરીક્ષા</th>
                                        <th scope colspan="2"><?php echo $examName ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">વિષય</th>
                                        <th scope="col"> કુલ ગુણ</th>
                                        <th scope="col">મેળવેલ ગુણ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


            for($z=0; $z<count($in);$z++){
               $q = $in[$z];
               $str =" SELECT * FROM `resultmaster` WHERE ResId='$q'";
            $query = mysqli_query($conn,$str);
            $row111 = mysqli_fetch_assoc($query);
            $total+= $row111['ResTotalMarks'];
            $obtain+= $row111['ResMarksObtained'];

            $subName = $row111['ResSubName'];
            $subTotal = $row111['ResTotalMarks'];
            $subObtain = $row111['ResMarksObtained'];
            $stustatus = $row111['ResStatus'];

            ?>
                                    <tr>
                                        <td><?php echo $subName; ?></td>
                                        <td><?php echo $subTotal; ?></td>
                                        <td><?php echo $subObtain; ?></td>
                                    </tr>




                                    <?php
            }
           
            ?> <tr>
                                        <th scope="row">Total Marks</th>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $obtain; ?></td>

                                    </tr>

                                    <tr>
                                        <th scope="row">Result and Rank</th>
                                        <td><?php echo $stustatus ?></td>
                                        <td><?php   ?></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Signature of class Teacher</th>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Signature of Principal</th>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Signature of Parents</th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
            </main><?php
        
          }?>

            
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a href="index.html" class="text-muted"><strong>Shree SZ Vaghela High
                                        School</strong></a> &copy;
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php } ?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous">
            </script>
            <script src="js/app.js"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>