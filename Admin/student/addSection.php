<?php
require('C:/wamp/www/SIS/Classes/class.Section.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Section = new Section();

$addSection="";
$Section="";

$errSection="";

if(isset($_POST["addSection"])) {
			$addSection= addslashes($_POST["addSection"]);	

		if(empty($_POST["Section"])) {
			$errSection = "Please enter Section";
		} else{
		  $Section= addslashes($_POST["Section"]);
		}
            $obj_Section->Title =$Section;
            $obj_Section->Desc =$Desc;
            if($obj_Section->RegisterSection()){
            if($obj_Section->SectionAlreadyExists($Section,$Desc)){
            $msg="Section Added";
            }
            else{
                $msg = "Section Addition Failed";
            }}
            echo $msg;

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
                        <h3 class="text-center">Add Section</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
                            <form method="POST" action="" >
								
                                &nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center><strong>Class Title</strong></center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <label class="label label-success" name="classTitle" id="classTitle" style="font-size:14px;">7th</label>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								
								&nbsp;
                                <div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <center>
											<strong>Section</strong>
										</center>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" class="form-control" name="Section" id="Section" required placeholder="Enter Section"/>
										<span class="error" ><?php echo $errSection ?></span>
                                    </div>
									<div class="col-lg-3"></div>
                                </div>
								<br>
								<hr>
								<div class="row ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-9">
                                        <button type="submit" class="btn btn-success pull-right" name="addSection" id="addSection">Add Section</button>
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
