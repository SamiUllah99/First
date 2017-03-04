<?php
$btnSubmit="";
$month_present="";

$errmonth_present="";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["month_present"])) {
			$errmonth_present = "Please select a Month";
		} else{
		  $month_present = addslashes($_POST["month_present"]);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Attendance - Student Portal</title>
	<?php require('inc/links.php');   ?>
		<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
				<!-- Navbar Start-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 sidebars">	
				<?php require('nav.php'); ?>
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
						
					</div>
				</div>
				
				
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
						Information
					</div>
					<div class="panel-body">
						
						<form method="POST" action="" >
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
								<center>
									<label>Month:</label>
								</center>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<select name="month_present"  class="form-control" required ><span class="error" ><?php echo $errmonth_present ?></span>
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
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
