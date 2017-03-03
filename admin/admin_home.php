<?php
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>We Care Panel</title>
  <link rel="stylesheet" href="css/style_admin.css">
  <link rel="stylesheet" type="text/css" href="../assists/bootstrap/css/bootstrap.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../assists/bootstrap/js/bootstrap.js"></script>
</head>
<body >
<div id="container" class="container">
<div class="row">
		<div class="col-md-9">
			<h1>We Care Admin Panel</h1>
		</div>
		<div class="col-md-3" align="right">
		<br>
			<button class="btn btn-success" onClick="history.go(0)" VALUE="Refresh" align="right">
				Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
			</button>
		</div>
	</div><hr>
<div id="option" align="right">
 <ul>
 	<li><a href="sendmail.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:28px;">Send Mail</span></a></li><br>
   
    <li><a href="show_details.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:28px;">Show Mother's Registration Details</span></a></li><br/>

    <li><a href="visual.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:28px;">Data Visualization</span></a></li><br/>

    <li><a href="search.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:28px;">Search Keywords</span></a></li><br/>

	<li><a href="Confirmed.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:28px;">Responded Mail</span></a></li> <br/>

	<li><a href="logout.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:28px;">Logout | WeCare</span></a></li><br/>

				
</ul>
</div>
		
</div> <!--! end container -->
<div>


	
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>



	

	
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