<?php
 
$dataPoints = array(
	array("label"=> "Jan", "y"=> 41),
	array("label"=> "Feb", "y"=> 35),
	array("label"=> "Mar", "y"=> 50),
	array("label"=> "Apr", "y"=> 45),
	array("label"=> "May", "y"=> 52),
	array("label"=> "Jun", "y"=> 68),
	array("label"=> "Jul", "y"=> 38),
	array("label"=> "Aug", "y"=> 71),
	array("label"=> "Sep", "y"=> 52),
	array("label"=> "Oct", "y"=> 60),
	array("label"=> "Nov", "y"=> 36),
	array("label"=> "Dec", "y"=> 49)
);

$dataPoints2 = array(
	array("label"=> "Sanitation", "y"=> 41),
	array("label"=> "Electrical", "y"=> 35),
	array("label"=> "Civil", "y"=> 50),
	array("label"=> "Employee related", "y"=> 45),
	array("label"=> "Others", "y"=> 52)
);
	
?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
    	google.charts.load('current', {'packages':['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

    	function drawChart() {
        	var data = google.visualization.arrayToDataTable([
        		['Month', 'Grievances'],
        		['Jan',  1000],
        		['Feb',  1170],
        		['Mar',  660],
        		['Apr',  1030],
				['May',  345],
        		['Jun',  1354],
        		['July',  543],
				['Aug',  3442],
        		['Sep',  345],
        		['Oct',  679],
				['Nov',  890],
        		['Dec',  1424]
        	]);

        	var options = {
          		title: 'No. of Grievances in last 12 months',
          		legend: { position: 'bottom' }
				
        	};

        	var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

        	chart.draw(data, options);
      	}

	

    </script>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Grievances"
	},
	axisY:{
		title: "No. of Grievances"
	},
	data: [{
		type: "line", //change type to bar, line, area, pie, etc
		//indexlabel: "{y}", //Shows y value on all Data Points
		indexlabelFontColor: "#5A5757",
		indexlabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Grievances Category Contributions"
	},
	subtitles: [{
		text: "No. of Grievances"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
chart2.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 50%; width: 100%;"></div>
<div id="chartContainer2" style="height: 50%; width: 50%;"></div>
<div id="line_chart" style="width: 900px; height: 500px"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>                   