<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <head>
    <style>
    .box{
      position: relative;
      top:40px;
      left:25%;
      width:50%;
      height:45%;
      line-height: 1.6;
    }
    #test{
      position: absolute;
      top:70%;
      left:46%;

    }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-inverse ">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
                  <a class="navbar-brand" style="color:white;" href="#">Online Examination System</a>
            </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="instructions.php">Exam Instructions</a></li>
            </ul>
            <!-- <li class="active"><a href="">Welcome <span class="glyphicon glyphicon-user"></span> </a></li> -->

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href=""><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['name'];?></a></li>
                <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
              </ul>
          </div>
        </div>
        </nav>
        <div class="container">

              <div class="box">

                <div class="panel panel-info">
                  <div class="panel-heading">Exam Instructions : </div>
                  <div class="panel-body">
                    <ul>
                        <li>Welcome to Online Exam for General Aptitude.</li>
                        <li>Exam has total four sections : </li>
                        <li>General English</li>
                        <li>Quantative Aptitude</li>
                        <li>Logical Reasoning</li>
                        <li>General Awareness</li>
                        <li>Each section has total 15 Questions.</li>
                        <li>Click on each section above for attempting the Questions.</li>
                        <li>Total time for the Exam is 120 minutes.</li>
                        <li>Each Question is of 4 marks.</li>
                        <li>There will be no negative marking.</li>
                    </ul>
                    </div>
                  </div>

              <h3 style="color:DarkCyan"><i>Best of Luck for your Exam !</i></h3>
              <br>
              <center><a href="questions.php"><button class="btn btn-warning">Start Test</button></a></center>
              </div>
            </div>

  </body>
  <script type = "text/javascript" >
    function preventBack() { window.history.forward(); }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
  </script>

</html>
