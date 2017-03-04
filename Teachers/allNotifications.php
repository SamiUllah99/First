<?php
$txtSearch="";
$btnSearch="";

$errtxtSearch="";

if(isset($_POST["btnSearch"])) {
			$btnSearch = addslashes($_POST["btnSearch"]);	
		if(empty($_POST["txtSearch"])) {
			$errtxtSearch = "Please Enter Notification Title";
		} else{
		  $txtSearch= addslashes($_POST["txtSearch"]);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications - BOG Portal</title>
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
				<br><br>
				<h2 class="text-center"> All Notifications</h2>
				<br>
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<form action="" class="search-form">
							<div class="input-group">
								<input type="text" class="form-control txtSearch" placeholder="Search" name="txtSearch" id="txtSearch" required>
								<span class="error" ><?php echo $errtxtSearch ?></span>
								<div class="input-group-btn">
									<button class="btn btn-default btnSearch" type="submit" name="btnSearch" id="btnSearch"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>
					
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					</div>
					
				</div>
				<br>
				<br>
				<div class="line"></div>
				<br>
				<div class="row allquestions">
					<h4 class="sender">Admin</h4>
					<h5>What is the whole progress of system? </h5>
					<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.... </p><br>
					
					<div class="col-lg-9">
						<a href="notifications.php"> Open Threads </a>
						
					</div>
					<div class="col-lg-3">
						<span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Posted: 4 min ago</span>
					</div>
					
				</div>
				
				<hr>
				<div class="row allquestions">
					<h4 class="sender">Admin</h4>
					<h5>What is the whole progress of system? </h5>
					<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum .... </p><br>
					
					<div class="col-lg-9">
						<a href="notifications.php"> Open Threads </a>
					</div>
					<div class="col-lg-3">
						<span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Posted: 7 min ago</span>
					</div>
					
				</div>
				
				<hr>
				<div class="row allquestions">
					<h4 class="sender">Admin</h4>
					<h5>What is the whole progress of system? </h5>
					<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum .... </p><br>
					
					<div class="col-lg-9">
						<a href="notifications.php"> Open Threads </a>
					</div>
					<div class="col-lg-3">
						<span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Posted: 17 min ago</span>
					</div>
					
				</div>
				
				<hr>
				<div class="row allquestions">
					<h4 class="sender">Admin</h4>
					<h5>What is the whole progress of system? </h5>
					<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum .... </p><br>
					
					<div class="col-lg-9">
						<a href="notifications.php"> Open Threads </a>
					</div>
					<div class="col-lg-3">
						<span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Posted: 20 min ago</span>
					</div>
					
				</div>
				
				<hr>	
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
