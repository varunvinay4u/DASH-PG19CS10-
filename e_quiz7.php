<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$answers = array("A", "B", "C", "A", "B", "C","B","C","B","D"); // correct answers
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
$emotions1=$user_data['emotions'];
$emotions2=$user_data['emotions2'];
$eAvg=$user_data['emotionsAvg'];
$eAttempts=$user_data['emotionsAttempts'];
$average=(($eAvg*$eAttempts)+$score)/($eAttempts+1);
$sql = "update data set emotions=$score,emotions2=$emotions1,emotions3=$emotions2,emotionsAvg=$average,emotionsAttempts=$eAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>