<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assists/bootstrap/css/bootstrap.min.css">
	<title>Send mail</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Email</h2>
				</div>
				<div class="panel-body">
					<form method="post" action="mailprocess.php">
						<div class="form-group">
							<label>email-id:</label>
							<input name="email" type="email" class="form-control">
						</div>
						<div class="form-group">
							<label>subject:</label>
							<input name="subject" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>message:</label>
							<textarea name="message" type="text" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name="sendmail" value="sendmail">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>