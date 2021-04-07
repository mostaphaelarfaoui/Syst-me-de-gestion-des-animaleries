<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/addanimals.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
        <a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>
            </div> 
        </div>
        <a href="affich_animals.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="post">
                <p><input type="text" placeholder="Enter pet_category"  name="pet_category"></p>
                <p><input type="text" placeholder="Enter breed"  name="breed"></p>
                <p><input type="text" placeholder="Enter weight" name="weight" style="width: 49%;"> <input type="text" placeholder="Enter height" name=" height" style="width: 49%;"></p>
                <p><input type="text" placeholder="Enter age" name="age" style="width: 49%;"> <input type="text"placeholder="Enter fur" name="fur" style="width: 49%;"></p>
                <p><input type="text" placeholder="Enter cost" name="cost"></p>
                <input type="submit" value="save" name="save" class="save_btn">
            </form>
        </div>
    </div>
</div>

<?php
session_start();
include("./connection_db.php");
if(isset($_POST['save'])){

    $pet_category = $_POST['pet_category'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];
    $height  = $_POST['height'];
    $age = $_POST['age'];
    $fur = $_POST['fur'];
    $cost = $_POST['cost'];
    $query="INSERT INTO `animals` (`pet_category`, `breed`, `weight`, `height`, `age`, `fur`, `cost`) VALUES ('$pet_category', '$breed', '$weight', '$height', '$age', '$fur', '$cost')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("error").mysqli_error($result);
    }
    else{
        echo "Done!";
    }
    }
?>
</body>
</html>