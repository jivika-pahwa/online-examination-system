<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    .center_div{
      position:absolute;
      left:7%;
      width:25%;
}
  input {
    border: 2px solid grey;
    padding:4px;
    border-radius: 6px;
    color:grey
}
  .glyphicon{
    font-size:25px;
    color:black;
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
    <center>
      <br><br>
    Welcome Student
    <br><br>
    <form action="signinDB.php" method="post">
      <div class='container center_div'>

        <br>
        <span class="glyphicon glyphicon-user " class='glyphicon'> </span>
    <input type="text" class='' placeholder="enter your username" name="username" required/>
    <br><br>
    <!-- ------------ -->
    <span class="glyphicon glyphicon-pencil " class='glyphicon'></span>
    <input type="password" placeholder="enter your password" name="pass" required/>
    <br><br>

        <input type="submit" name="submit" value="submit" />
    </form>
  </center>
  </body>
</html>
