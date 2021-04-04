<?php
  session_start();
  include 'admin_DB.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <head>
  <style>

    h2{
      font-size:30px;
      font-family: serif;
      color:DarkCyan;
      font-weight: bolder;
      text-align:center;
      text-decoration: underline;
      text-shadow: 2px 3px  4px lightgrey;
    }
  </style>
  <title></title>
        <h2><i>General English</i></h3>
  </head>
    <body>
      <?php
      $sql = "select * from questions where q_category = 'GE'";
      $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0) {
        while($row = mysqli_fetch_array($query))
         {
          ?>
          <form action="ge_result.php" method="post">
          <div class="box">


          <div class="panel panel-primary">
            <div class="panel-heading">
              <?php echo $row['q_no'].".".$row['question']; ?>
            </div>
            <div class="panel-body">
              <input type="radio"  name="opt[<?php echo $row['q_id']; ?>]" value = "1" /> <?php echo $row['optA']; ?> <br>
              <input type="radio"  name="opt[<?php echo $row['q_id']; ?>]" value = "2" /> <?php echo $row['optB']; ?> <br>
              <input type="radio"  name="opt[<?php echo $row['q_id']; ?>]" value = "3" /> <?php echo $row['optC']; ?> <br>
              <input type="radio"  name="opt[<?php echo $row['q_id']; ?>]" value = "4" /> <?php echo $row['optD']; ?> <br>
            </div>
          </div>
          </div>
  <?php
        }
      }
      ?>
      <br>
      <center>
      <button type="submit"  class='btn btn-warning' name="submit"  value="submit" >Submit Above Section</button>
    </center>

          </form>
          <br>
          <h4><center>Note:[ kindly submit and then move to other section ]</center></h4>
            <!-- </div> -->
    </body>
<script type="text/javascript">


</script>
<!--script ends here-->

    </html>
