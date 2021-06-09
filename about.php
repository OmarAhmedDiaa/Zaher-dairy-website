<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <?php include "navbar.php"; ?>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Zaher Dairy</h1>
      <p>Excellence in Dairy</p>
    </div>
    <!-- Container (About Section) -->
    <div class="container-fluid1">
      <div class="row">
        <div class="col-sm-8">
          <h2><b>About Zaher Dairy</b></h2>
          <h4>"We strive for excellence."</h4>
          <p>Zaher Dairy is one of Egypt's dairy products manufacturers and vendors. We've been open for business for over 45 years.
          Currently, we have over 5 branches accross Cairo and we plan to expand to neighboring cities.</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo"></span>
        </div>
      </div>
    </div>
    <div class="container-fluid1 bg-grey">
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-globe logo"></span>
        </div>
        <div class="col-sm-8">
          <h2><b>Our Values</b></h2>
          <h4><strong>MISSION:</strong> Our mission is to provide 100% organic products to our customers.</h4>
          <p><strong>VISION:</strong> Our vision is for the world of dairy products to consist of totally organic, chemical-free products to the world.</p>
        </div>
      </div>
    </div>
    <!-- Container (Services Section) -->
    <div class="container-fluid text-center">
      <h2><b>SERVICES</b></h2>
      <h4>What we offer</h4>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-off logo-small"></span>
          <h4>POWER</h4>
          <p>We open from 9AM till 2AM</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-heart logo-small"></span>
          <h4>LOVE</h4>
          <p>All our products are made with love and care</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-lock logo-small"></span>
          <h4>JOB DONE</h4>
          <p>We guarantee you a satisfactory experience</p>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-leaf logo-small"></span>
          <h4>GREEN</h4>
          <p>Our products are 100% Organic</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-certificate logo-small"></span>
          <h4>CERTIFIED</h4>
          <p>Our products are certified by the Ministry of Health</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-wrench logo-small"></span>
          <h4 style="color:#303030;">HARD WORK</h4>
          <p>We work very hard to achieve customer satisfaction</p>
        </div>
      </div>

    </div>
    <br>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <br>
      <h2><b>What our customers say</b></h2>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <h4>"This Store is the best. I am so happy with the result!"<br><span style="font-style:normal;">Kirollos Emad, Architect</span></h4>
        </div>
        <div class="item">
          <h4>"One word... WOW!!"<br><span style="font-style:normal;">Youssef Salem, Graphic Designer</span></h4>
        </div>
        <div class="item">
          <h4>"I have never tasted anything like Zaher Dairy's products before."<br><span style="font-style:normal;">Fatma Khaled, Olympic Athlete</span></h4>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
  </body>
</html>

<style media="screen">
  .jumbotron {
    background-color: #a3d2ca;
    color: #ffffff;
    padding: 100px 25px;
  }

  .container-fluid1{
    padding: 60px 50px;
  }
  .bg-grey {
  background-color: #a3d2ca;
}

.logo{
  font-size:200px;
  color: #f05945;
}

.logo-small{
  font-size: 50px;
  color: #f05945;
}

.carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #f4511e;
}

.carousel-indicators li {
  border-color: #f4511e;
}

.carousel-indicators li.active {
  background-color: #f4511e;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
}

footer{
  background-color: #5eaaa8;
  color:white;
}

.carousel{
  background-color: #a3d2ca;
}
</style>
