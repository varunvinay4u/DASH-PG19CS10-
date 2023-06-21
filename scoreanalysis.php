<?php

session_start();

include("connection.php");
include("functions.php");
// $_SESSION['code'] = 1937;
  
$user_data = check_login($con);

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

// for analysis with pie charts and bar graphs
$scores=[$user_data['alphabet'],$user_data['colour'],$user_data['digits'],$user_data['arithmetic'],$user_data['shapes'],$user_data['objects'],$user_data['emotions'],$user_data['audio'],$user_data['comm'],$user_data['actions']];
$scores2=[$user_data['alphabet2'],$user_data['colour2'],$user_data['digits2'],$user_data['arithmetic2'],$user_data['shapes2'],$user_data['objects2'],$user_data['emotions2'],$user_data['audio2'],$user_data['comm2'],$user_data['actions2']];
$scores3=[$user_data['alphabet3'],$user_data['colour3'],$user_data['digits3'],$user_data['arithmetic3'],$user_data['shapes3'],$user_data['objects3'],$user_data['emotions3'],$user_data['audio3'],$user_data['comm3'],$user_data['actions3']];
$avg=[$user_data['alphabetAvg'],$user_data['colourAvg'],$user_data['digitsAvg'],$user_data['arithmeticAvg'],$user_data['shapesAvg'],$user_data['objectsAvg'],$user_data['emotionsAvg'],$user_data['audioAvg'],$user_data['commAvg'],$user_data['actionsAvg']];
$attempts=[$user_data['alphabetAttempts'],$user_data['colourAttempts'],$user_data['digitsAttempts'],$user_data['arithmeticAttempts'],$user_data['shapesAttempts'],$user_data['objectsAttempts'],$user_data['emotionsAttempts'],$user_data['audioAttempts'],$user_data['commAttempts'],$user_data['actionsAttempts']];
$lessons=['Alphabets','Colors','Numbers','Arithmetic','Shapes','Objects','Emotions','Sound','Communication','Actions'];  

// for analysis with line diagram
$lesson1=[$user_data['alphabetAvg'],$user_data['alphabet'],$user_data['alphabet2'],$user_data['alphabet3']];
$lesson2=[$user_data['colourAvg'],$user_data['colour'],$user_data['colour2'],$user_data['colour3']];
$lesson3=[$user_data['digitsAvg'],$user_data['digits'],$user_data['digits2'],$user_data['digits3']];
$lesson4=[$user_data['arithmeticAvg'],$user_data['arithmetic'],$user_data['arithmetic2'],$user_data['arithmetic3']];
$lesson5=[$user_data['shapesAvg'],$user_data['shapes'],$user_data['shapes2'],$user_data['shapes3']];
$lesson6=[$user_data['objectsAvg'],$user_data['objects'],$user_data['objects2'],$user_data['objects3']];
$lesson7=[$user_data['emotionsAvg'],$user_data['emotions'],$user_data['emotions2'],$user_data['emotions3']];
$lesson8=[$user_data['audioAvg'],$user_data['audio'],$user_data['audio2'],$user_data['audio3']];
$lesson9=[$user_data['commAvg'],$user_data['comm'],$user_data['comm2'],$user_data['comm3']];
$lesson10=[$user_data['actionsAvg'],$user_data['actions'],$user_data['actions2'],$user_data['actions3']];

// labels
$labels = ['Alphabet', 'Colour', 'Digits', 'Arithmetic', 'Shapes', 'Objects', 'Emotions', 'Audio', 'Communications', 'Actions'];

// // pie chart for average marks
// $jsonData = json_encode([
//     // 'labels' => $labels,
//     'datasets' => [
//       [
//         'backgroundColor' => ['violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red', 'black', 'pink', 'brown'],
//         'data' => array_values($avg)
//       ]
//     ]
// ]);

// pie chart for first try marks
$jsonData1 = json_encode([
    // 'labels' => $labels,
    'datasets' => [
      [
        'backgroundColor' => ['violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red', 'black', 'pink', 'brown'],
        'data' => array_values($scores)
      ]
    ]
]);

// pie chart for second try marks
$jsonData2 = json_encode([
    // 'labels' => $labels,
    'datasets' => [
      [
        'backgroundColor' => ['violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red', 'black', 'pink', 'brown'],
        'data' => array_values($scores2)
      ]
    ]
]);

// pie chart for third try marks
$jsonData3 = json_encode([
    // 'labels' => $labels,
    'datasets' => [
      [
        'backgroundColor' => ['violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red', 'black', 'pink', 'brown'],
        'data' => array_values($scores3)
      ]
    ]
]);

