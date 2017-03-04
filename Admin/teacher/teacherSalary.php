<?php
$txt_teacher="";
$btnSearch ="";

$errtxt_teacher="";

if(isset($_POST["btnSearch"])) {
			$btnSearch = addslashes($_POST["btnSearch"]);
		if(empty($_POST["txt_teacher"])) {
			$errtxt_teacher = "Please a Name to Search";
			
		} else{
		  $txt_teacher= addslashes($_POST["txt_teacher"]);
		  		  // check if designation only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$txt_teacher)) {
		  $errtxt_teacher = "Only letters and white space allowed"; 
			}
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
						<h3 class="text-center">Teacher Salary</h3>  
					</div>
					<div class=" panel-body">
						<div class="row main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="input-group">
											<input type="text" class="form-control" id="txt_teacher" name="txt_teacher" required placeholder="Search Teacher Here" />
											<span class="error"><?php echo $errtxt_teacher ?></span>
											<span class="input-group-btn bn">
												<button type="submit" class="btn btn-success" name="btnSearch" id="btnSearch">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</span>
										</div>
									</div>
								</div>
								<hr>
								&nbsp;
							</form>

							<table class="col-md-12 col-sm-12 col-xs-12 table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Teacher ID</th>
										<th>Name</th>
										<th>Salary (Rs.)</th>
										<th>Increment</th>
										<th>Add Bonus</th>
										<th>Decrement</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>80,000</td>
										<td>
											<a href="addSalary.php" id="btn_incSalary" class="btn btn-primary btn-xs" role="button">Increment Salary</a>
										</td>
										<td>
											<a href="addBonus.php" id="btn_addBonus" class="btn btn-success btn-xs" role="button">Add Bonus</a>
										</td>
										<td>
											<a href="decrementSalary.php" id="btn_decSalary" class="btn btn-danger btn-xs" role="button">Dec Salary</a>
										</td>
									</tr>
									 <tr>
										<td>2</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>70,000</td>
										<td>
											<a href="addSalary.php" id="btn_incSalary" class="btn btn-primary btn-xs" role="button">Increment Salary</a>
										</td>
										<td>
											<a href="addBonus.php" id="btn_addBonus" class="btn btn-success btn-xs" role="button">Add Bonus</a>
										</td>
										<td>
											<a href="decrementSalary.php" id="btn_decSalary" class="btn btn-danger btn-xs" role="button">Dec Salary</a>
										</td>
									</tr>
									 <tr>
										<td>3</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>70,000</td>
										<td>
											<a href="addSalary.php" id="btn_incSalary" class="btn btn-primary btn-xs" role="button">Increment Salary</a>
										</td>
										<td>
											<a href="addBonus.php" id="btn_addBonus" class="btn btn-success btn-xs" role="button">Add Bonus</a>
										</td>
										<td>
											<a href="decrementSalary.php" id="btn_decSalary" class="btn btn-danger btn-xs" role="button">Dec Salary</a>
										</td>
									</tr>
									 <tr>
										<td>4</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>68,000</td>
										<td>
											<a href="addSalary.php" id="btn_incSalary" class="btn btn-primary btn-xs" role="button">Increment Salary</a>
										</td>
										<td>
											<a href="addBonus.php" id="btn_addBonus" class="btn btn-success btn-xs" role="button">Add Bonus</a>
										</td>
										<td>
											<a href="decrementSalary.php" id="btn_decSalary" class="btn btn-danger btn-xs" role="button">Dec Salary</a>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>85,000</td>
										<td>
											<a href="addSalary.php" id="btn_incSalary" class="btn btn-primary btn-xs" role="button">Increment Salary</a>
										</td>
										<td>
											<a href="addBonus.php" id="btn_addBonus" class="btn btn-success btn-xs" role="button">Add Bonus</a>
										</td>
										<td>
											<a href="decrementSalary.php" id="btn_decSalary" class="btn btn-danger btn-xs" role="button">Dec Salary</a>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>90,000</td>
										<td>
											<a href="addSalary.php" id="btn_incSalary" class="btn btn-primary btn-xs" role="button">Increment Salary</a>
										</td>
										<td>
											<a href="addBonus.php" id="btn_addBonus" class="btn btn-success btn-xs" role="button">Add Bonus</a>
										</td>
										<td>
											<a href="decrementSalary.php" id="btn_decSalary" class="btn btn-danger btn-xs" role="button">Dec Salary</a>
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
