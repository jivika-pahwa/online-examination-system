<?php
session_start();
include 'admin_DB.php';

if(isset($_POST['submit'])) {
   //echo " clicked";
  if(!empty($_POST['opt'])) {
    $count = count($_POST['opt']);
    if($count < 5) {
    ?>
    <script type="text/javascript">

    alert("All Questions are Compusory ! " + " You are left with  "+ <?php echo 5 - $count; ?> + " questions");
    window.location.href = "questions.php#!/Awareness";

    </script>
    <?php
    die();
  }
   $selected =   $_POST['opt'] ;
    //print_r($selected);
    $marks = 0;
    $i = 1;
    $answers = json_encode($selected);
    $sql = "select  *  from questions";
    $query = mysqli_query($conn,$sql);
    error_reporting(E_ERROR | E_PARSE); //remove warinings on the screen.
    $rows = mysqli_num_rows($query);
    if($rows > 0) {
    while($row = mysqli_fetch_array($query)) {
      if($selected[$i] == $row['q_ans']) {
          $marks = $marks + 4;
      }
      $i++;
    }
  }
//  print_r($selected);

    //echo "<br>result : ".$marks." out of 5.";
    $sql = "insert into gawareness (name,ga_marks,ga_attempt,answers) values ('{$_SESSION['name']}','$marks','$count','$answers')";
    $query = mysqli_query($conn,$sql);
    echo("<script type='text/javascript'>

         alert('Your values has been stored ! Attempt another section.');
        window.location.href = 'questions.php';
        </script>");
        // print_r($answers);
  }
  else{
    echo '<script> alert("All Questions are Compulsory !");
    window.location.href = "questions.php#!/Awareness";
    </script>';
  }

}
  mysqli_close($conn);
?>
