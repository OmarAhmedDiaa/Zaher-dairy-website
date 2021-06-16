<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Promotions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <?php include "navbar.php"; ?>
  </head>
  <body>
    <br><br><br>
    <h1>Sales & Promotions</h1>
    <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">400 gm Al Duha Penne Rigate</div>
        <div class="panel-body"><img src="pics/promos/macaroni.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><label style="text-decoration:line-through;">50 EGP</label> <label>25 EGP</label>  <br><br>
          <input type="text" value="1">
          <button type="button" name="button">Add to Cart</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Ice-cream Tarte</div>
        <div class="panel-body"><img src="pics/promos/tart.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><label style="text-decoration:line-through;">80 EGP</label> <label>50 EGP</label> <br><br>
          <input type="text" value="1">
          <button type="button" name="button">Add to Cart</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">1/2 Kg Mainz German Cheese</div>
        <div class="panel-body"><img src="pics/promos/mainz.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><label style="text-decoration:line-through;">70 EGP</label> <label>40 EGP</label> <br><br>
          <input type="text" value="1">
          <button type="button" name="button">Add to Cart</button></div>
      </div>
    </div>
  </div>
</div><br>
  </body>
</html>

<style media="screen">
button{
  background-color: #F05945;
  border-radius: 4px;
  color:#fff;
}

input[type=text]{
  width:30px;
  text-align: center;
  border-radius: 4px;
}
</style>
