<?php
include('db.php');

session_start();

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
    <?php include "adminNav.php"; ?>
  </head>
  <body>
    <br><br>
      
    <div style = "margin-top: 60px;">
    <br><br>
    
      <table class = "table table-condensed">
      <tr> 
          <th> name </th>
          <th> quantity </th>
          <th> price </th>
      </tr>
    <?php
           $db = new database();
         $con = $db->connect();
        $id = $_SESSION['Logged_in_ID'];  
      $result = mysqli_query($con, "SELECT * FROM orders");
      while($res = mysqli_fetch_array($result))
      {
          print "<tr>";
          print "<td>".$res['user_id']."</td>";
          print "<td>".$res['pname']."</td>";
          print "<td>".$res['totalprice']."</td>";
         
      }
    ?>
    </table>
             </div>
  </body>
</html>

<style media="screen">
  body{
    text-align: center;
  }

</style>
