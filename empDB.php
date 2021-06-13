<?php include ("db.php");?>
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
      
  </head>
  <body>
       <?php 
      $db = new database();
      $conn = $db->connect();
      ?>
    <br><br><br>
    <h1>Users Information</h1>
      
    
<div class="container">
 
        
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
     
 
       $query = "SELECT * FROM users WHERE role = 'user'";
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
       <td style="width: 80px" ><button value="delete" name="delete" class="btn btn-danger"> Delete </button></td>
       <td style="width: 80px" ><button value="save" name="save" class="btn btn-success"> Save </button></td>

	</tr>
	<?php
    }
    ?>
    </tbody>
  </table>
</div>
  
  </body>
</html>

<style media="screen">


</style>
