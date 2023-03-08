<?php

//  session_start();
include("connection.php");
include("functions.php");

$answers = array("B", "C", "D", "A", "B", "C","B","C","B","D"); // correct answers
$score = 0; // initialize score variable

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$addr=$_POST['addr'];
// loop through all questions and check user's answers
for ($i = 1; $i <= 10; $i++) {
    if (isset($_POST['radiobutton'.$i]) && $_POST['radiobutton'.$i] == $answers[$i-1]) {
      $score++; // increment score if user's answer is correct
    }
  }

  

$sql = "update data set l1=$score where id=6";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>