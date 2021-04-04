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
      top:20px;
      left:30%;
      width:45%;
    }
    /* a:link,a:active,a:visited{
      color:DarkCyan;
    } */
    a:hover{
      color:Darkgrey;
    }
    #timer{
      text-align:right;
      color:lightcoral;
      font-size:20px;
      font-weight: bold;
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
      <nav class="navbar navbar-inverse ">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
                <a class="navbar-brand" style="color:white;" href="">Online Examination System</a>
              </div>

            <div class="collapse navbar-collapse" id="myNavbar">

              <ul class="nav navbar-nav">
                <li class="active"><a href="#!/">General English </a></li>
                <li class="active"><a href="#!Quantative">Quantitative Aptitude</a></li>
                <li class="active"><a href="#!Logical">Logical Reasoning </a></li>
                <li class="active"><a href="#!Awareness">General Awareness</a></li>
              </ul>
              <!-- <li class="active"><a href="">Welcome <span class="glyphicon glyphicon-user"></span> </a></li> -->

              <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href=""><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['name'];?></a></li>
                  <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
            <!-- <p id="timer"></p> -->
          </div>
        </nav>

        <div ng-view></div>

  </body>
  <script src="routing.js" type='text/javascript'></script>

  <script type = "text/javascript">
  function preventBack() { window.history.forward(); }
  setTimeout("preventBack()", 0);
  window.onunload = function () { null };

          // clock timer -----

  var countDownDate = new Date("15 Aug 2020 16:17:10").getTime();

  var x = setInterval(function(){

    var now = new Date().getTime();
    var distance = countDownDate - now ;
    //document.write(distance);
    var days = Math.floor(distance/(1000*24*60*60));
    var hours = Math.floor((distance%(1000*24*60*60))/(1000*60*60));
    var minutes = Math.floor((distance%(1000*60*60)) / (1000*60));
    var seconds = Math.floor((distance%(1000*60)) / 1000);

    document.getElementById("timer").innerHTML =  hours + "hr : " + minutes + "min : " + seconds + "sec";


    if(distance < 0) {
      clearInterval(x);
      document.getElementById("timer").innerHTML = 'Time Up';
      window.location.href = 'report.php';

      }

  },1000);


  </script>

</html>
