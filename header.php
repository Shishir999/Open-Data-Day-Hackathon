<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assists/bootstrap/css/bootstrap.css"/>
  	<link rel="stylesheet" type="text/css" href="css/templatemo_style.css" />
	<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="assists/slick-slider/slick.css">
	<link rel="stylesheet" type="text/css" href="assists/slick-slider/slick-theme.css">


	<script type="text/javascript" src="assists/bootstrap/cjs/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

	<script type="text/javascript">
    	ddsmoothmenu.init({
    		mainmenuid: "templatemo_menu", //menu DIV id
    		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    		classname: 'ddsmoothmenu', //class added to menu's outer DIV
    		//customtheme: ["#1c5a80", "#18374a"],
    		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    	})
  	</script>
  	
    <script type="text/javascript">

		$("document").ready(function(){
			$(function() {
			$('.ddsmoothmenu a[href="' + location.pathname.split("/")[location.pathname.split("/").length-1] + '"]').parent().addClass('active');
			});
		});
    </script>
	<title>We Care</title>
</head>
<body id="home">
	<div id="templatemo_wrapper">
	    <div id="templatemo_top"> 
	        <div id="templatemo_login">
	          	<?php 
					if((!isset($_SESSION['user']) ) )
					    {  
						echo '	
						<form action="admin/process_login.php" method="post" name="login" id="login">
					    <input type="text" placeholder="Email ID" name="username" size="10" id="username" title="Username" class="txt_field" />
					    <input type="password" placeholder="Password" name="password" size="10" id="password" title="Password" class="txt_field" />
					    <input type="submit" name="search" value="" alt="Search" id="search" title="Search" class="sub_btn"  />
					    </form>
						';		
						}
					if(isset($_SESSION['user']))
					{
					/*$dbc = @mysqli_connect('localhost','root','root','domainpool');
					//if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }
					//$id=$_SESSION['user_id'];
					//$query = "select user_fname from user where user_id=$id ";     
					//$result = mysqli_query($dbc,$query);
					//if($result)
					//{    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
							  {		  $name=$row['user_fname'];
							  }
					}
					*/
					$name=$_SESSION['fullname'];
					echo '	<a href="#"><span style="color:white"> Welcome '.$name.'</a></span> 
							<a href="update_details.php" style="color:white"> Settings</a>
					        <a href="logout.php" style="color:white"><u>  Logout</u></a>	
						 ';		
					//mysql_close($dbc);
						}
				?>
	        </div> 
	    </div> <!-- end of top -->
	      
	    <div id="templatemo_header">
          	<div id="site_title">
            	<h1><a href="index.php" rel="nofollow">We Care</a></h1>
          	</div> 
	     	<div id="templatemo_menu" class="ddsmoothmenu">
	            <ul>
	                <li><a href="index.php">Home</a></li>
	                <li><a href="about_news.php">News</a></li>
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health Care <span class="caret"></span></a>
	                    <ul class="dropdown-menu" role="menu">
	                    	<li><a href="prenatalpage.php">Prenatal</a></li>
	                    	<li><a href="postnatalpage.php">Postnatal</a></li>
	                    </ul>
	                </li>
	                <li><a href="about-us.php">About Us</a></li>
	                <li><a href="register.php">Register</a></li>
	            </ul>
	            <br style="clear: left" />
	        </div> <!-- end of templatemo_menu -->

	    </div> <!-- end of header -->
	</div>