<?php
/** @noinspection ALL */
class Conn
{

    function __construct()
    {
        $conn = mysqli_connect("localhost", "lol", "987", "jin");
        if (!$conn) {
            echo mysqli_connect_error();
        }

    }


    function insert()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];

           $password=sha1($_POST['password']);




            $conn = mysqli_connect("localhost", "lol", "987", "jin");

            $sql = "INSERT INTO oops (username,email,password) VALUES('$username','$email','$password')";

            $data = mysqli_query($conn, $sql);


            if ($data) {

                header("location:login.php?msg=Inserted successfully");
            } else {

                echo mysqli_error($conn);
            }


            $this->conn->close();


        }
    }

    function login()
    {
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $conn = mysqli_connect('localhost', 'lol', '987', 'jin');

            $query = "SELECT * FROM oops WHERE email='$email' AND password='$password '";

            $stmt = mysqli_query($conn, $query);

            $row = mysqli_num_rows($stmt);
            if ($row == 1) {


                header("location:home.php?msg=Logged in Successfully");

            } else {
                header("location:login.php?msg=Invalid email/password");

            }
        }
    }

    function display()
    {


        $conn = mysqli_connect('localhost', 'lol', '987', 'jin');
        $sql = "SELECT * FROM oops  ";

        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;

        }
        return $data;

    }

    function update()
    {

      $id=$_GET['editid'];


            $conn = mysqli_connect("localhost", "lol", "987", "jin");
            $sql = "SELECT * FROM oops WHERE id='$id' LIMIT 1";


            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($query)) {
                $data[] = $row;
            }
            return $data;



        }
        function del(){
            $conn = mysqli_connect("localhost", "lol", "987", "jin");
        $id=$_GET['delid'];
        $sql="DELETE FROM oops WHERE id='$id'";
        $query=mysqli_query($conn,$sql);

        if($query){
            header("location:home.php?msg=deleted successfully");
        }


        }
        function resetpass(){
        if(isset($_POST['set'])){
            $email=$_POST['email'];
            $password=sha1($_POST['password']);

            $confirm_password=sha1($_POST['password1']);
            $conn = mysqli_connect('localhost', 'lol', '987', 'jin');
            if($password&&$confirm_password){
                $flag=true;
            }
           if($flag==true) {
               $sql = " UPDATE oops SET password='$password' WHERE email='$email'";
               $query = mysqli_query($conn, $sql);
               if ($query) {
                   header("location:success.php?msg=password changed successfully");
               } else {
                   header("location:reset-pass.php?msg=password doesn't match");
               }
           }
        }

     }

 }
