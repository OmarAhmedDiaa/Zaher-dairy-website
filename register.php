<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML CSS Register Form</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <form class="signup-form" action="/register" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Create Account</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name *</label>
            <input type="text" id="firstname" class="form-input"  required>
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" class="form-input">
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email*</label>
          <input type="email" id="email" class="form-input"  required>
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" id="password" class="form-input"  required>
          </div>
          <div class="form-group right">
            <label for="confirm-password" class="label-title">Confirm Password *</label>
            <input type="password" class="form-input" id="confirm-password"  required>
          </div>
        </div>

      </div>

      <!-- form-footer -->
      <div class="form-footer">
        <span>* Required</span>
        <button type="submit" class="btn">Create</button><br>
        <a href="login.php" style="margin-right:170px;">Already a user? Login here.</a>
      </div>
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
    body {
      /*background:linear-gradient(to right, #78a7ba 0%, #385D6C 50%, #78a7ba 99%);*/
      background-color: #a3d2ca;
    }

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
      background-color: #EFF0F1;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .form-header h1 {
      font-size: 30px;
      text-align:center;
      color:#666;
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
        text-align: left;
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

    #range-label {
      width:15%;
      padding:5px;
      background-color: #1BBA93;
      color:white;
      border-radius: 5px;
      font-size: 17px;
      position: relative;
      top:-8px;
    }


    ::-webkit-input-placeholder  {
      color:#d9d9d9;
    }

    /*---------------------------------------*/
    /* Form Footer */
    /*---------------------------------------*/
    .signup-form .form-footer  {
      background-color: #EFF0F1;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      padding:10px 40px;
      text-align: right;
      border-top: 1px solid #cccccc;
      clear:both;
    }

    .form-footer span {
      float:left;
      margin-top: 10px;
      color:#999;
      font-style: italic;
      font-weight: thin;
    }

    .btn {
       display:inline-block;
       padding:10px 20px;
       background-color: #1BBA93;
       font-size:17px;
       border:none;
       border-radius:5px;
       color:#bcf5e7;
       cursor:pointer;
    }

    .btn:hover {
      background-color: #169c7b;
      color:white;
    }

    a{
      color: #f05945;
    }
</style>

  </body>
</html>
