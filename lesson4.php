<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4: Basic Arithmetics</title>
	<link rel="stylesheet" type="text/css" href="css/stylel4.css">
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
	<h1>Lesson 4: Basic Arithmetics</h1>
	<div id="section1" class="content-section active">
		<p id="section1-content"></p>

		<h2>Counting</h2>
		<p>Counting is an important skill to learn. Let's practice counting to 10:</p>
		<div class="box">
			<ul class="list-obj">
				<li>1 - One</li>
				<li>2 - Two</li>
				<li>3 - Three</li>
				<li>4 - Four</li>
				<li>5 - Five</li>
				<li>6 - Six</li>
				<li>7 - Seven</li>
				<li>8 - Eight</li>
				<li>9 - Nine</li>
				<li>10 - Ten</li>
			</ul>
		</div>
		
		<h2>Basic Math</h2>
		<p>Let's try some basic math problems:</p>
		<div class="box">
			<ul class="list-obj">
				<li>2 + 2 = <input type="text"></li><br>
				<li>5 - 3 = <input type="text"></li><br>
				<li>4 x 3 = <input type="text"></li><br>
				<li>6 ÷ 2 = <input type="text"></li><br>
			</ul>
		</div>

		<h2>Multiplication tables</h2>
		<p>Let us familiarise with the multiplication table till the number 5.</p>
		<div class="container text-center">
			<div class="row row-cols-3">
			  <div class="col">
				<h4>Multiplication table of 1</h4>
				<hr />
				<ul class="list-obj">
					<li>1*1=1</li>
					<li>1*2=2</li>
					<li>1*3=3</li>
					<li>1*4=4</li>
					<li>1*5=5</li>
					<li>1*6=6</li>
					<li>1*7=7</li>
					<li>1*8=8</li>
					<li>1*9=9</li>
					<li>1*10=10</li>
				</ul>
			  </div>

			  <div class="col">
				<h4>Multiplication table of 2</h4>
				<hr>
				<ul class="list-obj">
					<li>2*1=2</li>
					<li>2*2=4</li>
					<li>2*3=6</li>
					<li>2*4=8</li>
					<li>2*5=10</li>
					<li>2*6=12</li>
					<li>2*7=14</li>
					<li>2*8=16</li>
					<li>2*9=18</li>
					<li>2*10=20</li>
				</ul>
			  </div>
			  
			  <div class="col">
				<h4>Multiplication table of 3</h4>
				<hr>
				<ul class="list-obj">
					<li>3*1=3</li>
					<li>3*2=6</li>
					<li>3*3=9</li>
					<li>3*4=12</li>
					<li>3*5=15</li>
					<li>3*6=18</li>
					<li>3*7=21</li>
					<li>3*8=24</li>
					<li>3*9=27</li>
					<li>3*10=30</li>
				</ul>
			  </div>

			  <div class="col">
				<h4>Multiplication table of 4</h4>
				<hr>
				<ul class="list-obj">
					<li>4*1=4</li>
					<li>4*2=8</li>
					<li>4*3=12</li>
					<li>4*4=16</li>
					<li>4*5=20</li>
					<li>4*6=24</li>
					<li>4*7=28</li>
					<li>4*8=32</li>
					<li>4*9=36</li>
					<li>4*10=40</li>
				</ul>
			  </div>

			  <div class="col">
				<h4>Multiplication table of 5</h4>
				<hr>
				<ul class="list-obj">
					<li>5*1=5</li>
					<li>5*2=10</li>
					<li>5*3=15</li>
					<li>5*4=20</li>
					<li>5*5=25</li>
					<li>5*6=30</li>
					<li>5*7=35</li>
					<li>5*8=40</li>
					<li>5*9=45</li>
					<li>5*10=50</li>
				</ul>
			  </div>
			</div>
		</div>
	</div>

	<div id="section3" class="content-section">
		<div class="audio-container text-center">
			<audio controls autoplay >
				<source src="audio/Lesson 4.mp3" type="audio/mp3">
			</audio>
		</div>
	</div>
	<div class="center">
		<a class="btn-quiz" href="quiz3.html">TRY QUIZ</a>
	</div>
</div>
<?php include 'footer.html';?>


<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson4.txt")
        .then(response => response.text())
        .then(data => {
            const sections = data.split("---");

            const section1Content = sections[0].trim();

            document.getElementById("section1-content").textContent = section1Content;
		})


		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
