<?php
include("./connection_db.php");
if (isset($_POST['enter'])) {
    


 $name = trim(strip_tags($_POST["lname"]));
 $pass = trim(strip_tags($_POST["password"]));

 
 $query = "SELECT * FROM customers WHERE lname = '$name' && password = '$pass'";
 $result=mysqli_query($con,$query);

 if($result)
 {
    while($row=mysqli_fetch_assoc($result)){
        
    
        if($name === $row['lname'] && $pass===$row['password'])
        {          
              header('Location: ./home.php');
                
        }

        else
        {
            header('Location: ./login.php');
            
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
    <link rel="stylesheet" href="login.css">
    
    <title>Login in</title>
</head>
<body>
<div class="petshop">
            <a class="active" href=""><img src="image/ic_add_pet.png"></a>
            <a href="">pets shop</a>
            
          </div>
<form action="" method="POST">  
 
 <div class="container">
     
 <h2 class="login">Login</h2><br>
 <input type="lname" name="lname" placeholder="lname" class="bord" ><br>
 <input type="password" name="password" placeholder="Password" class="bord"><br>
 <input type="submit" name="enter" class="btn" value="Envoyer"><br>
</form>
</div>

</body>
</html>  
</body>
</html>