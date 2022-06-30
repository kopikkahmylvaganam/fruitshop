<?php session_start();

include("db.php");
$sql="SELECT * FROM fruit";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fruit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <h1>Welcome  <?php echo $_SESSION["name"]; ?></h1>

    <div class="text-center mb-4">
            <H1>FRUIT</H1>
        </div>
    
    <div class="container">
        <form  action="insert.php" method="post">
            <div class="row">
                <div class="col-3 mr-2">
                    <input class="form-control"  type="text" name="name" placeholder="Name">
                </div>
                <div class="col-3 mr-2">
                    <input class="form-control" type="text" name="weight" placeholder="Weight">
                </div>
                <div class="col-3 mr-2">
                    <input class="form-control" type="text" name="price" placeholder="Price">
                </div>
                <div class="col mr-2">
                    <input class="btn btn-primary" type="submit">
                </div>
            </div>
        </form>
        <table class="table" >
            <tr>
                <th>FID</th>
                <th>Name</th>
                <th>Weight</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
            <tbody>
                <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                    ?>
                        <tr>
                <th><?php echo $row['fid']; ?></th>
                <th><?php echo $row['name']; ?></th>
                <th><?php echo $row['weight']; ?></th>
                <th><?php echo $row['price']; ?></th>
                <th><a class="btn btn-outline-primary" href="update.php?id=<?php echo $row['fid'];?>">Edit</a></th>
                <th><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $row['fid'];?>">Delete</a></th>
            </tr>
            <?php
                    }
                }


                ?>

            </tbody>
        </table>
    </div>
</body>
</html>