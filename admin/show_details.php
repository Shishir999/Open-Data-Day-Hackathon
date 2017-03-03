<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reg Detail | We Care</title>
</head>
	<link rel="stylesheet" type="text/css" href="../assists/bootstrap/css/bootstrap.css"/>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../assists/bootstrap/js/bootstrap.js"></script>
	
<body style="padding-top: 50px;"">
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h1>Mother Registration | WeCare</h1>
		</div>
		<div class="col-md-3" align="right">
		<br>
			<button class="btn btn-success" onClick="history.go(0)" VALUE="Refresh" align="right">
				Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
			</button>
		</div>
	</div>
	<div class="row">
	<!-- Session Message for delete edit or error -->
		<?php if(isset($_SESSION['adminError'])):?>
				<?php if (($_SESSION['adminError'])!=null):
				 	$_SESSION['adminInfo']=""; ?>
					<div class="alert alert-danger alert-dismissible fade in" role="alert">
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					  		<div align="center"><?=$_SESSION['adminError'];?></div>
					</div>
				<?php endif; 
				$_SESSION['adminError']="";
			endif;?>
			<?php
			if(isset($_SESSION['adminInfo'])): ?>
				<?php if (($_SESSION['adminInfo'])!=null):
					$_SESSION['adminError']=""; ?>
					<div class="alert alert-success alert-dismissible fade in" role="alert">
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					  		<div align="center"><?=$_SESSION['adminInfo'];?></div>
					</div>
				 <?php endif;
				 	$_SESSION['adminInfo']="";
			endif;?>
	<!-- Tables tart from here -->
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
					<td><?=$row['deliveryDate']?></td>
					<td><?=$row['vaccine']?></td>
					<td><?=$row['district']?></td>
					<td><?=$row['deliveryPlace']?></td>
					<td>
						<a href="regDel.php?id=<?= $row['motherID'];?>&action=delete">Delete </a>|
						<a href="regDel.php?id=<?= $row['motherID'];?>&action=edit"> Edit</a>
					</td>
				</tr>
			<?php endwhile; endif; ?>

		</table>
		<h4 align="right">
			<a href="admin_home.php">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				Go Back
			</a>
		</h4>
	</div>
</div>
	
</body>
</html>