<?php
include "db.php";
if(isset($_GET['id'])){
    $user_id=$_GET['id'];
    $sql="DELETE FROM `fruit` WHERE `id`='$user_id'";
    $result = $con->query($sql);
    if($result==TRUE)
    {
        echo "Record deleted successfully.";
        ?>
        <a href="index.php">Home</a>
        <?php
    }else{
        echo "Error:".$sql."<br>".$con->error;
    }
}
?>