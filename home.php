<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <?php include "navbar.php";?>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Zaher Dairy</h1>
        <h2>Excellence in Dairy</h2>
        <h3>Since 1984</h3>
      </div>
    </div>
    <img class="promo" src="pics/eid.jpg" alt="Eid Promotion">
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <h1>What we have to offer:</h1><br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="margin-left:575px;">
        <div class="item active">
          <img src="pics/1.jpg" width="25%" >
        </div>

        <div class="item">
          <img src="pics/2.jpg" width="25%">
        </div>

        <div class="item">
          <img src="pics/3.jpg" width="25%">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </body>
</html>

<style media="screen">
.jumbotron{
  background-color: #a3d2ca;
  color:white;
}

.promo{
  position: absolute;
    left: 50%;
    transform: translatex(-50%);
    max-width: 65%;
}

</style>
