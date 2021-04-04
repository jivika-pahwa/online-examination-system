<?php
  include 'admin_DB.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
     <script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title></title>
    <style>
      h4{
        font-size: 26px;
        font-family: serif;
        color:DarkCyan;
        font-weight: bolder;
        text-align:center;
        text-decoration: underline;
        text-shadow: 2px 3px  4px lightgrey;
      }
      th{
        text-align: center;
      }
      td{
        width:5px;
        text-align: center;
      }
    </style>
  </head>
  <body>

      <nav class="navbar navbar-inverse">
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
                <li><a href="adminDB.php">Registeration</a></li>
                  <li class="active"><a href="marks.php">Result</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
                  <li class="active"><a href="adminLogout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
          </div>
          </nav>

    <h4>Result Report : </h4>
    <br>
<div class = "container">
    <table class="table table-bordered">
      <thead>
        <tr style="background: #9c9999;color:white">
          <th>Roll No</th>
          <th>Name Of Student</th>
          <th>General Awareness</th>
          <th>General English</th>
          <th>Logical Reasoning</th>
          <th>Quantative Aptitude</th>
          <th>Total Marks</th>
          <th>Percentage</th>
        </tr>
          </thead>

          <?php
              $sql = "SELECT gawareness.s_no , gawareness.name , gawareness.ga_marks AS awareness , genglish.ge_marks AS english ,
              lreasoning.lr_marks as reasoning , qaptitude.qa_marks as quantitative ,
              (gawareness.ga_marks + genglish.ge_marks + lreasoning.lr_marks + qaptitude.qa_marks) as Total
              from gawareness
              JOIN genglish ON gawareness.name = genglish.name
              JOIN lreasoning ON gawareness.name = lreasoning.name
              JOIN qaptitude ON gawareness.name = qaptitude.name
              ORDER BY gawareness.s_no ";

              $query = mysqli_query($conn,$sql);

              // -----------
              // echo '<br> GE <br>';
                    if(mysqli_num_rows($query)>0) {
                      while($row = mysqli_fetch_array($query)) {
                        $Total = $row['Total'];
                          ?>

            <tbody>
              <tr>
              <td><?php echo $row['s_no']; ?></td>
              <td style="background:#13838a;color:white;"><?php echo ucwords($row['name']); ?></td>
              <td><?php echo $row['awareness']." / 20";?></td>
              <td style="background:lightcoral;color:white;"><?php echo $row['english']." / 20";?></td>
              <td><?php echo $row['reasoning']." / 20";?></td>
              <td style="background:#13838a;color:white;"><?php echo $row['quantitative']." / 20";?></td>
              <td> <?php echo $Total." / 80";?> </td>
              <td style="background:lightcoral;color:white;"><?php echo ($Total/80)*100 . " % ";?></td>


              <?php
            }
          }
           ?>


          </tr>
        </tbody>
        </table>
      </div>

<!--End of div-->

          <br>

          <center>
            <a href="adminDB.php">
          <button type='button' name='btn' class="btn btn-info">Previous Page</button>
            </a>
            <br><br>
<p>Copyright &copy; OES 2020 All rights reserved | Thanks for Visiting us . <i class="fa fa-heart" aria-hidden="true"></i></p>
          </center>
                    <br>
      </body>
      </html>
