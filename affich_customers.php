<?php
include("./connection_db.php");
if(isset($_GET['delete']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM customers WHERE cs_id = '$id'";
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
$query = "SELECT * FROM customers";
$result = mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/customers.css">
    <title>Page Animals</title>
</head>
<body>

    <nav>
    <a class="active" href="homer.php"><img src="img//ic_add_pet.png"></a>
      <h1>Customers</h1>
      <a class="logout" href="">logout</a>

    </nav>
<section>
    <form action="" methode= "POST">
    <a href="addcustomer.php" class="btn1">Add new customer</a>
    </form>

    <form action="" methode= "POST">
    <a href="update_customer.php" class="btn2">update customer</a>
    </form>

    </section>

<table id="customers" class="table table-striped">
  <thead>
    <tr>
      <th class="th" scope="col">cs_ID</th>
      <th class="th" scope="col">cs_fname</th>
      <th class="th" scope="col">cs_minit</th>
      <th class="th" scope="col">cs_lname</th>
      <th class="th" scope="col">cs_adress</th>
    </tr>
    <?php
        while($row = mysqli_fetch_assoc($result))
        {
            $cs_id = $row['cs_id'];
            $fname = $row['fname'];
            $minit = $row['minit'];
            $lname = $row['lname'];
            $adress = $row['adress'];

        ?>
  </thead>
  <tbody>
    <tr>
      <td> <?php echo $cs_id ?></td>
      <td> <?php echo $fname ?></td>
      <td> <?php echo $minit ?></td>
      <td> <?php echo $lname ?></td>
      <td> <?php echo $adress ?></td>
    </tr>
    <?php
        }
        ?>
  </tbody>
</table>
<form action="" methode= "GET">
    <input type="text" class="inp" name="id" placeholder="Enter the id delete" >
    <button class="btn4" name="delete" type="submit">Delete</button>
    </form>
</body>
</html>