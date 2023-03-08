<?php

//  session_start();
include("connection.php");
include("functions.php");


$answers = array("A", "C", "B", "B", "C", "B","C","D","B","C"); // correct answers
$score = 0; // initialize score variable

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$addr=$_POST['addr'];