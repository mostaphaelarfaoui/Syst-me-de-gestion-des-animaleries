<?php
session_start();
include("./connection_db.php");
if (isset($_POST['login'])) {
 $lname = trim(strip_tags($_POST["lname"]));
 $pass = trim(strip_tags($_POST["password"]));

 $query = "SELECT * FROM customers WHERE lname = '$lname' && password = '$pass'";
 $result=mysqli_query($con,$query);
 if($result)
 {
    while($row=mysqli_fetch_assoc($result)){
        if($lname === $row['lname'] && $pass===$row['password'])
        {  
            $_SESSION["lname"] = $lname;        
              header('Location: ./homer.php');     
        }
        else
        {
            header('Location: ./home.php');
        }
    }
 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>Login in</title>
</head>

<body>
    <div class="petshop">
        <a class="active" href=""><img src="img//ic_add_pet.png"></a>
        <a href="">pets shop</a>
    </div>
    <form action="" method="POST">
        <div class="container">
            <h2 class="login">Login</h2><br>
            <input type="text" name="lname" placeholder="enter your lname" class="bord"><br>
            <input type="password" name="password" placeholder="enter yourPassword" class="bord"><br>
            <input type="submit" name="login" class="btn" value="Login"><br>
    </form>
    </div>
</body>

</html>
</body>

</html>