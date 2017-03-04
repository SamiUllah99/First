<?php
$month_present="";
$btnSubmit ="";
$stClass="";

$errmonth_present="";
$errstClass="";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["month_present"])) {
			$errmonth_present = "Please enter a Month";
		} else{
		  $month_present= addslashes($_POST["month_present"]);
		}
		if(empty($_POST["stClass"])) {
			$errstClass = "Please enter a Class";
		} else{
		  $stClass= addslashes($_POST["stClass"]);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Attendance - BOG Portal</title>
	<?php require('inc/links.php');   ?>
			<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<div class="headers">
		<?php require ('inc/header.php'); ?>
	</div>
	<div class="container">
		<div class="row">
				<!-- Navbar Start-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">	
				
			</div>
				<!-- Navbar End-->
			
			<!-- Main Contents -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<br>
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Attendance
					</div>
					<div class="panel-body">
					
						<div class="main-reg">
						
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#home">Teacher's Attendance</a>
								</li>
								<li>
									<a data-toggle="tab" href="#menu1">Student's Attendance</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
							
									<br>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Week</th>
												<th>Monday</th>
												<th>Tuesday</th>
												<th>Wednesday</th>
												<th>Thursday</th>
												<th>Friday</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
											</tr>
											<tr>
												<td>2</td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
											</tr>
											<tr>
												<td>3</td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
											</tr>
											<tr>
												<td>4</td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-danger">11/11/2016</span></td>
												<td><span class="label label-success">11/11/2016</span></td>
											</tr>
										</tbody>
									</table>
									
									<br>
									<div class="panel panel-default">
										<div class="panel-heading panel-head">
											Summary
										</div>
										<div class="panel-body">
											<br>
											<div class="col-lg-4 text-center">
												<center>
													<div class="panel panel-default pan">
														<div class="panel-heading head1">
															<label id="total_days">165</label>
														</div>
														<div class="panel-body">
															<label class="labels">Total Days</label>
														</div>
													</div>
												</center>
											</div>
											
											<div class="col-lg-4 text-center">
												<center>
													<div class="panel panel-default pan">
														<div class="panel-heading head2">
															<label id="total_presents">159</label>
														</div>
														<div class="panel-body">
															<label class="labels">Presents</label>
														</div>
													</div>
												</center>
											</div>
											
											<div class="col-lg-4 text-center">
												<center>
													<div class="panel panel-default pan">
														<div class="panel-heading head3">
															<label id="total_absents">7</label>
														</div>
														<div class="panel-body">
															<label class="labels">Absents</label>
														</div>
													</div>
												</center>
											</div>
											
										</div>
									</div>
									
									<div class="panel panel-default">
										<div class="panel-heading panel-head">
											Monthly Progress
										</div>
										<div class="panel-body">
											
											<form method="POST" action="" >
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
													<center>
														<label>Month:</label>
													</center>
												</div>
												
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
													<select name="month_present"  class="form-control" required >
													<span class="error" ><?php echo $errmonth_present ?></span>
														<option value="" selected disabled>Select Month</option>
														<option value="">January</option>
														<option value="">Februaury</option>
														<option value="">March</option>
														<option value="">April</option>
														<option value="">May</option>
														<option value="">June</option>
														<option value="">July</option>
														<option value="">August</option>
														<option value="">September</option>
														<option value="">October</option>
														<option value="">November</option>
														<option value="">December</option>
													</select>
												</div>
												
												<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
													<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnOK">Submit</button>
												</div>
												&nbsp;
												<hr>
												<br>
												<table class="table table-striped">
													<thead>
														<tr>
															<th>Week</th>
															<th>Monday</th>
															<th>Tuesday</th>
															<th>Wednesday</th>
															<th>Thursday</th>
															<th>Friday</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
														</tr>
														<tr>
															<td>2</td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
														</tr>
														<tr>
															<td>3</td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
														</tr>
														<tr>
															<td>4</td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-danger">11/11/2016</span></td>
															<td><span class="label label-success">11/11/2016</span></td>
														</tr>
													</tbody>
												</table>
											</form>
											
										</div>
									</div>
				
									
								</div>
								
								
								<div id="menu1" class="tab-pane fade">
									
									<h3 class="text-center"> Daily Attendance</h3>
									<br><br>
									<form method="POST" action="" >
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
												<select name="stClass"  class="form-control" required >
												<span class="error" ><?php echo $errstClass ?></span>
													<option value="" selected disabled>Select Class</option>
													<option value="">7th A</option>
													<option value="">7th C</option>
													<option value="">8th B</option>
													<option value="">8th C</option>
													<option value="">9th A</option>
													<option value="">9th B</option>
												</select>
											</div>
											
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
												<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnOK">Submit</button>
											</div>
											
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											</div>
										</div>
									</form>
									
									&nbsp;
									<hr>
										
									<table class="table table-striped">
										<thead>
											<tr>
												<th class="col-lg-2">#</th>
												<th class="col-lg-3">Reg No.</th>
												<th class="col-lg-5">Students</th>
												<th class="col-lg-2">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>101</td>
												<td><a href="studentAttendance.php">Ali Raza</a></td>
												<td>P</td>
											</tr>
											 <tr>
												<td>2</td>
												<td>102</td>
												<td><a href="studentAttendance.php">Zain Khan</a></td>
												<td>P</td>
											</tr>
											 <tr>
												<td>3</td>
												<td>103</td>
												<td><a href="studentAttendance.php">Ijaz Khan</a></td>
												<td>A</td>
											</tr>
											 <tr>
												<td>4</td>
												<td>104</td>
												<td><a href="studentAttendance.php">Umair Ayub</a></td>
												<td>A</td>
											</tr>
											<tr>
												<td>5</td>
												<td>105</td>
												<td><a href="studentAttendance.php">Saad Khan</a></td>
												<td>P</td>
											</tr>
											<tr>
												<td>6</td>
												<td>106</td>
												<td><a href="studentAttendance.php">Usman Khan</a></td>
												<td>A</td>
											</tr>
											
										</tbody>
									</table>
									
								</div>
                            </div>
                        </div> 
					</div>
				</div>
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
