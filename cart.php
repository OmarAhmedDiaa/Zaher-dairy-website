<?php
include('db.php');
include ("classes.php");
session_start();
$cart = new Customer();
if(isset($_GET['id'])){
    $cart->removeItem();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <?php include "navbar.php"; ?>
  </head>
  <body>
    <br><br>
      <div style = "margin-top: 80px;">
      <a href="products.php" style="color:#f05945;font-size:30px;">View Products here.</a>
          </div>
    <div style = "margin-top: -30px;">
    <br><br>
    
      <table class = "table table-condensed">
      <tr> 
          <th style = "text-align: center;"> name </th>
          <th style = "text-align: center;"> quantity </th>
          <th style = "text-align: center;"> price </th>
          <th style = "text-align: center;"> action </th>
      </tr>
    <?php
           $db = new database();
         $con = $db->connect();
        $id = $_SESSION['Logged_in_ID'];  
      $result = mysqli_query($con, "SELECT * FROM cart WHERE userid = $id");
      while($res = mysqli_fetch_array($result))
      {
          print "<tr>";
          print "<td>".$res['pname']."</td>";
          print "<td>".$res['quantity']."</td>";
          print "<td>".$res['totalprice']."</td>";
          ?>
          <td><a id="idTag" href="cart.php?id=<?php echo $res['xid']; ?>"><button value="delete" name="delete" class="btn btn-danger"> Delete </button></a></td>
          <?php
          print "</tr>";
         
      }
    ?>
    </table>
        <td><a id="idTag" href="cart.php?id=<?php echo $id; ?>"><button value="Purchase" name="delete" class="btn btn-success"> Purchase </button></a></td>
      </div>
  </body>
</html>

<style media="screen">
  body{
    text-align: center;
  }

</style>
