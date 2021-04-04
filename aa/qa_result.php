<?php
session_start();
$conn = mysqli_connect('localhost','root','','online');
?>
<?php

if(isset($_POST['submit'])) {
   //echo " clicked";
  if(!empty($_POST['opt'])) {
    $count = count($_POST['opt']);
    echo " out of 5 questions , you have attempted ".$count." questions" ;
    $selected = $_POST['opt'];
    print_r($selected);
    $result = 0;
    $i = 1;
    $sql = "select  *  from questions";
    $query = mysqli_query($conn,$sql);
    error_reporting(E_ERROR | E_PARSE); //remove warinings on the screen.
    while($row = mysqli_fetch_array($query)) {
      if($selected[$i] == $row['q_ans']) {
        $result = $result + 4;
      }
      $i++;
    }
    $sql = "insert into qaptitude (name,qa_marks,qa_attempt) values ('{$_SESSION['name']}','$result','$count')";
    $query = mysqli_query($conn,$sql);

    echo "<br>result : ".$result." out of 5.";

    // echo("<script type='text/javascript'>
    //
    //     alert('value stored ! Attempt another section.');
    //     window.location.href = 'questions.php';
    //
    //     </script>");
  }
  else{
    echo '<script> alert("attempt atleast one question !");
    window.location.href = "questions.php";
    </script>';
  }

}
  mysqli_close($conn);
?>
