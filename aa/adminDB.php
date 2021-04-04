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


            <h3><i>Registered Students : </i></h3>
                      <br>
            <?php

            $conn = mysqli_connect('localhost','root','','online');
            $sql = "select * from student";
            $query = mysqli_query($conn,$sql);
            if(mysqli_num_rows($query)>0) {
              while($row = mysqli_fetch_array($query)) {
                ?>
                <div class = "container">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>S_no.</th>
                          <th>Registered Student</th>
                          <th>Registered email </th>
                          <th>Date Of Birth</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <td><?php echo $row['s_no']; ?></td>
                          <td><?php echo $row['username']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['DOB']; ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                <?php
              }
            }
          ?>

          <center><a href="marks.php">
            <button type='button' name='btn' class="btn btn-info">Next Page</button></a>
          </center>

            <!-- ------------------- -->
          </body>
          </html>
