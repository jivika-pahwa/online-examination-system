<?php
session_start();
include 'admin_DB.php';
?>
<?php

if(isset($_POST['submit'])) {
   //echo " clicked";
  if(!empty($_POST['opt'])) {
    $count = count($_POST['opt']);
    if($count < 5) {
    ?>
        <script type="text/javascript">

            alert("All Questions are Compusory ! " + " You are left with  "+ <?php echo 5 - $count; ?> + " questions");
            window.location.href = "questions.php#!/";

        </script>

        <?php
        die();
      }
      // echo 'alert("");</script>';
      //
     $selected =   $_POST['opt'] ;
     $answers = json_encode($selected);

    //print_r($selected);
    $marks = 0;
    $i = 1;
    $sql = "select  *  from questions";
    $query = mysqli_query($conn,$sql);
    error_reporting(E_ERROR | E_PARSE); //remove warinings on the screen.
    while($row = mysqli_fetch_array($query)) {
      if($selected[$i] == $row['q_ans']) {
        $marks = $marks +  4;
      }
      $i++;
    }
    //echo "<br>result : ".$marks." out of 5.";
    $sql = "insert into genglish (name,ge_marks,ge_attempt,answers) values ('{$_SESSION['name']}','$marks','$count','$answers')";
    $query = mysqli_query($conn,$sql);
    echo("<script type='text/javascript'>
        alert('Your values  has been stored ! Attempt another section.');
        window.location.href = 'questions.php#!/Quantative';

        </script>");
  }
  else{
    echo '<script> alert("All Questions are Compulsory !");
    window.location.href = "questions.php";
    </script>';
  }

}
  mysqli_close($conn);
?>
