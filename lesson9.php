<!DOCTYPE html>
<html>
<head>
	<title>Lesson 9: Communication</title>
	<link rel="stylesheet" type="text/css" href="css/stylel9.css">
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
			margin-bottom: 40px;
		}

		h2 {
			font-size: 35px;
			text-align: center;
			font-weight: 600;
			color: #063c7a;
			margin: 35px 0;
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
	<h1>Lesson 9: Communication</h1>
	<div id="section1" class="content-section active">
		<p id="section1-content"></p>
		<h2>Examples of Communication</h2>
        <div class="box">
			<ul class="list-obj">
				<li>Having a conversation with a friend</li>
				<li>Ordering food at a restaurant</li>
				<li>Asking for help when you need it</li>
				<li>Explaining something to someone</li>
				<li>Writing an email or text message</li>
				<li>Making a phone call</li>
			</ul>
		</div>
		<p id="section2-content"></p>
	</div>
	<div id="section2" class="content-section">
		<h2>Communication</h2>
		<div class="container-video">
			<div class="video">
	  			<iframe width="860" height="515" src="https://www.youtube.com/embed/7HUW_aukApo" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<h2>Examples of Communication</h2>
		<div class="container-video">
			<div class="video">
	  			<iframe width="860" height="515" src="https://www.youtube.com/embed/upbUXV3lUWc" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>        
	<div id="section3" class="content-section">
		<div class="container-audio text-center">
			<audio controls autoplay >
				<source src="audio/Lesson 9.mp3" type="audio/mp3">
			</audio>
		</div>
	</div>
		
	<div class="center">
		<a class="btn-quiz" href="quiz9.html">TRY QUIZ</a>
	</div>
  
</div>
<?php include 'footer.html';?>

<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson9.txt")
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
