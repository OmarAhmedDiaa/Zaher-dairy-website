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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">1/2 Kg Cheddar Cheese</div>
            <div class="panel-body"><img src="pics/cheddar.jpg" class="img-responsive" style="width:67%" alt="Image"></div>
            <div class="panel-footer">50% OFF : 40 LE</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">Rice Pudding</div>
            <div class="panel-body"><img src="pics/roz.jpg" class="img-responsive" style="max-width:100%" alt="Image"></div>
            <div class="panel-footer">15 LE</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">Molten Cake</div>
            <div class="panel-body"><img src="pics/molten.jfif" class="img-responsive" style="max-width:89%" alt="Image"></div>
            <div class="panel-footer">30 LE</div>
          </div>
        </div>
      </div>
    </div>
    <br>
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

.panel-footer, .panel-heading{
  text-align:center;
}

footer{
  background-color: #5eaaa8;
  color:white;
}

</style>
