<?php
/** @noinspection ALL */
require 'conn.php';
$obj=new Conn();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Successfully changed</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet">
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="conatiner">
    <div class="card">


        <form method="post" action="">
            <div class="card-header">

                <h1>Password is changed! </h1>

                <hr>
                <div>
                    <P>Password is successfully reset ,you can login<a href="login.php"><i class="fas fa-sign-in">here</i> </a> with your new password.</P>
                </div>
            </div>
        </form>
    </div>

</div>
</body>

</html>

