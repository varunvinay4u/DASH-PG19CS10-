<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 10 - Actions</title>
    <link rel="stylesheet" type="text/css" href="css/style10.css">
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
			margin: 50px 0 15px 0;
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
        <h1>Lesson 10 - Actions</h1> 
        <div id="section1" class="content-section active"> 
            <p id="section1-content"></p>

            <div class="container text-center">
                <h2>Run</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/Run.jpg" alt="Run">
                    </div>
                    <div class="col-7">
                        <p id="section2-content"></p>
                    </div>
                </div>

                <h2>Dance</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/Dance.jpg" alt="Dance">
                    </div>
                    <div class="col-7">
                        <p id="section3-content"></p>
                    </div>
                </div>

                <h2>Eat</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/eat.jpg" alt="Eat">
                    </div>
                    <div class="col-7">
                        <p id="section4-content"></p>
                    </div>
                </div>

                <h2>Drink</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/drink.jpg" alt="Drink">
                    </div>
                    <div class="col-7">
                        <p id="section5-content"></p>
                    </div>
                </div>

                <h2>Sing</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/Sing.jpg" alt="Sing">
                    </div>
                    <div class="col-7">
                        <p id="section6-content"></p>
                    </div>
                </div>

                <h2>Cry</h2>          
                <div class="row">
                    <div class="col-5">
                        <img src="image/cry.jpg" alt="Cry">
                    </div>
                    <div class="col-7">
                        <p id="section7-content"></p>
                    </div>
                </div>

                <h2>Handshake</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/handshaking.jpg" alt="Handshake">
                    </div>
                    <div class="col-7">
                        <p id="section8-content"></p>
                    </div>
                </div>

                <h2>Talk</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/talk.jpg" alt="Talk">
                    </div>
                    <div class="col-7">
                        <p id="section9-content"></p>
                    </div>
                </div>

                <h2>Fight</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/fight.jpg" alt="Fight">
                    </div>
                    <div class="col-7">
                        <p id="section10-content"></p>
                    </div>
                </div>

                <h2>Clap</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/clap.jpg" alt="Clap">
                    </div>
                    <div class="col-7">
                        <p id="section11-content"></p>
                    </div>
                </div>

                <h2>Hug</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/hug.jpg" alt="Hug">
                    </div>
                    <div class="col-7">
                        <p id="section12-content"></p>
                    </div>
                </div>

                <h2>Bath</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/bath.jpg" alt="Bath">
                    </div>
                    <div class="col-7">
                        <p id="section13-content"></p>
                    </div>
                </div>

                <h2>Jump</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="image/jump.jpg" alt="Jump">
                    </div>
                    <div class="col-7">
                        <p id="section14-content"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="section2" class="content-section">
            <h2>Video showing various Actions </h2>
            <div class="container-video">
				<div class="video">
				  <iframe width="860" height="515" src="videos/Actions compressed.mp4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
        </div>
        <div id="section3" class="content-section">
            <div class="container-audio text-center">
			    <audio controls autoplay >
				    <source src="audio/Lesson 10.mp3" type="audio/mp3">
			    </audio>
		    </div>
        </div>
    <div class="center">
        <a class="btn-quiz" href="quiz10.html">TRY QUIZ</a>
    </div>
</div>

 <?php include 'footer.html';?>
 <script>
// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("lessons/lesson10.txt")
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
			const section13Content = sections[12].trim();
            const section14Content = sections[13].trim();

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
			document.getElementById("section13-content").textContent = section13Content;
			document.getElementById("section14-content").textContent = section14Content;
		})

		.catch(error => {
            console.error("Error fetching content:", error);
        });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
