<!DOCTYPE html>
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
    <div class="container-fluid1 bg-grey">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Cairo, EGY</p>
          <p><span class="glyphicon glyphicon-earphone"></span> 19360</p>
          <p><span class="glyphicon glyphicon-phone"></span> +20 011 299 83 813</p>
          <p><span class="glyphicon glyphicon-envelope"></span> wecare@zaherdairy.com</p>
          <a href="https://www.facebook.com/ZaherDairy/?ref=page_internal"><i class="fa fa-facebook-square"></i>
          <a href="https://twitter.com/zaherdairy?lang=en"><i class="fa fa-twitter"></i>
          <a href="https://www.instagram.com/zaherdairy/?hl=en"><i class="fa fa-instagram"></i>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="6"></textarea><br>
          <div class="row">
            <div class="col-sm-11 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="container-fluid text-center">
      <br>
      <p>Zaher Dairy Copyright</p>
      <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Sign Up</button>
      </form>
      <br>
    </footer>
  </body>
</html>

<style media="screen">
  .container-fluid1{
    font-size: 25px;
  }

  body{
    background-color: #a3d2ca;
  }

  footer{
    background-color: #5eaaa8;
    color:white;
}
</style>
