<?php include ("db.php");
session_start();
include("classes.php");

if(isset($_POST['submit'])){
    $admin = new Admin();
    $admin->addEmployee($post);
}

if(isset($_GET['id'])){
    $admin = new Admin();
    $admin->deleteEmployee($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users Information</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
      <?php include "adminNav.php";?>
    <link rel="stylesheet" href="main.css">
      <style>
       /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
  </head>
  <body>
       <?php 
      $db = new database();
      $conn = $db->connect();
      ?>
    <br><br><br>
    <h1>Admin Information</h1>
      
    
<div class="container">
 
        <?php if($_SESSION["role"] == "topadmin"){?>
        
            <input id = "myBtn" type = "button" value="Add" name="add" class="btn btn-success" style ="margin-left: 93%;"> 
            <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <form class="signup-form"  method="post">

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
            <input type="email" name = "email" class="form-input" required/>
          </div>
        </div>

        <!-- Email -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Address</label>
            <input type="text"  name="address" class="form-input" required/>
          </div>
          <div class="form-group right">
            <label class="label-title">Mobile Number</label>
              
            <input type="number"  name="mobile" class="form-input" required/>
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
            <input type="password" name="cpassword" class="form-input" required>
          </div>
        </div>

      </div>

      <!-- form-footer -->
      <div class="form-group">
        <input type="submit" name="submit" class = "btn btn-success" value="Submit">
      </div>
      <br>
    </form>

  </div>

</div>
       <?php
        }
        ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone Number</th>  
      </tr>
    </thead>
    <tbody>
      <?php
     
 
       $query = "SELECT * FROM users WHERE role = 'admin' OR role = 'topadmin'";
       $result = mysqli_query($conn,$query);

		while($row = $result -> fetch_array(MYSQLI_ASSOC)) {     
               
		    $id = $row['id'];
		    $fname = $row['first_name'];
		    
		    $email = $row['email'];  
		     
        $mob_num = $row['mob_num']; 
		    
		    
		
		?>
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $fname; ?></td>
        <td><?php echo $email; ?></td> 
        <td><?php echo $mob_num; ?></td>
        <?php if($_SESSION["role"] == "topadmin"){?>
        <td style="width: 80px" ><a id="idTag" href="admins.php?id=<?php echo $id; ?>"><button value="delete" name="delete" class="btn btn-danger"> Delete </button></a></td>
       <?php }?>
	</tr>
	<?php
    }
    ?>
    </tbody>
  </table>
</div>
  </body>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</html>

<style media="screen">


</style>
