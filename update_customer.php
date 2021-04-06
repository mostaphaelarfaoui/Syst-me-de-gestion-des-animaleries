
<?php
include("./connection_db.php");
if(isset($_POST['update']))
{
    $userid   = $_POST['id'];
    $cs_fname = $_POST['cs_fname'];
    $cs_minit = $_POST['cs_minit'];
    $cs_lname = $_POST['cs_lname'];
    $address  = $_POST['address'];

    $query = " UPDATE customers  SET   fname = '".$cs_fname."',
                                       minit = '".$cs_minit."',
                                       lname = '".$cs_lname."',
                                       adress = '".$address."'
                                WHERE  cs_id = '".$userid."'";
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
    <link rel="stylesheet" href="style/update_customer.css">
    <title>add customer</title>
</head>
<body>
    
    <div class="container">
        <div class="navbar">
            <div class="logo"><img src="./img/ic_add_pet.png">
                <h3>update_customer</h3>
            </div> 
          
        </div>
        <a href="affich_customers.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="POST">
                <p><input type="text" placeholder="Enter cs_id" name="id"></p>
                <p><input type="text" placeholder="Enter cs_fname" name="cs_fname"></p>
                <p><input type="text" placeholder="Enter cs_minit" name="cs_minit"></p>
                <p><input type="text" placeholder="Enter cs_lname" name="cs_lname" > 
                <p><input type="text" placeholder="Enter cs_address" name="address" >
                <input type="submit" value="update" name="update" class="save_btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>