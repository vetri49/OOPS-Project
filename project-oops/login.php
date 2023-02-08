<?php
require 'conn.php';
$obj=new Conn();
$obj->login();

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-success">'.$msg.'</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login_page</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet" >
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style>
    .reg{
        margin-left: 90%;
        border:hidden;
    }
    .fg{
        margin-left: 90%;
        border: dot-dash;

    }
    .card-header{
        font-family: sans-serif;
        font-style: normal;
        font-
    }
</style>
<body>
<div class="conatiner">
    <div class="card">


        <form method="post" action=""  >

            <h1 class="card-header">Login page</h1>
            <hr>
            <div class="card-body">
                <a href="Register.php" class="reg"><i class="btn btn-danger"> New Register</i></a>

                <div>
                    <label for="email">Email:</label>
                    <input class="form-control" name="email" type="email" placeholder="Enter your email" id="email" required>
                </div><br>
                <div>
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                </div><br>
                <button class="btn btn-success" type="submit" name="login">Login</button>
                <div>
                    <a href="fg-pass.php" class="fg"><i class="btn btn-primary">Forgot password</i></a><br>

                </div>
            </div>
        </form>
    </div>
</body>

<script>

</script>


</html>

