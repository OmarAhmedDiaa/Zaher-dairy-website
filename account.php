<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <?php include "navbar.php"; ?>
  </head>
  <body>
    <br><br>

    <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <br>
      <img src="pics/profile.jpeg" alt="Profile" style="border-radius:50%;width:60%;">
      <h4>Your Profile Picture</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Account Info</a></li>
        <li><a href="#section2">My Orders</a></li>
        <li><a href="#section3">Favorites</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <br>
      <h4>About Me</h4>
      <h2>I Love Food</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Updated Jun 16, 2021.</h5>
      <h5><span class="label label-danger">Food</span> <span class="label label-primary">Dairy</span></h5><br>
      <p>I love food and love eating it, who doesn’t? When I am enjoying a meal I am thinking about the next one.
         I don’t know why but one of my favorite things to do is eating out. I have a passion for food and
       that's why I shop at Zaher's Dairy. They provide the best-quality food products at extremely affordable prices.</p>
      <br>
      <form method="post">
        <label>Full Name</label><br>
        <input type="text" name="" placeholder="Omar Ahmed Salah"><br><br>
        <label>Email</label><br>
        <input type="text" name="" placeholder="omar1803098@miuegypt.edu.eg"><br><br>
        <label>Password</label><br>
        <input type="text" name="" placeholder="Omar2000"><br><br>
        <label>Phone Number</label><br>
        <input type="text" name="" placeholder="+20 01062001278"><br><br>
        <label>Address</label><br>
        <input type="text" name="" placeholder="9 El Badia, El Merghani, Heliopolis"><br><br>
        <input type="submit" name="" value="EDIT">
      </form>
    </div>
  </div>
</div>
    <?php
/*
      //To get Session variables
      ob_start();
      include "login.php";
      $data = ob_get_clean();

      $y = $_SESSION['email'];
      $x = new Customer();
      $x->viewAccount($y);
      */
    ?>
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
