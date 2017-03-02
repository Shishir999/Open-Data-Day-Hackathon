<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reg Detail | We Care</title>
</head>
	<link rel="stylesheet" type="text/css" href="../assists/bootstrap/css/bootstrap.css"/>
	<script type="text/javascript" src="../assists/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
<body style="padding-top: 50px;"">
<div class="container">
<h1>Mother Registration | WeCare</h1>
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
				<th>Alter</th>
			</tr>
			<?php 
				include('../function.php');
				$cn=makeconnection();
				$sql="SELECT * FROM motherReg";
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
					<td><?=$row['deliveryPlace']?></td>
					<td><?=$row['vaccine']?></td>
					<td><?=$row['district']?></td>
					<td><?=$row['deliveryPlace']?></td>
					<td>
						<a href="editDel.php?id=<?= $row['motherID'];?>&action=delete">Delete </a>|
						<a href="editDel.php?id=<?= $row['motherID'];?>&action=edit"> Edit</a>
					</td>
				</tr>
			<?php endwhile; endif; ?>

		</table>
		<h4 align="right">
			<a href="">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				Go Back
			</a>
		</h4>
	</div>
</div>
	
</body>
</html>