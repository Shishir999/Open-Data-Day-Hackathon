<?php include 'header.php' ?>

<section id="category">
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2><strong>Register</strong></h2>
				</div>
				<div class="panel-body">
				<?php if(isset($_SESSION['regError']))
			{
				if (($_SESSION['regError'])!=null)
				 {
				 	$_SESSION['regInfo']=""; ?>
					<div class="alert alert-danger alert-dismissible fade in" role="alert">
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					  		<div align="center"><?=$_SESSION['regError'];?></div>
					</div>
				 <?php }
				 	$_SESSION['regError']="";
			}
			if(isset($_SESSION['regInfo']))
			{
				if (($_SESSION['regInfo'])!=null)
				 {
				 	$_SESSION['regError']=""; ?>
					<div class="alert alert-success alert-dismissible fade in" role="alert">
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					  		<div align="center"><?=$_SESSION['regInfo'];?></div>
					</div>
				 <?php }
				 	$_SESSION['regInfo']="";
			}?>
					<div class="info">
						<h4>Enter your Details</h4>
						<span style="font-size:16px;color:red;">* All fields are mandatory</span> 
						<br/><br/>
					</div>
						
					
					<form method="post" name="register" id="register" action="process_register.php" onsubmit="return validateForm();" enctype="multipart/form-data" class=" col-md-6 col-md-offset-3">
						<div class="form-group">
							<label for="name">Mother Name: <span style="color:red;"><sup>*</sup></span></label> 
							<input type="text" id="mName" name="mName" class="required form-control" required placeholder="Mothers name" autofocus />
						</div>
						<div class="form-group">
							<label>Date Of Birth: <span style="color:red;"><sup>*</sup></span></label>
							<input type="date" name="mdob" class="required form-control" required />
						</div>
						<div class="form-group">
							<label>Address: <span style="color:red;"><sup>*</sup></span></label>
							<input type="text" name="address" class="required form-control" placeholder="your home town" required />
						</div>
						<div class="form-group">
							<label>Phone Number: <span style="color:red;"><sup>*</sup></span></label>
							<input type="tel" name="mobilenumber" class="required form-control" placeholder="9849XXXXXX" required />
						</div>
						<div class="form-group">
							<label>Email:<span style="color:red;"><sup>*</sup></span></label>
							<input type="email" name="email" class="required form-control" placeholder="abc@example.com" required />
						</div>
						<div class="form-group">
							<label>Delivery Date: <span style="color:red;"><sup>*</sup></span></label>
							<input type="date" name="deliveryDate" class="required form-control" required />
						</div>
						<div class="form-group">
							<label>Used Vaccines: <span style="color:red;"><sup>*</sup></span></label>
							<textarea class="required form-control" name="vaccine" placeholder="Vaccination until now" rows="3" required></textarea>
						</div>
						<div class="form-group">
							<label>District:</label>
							<select id="district" name="district" class="validate-subject required form-control" required>
								<option value="" selected="selected">--Select--</option>
								<option value="Baitadi">Baitadi</option>
								<option value="Biratnagar">Biratnagar</option>
								<option value="Dadeldhura">Dadeldhura</option>
								<option value="Gorkha">Gorkha</option>
								<option value="Ilam">Ilam</option>
								<option value="Kanchanpur ">Kanchanpur </option>
								<option value="Kathmandu">Kathmandu</option>
								<option value="Lalitpur">Lalitpur</option>
								<option value="Manang">Manang </option>
								<option value="Nepaljung">Nepaljung</option>
								<option value="Parsa">Parsa</option>
								<option value="Pokhara">Pokhara</option>
								<option value="Ramechap">Ramechap</option>
								<option value="Saptari">Saptari</option>
								<option value="Syanja">Syanja</option>
							</select>
						</div>
						<div class="form-group">
							<label>Delivered Place:</label>
							<input type="text" name="deliveryPlace" class="required form-control" required placeholder="Kathmandu,Lalitpur..." />
						</div>
						<div class="form-group">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn btn-primary submit_btn float_l" />

							<input type="reset" value="Reset" id="reset" name="reset" class="btn btn-info btn-reset submit_btn float_l" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>




<?php include 'footer.php' ?>
