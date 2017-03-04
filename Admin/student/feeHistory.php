<?php
$btnSubmit = "";
$stClass = "";
$stSection = "";
$studentID ="";
$txt_student = "";

$errstclass= "";
$errstSection= "";
$errstudentID= "";
$errtxt_student= "";

if(isset($_POST["btnSubmit"])) {
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
		if(empty($_POST["txt_student"])) {
			$errtxt_student = "Please Enter a Name";
		} else{
		  $txt_student = addslashes($_POST["txt_student"]);
		  // check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$txt_student)) {
				$errtxt_student = "Only letters and white spaces allowed"; 
			}
		}
    }		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fee History </title>
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
                        <h3 class="text-center">Fee History</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="row main-reg">
                            <form method="POST" action="" autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stClass"  class="form-control" required ><span class="error" value="<?php echo $stClass ?>"><?php echo $errstclass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
                                </div>
                                
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stSection"  class="form-control" required  value="<?php echo $stSection ?>"><span class="error"><?php echo $errstSection ?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
                                </div>
								
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="studentID"  class="form-control" required value="<?php echo $studentID ?>"><span class="error" ><?php echo $errstudentID ?></span>
										<option value="" selected disabled>Student ID</option>
										<option value="">101</option>
										<option value="">102</option>
										<option value="">103</option>
									</select>
                                </div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<button type="Submit" class="btn btn-success" name="btnSubmit" id="btnSubmit">Submit</button>
								</div>
								
                                &nbsp;
								<br>
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<a href="updateFee.php" class="btn btn-primary">Update Fee</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<a href="feeSlip.php" class="btn btn-primary">Fee Slip</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="input-group">
											<input type="text" id="txt_student" name="txt_student" class="form-control" placeholder="Search Student Here" required"/>
											<span class="error"><?php echo $errtxt_student ?></span>
											<span class="input-group-btn bn">
												<button class="btn btn-success" type="submit" name="btnSearch" id="btnSearch">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</span>
										</div>
									</div>
								</div>
								
								&nbsp;
								<hr>
                            </form>
                            
                            <table class="col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
										<th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Fee Month</th>
                                        <th>Total Payment</th>
                                        <th>Paid Amount</th>
                                        <th>Due Payment</th>
                                        <th>Status</th>
                                        <th>Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
										<td>101</td>
										<td>Ali Rehman</td>
                                        <td>November</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
                                        <td>11-11-2016</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
										<td>102</td>
										<td>Ali Rehman</td>
                                        <td>October</td>
                                        <td>50,000.00</td>
                                        <td>45,000.00</td>
                                        <td>5000.00</td>
                                        <td>Pending</td>
                                        <td>08-10-2016</td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
										<td>103</td>
										<td>Ali Rehman</td>
                                        <td>September</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
                                        <td>05-09-2016</td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
										<td>104</td>
										<td>Ali Rehman</td>
                                        <td>August</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
                                        <td>08-08-2016</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
										<td>105</td>
										<td>Ali Rehman</td>
                                        <td>July</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
                                        <td>13-07-2016</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
										<td>106</td>
										<td>Ali Rehman</td>
                                        <td>June</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
                                        <td>02-06-2016</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
							
							<div class="row">
								<center><a href="printFees.php" class="btn btn-success no-print">Print</a></center>
							</div>
                        </div> 
                    </div>       
                </div>
            </div>
        </div>  
	</div>
	
<!-- END PAGE SOURCE -->
</body>
</html>
