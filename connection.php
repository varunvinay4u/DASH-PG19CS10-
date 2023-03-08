<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dash";


$con = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?>