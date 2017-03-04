<?php
$stClass = "";
$stSection = "";
$studentID = "";
$totalAmount = "";
$paidAmount = "";
$feeDues = "";
$feedate = "";
$status = "";
$transportFee = "";
$btnSubmit = "";

$errstSection = "";
$errstclass = "";
$errStudentID = "";
$errtotalAmount = "";
$errpaidAmount = "";
$errfeeDues = "";
$errfeeDate = "";
$errstatus = "";

	if(isset($_POST["btnSubmit"])) {
			$transportFee = addslashes($_POST["transportFee"]);
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["stClass"])) {
			$errstclass = "Please select a class";
		} else{
		  $stClass = addslashes($_POST["stClass"]);
		}
		if(empty($_POST["stSection"])) {
			$errstSection = "Please select a Section";
		} else{
		  $stSection = addslashes($_POST["stSection"]);
		}
		if(empty($_POST["studentID"])) {
			$errStudentID = "Please select a Student ID";
		} else{
		  $studentID = addslashes($_POST["studentID"]);
		}
		if(empty($_POST["totalAmount"])) {
			$errtotalAmount = "Please Enter total payment Amount";
		} else{
			  $totalAmount = addslashes($_POST["totalAmount"]);
			if(!preg_match("/^[0-9 ]*$/",$totalAmount))
			{
				$errtotalAmount = "Please Enter total payment Amount in numbers only";
			}
		}
		if(empty($_POST["paidAmount"])) {
			$errpaidAmount = "Please Enter total paid Amount";
		} else{
			  $paidAmount = addslashes($_POST["paidAmount"]);
			if(!preg_match("/^[0-9 ]*$/",$totalAmount))
			{
				$errpaidAmount = "Please Enter total paid Amount in numbers only";
			}
		}
		if(empty($_POST["feeDues"])) {
			$errfeeDues = "Please Enter total Due Amount";
			} else{
			  $feeDues = addslashes($_POST["feeDues"]);
			if(!preg_match("/^[0-9 ]*$/",$totalAmount))
			{
				$errfeeDues = "Please Enter total Fee in numbers only";
			}
		}
		if(empty($_POST["feedate"])) {
			$errfeeDate = "Please Enter the Payment date";
		} else{
		  $feedate = addslashes($_POST["feedate"]);
		}
		if(empty($_POST["status"])) {
			$errstatus = "Please select the Status";
		} else{
		  $status = addslashes($_POST["status"]);
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
                        <h3 class="text-center">Add Fees</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
                            <form method="POST" action="" autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stClass" id="stClass" class="form-control" required value="<?php echo $stClass ?>" ><span class="error" ><?php echo $errstclass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
                                </div>
                                
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stSection" id="stSection" class="form-control" required value="<?php echo $stSection ?>" ><span class="error"><?php echo $errstSection ?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
                                </div>
								
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="studentID" id="studentID" class="form-control" required value="<?php echo $studentID ?>"><span class="error"><?php echo $errStudentID ?></span>
										<option value="" selected disabled>Student ID</option>
										<option value="">101</option>
										<option value="">102</option>
										<option value="">103</option>
									</select>
                                </div>
								
								<div class="col-lg-1 col-md-3 col-sm-6 col-xs-6">
									<button type="Submit" class="btn btn-success" name="btnSubmit" id="btnSubmit" >Submit</button>
								</div>
								<div class="col-lg-1 col-md-3 col-sm-6 col-xs-6">
								</div>
								<div class="col-lg-1 col-md-3 col-sm-6 col-xs-6">
									<a href="setFees.php" class="btn btn-primary" name="btnSetFee" id="btnSetFee">Set Fee</a>
								</div>
								
                                &nbsp;
								<hr>
                                
								
                                &nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Student Name</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" class="form-control" name="stdName" id="stdName " readonly/>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Total Payment</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="totalAmount" id="totalAmount" required placeholder="Enter total amount" value="<?php echo $totalAmount ?>"><span class="error"><?php echo $errtotalAmount ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Paid Amount</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="paidAmount" id="paidAmount" required placeholder="Enter paid amount" value="<?php echo $paidAmount ?>"><span class="error"><?php echo $errpaidAmount ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>   	
								
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Dues Amount</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="feeDues" id="feeDues" required placeholder="Enter fee Dues" value="<?php echo $feeDues ?>"><span class="error"><?php echo $errfeeDues ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								&nbsp;
								<div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
										<center><strong>Paid Date</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									
                                        <div class="input-group">
											<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true" ></span></span>
											<input class="form-control" name="feedate" id="feedate" type="date" required value="<?php echo $feedate ?>"><span class="error"><?php echo $errfeeDate ?></span>
										</div>
                                    </div>
                                </div>   				
								&nbsp;
								<div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
										<center><strong>Status</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <select name="status" class="form-control" required value="<?php echo $status ?>"><span class="error"><?php echo $errstatus ?></span>
										<option value="" selected disabled>Select status</option>
										<option value="">Paid</option>
										<option value="">Defaulters</option>
									</select>
                                    </div>
                                </div>   								
                                &nbsp;
                                <hr>
								
								
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Transport Fee</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" class="form-control" name="transportFee" id="transportFee"  placeholder="Enter Fee for Transport"/>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								<hr>
								<div class="row ">
                                    <div class="col-lg-7 col-md-9 col-sm-9 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Fees has been sumitted Successfully!
										</div>
									</div>
									<div class="col-lg-5 col-md-3 col-sm-3 col-xs-12">
                                        <button type="submit" class="btn btn-success" name="btnAddFee" id="btnAddFee">Add Fees</button>
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
