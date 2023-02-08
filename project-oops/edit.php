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

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit-profile</title>
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
                <h1>Edit-profile </h1>

                <hr>
                <div class="card-body">

                    <table class="table table-bordered" >
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
                        if (isset($_POST['update'])) {
                            $id = $_POST['id'];
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $password = sha1($_POST['password']);
                              $conn=mysqli_connect("localhost","lol","987","jin");
                            $stmt = "UPDATE oops 
                                     SET username='$username', email='$email',password='$password' WHERE id ='$id' ";
                            var_dump($stmt);
                            $result = mysqli_query($conn, $stmt);
                            var_dump($result);
                            if ($result) {
                                header("location:home.php?msg=Updated successfully");
                            } else {
                                // header("location:edit.php?msg=Invalid details");
                                echo mysqli_error($conn);
                            }


                        }

                        $row=$obj->update();
                        foreach ($row as $value){
                        ?>
                        <tr>
                           <td> <input type="number" name="id" value="<?php echo $id=$value['id'];?>"</td>

                            <td> <input type="text" name="username" value="<?php echo $username=$value['username'];?>"></td>

                            <td><input type="email" name="email" value="<?php echo $email=$value['email'];?>"></td>

                            <td><input type="text" name="password" value="<?php echo $password=$value['password'];?>"></td>

                            <td><input  class="btn btn-success" type="submit" name="update" value="Update"></td>
                        </tr>
                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
        </form>

</div>
</body>
<link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>
