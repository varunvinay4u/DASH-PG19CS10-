<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$answers = array("A", "C", "B", "B", "C", "B","C","D","B","C"); // correct answers
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

  $c=$user_data['code'];
  $colour1=$user_data['colour'];
  $colour2=$user_data['colour2'];
  $cAvg=$user_data['colourAvg'];
  $cAttempts=$user_data['colourAttempts'];
  $average=(($cAvg*$cAttempts)+$score)/($cAttempts+1);
$sql = "update data set colour=$score,colour2=$colour1,colour3=$colour2,colourAvg=$average,colourAttempts=$cAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>