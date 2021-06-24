<?php

require_once('classes.php');
if (isset($_POST["submit"])) {
  $x = new Product();
  $x->addProduct($_POST);
  
}
require_once('adminNav.php');
?>

<form  class="signup-form"  method="post">

<!-- form header -->
<div class="form-header">
  <h1>Add Product</h1>
</div>

<!-- form body -->
<div class="form-body">

  <!-- Firstname and Lastname -->
  <div class="horizontal-group">
    <div class="form-group left">
      <label class="label-title">Product Name</label>
      <input type="text"  name="pname" class="form-input" />
    </div>
    <div class="form-group right">
      <label class="label-title">Image</label>
      <input type="file" name = "image" class="form-input" />
    </div>
  </div>

  <!-- Email -->
  <div class="horizontal-group">
    <div class="form-group left">
      <label class="label-title">Price</label>
      <input type="number"  name="price" class="form-input" />
    </div>
    <div class="form-group right">
      <label class="label-title">Description</label>
        
      <input type="text"  name="description" class="form-input" />
    </div>
  </div>

  <!-- Passwrod and confirm password -->
  <div class="horizontal-group">
    <div class="form-group left">
      <select for="cat" class="label-title" name="category">Category</label>
     
    </div>
   
  </div>

</div>

<!-- form-footer -->
<div class="form-group">
  <input type="submit" name="submit" value="Submit">
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

