<html>
<head>
    <title>Recommendations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/recommend.css">
    <style>
        section {
	        display: none;
        }

        .active {
	        display: block;
            border-bottom: 1px #fff;
        }

        a {
            text-decoration: none;
        }

        .nav-link{
			display: flex;
			background-color: #4E9AF1;
			text-decoration: none;
			font-size: 18px;
			color: #fff;
		}
		
      	.dropdown-menu .nav-link{
        	color: #000;
      	}
		
		.dropdown-toggle {
			display: inline-block;
	   		margin-left: 0.255em;
			vertical-align: 0.255em;
			content: "";
			border-top: 0.3em solid;
			border-right: 0.3em solid transparent;
			border-bottom: 0;
			border-left: 0.3em solid transparent;
		}
    </style>
</head>
<body>
<header>
	<nav class="navbar text-center" fixed-top>
		<ul class="nav nav-pills">
			<li class="nav-item"><a class="nav-link active" active href="#" onclick="showSection(1);">Recommended Lessons</a></li>
            <li class="nav-item"><a class="nav-link" active href="#" onclick="showSection(2);">All Lessons</a></li>
        </ul>
	</nav>
</header>


<main id="container">

    <section id="section1" class="active text-center">
<?php

session_start();

	include("connection.php");
	include("functions.php");
    // $_SESSION['code'] = 1937;
    
	$user_data = check_login($con);

$id=$user_data['id'];
$alphabet=$user_data['alphabet'];
$colour=$user_data['colour'];
$digits=$user_data['digits'];
$arithmetic=$user_data['arithmetic'];
$shapes=$user_data['shapes'];
$objects=$user_data['objects'];
$emotions=$user_data['emotions'];
$audio=$user_data['audio'];
$comm=$user_data['comm'];
$actions=$user_data['actions'];

$scores_str="$alphabet,$colour,$digits,$arithmetic,$shapes,$objects,$emotions,$audio,$comm,$actions";
$escaped_str = escapeshellarg($scores_str);
// $my_var = "$alphabet,$colour,$digits,$arithmetic,$shapes,$objects,$emotions,$audio,$comm,$actions";
// file_put_contents("my_var.txt", $my_var);
// echo "hiiiiiiii \n";
$python_path = 'C:\Users\varun\AppData\Local\Programs\Python\Python310\python.exe'; // replace this with the path to your Python executable (run where python in cmd)

$pred=shell_exec("$python_path RFmodel.py $escaped_str");
// $query = "select recommendations from data where id=$id";
// $result = mysqli_query($con,$query);
// if($result && mysqli_num_rows($result) > 0)
// {
//     $u_data = mysqli_fetch_assoc($result);
// }
// $abc=$u_data['recommendations'];
$pred=substr($pred,0,-1);

// $abc=file_get_contents("my_var.txt");
// echo $abc;
// file_put_contents("my_text.txt", " ");
$array=explode(" ",$pred);
$arr = str_replace(array("'"," '","' "," ",' ','[',']'), '', $array);
// $arr = array_slice($array, 1, -1);
foreach($arr as $rec)
{
    if($rec=="Alphabets")
        $links= array( "Alphabets" => "lesson1.html" );
    if($rec=="Colors")
        $links["Colors"]="lesson2.html";
    if($rec=="Numbers")
        $links["Numbers"]="lesson3.html";
    if($rec=="Arithmetic")
        $links["Arithmetic"]="lesson4.html";
    if($rec=="Shapes")
        $links["Shapes"]="lesson5.html";
    if($rec=="Objects")
        $links["Objects"]="lesson6.html";
    if($rec=="Emotions")
        $links["Emotions"]="lesson7.html";
    if($rec=="Sound")
        $links["Sound"]="lesson8.html";
    if($rec=="Communication")
        $links["Communication"]="lesson9.html";
    if($rec=="Actions")
        $links["Actions"]="lesson10.html";
}
echo "<h1 class='h1 active'> Recommended Lessons: </h1><br>";
foreach($links as $name => $url){
    echo "<a class='btn-links' href='$url'><h2>$name</h2></a>";
}

?>

    </section>


    <section id="section2" class="text-center">
        <h1 class="h1">Lessons</h1><br>
        <div class="btn-links"><a href="lesson1.html"><h2>Lesson 1: Alphabets</h2></a></div>
	    <div class="btn-links"><a href="lesson2.html"><h2>Lesson 2: Colors</h2></a></div>
        <div class="btn-links"><a href="lesson3.html"><h2>Lesson 3: Numbers</h2></a></div>
	    <div class="btn-links"><a href="lesson4.html"><h2>Lesson 4: Arithmetic</h2></a></div>
	    <div class="btn-links"><a href="lesson5.html"><h2>Lesson 5: Shapes</h2></a></div>
	    <div class="btn-links"><a href="lesson6.html"><h2>Lesson 6: Objects</h2></a></div>
	    <div class="btn-links"><a href="lesson7.html"><h2>Lesson 7: Emotions</h2></a></div>
        <div class="btn-links"><a href="lesson8.html"><h2>Lesson 8: Sound</h2></a></div>
	    <div class="btn-links"><a href="lesson9.html"><h2>Lesson 9: Communication</h2></a></div>
	    <div class="btn-links"><a href="lesson10.html"><h2>Lesson 10: Actions</h2></a></div>
    </section>

    
    <div class="center">
        <a class="btn-back" href="index.html">GO Back To Home</a>
    </div>
</main>

<script>
    function showSection(sectionIndex) {
		var sections = document.getElementsByTagName("section");
		for (var i = 0; i < sections.length; i++) {
			sections[i].classList.remove("active");
		}
		sections[sectionIndex-1].classList.add("active");
	}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
