<?php 
	session_start();
	include('function.php');
	$cn=makeconnection();
		if (isset($_POST['submit']))
		{
			$mName=$_POST['mName'];
			$mdob=$_POST['mdob'];
			$address=$_POST['address'];
			$mobilenumber=$_POST['mobilenumber'];
			$email=$_POST['email'];
			$deliveryDate=$_POST['deliveryDate'];
			$vaccine=$_POST['vaccine'];
			$district=$_POST['district'];
			$deliveryPlace=$_POST['deliveryPlace'];
			$cn=makeconnection();
			$sql="INSERT INTO motherReg SET mName='".$mName."', mdob='".$mdob."', address='".$address."', mobilenumber='".$mobilenumber."', email='".$email."', deliveryDate='".$deliveryDate."', vaccine='".$vaccine."', district='".$district."', deliveryPlace='".$deliveryPlace."'";
			$query=mysqli_query($cn,$sql);
			if (!$query)
			{
				 $_SESSION['regError']="Something went wrong, Please try a moment again with unique email adress";
				// echo $sql;
				header("location:register.php");
				
			}
			else
			{
				$_SESSION['regInfo']="Details of mother Created suceffully! ";
				header("location:register.php");
			}
		}

 ?>
 <!-- <script>
 	alert("Database Inserted sucessfully");
 	setTimeout(function () 
 	{
   window.location.href= 'http://localhost:1234/odd/register.php';
   },1000); // 1 seconds
 </script> -->
 