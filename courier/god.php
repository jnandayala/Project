<?php
 $con = mysqli_connect('localhost','root','','farmer');
?>
<html>
<head>
 <meta charset="utf-8">
 <title>
 performance
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
 ['Date', 'soldno'],
 <?php 
 $query = "SELECT quantity, ordered_at  FROM purchase";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['ordered_at']."',".$row['quantity']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Date wise visits'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 chart.draw(data, options);
 }
 </script>
</head>
<body>
 <h1>PERFORMANCE</h1>
 <div id="columnchart" style="width: 900px; height: 500px;"></div>
</body>
</html>