<?php
$stClass = "";
$stSection = "";
$subjects = "";
$btnSubmit = "";
$teacherID = "";
$teacherName = "";
$setSchedule ="";

$errstClass = "";
$errstSection = "";
$errsubjects ="";
$errteacherID = "";
$errteacherName = "";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);
		if(empty($_POST["stClass"])) {
			$errstClass = "Please Enter a Class";
		} else{
		  $stClass= addslashes($_POST["stClass"]);
		}
		if(empty($_POST["stSection"])) {
			$errstSection = "Please Enter Section";
		} else{
		  $stSection = addslashes($_POST["stSection"]);
		}
		if(empty($_POST["subjects"])) {
			$errsubjects = "Please Enter Subject";
		} else{
		  $subjects = addslashes($_POST["subjects"]);
		}
}
if(isset($_POST["setSchedule"])) {
	$setSchedule = addslashes($_POST["setSchedule"]);
		if(empty($_POST["teacherID"])) {
			$errteacherID = "Please Enter Teacher's ID";
		} else{
		  $teacherID = addslashes($_POST["teacherID"]);
		    if(!preg_match("/^[1-9 ]*$/",$stdid))
			{
				$errteacherID = "Please Enter a vaild ID";
			}
		}
		if(empty($_POST["teacherName"])) {
			$errteacherName = "Please Enter Teacher's Name";
		} else{
		  $teacherName = addslashes($_POST["teacherName"]);
		  // check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$teacherName)) {
				$errteacherName = "Only letters and white spaces allowed"; 
			}
		}
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
                        <h3 class="text-center">Schedule</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
                            <form method="POST" action=""  autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stClass" id="stClass" class="form-control" required ><span class="error"><?php echo $errstClass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
                                </div>
                                
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stSection" id="stSection" class="form-control" required ><span class="error"><?php echo $errstSection ?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
                                </div>
								
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="subjects" id="subjects" class="form-control" required ><span class="error"><?php echo $errsubjects ?></span>
										<option value="" selected disabled>Subject</option>
										<option value="">English</option>
										<option value="">Math</option>
										<option value="">Urdu</option>
									</select>
                                </div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<button type="Submit" class="btn btn-success" name="btnSubmit" id="btnSubmit">Submit</button>
								</div>
                                &nbsp;
								<hr>
                                &nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Teacher ID</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <select name="teacherID" id="teacherID" class="form-control" required value="<?php echo $teacherID ?>" ><span class="error" ><?php echo $errteacherID ?></span>
										<option value="" selected disabled>Select Teacher ID</option>
										<option value="">101</option>
										<option value="">102</option>
										<option value="">103</option>
									</select>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Teacher Name:</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" class="form-control" name="teacherName" id="teacherName" required placeholder="Enter Teacher Name" value="<?php echo $teacherName ?>" /><span class="error"><?php echo $errteacherName ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								&nbsp;	
								
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>From:</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input class="form-control" type="time" value="08:00:00" id="example-time-input" required >
										
                                    </div>
									<div class="col-lg-3"></div>
                                </div>   	
								
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>To:</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input class="form-control" type="time" value="13:45:00" id="example-time-input" required>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								&nbsp;
								
                                <hr>
								
								<div class="row ">
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											New Schedule has been created Successfully!
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <button type="submit" class="btn btn-success" name="setSchedule" id="setSchedule">Set Schedule</button>
                                    </div>
									<div class="col-lg-3 "></div>
                                </div>   	
                                
								&nbsp;
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
