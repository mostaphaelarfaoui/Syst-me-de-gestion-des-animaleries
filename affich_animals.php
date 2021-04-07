<?php
session_start();
include("./connection_db.php");
if(isset($_GET['delete']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM animals WHERE pet_id = '$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        echo 'data delete';
    }
    else
    {
        echo 'data not delete';
    }
}
?>

<?php
$query = "SELECT * from animals";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/animals.css">
    <title>Page Animals</title>
</head>
<body>
    <nav>
    <a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>
      <h1>Animals</h1>
      <a class="logout" href="logout.php">logout</a>
    </nav>
  <section>
      <a href="addanimals.php" class="btn1">Add new animal</a>
      <a href="update_animal.php" class="btn2">update animal</a>
    </section>
<table id="customers" class="table table-striped">
  <thead>
    <tr>
      <th class="th" scope="col">pet_ID</th>
      <th class="th" scope="col">petcategory</th>
      <th class="th" scope="col">breed</th>
      <th class="th" scope="col">weight(kg)</th>
      <th class="th" scope="col">height(cm)</th>
      <th class="th" scope="col">age(m)</th>
      <th class="th" scope="col">fur</th>
      <th class="th" scope="col">cost(Rs)</th>
    </tr>
    </thead>
  <tbody>
  <?php  if($row = mysqli_num_rows($result)>0) : ?>
    <?php while($data = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <td><?= $data['pet_id']; ?></td>
      <td><?= $data['pet_category']; ?></td>
      <td><?= $data['breed']; ?></td>
      <td><?= $data['weight']; ?></td>
      <td><?= $data['height']; ?></td>
      <td><?= $data['age']; ?></td>
      <td><?= $data['fur']; ?></td>
      <td><?= $data['cost']; ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif;  ?>
  </tbody>
</table>
<form action="" methode= "GET">
    <input type="text" class="inp" name="id" placeholder="Enter the id delete" >
    <button class="btn3" name="delete" type="submit">Delete</button>
    </form>
    <?php
?>
</body>
</html>

