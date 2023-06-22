<!DOCTYPE html>
<html>
<head>
	<title>Lesson 7 - Emotions and Sensations</title>
    <link rel="stylesheet" type="text/css" href="css/stylel7.css">
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
			margin-bottom: 25px;
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
	<h1>Lesson 7 - Emotions and Sensations</h1>
	<div id="section1" class="content-section active">

		<h2>EMOTIONS</h2>
		<p id="section1-content"></p>

		<div class="container text-center">
			<div class="row row-cols-2">
				<div class="col">
					<h3>Happy</h3> 
					<p id="section2-content"></p>

					<div class="images">
						<img src="image/happy.jpeg" alt="Happy">
						<img src="image/ehappy.jpeg" alt="Happy Emoji">
					</div>
				</div>
	
				<div class="col">
					<h3>Sad</h3> 
					<p id="section3-content"></p>

					<div class="images">
						<img src="image/sad.jpeg" alt="Sad">
						<img src="image/esad.jpeg" alt="Sad Emoji">
					</div>
				</div>
				<hr><hr>

				<div class="col">
					<h3>Scared</h3>
					<p id="section4-content"></p>

					<div class="images">
						<img src="image/scared.jpeg" alt="Scared">
						<img src="image/eafraid.jpeg" alt="Scared Emoji">
					</div> 
				</div>
				
				<div class="col">
					<h3>Angry</h3> 
					<p id="section5-content"></p>

					<div class="images">
						<img src="image/angry.jpeg" alt="Angry">
						<img src="image/eangry.jpeg" alt="Angry Emoji">
					</div>
				</div>

				<div class="col-12">
					<h3>Surprised</h3>
					<p id="section6-content"></p>

					<div  class="images">
						<img src="image/surprised.jpeg" alt="Surprised">
						<img src="image/esurprised.jpeg" alt="Surprised Emoji">
					</div>
				</div>
			</div>
		</div>

		<h2>BODY PARTS</h2>
		<p id="section7-content"></p>

		<div class="text-center">
			<img src="image/body parts.jpeg" alt="Body Parts" width="400" height="550">
		</div>


		<h2>SENSORY ORGANS</h2>
		<p id="section8-content"></p>

		<div class="text-center">
			<img src="image/sensoryorgans.jpeg" alt="Sensory Organs" width="600" height="300">
		</div>

		<h3>Eye</h3>
		<p id="section9-content"></p>

		<div class="text-center">
			<img src="image/eyes.jpeg" alt="Eye" width="400" height="250">
		</div>

		<h3>Ear</h3>
		<p id="section10-content"></p>

		<div class="text-center">
			<img src="image/ear.jpeg" alt="Ear" width="350" height="305">
		</div>

		<h3>Nose</h3>
		<p id="section11-content"></p>

		<div class="text-center">
			<img src="image/nose.jpg" alt="Nose" width="350" height="300">
		</div>

		<h3>Tongue</h3>
		<p id="section12-content"></p>

		<div class="text-center">
			<img src="image/tongue.jpeg" alt="Tongue" width="350" height="305">
		</div>
	</div>
	<div id="section2" class="content-section">
		<h2>BODY PARTS</h2>
		<p>Let us go through the following video to learn the functions of these body parts.</p>
		  
		<div class="container-video">
			<div class="video">
			  <iframe width="860" height="515" src="https://www.youtube.com/embed/OErgsaBWUC4" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<h2>SENSORY ORGANS</h2>
		<p>Let us go through the following video to learn the 5 different sense organs.</p>
		  
		<div class="container-video">
			<div class="video">
			  <iframe width="860" height="515" src="https://www.youtube.com/embed/PL2rBHhQ_go" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div id="section3" class="content-section">
		<div class="container-audio text-center">
			<audio controls autoplay >
				<source src="audio/Lesson 5.mp3" type="audio/mp3">
			</audio>
		</div>
	</div>
	<div class="center">
		<a class="btn-quiz" href="quiz7.html">TRY QUIZ</a>
	</div>
</div>

<?php include 'header.html';?>


<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson7.txt")
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
