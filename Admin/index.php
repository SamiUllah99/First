<?php

require('C:Wamp/www/LSIS/Classes/class.Database.php');
require('C:Wamp/www/LSIS/Classes/class.Admin.php');


$obj_Admin = new Admin();

$username ="";
$password ="";
$btn_login ="";
$post=false;
$msg=false;
$errusername ="";
$errpassword ="";

if(isset($_POST["btn_login"])) {
			$btn_login= addslashes($_POST["btn_login"]);	
		if(empty($_POST["username"])) {
			$errusername = "Please enter a Username";
			
		} else{
		  $username= addslashes($_POST["username"]);
		}
		if(empty($_POST["password"])) {
			$errpassword = "Please enter Password";
		} else{
		  $password= addslashes($_POST["password"]);
		} 
			$obj_Admin->email = $username;
			$obj_Admin->Password =$password;
			
		    if($data=$obj_Admin->loginAdmin($username,$password)){
			
			$msg="Login Successful";
			header('Location:student/Dashboard.php');
			
			}else{
				$msg = "Registration failed";
			}
			echo $msg;
	}	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Admin</title>
    <?php require('inc/links.php');  ?>
	<style>
.error {color: #FF0000;}
</style>
	
	<script src="js/login.js"></script>
</head>
<body id="log">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<br><br>
				<div class="account-wall">
					<h1 class="text-center login-title">Sign in</h1>
					<img class="profile-img" src="images/login.png" alt="Login">
					
					<form class="form-signin" action="" method="post" onSubmit="return validate_post()">
						<input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus >
						<span class="error" ><?php echo $errusername ?></span>
						<div id="name_error"></div>
						&nbsp
						<input type="password" id="password" name="password" class="form-control" placeholder="Password">
						<span class="error" ><?php echo $errpassword ?></span>
						
						&nbsp
						
						<button type="submit" class="btn btn-lg btn-primary btn-block" id="btn_login" name="btn_login" >Login</button>
					
					</form>
				</div>
			</div>
			
			
		</div>
	</div>
</body>
</html>