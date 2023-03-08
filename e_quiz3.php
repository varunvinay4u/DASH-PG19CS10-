<?php

//  session_start();
include("connection.php");
include("functions.php");

$answers = array("A", "D", "C", "B", "B", "A","B","C","D","B"); // correct answers
$score = 0; // initialize score variable

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$addr=$_POST['addr'];