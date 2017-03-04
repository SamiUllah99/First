<?php
$txt_decSalary="";
$btn_salaryDec ="";

$errtxt_decSalary="";

if(isset($_POST["btn_salaryDec"])) {
			$btn_salaryDec= addslashes($_POST["btn_salaryDec"]);
		if(empty($_POST["txt_decSalary"])) {
			$errtxt_decSalary = "Please a Salary Decrement";
			
		} else{
		  $txt_decSalary= addslashes($_POST["txt_decSalary"]);
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
						<h3 class="text-center">Salary Deduction per Absent</h3>  
					</div>
					<div class=" panel-body">
						<div class="main-reg">
							<form method="POST" action="" autocomplete="on">
								
								&nbsp;	
								<div class="row ">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<center><strong>Salary Decrement</strong></center>
									</div>
									<div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
										<input type="number" class="form-control" name="txt_decSalary" id="txt_decSalary" required min="0" placeholder="Enter Amount for Decrement in Salary"/>
										<span class="error"><?php echo $errtxt_decSalary ?></span>
									</div>
									<div class="col-lg-3"></div>
								</div> 
								&nbsp;
								<hr>
								<div class="row ">
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Decrement has been done Successfully!
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<button type="submit" class="btn btn-success" name="btn_salaryDec" id="btn_salaryDec">Set Amount</button>
									</div>
									<div class="col-lg-3 "></div>
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
