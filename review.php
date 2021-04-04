<?php
session_start();
include 'admin_DB.php';
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

    h2,h3{
      font-size:45px;
      font-family: serif;
      color:DarkCyan;
      font-weight: bolder;
      text-align:center;
      text-decoration: underline;
      text-shadow: 2px 3px  4px lightgrey;
    }
    h2{
      font-size: 28px;
      color:black;
    }
    td{
      width:5px;
      text-align: center;
    }
    th{
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

              <h3>Review Quiz</h3>
                      <h2>Your Answers</h2>
                      <br>
                      <div class = "container">
                              <table class="table table-bordered" style="background:white;">
                                <thead>
                                  <tr style="background: #9c9999;color:white">
                                    <th>Category</th>
                                    <th>Question 1</th>
                                    <th>Question 2</th>
                                    <th>Question 3</th>
                                    <th>Question 4</th>
                                    <th>Question 5</th>

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
                                        <?php
                                      foreach (json_decode($row['answers']) as $key => $value) {
                                        ?>

                                       <td><?php echo 'Option : '.$value; ?></td>


                                        <?php
                                      }
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

                                      <tr  style="background:#13838a;color:white;">
                                      <td>Quantitative Aptitude</td>
                                      <?php
                                    foreach (json_decode($row['answers']) as $key => $value) {
                                      ?>

                                     <td><?php echo 'Option : '.$value; ?></td>

                                      <?php
                                    }
                                }
                                    }
                                       ?>

                                  </tr>

                    <!-- Logical Reasoning -->

                                <?php
                                $sql = "select * from lreasoning where name = '{$_SESSION['name']}' ";
                                $query = mysqli_query($conn,$sql);
                                // -----------
                                // echo '<br> GE <br>';
                                      if(mysqli_num_rows($query)>0) {
                                        while($row = mysqli_fetch_array($query)) {
                                            ?>
                                      <tr>
                                      <td>Logical Reasoning</td>

                                      <?php

                                    foreach (json_decode($row['answers']) as $key => $value) {
                                      ?>

                                     <td><?php echo 'Option : '.$value; ?></td>

                                      <?php
                                    }
                                      }
                                      }
                                       ?>

                                  </tr>

                        <!-- General Awareness -->

                                    <?php
                                    $sql = "select * from gawareness where name = '{$_SESSION['name']}' ";
                                    $query = mysqli_query($conn,$sql);
                                    // -----------
                                    // echo '<br> GE <br>';
                                          if(mysqli_num_rows($query)>0) {
                                            while($row = mysqli_fetch_array($query)) {
                                                ?>
                                          <tr style="background:lightcoral;color:white;">
                                          <td>General Awareness</td>

                                          <?php
                                        foreach (json_decode($row['answers']) as $key => $value) {
                                          ?>

                                         <td><?php echo 'Option : '.$value; ?></td>

                                          <?php
                                        }
                                          }
                                        }

                                    ?>
                                           </tr>


                                    </tbody>
                                    </table>
                                    </div>

              <!-- correct answers -->

                                    <h2>Correct Answers</h2>
                                    <br>
                                    <div class = "container">
                                            <table class="table table-bordered" style="background:white;">
                                              <thead>
                                                <tr style="background: #9c9999;color:white">
                                                  <th>Category</th>
                                                  <th>Question 1</th>
                                                  <th>Question 2</th>
                                                  <th>Question 3</th>
                                                  <th>Question 4</th>
                                                  <th>Question 5</th>

                                                </tr>
                                                  </thead>

                                                  <tbody>
                                                  <tr>
                                                <td>General English</td>

                                            <?php
                                        $sql = "select * from questions where q_category = 'GE' ";
                                      $query = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($query)>0) {
                                    while($row = mysqli_fetch_array($query)) {
                                  ?>

                                            <td><?php echo 'Option : '.$row['q_ans']; ?></td>

                                                <?php
                                                }
                                                  }
                                                       ?>

                                                  </tr>

                                            <tr  style="background:#13838a;color:white;">
                                              <td>Quantitative Aptitude</td>

                                              <?php
                                          $sql = "select * from questions where q_category = 'QA' ";
                                        $query = mysqli_query($conn,$sql);
                                      if(mysqli_num_rows($query)>0) {
                                      while($row = mysqli_fetch_array($query)) {
                                    ?>

                                              <td><?php echo 'Option : '.$row['q_ans']; ?></td>

                                                  <?php
                                                  }
                                                    }
                                                         ?>

                                                    </tr>

                                          <tr>
                                            <td>Logical Reasoning</td>
                                    <!-- Logical Reasoning -->

                                    <?php
                                $sql = "select * from questions where q_category = 'LR' ";
                              $query = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($query)>0) {
                            while($row = mysqli_fetch_array($query)) {
                          ?>

                                    <td><?php echo 'Option : '.$row['q_ans']; ?></td>

                                        <?php
                                        }
                                          }
                                               ?>

                                          </tr>

                                      <!-- General Awareness -->
                                      <tr style="background:lightcoral;color:white;">
                                        <td>General Awareness</td>
                                      <?php
                                      $sql = "select * from questions where q_category = 'GA' ";
                                      $query = mysqli_query($conn,$sql);
                                      if(mysqli_num_rows($query)>0) {
                                      while($row = mysqli_fetch_array($query)) {
                                      ?>

                                      <td><?php echo 'Option : '.$row['q_ans']; ?></td>

                                          <?php
                                          }
                                            }
                                                 ?>

                                            </tr>



                                                  </tbody>
                                                  </table>
                                                  </div>
                                    <br>
                <center>
                    <a href="report.php">
                    <button type='button' name='Previous' class="btn btn-warning">Previous Page</button></a>
                  <br><br>
<p>Copyright &copy; OES 2020 All rights reserved | Thanks for Visiting us . <i class="fa fa-heart" aria-hidden="true"></i></p>
                </center>
            </body>
            </html>
