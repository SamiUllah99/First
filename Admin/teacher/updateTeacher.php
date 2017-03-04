<?php
require('C:/wamp/www/SIS/Classes/class.Teacher.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Teacher = new Teacher(); 

$btn_tchUpdate= "";
$tchDesigation= "";
$tchEducation= "";
$tchSalary= "";
$tchContact= "";
$tch_pass1= "";
$tch_pass2= "";
$tchName= "";
$teachID= "";


$errtchDesignation= "";
$errtchEducation= "";
$errtchSalary= "";
$errtchContact= "";
$errtch_pass1= "";
$errtch_pass2= "";
$errtchName= "";
$errteachID= "";

if(isset($_POST["btn_tchUpdate"])) {
			$btn_tchUpdate = addslashes($_POST["btn_tchUpdate"]);
		if(empty($_POST["tchDesigation"])) {
			$errtchDesignation = "Please Enter a Designation";
			
		} else{
		  $tchDesigation= addslashes($_POST["tchDesigation"]);
		  		  // check if designation only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$tchDesigation)) {
		  $errtchDesignation = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["tchEducation"])) {
			$errtchEducation = "Enter Education";
		} else{
		  $tchEducation= addslashes($_POST["tchEducation"]);
		}
		if(empty($_POST["tchSalary"])) {
			$errtchSalary= "Enter Salary";
		} else{
		  $tchSalary = addslashes($_POST["tchSalary"]);
		}

		if(empty($_POST["tchContact"])) {
			$errtchContact= "Enter Contact information";
		} else{
		  $tchContact = addslashes($_POST["tchContact"]);
		}
		
		if(empty($_POST["teachID"])) {
			$errteachID= "Enter a Valid Teacher's ID";
		} else{
			$teachID = addslashes($_POST["teachID"]);  
		}
		if(empty($_POST["tchName"])) {
			$errtchName= "Enter a Name";
		} else{
		  $tchName = addslashes($_POST["tchName"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$tchName)) {
		  $errtchName = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["tch_pass1"])) {
			$errtch_pass1 = "Enter a Password";
		} else{
		  $tch_pass1= addslashes($_POST["tch_pass1"]);
		}
		if(empty($_POST["tch_pass2"])) {
			$errtch_pass2= "Enter a password";
		} else{
		  $tch_pass2 = addslashes($_POST["tch_pass2"]);
		}
		if ($_POST["tch_pass1"] != $_POST["tch_pass2"]) {
		$errtch_pass2 = "Passwords don't match";
		}
		    $obj_Teacher->TeacherID=$teachID;
		    $obj_Teacher->CNIC=$teachID;
		    $obj_Teacher->Name =$tchName;
            $obj_Teacher->Email =$tchEmail;
            $obj_Teacher->Password=$tch_pass1;
            $obj_Teacher->Address =$address;
            $obj_Teacher->Contact =$tchContact;
            $obj_Teacher->Salary =$tchSalary;
            $obj_Teacher->Education =$tchEducation;
            $obj_Teacher->Designation =$tchDesigation;

	if($obj_Teacher->UpdateTeacher($teachID)){
            $msg="Update Complete";
            }
            else{
                $msg = "Update failed";
            }
            echo $msg;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Teacher</title>
    <?php require('../inc/links.php');  ?>
	<script src="../js/updateTeacher.js"></script>
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
					
				<?php require('nav2.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="text-center">Update Teacher</h3>  
					</div>
					<div class="row panel-body">
						<div class="main-reg">
							<form class="form-horizontal" action="" method="post" onSubmit="return validate_post()" autocomplete="on">
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Teacher ID</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="teachID" id="teachID" min="0" required placeholder="Enter ID" value="<?php echo $teachID ?>" /><span class="error"><?php echo $errteachID ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="id_error">
                                    </div>
								</div>     
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2 ">Name</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="tchName" id="tchName" placeholder="Enter Teacher Name" value="<?php echo $tchName ?>" /><span class="error"><?php echo $errtchName?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="name_error">
                                    </div>
								</div>

								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">New Password</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
											<input type="password" class="form-control" name="tch_pass1" id="tch_pass1" placeholder="Enter New Password"/><span class="error"><?php echo $errtch_pass1 ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="newPass_error">
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Confirm Password</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
											<input type="password" class="form-control" name="tch_pass2" id="tch_pass2" placeholder="Enter Confirm Password"/><span class="error"><?php echo $errtch_pass2 ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="conPass_error">
                                    </div>
								</div>

								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="name" class="cols-sm-2">Contact</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
											<input type="number" class="form-control" name="tchContact" id="tchContact" min="0" placeholder="Enter Phone Number"value="<?php echo $tchContact ?>" /><span class="error"><?php echo $errtchContact ?></span>
										</div>
									</div>        
									<div class="col-lg-6" id="contact_error">
                                    </div>
								</div>

								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Salary</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" name="tchSalary" id="tchSalary" min="0" placeholder="Enter Salary"value="<?php echo $tchSalary ?>" /><span class="error"><?php echo $errtchSalary ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="salary_error">
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2 ">Education</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="tchEducation" id="tchEducation"  placeholder="Enter Education" value="<?php echo $tchEducation ?>" /><span class="error"><?php echo $errtchEducation ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="education_error">
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2 ">Designation</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="tchDesigation" id="tchDesigation"  placeholder="Enter Designation"value="<?php echo $tchDesigation ?>" /><span class="error"><?php echo $errtchDesignation ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="designation_error">
                                    </div>
                                </div>
								<hr>
								<div class="row">
									<div class="col-lg-6 form-group">
										<button type="submit" id="btn_tchUpdate" name="btn_tchUpdate" class="btn btn-primary btn-lg btn-block">Update</button>
									</div>
									<div class="col-lg-6" id="dones">
                                    </div>
								</div>        
							</form>
						</div> 
					</div>       
				</div>
			</div>
		</div>
		<!-- END PAGE SOURCE -->    
	</div>
</body>
</html>
