<?php
$name ="";
$email="";
$oldPass="";
$newPass="";
$confirmPass="";
$phone="";
$update="";

$errname ="";
$erremail="";
$erroldPass="";
$errnewPass="";
$errconfirmPass="";
$errphone="";

if(isset($_POST["update"])) {
			$update = addslashes($_POST["update"]);	
		if(empty($_POST["name"])) {
			$errname = "Please enter a Name";
		} else{
		  $name = addslashes($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $errname = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["email"])) {
			$erremail = "Please enter an Email";
		} else{
		  $email = addslashes($_POST["email"]);
		  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $erremail = "Invalid email format"; 
		}
		}
		if(empty($_POST["oldPass"])) {
			$erroldPass = "Please enter a password";
		} else{
		  $oldPass= addslashes($_POST["oldPass"]);
		}
		if(empty($_POST["newPass"])) {
			$errnewPass = "Please enter the new password";
		} else{
		  $newPass= addslashes($_POST["newPass"]);
		}
		if(empty($_POST["confirmPass"])) {
			$errconfirmPass = "Please enter a password";
		} else{
		  $confirmPass = addslashes($_POST["confirmPass"]);
		}
		if ($_POST["newPass"] != $_POST["confirmPass"]) {
		$errconfirmPass = "Passwords don't match";
		}
		if(empty($_POST["phone"])) {
			$errphone = "Please enter a phone Number";
		} else{
		  $phone= addslashes($_POST["phone"]);
			if(!preg_match("/^[0-9 ]*$/",$phone))
			{
				$errphone = "Please Enter a Valid Phone Number";
			}
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings - BOG Portal</title>
	<?php require('inc/links.php');   ?>
			<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<div class="headers">
		<?php require ('inc/header.php'); ?>
	</div>
	<div class="container">
		<div class="row">
				<!-- Navbar Start-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">	

			</div>
				<!-- Navbar End-->
			
			<!-- Main Contents -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<br>
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Settings
					</div>
					<div class="panel-body">
						<br>
						<form method="POST" action="" >       
								
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
									<label for="name" class="cols-sm-2">Name</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="name" id="name"  placeholder="Zain Ali" value="<?php echo $name ?>"/>
										<span class="error" ><?php echo $errname?></span>
									</div>
								</div>        
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="alert alert-danger">
										<strong>Danger!</strong> Indicates a dangerous action.
									</div>
								</div>
							</div>
							
							<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
										<label for="name" class="cols-sm-2 ">Email</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
											<input type="email" class="form-control" name="email" id="email"  placeholder="Enter your email" value="<?php echo $email ?>"/>
											<span class="error" ><?php echo $erremail ?></span>
										</div>
									</div>        
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="alert alert-danger">
											<strong>Danger!</strong> Indicates a dangerous action.
										</div>
									</div>
								</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
									<label for="name" class="cols-sm-2 ">Old Password</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="oldPass" id="oldPass"  placeholder="Enter Current Password"/>
										<span class="error" ><?php echo $erroldPass ?></span>
									</div>
								</div>        
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="alert alert-danger">
										<strong>Danger!</strong> Indicates a dangerous action.
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
									<label for="name" class="cols-sm-2">New Password</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="newPass" id="newPass"  placeholder="Enter New Password"/>
										<span class="error" ><?php echo $errnewPass ?></span>
									</div>
								</div>        
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="alert alert-danger">
										<strong>Danger!</strong> Indicates a dangerous action.
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
									<label for="name" class="cols-sm-2">Confirm Password</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="confirmPass" id="confirmPass" placeholder="Enter Confirm Password"/>
										<span class="error" ><?php echo $errconfirmPass?></span>
									</div>
								</div>        
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="alert alert-danger">
										<strong>Danger!</strong> Indicates a dangerous action.
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
									<label for="name" class="cols-sm-2">Phone</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
										<input type="number" class="form-control" min="0" name="phone" id="phone" placeholder="Enter Phone Number" value="<?php echo $phone?>"/>
										<span class="error" ><?php echo $errphone?></span>
									</div>
								</div>        
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="alert alert-danger">
										<strong>Danger!</strong> Indicates a dangerous action.
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group ">
									&nbsp;
									<button type="submit" id="update" name="update" class="btn btn-primary pull-right">Update</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="alert alert-success">
										<strong>Danger!</strong> Indicates a dangerous action.
									</div>
								</div>
							</div>
						
						</form>
					</div>
				</div>      <!-- Panel End -->
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
