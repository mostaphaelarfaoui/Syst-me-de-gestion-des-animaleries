<!doctype html>
<html>
    <head>
        <title>
            Petshop
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="home.css">

    </head>
    <body>

        <div class="petshop">
            <a class="active" href="home.php"><img src="image/ic_add_pet.png"></a>
            <a href="home.php">pets shop</a>
            <div class="petshop-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
      

       
     <div class="screen">      
     <form>
          
            <button class="button button1"  type="submit" formaction="affich_animals.php">animals</button>
            <button class="button button2"  type="submit" formaction="affich_birds.php ">Birds</button>
            <button class="button button3"  type="submit"formaction="affich_products.php" >products</button>
            <button class="button button4"  type="submit"formaction="affich_details.php" >salesdetails</button>
            <button class="button button5"  type="submit" formaction="affich_customers.php">customer</button>  
        
     </form> 
    </div>

    </body>
   
</html>