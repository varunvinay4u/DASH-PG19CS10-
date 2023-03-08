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