<?php
require('C:/wamp/www/SIS/Classes/class.Admin.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');
$obj_Admin = new Admin();
$btnNew= "";
$adminAddress= "";
$adminContact= "";
$confirmPass= "";
$newPass= "";
$adminEmail= "";
$adminName= "";
$adminID= "";

$erradminContact= "";
$errconfirmPass= "";
$errnewPass= "";
$erroldPass= "";
$errEmail= "";
$erradminName= "";
$erradminID= "";
$erradminAddress = "";

if(isset($_POST["btnNew"])) {
			$btnNew = addslashes($_POST["btnNew"]);
		if(empty($_POST["adminContact"])) {
			$erradminContact = "Please Enter a Contact Number";
			
		} else{
		  $adminContact= addslashes($_POST["adminContact"]);
		}
		if(empty($_POST["confirmPass"])) {
			$errconfirmPass = "Enter a Password";
		} else{
		  $confirmPass= addslashes($_POST["confirmPass"]);
		}

		if(empty($_POST["newPass"])) {
			$errnewPass= "Enter a password";
		} else{
		  $newPass = addslashes($_POST["newPass"]);
		}
		if ($_POST["newPass"] != $_POST["confirmPass"]) {
		$errconfirmPass = "Passwords don't match";
		}
		if(empty($_POST["adminName"])) {
			$erradminName= "Enter a Name";
		} else{
		  $adminName = addslashes($_POST["adminName"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$adminName)) {
		  $erradminName = "Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["adminEmail"])) {
		  $errEmail= "Enter an Email Address";
		} else{
		  $adminEmail = addslashes($_POST["adminEmail"]);
		  if (!filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
		  $errEmail = "Invalid email format"; 
		}
		}
		if(empty($_POST["adminID"])) {
			$erradminID= "Enter a Valid Admin ID";
		} else{
			$adminID = addslashes($_POST["adminID"]);  
		}
		if(empty($_POST["adminAddress"])) {
			$erradminAddress= "Enter a Valid Admin Address";
		} else{
			$adminAddress = addslashes($_POST["adminAddress"]);  
		}

        $obj_Admin->Name =$adminName;
        $obj_Admin->Email =$adminEmail;
        $obj_Admin->setpass($newPass);
        $obj_Admin->DoB =$adminName;
        $obj_Admin->Pic =$adminName;
        $obj_Admin->Contact =$adminContact;
        $obj_Admin->CNIC =$adminID;
        if($obj_Admin->addAdmin()){
            $msg="Admin Added";
            }
            else{
                $msg = "Admin Addition Failed";
            }
		
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account - Admin</title>
    <?php require('../inc/links.php');  ?>
	<style>
.error {color: #FF0000;}
</style>
	<script src="../js/newAdmin.js"></script>
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
                        <h3 class="text-center">New Admin</h3>  
                    </div>
                    <div class="row panel-body">
                        <div class=" main-reg">
						
                            <form class="form-horizontal" action="" method="post" onSubmit="return validate_post()" autocomplete="on">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Account ID</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" name="adminID" id="adminID" required min="0" placeholder="Enter account ID" value="<?php echo $adminID?>"/>
											<span class="error"><?php echo $erradminID ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="id_error">
                                        
                                    </div>
                                </div>        
                                
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa"></i></span>
                                            <input type="text" class="form-control" name="adminName" id="adminName" required placeholder="Enter your name" value="<?php echo $adminName ?>"/>
											<span class="error"><?php echo $erradminName?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="name_error">
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2 ">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="adminEmail" id="adminEmail" required placeholder="Enter your email" value="<?php echo $adminEmail ?>"/>
											<span class="error"><?php echo $errEmail ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="email_error">
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="newPass" id="newPass" required placeholder="Enter new password" />
											<span class="error"><?php echo $errnewPass ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="newPass_error">
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="confirmPass" id="confirmPass" required placeholder="Confirm new password"/>
											<span class="error"><?php echo $errconfirmPass ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="confirmPass_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" min="0" class="form-control" name="adminContact" id="adminContact" required min="0" placeholder="Enter admin number" value="<?php echo $adminContact?>"/>
											<span class="error"><?php echo $erradminContact ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="contact_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="adminAddress" id="adminAddress" required placeholder="Enter admin address" value="<?php echo $adminAddress ?>"/>
											<span class="error"><?php echo $erradminAddress ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="address_error">
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group ">
                                        <button  id="btnNew" name="btnNew" class="btn btn-primary btn-lg btn-block ">Add Admin</button>
                                    </div>
                                    <div class="col-lg-5" id="done_error">
                                        
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
