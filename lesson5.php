<!DOCTYPE html>
<html>
<head>
	<title>Lesson 5: Shapes</title>
	<link rel="stylesheet" type="text/css" href="css/stylel5.css">
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
	<div id="section1" class="content-section active">
		<h1>Lesson 5: Shapes</h1>
		<p id="section1-content"></p>
		<div class="container text-center">
			<h2>Circle</h2>
			<div class="row">
				<div class="col-4">
					<img src="image/circle.jpeg" alt="Circle" width="200" height="200">
				</div>
				<p class="col-7" id="section2-content"></p>
			</div>
	
			<h2>Square</h2>
			<div class="row">
				<div class="col-4">
					<img src="image/square.png" alt="Square" width="200" height="200">
				</div>
				<p class="col-7" id="section3-content"></p>
			</div>
	
			<h2>Triangle</h2>
			<div class="row">
				<div class="col-4">
					<img src="image/triangle.jpeg" alt="Triangle" width="200" height="200">
				</div>
				<p class="col-7" id="section4-content"></p>
			</div>
	
			<h2>Rectangle</h2>
			<div class="row">
				<div class="col-4">
					<img src="image/rectangle.jpeg" alt="Rectangle" width="250" height="150">
				</div>
				<p class="col-7" id="section5-content"></p>
			</div>
	
			<h2>Pentagon</h2>
			<div class="row">
				<div class="col-4">
					<img src="image/pentagon.jpeg" alt="Pentagon" width="200" height="200">
				</div>
				<p class="col-7" id="section6-content"></p>
			</div>
		</div>
	</div>
	<div id="section2" class="content-section">
		<h1>3 Dimentional Shapes</h1>
		<p id="section7-content"></p>

		<h2>Cube</h2>
		<p id="section8-content"></p>
		<div class="text-center">
			<img src="image/cubepng.png" alt="Cube" width="350" height="250">

			<div class="container-video">
				<div class="video">
					<iframe width="860" height="515" src="videos/cubevideo.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<br>

		<h2>Cuboid</h2>
		<p id="section9-content"></p>
		<div class="text-center">
			<img src="image/cuboidnew.png" alt="Cuboid" width="350" height="250">
			<div class="container-video">
				<div class="video">
					<iframe width="860" height="515" src="videos/CUBOIDVIDEO.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<h2>Sphere</h2>
		<p id="section10-content"></p>
		<div class="text-center">
			<img src="image/sphere.png" alt="Sphere" width="250" height="250">

			<div class="container-video">
				<div class="video">
					<iframe width="860" height="515" src="videos/sphere.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<h2>Cylinder</h2>
		<p id="section11-content"></p>
		<div class="text-center">
			<img src="image/cylindernew__1_-removebg-preview.png" alt="Cylinder" width="200" height="300">

			<div class="container-video">
				<div class="video">
					<iframe width="860" height="515" src="videos/cylinder1.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<h2>Cone</h2>
		<p id="section12-content"></p>
		<div class="text-center">
			<img src="image/conenew__1_-removebg-preview.png" alt="Cone" width="300" height="300">

			<div class="container-video">
				<div class="video">
					<iframe width="860" height="515" src="videos/conevideonew.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div id="section3" class="content-section">
		<h1>Listen to Shapes Lessons</h1>
		<div class="container-audio text-center">
			<audio controls autoplay >
				<source src="audio/Lesson 5.mp3" type="audio/mp3">
			</audio>
		</div>
	</div>
		<div class="center">
			<a class="btn-quiz" href="quiz6.html">TRY QUIZ</a>
		</div>
</div>

<?php include 'footer.html';?>

<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson5.txt")
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
            const section8Content = sections[7].trim();
            const section9Content = sections[8].trim();
            const section10Content = sections[9].trim();
			const section11Content = sections[10].trim();
            const section12Content = sections[11].trim();

            document.getElementById("section1-content").textContent = section1Content;
            document.getElementById("section2-content").textContent = section2Content;
            document.getElementById("section3-content").textContent = section3Content;
			document.getElementById("section4-content").textContent = section4Content;
			document.getElementById("section5-content").textContent = section5Content;
			document.getElementById("section6-content").textContent = section6Content;
			document.getElementById("section7-content").textContent = section7Content;
            document.getElementById("section8-content").textContent = section8Content;
            document.getElementById("section9-content").textContent = section9Content;
			document.getElementById("section10-content").textContent = section10Content;
			document.getElementById("section11-content").textContent = section11Content;
			document.getElementById("section12-content").textContent = section12Content;
		})

		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
