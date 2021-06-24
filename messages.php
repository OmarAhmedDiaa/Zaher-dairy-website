<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Messages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <?php include "navbar.php"; ?>
  </head>
  <body>
    <br><br><br>
    <h1>My Messages</h1>
    <br><br>
    <table id="products">
      <tr>
        <th>Contact</th>
        <th>Subject</th>
        <th>Message</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td>Youssef [ EMPLOYEE ]</td>
        <td>Survey</td>
        <td>Dear Mr. Omar, would you like to take part of this survey for a chance to win 500EGP in store credit? </td>
        <td>
          <form class="" action="reply.php" method="post">
            <input class="reply" type="submit" value="Reply">
          </form>
        </td>
        <td><button class="delete" type="button" name="button"data-toggle="modal" data-target="#myModal">Delete</button></td>
      </tr>
      <tr>
        <td>Ahmed [ ADMIN ]</td>
        <td>Complaint</td>
        <td>Dear Mr. Omar, your complaint is duly noted and actions will be taken. Best Regards</td>
        <td>
          <form class="" action="reply.php" method="post">
            <input class="reply" type="submit" value="Reply">
          </form>
        </td>
        <td><button class="delete" type="button" name="button"data-toggle="modal" data-target="#myModal">Delete</button></td>
      </tr>
      </table>
      <br><br>
      <div class="container">
  		  <!-- Modal -->
  		  <div class="modal fade" id="myModal" role="dialog">
  		    <div class="modal-dialog">
  		      <!-- Modal content-->
  		      <div class="modal-content">
  		        <div class="modal-header">
  		          <button type="button" class="close" data-dismiss="modal">&times;</button>
  		          <h4 class="modal-title">Update</h4>
  		        </div>
  		        <div class="modal-body">
  		          <p>The Message has been deleted.</p>
  		        </div>
  		        <div class="modal-footer">
  		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  		        </div>
  		      </div>
  		    </div>
  		  </div>
  		</div>
      <a class="back"href="home.php">Back to Home Page</a>
  </body>
</html>

<style media="screen">
.back{
  color:#F05945;
  text-decoration: underline;
}
#products {
  margin-left: 12%;
  text-align: center;
  border-collapse: collapse;
  width: 75%;
}

#products td, #products th {
  border: 1px solid #ddd;
  padding: 12px;
}

#products tr:nth-child(even){background-color: #f2f2f2;}
#products tr:nth-child(odd){background-color: #f2f2f2;}
#products tr:hover {background-color: #ddd;}

#products th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #5EAAA8;
  color: white;
}

.reply{
  background-color: #A3D2CA;
  border-radius: 5px;
}

.delete{
  background-color: #F05945;
  border-radius: 5px;
  color: white;
}
</style>
