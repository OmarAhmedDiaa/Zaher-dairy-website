<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <?php include "navbar.php";?>
      <link rel="stylesheet" href="main.css">

  </head>
  <body>
    <br><br><br>
    <form class="signup-form"  method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Create Account</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Full Name</label>
            <input type="text"  name="fname" class="form-input" required/>
          </div>
          <div class="form-group right">
            <label class="label-title">Email</label>
            <input type="email" class="form-input" required/>
          </div>
        </div>

        <!-- Email -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Address</label>
            <input type="text"  name="fname" class="form-input" required/>
          </div>
          <div class="form-group right">
            <label class="label-title">Mobile Number</label>
            <input type="number"  name="fname" class="form-input" required/>
          </div>
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password</label>
            <input type="password" name="password" class="form-input" required>
          </div>
          <div class="form-group right">
            <label for="password" class="label-title">Confirm Password</label>
            <input type="password" name="password" class="form-input" required>
          </div>
        </div>

      </div>

      <!-- form-footer -->
      <div class="form-group">
        <input type="submit" name="submit" value="Register">
        <style media="screen">
          input[type=submit]
          {
            display: inline-block;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #5eaaa8;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
          }

          input[type=submit]:hover {background-color: #a3d2ca}

          input[type=submit]:active {
            background-color: #5eaaa8;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
          }

        </style>
      </div>
      <br>
    </form>

    <!-- Script for range input label -->
    <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>
    <style>

    .signup-form {
      font-family: "Roboto", sans-serif;
      width:650px;
      margin:30px auto;
      background:linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
      border-radius: 10px;
    }

    /*---------------------------------------*/
    /* Form Header */
    /*---------------------------------------*/
    .form-header  {
      background-color: #5eaaa8;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .form-header h1 {
      font-size: 30px;
      text-align:center;
      color:white;
      padding:50px 0;
      border-bottom:5px solid #cccccc;
    }

    /*---------------------------------------*/
    /* Form Body */
    /*---------------------------------------*/
    .form-body {
      padding:20px 40px;
      color:#666
    }

    .form-group{
      margin-bottom:20px;
    }

    .form-body .label-title {
      color:#1BBA93;
      font-size: 17px;
      font-weight: bold;
    }

    .form-body .form-input {
        font-size: 17px;
        box-sizing: border-box;
        width: 100%;
        height: 34px;
        padding-left: 10px;
        padding-right: 10px;
        color: #333333;
        text-align: center;
        border: 1px solid #d6d6d6;
        border-radius: 4px;
        background: white;
        outline: none;
    }



    .horizontal-group .left{
      float:left;
      width:49%;
    }

    .horizontal-group .right{
      float:right;
      width:49%;
    }


</style>

  </body>
</html>
<?php

if (isset($_POST['submit']))
{
  include "db.php";
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $obj=new database();
  $obj->records($fname,$lname,$email,$password);
}
  ?>
