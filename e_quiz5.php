<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$answers = array("C", "A", "C", "D", "B", "A","D","C","C","B"); // correct answers
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
  $objects1=$user_data['objects'];
  $objects2=$user_data['objects2'];
  $oAvg=$user_data['objectsAvg'];
  $oAttempts=$user_data['objectsAttempts'];
  $average=(($oAvg*$oAttempts)+$score)/($oAttempts+1);
$sql = "update data set objects=$score,objects2=$objects1,objects3=$objects2,objectsAvg=$average,objectsAttempts=$oAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>