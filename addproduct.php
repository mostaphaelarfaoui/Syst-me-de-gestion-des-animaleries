<?php
include("./connection_db.php");
if(isset($_POST['save'])){
    $pp_name = $_POST['pp_name'];
    $pp_type = $_POST['pp_type'];
    $cost = $_POST['cost'];
    $belongs_to  = $_POST['belongs_to'];
   
    $query="INSERT INTO `products` (name,type,cost,belong_to) VALUES ('$pp_name','$pp_type','$cost','$belongs_to')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("error").mysqli_error($result);
    }
    else{
        echo "Done!";
    }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/addproduct.css">
</head>
<body>
<div class="container">
        <div class="navbar">
            <div class="logo">
            <a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>    
            </div> 
        </div>
        <a href="affich_products.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="post">
                <p><input type="text" placeholder="Enter pp_name"  name="pp_name"></p>
                <p><input type="text" placeholder="Enter pp_type"  name="pp_type"></p>
                <p><input type="text" placeholder="Enter cost" name="cost"></p>
                <p><input type="text" placeholder="Enter belongs_to" name="belongs_to"></p>
                <input type="submit" value="save" name="save" class="save_btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>