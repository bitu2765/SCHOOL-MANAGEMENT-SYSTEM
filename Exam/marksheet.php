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
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" /> -->

    <title></title>
</head>

<body>
    <?php
    $year = $_POST['search_Year'];
    $standard = $_POST['search_Std'];
    $exam = $_POST['search_Exam'];

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
        header("Location:result_serch.php?Message=".$Message);
        die;
         
     }
     else{

     
     $div = $_POST['search_Div'];
     $roll = $_POST['search_Roll'];
     $resultStatus = true;
     $totalSum ="";
     $obtainSum ="";
     $Rank="";
     $str =" SELECT  `ResAcademicYear`, `ResStandard`, `ResDivision`, `ResRollNo`, `ResStudentName`, `ResSubName`, `ResExamName`, `ResTotalMarks`, `ResPassingMarks`, `ResMarksObtained`, `ResStatus` FROM `resultmaster`
      WHERE ResAcademicYear='$year' And ResStandard='$standard' And ResExamName='$exam' And ResDivision='$div' And ResRollNo='$roll'";
     $query = mysqli_query($conn,$str);

     $str1 =" SELECT  SUM(ResTotalMarks) as total_sum , SUM(ResMarksObtained) as obtain_sum FROM resultmaster 
     WHERE ResAcademicYear='$year' And ResStandard='$standard' And ResExamName='$exam' And ResDivision='$div' And ResRollNo='$roll'";
     $query1 = mysqli_query($conn,$str1);
     $row = mysqli_fetch_assoc($query1); 
        $totalSum = $row['total_sum'];   
        $obtainSum = $row['obtain_sum'];
    $res = mysqli_fetch_assoc($query);

    
?>
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
                                    વિદ્યાર્થીનું નામ &nbsp:&nbsp<?php echo $res['ResStudentName']; ?>
                                </div>
                                <div class="col-sm fw-bold">
                                    રોલ નંબર &nbsp:&nbsp<?php echo $res['ResRollNo']; ?>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3 fw-bold">
                                <?php $a1="SELECT StuGRNO FROM studentmaster WHERE StuStudentRollNo='$roll'";
                             $res1 = mysqli_query($conn,$a1);
                             if (mysqli_num_rows($res1)> 0) {
                                 $row = mysqli_fetch_assoc($res1); ?>
                                <div class="col">જ.ર નંબર &nbsp:&nbsp<?php echo $row['StuGRNO']; ?></div>
                                <?php
                                }?>
                                <div class="col"> ધોરણ &nbsp:&nbsp<?php echo $res['ResStandard']; ?></div>
                                <div class="col"> વગૅ &nbsp:&nbsp<?php echo $res['ResDivision']; ?></div>
                                <!-- <div class="col">પરીક્ષા નંબર &nbsp:<?php echo $res['ResExamName']; ?></div> -->
                            </div>
                            <div class="col fw-bold mb-3">
                                પરીક્ષા વર્ષ &nbsp:&nbsp<?php echo $res['ResAcademicYear']; ?>
                            </div>
                            <table class="table table-bordered border-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">પરીક્ષા</th>
                                        <th scope colspan="2"><?php echo $res['ResExamName']; ?></th>

                                    </tr>
                                    <tr>
                                        <th scope="col">વિષય</th>
                                        <th scope="col"> કુલ ગુણ</th>
                                        <th scope="col">મેળવેલ ગુણ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query1 = mysqli_query($conn,$str);
                                    while($row = mysqli_fetch_assoc($query1))
                                    {
                                       
                                        $sub = $row['ResSubName'];
                                        $obtain = $row['ResMarksObtained'] ;
                                        $total = $row['ResTotalMarks'];
                                        $status =$row['ResStatus'];

                                        if($status=="FAIL")
                                        {
                                            $resultStatus = false;
                                            $Rank ="NA";
                                        }
                                        ?>
                                    <tr>
                                        <td><?php echo $sub; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $obtain; ?></td>
                                    </tr>
                                    <?php
                                    }?>
                                    <tr>
                                        <th scope="row">Total Marks</th>
                                        <td><?php echo $totalSum; ?></td>
                                        <td><?php echo $obtainSum; ?></td>

                                    </tr>

                                    <tr>
                                        <th scope="row">Result and Rank</th>
                                        <td><?php echo $Rank; ?></td>
                                        <td><?php echo $Rank; ?></td>

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
                                <tfoot>


                                    <?php
                                            if(!$resultStatus)
                                                {
                                                    echo' <td>
                                                    <div class=" col alert alert-danger" role="alert">
                                                        You Did Not Passed This Exam Beter Luck Next Time!!
                                                    </div>
                                                </td>';    
                                                }
                                                else{
                                            
                                                    echo' <td>
                                                    <div class=" col alert alert-success" role="alert">
                                                    Congratulations You Passed This Exam!! 
                                                    </div>
                                                </td>'; 
                                                }
                                        ?>
                                </tfoot>
                            </table>
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
    <?php } ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
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