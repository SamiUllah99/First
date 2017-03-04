<?php
$class="";
$section="";
$btnSubmit="";

$errclass="";
$errsection="";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["class"])) {
			$errclass = "Please enter a Class";
		} else{
		  $class= addslashes($_POST["class"]);
		}
		if(empty($_POST["section"])) {
			$errsection = "Please enter a Section";
		} else{
		  $section= addslashes($_POST["section"]);
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
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="class"  class="form-control" required >
									<span class="error" ><?php echo $errclass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="section"  class="form-control" required >
									<span class="error" ><?php echo $errsection?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnOK">Submit</button>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									
								</div>
							</div>
							<br>
							<hr>
							<br>
							<table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Reg No.</th>
                                        <th>Student Name</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>201</td>
                                        <td>
											<a href="result.php">Ali Raza</a>
										</td>
                                        <td>90%</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>202</td>
                                        <td>
											<a href="result.php">Ahmed Khan</a>
										</td>
                                        <td>80%</td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
                                        <td>203</td>
                                        <td>
											<a href="result.php">Bilal Khan</a>
										</td>
                                        <td>70%</td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
                                        <td>204</td>
                                        <td>
											<a href="result.php">Rehan Malik</a>
										</td>
                                        <td>75%</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>205</td>
                                        <td>
											<a href="result.php">Umair Malik</a>
										</td>
                                        <td>85%</td>
                                    </tr>
                                </tbody>
                            </table>
						</form>
					</div>
				</div>      <!-- Panel End -->
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
