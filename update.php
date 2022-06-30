<?php
include "db.php";
if(isset($_POST['update'])){
    
    $n=$_POST['name'];
    $wgt=$_POST['weight'];
    $p=$_POST['price'];
    $user_id=$_POST['user_id'];

    $sql = "UPDATE `fruit` SET `name`='$n',`weight`='$wgt',`price`='$p' WHERE `id`='$user_id'";
$result=$con->query($sql);

if($result == True){
    echo "Record updated successfully";
}else
{
    echo "Error:".$sql."<br>".$con->error;
}


}

if (isset($_GET['id'])){
    $user_id=$_GET['id'];

$sql="SELECT * FROM fruit WHERE id='$user_id'";
$result = $con->query($sql);

if ($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
    $n=$_POST['name'];
    $wgt=$_POST['weight'];
    $p=$_POST['price'];
    $user_id=$_POST['user_id'];
    }
    ?>
     <div class="text-center mb-4">
            <H1>list</H1>
        </div>
    
    <div class="container">
        <form  action="" method="post">
            <div class="row">
                <div class="col-3 mr-2">
                    <input class="form-control"  type="text" name="name" value="<?php echo $name;?>">
                </div>
                <input type="hidden" name="user_id" value="<?php echo $id;?>">
                <div class="col-3 mr-2">
                    <input class="form-control" type="text" name="weight" value="<?php echo $age;?>">
                </div>
                <div class="col-3 mr-2">
                    <input class="form-control" type="text" name="price" value="<?php echo $city;?>">
                </div>
                <div class="col mr-2">
                    <input class="btn btn-primary" type="submit" name="update" value="update">
                </div>
            </div>
            <a href="home.php"> home</a>
        </form>
</body>
        </html>
<?php
}
}else{
    header('location: home.php');

}

?>