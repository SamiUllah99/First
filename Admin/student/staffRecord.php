<?php
require('C:/wamp/www/SIS/Classes/class.Staff.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Staff = new Staff(); 
$deleteStaff="";

if(isset($_POST["deleteStaff"])) {
			$deleteStaff= addslashes($_POST["deleteStaff"]);	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Staff</title>
    <?php require('../inc/links.php');  ?>
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
						<h3 class="text-center">Staff Record</h3>  
					</div>
					<div class=" panel-body">
						<div class="row main-reg">
							<form method="POST" action="" >
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<a href="addStaff.php" class="btn btn-success no-print pull-right">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> New Staff
									</a>
								</div>
								&nbsp;
								<hr>
							</form>

							<table class="col-md-12 col-sm-12 col-xs-12 table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Staff ID</th>
										<th>Name</th>
										<th>Phone No.</th>
										<th>Designation</th>
										<th>Salary (Rs)</th>
										<th>Action</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>0323-6482157</td>
										<td>Lahore</td>
										<td>40,000</td>
										<td>
											<a href="editStaff.php" class="btn btn-xs btn-primary">
												<i class="fa fa-pencil"></i> Edit
											</a>   
										</td>
										<td>
											<button class="btn btn-xs btn-danger" id="deleteStaff" name="deleteStaff">
												<i class="fa fa-times"></i> Delete
											</button>   
										</td>
									</tr>
									 <tr>
										<td>2</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>0323-6482157</td>
										<td>Islamabad</td>
										<td>50,000</td>
										<td>
											<a href="editStaff.php" class="btn btn-xs btn-primary">
												<i class="fa fa-pencil"></i> Edit
											</a>   
										</td>
										<td>
											<button class="btn btn-xs btn-danger" id="deleteStaff" name="deleteStaff">
												<i class="fa fa-times"></i> Delete
											</button>   
										</td>
									</tr>
									 <tr>
										<td>3</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>0323-6482157</td>
										<td>Karachi</td>
										<td>35,000</td>
										<td>
											<a href="editStaff.php" class="btn btn-xs btn-primary">
												<i class="fa fa-pencil"></i> Edit
											</a>   
										</td>
										<td>
											<button class="btn btn-xs btn-danger" id="deleteStaff" name="deleteStaff">
												<i class="fa fa-times"></i> Delete
											</button>   
										</td>
									</tr>
									 <tr>
										<td>4</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>0323-6482157</td>
										<td>Abbottabad</td>
										<td>30,000</td>
										<td>
											<a href="editStaff.php" class="btn btn-xs btn-primary" >
												<i class="fa fa-pencil"></i> Edit
											</a>   
										</td>
										<td>
											<button class="btn btn-xs btn-danger" id="deleteStaff" name="deleteStaff">
												<i class="fa fa-times"></i> Delete
											</button>   
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>0323-6482157</td>
										<td>Multan</td>
										<td>30,000</td>
										<td>
											<a href="editStaff.php" class="btn btn-xs btn-primary">
												<i class="fa fa-pencil"></i> Edit
											</a>   
										</td>
										<td>
											<button class="btn btn-xs btn-danger" id="deleteStaff" name="deleteStaff">
												<i class="fa fa-times"></i> Delete
											</button>   
										</td>
									</tr>
									
								</tbody>
							</table>
						</div> 
						
					</div>       
				</div>
			</div>
		</div>
		<!-- END PAGE SOURCE -->
	</div>
</body>
</html>
