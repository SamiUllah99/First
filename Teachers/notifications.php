<?php
$txtMessage="";
$btnSend="";

$errtxtMessage="";

if(isset($_POST["btnSend"])) {
			$btnSend = addslashes($_POST["btnSend"]);	
		if(empty($_POST["txtMessage"])) {
			$errtxtMessage = "Message must not be empty";
		} else{
		  $txtMessage= addslashes($_POST["txtMessage"]);
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
					<form method="POST" action="" >
							<h2> Notifications</h2>
						<br>
						<div class="line"></div>
						<br>
						<div class="row allquestions">
							<h4 class="sender">Admin</h4>
							<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum .... </p><br>
							
							<div class="col-lg-9">
								
							</div>
							<div class="col-lg-3">
								<span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> Posted: 4 min ago</span>
							</div>
							&nbsp;
							<div id="comment">
								<hr>
								<div class="col-lg-10">
									
									<input type="text" class="form-control up" name="txtMessage" id="txtMessage" placeholder="Write a message"/>
									<span class="error" ><?php echo $errtxtMessage ?></span>
								</div>
								<div class="col-lg-2">
									<button class="btn btn-default up" name="btnSend" id="btnSend">Send</button>
								</div>
								
							</div>
							&nbsp;
							<br>
							<hr>
						</form>
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
