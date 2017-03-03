<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reg Detail | We Care</title>
</head>
	<link rel="stylesheet" type="text/css" href="../assists/bootstrap/css/bootstrap.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../assists/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/loader.js"></script>
<body style="padding-top: 0px;"">
<div class="container">
<h1 align="center">Visulaization | WeCare</h1><hr>
	<div class="row">
		<?php include('../function.php');
			$cn=makeconnection(); 
				$districts=[];
			$sql = "SELECT COUNT(motherID) as totalcount,district FROM motherreg GROUP BY district ORDER BY COUNT(motherID) DESC";
				$result=$cn->query($sql);
				$ar=array();
				if ($result->num_rows > 0):
					while($row = $result->fetch_assoc()):
						$district['name']=$row["district"];
						$district['count']=$row['totalcount'];
						$districts[]=$district;
						//$ar=array_merge($ar,array($row['district']=>$row['totalcount']));
				?>
						<!-- <strong><?=$row['district']?></strong>===><i><?=$row['totalcount']?></i><br> -->
		<?php endwhile; endif; 
		$new= json_encode($districts);
		?>
	</div>
	<div class="row">
		<script type="text/javascript">
		var districts_json=JSON.parse('<?=$new ?>');
		var district_arr=[];
		districts_json.forEach(function(e,i){
			var d=[];
			d.push(e.name);
			d.push(parseInt(e.count));
			district_arr.push(d);
		});
		google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);
      	function drawChart() {
        	// Create the data table.
        	var data = new google.visualization.DataTable();
        	data.addColumn('string', 'District');
        	data.addColumn('number', 'Total Registred Mother');
        	console.log(district_arr); //console output for debug
        	data.addRows(district_arr);
        	// Set chart options
        	var options = {'title':'Registered mother based on district',
                       'width':1000,
                       'height':500};
	        // Instantiate and draw our chart, passing in some options.
        	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        	chart.draw(data, options);
      	}
    	</script>
    <div id="chart_div" align="center"></div>
    <h3 align="right">
    	<a href="admin_home.php">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			Go Back
		</a>
	</h3>
	</div>

</div>
	
</body>
</html>