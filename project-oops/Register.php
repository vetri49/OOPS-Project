<?php
/** @noinspection ALL */
require 'conn.php';
$obj=new Conn();


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device,initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet" >
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<style>
    .login-box{
        margin-left: 90%;
        padding-bottom: 10px;
        margin-bottom: 30px;
    }
    .card-comments{
        margin-left: 25px;
    }
</style>

<form method="post" action="">
 <div class="conatiner">

       <div class="card">

                           <h1  class="card-header">Registration page</h1>


                             <p class="card-comments"> please fill this form to create an account</p>
                          <hr>
                          <div class="card-body">

                                          <div>
                                              <label for="username">Username:</label>
                                              <input class="form-control"  type="text" name="username"  autocomplete="off"  placeholder="Enter your username" id="username" required>

                                          </div><br>
                                          <div>
                                              <label for="email">Email:</label>
                                              <input class="form-control" name="email" type="email" placeholder="Enter your email"  autocomplete="off"  id="email"  required >
                                          </div><br>
                                          <div>
                                              <label for="password">Password:</label>
                                              <input class="form-control" type="password" name="password" autocomplete="off" id="password" placeholder="Enter Your Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                          </div><br>
                              <button  class="btn btn-primary" type="submit" name="submit" value="submit">Register </button>
                              <div class="login-box"><a href="login.php" <button class="btn btn-success">Login</button></a></div>
                           </div>
                      </div>
                </div>


 </form>

</body>


</html>
<?php
$obj->insert();
?>
