<?php
include "db.php";

$email=$_POST["email"];
$pwd=$_POST["password"];

$sql="SELECT * FROM signup WHERE email='$emai' and passwor='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if ($count>0){
    header("location:home.php");
}
else {
    header("location:signin.php");
}
?>  