<?php
$btnSubmit="";
$courses="";

$errcourses="";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["courses"])) {
			$errcourses= "Please select a Course";
		} else{
		  $courses = addslashes($_POST["courses"]);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result - Student Portal</title>
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
						Marks Result
					</div>
					<div class="panel-body">
						<br>
						<form method="POST" action="" >
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
								<center>
									<label>Subject:</label>
								</center>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<select name="courses"  class="form-control" required >
									<option value="" selected disabled>Select Subject</option><span class="error" ><?php echo $errcourses ?></span>
									<option value="">English</option>
									<option value="">Math</option>
									<option value="">Physics</option>
								</select>
							</div>
							
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
								<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnSubmit">Submit</button>
							</div>
							&nbsp;
							<hr>
							<br>
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
