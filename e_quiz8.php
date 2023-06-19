<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$answers = array("C", "D", "A", "B", "B", "C","B","C","D","B"); // correct answers
$score = 0; // initialize score variable

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$addr=$_POST['addr'];
$time=$_POST['time'];
// loop through all questions and check user's answers
for ($i = 1; $i <= 10; $i++) {
  if (isset($_POST['radiobutton'.$i]) && $_POST['radiobutton'.$i] == $answers[$i-1]) {
    $score++; // increment score if user's answer is correct
  }
}
if($time>180){
  $score=$score-0.01*($time-180);
}
if($score<0){
  $score=0;
}

$c=$user_data['code'];
$audio1=$user_data['audio'];
$audio2=$user_data['audio2'];
$aAvg=$user_data['audioAvg'];
$aAttempts=$user_data['audioAttempts'];
$average=(($aAvg*$aAttempts)+$score)/($aAttempts+1);
$sql = "update data set audio=$score,audio2=$audio1,audio3=$audio2,audioAvg=$average,audioAttempts=$aAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>