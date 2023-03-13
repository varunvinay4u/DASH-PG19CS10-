<?php

session_start();

	include("connection.php");
	include("functions.php");
    $_SESSION['code'] = 1937;
    
	$user_data = check_login($con);

$alphabet=$user_data['alphabet'];
$colour=$user_data['colour'];
$digits=$user_data['digits'];
$arithmetic=$user_data['arithmetic'];
$shapes=$user_data['shapes'];
$objects=$user_data['objects'];
$emotions=$user_data['emotions'];
$audio=$user_data['audio'];
$comm=$user_data['comm'];
$actions=$user_data['actions'];
$my_var = "$alphabet,$colour,$digits,$arithmetic,$shapes,$objects,$emotions,$audio,$comm,$actions";
file_put_contents("my_var.txt", $my_var);
// echo "hiiiiiiii \n";
$python_path = 'C:\Users\varun\AppData\Local\Programs\Python\Python310\python.exe'; // replace this with the path to your Python executable (run where python in cmd)

shell_exec("$python_path decisiontree.py");
$abc=file_get_contents("my_var.txt");
echo $abc;
// file_put_contents("my_text.txt", " ");

?>