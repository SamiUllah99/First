k<?php
require('C:/wamp/www/SIS/Classes/class.Student.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Student = new Student();

$stdName= ''; 
$btnUpdate= ''; 
$feeConcession= ''; 
$stdContact= ''; 
$address= ''; 
$pass2= ''; 
$pass1= ''; 
$std_id= ''; 
 

$errfeeConcession= '';$errstdContact= ''; 
$erraddress= ''; 
$errpass2= ''; 
$errpass1= ''; 
$errstd_id= ''; 
$errstdName='';


	if(isset($_POST['btnUpdate'])){
		$btnUpdate = addslashes($_POST["btnUpdate"]);
		if(empty($_POST["stdName"])){
			$errstdName = "Name is required";
		}else{
			$stdName = addslashes($_POST["stdName"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$stdName)) {
				$errstdName = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["feeConcession"])) {
			$errfeeConcession= "Enter Amount";
		} else{
		  $feeConcession = addslashes($_POST["feeConcession"]);
		}
		if(empty($_POST["stdContact"])) {
			$errstdContact= "Enter Contact Number";
		} else{
		  $stdContact = addslashes($_POST["stdContact"]);
		}
		if(empty($_POST["address"])) {
			$erraddress= "Enter an Address";
		} else{
		  $address = addslashes($_POST["address"]);
		}
		if(empty($_POST["std_id"])) {
			$errstd_id= "Enter a Valid Student's ID";
		} else{
			$std_id = addslashes($_POST["std_id"]);  
		}
		if(empty($_POST["pass1"])) {
			$errpass1 = "Enter a Password";
		} else{
		  $pass1= addslashes($_POST["pass1"]);
		}
		if(empty($_POST["pass2"])) {
			$errpass2= "Enter a password";
		} else{
		  $pass2 = addslashes($_POST["pass2"]);
		}
		if ($_POST["pass1"] != $_POST["pass2"]) {
		$errpass2 = "Passwords don't match";
		}
        $obj_Student->std_id =$std_id;

            $obj_Student->StudentID =$stdid;
            $obj_Student->SectionID =$section;
            $obj_Student->Name =$stdName;
            $obj_Student->FatherName =$fatherName;
            $obj_Student->DOB =$std_Dob;
            $obj_Student->Address =$address;
            $obj_Student->FatherPhone =$fatherNum;
            $obj_Student->StudentContact =$stdContact;
            $obj_Student->GuardianName =$guardName;
            $obj_Student->GuardianContact =$gaurdNum;
            $obj_Student->Email =$stdEmail;
            $obj_Student->Password =$pass;
            $obj_Student->TutionFeeConcession =$feeConcession;
            $obj_Student->HostelFeeConcession =$hostelFee;
            $obj_Student->IsHostel =$optradio;          
            $obj_Student->IsTransport=$stdTransport;    
            $obj_Student->BusRouteID =$BusRouteID;  
	if($obj_Student->UpdateStudent($std_id)){
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
    <title>Student Online Portal</title>
    <?php require('../inc/links.php');  ?>
<style>
.error {color: #FF0000;}
</style>
	<script src="../js/update.js"></script>
</head>
<body id="page1">
	<!-- START PAGE SOURCE -->
	<div class="wrap">
		<!-- PAGE SOURCE -->
		<div class="container-fluid">
			<!-- Nav Start -->
			<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
					
				<?php require('../inc/nav.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
			
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">Update Student</h3>  
                    </div>
                    <div class="row panel-body">
						<div class="col-lg-1"></div>
                        <div class="col-lg-10 main-reg">
                            <form class="form-horizontal" action="" method="post" onSubmit="return validate_post()">
                                <div class="row">
                                    <div class="col-lg-7 form-group">
                                        <label for="name" class="cols-sm-2">Registration No.</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" name="std_id" id="std_id" required placeholder="Enter registration number "value="<?php echo $std_id ?>"/>
											<span class="error"><?php echo $errstd_id ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="id_error">
                                    </div>
                                </div>        
                                
                                <div class="row">
                                    <div class="col-lg-7 form-group">
                                        <label for="name" class="cols-sm-2">Full Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="stdName" id="stdName"  placeholder="Enter Student Name" value="<?php echo $stdName ?>"/>
										<span class="error"><?php echo $errstdName ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="name_error">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7 form-group">
                                        <label for="name" class="cols-sm-2 ">New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="pass1" id="pass1"  placeholder="Enter new password"/>
											<span class="error"><?php echo $errpass1 ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="newPass_error">
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7 form-group">
                                        <label for="name" class="cols-sm-2">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="pass2" id="pass2"  placeholder="Confirm your password"/>
											<span class="error"><?php echo $errpass2 ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="conPass_error">
                                        
                                    </div>
                                </div>

								<div class="row">
                                    <div class="col-lg-7 form-group">
                                        <label for="name" class="cols-sm-2">Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Student Address"value="<?php echo $address ?>"/>
											<span class="error"><?php echo $erraddress ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="address_error">
                                        
                                    </div>
                                </div>
								
                                <div class="row">
                                    <div class="col-lg-7 form-group">
                                        <label for="name" class="cols-sm-2">Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" min="0" name="stdContact" id="stdContact" placeholder="Enter your number" value="<?php echo $stdContact ?>"/>
											<span class="error"><?php echo $errstdContact ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="contact_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-7 form-group">
                                        <label for="name" class="cols-sm-2">Fee Concession</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" min="0" name="feeConcession" id="feeConcession" placeholder="Enter Concession Percentage" value="<?php echo $feeConcession ?>"/>
											<span class="error"><?php echo $errfeeConcession ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="concession_error">
                                        
                                    </div>
                                </div>
								<hr>

                                <div class="row">
                                    <div class="col-lg-6 form-group ">
                                        <button class="btn btn-primary btn-lg btn-block" id="btnUpdate" name="btnUpdate">Update</button>
                                    </div>
                                    <div class="col-lg-6" id="done_msg">
                                        
                                    </div>
                                </div>        

                            </form>
                        </div>
						<div class="col-lg-1"></div>
                    </div>       
                </div>
            </div>
        </div>
	</div>
<!-- END PAGE SOURCE -->
</body>
</html>
