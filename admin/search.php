<html lang="en">
<head>
  <meta charset="utf-8">
  <title>We Care Admin Panel</title>
  <link rel="stylesheet" href="css/style_admin.css">
  <link rel="stylesheet" type="text/css" href="../assists/bootstrap/css/bootstrap.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../assists/bootstrap/js/bootstrap.js"></script>
	
		
	</head>

<body style="background:url(images/bg.png) repeat;">
	<div id="container">
	<div class="row">
		<div class="col-md-9">
			<h1>Search | WeCare</h1>
		</div>
		<div class="col-md-3" align="right">
		<br>
			<button class="btn btn-success" onClick="history.go(0)" VALUE="Refresh" align="right">
				Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
			</button>
		</div><hr>
	</div><hr>
		<div  class="form">
			<form action="" method="post">
			<center>
				<input style="color:red; height: 30px; width: 400px;"  type="text" name="search" id="search" placeholder="Enter Keyword">
				<input style="color:red;width:100px;" type="submit" name="user" id="user" value="Search">
			</center>
			</form>
		</div>
		<?php 
		if (isset($_POST['user'])): ?>
		<div class="row">
			<table class="table table-responsive table-hover" align="center">
			<tr>
				<th>S.N.</th>
				<th>Mother Name</th>
				<th>DOB</th>
				<th>Address</th>
				<th>Contact | Email</th>
				<th>Delivery Date</th>
				<th>Vaccine</th>
				<th>District</th>
				<th>Delivery Place</th>
			</tr>
		</div>
		<?php 
			include('../function.php');
			$cn=makeconnection();
			$keyWord=$_POST['search'];
			$sql="SELECT * FROM `motherreg` WHERE `motherID` LIKE '%".$keyWord."%' OR `mName` LIKE '%".$keyWord."%' OR `mdob` LIKE '%".$keyWord."%' OR `address` LIKE '%".$keyWord."%' OR `mobilenumber` LIKE '%".$keyWord."%' OR `email` LIKE '%".$keyWord."%' OR `deliveryDate` LIKE '%".$keyWord."%' OR `vaccine` LIKE '%".$keyWord."%' OR `district` LIKE '%".$keyWord."%' OR `deliveryPlace`";

			//echo $sql;
			$result=$cn->query($sql);
			$i=0;
			if ($result->num_rows > 0):
					while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?=++$i;//$row['motherID'];?></td>
					<td><?=$row['mName']?></td>
					<td><?=$row['mdob']?></td>
					<td><?=$row['address']?></td>
					<td><?=$row['mobilenumber']."<br>".$row['email']?></td>
					<td><?=$row['deliveryDate']?></td>
					<td><?=$row['vaccine']?></td>
					<td><?=$row['district']?></td>
					<td><?=$row['deliveryPlace']?></td>
				</tr>
			<?php endwhile; endif;endif;?>
		</table>
	</div> <!--! end container -->
	<h3 align="right">
    	<a href="admin_home.php">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			Go Back
		</a>
	</h3>
	
	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>

</body>
</html>