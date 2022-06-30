<?php
$con=mysqli_connect("localhost","root","","fruitshop");
if($con){
    echo "connected";

}
else{
    echo "check your connection";
}
?>