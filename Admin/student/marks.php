<?php
$stdClass = "";
$stdSection = "";
$stdTest = "";
$btnSubmit = "";

$errstdClass ="";
$errstdSection = "";
$errstdTest = "";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);	
		if(empty($_POST["stdClass"])) {
			$errstdClass = "Please select a class";
		} else{
		  $stdClass = addslashes($_POST["stdClass"]);
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
<html lang="en">
<head>
    <title>Marks - Student Online Portal</title>
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
					
				<?php require('../inc/nav.php');  ?>   
			</div>
				<!-- END Nav -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">Marks</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="row main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stdClass" id="stdClass" class="form-control" required ><span class="error"><?php echo $errstdClass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
                                </div>
                                
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<select name="stdSection" id="stdSection" class="form-control" required ><span class="error"><?php echo $errstdSection ?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
                                </div>
								
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
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
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnSubmit">Submit</button>
									<a href="updateMarks.php" class="btn btn-success pull-right" name="btnSubmit" id="btnSubmit">Update Marks</a>
								</div>
								&nbsp;
								<hr>
                            </form>
						

                            <table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-lg-3">#</th>
                                        <th class="col-lg-6">Subjects</th>
                                        <th class="col-lg-3">Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="uploadMarks.php">English</a></td>
                                        <td>90%</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td><a href="uploadMarks.php">Pak Studies</a></td>
                                        <td>80%</td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
                                        <td><a href="uploadMarks.php">Physics</a></td>
                                        <td>70%</td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
                                        <td><a href="uploadMarks.php">Chemistry</a></td>
                                        <td>75%</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><a href="uploadMarks.php">Mathematics</a></td>
                                        <td>85%</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><a href="uploadMarks.php">Urdu</a></td>
                                        <td>76%</td>
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
