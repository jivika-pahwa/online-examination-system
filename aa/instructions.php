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
      position: absolute;
      top:10%;
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
            <h3>welcome <?php echo $_SESSION['name']?></h3>
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
              <center><a href="questions.php"><button class="btn btn-warning">Start Test</button></a></center>
              </div>

  </body>
</html>
