<?php
require('C:/wamp/www/SIS/Classes/class.Driver.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');


$obj_Driver = new Driver(); 
$driver_id ="";
$driver_fname ="";
$driver_lname ="";
$driverContact ="";
$driverAddress ="";
$busNumber ="";
$driverSalary ="";
$btn_driverAdd ="";

$errdriver_id ="";
$errdriver_fname ="";
$errdriver_lname ="";
$errdriverContact ="";
$errdriverAddress ="";
$errbusNumber ="";
$errdriverSalary ="";

if(isset($_POST["btn_driverAdd"])) {
			$btn_driverAdd = addslashes($_POST["btn_driverAdd"]);
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
		if(empty($_POST["driver_id"])) {
			$errdriver_id= "Enter a Valid Driver's ID";
		} else{
			$driver_id = addslashes($_POST["driver_id"]);  
		}
		if(empty($_POST["driver_fname"])) {
			$errdriver_fname= "Enter a First Name";
		} else{
		  $driver_fname = addslashes($_POST["driver_fname"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$driver_fname)) {
		  $errdriver_fname = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["driver_lname"])) {
			$errdriver_lname= "Enter a Last Name";
		} else{
		  $driver_lname = addslashes($_POST["driver_lname"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$driver_lname)) {
		  $errdriver_lname = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["busNumber"])) {
			$errbusNumber= "Enter a Bus Number";
		} else{
		  $busNumber = addslashes($_POST["busNumber"]);
		}
		$obj_Driver->CNIC =$driver_id;
		$obj_Driver->Name =$driver_fname;
		$obj_Driver->ContactNo =$driverContact;
		$obj_Driver->Address =$driverAddress;
		$obj_Driver->Salary =$driverSalary;
		    if($obj_Driver->RegisterDriver()){
            	$msg="Registration Complete";
            }
            else{
                $msg = "Registration Failed";
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
	<script src="../js/registerDriver.js"></script>
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
						<h3 class="text-center">Driver Registration</h3>  
					</div>
					<div class="row panel-body">
						<div class=" main-reg">
							<form class="form-horizontal" action="" method="post" onSubmit="return validations()">
								<div class="row">
									<div class="col-lg-6 form-group">
										<label class="cols-sm-2">Driver ID</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="driver_id" id="driver_id" min="0" required placeholder="Enter Driver ID" value="<?php echo $driver_id ?>" />
											<span class="error"><?php echo $errdriver_id ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="id_error">
                                    </div>
								</div>        
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">First Name</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="driver_fname" id="driver_fname" placeholder="Enter First Name" value="<?php echo $driver_fname ?>" />
											<span class="error"><?php echo $errdriver_fname ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="fname_error">
                                    </div>
								</div>

								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2 ">Last Name</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="driver_lname" id="driver_lname" placeholder="Enter Last Name" value="<?php echo $driver_lname ?>" />
											<span class="error"><?php echo $errdriver_lname ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="lname_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Contact No.</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="driverContact" id="driverContact" required min="0" placeholder="Enter phone number" value="<?php echo $driverContact ?>" />
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
											<input type="text" class="form-control" name="driverAddress" id="driverAddress" placeholder="Enter your address" value="<?php echo $driverAddress ?>" />
											<span class="error"><?php echo $errdriverAddress?></span>
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
											<input type="number" class="form-control" name="busNumber" id="busNumber" required min="0" placeholder="Enter Bus Number" value="<?php echo $busNumber ?>" />
											<span class="error"><?php echo $errbusNumber ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="vehicle_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Salary</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="driverSalary" id="driverSalary" required min="0" placeholder="Enter Salary" value="<?php echo $driverSalary ?>" />
											<span class="error"><?php echo $errdriverSalary ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="salary_error">
                                    </div>
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-6 form-group ">
										<button type="submit" id="btn_driverAdd" name="btn_driverAdd" class="btn btn-primary btn-lg btn-block">Register</button>
										
									</div>
									<div class="col-lg-6" id="registerDone">
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
