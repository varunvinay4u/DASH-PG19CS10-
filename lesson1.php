<!DOCTYPE html>
<html>
<head>
	<!--	 
  <script>
    var startTime = new Date();
    window.addEventListener("unload", function() {
      var endTime = new Date();
      var timeSpent = (endTime - startTime) / 1000; // convert to seconds
      alert("Time spent on page: " + timeSpent + " seconds");
    });
  </script>
	-->
	<meta charset="UTF-8">
	<title>Lesson 1: Alphabets</title>
	<link rel="stylesheet" type="text/css" href="css/stylel2.css">
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
		}

		h2 {
			font-size: 35px;
			text-align: center;
			font-weight: 600;
			color: #063c7a;
		}

	</style>
</head>
<body>
	
<?php include 'header.html';?>
<?php include 'menu.html';?>

<div class="content">
	<h1>Lesson 1: Alphabets</h1>
	<br><br>
<div id="section1" class="content-section active">
	<p id="section1-content"></p>
	<br><br><br>

    <h2>Writing Alphabets</h2>
	<br>
	<p>Let's practice writing some Capital letter and Small letter alphabets:</p>
	<br>
	<div class="container text-center">
		<div class="row row-cols-8">
			<div class="col">A</div>
			<div class="col">B</div>
			<div class="col">C</div>
			<div class="col">D</div>
			<div class="col">E</div>
			<div class="col">F</div>
			<div class="col">G</div>
			<div class="col">H</div>
			<div class="col">I</div>
			<div class="col">J</div>
			<div class="col">K</div>
			<div class="col">L</div>
			<div class="col">M</div>
			<div class="col">N</div>
			<div class="col">O</div>
			<div class="col">P</div>
			<div class="col">Q</div>
			<div class="col">R</div>
			<div class="col">S</div>
			<div class="col">T</div>
			<div class="col">U</div>
			<div class="col">V</div>
			<div class="col">W</div>
			<div class="col">X</div>
			<div class="col">Y</div>
			<div class="col">Z</div>
		</div>
	</div>
	<br><br>

	<p>Now let's practice writing some small letter alphabets:</p>
	<br>
	<div class="container text-center">
		<div class="row row-cols-8">
			<div class="col">a</div>
			<div class="col">b</div>
			<div class="col">c</div>
			<div class="col">d</div>
			<div class="col">e</div>
			<div class="col">f</div>
			<div class="col">g</div>
			<div class="col">h</div>
			<div class="col">i</div>
			<div class="col">j</div>
			<div class="col">k</div>
			<div class="col">l</div>
			<div class="col">m</div>
			<div class="col">n</div>
			<div class="col">o</div>
			<div class="col">p</div>
			<div class="col">q</div>
			<div class="col">r</div>
			<div class="col">s</div>
			<div class="col">t</div>
			<div class="col">u</div>
			<div class="col">v</div>
			<div class="col">w</div>
			<div class="col">x</div>
			<div class="col">y</div>
			<div class="col">z</div>
		</div>
	</div>
</div>

<div id="section2" class="content-section">
	<h2>The Alphabet Song</h2>
	<br>
	<!-- <p id="section2-content"></p> -->
	<p>Let's learn the alphabet song:</p>
			
	<div class="container-video">
		<div class="video">
			<iframe width="860" height="515" src="https://www.youtube.com/embed/hq3yfQnllfQ" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div id="section3" class="content-section">
	<!-- <p id="section3-content"></p> -->
	<div class="container-audio text-center">
		<audio controls autoplay>
			<source src="audio/Lesson 1.mp3" type="audio/mp3">
		</audio>
	</div>
	<br><br><br>
</div>

	<div class="center">
		<a class="btn-quiz" href="quiz4.html">TRY QUIZ</a>
	</div>

</div>

<?php include 'footer.html';?>

<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson1.txt")
        .then(response => response.text())
        .then(data => {
            const sections = data.split("---");

            const section1Content = sections[0].trim();
            // const section2Content = sections[1].trim();
            // const section3Content = sections[2].trim();

            document.getElementById("section1-content").textContent = section1Content;
            // document.getElementById("section2-content").textContent = section2Content;
            // document.getElementById("section3-content").textContent = section3Content;
		})


		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>    
