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
// $my_var = "$alphabet,$colour,$digits,$arithmetic,$shapes,$objects,$emotions,$audio,$comm,$actions";
// file_put_contents("my_var.txt", $my_var);
// echo "hiiiiiiii \n";
$python_path = 'C:\Users\varun\AppData\Local\Programs\Python\Python310\python.exe'; // replace this with the path to your Python executable (run where python in cmd)

shell_exec("$python_path decisiontree.py $id");
$query = "select recommendations from data where id=$id";
$result = mysqli_query($con,$query);
if($result && mysqli_num_rows($result) > 0)
{
    $u_data = mysqli_fetch_assoc($result);
}
$abc=$u_data['recommendations'];

// $abc=file_get_contents("my_var.txt");
// echo $abc;
// file_put_contents("my_text.txt", " ");
$array=explode(" ",$abc);
$arr = str_replace(array('[', ']', "'"), '', $array);
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
echo "<h1> Recommended Lessons: </h1><br>";
foreach($links as $name => $url){
    echo "<a class='btn-links' href='$url'><h2>$name</h2></a>";
}

?>

<html>
<head>
    <title>Recommendations</title>
    <link rel="stylesheet" href="css/recommend.css">
</head>
<body>
    <div class="center">
        <a class="btn-back" href="index.html">GO Back To Home</a>
    </div>
    <br>
</body>
</html>