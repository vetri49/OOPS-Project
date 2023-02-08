<?php
/** @noinspection ALL */
    require 'conn.php';
    $obj=new Conn();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device,initial-scale=1">
    <title>Reset password</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet" >
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="conatiner">
    <div class="card">


        <form method="post" action="">
            <div class="card-header">
                <h1>Reset password </h1>



                <hr>
                <div class="card-body">


                    <div>
                        <label for="email">Email:</label>
                        <input class="form-control" name="email" type="email"  id="email"  placeholder="Enter your email" required >
                    </div><br>
                    <div>
                        <label for="password"> New password:</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                    </div><br>
                    <div>
                        <label for="password"> Confirm password:</label>
                        <input class="form-control" type="password" name="password1" id="password" placeholder="Conifrm Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                    </div><br>

                    <input  class="btn btn-primary" type="submit" name="set" value="Reset">

                </div>
            </div>
        </form>
    </div>

</div>
</body>

<link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>

