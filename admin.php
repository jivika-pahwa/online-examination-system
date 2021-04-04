<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    .head{
      font-size:45px;
      font-family: serif;
      color:DarkCyan;
      font-weight: bolder;
      text-align:center;
      text-decoration: underline;
      text-shadow: 2px 3px  4px lightgrey;
    }

.container{
 position relative;
}
form{
 position: absolute;
 top: 30%;
 left: 50%;
 transform: translate(-50%,-50%);
}

    </style>

    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="home.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Navigation Bar -->
<div class="icon-bar">
  <a href="index.php"><i class="fa fa-home"></i></a>
  <a href="https://www.google.com/"><i class="fa fa-globe"></i></a>
  <a href="Register.php"><i class="fa fa-user-plus"></i></a>
  <a href="signin.php"><i class="fa fa-user"></i></a>
 </div>

    <h2 class="head">Admin Log In</h2>
      </head>
            <body>

      <div class="container">

      <form class="form-horizontal" action="adminsign_DB.php" method="POST">

        <div class="form-group">

          <label class="control-label col-sm-4" for="username">Username :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="pass">Password:</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pass" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>

  </body>
  <script type="text/javascript">

  $(window).bind("pageshow", function() {
    var form = $('form');
    // let the browser natively reset defaults
    form[0].reset();
      form[1].reset();
  });

  function preventBack(){
    window.history.forward();
  }
  setTimeout("preventBack()",0);
  window.onunload = function(){bgi;

    null
  };

  </script>

</html>
