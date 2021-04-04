<?php
session_start();
include 'admin_DB.php';
?>
<?php

if(isset($_POST['submit'])) {
   //echo " clicked";
  if(!empty($_POST['opt'])) {
    $count = count($_POST['opt']);
    if($count < 5 ) {
    ?>

    <script type="text/javascript">

      alert("All Questions are Compusory ! " + " You are left with  "+ <?php echo 5 - $count; ?> + " questions");
      window.location.href = "questions.php#!/Quantative";

    </script>

    <?php
    die();
  }
   $selected =   $_POST['opt'] ;
   $answers = json_encode($selected);
    //print_r($selected);
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
    $sql = "insert into qaptitude (name,qa_marks,qa_attempt,answers) values ('{$_SESSION['name']}','$result','$count','$answers')";
    $query = mysqli_query($conn,$sql);

    //echo "<br>result : ".$result." out of 5.";

    echo("<script type='text/javascript'>

        alert('Your values has been stored ! Attempt another section.');
        window.location.href = 'questions.php#!/Logical';

        </script>");
  }
  else{
    echo '<script> alert("attempt atleast one question !");
    window.location.href = "questions.php#!/Quantative";
    </script>';
  }

}
  mysqli_close($conn);
?>