// bar diagram comparing all attempts and average mark
$jsonDataBar = json_encode([
    'labels' => $labels,
    'datasets' => [
      [
        'label' => 'First Attempt',
        'backgroundColor' => 'red',
        // 'borderColor' => 'rgba(255, 99, 132, 1)',
        // 'borderWidth' => 1,
        'data' => $scores,
      ],
      [
        'label' => 'Second Attempt',
        'backgroundColor' => 'blue',
        'data' => $scores2,
      ],
      [
        'label' => 'Third Attempt',
        'backgroundColor' => 'green',
        'data' => $scores3,
      ],
      [
        'label' => 'Average Mark',
        'backgroundColor' => 'black',
        'data' => $avg,
      ]
    ]
]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/scoreanalysis.css">
    <link rel="icon" href="image/logo1.png" type="image/png">

    <style>
      h2 {
        margin-bottom: 30px;
      }
    </style>
</head>
<body>

<div class="container">
  <div class="row pie">
    <div class="col-6">
      <h2>Latest Score</h2>
      <canvas id="myChartMain"></canvas>
    </div>
    <div class="col-6">
      <h2>Average Score</h2>
      <canvas id="myChart"></canvas>
    </div>
    <!-- <div class="col-2">
      <canvas id="myChart1"></canvas>
      <canvas id="myChart2"></canvas>
    </div>
    <div class="col-2">
      <canvas id="myChart3"></canvas>
      <canvas id="myChart"></canvas>
    </div> -->
  </div>
  <div class="row">
    <h2>Score Analysis</h2>
    <div class="col-6">
      <canvas id="myChartLine"></canvas>
    </div>
    <div class="col-6">
      <canvas id="myChartBar"></canvas>
    </div>
  </div>
</div>


<script>
  // aster plot for scores
  var ctx6 = document.getElementById("myChartMain").getContext("2d");
		var myChartMain = new Chart(ctx6, {
			type: 'polarArea',
			data: {
				labels: <?php echo json_encode($lessons); ?>,
				datasets: [{
					label: 'lesson scores',
					data: <?php echo json_encode($scores); ?>,
					backgroundColor: ['violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red', 'black', 'pink', 'brown'],
					borderWidth: 1,
					fill: false
				}]
      },
      options: {
        scale:{
          ticks:{
            beginAtZero: true,
            max: 10
          }
        }
      }
    });
    

   // aster plot for average scores
   var ctx = document.getElementById("myChart").getContext("2d");
		var myChart = new Chart(ctx, {
			type: 'polarArea',
			data: {
				labels: <?php echo json_encode($lessons); ?>,
				datasets: [{
					label: 'lesson average scores',
					data: <?php echo json_encode($avg); ?>,
					backgroundColor: ['violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red', 'black', 'pink', 'brown'],
					borderWidth: 1,
					fill: false
				}]
      }
      ,
      options: {
        scale:{
          ticks:{
            beginAtZero: true,
            max: 10
          },
          r:10,
          angleLines: {
            display: false
          }
        },
        elements: {
          arc: {
            maxSize: 10
          }
        }
      }
    });

  // // pie chart for first try marks
  // var ctx1 = document.getElementById('myChart1').getContext('2d');
  // var chartData1 = <?php echo $jsonData1; ?>;
  // var myChart1 = new Chart(ctx1, {
  //   type: 'pie',
  //   data: chartData1
  // });

  // // pie chart for second try marks
  // var ctx2 = document.getElementById('myChart2').getContext('2d');
  // var chartData2 = <?php echo $jsonData2; ?>;
  // var myChart2 = new Chart(ctx2, {
  //   type: 'pie',
  //   data: chartData2
  // });

  // // pie chart for third try marks
  // var ctx3 = document.getElementById('myChart3').getContext('2d');
  // var chartData3 = <?php echo $jsonData3; ?>;
  // var myChart3 = new Chart(ctx3, {
  //   type: 'pie',
  //   data: chartData3
  // });

  // bar diagram comparing all attempts and average mark
  var ctx4 = document.getElementById('myChartBar').getContext('2d');
  var chartData4 = <?php echo $jsonDataBar; ?>;
      var options = {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
            },
          }],
        },
        
      };
      var myChartBar = new Chart(ctx4, {
        type: 'bar',
        data: chartData4,
        options: options,
      });

  // line diagram comparing all attempts and average mark
  var ctx5 = document.getElementById('myChartLine').getContext('2d');
      var data = {
        labels: ['Average Mark', 'First Try', 'Second Try', 'Third Try'],
        datasets: [
          {
            label: 'lesson 1',
            borderColor: 'violet',
            data: <?php echo json_encode($lesson1); ?>
          },
          {
            label: 'lesson 2',
            borderColor: 'indigo',
            data: <?php echo json_encode($lesson2); ?>
          },
          {
            label: 'lesson 3',
            borderColor: 'blue',
            data: <?php echo json_encode($lesson3); ?>
          },
          {
            label: 'lesson 4',
            borderColor: 'green',
            data: <?php echo json_encode($lesson4); ?>
          },
          {
            label: 'lesson 5',
            borderColor: 'yellow',
            data: <?php echo json_encode($lesson5); ?>
          },
          {
            label: 'lesson 6',
            borderColor: 'orange',
            data: <?php echo json_encode($lesson6); ?>
          },
          {
            label: 'lesson 7',
            borderColor: 'red',
            data: <?php echo json_encode($lesson7); ?>
          },
          {
            label: 'lesson 8',
            borderColor: 'black',
            data: <?php echo json_encode($lesson8); ?>
          },
          {
            label: 'lesson 9',
            borderColor: 'pink',
            data: <?php echo json_encode($lesson9); ?>
          },
          {
            label: 'lesson 10',
            borderColor: 'brown',
            data: <?php echo json_encode($lesson10); ?>
          }
        ]
      };
      var options = {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      };
      var myChartLine = new Chart(ctx5, {
        type: 'line',
        data: data,
        options: options
      });

</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>