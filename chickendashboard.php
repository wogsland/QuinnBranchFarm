<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
	  
		//var chickens = SpreadsheetApp.openById("0Aki2OI_x_EIqdE9iR2tMRkdvN1F4RVctQUVzR0R6MUE");
		
        //var values = chickens.getSheetByName('Sheet1').getRange(1, 1,143,2).getValues();
		var data = google.visualization.arrayToDataTable([
          ['Age', 'Weight'],
          [ 8,      12],
          [ 4,      5.5],
          [ 11,     14],
          [ 4,      5],
          [ 3,      3.5],
          [ 6.5,    7]
        ]);

        var options = {
          title: 'Chicken info',
          hAxis: {title: 'Date'},
          vAxis: {title: 'Total Eggs', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
 
  
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>