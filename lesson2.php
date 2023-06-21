<!DOCTYPE html>
<html>
<head>
	<title>Lesson 2: Introduction to Colors</title>
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
	<h1>Lesson 2: Introduction to Colors</h1>
	<div id="section1" class="content-section active">
		<p id="section1-content"></p>
		
		<h2>What are colors?</h2>
		<p id="section2-content"></p><br>
		<div class="container text-center">
			<div class="row row-cols-8">
				<div class="col" style="background-color: Red;">
					<p>Red</p>
				</div>
				<div class="col" style="background-color: orange;">
					<p>Orange</p>
				</div>
				<div class="col" style="background-color: yellow;">
					<p>Yellow</p>
				</div>
				<div class="col" style="background-color: green;">
					<p>Green</p>
				</div>
				<div class="col" style="background-color: blue;">
					<p>Blue</p>
				</div>
				<div class="col" style="background-color: purple;">
					<p>Purple</p>
				</div>
			</div>
		</div>

		<h2>Primary colors</h2>
		<p id="section3-content"></p>

		<h2>Secondary colors</h2>
		<p id="section4-content"></p>

		<h2>Color Identification</h2>
		<p id="section5-content"></p><br>

		<div class="row">
			<div class="color-col">
				<img src="image/sky.jpg" alt="">
				<div class="layer layer-1">
					<h3>Sky</h3>
					<p>The sky is blue</p>
				</div>
			</div>
			<div class="color-col">
				<img src="image/sun.png" alt="">
				<div class="layer layer-2">
					<h3>Sun</h3>
					<p>The sun is yellow</p>
				</div>
			</div>
			<div class="color-col">
				<img src="image/leaf.jpg" alt="">
				<div class="layer layer-3">
					<h3>Leaf</h3>
					<p>A leaf is green</p>
				</div>
			</div>
			<div class="color-col">
				<img src="image/apple.jpg" alt="">
				<div class="layer layer-4">
					<h3>Apple</h3>
					<p>An apple is red</p>
				</div>
			</div>
		</div><br><br>
	</div>

	<div id="section2" class="content-section">
		<h2>Primary colors</h2>
		<p id="section6-content"></p>
		<div class="container-video">
			<div class="video">
			  <iframe width="860" height="515" src="https://www.youtube.com/embed/v9gIj0j7Ba0" frameborder="0" allowfullscreen></iframe>
			</div>
		  </div>

		<h2>Color Identification</h2>
		<p id="section7-content"></p><br>
		<div class="row">
			<div class="color-col">
				<img src="image/sky.jpg" alt="">
				<div class="layer layer-1">
					<h3>Sky</h3>
					<p>The sky is blue</p>
				</div>
			</div>
			<div class="color-col">
				<img src="image/sun.png" alt="">
				<div class="layer layer-2">
					<h3>Sun</h3>
					<p>The sun is yellow</p>
				</div>
			</div>
			<div class="color-col">
				<img src="image/leaf.jpg" alt="">
				<div class="layer layer-3">
					<h3>Leaf</h3>
					<p>A leaf is green</p>
				</div>
			</div>
			<div class="color-col">
				<img src="image/apple.jpg" alt="">
				<div class="layer layer-4">
					<h3>Apple</h3>
					<p>An apple is red</p>
				</div>
			</div>
		</div>
			  
		<div class="container-video">
			<div class="video">
				<iframe width="860" height="515" src="https://www.youtube.com/embed/VTC7wH2vB9Y" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		
	</div>
	<div id="section3" class="content-section">
		<div class="container-audio text-center">
			<audio controls autoplay >
				<source src="audio/Lesson 2.mp3" type="audio/mp3">
			</audio>
		</div><br>
	</div>
		<div class="center">
			<a class="btn-quiz" href="quiz1.html">TRY QUIZ</a>
		</div>
</div>
    
<?php include 'footer.html';?>

<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson2.txt")
        .then(response => response.text())
        .then(data => {
            const sections = data.split("---");

            const section1Content = sections[0].trim();
            const section2Content = sections[1].trim();
            const section3Content = sections[2].trim();
			const section4Content = sections[3].trim();
            const section5Content = sections[4].trim();
			const section6Content = sections[5].trim();
            const section7Content = sections[6].trim();

            document.getElementById("section1-content").textContent = section1Content;
            document.getElementById("section2-content").textContent = section2Content;
            document.getElementById("section3-content").textContent = section3Content;
			document.getElementById("section4-content").textContent = section4Content;
            document.getElementById("section5-content").textContent = section5Content;
			document.getElementById("section6-content").textContent = section3Content;
            document.getElementById("section7-content").textContent = section5Content;
		})


		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
    
