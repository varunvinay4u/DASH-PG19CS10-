<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 8: Sounds</title>
    <link rel="stylesheet" type="text/css" href="css/stylel8.css">
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
			font-size: 33px;
			text-align: center;
			font-weight: 550;
			color: #063c7a;
			margin-top: 45px;
		}
    
    	h3 {
      		font-size: 30px;
			text-align: center;
			font-weight: 600;
			color: #063c7a;
			margin: 25px 0;
    	}

	</style>
</head>
<body>
<?php include 'header.html';?>
<?php include 'menu.html';?>

<div class="content">
	<h1>Lesson 8: Sounds Lesson</h1>
	<div id="section1" class="content-section active">
		<p id="section1-content"></p>
		<section>
			<p id="section2-content"></p>
		</section>
	</div>
	<div id="section2" class="content-section">
		<section id="prncn-sounds">
			<h2>Pronunciation & Articulation</h2>
			<div class="container-video">
				<div class="video">
				  <iframe width="860" height="515" src="https://www.youtube.com/embed/5EYnyT-y-Yo" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
	</div>
	<div id="section3" class="content-section">
		<section>
			<h2>Recognition of Environmental Sounds</h2>

			<div class="container text-center">
				<h3>Cat</h3>
				<hr>
				<div class="row row-cols-2">
					<div class="col-7">
						<audio controls>
							<source src="audio/cataudio.mp3" type="audio/mp3">
						</audio>
					</div>
					<img class="col-5" src="image/cats.jpg" alt="">
				</div>
			</div>

			<div class="container text-center">
				<h3>Dog</h3>
				<hr>
				<div class="row row-cols-2">
					<div class="col-7">
						<audio controls>
							<source src="audio/dog.mp3" type="audio/mp3">
						</audio>
					</div>
					<img class="col-5" src="image/dogs.jpg" alt="">
				</div>
			</div>

			<div class="container text-center">
				<h3>Horse</h3>
				<hr>
				<div class="row row-cols-2">
					<div class="col-7">
						<audio controls>
							<source src="audio/horse.wav" type="audio/mp3">
						</audio>
					</div>
					<img class="col-5" src="image/horses.jpg" alt="">
				</div>
			</div>

			<div class="container text-center">
				<h3>Birds</h3>
				<hr>
				<div class="row row-cols-2">
					<div class="col-7">
						<audio controls>
							<source src="audio/bird.mp3" type="audio/mp3">
						</audio>
					</div>
					<img class="col-5" src="image/birds.jpg" alt="">
				</div>
			</div>

			<div class="container text-center">
				<h3>Vehicle</h3>
				<hr>
				<div class="row row-cols-2">
					<div class="col-7">
						<audio controls>
							<source src="audio/vehicle.mp3" type="audio/mp3">
						</audio>
					</div>
					<img class="col-5" src="image/vehicles.jpg" alt="">
				</div>
			</div>
		</section>
	</div>
	<div class="center">
		<a class="btn-quiz" href="quiz8.html">TRY QUIZ</a>
	</div>	
</div>
<?php include 'footer.html';?>

<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson8.txt")
        .then(response => response.text())
        .then(data => {
            const sections = data.split("---");

            const section1Content = sections[0].trim();
            const section2Content = sections[1].trim();

            document.getElementById("section1-content").textContent = section1Content;
            document.getElementById("section2-content").textContent = section2Content;
		})

		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
