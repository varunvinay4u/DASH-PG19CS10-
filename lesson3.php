<!DOCTYPE html>
<html>
<head>
	<title>Lesson 3: Counting Numbers</title>
	<link rel="stylesheet" type="text/css" href="css/stylel3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3: Basic Arithmetics</title>
	<link rel="stylesheet" type="text/css" href="css/stylel1.css">
	<script src="js/lesson.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="icon" href="image/logo1.png" type="image/png">
	<style>
		body {
			background-image: url(image/bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}

		h1 {
			font-size: 45px;
			text-align: center;
			font-weight: 600;
			color: #063c7a;
			margin-bottom: 30px;
		}

		h2 {
			font-size: 35px;
			text-align: center;
			font-weight: 600;
			color: #063c7a;
			margin-top: 45px;
			margin-bottom: 25px;
		}

	</style>
</head>
<body>
<?php include 'header.html';?>
<?php include 'menu.html';?>

<div class="content">
	<h1>Lesson 3: Counting Numbers</h1>
	<div id="section1" class="content-section active">
		<p id="section1-content"></p>	

		<h2>Counting numbers</h2>
		<p id="section2-content"></p>	

		<h2>Number recognition</h2>
		<p id="section3-content"></p>	

		<style>
			table {
			  border-collapse: collapse;
			  width: 100%;
			  margin-bottom: 20px;
			}
			td {
			  padding: 10px;
			  border: 1px solid rgb(7, 18, 241);
			}
			.col1 {
			  width: 20%;
			}
			.col2 {
			  width: 20%;
			}
			.col3 {
			  width: 20%;
			}
			.col4 {
			  width: 20%;
			}
			.col5 {
			  width: 20%;
			}
		</style>
		<table>
			<tr>
			  <td>1 - One</td>
			  <td>11 - Eleven</td>
			  <td>21 - Twenty-One</td>
			  <td>31 - Thirty-One</td>
			  <td>41 - Forty-One</td>
			</tr>
			<tr>
			  <td>2 - Two</td>
			  <td>12 - Twelve</td>
			  <td>22 - Twenty-Two</td>
			  <td>32 - Thirty-Two</td>
			  <td>42 - Forty-Two</td>
			</tr>
			<tr>
			  <td>3 - Three</td>
			  <td>13 - Thirteen</td>
			  <td>23 - Twenty-Three</td>
			  <td>33 - Thirty-Three</td>
			  <td>43 - Forty-Three</td>
			</tr>
			<tr>
			  <td>4 - Four</td>
			  <td>14 - Fourteen</td>
			  <td>24 - Twenty-Four</td>
			  <td>34 - Thirty-Four</td>
			  <td>44 - Forty-Four</td>
			</tr>
			<tr>
			  <td>5 - Five</td>
			  <td>15 - Fifteen</td>
			  <td>25 - Twenty-Five</td>
			  <td>35 - Thirty-Five</td>
			  <td>45 - Forty-Five</td>
			</tr>
			<tr>
			  <td>6 - Six</td>
			  <td>16 - Sixteen</td>
			  <td>26 - Twenty-Six</td>
			  <td>36 - Thirty-Six</td>
			  <td>46 - Forty-Six</td>
			</tr>
			<tr>
			  <td>7 - Seven</td>
			  <td>17 - Seventeen</td>
			  <td>27 - Twenty-Seven</td>
			  <td>37 - Thirty-Seven</td>
			  <td>47 - Forty-Seven</td>
			</tr>
			<tr>
			  <td>8 - Eight</td>
			  <td>18 - Eighteen</td>
			  <td>28 - Twenty-Eight</td>
			  <td>38 - Thirty-Eight</td>
			  <td>48 - Forty-Eight</td>
			</tr>
			<tr>
			  <td>9 - Nine</td>
			  <td>19 - Nineteen</td>
			  <td>29 - Twenty-Nine</td>
			  <td>39 - Thirty-Nine</td>
			  <td>49 - Forty-Nine</td>
			</tr>
			<tr>
			  <td>10 - Ten</td>
			  <td>20 - Twenty</td>
			  <td>30 - Thirty</td>
			  <td>40 - Forty</td>
			  <td>50 - Fifty</td>
			</tr>
		</table>
	</div>
	<div id="section2" class="content-section">
		<p id="section4-content"></p>
		<div class="container-video">
			<div class="video">
			  <iframe width="860" height="515" src="https://www.youtube.com/embed/4bEP1_tO45Q" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div id="section3" class="content-section">
		<div class="container-audio text-center">
			<audio controls autoplay >
				<source src="audio/Lesson 3.mp3" type="audio/mp3">
			</audio>
		</div>
	</div><br>

	<div class="center">
		<a class="btn-quiz" href="quiz2.html">TRY QUIZ</a>
	</div>  
</div>
<?php include 'footer.html';?>

<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson3.txt")
        .then(response => response.text())
        .then(data => {
            const sections = data.split("---");

            const section1Content = sections[0].trim();
            const section2Content = sections[1].trim();
            const section3Content = sections[2].trim();
            const section4Content = sections[3].trim();

            document.getElementById("section1-content").textContent = section1Content;
            document.getElementById("section2-content").textContent = section2Content;
            document.getElementById("section3-content").textContent = section3Content;
			document.getElementById("section4-content").textContent = section4Content;
		})

		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
