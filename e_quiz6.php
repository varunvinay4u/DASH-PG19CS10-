<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$answers = array("D", "C", "B", "D", "C", "B","B","A","C","B"); // correct answers
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
$shapes1=$user_data['shapes'];
$shapes2=$user_data['shapes2'];
$sAvg=$user_data['shapesAvg'];
$sAttempts=$user_data['shapesAttempts'];
$average=(($sAvg*$sAttempts)+$score)/($sAttempts+1);
$sql = "update data set shapes=$score,shapes2=$shapes1,shapes3=$shapes2,shapesAvg=$average,shapesAttempts=$sAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>