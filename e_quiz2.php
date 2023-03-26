<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$answers = array("A", "C", "B", "B", "C", "B","B","A","C","A"); // correct answers
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
$digits1=$user_data['digits'];
  $digits2=$user_data['digits2'];
  $dAvg=$user_data['digitsAvg'];
  $dAttempts=$user_data['digitsAttempts'];
  $average=(($dAvg*$dAttempts)+$score)/($dAttempts+1);
$sql = "update data set digits=$score,digits2=$digits1,colour3=$digits2,colourAvg=$average,colourAttempts=$dAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>