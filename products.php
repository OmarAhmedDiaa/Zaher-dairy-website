<?php
include('db.php');
include ("classes.php");
$add = new Customer();
if(isset($_GET['id'])){
    
    $add->addToCart($_POST);
    
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <?php include "navbar.php"; ?>
  </head>
  <body>
    <br><br><br>
    <h1>Have something in mind?</h1>
    <form class="" action="" method="post">
      <label for="">Category:</label>
      <select class="" name="">
        <option value="">Cheese</option>
        <option value="">Desserts</option>
        <option value="">Milk</option>
        <option value="">Meat</option>
        <option value="">Coffee</option>
        <option value="">Honey</option>
        <option value="">Oils</option>
        <option value="">Grains</option>
        <option value="">Bread</option>
      </select>
      <label for="">Price Range:</label>
      <select class="" name="">
        <option value=""> &lt 50 LE</option>
        <option value="">50 - 100 LE</option>
        <option value="">100 - 200 LE</option>
        <option value="">&gt 250 LE</option>
      </select>
      <input type="text" name="" value="">
      <input type="submit" name="" value="Search">
    </form>
    <br>
      <div class="container" >
          <div class="row">
       <?php  
         
         
         $db = new database();
         $con = $db->connect();
                $query = "SELECT * FROM products ORDER BY id ASC";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                   
                     
  <form action = "products.php?id=<?php echo $row["id"]; ?>" method = "post">
    <div class="col-md-4"> 
      <ul style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:15px; align=center">
        <?php print $row['name']; ?>
        <img src="pics/products/<?php print $row['image'];?>" style = "max-width: 100%; , max-height: 100%;" class="img-responsive" alt="Image">
        <?php print $row['price'];?> <br><br>
          <input type = "number" name = "quantity" class = "form-control" style = "width: 50px; margin-left: 43%;" min = "1" max = "20" value = "0"> <br><br>
          <input type = "submit" class = "btn btn-success" value = "Add to cart">
          
    </ul>  
    </div>
      </form>

                <?php  
                     }  
                }  
                ?>  
                   </div>
                         
</div>
  </body>
</html>