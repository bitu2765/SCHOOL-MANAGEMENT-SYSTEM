<?php

$con = mysqli_connect("localhost",$_POST["us"],$_POST["ps"],"schoolmanage");
// echo "done";
    if(mysqli_connect_error())
    {
        // echo "<script>alert('Admin login not successfull');
        //                   window.location.href = 'login.php';
        //         </script>";
    }
    else
    {
        echo "success";

        session_start();
        $_SESSION["user"]=$_POST["us"];
        $_SESSION["pass"]=$_POST["ps"];
        // echo "<script>alert('Admin login successfull');
        //                   window.location.href = 'Dashboard.php';
        //         </script>";
    }
?>