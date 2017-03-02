<?php 
//var_dump($_POST);
if (isset($_POST['sendmail'])) {
	$to = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	echo "To = $to <br>";
	echo "Subject = $subject <br>";
	echo "Message = $message";
}
else {
	echo "Some error";
	# code...
}
?>