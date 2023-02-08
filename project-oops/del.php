<?php
$conn = mysqli_connect("localhost", "lol", "987", "jin");
$id=$_GET['delid'];
$sql="DELETE FROM oops WHERE id='$id'";
$query=mysqli_query($conn,$sql);

if($query==true){
header("location:home.php?msg=Deleted successfully");
}