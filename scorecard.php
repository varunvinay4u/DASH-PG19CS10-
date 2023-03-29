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
$scores2=[$user_data['alphabet2'],$user_data['colour2'],$user_data['digits2'],$user_data['arithmetic2'],$user_data['shapes2'],$user_data['objects2'],$user_data['emotions2'],$user_data['audio2'],$user_data['comm2'],$user_data['actions2']];
$scores3=[$user_data['alphabet3'],$user_data['colour3'],$user_data['digits3'],$user_data['arithmetic3'],$user_data['shapes3'],$user_data['objects3'],$user_data['emotions3'],$user_data['audio3'],$user_data['comm3'],$user_data['actions3']];
$avg=[$user_data['alphabetAvg'],$user_data['colourAvg'],$user_data['digitsAvg'],$user_data['arithmeticAvg'],$user_data['shapesAvg'],$user_data['objectsAvg'],$user_data['emotionsAvg'],$user_data['audioAvg'],$user_data['commAvg'],$user_data['actionsAvg']];
$attempts=[$user_data['alphabetAttempts'],$user_data['colourAttempts'],$user_data['digitsAttempts'],$user_data['arithmeticAttempts'],$user_data['shapesAttempts'],$user_data['objectsAttempts'],$user_data['emotionsAttempts'],$user_data['audioAttempts'],$user_data['commAttempts'],$user_data['actionsAttempts']];
$lessons=['Alphabets','Colors','Numbers','Arithmetic','Shapes','Objects','Emotions','Sound','Communication','Actions'];
?>

<html>
<head>
    <title>
        Score Card
    </title>
	<link rel="stylesheet" href="css/scorecard.css">
</head>
<body>
<h1>SCORECARD</h1>

<table border="1">
		<thead>
			<tr>
				<th>Lesson</th>
				<th>Score1 (Most Recent)</th>
				<th>Score2</th>
				<th>Score3</th>
				<th>Average (No. of Attempts)</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i=0; $i<=9; $i++) {
					echo "<tr>";
					echo "<td> <h4>$lessons[$i]</h4> </td>";
					echo "<td> <h4>$scores[$i]</h4> </td>";
					echo "<td> <h4>$scores2[$i]</h4> </td>";
					echo "<td> <h4>$scores3[$i]</h4> </td>";
					echo "<td> <h4>$avg[$i] ($attempts[$i])</h4> </td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
	<br>

	<div class="center">
        <a class="button" href="index.html">Back to Home</a>
    </div>
</body>
</html>