<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      body{
        background-image:url("2.jpg");
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

      #Register{
            position:absolute;
            left:38%;
            top:76%;
            width:100px;
            border:2px solid white;
      }
      #SignIn{
        position:absolute;
        left:58%;
        top:76%;
        width:100px;
        border:2px solid white;
      }
      #Admin{
        position:absolute;
        left:94%;
        border:2px solid white;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <!-- Navigation Bar -->
<div class="icon-bar">
  <a href="index.php"><i class="fa fa-home"></i></a>
  <a href="https://www.google.com/"><i class="fa fa-globe"></i></a>
  <a href="Register.php"><i class="fa fa-user-plus"></i></a>
  <a href="signin.php"><i class="fa fa-user"></i></a>
</div>

  <body>
      <a href="register.php"><button type="button" name="Register" class="btn btn-info btn-lg" id="Register">Register</button></a>
      <a href="signin.php"><button type="button" name="SignIn" class='btn  btn-info btn-lg' id="SignIn">SignIn</button></a>
      <a href="admin.php"><button type="button" name="Admin" class='btn btn-default' id="Admin">Admin</button></a>
  </body>
</html>
