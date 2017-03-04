<?php
$incrementSalary = "";
$btn_salaryInc ="";

$errincrementSalary = "";

if(isset($_POST["btn_salaryInc"])) {
			$btn_salaryInc = addslashes($_POST["btn_salaryInc"]);
		if(empty($_POST["incrementSalary"])) {
			$errincrementSalary = "Please Enter increment";
		} else{
		  $incrementSalary= addslashes($_POST["incrementSalary"]);
		}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Teacher</title>
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
					
				<?php require('nav2.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="text-center">Salary Increment</h3>  
					</div>
					<div class=" panel-body">
						<div class="main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="row">
									<div class="col-lg-3 col-xs-3 ">
										<center><strong>Teacher ID: </strong></center>
									</div>
									<div class="col-lg-3 col-xs-3">
										<label class="label label-primary" id="teacherID" name="teacherID" style="font-size: 14px;">50</label>
									</div>
									<div class="col-lg-3 col-xs-3 ">
										<center><strong>Current Salary:</strong></center>
									</div>
									<div class="col-lg-3 col-xs-3">
										<label class="label label-primary" id="teacherSalary" name="teacherSalary" style="font-size: 14px;">80,000 Rs.</label>
									</div>       
								</div>
								&nbsp;
								
								<div class="row">
									<div class="col-lg-3 col-xs-3 ">
										<center><strong>Teacher Name: </strong></center>
									</div>
									<div class="col-lg-3 col-xs-3">
										<label class="label label-primary" id="teacherName" name="teacherName" style="font-size: 14px;">Talha</label>
									</div>									
									
									
								</div>   
								&nbsp;
								<hr>
								&nbsp;	
								<div class="row ">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<center><strong>Salary Increment</strong></center>
									</div>
									<div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
										<input type="number" class="form-control" name="incrementSalary" id="incrementSalary" required min="0" placeholder="Enter Increment in Salary"/>
										<span class="error"><?php echo $errincrementSalary ?></span>
									</div>
									<div class="col-lg-3"></div>
								</div> 
								&nbsp;
								<hr>
								<div class="row ">
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Increment has been done Successfully!
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<button type="submit" class="btn btn-success" name="btn_salaryInc" id="btn_salaryInc">Add Increment</button>
									</div>
									
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
