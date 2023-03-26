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
$comm1=$user_data['comm'];
$comm2=$user_data['comm2'];
$cAvg=$user_data['commAvg'];
$cAttempts=$user_data['commAttempts'];
$average=(($cAvg*$cAttempts)+$score)/($cAttempts+1);
$sql = "update data set comm=$score,comm2=$comm1,comm3=$comm2,commAvg=$average,commAttempts=$cAttempts+1 where code=$c";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
}

header("Location:" .$addr );
die;

}
?>