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
        /* body {
            background-image: url(images/bg-dark.png);
        } */

        /* a {
            color: #1f1f1f;
            text-decoration: none;
            outline: none;
        } */

        /* a:hover {
            color: white;
        } */

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

        /* .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        } */

        /* .btns {
            background-color: #4c5a7d;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            height: 40px;
        } */

        .bg-light {
            background: #4c5a7d !important;
        }

        .logocenter{
            text-align: center;
            height: 250px;
            padding-top: 30px;
        }
    </style>
</head>

<body>
    <header class="top-navbar ">
        <nav class=" navbar-expand-lg">
            <div class=" logocenter" >
                <!-- <a class="navbar-brand" href="index.php"> -->
                <!-- <span style="width: 10px;" ></span> -->
                <div>
                    <img src="logo.png" alt="SZ WAGHELA HIGH SCHOOL"  />
                </div>
                <!-- </a> -->
            </div>
        </nav>
    </header>
    <span id="pstd"></span>
    <center>
        <div class="login">
            <h1>LOGIN</h1>
            <!-- <form method="POST" onsubmit="return checkData()" action=""> -->
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input type="text" class="form-control" name="uas" id="username" placeholder="Username">
            </div>

            <div class="input-container form-group">
                <i class="fa fa-key icon"></i>
                <input class="input-field form-control" autocomplete="off" type="password" placeholder="Password" name="admin_pass" id="userpass">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn-sm btn-success" id="login_admin">Login</button>
            </div>
            <!-- </form> -->
        </div>
    </center>

    <script src="log.js"></script>
    <script>
        function checkData() {
            if (document.getElementById('admin_pass').value == "" || document.getElementById('username').value == "") {
                alert("Please enter username and password!");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>