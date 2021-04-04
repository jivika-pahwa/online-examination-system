<?php
session_start();
include 'admin_DB.php';

// $email_from = "jivika.pahwa.jiya@gmail.com";
// $email_subject = "OES Result Report";
// $email_body = "your result Thanks for Attempting";
// $to = "jiyapahwa123@gmail.com";
// $headers = "From : jivika.pahwa.jiya@gmail.com ";
// mail($to,$email_subject,$email_body,$headers);
// echo "mail sent";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   <script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    h3{
      font-size:45px;
      font-family: serif;
      color:DarkCyan;
      font-weight: bolder;
      text-align:center;
      text-decoration: underline;
      text-shadow: 2px 3px  4px lightgrey;
    }
    td{
      width:5px;
      text-align: center;
    }
  </style>
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
                    <a class="navbar-brand" href="#">Online Examination System</a>
                  </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="report.php?id=<?php echo $_SESSION['name']; ?>">Result Report</a></li>
                      <li class="active"><a href="review.php?id=<?php echo $_SESSION['name']; ?>">Review Quiz</a></li>
                  </ul>
                  <!-- <li class="active"><a href="">Welcome <span class="glyphicon glyphicon-user"></span> </a></li> -->

                  <ul class="nav navbar-nav navbar-right">
                      <li class="active"><a href=""><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['name'];?></a></li>
                      <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
              </div>
              </nav>

              <h3>Result Report</h3>
                      <br>
  <div class = "container">
          <table class="table table-bordered" style="background:white;">
            <thead>
              <tr style="background: #9c9999;color:white">
                <th style="text-align:center;" >Category</th>
                <th style="text-align:center;" >No. Of Questions Attempted</th>
                <th style="text-align:center;" >Marks Obtained</th>

              </tr>
                </thead>

                            <?php
                            $sql = "select * from genglish where name = '{$_SESSION['name']}' ";
                            $query = mysqli_query($conn,$sql);
                            // -----------
                            // echo '<br> GE <br>';
                                  if(mysqli_num_rows($query)>0) {
                                    while($row = mysqli_fetch_array($query)) {
                                        ?>
                  <tbody>
                    <tr>
                    <td>General English</td>
                    <td><?php echo $row['ge_attempt'],' / 5 Questions';?></td>
                    <td><?php echo $row['ge_marks']." / 20";?></td>

                    <?php

                    }
                    }
                     ?>

                </tr>

              <?php
              $sql = "select * from qaptitude where name = '{$_SESSION['name']}' ";
              $query = mysqli_query($conn,$sql);
              // -----------
              // echo '<br> GE <br>';
                    if(mysqli_num_rows($query)>0) {
                      while($row = mysqli_fetch_array($query)) {
                          ?>

<!-- --------------- -->

                  <tr>
                  <td>Quantitative Aptitude</td>
                  <td><?php echo $row['qa_attempt'],' / 5 Questions';?></td>
                  <td><?php echo $row['qa_marks']." / 20";?></td>

                  <?php

                  }
                  }
                   ?>

              </tr>

<!-- ------------------ -->

            <?php
            $sql = "select * from lreasoning where name = '{$_SESSION['name']}' ";
            $query = mysqli_query($conn,$sql);
            // -----------
            // echo '<br> GE <br>';
                  if(mysqli_num_rows($query)>0) {
                    while($row = mysqli_fetch_array($query)) {
                        ?>
                  <tr style="background:#13838a;color:white;">
                  <td>Logical Reasoning</td>
                  <td><?php echo $row['lr_attempt'],' / 5 Questions';?></td>
                  <td><?php echo $row['lr_marks']." / 20";?></td>

                  <?php

                  }
                  }
                   ?>

              </tr>
                <?php
                $sql = "select * from gawareness where name = '{$_SESSION['name']}' ";
                $query = mysqli_query($conn,$sql);
                // -----------
                // echo '<br> GE <br>';
                      if(mysqli_num_rows($query)>0) {
                        while($row = mysqli_fetch_array($query)) {
                            ?>
                      <tr>
                      <td>General Awareness</td>
                      <td><?php echo $row['ga_attempt'],' / 5 Questions';?></td>
                      <td><?php echo $row['ga_marks']." / 20";?></td>
                    </tr>
                      <?php

                      }
                    }

                       ?>
                       <tr>

                      <td>Total </td>
                  <?php

                $sql = "SELECT gawareness.name , (gawareness.ga_attempt + genglish.ge_attempt + lreasoning.lr_attempt + qaptitude.qa_attempt) as Total
                        from gawareness
                        JOIN genglish ON gawareness.name = genglish.name
                        JOIN lreasoning ON gawareness.name = lreasoning.name
                        JOIN qaptitude ON gawareness.name = qaptitude.name

                        WHERE gawareness.name = '{$_SESSION['name']}' ";

                          $query = mysqli_query($conn,$sql);
                          $fetch = mysqli_fetch_array($query);

                ?>
                        <td><?php  echo $fetch['Total'].' Questions '; ?></td>

                        <?php

                  $sql = "SELECT gawareness.name , (gawareness.ga_marks + genglish.ge_marks + lreasoning.lr_marks + qaptitude.qa_marks) as Total
                          from gawareness
                          JOIN genglish ON gawareness.name = genglish.name
                          JOIN lreasoning ON gawareness.name = lreasoning.name
                          JOIN qaptitude ON gawareness.name = qaptitude.name

                            WHERE gawareness.name = '{$_SESSION['name']}' ";

                          $query = mysqli_query($conn,$sql);
                          $fetch = mysqli_fetch_array($query);
                          $Total = $fetch['Total'];

                    ?>
                       <td><?php echo $Total.' out of 80 ' ?></td>

                     </tr>

                     <!-- <tr  style="background-color:#13838a; color:white;"> -->

                       <tr style="background-color:lightcoral;color:white;">
                       <td>Percentage</td>
                       <td>-</td>
                      <td><?php echo ($Total/80)*100 . ' % ' ; ?></td>
                     </tr>

                </tbody>
                </table>
                </div>
                <br>
                <center>
                    <a href="review.php">
                    <button type='button' name='review' class="btn btn-warning">Review Quiz</button></a>
                  <br><br>
              <br><br>
<p>Copyright &copy; OES 2020 All rights reserved | Thanks for Visiting us . <i class="fa fa-heart" aria-hidden="true"></i></p>
                </center>
                <!-- <script type = "text/javascript" >
    function preventBack() { window.history.forward(); }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
</script> -->
            </body>
            </html>
