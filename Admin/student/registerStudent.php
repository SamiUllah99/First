<?php
require('C:/wamp/www/LSIS/Classes/class.Student.php');
require('C:/wamp/www/LSIS/Classes/class.BusRoute.php');
require('C:/wamp/www/LSIS/Classes/class.Database.php');
$obj_Student = new Student();
	$stdid = ""; 
	$stdName = ""; 
	$fatherName = ""; 
	$stdDob = ""; 
	$address = ""; 
	$stdContact = ""; 
	$guardName = ""; 
	$stdEmail = ""; 
	$fatherNum = "";
	$sibling = "";
	$siblingID = "";
	$gaurdNum = ""; 
	$stdClass = "";
	$section = "";
	$feeConcession = "";
	$hostelFee = "";
	$stdTransport = "";
	$optradio = "";
	$register = "";
    $profile_picture="";
	


	$errstdid = ""; 
	$errstdName = ""; 
	$errfatherName = ""; 
	$errstdDob = ""; 
	$erraddress = ""; 
	$errstdContact = ""; 
	$errguardName = ""; 
	$errstdEmail = ""; 
	$pass = "";

		
	$obj_bus = new BusRoute();
		$data = $obj_bus->GetAllBusRoutes();


	if(isset($_POST["register"])) {
		$fatherNum = addslashes($_POST['fatherNum']);
		$register = addslashes($_POST['register']);
		$optradio = addslashes($_POST['optradio']);
		$sibling = addslashes ($_POST['sibling']);
		$stdTransport = addslashes($_POST['stdTransport']);
		$hostelFee = addslashes ($_POST['hostelFee']);
		$siblingID = addslashes ($_POST['siblingID']);
		$gaurdNum = addslashes ($_POST['gaurdNum']);
		$stdClass = addslashes ($_POST['stdClass']);
		$feeConcession = addslashes ($_POST['feeConcession']);
		$pass = addslashes ($_POST['pass']);
		$section = addslashes ($_POST['section']);
		$stdContact = addslashes ($_POST['stdContact']);
        $profile_picture=addslashes($_POST['profile_picture']);

		
		 
		if(empty($_POST["stdName"])){
			$errstdName = "Name is required";
		}else{
			$stdName = addslashes($_POST["stdName"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$stdName)) {
				$errstdName = "Only letters and white space allowed"; 
			}
		} 
		
		if (empty($_POST["fatherName"])) {
			$errfatherName = "Name is required";
		} else {
			$fatherName = addslashes($_POST["fatherName"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$fatherName)) {
		  $errfatherName = "Only letters and white space allowed"; 
			}
		} 
		if (empty($_POST["stdDob"])) {
		$errstdDob = "DOB is required";
		} else{
		  $stdDob = addslashes($_POST["stdDob"]);
		} 
		if (empty($_POST["address"])) {
		$erraddress = "address is required";
		} else{
		  $address = addslashes($_POST["address"]);
		} 

		if (empty($_POST["gaurdName"])) {
		$errguardName = "Name is required";
		} else {
		$guardName = addslashes($_POST["gaurdName"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$guardName)) {
		  $errguardName = "Only letters and white space allowed"; 
			}
		} 
		if (empty($_POST["stdEmail"])) {
		$errstdEmail = "Email is required";
	  } else {
		$email = addslashes($_POST["stdEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $errstdEmail = "Invalid email format"; 
		}
	  }
			$obj_Student->StudentID =$stdid;
			$obj_Student->SectionID =$section;
			$obj_Student->Name =$stdName;
			$obj_Student->FatherName =$fatherName;
			$obj_Student->DOB =$stdDob;
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
			//$obj_Student->BusRouteID =$BusRouteID;		    
		    if($d=$obj_Student->RegisterStudent()){
			$msg="Registration Complete";
			
			print_r($d);
			}else{
				$msg = "Registration failed";
			}
			//echo $msg;

			
			
		 
		
		

}



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Online Portal</title>
    <?php require('../inc/links.php');  ?>
	<script src="../js/registration.js"></script>
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
			<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
					
				<?php require('../inc/nav.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
			
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">Register Student</h3>  
                    </div>
                    <div class="row panel-body">
                        <div class="main-reg">
                            <form class="form-horizontal" action="" method="post" onSubmit="return validate_post()" autocomplete="on">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Registration No.</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" name="std_id" id="std_id" min="0" placeholder="Enter Registration Number" value="<?php echo $stdid ?>"required/>
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
                                            <input type="text" class="form-control" name="stdName" required id="stdName" placeholder="Enter Student Name" value="<?php echo $stdName ?>" />
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" style="color:red" id="name_error">
                                       <?php echo $errstdName; ?>  
                                    </div> 
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label class="cols-sm-2 ">Father Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="fatherName" id="fatherName" required placeholder="Enter Father Name" value="<?php echo $fatherName ?>"/>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" style="color:red" id="lname_error">
                                        <?php echo $errfatherName;?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">DOB</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="date" class="form-control" name="stdDob" id="std_Dob" required placeholder="Enter Date of Birth" value="<?php echo $stdDob ?>"/>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" style="color:red" id="date_error">
                                     <?php echo $errstdDob; ?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="address" id="address"  placeholder="Enter student address" value="<?php echo $address ?>" />
                                        </div>
                                    </div>         
                                    <div class="col-lg-6" id="address_error">
                                     <?php echo $erraddress; ?> 
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" min="0" class="form-control" name="stdContact" id="stdContact" required placeholder="Enter student contact" value="<?php echo $stdContact ?>"/>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="contact_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2 ">Father Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" min="0" class="form-control" name="fatherNum" id="fatherNum" placeholder="Enter Father Contact Number" value="<?php echo $fatherNum ?>"/>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="fatherNum_error">
                                        
                                    </div>
                                </div>

								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Gaurdian Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="gaurdName" id="gaurdName"  placeholder="Enter student contact" value="<?php echo $fatherNum ?>"/>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" style="color:red" id="gaurdian_error">
                                        <?php echo $errguardName ?> 
                                    </div> 
                                </div>
								<hr>
								<div class="row">
                                    <div class="col-lg-2 form-group">
                                        <label for="name" class="cols-sm-2">Siblings</label>
                                        
										
                                    </div>        
                                    <div class="col-lg-10">
                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
										<div class="radio">
											<label><input type="radio" id="optYes" name="sibling"<?php if (isset($sibling) && $sibling=="yes") echo "checked";?> value="yes">Yes</label>
										</div>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
										<div class="radio">
											<label><input type="radio" id="optNo" name="sibling" <?php if (isset($sibling) && $sibling=="no") echo "checked";?> value="no">No</label>
										</div>
									</div>
										

                                    </div>
                                </div>
								<hr>
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Siblings ID</label>
                                        
										<select name="siblingID" id="siblingID" class="form-control" required >
											<option value="" selected disabled>Select Sibling ID</option>
											<option value="">101</option>
											<option value="">102</option>
											<option value="">103</option>
										</select>
                                    </div>        
                                    <div class="col-lg-6" id="sibling_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2 ">Gaurdian Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" min="0" class="form-control" name="gaurdNum" id="gaurdNum" placeholder="Enter Gaurdian Contact Number" value="<?php echo $gaurdNum ?>" />
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="gaurdNum_error">
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Class</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" min="0" max="20" name="stdClass" id="stdClass" placeholder="Enter Class" value="<?php echo $stdClass ?>" />
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="class_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Section</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="section" id="section" placeholder="Enter Section" value="<?php echo $section ?>" />
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="section_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="stdEmail" id="stdEmail" placeholder="Enter student email" value="<?php echo $stdEmail ?>" />
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" style="color:red" >
                                       <?php echo $errstdEmail ?> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password"/>
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="pass_error">
                                        
                                    </div>
                                </div>
								<hr>
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Tution Fee Concession</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="number" min="0" class="form-control" name="feeConcession" id="feeConcession" placeholder="Enter Concession Percentage" value="<?php echo $feeConcession ?>" />
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="concession_error">
                                        
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name" class="cols-sm-2">Hostel Fee Concession</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="number" min="0" class="form-control" name="hostelFee" id="hostelFee" placeholder="Enter Concession Percentage" value="<?php echo $hostelFee ?>" />
                                        </div>
                                    </div>        
                                    <div class="col-lg-6" id="hostelFee_error">
                                        
                                    </div>
                                </div>
								<hr>
								<div class="row">
                                    <div class="col-lg-3 col-xs-3">
										<center><strong>Image:</strong></center>
									</div>
									<div class="col-lg-9 col-xs-9">
										<input name="profile_picture" type="file" class="form-control-file" id="btn_img" aria-describedby="fileHelp">
									</div>
                                </div>
								<hr>
								
								<div class="row">
                                    <div class="col-lg-3 col-md-3 col-s-12 col-xs-4">
										<center><strong>Transport:</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-xs-8">
									
										<select name="stdTransport" value="<?php echo $stdTransport ?>"  class="form-control">
										
											<option value="" selected disabled>Select Routes</option>
											<?php while($dat=mysqli_fetch_assoc($data)) { ?> 
											<option value="<?php echo $dat['BusRouteID']; ?>"><?php echo $dat['Route']; ?></option>
											<?php }?>
										</select>
									</div>
									&nbsp;
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
										<div class="radio">
											<label><input type="radio" id="optHostel" name="optradio" <?php if (isset($optradio) && $optradio=="Hostel") echo "checked";?> value="Hostel">Hostel</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
										<div class="radio">
											<label><input type="radio" id="optDay" name="optradio" <?php if (isset($optradio) && $optradio=="DayScholar") echo "checked";?> value="DayScholar">Day Scholar</label>
										</div>
									</div>
										
                                </div>
								<hr>
								&nbsp;
								
                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <button id="register" name="register" class="btn btn-primary btn-lg btn-block">Register</button>
                                    </div>
                                    <div class="col-lg-6" id="regiterDone">
                                        
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