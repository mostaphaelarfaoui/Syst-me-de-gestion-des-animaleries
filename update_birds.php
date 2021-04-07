<?php
session_start();
include("./connection_db.php");
if(isset($_POST['update']))
{
    $userid   = $_POST['pet_id'];
    $cat = $_POST['pet_category'];
    $typ = $_POST['type'];
    $noi = $_POST['noise'];
    $cos  = $_POST['cost'];

    $query = " UPDATE birds SET   pet_category = '".$cat."',
                                       type = '".$typ."',
                                       noise = '".$noi."',
                                       cost = '".$cos."'
                                WHERE  pet_id = '".$userid."'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "your update is success";
    }
    else
    {
        echo " your update not success";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/update_birds.css">
    <title>add birds</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo"><a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>  
            </div> 
        </div>
        <a href="affich_birds.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="POST">
                <p><input type="text" placeholder="Enter pet_id" name="pet_id"></p>
                <p><input type="text" placeholder="Enter categorie" name="pet_category"></p>
                <p><input type="text" placeholder="Enter type" name="type"></p>
                <select name="noise">
                    <option selected>-- choisir noise --</option>
                    <option value="low">low</option>
                    <option value="moderate">moderate</option>
                    <option value="high">high</option>
                </select> 
                <p><input type="text" placeholder="Enter cost" name="cost" >
                <input type="submit" value="update" name="update" class="save_btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>