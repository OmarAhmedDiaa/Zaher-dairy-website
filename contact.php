<!DOCTYPE html>
<?php

if(!empty($_POST["send"])) {
	$name = $_POST["username"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$conn = mysqli_connect("localhost", "root", "", "zaherdairy") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,message) VALUES ('" . $name. "', '" . $email. "','" . $message. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "navbar.php"; ?>
  </head>
  <body>
    <div class="container-fluid1 bg-grey" style="margin-top:120px;margin-left">
      <h1>CONTACT US</h1><br>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Cairo, EGY</p>
          <p><span class="glyphicon glyphicon-earphone"></span> 19360</p>
          <p><span class="glyphicon glyphicon-phone"></span> +20 011 299 83 813</p>
          <p><span class="glyphicon glyphicon-envelope"></span> wecare@zaherdairy.com</p>
        </div>
        <div class="col-lg-6">
            <div class="contact-form">
                <form id="contact-form" method="post">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input name="username" id="username"  type="text" class="form-control" placeholder="Your Name" />
                        </div>
                        <div class="col-md-6">
                            <input name="email" id="email" type="email" class="form-control" placeholder="Your Email" />
                        </div>
                    </div>
										<br>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div><input name="send" id="send" class="form-control submit" type="submit"></button></div>
                </form>
            </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="col-lg-12">
        <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13797.378831059943!2d31.4918564!3d30.1701457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b138aefe2d8bedb!2sMisr%20International%20University!5e0!3m2!1sen!2seg!4v1614202004491!5m2!1sen!2seg" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
  </body>
</html>

<style media="screen">
  .container-fluid1{
    font-size: 25px;
  }

input[type=submit]
{
	display: inline-block;
	padding: 12px 20px;
	padding-bottom: 30px;
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
