<?php
require('C:/wamp/www/SIS/Classes/class.Driver.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Driver = new Driver(); 

$driverID ="";
$txt_driver ="";
$btnSearch ="";
$btnSubmit ="";

$errdriverID ="";
$errtxt_driver ="";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);
		if(empty($_POST["driverID"])) {
			$errdriverID = "Please select a Driver ID";
		} else{
		  $driverID = addslashes($_POST["driverID"]);
		}
		if(empty($_POST["txt_driver"])) {
			$errtxt_driver = "Please Enter a Name";
		} else{
		  $txt_driver = addslashes($_POST["txt_driver"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$txt_driver)) {
		  $errtxt_driver = "Only letters and white space allowed"; 
			}
		}
	$obj_Driver->driverID=$driverID;

	if($obj_Driver->GetDriverDetails($driverID)){
            $msg="Driver Records Displayed";
            }
            else{
                $msg = "Driver Records Display Failed";
            }
            echo $msg;  
    }
if(isset($_POST["btnSearch"])) {
			$btnSearch = addslashes($_POST["btnSearch"]);
		if(empty($_POST["driverID"])) {
			$errdriverID = "Please select a Driver ID";
		} else{
		  $driverID = addslashes($_POST["driverID"]);
		}
		if(empty($_POST["txt_driver"])) {
			$errtxt_driver = "Please Enter a Name";
		} else{
		  $txt_driver = addslashes($_POST["txt_driver"]);
		  // check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$txt_driver)) {
		  $errtxt_driver = "Only letters and white space allowed"; 
			}
		}
			if($obj_Driver->GetDriverDetails($driverID)){
            $msg="Driver Records Displayed";
            }
            else{
                $msg = "Driver Records Display Failed";
            }
            echo $msg; 
    }	
    	if($obj_Driver->GetAllDrivers()){
            $msg="All Driver Records Displayed";
            }
            else{
                $msg = "All Driver Records Display Failed";
            }
            echo $msg;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Driver</title>
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
					
				<?php require('nav3.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="text-center">Driver Record</h3>  
					</div>
					<div class=" panel-body">
						<div class="row main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="driverID" class="form-control" required >
									<span class="error"><?php echo $errdriverID ?></span>
										<option value="" selected disabled>Select Driver ID</option>
										<option value="">51</option>
										<option value="">52</option>
										<option value="">53</option>
									</select>
								</div>
								
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnOK">Submit</button>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="input-group">
										<input type="text" class="form-control" name="txt_driver" id="txt_driver" placeholder="Search Driver Here" required/>
										<span class="error"><?php echo $errtxt_driver ?></span>
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
										<th>Driver ID</th>
										<th>Driver Name</th>
										<th>Bus Number</th>
										<th>Routes</th>
										<th>Salary (Rs)</th>
										<th>Phone No.</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>50</td>
										<td>Ali Raza</td>
										<td>345</td>
										<td>Mandian</td>
										<td>10,000</td>
										<td>0323-6482157</td>
										<td>Lahore</td>
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
										<td>436</td>
										<td>Mansehra</td>
										<td>12,000</td>
										<td>0323-6482157</td>
										<td>Islamabad</td>
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
										<td>558</td>
										<td>Mandian</td>
										<td>15,000</td>
										<td>0323-6482157</td>
										<td>Karachi</td>
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
										<td>975</td>
										<td>Mandian</td>
										<td>17,000</td>
										<td>0323-6482157</td>
										<td>Abbottabad</td>
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
										<td>128</td>
										<td>Mandian</td>
										<td>18,000</td>
										<td>0323-6482157</td>
										<td>Multan</td>
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
										<td>663</td>
										<td>Mandian</td>
										<td>20,000</td>
										<td>0323-6482157</td>
										<td>Bahawalpur</td>
										<td>
											<label class="btn btn-xs btn-danger" id="btn_teachDelete">
												<i class="fa fa-times"></i> Delete
											</label>   
										</td>
									</tr>
								</tbody>
							</table>
						</div> 
					</div>       
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE SOURCE -->
</body>
</html>
