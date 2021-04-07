<?php
session_start();
include("./connection_db.php");
if(isset($_POST['save_btn'])){
    $cs_id = $_POST['cs_id'];
    $date = $_POST['date'];
    $total = $_POST['total'];

   
    $query="INSERT INTO `sales_details` (cs_id,date,total) VALUES ('$cs_id','$date','$total')";
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
    <link rel="stylesheet" href="style/updatesales.css">
</head>
<body>
<div class="container">
        <div class="navbar">
            <div class="logo">
            <a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>
                
            </div> 
        </div>
        <a href="affich_salesdetails.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="post">
                <p><input type="text" placeholder="Enter cs_id"  name="cs_id"></p>
                <p><input type="date" placeholder="Enter date"  name="date"></p>
                <p><input type="text" placeholder="Enter total" name="total"></p>
                <input type="submit" value="save" name="save_btn" class="save_btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>