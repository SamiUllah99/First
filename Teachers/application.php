<?php
$title="";
$detail="";
$btnSend="";

$errtitle="";
$errdetail="";

if(isset($_POST["btnSend"])) {
			$btnSend = addslashes($_POST["btnSend"]);	
		if(empty($_POST["title"])) {
			$errtitle = "Please enter a Title";
		} else{
		  $title= addslashes($_POST["title"]);
		}
		if(empty($_POST["detail"])) {
			$errdetail = "Please enter Details";
		} else{
		  $detail= addslashes($_POST["detail"]);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications - Teacher Portal</title>
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
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Send Application
					</div>
					<div class="panel-body">
						
						
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home"> Admin </a></li>
							<li><a data-toggle="tab" href="#menu1"> BOG </a></li>
						</ul>
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<form method="POST" action="" >
									<br>
									&nbsp;
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<center>
												<label for="name" class="cols-sm-2"> Title</label>
											</center>
										</div>

										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
											<input type="text" class="form-control" name="title" id="title" required placeholder="Application Title"/>
											<span class="error" ><?php echo $errtitle ?></span>
										</div>    
									</div>
									&nbsp;
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<center><b> Description</b></center>
										</div>

										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
											<textarea id="detail" name="detail" class="form-control" placeholder="Description" rows="7" required></textarea>
											<span class="error" ><?php echo $errdetail ?></span>
										</div>
									</div>   

									&nbsp;
									<hr>
									<div class="row">
										<div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
											<div class="alert alert-success alert-dismissible" id="successAlert">
												<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
												Application has been created Successfully!
											</div>
										</div>
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<button type="submit" class="btn btn-success pull-right" name="btnSend" id="btnSend"> Send </button>
										</div>
									</div>
								</form>
							</div>
							
							
							<div id="menu1" class="tab-pane fade">
								
								<form method="POST" action="" >
									<br>
									&nbsp;
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<center>
												<label for="name" class="cols-sm-2"> Title</label>
											</center>
										</div>

										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
											<input type="text" class="form-control" name="title" id="title" required placeholder="Application Title"/>
											<span class="error" ><?php echo $errtitle ?></span>
										</div>    
									</div>
									&nbsp;
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<center><b> Description</b></center>
										</div>

										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
											<textarea id="detail" name="detail" class="form-control" placeholder="Description" rows="7" required></textarea>
											<span class="error" ><?php echo $errdetail ?></span>
										</div>
									</div>   

									&nbsp;
									<hr>
									<div class="row">
										<div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
											<div class="alert alert-success alert-dismissible" id="successAlert">
												<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
												Application has been created Successfully!
											</div>
										</div>
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<button type="submit" class="btn btn-success pull-right" name="btnSend" id="btnSend"> Send </button>
										</div>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>      <!-- Panel End -->
				
				
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
