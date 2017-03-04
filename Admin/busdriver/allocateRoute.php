<?php
require('C:/wamp/www/SIS/Classes/class.BusRoute.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_BusRoute = new BusRoute(); 
$busRoute = "";
$btn_allocate ="";

$errbusRoute = "";

if(isset($_POST["btn_allocate"])) {
			$btn_salaryInc = addslashes($_POST["btn_allocate"]);
		if(empty($_POST["busRoute"])) {
			$errbusRoute = "Please Enter Route";
		} else{
		  $busRoute= addslashes($_POST["busRoute"]);
		}
	
	if($obj_BusRoute->RegisterRoute()){
            $msg="Route Registration Complete";
            }
            else{
                $msg = "Route Registration failed";
            }
            echo $msg;
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
						<h3 class="text-center">Routes Allocation</h3>  
					</div>
					<div class=" panel-body">
						<div class="main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="row">
									<div class="col-lg-3 col-xs-6 ">
										<center><strong>Driver ID: </strong></center>
									</div>
									<div class="col-lg-3 col-xs-6">
										<label class="label label-primary" name="driverID" id="driverID" style="font-size: 14px;">50</label>
									</div>
									<div class="col-lg-3 col-xs-6 ">
										<center><strong>Bus Number:</strong></center>
									</div>
									<div class="col-lg-3 col-xs-6">
										<label class="label label-primary" name="driverSalary" id="driverSalary" style="font-size: 14px;">345</label>
									</div>    						
								</div>
								&nbsp;
								
								<div class="row">
									<div class="col-lg-3 col-xs-6 ">
										<center><strong>Driver Name: </strong></center>
									</div>
									<div class="col-lg-3 col-xs-6">
										<label class="label label-primary" name="driverName" id="driverName" style="font-size: 14px;">Rehman</label>
									</div>	
									<div class="col-lg-3 col-xs-6 ">
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
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<center><strong>Allocate Route</strong></center>
									</div>
									<div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
										<input type="text" class="form-control" name="busRoute" id="busRoute" required placeholder="Enter Bus Route"/>
										<span class="error"><?php echo $errbusRoute ?></span>
									</div>
									<div class="col-lg-3"></div>
								</div> 
								&nbsp;
								<hr>
								<div class="row ">
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Routes have been allocated Successfully!
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<button type="submit" class="btn btn-success" name="btn_allocate" id="btn_allocate">Allocate</button>
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
