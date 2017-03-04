<?php
$courses="";
$btnSubmit ="";

$errcourses="";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["courses"])) {
			$errcourses = "Please enter a Subject";
		} else{
		  $courses= addslashes($_POST["courses"]);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result - BOG Portal</title>
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
						Marks Result
					</div>
					<div class="panel-body">
						<br>
						<form method="POST" action="" >
							
							<div class="row">
								<div class="col-lg-3 col-xs-6">
									<center><strong>Student ID: </strong></center>
								</div>
								<div class="col-lg-3 col-xs-6">
									<label class="label label-success" id="studentID" name="studentID" style="font-size: 14px;">101</label>
								</div>
								<div class="col-lg-3 col-xs-6">
									<center><strong>Student Name:</strong></center>
								</div>
								<div class="col-lg-3 col-xs-6">
									<label class="label label-success" name="studentName" id="studentName" style="font-size: 14px;">Ali Raza</label>
								</div>    								
							</div>
							<hr>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="courses"  class="form-control" required >
									<span class="error" ><?php echo $errcourses ?></span>
										<option value="" selected disabled>Select Subject</option>
										<option value="">English</option>
										<option value="">Math</option>
										<option value="">Physics</option>
									</select>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<button type="Submit" class="btn btn-success" name="btnSubmit" id="btntnSubmit">Submit</button>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									
								</div>
							</div>
							
							<hr>
							<table class="table table-striped">
								<thead>
									<tr>
										<th class="col-lg-1">#</th>
										<th class="col-lg-3">Date</th>
										<th class="col-lg-3">Test</th>
										<th class="col-lg-2">Total Marks</th>
										<th class="col-lg-3">Obtainer Marks</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>01 Sep, 2016</td>
										<td>Test 1</td>
										<td>30</td>
										<td>25</td>
									</tr>
									<tr>
										<td>2</td>
										<td>07 Oct, 2016</td>
										<td>Test 2</td>
										<td>30</td>
										<td>26</td>
									</tr>
									<tr>
										<td>3</td>
										<td>06 Nov, 2016</td>
										<td>Test 3</td>
										<td>30</td>
										<td>28</td>
								  </tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>      <!-- Panel End -->
				
				
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Paper Marks
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="col-lg-1 col-xs-1">#</th>
									<th class="col-lg-3 col-xs-3">Date</th>
									<th class="col-lg-3 col-xs-3">Papers</th>
									<th class="col-lg-2 col-xs-2">Total Marks</th>
									<th class="col-lg-3 col-xs-3">Obtainer Marks</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>20 Sep, 2016</td>
									<td>First Term</td>
									<td>50</td>
									<td>40</td>
								</tr>
								<tr>
									<td>2</td>
									<td>18 Oct, 2016</td>
									<td>Middle Term</td>
									<td>100</td>
									<td>75</td>
								</tr>
								<tr>
									<td>3</td>
									<td>10 Nov, 2016</td>
									<td>Final Term</td>
									<td>100</td>
									<td>88</td>
							  </tr>
							</tbody>
						</table>
					</div>
				</div>      <!-- Panel End -->
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
