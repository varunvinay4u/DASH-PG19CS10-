<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$answers = array("B", "C", "A", "C", "A", "C","D","B","A","D"); // correct answers
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
$actions1=$user_data['actions'];
$actions2=$user_data['actions2'];
$aAvg=$user_data['actionsAvg'];
$aAttempts=$user_data['actionsAttempts'];
$average=(($aAvg*$aAttempts)+$score)/($aAttempts+1);
$sql = "update data set actions=$score,actions2=$actions1,actions3=$actions2,actionsAvg=$average,actionsAttempts=$aAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>