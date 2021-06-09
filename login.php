<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include "navbar.php";?>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <br><br><br><br>
    <form class="signup-form"  method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Log In</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
            <label class="label-title">Email</label><br>
            <input type="text"  name="email" class="form-input" required/>
        </div>
        <br>
        <div class="horizontal-group">
          <label for="password" class="label-title">Password</label><br>
          <input type="password" name="password" class="form-input" required>
        </div>

      </div>

      <!-- form-footer -->
      <div class="form-group">
        <input type="submit" name="submit" value="Log In">
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
            background-color: #f05945;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
          }

          input[type=submit]:hover {background-color: #5eaaa8}

          input[type=submit]:active {
            background-color: #5eaaa8;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
          }

        </style>
      </div>
      <br>
    </form>
  </body>
</html>

<?php
			include "classes.php";
			session_start();

			if (isset($_POST['submit']))
      {
        $_SESSION['email'] = $_POST['email'];
			  $x = new Customer();
				$x->login($_POST['email'], $_POST['password']);
			}
		?>

<style media="screen">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);


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
    background-color: #f05945;
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
    color:#f05945;
    font-size: 17px;
    font-weight: bold;
  }

  .form-body .form-input {
      font-size: 17px;
      box-sizing: border-box;
      width: 50%;
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
