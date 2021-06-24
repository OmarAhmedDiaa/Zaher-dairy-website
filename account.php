<?php
require_once("classes.php");
require_once("navbar.php");
session_start();
if (isset($_POST["submit"])) {
  $x = new Customer();
  $x->editAccount($_POST);
  echo"ejoefwijfwfwejowe";
}
$id = $_SESSION['Logged_in_ID'];
require_once('db.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
  
  </head>
  <body>
    <br><br>

    <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <br>
      
     
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Account Info</a></li>
        <li><a href="#section2">My Orders</a></li>
        <li><a href="#section3">Favorites</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <br>
      <?php
      $c = new database;
      $conn= $c->connect();
      $sql="SELECT * FROM users WHERE id ='$id'";
      
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      

       ?>
      <form method="post">
        <label>Full Name</label><br>
        <input type="text" name="name" placeholder="Name" value="<?php echo $row['first_name']; ?>"><br><br>
        <label>Email</label><br>
        <input type="text" name="email" placeholder="Email" value=" <?php echo $row['email'];?>"><br><br>
        <label>Phone Number</label><br>
        <input type="text" name="num" placeholder="Phone number" value= "<?php echo $row['mob_num'];?>"><br><br>
        <label>Address</label><br>
        <input type="text" name="address" placeholder="Address" value=" <?php echo $row['address'];?>"><br><br>
        <input type="submit" name="submit" value="EDIT">
      </form>
    </div>
  </div>
</div>
   
  </body>
</html>

<style media="screen">
  /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 680px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #A3D2CA;
      height: 100%;
    }

    .sidenav a:hover{
      background-color:#F05945
    }

    label{
      font-size: 17px;
    }

    input[type=text]{
      width: 250px;
      text-align: center;
      border-radius: 9px;
      padding:2px;
    }

    input[type=submit]{
      width:100px;
      background-color: #5EAAA8;
      color:white;
      border-radius: 7px;
      padding:5px;
    }
</style>
