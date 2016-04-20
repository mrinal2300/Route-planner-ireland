<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOURNEY PLANNER</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="css/app.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="well">
        <h3 class="page-header">JOURNEY PLANNER</h3>
        <div class="form-group">
        <input type="text" class="form-control" id="from" placeholder="From.." required>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="to" placeholder="To..." required>
        </div>
        <button class="btn btn-success" id="find">PLAN MY ROUTE</button>
      </div>
    </div>
  <div class="col-md-6">
    <div class="well">
      <h3 class="page-header">JOURNEY PLAN</h3>
    <div id="route_info">Please select your location first.</div>
    </div>
  </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
    <script src="js/app.js"></script>
  </body>
</html>