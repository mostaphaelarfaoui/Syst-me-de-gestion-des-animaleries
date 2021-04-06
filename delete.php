<?php
include("connection_db.php");

if (isset($_GET['delete'])) {
    $id= $_GET['delete'];
    $query = "DELETE FROM birds WHERE pet_id = '$id'";

    $res= mysqli_query($con, $query);

    if ($res === true) {
        echo "<script> alert </script>";
    } else {
        echo "record not deleted";
    } 

    }


?>
<script>
    function confirmation(){
        return confirm("voulez-vous vraiment suprimer ce dev? ")
    }
    </script>
  