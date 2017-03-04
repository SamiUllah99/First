<?php
require('C:/wamp/www/SIS/Classes/class.Admin.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');
$obj_Admin = new Admin();

$btnUpdate= "";
$adminContact= "";
$confirmPass= "";
$newPass= "";
$oldPass= "";
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

if(isset($_POST["btnUpdate"])) {
			$btnUpdate = addslashes($_POST["btnUpdate"]);
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
		if(empty($_POST["oldPass"])) {
			$erroldPass= "Enter the old password";
		} else{
		  $oldPass = addslashes($_POST["oldPass"]);
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
        $obj_Admin->Name =$adminName;
        $obj_Admin->Email =$adminEmail;
        $obj_Admin->Contact =$adminContact;
        $obj_Admin->adminID =$adminID;
        if($obj_Admin->updateAdmin($adminID,$newPass)){
            $msg="Admin updated";
            }
            else{
                $msg = "Admin update Failed";
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
	<script src="../js/updateAdmin.js"></script>
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
                        <h3 class="text-center">Update Admin Account</h3>  
                    </div>
                    <div class="row panel-body">
                        <div class=" main-reg">
                            <form class="form-horizontal" action="" method="post" onSubmit="return validate_post()" autocomplete="on">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Account ID</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" required min="0" name="adminID" id="adminID"  placeholder="Enter account ID" value="<?php echo $adminID ?>" /><span class="error"><?php echo $erradminID ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="id_error">
                                    </div>
                                </div>        
                                
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="adminName" id="adminName" required placeholder="Enter your Name"value="<?php echo $adminName ?>" /><span class="error"><?php echo $erradminName ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="name_error">
                                    </div>
                                </div>

								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="adminEmail" id="adminEmail" required placeholder="Enter your email"value="<?php echo $adminEmail ?>" /><span class="error"><?php echo $errEmail ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="email_error">
                                    </div>
                                </div>
								
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2 ">Current Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="oldPass" id="oldPass" required placeholder="Enter Current Password" /><span class="error"><?php echo $erroldPass ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="oldPass_error">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="newPass" id="newPass" required placeholder="Enter New Password"/><span class="error"><?php echo $errnewPass ?></span>
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
                                            <input type="password" class="form-control" name="confirmPass" id="confirmPass" required  placeholder="Confirm New Password"/><span class="error"><?php echo $errconfirmPass ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="conPass_error">
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" required min="0" name="adminContact" id="adminContact" required placeholder="Enter your number" value="<?php echo $adminContact ?>" /><span class="error"><?php echo $erradminContact ?></span>
                                        </div>
                                    </div>        
                                    <div class="col-lg-5" id="contact_error">
                                        
                                    </div>
                                </div>
								<hr>
                                <div class="row">
                                    <div class="col-lg-6 form-group ">
                                        <button class="btn btn-primary btn-lg btn-block" id="btnUpdate" name="btnUpdate">Update</button>
                                    </div>
                                    <div class="col-lg-5">
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
