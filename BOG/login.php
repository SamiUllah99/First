<?php

$username="";
$pass="";
$btn_login="";

$errusername="";
$errpass="";

if(isset($_POST["btn_login"])) {
			$btn_login= addslashes($_POST["btn_login"]);	
		if(empty($_POST["username"])) {
			$errusername = "Please enter a Username";
		} else{
		  $username= addslashes($_POST["username"]);
		}
		if(empty($_POST["pass"])) {
			$errpass = "Please enter Password";
		} else{
		  $pass= addslashes($_POST["pass"]);
		}
			
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - BOG</title>
    <?php require('inc/links.php');  ?>
	<style>
.error {color: #FF0000;}
</style>
</head>
<body id="loginPage">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<br>
				<div class="accountBox">
					<h1 class="text-center login-title">Sign in</h1>
					<img class="profile-img" src="images/user1.jpg" alt="Login">
					<form class="form-signin">
						<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
						<span class="error" ><?php echo $errusername ?></span>
						&nbsp
						<input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
						<span class="error" ><?php echo $errpass ?></span>
						&nbsp
						<button type="submit" class="btn btn-lg btn-primary btn-block" id="btn_login" name="btn_login" >
							Login</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>
