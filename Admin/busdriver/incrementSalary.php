<?php
$incrementSalary = "";
$btn_add ="";

$errincrementSalary = "";

if(isset($_POST["btn_add"])) {
			$btn_add = addslashes($_POST["btn_add"]);
		if(empty($_POST["incrementSalary"])) {
			$errincrementSalary = "Please Enter increment";
		} else{
		  $incrementSalary= addslashes($_POST["incrementSalary"]);
		}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Driver</title>
    <?php require('../inc/links.php');  ?>
		<style>
.error {color: #FF0000;}
</style>
</head>
<body id="page1">
	<!-- START PAGE SOURCE -->
	<div class="wrap">
		<!-- PAGE SOURCE -->
		<div class="container-fluid">
			<!-- Nav Start -->

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					
				<?php require('nav3.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="text-center">Salary Increment</h3>  
					</div>
					<div class=" panel-body">
						<div class="main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="row">
									<div class="col-lg-3 col-xs-6">
										<center><strong>Driver ID: </strong></center>
									</div>
									<div class="col-lg-3 col-xs-6">
										<label class="label label-primary" id="driverID" name="driverID" style="font-size: 14px;">50</label>
									</div>
									<div class="col-lg-3 col-xs-6">
										<center><strong>Bus Number:</strong></center>
									</div>
									<div class="col-lg-3 col-xs-6">
										<label class="label label-primary" name="busNumber" id="busNumber" style="font-size: 14px;">346</label>
									</div>    								
								</div>
								&nbsp;
								
								<div class="row">
									<div class="col-lg-3 col-xs-6">
										<center><strong>Driver Name: </strong></center>
									</div>
									<div class="col-lg-3 col-xs-6">
										<label class="label label-primary" name="driverName" id="driverName" style="font-size: 14px;">Rehman</label>
									</div>									
									
									<div class="col-lg-3 col-xs-6">
										<center><strong>Current Salary:</strong></center>
									</div>
									<div class="col-lg-3 col-xs-6">
										<label class="label label-primary" name="driverSalary" id="driverSalary" style="font-size: 14px;">60,000 Rs.</label>
									</div>    
								</div>   
								&nbsp;
								<hr>
								&nbsp;	
								<div class="row ">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<center><strong>Salary Increment</strong></center>
									</div>
									<div class="col-lg-6 col-md-3 col-sm-3 col-xs-12">
										<input type="number" class="form-control" name="incrementSalary" id="incrementSalary" required min="0" placeholder="Enter Increment in Salary"/>
										<span class="error"><?php echo $errincrementSalary ?></span>
									</div>
									<div class="col-lg-3"></div>
								</div> 
								&nbsp;
								<hr>
								<div class="row ">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Increment has been done Successfully!
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<button type="submit" class="btn btn-success" name="btn_add" id="btn_add">Add</button>
									</div>
									<div class="col-lg-3 "></div>
								</div>
								&nbsp;
							</form>

						</div> 
					</div>       
				</div>
			</div>
		</div> 
	</div>
	<!-- END PAGE SOURCE -->
</body>
</html>
