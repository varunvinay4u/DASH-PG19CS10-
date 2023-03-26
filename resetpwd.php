<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH</title>
    <link rel="stylesheet" href="css/resetpwd.css">
    <link rel="icon" type="image/png" href="image/logo.png">
 
 
</head>
<body>

    <div class="container">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center rounded bg-white p-5">
            <div class="logo">
                <img src="image/logo.png" class="img-fluid" style="width: 9rem;" alt="logo">
            </div>
            <h3 style="text-align: center; font-size:30px;">Change Password</h3>
            <form method="post" name="reset">  <!--action="login.php"> -->
                <table>
                  <tr>
                      <td><label for="email">Mail ID :</label></td>
                      <td><input type="email" id="email" name="email" /></td>
                  </tr>
          
                  <tr>
                      <td><label for="newPassword">New Password:</label></td>
                      <td><input type="password" id="newPassword" name="newPassword" title="New password" /></td>
                  </tr>
          
                  <tr>
                      <td><label for="confirmPassword">Confirm Password:</label></td>
                      <td><input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" /></td>
                  </tr>
              
                  <tr class="form-actions">
                      <td colspan="2"><input type="submit" class="submit" value="Change Password" title="Change password" /></td>
                  </tr>
          
                </table> 
              </form>
        </div>
    </div>
     
</body>
</html>


<?php


session_start();

	include("connection.php");
	include("functions.php");


	
if($_SERVER['REQUEST_METHOD'] == "POST")

	{
		//something was posted
		$passwordnew = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
		$email=$_POST['email'];


			$sql = "update data set password='$passwordnew' where email like '$email'";
        //check if $category works in insert or not !!NOT
			
			if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} 


mysqli_query($con, $sql);
			echo "$email,$passwordnew";
			header("Location: login.php");
			die;
		#}else
		#{
		#	echo "Please enter some valid information!";
		#}
	}



?>
