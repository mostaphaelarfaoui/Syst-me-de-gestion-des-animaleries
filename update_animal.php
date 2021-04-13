<?php
session_start();
include("./connection_db.php");
if(isset($_POST['update']))
{
    $userid   = $_POST['pet_id'];
    $cat = $_POST['pet_category'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];
    $height  = $_POST['height'];
    $age  = $_POST['age'];
    $fur  = $_POST['fur'];
    $cos  = $_POST['cost'];
    $query = " UPDATE animals  SET   pet_category = '".$cat."',
                                       breed      = '".$breed."',
                                       weight     = '".$weight."',
                                       height     = '".$height."',
                                       age        = '".$age."',
                                       fur        = '".$fur."',
                                       cost       = '".$cos."'
                                WHERE  pet_id     = '".$userid."'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        header('Location: ./affich_animals.php');
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'> alert('data not update!')</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/update_animals.css">
    <title>add animals</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo"><a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>
            </div>
        </div>
        <a href="affich_animals.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="POST">
                <p><input type="text" placeholder="Enter pet_id" name="pet_id"></p>
                <p><input type="text" placeholder="Enter categorie" name="pet_category"></p>
                <p><input type="text" placeholder="Enter breed" name="breed"></p>
                <p><input type="text" placeholder="Enter weight" name="weight">
                <p><input type="text" placeholder="Enter height" name="height">
                <p><input type="text" placeholder="Enter age" name="age">
                <p><input type="text" placeholder="Enter fur" name="fur">
                <p><input type="text" placeholder="Enter cost" name="cost">
                    <input type="submit" value="update" name="update" class="save_btn">
            </form>
        </div>
    </div>
    </div>
</body>

</html>