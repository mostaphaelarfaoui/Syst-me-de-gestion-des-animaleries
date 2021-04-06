
<?php
include("./connection_db.php");

if(isset($_POST['update']))
{
    $userid   = $_POST['id'];
    $pp_fname = $_POST['pp_fname'];
    $pp_type = $_POST['pp_type'];
    $cost = $_POST['cost'];
    $belongs_to  = $_POST['belongs_to'];

    $query = " UPDATE products  SET    name      = '".$pp_fname."',
                                       type	     = '".$pp_type."',
                                       cost      = '".$cost."',
                                       belong_to = '".$belongs_to."'
                                WHERE  pp_id     = '".$userid."'";
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
    <link rel="stylesheet" href="updat/update_product.css">
    <title>update product</title>
</head>
<body>
    
    <div class="container">
        <div class="navbar">
            <div class="logo"><img src="./img/ic_add_pet.png">
                <h3>update_products</h3>
            </div> 
        </div>
        <a href="affich_products.php"> <button class="btn">Back</button></a>
        <div class="animo">
            <form action="" method="POST">
                <p><input type="text" placeholder="Enter pp_id" name="id"></p>
                <p><input type="text" placeholder="Enter pp_fname" name="pp_fname"></p>
                <p><input type="text" placeholder="Enter pp_type" name="pp_type"></p>
                <p><input type="text" placeholder="Enter cost" name="cost" > 
                <p><input type="text" placeholder="Enter belongs_to" name="belongs_to" >
                <input type="submit" value="update" name="update" class="save_btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>