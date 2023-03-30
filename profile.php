<?php

session_start();

	include("connection.php");
	include("functions.php");

  $user_data = check_login($con);

  ?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/profile.css"/>
    <style>
		.nav-link{
			display: flex;
			background-color: #4E9AF1;
			text-decoration: none;
			font-size: 18px;
			color: #fff;
		}
		
    .dropdown-menu .nav-link{
      color: #000;
    }
		
		.dropdown-toggle {
			display: inline-block;
	   	margin-left: 0.255em;
			vertical-align: 0.255em;
			content: "";
			border-top: 0.3em solid;
			border-right: 0.3em solid transparent;
			border-bottom: 0;
			border-left: 0.3em solid transparent;
		}
    </style>
  </head>
  <body>
  <header>
		<div class="logo">DASH Learning Platform</div>
		<nav class="navbar" fixed-top>
			<ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link" active href="index.html">Home</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lessons</a>
					<ul class="dropdown-menu">
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson1.html">Lesson 1</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson2.html">Lesson 2</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson3.html">Lesson 3</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson4.html">Lesson 4</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson5.html">Lesson 5</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson6.html">Lesson 6</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson7.html">Lesson 7</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson8.html">Lesson 8</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson9.html">Lesson 9</a></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="lesson10.html">Lesson 10</a></li>
					  <li class="nav-item"><hr class="dropdown-divider"></li>
					  <li class="nav-item"><a class="dropdown-item nav-link" href="#">Extra Activities</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="profile.html"><i class="bi bi-person-fill"></i>Profile</a></li>
			</ul>
		</nav>
	</header>

    <div class="container">
    <div class="profile">
        <h2>Profile Information</h2>
        <form id="profile-form">
            <div>
              <label for="username">Name:</label>
              <input type="text" id="username" name="username" value="<?php echo $user_data['name']; ?>" readonly >
            </div>
            <div>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" value="<?php echo $user_data['email']; ?>" readonly >
            </div>
            <div>
              <label for="age">Age:</label>
              <input type="number" id="age" name="age" value="<?php echo $user_data['age']; ?>" readonly >
            </div>
            <div>
              <label for="password">Forgot password?</label>
              <!-- <input type="password" id="password" name="password" value="********" readonly> -->
              <a class="btn btn-reset" href="resetpwd.php">Change Password</a>
            </div>
            <div class="center">
              <a class="btn btn-logout" href="home.html">Logout </a>
            </div>
            <!-- <button type="button" id="edit-profile-btn">Edit Profile</button> -->

            <!-- <button type="submit" id="save-profile-btn">Save Profile</button> -->
        </form>
    </div>
    </div>

    <div class="footer">
      <p>DASH © 2023</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/profile.js"></script>

</body>
</html>
  