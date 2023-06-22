<!DOCTYPE html>
<html>
<head>
	  <title>Lesson 6 - Objects and Animals</title>
    <link rel="stylesheet" type="text/css" href="css/stylel6.css">
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
    <h1>Lesson 6 - Objects and Animals</h1>
    <div id="section1" class="content-section active">
        <p id="section1-content"></p>

        <h2>OBJECTS</h2>
        <p id="section2-content"></p>
        
        <div class="container text-center">
          <div class="row row-cols-3">
            <figure class="col">
              <img src="image/table.jpeg" alt="Table">
              <figcaption>Table</figcaption>
            </figure>

            <figure class="col">
              <img src="image/chair.jpeg" alt="Chair">
              <figcaption>Chair</figcaption>
            </figure>

            <figure class="col">
              <img src="image/ball.jpeg" alt="Ball">
              <figcaption>Ball</figcaption>
            </figure>

            <figure class="col">
              <img src="image/plate.jpeg" alt="Plate">
              <figcaption>Plate</figcaption>
            </figure>

            <figure class="col">
                <img src="image/glass.jpeg" alt="Glass">
                <figcaption>Glass</figcaption>
            </figure>

            <figure class="col">
              <img src="image/spoon.jpeg" alt="Spoon">
              <figcaption>Spoon</figcaption>
            </figure>

            <figure class="col">
              <img src="image/tree.jpeg" alt="Tree">
              <figcaption>Tree</figcaption>
            </figure>

            <figure class="col">
              <img src="image/car.jpeg" alt="Car">
              <figcaption>Car</figcaption>
            </figure>

            <figure class="col">
                <img src="image/train.jpeg" alt="Train">
                <figcaption>Train</figcaption>
            </figure>

            <figure class="col">
              <img src="image/aeroplane.jpeg" alt="Aeroplane">
              <figcaption>Aeroplane</figcaption>
            </figure>

            <figure class="col">
              <img src="image/bus.jpeg" alt="Bus">
              <figcaption>Bus</figcaption>
            </figure>

            <figure class="col">
              <img src="image/ship.jpeg" alt="Ship">
              <figcaption>Ship</figcaption>
            </figure>
          </div>
        </div>


        <h2>ANIMALS</h2>
        <p id="section3-content"></p>
        <ol class="list-obj text-center">
          <li>Domestic Animals</li>
          <li>Wild Animals</li>
        </ol>

        <h3>Domestic Animals</h3>
        <p id="section4-content"></p>

        <div class="container text-center">
          <div class="row row-cols-3">
            <figure class="col">
              <img src="image/cat.jpeg" alt="Cat">
              <figcaption>Cat</figcaption>
            </figure>

            <figure class="col">
                <img src="image/dog.jpeg" alt="Dog">
                <figcaption>Dog</figcaption>
            </figure>

            <figure class="col">
              <img src="image/cow.jpeg" alt="Cow">
              <figcaption>Cow</figcaption>
            </figure>

            <figure class="col">
              <img src="image/goat.jpeg" alt="Goat">
              <figcaption>Goat</figcaption>
            </figure>

            <figure class="col">
                <img src="image/hen.jpeg" alt="Hen">
                <figcaption>Hen</figcaption>
            </figure>

            <figure class="col">
              <img src="image/sheep.jpeg" alt="Sheep">
              <figcaption>Sheep</figcaption>
            </figure>
          </div>
        </div>


        <h3>Wild Animals</h3>
        <p id="section5-content"></p>
        <div class="container text-center">
          <div class="row row-cols-3">
            <figure class="col">
              <img src="image/lion.jpeg" alt="Lion">
              <figcaption>Lion</figcaption>
            </figure>

            <figure class="col">
                <img src="image/tiger.jpeg" alt="Tiger">
                <figcaption>Tiger</figcaption>
            </figure>

            <figure class="col">
              <img src="image/elephant.jpeg" alt="Elephant">
              <figcaption>Elephant</figcaption>
            </figure>

            <figure class="col">
              <img src="image/giraffe.jpeg" alt="Giraffe">
              <figcaption>Giraffe</figcaption>
            </figure>

            <figure class="col">
                <img src="image/bear.jpeg" alt="Bear">
                <figcaption>Bear</figcaption>
            </figure>

            <figure class="col">
              <img src="image/snake.jpeg" alt="Snake">
              <figcaption>Snake</figcaption>
            </figure>
          </div>
        </div>
    </div>
    <div id="section2" class="content-section">
      <div class="container-video">
				<div class="video">
					<iframe width="860" height="515" src="videos/Animal_Sounds.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
      <div class="container-video">
				<div class="video">
					<iframe width="860" height="515" src="videos/Domestic_Animals.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
    </div>
    <div id="section3" class="content-section">
      <div class="container-audio text-center">
			  <audio controls autoplay >
				  <source src="audio/Lesson 6 child voice.mp3" type="audio/mp3">
			  </audio>
		  </div>
    </div>
    <div class="center">
        <a class="btn-quiz" href="quiz5.html">TRY QUIZ</a>
    </div>
</div>

<?php include 'footer.html';?>

    
<script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson6.txt")
        .then(response => response.text())
        .then(data => {
            const sections = data.split("---");

            const section1Content = sections[0].trim();
            const section2Content = sections[1].trim();
            const section3Content = sections[2].trim();
            const section4Content = sections[3].trim();
            const section5Content = sections[4].trim();

            document.getElementById("section1-content").textContent = section1Content;
            document.getElementById("section2-content").textContent = section2Content;
            document.getElementById("section3-content").textContent = section3Content;
			      document.getElementById("section4-content").textContent = section4Content;
            document.getElementById("section5-content").textContent = section5Content;
		})

		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    
  
