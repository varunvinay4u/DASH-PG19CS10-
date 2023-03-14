<?php

session_start();

	include("connection.php");
	include("functions.php");
    // $_SESSION['code'] = 1937;
    
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

$scores=[$user_data['alphabet'],$user_data['colour'],$user_data['digits'],$user_data['arithmetic'],$user_data['shapes'],$user_data['objects'],$user_data['emotions'],$user_data['audio'],$user_data['comm'],$user_data['actions']];
$lessons=['Alphabets','Colors','Numbers','Arithmetic','Shapes','Objects','Emotions','Sound','Communication','Actions'];
?>

<html>
<head>
    <title>
        Score Card
    </title>
    <style>
		table {
			border-collapse: collapse;
			width: 100%;
			font-family: Arial, sans-serif;
			font-size: 16px;
			text-align: center;
		}
		
		th, td {
			border: 1px solid #ddd;
			padding: 8px;
		}
		
		th {
			background-color: #f2f2f2;
			font-size: 20px;
		}
		
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<h1 style="text-align: center;">SCORECARD</h1>
<br>
<table border="1">
		<thead>
			<tr>
				<th>Lesson</th>
				<th>Score</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i=0; $i<=9; $i++) {
					echo "<tr>";
					echo "<td> <h4>$lessons[$i]</h4> </td>";
					echo "<td> <h4>$scores[$i]</h4> </td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
<br>
    <a href="index.html"><h2>Back to Home</h2></a>
    <br>
</body>
</html>