<?php
session_start();


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NavBar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php"> <img src="pics/logo1.jpg" height="50px" weight="50px"alt="Logo"> </a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="home.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
         <!-- <li><a href="promotions.php">Promotions</a></li> -->
          <li><a href="about.php">About Us</a></li>
          <li> <a href="contact.php">Contact Us</a> </li>

        </ul>
        <form class="navbar-form navbar-center" action="#">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><?php if($_SESSION)  ?><a href="account.php"><span class="glyphicon glyphicon-user"></span><?php  if($_SESSION) echo $_SESSION['name']; ?></a></li>
          <?php if(!($_SESSION)){   ?>
          <li>
          <li> <a href="messages.php">Messages</a> </li>
          <li ><a href="login.php">Log In</a></li>
          <li><a href="reg.php">Register</a></li>
          <?php
          }
          ?>
          <?php if($_SESSION){ ?>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
          <li><a href="login.php">Logout</a></li>
         
         <?php }  ?>
        </ul>
      </div>
    </nav>
  </body>
</html>
