<?php
	session_start(); 
	include('../function.php');
	$cn=makeconnection();
	if (isset($_GET['action']) && $_GET['action']=="delete")
	{
		$sql="DELETE FROM motherReg WHERE motherID=".$_GET['id'];
		$result=mysqli_query($cn,$sql);
		if (!$result)
		{
			$_SESSION['adminError']="Something went wrong ! Please try again";
			header('location:show_details.php');
		}
		else
		{
			$_SESSION['adminInfo']="Data Deleted succfully";
			header('location:show_details.php');
		}
	}
	else if (isset($_GET['action']) && $_GET['action']=="edit")
	{
		//echo "Data will be edited with id ".$_GET['id'];
		header("Location:edit.php?id=".$_GET['id']);
	}
	
 ?>