<?php
require('C:/wamp/www/SIS/Classes/class.Teacher.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Teacher = new Teacher(); 

$btn_tchAdd= "";
$tchDesig= "";
$tchEdu= "";
$tchSalary= "";
$tchContact= "";
$address= "";
$tchPass= "";
$tchEmail= "";
$tch_lname= "";
$tch_fname= "";
$teach_id= "";
$btn_image="";


$errtchDesig= "";
$errtchEdu= "";
$errtchSalary= "";
$errtchContact= "";
$erraddress= "";
$errtchPass= "";
$errtchEmail= "";
$errtch_lname= "";
$errtch_fname= "";
$errteach_id= "";

if(isset($_POST["btn_tchAdd"])) {
			$btn_tchAdd = addslashes($_POST["btn_tchAdd"]);
			$btn_image= addslashes($_POST["btn_image"]);
		if(empty($_POST["tchDesig"])) {
			$errtchDesig = "Please Enter a Designation";
			
		} else{
		  $tchDesig= addslashes($_POST["tchDesig"]);
		  		  // check if designation only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$tchDesig)) {
		  $errtchDesig = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["tchEdu"])) {
			$errtchEdu = "Enter Education";
		} else{
		  $tchEdu= addslashes($_POST["tchEdu"]);
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
		if(empty($_POST["address"])) {
			$erraddress= "Enter an Address";
		} else{
		  $address = addslashes($_POST["address"]);
		}
		if(empty($_POST["tchEmail"])) {
		  $errtchEmail= "Enter an Email Address";
		} else{
		  $tchEmail = addslashes($_POST["tchEmail"]);
		  if (!filter_var($tchEmail, FILTER_VALIDATE_EMAIL)) {
		  $errtchEmail = "Invalid email format"; 
		}
		}
		if(empty($_POST["teach_id"])) {
			$errteach_id= "Enter a Valid Teacher's ID";
		} else{
			$teach_id = addslashes($_POST["teach_id"]);  
		}
		if(empty($_POST["tch_fname"])) {
			$errtch_fname= "Enter a First Name";
		} else{
		  $tch_fname = addslashes($_POST["tch_fname"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$tch_fname)) {
		  $errtch_fname = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["tch_lname"])) {
			$errtch_lname= "Enter a Last Name";
		} else{
		  $tch_lname = addslashes($_POST["tch_lname"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$tch_lname)) {
		  $errtch_lname = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["tchPass"])) {
			$errtchPass= "Passwrod cannot be empty";
		} else{
		  $tchPass = addslashes($_POST["tchPass"]);
		}
            $obj_Teacher->Name =$tch_fname;
            $obj_Teacher->CNIC =$teach_id;
            $obj_Teacher->Email =$tchEmail;
            $obj_Teacher->Password=$tchPass;
            $obj_Teacher->Address =$address;
            $obj_Teacher->Contact =$tchContact;
            $obj_Teacher->Salary =$tchSalary;
            $obj_Teacher->Education =$tchEdu;
            $obj_Teacher->Designation =$tchDesig;
            $obj_Teacher->PicName =$btn_image;
            if($obj_Teacher->RegisterTeacher()){
            $msg="Registration Complete";
            }
            else{
                $msg = "Registration failed";
            }
            echo $msg;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #FF0000;}
</style>
    <title>Admin - Teacher</title>
    <?php require('../inc/links.php');  ?>
	<script src="../js/registrationt.js"></script>
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
                        <h3 class="text-center">Teacher Registration</h3>  
                    </div>
                    <div class="row panel-body">
                        <div class=" main-reg">
							<form class="form-horizontal" action="" method="post" onSubmit="return validations()" autocomplete="on">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label class="cols-sm-2">Teacher ID</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" min="0" name="teach_id" id="teach_id" required placeholder="Enter Registration Number"value="<?php echo $teach_id ?>" /><span class="error"><?php echo $errteach_id ?></span>
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
                                            <input type="text" class="form-control" name="tch_fname" id="tch_fname"  placeholder="Enter First Name" value="<?php echo $tch_fname ?>" /><span class="error"><?php echo $errtch_fname ?></span>
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
                                            <input type="text" class="form-control" name="tch_lname" id="tch_lname"  placeholder="Enter Last Name" value="<?php echo $tch_lname ?>" /><span class="error"><?php echo $errtch_lname ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="lname_error">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="tchEmail" id="tchEmail"  placeholder="Enter Email" value="<?php echo $tchEmail ?>" /><span class="error"><?php echo $errtchEmail ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="email_error">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="tchPass" id="tchPass"  placeholder="Enter Password" value="<?php echo $tchPass ?>" /><span class="error"><?php echo $errtchPass ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="pass_error">
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Teacher Address" value="<?php echo $address ?>" /><span class="error"><?php echo $erraddress ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="address_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" min="0" class="form-control" name="tchContact" id="tchContact" required placeholder="Enter Teacher Contact" value="<?php echo $tchContact ?>" /><span class="error"><?php echo $errtchContact ?></span>
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
                                            <input type="number" class="form-control" name="tchSalary" id="tchSalary" required min="0" placeholder="Enter Teacher Salary" value="<?php echo $tchSalary ?>" /><span class="error"><?php echo $errtchSalary ?></span>
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
                                            <input type="text" class="form-control" name="tchEdu" id="tchEdu"  placeholder="Enter Education" value="<?php echo $tchEdu ?>" /><span class="error"><?php echo $errtchEdu ?></span>
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
                                            <input type="text" class="form-control" name="tchDesig" id="tchDesig"  placeholder="Enter Designation" value="<?php echo $tchDesig ?>" /><span class="error"><?php echo $errtchDesig ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="designation_error">
                                    </div>
                                </div>
								
								<hr>
								<div class="row form-group">
									<div class="col-lg-1 col-xs-1">
										<center><strong>Image:</strong></center>
									</div>
									<div class="col-lg-11 col-xs-11">
										<input type="file" class="form-control-file" id="btn_image"  name="btn_image" aria-describedby="fileHelp">
									</div>
								</div>
								
								<hr>
								&nbsp;
                                <div class="row">
                                    <div class="col-lg-6 form-group ">
                                        <button type="submit" id="btn_tchAdd" name="btn_tchAdd" class="btn btn-primary btn-lg btn-block">Register</button>
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
    <!-- END PAGE SOURCE -->
	</div>
</body>
</html>
