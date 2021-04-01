<?php
session_start();
session_unset();
session_destroy();
if(isset($_SESSION["us"]))
{
    echo $_SESSION["us"];
}
else
{
    echo "success";
    exit();
}
// echo "<script>alert('Admin logout successfull');
//                           window.location.href = 'login.php';
//                 </script>";
