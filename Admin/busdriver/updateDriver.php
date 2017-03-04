<?php
require('C:/wamp/www/SIS/Classes/class.Driver.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Driver = new Driver(); 
$driverID = "";
$driverName = "";
$driverContact = "";
$driverAddress = "";
$busNumber = "";
$updateRoutes = "";
$driverSalary = "";
$driverUpdate = "";

$errdriverID = "";
$errdriverName = "";
$errdriverContact = "";
$errdriverAddress = "";
$errbusNumber = "";
$errupdateRoutes = "";
$errdriverSalary = "";

if(isset($_POST["driverUpdate"])) {
			$driverUpdate = addslashes($_POST["driverUpdate"]);
		if(empty($_POST["driverSalary"])) {
			$errdriverSalary= "Enter Salary";
		} else{
		  $driverSalary = addslashes($_POST["driverSalary"]);
		}
		if(empty($_POST["driverContact"])) {
			$errdriverContact= "Enter Contact information";
		} else{
		  $driverContact = addslashes($_POST["driverContact"]);
		}
		if(empty($_POST["driverAddress"])) {
			$errdriverAddress= "Enter an Address";
		} else{
		  $driverAddress = addslashes($_POST["driverAddress"]);
		}
		if(empty($_POST["driverID"])) {
			$errdriverID= "Enter a Valid Driver's ID";
		} else{
			$driverID = addslashes($_POST["driverID"]);  
		}
		if(empty($_POST["driverName"])) {
			$errdriverName= "Enter a First Name";
		} else{
		  $driverName = addslashes($_POST["driverName"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$driverName)) {
		  $errdriverName = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["busNumber"])) {
			$errbusNumber= "Enter a Bus Number";
		} else{
		  $busNumber = addslashes($_POST["busNumber"]);
		}
		if(empty($_POST["updateRoutes"])) {
			$errupdateRoutes= "Enter a Bus Route";
		} else{
		  $updateRoutes = addslashes($_POST["updateRoutes"]);
		}
			$obj_Driver->driverID=$driverID;
			$obj_Driver->Name=$driverName;
			$obj_Driver->CNIC=$driverID;
			$obj_Driver->ContactNo=$driverContact;
			$obj_Driver->Address=$driverAddress;
			$obj_Driver->Salary=$driverSalary;

			if($obj_Driver->UpdateDriver($driverID)){
            	$msg="Update Complete";
            }
            else{
                $msg = "Update Failed";
            }
            echo $msg;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Driver</title>
    <?php require('../inc/links.php');  ?>
	<script src="../js/updateDriver.js"></script>
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
						<h3 class="text-center">Update Driver</h3>  
					</div>
					<div class="row panel-body">
						<div class=" main-reg">
							<form class="form-horizontal" action="" method="post">
								<div class="row">
									<div class="col-lg-6 form-group">
										<label class="cols-sm-2">Driver ID</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="driverID" id="driverID" required min="0" placeholder="Enter Driver ID" value="<?php echo $driverID ?>" />
											<span class="error"><?php echo $errdriverID ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="id_error">
                                    </div>
								</div>        
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Name</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="driverName" id="driverName"  required   placeholder="Enter Driver Name" value="<?php echo $driverName ?>" />
											<span class="error"><?php echo $errdriverName ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="name_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Contact No.</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="driverContact" id="driverContact"  required  min="0" placeholder="Enter phone number" value="<?php echo $driverContact ?>" />
											<span class="error"><?php echo $errdriverContact ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="contact_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Address</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-address-book" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="driverAddress" id="driverAddress"  required  placeholder="Enter your address" value="<?php echo $driverAddress ?>" />
											<span class="error"><?php echo $errdriverAddress ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="address_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Vehical No.</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="busNumber" id="busNumber"   required  min="0" placeholder="Enter Bus Number" value="<?php echo $busNumber ?>" />
											<span class="error"><?php echo $errbusNumber ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="vehicle_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Allocate Route</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="updateRoutes" id="updateRoutes"  required  placeholder="Enter routes for bus" value="<?php echo $updateRoutes ?>" />
											<span class="error"><?php echo $errupdateRoutes ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="route_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Salary</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="driverSalary" id="driverSalary"  required  min="0" placeholder="Enter Salary" value="<?php echo $driverSalary ?>" />
											<span class="error"><?php echo $errdriverSalary ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="salary_error">
                                    </div>
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-6 form-group ">
										<button type="submit" id="btn_driverUpdate" name="driverUpdate" class="btn btn-primary btn-lg btn-block">Update</button>
									</div>
									<div class="col-lg-6" id="updateDone">
                                    </div>
								</div>        

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
