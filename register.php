<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>

    .container{
     position relative;
    }
    form{
     position: absolute;
     top: 53%;
     left: 50%;
     color:white;
     transform: translate(-50%,-50%);
    }

  body{
    background-image:url("online2.jpg");
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:100% 80%;
  }
  .icon-bar {
  	width:90px;
  	background-color:black;
  	position:fixed;
  }
  .icon-bar a{
  	display:block;
  	text-align:center;
  	padding:16px;
  	color:white;
  	transition: all 0.3s ease;
  	font-size:36px;
  }
  .icon-bar a:hover{
  	background-color:gray;
  	color:white;
  }

    </style>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <!-- Navigation Bar -->
<div class="icon-bar">
  <a href="index.php"><i class="fa fa-home"></i></a>
  <a href="https://www.google.com/"><i class="fa fa-globe"></i></a>
  <a href="Register.php"><i class="fa fa-user-plus"></i></a>
  <a href="signin.php"><i class="fa fa-user"></i></a>
 </div>
  <body background="online2.jpg">
    <center>
      <img src="reg.png" height="155px" width="1000px" />
      <br><br>

      <div class="container">

      <form class="form-horizontal" action="signupDB.php" method="POST">

        <div class="form-group">
          <label class="control-label col-sm-4" for="username">Username :</label>
          <div class="col-sm-8">

            <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="email">Email :</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="email" placeholder="Enter your Email ID" name="email" required>
          </div>
        </div>

                <div class="form-group">
                  <label class="control-label col-sm-4" for="username">DOB :</label>
                  <div class="col-sm-8">

                    <input type="text" class="form-control" id="dob" placeholder="Enter your DOB" name="dob" required>
                  </div>
                </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4" for="pass">Password:</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="pwd" placeholder="Enter your Password" name="pass" required>
                        </div>
                      </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-8">

            <button type="reset" name="reset" value="reset" class="btn btn-default">Reset</button>
            <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>

          </div>
        </div>

      </form>

  </body>
</html>
