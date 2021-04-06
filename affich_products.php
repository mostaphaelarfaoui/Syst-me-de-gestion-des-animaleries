<?php
include("./connection_db.php");
$query = "SELECT * from products";
$result = mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/petsproducts.css">
    <title>Page products</title>
</head>
<body>

    <nav>

    <img src="./ic_add_pet.png" alt="">
      <h1>pets products</h1>
      <a href="logout.php">logout</a>
    </nav>
<section>
    <form action="" methode= "POST">
    <a href="addproduct.php" class="btn1">Add new product</a>
    </form>

    <form action="" methode= "POST">
    <a href="update_product.php" class="btn2">update product</a>
    </form>
    </section>

<table id="customers" class="table table-striped">
  <thead>
    <tr>
      <th class="th" scope="col">po_ID</th>
      <th class="th" scope="col">pp_name</th>
      <th class="th" scope="col">pp_type</th>
      <th class="th" scope="col">cost</th>
      <th class="th" scope="col">belongs_to</th>
    
    </tr>
  
  </thead>
  <tbody>
  <?php  if($row = mysqli_num_rows($result)>0) : ?>
    <?php while($data = mysqli_fetch_assoc($result)) : ?>

    <tr>
     
      <td><?= $data['pp_id']; ?></td>
      <td><?= $data['name']; ?></td>
      <td><?= $data['type']; ?></td>
      <td><?= $data['cost']; ?></td>
      <td><?= $data['belong_to']; ?></td>
     
      
    </tr>
    <?php endwhile; ?>
    <?php endif;  ?>
  </tbody>
</table>
  
<form action="" methode= "POST">
    <input type="text" class="inp" placeholder="Enter the id delete" >
    <button class="btn3" name="delete" type="submit">Delete</button>
    </form>
</body>
</html>