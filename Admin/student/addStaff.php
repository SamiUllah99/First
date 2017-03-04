<?php
require('C:/wamp/www/SIS/Classes/class.Staff.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Staff = new Staff(); 
$staffId ="";
$name ="";
$contact="";
$designation="";
$salary="";
$staffAdd="";

$errstaffId ="";
$errname ="";
$errcontact="";
$errdesignation="";
$errsalary="";

if(isset($_POST["staffAdd"])) {
			$staffUpdate= addslashes($_POST["staffAdd"]);	
		if(empty($_POST["name"])) {
			$errname= "Please enter a Name";
		} else{
		  $name= addslashes($_POST["name"]);
		  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $errname = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["staffId"])) {
			$errstaffId = "Please enter an ID";
		} else{
		  $staffId= addslashes($_POST["staffId"]);
		}
		if(empty($_POST["contact"])) {
			$errcontact = "Please enter Contact Information";
		} else{
		  $contact= addslashes($_POST["contact"]);
		}
		if(empty($_POST["designation"])) {
			$errdesignation = "Please enter Designation";
		} else{
		  $designation= addslashes($_POST["designation"]);
		}
		if(empty($_POST["salary"])) {
			$errsalary = "Please enter Salary";
		} else{
		  $salary= addslashes($_POST["salary"]);
		}
		$obj_Staff->StaffNumber =$staffId;
		$obj_Staff->CNIC =$staffId;
		$obj_Staff->Name =$name;
		$obj_Staff->Contact =$contact;
		$obj_Staff->Salary =$salary;
		$obj_Staff->Post=$designation;
		    if($obj_Staff->RegisterStaff()){
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
	<script src="../js/registerDriver.js"></script>
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
					
				<?php require('../inc/nav.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="text-center">Staff Registration</h3>  
					</div>
					<div class="row panel-body">
						<div class=" main-reg">
							<form class="form-horizontal" action="" method="post" onSubmit="">
								<div class="row">
									<div class="col-lg-6 form-group">
										<label class="cols-sm-2">Staff ID</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="staffId" id="staffId" min="0" required placeholder="Enter Staff ID" value="<?php echo $staffId ?>"/>
											<span class="error" ><?php echo $errstaffId ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="id_error">
                                    </div>
								</div>        
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2"> Name</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name"  value="<?php echo $name ?>"/>
											<span class="error" ><?php echo $errname ?></span>
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
											<input type="number" class="form-control" name="contact" id="contact" required min="0" placeholder="Enter phone number" value="<?php echo $contact ?>"/>
											<span class="error" ><?php echo $errcontact ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="contact_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Designation</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-address-book" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation"  value="<?php echo $designation ?>"/>
											<span class="error" ><?php echo $errdesignation ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="designation_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Salary</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="salary" id="salary" required min="0" placeholder="Enter Salary"  value="<?php echo $salary ?>"/>
											<span class="error" ><?php echo $errsalary ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="salary_error">
                                    </div>
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-6 form-group ">
										<button type="submit" id="staffAdd" name="staffAdd" class="btn btn-primary btn-lg btn-block">Register</button>
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
