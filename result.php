<?php
session_start();
include("login.php");
$query="select * from result where roll_no='".$_SESSION['roll_no']."' and subject_code='".@$_GET['subject_code']."';";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
?>
<html>
  <head>
      <title>RESULT</title>
      <script src="piechar1.js"></script>
      <script src="piechar2.js"></script>
  </head>
  <body>
  <?php include("header.php")?>
        <div style="margin-left:40%; border:3px solid rgb(0, 102, 255); background-color:aquamarine; width:150px; padding-left:10px;padding-right:10px; border-radius:5px;">
                <h1 style="text-align:center"> SCORE : <?php echo $row[4];?> </h1>
            </div>  
    <div id="container" style="width: 100%; height: 100%"></div>
    
    <script>
        anychart.onDocumentReady(function() {

// set the data
var data = [
    {x: "CORRECT ANSWERS", value:<?php echo $row[2];?>},
    {x: "WRONG ANSWERS", value: <?php echo $row[3];?>}

];

// create the chart
var chart = anychart.pie();

// set the chart title
chart.title("EVALUATIONS OF YOUR ANSWERS");

// add the data
chart.data(data);
  // set legend position
  chart.legend().position("right");
  // set items layout
  chart.legend().itemsLayout("vertical");

// display the chart in the container
chart.container('container');
chart.draw();

});
    
    </script>

  </body>
</html>