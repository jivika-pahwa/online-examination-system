<?php

include 'admin_DB.php';

$user = $_POST['username'];
$pass = $_POST['pass'];

$sql = "select * from admin where username = '$user' && password = '$pass' ";
$query = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query);
if(!$rows){
  echo "you are not the admin";
}
else {
  header("Location:adminDB.php");
}

mysqli_close($conn);
 ?>
