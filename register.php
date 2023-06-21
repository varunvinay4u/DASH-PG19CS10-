<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="icon" href="image/logo1.png" type="image/png">

</head>

<body>
  <div class="container">
    <h1>Please provide details to complete Registration</h1>
    <form method="post" name="registration" class="registartion-form" onsubmit="return formValidation()">
      <table>
        <tr>
        <td><label for="name">Name:</label></td>
          <td><input type="text" name="name" id="name" placeholder="your name"></td>
        </tr>
        <tr>
        <td><label for="age">Age:</label></td>
            <td><input type="number" name="age" id="age" placeholder="your age"></td>
          </tr>
          <tr>
          <td><label for="dob">Date of Birth:</label></td>
            <td><input type="date" name="dob" id="dob" placeholder="your DOB"></td>
          </tr>
        <tr>
        <td><label for="email">Email:</label></td>
          <td><input type="email" name="email" id="email" placeholder="your email"></td>
        </tr>
        <tr>
        <td><label for="password">Password:</label></td>
          <td><input type="password" name="password" id="password" placeholder="password"></td>
        </tr>
        <tr>
        <td><label for="confirmpassword">Confirm Password:</label></td>
          <td><input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm password"></td>
        </tr>
        <tr>
        <td><label for="phoneNumber">Phone Number:</label></td>
          <td><input type="numbers" name="phoneNumber" id="phoneNumber" placeholder="Phone number"></td>
        </tr>
        <tr>
        <td><label for="gender">Gender:</label></td>
          <td>
          <input type="radio" name="gender" value="male">Male</input><br>
             <input type="radio" name="gender" value="female">Female</input><br>
             <input type="radio" name="gender" value="other">Other</input>
          </td>
        </tr>
        <tr>
        <td><label for="autscore">Autism Score:</label></td>
            <td><input type="number" name="autscore" id="autscore" placeholder="Autism Score:"></td>
          </tr>
        <tr>
          <td><label for="zipcode">Zip Code:</label></td>
          <td><input type="number" name="zipcode" id="zipcode"></td>
        </tr>
        <tr>
          <td><label for="location">Location:</label></td>
          <td><textarea name="location" id="location" placeholder="Your location"></textarea></td>
        </tr>
        <tr>
        <td colspan="2"><input type="submit" class="submit" value="Register" /></td>
        </tr>
      </table>
    </form>

  </div>
</body>


<script src="js/register.js"></script>
</html>




<?php


session_start();

	include("connection.php");
	include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")

	{
		//something was posted
		$name =$_POST['name'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$email=$_POST['email'];
		$phoneNumber=$_POST['phoneNumber'];
		$gender=$_POST['gender'];
		$zipcode=$_POST['zipcode'];
		$location=$_POST['location'];
		$dob=$_POST['dob'];
		$age=$_POST['age'];
    $autscore=$_POST['autscore'];


    //save to database
		$user_id = random_num(6);
     $_SESSION['code'] = $user_id;
     $sql = "insert into data values ('',$user_id,'$name','$email','$password',$age,'$dob',$zipcode,'$location',$phoneNumber,'$gender',$autscore)";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
     
     $sql2 = "insert into score values ('',$user_id,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";

     if ($con->query($sql2) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql2 . "<br>" . $con->error;
    }

          header("Location: quiz1.html");
          die;

    }

?>