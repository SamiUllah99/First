<?php
$stClass = "";
$stSection = "";
$stdTest = "";
$btnSubmit = "";

$errstClass ="";
$errstSection = "";
$errstdTest = "";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["stClass"])) {
			$errstClass = "Please select a class";
		} else{
		  $stClass = addslashes($_POST["stClass"]);
		}
		if(empty($_POST["stdSection"])) {
			$errstdSection = "Please select a Section";
		} else{
		  $stdSection = addslashes($_POST["stdSection"]);}
		if(empty($_POST["stdTest"])) {
			$errstdTest = "Please select an option";
		} else{
		  $stdTest = addslashes($_POST["stdTest"]);
}}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Performance - BOG Portal</title>
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
						Student Performance
					</div>
					<div class="panel-body">
					
						<div class="row main-reg">
                            <form method="POST" action="" >
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<select name="stClass"  class="form-control" required ><span class="error"><?php echo $errstClass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
                                </div>
                                
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<select name="stSection"  class="form-control" required ><span class="error"><?php echo $errstSection ?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
                                </div>
								
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<select name="stdTest" id="stdTest" class="form-control" required ><span class="error"><?php echo $errstdTest ?></span>
										<option value="" selected disabled>Select Terms</option>
										<option value="">Test 1</option>
										<option value="">Test 2</option>
										<option value="">Test 3</option>
										<option disabled>---------------------------</option>
										<option value="">First Term</option>
										<option value="">Middle Term</option>
										<option value="">Final Paper</option>
									</select>
                                </div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnOK">Submit</button>
								</div>
								&nbsp;
								
								<hr>
								<br>
                            </form>

                            <table class="col-md-12 col-sm-12 col-xs-12 table table-bordered table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Roll No.</th>
                                        <th>Student Name</th>
                                        <th>English</th>
                                        <th>Math</th>
                                        <th>Physics</th>
                                        <th>Chemistry</th>
                                        <th>Urdu</th>
										<th>Pak Studies</th>
										<th>Total</th>
                                        <th>Obtained</th>
										<th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>50</td>
                                        <td>Ali Raza</td>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>85</td>
                                        <td>87</td>
										<td>75</td>
										<td>650</td>
                                        <td>590</td>
                                        <td>80%</td>
                                        
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>51</td>
                                        <td>Ali Raza</td>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>85</td>
                                        <td>87</td>
										<td>75</td>
										<td>650</td>
                                        <td>550</td>
                                        <td>76%</td>
                                        
                                    </tr>
                                     <tr>
                                        <td>1</td>
                                        <td>50</td>
                                        <td>Ali Raza</td>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>85</td>
                                        <td>87</td>
										<td>75</td>
										<td>650</td>
                                        <td>380</td>
                                        <td>69%</td>
                                        
                                    </tr>
                                     <tr>
                                        <td>1</td>
                                        <td>50</td>
                                        <td>Ali Raza</td>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>85</td>
                                        <td>87</td>
										<td>75</td>
										<td>650</td>
                                        <td>610</td>
                                        <td>90%</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>50</td>
                                        <td>Ali Raza</td>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>85</td>
                                        <td>87</td>
										<td>75</td>
										<td>650</td>
                                        <td>270</td>
                                        <td>45%</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>50</td>
                                        <td>Ali Raza</td>
                                        <td>85</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>85</td>
                                        <td>87</td>
										<td>75</td>
										<td>650</td>
                                        <td>510</td>
                                        <td>58%</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
							
                        </div>  
					</div>
				</div>
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
