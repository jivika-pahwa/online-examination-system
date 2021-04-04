<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "online";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn) {
    echo "error in connection".mysqli_connect_error();
}

  if(isset($_POST['submit'])) {

    $userID = stripslashes($_POST['username']);
    $email = stripslashes($_POST['email']);
    $DOB = stripslashes($_POST['dob']);
    $password = stripslashes($_POST['pass']);
    // ----------
    $userID = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $DOB = mysqli_real_escape_string($conn,$_POST['dob']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $_SESSION['userID'] = $_POST['username'];

$sql = "insert into student (username,email,DOB,password) values('$userID','$email','$DOB','$password')";
$query = mysqli_query($conn,$sql);
if(!$query) {
  echo " cant be inserted",mysqli_error($conn);
}
else {
  echo "registered ".$_SESSION['userID'];
}
}
mysqli_close($conn);

?>
