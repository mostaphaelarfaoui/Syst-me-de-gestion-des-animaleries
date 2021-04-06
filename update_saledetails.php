
<?php
include("./connection_db.php");

if(isset($_POST['update']))
{
    $userid   = $_POST['sd_id'];
    $cs = $_POST['cs_id'];
    $dat = $_POST['date'];
    $tot = $_POST['total'];
    

    $query = " UPDATE sales_details SET   cs_id = '".$cs."',
                                       date = '".$dat."',
                                      total = '".$tot."'
                                      
                                WHERE  sd_id = '".$userid."'";
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
    <link rel="stylesheet" href="./updat/update_birds.css">
    <title>add birds</title>
</head>
<body>
    
    <div class="container">
        <div class="navbar">
            <div class="logo"><img src="./img/ic_add_pet.png">
                <h3>update_birds</h3>
            </div> 
            <a href="./affiche_animaux.php"><button>Lougout</button></a>
        </div>
        <a class="btn" href="customers.php" >Back</a>
        <div class="animo">
            <form action="" method="POST">
                <p><input type="text" placeholder="Enter sd_id" name="sd_id"></p>
                <p><input type="text" placeholder="Enter cs_id" name="cs_id"></p>
                <p><input type="date" placeholder="Enter date" name="date"></p>
                <p><input type="text" placeholder="total" name="total" > 
                
                <input type="submit" value="update" name="update" class="save_btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>