<?php
require('C:/wamp/www/SIS/Classes/class.BusRoute.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_BusRoute = new BusRoute(); 
$driverID ="";
$driverName ="";
$txt_driver ="";
$btnSearch ="";
$btnSubmit ="";

$errdriverID ="";
$errdriverName ="";
$errtxt_driver ="";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);
		if(empty($_POST["driverID"])) {
			$errdriverID = "Please select a Driver ID";
		} else{
		  $driverID = addslashes($_POST["driverID"]);
		}
		if(empty($_POST["driverName"])) {
			$errdriverName = "Please select a Name";
		} else{
		  $driverName = addslashes($_POST["driverName"]);
		}
		if(empty($_POST["txt_driver"])) {
			$errtxt_driver = "Please Enter a Name";
		} else{
		  $txt_driver = addslashes($_POST["txt_driver"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$txt_driver)) {
		  $errtxt_driver = "Only letters and white space allowed"; 
			}
		}
			if($obj_BusRoute->GetBusRouteDetails()){
            $msg="Route Displayed";
            }
            else{
                $msg = "Route Display failed";
            }
            echo $msg;
    }
if(isset($_POST["btnSearch"])) {
			$btnSearch = addslashes($_POST["btnSearch"]);
		if(empty($_POST["driverID"])) {
			$errdriverID = "Please select a Driver ID";
		} else{
		  $driverID = addslashes($_POST["driverID"]);
		}
		if(empty($_POST["driverName"])) {
			$errdriverName = "Please select a Name";
		} else{
		  $driverName = addslashes($_POST["driverName"]);
		  	 // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$txt_driver)) {
		  $errdriverName = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["txt_driver"])) {
			$errtxt_driver = "Please Enter a Name";
		} else{
		  $txt_driver = addslashes($_POST["txt_driver"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$txt_driver)) {
		  $errtxt_driver = "Only letters and white space allowed"; 
			}
		}
			if($obj_BusRoute->GetBusRouteDetails()){
            $msg="Route Displayed";
            }
            else{
                $msg = "Route Display failed";
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
						<h3 class="text-center">Bus Routes</h3>  
					</div>
					<div class=" panel-body">
						<div class="row main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="driverID" id="driverID" class="form-control" required ><span class="error"><?php echo $errdriverID ?></span>
										<option value="" selected disabled>Select Driver ID</option>
										<option value="">51</option>
										<option value="">52</option>
										<option value="">53</option>
									</select>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="driverName" id="driverName" class="form-control" required ><span class="error"><?php echo $errdriverName ?></span>
										<option value="" selected disabled>Select Driver Name</option>
										<option value="">Ali</option>
										<option value="">Rehman</option>
										<option value="">Babar</option>
									</select>
								</div>
								
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<button type="Submit" class="btn btn-success" name="btnSubmit" id="btnSubmit">Submit</button>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="input-group">
										<input type="text" class="form-control" name="txt_driver" id="txt_driver" required placeholder="Search Driver Here" />
										<span class="error"><?php echo $errtxt_driver ?></span>
										<span class="input-group-btn bn">
											<button class="btn btn-success" type="submit" name="btnSearch" id="btnSearch">
												<i class="fa fa-search" aria-hidden="true"></i>
											</button>
										</span>
									</div>
								</div>
								&nbsp;
								
								<hr>
								&nbsp;
							</form>

							<table class="col-md-12 col-sm-12 col-xs-12 table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Driver ID</th>
										<th>Driver Name</th>
										<th>Bus Number</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>103</td>
										<td>
											<a href="allocateRoute.php" id="btn_Route" class="btn btn-primary btn-xs" role="button">Allocate Route</a>
										</td>
										
									</tr>
									 <tr>
										<td>2</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>170</td>
										<td>
											<a href="allocateRoute.php" id="btn_Route" class="btn btn-primary btn-xs" role="button">Allocate Route</a>
										</td>
									</tr>
									 <tr>
										<td>3</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>200</td>
										<td>
											<a href="allocateRoute.php" id="btn_Route" class="btn btn-primary btn-xs" role="button">Allocate Route</a>
										</td>
									</tr>
									 <tr>
										<td>4</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>180</td>
										<td>
											<a href="allocateRoute.php" id="btn_Route" class="btn btn-primary btn-xs" role="button">Allocate Route</a>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>150</td>
										<td>
											<a href="allocateRoute.php" id="btn_Route" class="btn btn-primary btn-xs" role="button">Allocate Route</a>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>160</td>
										<td>
											<a href="allocateRoute.php" id="btn_Route" class="btn btn-primary btn-xs" role="button">Allocate Route</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div> 
					</div>       
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE SOURCE -->
</body>
</html>
