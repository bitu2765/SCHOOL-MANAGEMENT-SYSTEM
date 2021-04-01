<?php
session_start();
if(!isset($_SESSION["user"]))
{
    header("Location: ../index.php");
    exit();
}
$servername = "localhost";
$username = $_SESSION["user"];
$password = $_SESSION["pass"];
$dbname = "schoolmanage";
