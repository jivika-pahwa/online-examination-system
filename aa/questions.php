<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>

  <head>
  <style>
    .box{
      position:relative;
      top:56px;
      left:30%;
      width:45%;
    }
  </style>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title></title>
  </head>

  <body ng-app='myapp'>
    <a href="#!/">General English </a> |
    <a href="#!Quantative">Quantitative Aptitude</a> |
    <a href="#!Logical">Logical Reasoning </a> |
    <a href="#!Awareness">General Awareness</a><br>

    <a>welcome <?php echo $_SESSION['name'];?></a>
        <div ng-view></div>

  </body>
  <script src="routing.js" type='text/javascript'></script>
</html>
