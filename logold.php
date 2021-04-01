<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Login </title>
    <style>
        body {
            background-image: url(images/bg-dark.png);
        }

        a {
            color: #1f1f1f;
            text-decoration: none;
            outline: none;
        }

        a:hover {
            color: white;
        }

        .login {
            width: 35%;
            height: auto;
            margin: 30px;
            padding: 35px;
            background-color: white;
        }

        .input-container {
            display: flex;
            width: 100%;
            height: fit-content;
            margin-bottom: 15px;
            border-color: #4c5a7d;
        }

        .icon {
            background-color: #4c5a7d;
            color: white;
            padding: 10px;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .btns {
            background-color: #4c5a7d;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            height: 40px;
        }

        .bg-light {
            background: #4c5a7d !important;
        }
    </style>
</head>

<body>
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="SZ WAGHELA HIGH SCHOOL" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">LOGIN
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="login.php">Login </a>
                                <a class="dropdown-item" href="signup.php">signup </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <center>
        <div class="login">
            <h1>LOGIN</h1>
            <form method="POST" onsubmit="return checkData()" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field form-control" type="text" placeholder="Username / Email" name="username" id="username" autofocus autocomplete="off" value="<?php if (isset($_POST['login_admin'])) {
                                                                                                                                                                                $_POST['username'];
                                                                                                                                                                            } ?>">
                </div>

                <div class="input-container form-group">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field form-control" autocomplete="off" type="password" placeholder="Password" name="admin_pass" id="admin_pass">
                </div>
                <input type="submit" class="btns" value="LOGIN" name="login_admin">
            </form>
        </div>
        <div class="login" style="margin: 10px; padding: 10px;">
            <p>Can't Access Account? <a href="#" style="font-weight:bold;color: #4c5a7d;">Reset Password</a></p>
        </div>
        <div class="login" style="margin: 10px; padding: 10px;">
            <p>Don't have Account? <a href="#" style="font-weight:bold;color: #4c5a7d;">Create Now</a></p>
        </div>
    </center>
</body>
<script>
    function checkData() {
        if (document.getElementById('admin_pass').value == "" || document.getElementById('username').value == "") {
            alert("Please enter username and password!");
            return false;
        }
        return true;
    }
</script>
<?php
session_start();
if (isset($_POST['login_admin'])) {
    //including database connection file
    include('./connection_to_db.php');
    $con = mysqli_connect($servername, $username, $password, $dbname);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['admin_pass']);
    $password = md5($pass);

    $sql = "SELECT * FROM admin_credentials WHERE username = '$username'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);

    if ($username == $row['username'] && $password == $row['password']) {
        echo "<script>alert('Admin login successfull');
                          window.location.href = './dash/Dashboard.php';
                </script>";
        $_SESSION['login'] = true;
    } else {
        echo "<script>alert('Username or password is invalid');window.location.href = 'index.php';</script>";
        $_SESSION['login'] = false;
    }
}
?>

</html>