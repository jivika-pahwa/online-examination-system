<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "online";


$conn = mysqli_connect($servername,$username,$password,$database);

  if(isset($_POST['submit'])) {

    $userID = stripslashes($_POST['username']);
    $password = stripslashes($_POST['pass']);
    $userID = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);


$sql = "select * from student where username = '$userID' && password = '$password' ";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);
if(!$num) {
  echo "invalid details or user not registered.";
}
else {
  $_SESSION['name'] = $userID;
  $session = $_SESSION['name'];
  $sql = "insert into test (name) values ('$session')";
  $query = mysqli_query($conn,$sql);
  //echo 'welcome'.$_SESSION['name'];
  header("Location:instructions.php");
}
  }
mysqli_close($conn);
 ?>
