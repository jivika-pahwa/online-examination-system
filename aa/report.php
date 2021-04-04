<?php
session_start();
  $conn = mysqli_connect('localhost','root','','online');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   <script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
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

          <h3><i>General English</i></h3>
          <br>
  <body>
              <?php
              $sql = "select * from genglish where name = '{$_SESSION['name']}' ";
              $query = mysqli_query($conn,$sql);
              // -----------
              // echo '<br> GE <br>';
                    if(mysqli_num_rows($query)>0) {
                      while($row = mysqli_fetch_array($query)) {
                          ?>
  <div class = "container">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Marks</th>
                <th>Attempted</th>
              </tr>
                </thead>
                  <tbody>
                    <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['ge_marks']." / 20";?></td>
                    <td><?php echo $row['ge_attempt'],' / 5 questions';?></td>

                    <?php

                    }
                    }
                     ?>

                </tr>
              </tbody>
              </table>
            </div>

<!-- --------------- -->

          <h3><i>Quantative Aptitude</i></h3>
          <br>
            <?php
            $sql = "select * from qaptitude where name = '{$_SESSION['name']}' ";
            $query = mysqli_query($conn,$sql);
            // -----------
            // echo '<br> GE <br>';
                  if(mysqli_num_rows($query)>0) {
                    while($row = mysqli_fetch_array($query)) {
                        ?>
            <div class = "container">
            <table class="table table-bordered">
            <thead>
            <tr>
              <th>Name</th>
              <th>Marks</th>
              <th>Attempted</th>
            </tr>
              </thead>
                <tbody>
                  <tr>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['qa_marks']." / 20";?></td>
                  <td><?php echo $row['qa_attempt'],' / 5 questions';?></td>

                  <?php

                  }
                  }
                   ?>

              </tr>
            </tbody>
            </table>
            </div>

<!-- ------------------ -->


          <h3><i>Logical Reasoning</i></h3>
          <br>
            <?php
            $sql = "select * from lreasoning where name = '{$_SESSION['name']}' ";
            $query = mysqli_query($conn,$sql);
            // -----------
            // echo '<br> GE <br>';
                  if(mysqli_num_rows($query)>0) {
                    while($row = mysqli_fetch_array($query)) {
                        ?>
            <div class = "container">
            <table class="table table-bordered">
            <thead>
            <tr>
              <th>Name</th>
              <th>Marks</th>
              <th>Attempted</th>
            </tr>
              </thead>
                <tbody>
                  <tr>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['lr_marks']." / 20";?></td>
                  <td><?php echo $row['lr_attempt'],' / 5 questions';?></td>

                  <?php

                  }
                  }
                   ?>

              </tr>
            </tbody>
            </table>
            </div>

  <!-- -------------- -->

              <h3><i>General Awareness</i></h3>
              <br>
                <?php
                $sql = "select * from gawareness where name = '{$_SESSION['name']}' ";
                $query = mysqli_query($conn,$sql);
                // -----------
                // echo '<br> GE <br>';
                      if(mysqli_num_rows($query)>0) {
                        while($row = mysqli_fetch_array($query)) {
                            ?>
                <div class = "container">
                <table class="table table-bordered">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Marks</th>
                  <th>Attempted</th>
                </tr>
                  </thead>
                    <tbody>
                      <tr>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['ga_marks']." / 20";?></td>
                      <td><?php echo $row['ga_attempt'],' / 5 questions';?></td>

                      <?php

                      }
                      }

                       ?>

                  </tr>
                </tbody>
                </table>
                </div>
                <br>
                <center><a href="logout.php">
                  <button type='button' name='logout' class="btn btn-info">Logout</button></a>
                  <br><br>
                  [Hope you enjoy . thankuu :)]
                </center>
            </body>
            </html>
