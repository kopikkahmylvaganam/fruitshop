<?php
include "db.php";

$n=$_POST["name"];
$gnd=$_POST["gender"];
$email=$_POST["email"];
$pn=$_POST["phonenumber"];
$pwd=$_POST["password"];

$sql="INSERT INTO `signup`(`name`, `gender`, `email`, `phonenumber`, `password`) VALUES ('$n','$gnd','$emai','$pn','$pwd')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:signin.php");
}
else{
    echo "Error";
}
?>

<?php

include "db.php";

$n=$_POST['name'];
$wgt=$_POST['weight'];
$p=$_POST['price'];

$sql="INSERT INTO `fruit`(`fid`, `name`, `weight`, `price`) VALUES ('','$n','$wgt','$p')";
$result=mysqli_query($con,$sql);
if($result){
    header("location: home.php");
}else{
    echo "error";
}
?>