<?php

// $con = mysqli_connect("localhost",$_POST["us"],$_POST["ps"],"schoolmanage");
// echo "done";
    // if(mysqli_connect_error())
    // {
    //     // echo "<script>alert('Admin login not successfull');
    //     //                   window.location.href = 'login.php';
    //     //         </script>";
    // }
    if(md5("szvaghelaadmin")==md5($_POST["us"]) || md5("pass")==md5($_POST["ps"]))
    {
        echo "success";

        session_start();
        $_SESSION["user"]="admin";
        $_SESSION["pass"]="admin";
        // echo "<script>alert('Admin login successfull');
        //                   window.location.href = 'Dashboard.php';
        //         </script>";
    }
?>