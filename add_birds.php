<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/update_birds.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>
            </div>
        </div>
        <a href="affich_birds.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="post">
                <p><input type="text" placeholder="Enter pet_category" name="pet_category"></p>
                <p><input type="text" placeholder="Enter type" name="type"></p>
                <select name="noise">
                    <option selected>-- choisir noise --</option>
                    <option value="low">low</option>
                    <option value="moderate">moderate</option>
                    <option value="high">high</option>
                </select>
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
    $type = $_POST['type'];
    $noise= $_POST['noise'];
    $cost = $_POST['cost'];
    $query="INSERT INTO `birds` (`pet_category`, `type`, `noise`, `cost`) VALUES ('$pet_category', '$type', '$noise', '$cost')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("error").mysqli_error($result);
    }
    else{
        header('Location: ./affich_birds.php');
    }
    }
?>
</body>

</html>