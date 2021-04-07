<?php
include("./connection_db.php");
$query = "SELECT * from sales_details";
$result = mysqli_query($con,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/salesdetails.css">
    <title>Page sales details</title>
</head>
<body>

    <nav>
    <a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>
      <h1>Sales details</h1>
      <a class="logout" href="logout.php">logout</a>
    </nav>
    <section>
      <form action="" methode= "POST">
      <a href="addbrird.php" class="btn1">Add new details</a>

      </form>

      <form action="" methode= "POST">
      <a href="update_saledetails.php" class="btn2">update details</a>

      </form>

      <form action="" methode= "POST">
      <a href="addbrird.php" class="btn3">sold products</a>

      </form>

      <form action="" methode= "POST">
      <a href="addbrird.php" class="btn4">old pets</a>

      </form>
    </section>


<table id="customers" class="table table-striped">
  <thead>
    <tr>
      <th class="th" scope="col">sd_ID</th>
      <th class="th" scope="col">cs_id</th>
      <th class="th" scope="col">date</th>
      <th class="th" scope="col">total</th>
     
    </tr>
    </thead>
  <tbody>
  <?php  if($row = mysqli_num_rows($result)>0) : ?>
    <?php while($data = mysqli_fetch_assoc($result)) : ?>

    <tr>
     
      <td><?= $data['sd_id']; ?></td>
      <td><?= $data['cs_id']; ?></td>
      <td><?= $data['date']; ?></td>
      <td><?= $data['total']; ?></td>
      
     
      
    </tr>
    <?php endwhile; ?>
    <?php endif;  ?>
  </tbody>
</table>
<form action="" methode= "POST">
    <input type="text" class="inp" placeholder="Enter the id delete" >
    <button class="btn5" name="delete" type="submit">Delete</button>
    </form>
</body>
</html>