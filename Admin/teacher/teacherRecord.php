<?php
require('C:/wamp/www/SIS/Classes/class.Teacher.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Teacher = new Teacher(); 
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
		$obj_Teacher->teachID=$txt_teacher;
		    if($obj_Teacher->GetTeacherDetails($txt_teacher)){
            $msg="Records Displayed";
            }
            else{
                $msg = "Record display Failed";
            }
            echo $msg;
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
						<h3 class="text-center">Teacher Record</h3>  
					</div>
					<div class=" panel-body">
						<div class="row main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="input-group">
										<input type="text" class="form-control" name="txt_teacher" id="txt_teacher" required placeholder="Search Teacher Here" />
										<span class="error"><?php echo $errtxt_teacher ?></span>
										<span class="input-group-btn bn">
											<button class="btn btn-success" type="submit" name="btnSearch" id="btnSearch">
												<i class="fa fa-search" aria-hidden="true"></i>
											</button>
										</span>
									</div>
								</div>
								&nbsp;
								<hr>
							</form>

							<table class="col-md-12 col-sm-12 col-xs-12 table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Teacher ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone No.</th>
										<th>Address</th>
										<th>Salary (Rs)</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>ali123@gmail.com</td>
										<td>0323-6482157</td>
										<td>Lahore</td>
										<td>40,000</td>
										<td>
											<label class="btn btn-xs btn-danger" id="btn_teachDelete">
												<i class="fa fa-times"></i> Delete
											</label>   
										</td>
									</tr>
									 <tr>
										<td>2</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>ali123@gmail.com</td>
										<td>0323-6482157</td>
										<td>Islamabad</td>
										<td>50,000</td>
										<td>
											<label class="btn btn-xs btn-danger" id="btn_teachDelete">
												<i class="fa fa-times"></i> Delete
											</label>   
										</td>
									</tr>
									 <tr>
										<td>3</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>ali123@gmail.com</td>
										<td>0323-6482157</td>
										<td>Karachi</td>
										<td>35,000</td>
										<td>
											<label class="btn btn-xs btn-danger" id="btn_teachDelete">
												<i class="fa fa-times"></i> Delete
											</label>   
										</td>
									</tr>
									 <tr>
										<td>4</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>ali123@gmail.com</td>
										<td>0323-6482157</td>
										<td>Abbottabad</td>
										<td>30,000</td>
										<td>
											<label class="btn btn-xs btn-danger" id="btn_teachDelete">
												<i class="fa fa-times"></i> Delete
											</label>   
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>ali123@gmail.com</td>
										<td>0323-6482157</td>
										<td>Multan</td>
										<td>30,000</td>
										<td>
											<label class="btn btn-xs btn-danger" id="btn_teachDelete">
												<i class="fa fa-times"></i> Delete
											</label>   
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>ali123@gmail.com</td>
										<td>0323-6482157</td>
										<td>Bahawalpur</td>
										<td>30,000</td>
										<td>
											<label class="btn btn-xs btn-danger" id="btn_teachDelete">
												<i class="fa fa-times"></i> Delete
											</label>   
										</td>
									</tr>
								</tbody>
							</table>
						</div> 
						<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-5">
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<a href="printRecord.php" class="btn btn-success no-print pull-right">Print</a>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
							</div>
					</div>       
				</div>
			</div>
		</div>
		<!-- END PAGE SOURCE -->
	</div>
</body>
</html>
