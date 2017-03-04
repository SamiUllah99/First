<?php
require('C:/wamp/www/SIS/Classes/class.Classroom.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Classroom = new Classroom();

$classTitle ="";
$stSection= "";
$classFees ="";
$updateClass ="";

$errclassTitle ="";
$errclassFees ="";
$errstSection= "";

if(isset($_POST["updateClass"])) {
			$updateClass= addslashes($_POST["updateClass"]);	
		if(empty($_POST["classTitle"])) {
			$errclassTitle = "Please enter a Title";
		} else{
		  $classTitle= addslashes($_POST["classTitle"]);
		}
		if(empty($_POST["classFees"])) {
			$errclassFees = "Please enter Fee";
		} else{
		  $classFees= addslashes($_POST["classFees"]);
		}
		if(empty($_POST["stSection"])) {
			$errstSection = "Please enter Section";
		} else{
		  $stSection= addslashes($_POST["stSection"]);
		}
		$obj_Classroom->
		$obj_Classroom->Title =$classTitle;
        $obj_Classroom->Des =$classFees;
		    if($obj_Classroom->UpdateClass(/*classID*/)){
            $msg="Updated";
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
                        <h3 class="text-center">Edit Class</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
                            <form method="POST" action="" >
								
                                &nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Title</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" class="form-control" name="classTitle" id="classTitle" required placeholder="Enter Class Title" value="<?php echo $classTitle ?>"/>
										<span class="error" ><?php echo $errclassTitle ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center>
											<strong>Section</strong>
										</center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <select name="stSection"  class="form-control" required >
										<span class="error" ><?php echo $errstSection ?></span>
											<option value="" selected disabled>Select Section</option>
											<option value="">A</option>
											<option value="">B</option>
											<option value="">C</option>
										</select>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
								 <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Monthly Fees</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classFees" id="classFees" required placeholder="Enter Class Fees"value="<?php echo $classFees ?>"/>
										<span class="error" ><?php echo $errclassFees ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								<br>
								<hr>
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-9">
                                        <button type="submit" class="btn btn-success pull-right" name="updateClass" id="updateClass">Update</button>
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
