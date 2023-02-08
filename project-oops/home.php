<?php
/** @noinspection ALL */
require 'conn.php';
$obj=new Conn();

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
    <title>Home</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet" >
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .log{
        margin-left: 90%;
        margin-bottom: 1%;
    }
    .pre{
        margin-left: 3%;
    }
</style>
<div class="conatiner">
    <div class="card">


        <div class="card-header">
            <h1>Home page</h1><br>
            <div class="user">
                <a href="Register.php" ><i class="btn  btn-outline-primary" >Add new user</i></a>
            </div>
            <div class="log">
                <a href="logout.php" class="btn btn-danger"><i class="fa fa-sign-out"> <b>Logout</b></i></a>
            </div>
            <hr>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Username</b></td>
                    <td><b>E-mail</b></td>
                    <td><b>Password</b></td>
                    <td><b>Action</b></td>
                </tr>
                </thead>

                <tbody>




                <?php


                $row=$obj->display();
                foreach ($row as $value)


                {

                ?>
                <tr>
                    <td > <?php echo $id=$value['id'];  ?> </td>
                    <td><?php echo$username=$value['username'];?></td>
                    <td><?php echo $email=$value['email'];?></td>
                    <td><?php echo $password=$value['password'];?></td>
                    <td>
                        <div style="justify-content: space-around">
                        <a class="text-white btn btn-info" href="edit.php?editid=<?php echo $id;?>"><i class="fas fa-user-edit">Edit</i></a>
                        <a class="text-white btn btn-danger"  href="del.php?delid=<?php echo $id;?>" ><i class="fas fa-trash-alt">Delete</i></a>
                        </div>
                    </td>

                </tr>

                </tbody>

            <?php
                } ?>

            </table>


        </div>



    </div>
</div>
<hr>
<button type="button"  class="pre"> <a href="login.php"><i class="fas fa-backward">Previous</i> </a></button>

</html>


