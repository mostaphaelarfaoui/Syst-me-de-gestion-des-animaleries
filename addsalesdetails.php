<?php
include("./connection_db.php");
if(isset($_POST['save'])){
    $sd_iD = $_POST['sd_iD'];
    $cs_id = $_POST['cs_id'];
    $date = $_POST['date'];
    $total = $_POST['total'];

   
    $query="INSERT INTO `sales_details` (name,type,cost,belong_to) VALUES ('$pp_name','$pp_type','$cost','$belongs_to')";
    
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
    <link rel="stylesheet" href="style/updatesalesgit .css">
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
                <p><input type="text" placeholder="Enter sd_iD"  name="sd_iD"></p>
                <p><input type="text" placeholder="Enter cs_id"  name="cs_id"></p>
                <p><input type="text" placeholder="Enter total" name="total"></p>
                <input type="submit" value="save" name="save_btn" class="save_btn">
            </form>
        </div>
    </div>

</div>
</body>
</html>