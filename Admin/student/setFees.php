<?php
$classOne = "";
$classTwo = "";
$classThree = "";
$classFour = "";
$classFive = "";
$classSix = "";
$classSeven = "";
$classEight = "";
$classNine = "";
$classTen = "";
$btnSetFee = "";

$errclassOne = "";
$errclassTwo = "";
$errclassThree = "";
$errclassFour = "";
$errclassFive = "";
$errclassSix = "";
$errclassSeven = "";
$errclassEight = "";
$errclassNine = "";
$errclassTen = "";

if(isset($_POST["btnSetFee"])) {
			$btnSetFee = addslashes($_POST["btnSetFee"]);	
		if(empty($_POST["classOne"])) {
			$errclassOne = "Please Set Fee";
		} else{
		  $classOne = addslashes($_POST["classOne"]);
		}
		if(empty($_POST["classTwo"])) {
			$errclassTwo = "Please Set Fee";
		} else{
		  $classTwo = addslashes($_POST["classTwo"]);
		}
		if(empty($_POST["classThree"])) {
			$errclassThree = "Please Set Fee";
		} else{
		  $classThree = addslashes($_POST["classThree"]);
		}
		if(empty($_POST["classFour"])) {
			$errclassFour = "Please Set Fee";
		} else{
		  $classFour = addslashes($_POST["classFour"]);
		}
		if(empty($_POST["classFive"])) {
			$errclassFive = "Please Set Fee";
		} else{
		  $classFive = addslashes($_POST["classFive"]);
		}
		if(empty($_POST["classSix"])) {
			$errclassSix = "Please Set Fee";
		} else{
		  $classSix = addslashes($_POST["classSix"]);
		}
		if(empty($_POST["classSeven"])) {
			$errclassSeven = "Please Set Fee";
		} else{
		  $classSeven = addslashes($_POST["classSeven"]);
		}
		if(empty($_POST["classEight"])) {
			$errclassEight = "Please Set Fee";
		} else{
		  $classEight = addslashes($_POST["classEight"]);
		}
		if(empty($_POST["classNine"])) {
			$errclassNine = "Please Set Fee";
		} else{
		  $classNine = addslashes($_POST["classNine"]);
		}
		if(empty($_POST["classTen"])) {
			$errclassTen = "Please Set Fee";
		} else{
		  $classTen = addslashes($_POST["classTen"]);
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Online Portal</title>
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
                        <h3 class="text-center">Set Fees for all Classes</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
                            <form method="POST" action="" autocomplete="on">
								
                                &nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class One</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classOne" id="classOne" required placeholder="Enter Fees"/><span class="error"><?php echo $errclassOne ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Two</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classTwo" id="classTwo" required placeholder="Enter Fees"/><span class="error"><?php echo $errclassTwo ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Three</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classThree" id="classThree" required placeholder="Enter Fees"/><span class="error"><?php echo $errclassThree ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>   	
								
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Four</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classFour" id="classFour" required placeholder="Enter fees"/><span class="error"><?php echo $errclassFour ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Five</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classFive" id="classFive" required placeholder="Enter Fees"/><span class="error"><?php echo $errclassFive ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Six</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classSix" id="classSix" required placeholder="Enter Fees"/><span class="error"><?php echo $errclassSix ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Seven</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classSeven" id="classSeven" required placeholder="Enter Fees"/><span class="error"><?php echo $errclassSeven ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>   	
								
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Eight</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classEight" id="classEight" required placeholder="Enter fees"/><span class="error"><?php echo $errclassEight ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								&nbsp;
								
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Nine</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classNine" id="classNine" required placeholder="Enter Fees"/><span class="error"><?php echo $errclassNine ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>   	
								
								&nbsp;	
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Ten</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="number" min="0" class="form-control" name="classTen" id="classTen" required placeholder="Enter fees"/><span class="error"><?php echo $errclassTen ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								
								<hr>
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-9">
                                        <button type="submit" class="btn btn-success pull-right" name="btnSetFee" id="btnSetFee">Set Fees</button>
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
