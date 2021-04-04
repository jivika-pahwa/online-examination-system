<?php
session_start();
include 'admin_DB.php';
$i = 1;

$selected = $_POST['opt'];

$_SESSION['answers'] = $selected;

$ans = $_SESSION['answers'];

foreach ($ans as $array) {
  echo $array;
}

 ?>
