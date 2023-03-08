<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/register.css">
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
            Male: <input type="radio" name="gender" value="male">
            Female: <input type="radio" name="gender" value="female">
            Other: <input type="radio" name="gender" value="other">
          </td>
        </tr>