<?php
$notesTitle = "";
$notesDetail = "";
$btnUpload = "";
$btn_notesFile="";

$errnotesDetail = "";
$errnotesTitle = "";

		if(isset($_POST["btnUpload"])) {
			$btnUpload = addslashes($_POST["btnUpload"]);
			$btn_notesFile = addslashes($_POST["btn_notesFile"]);
		if(empty($_POST["notesTitle"])) {
			$errnotesTitle = "Please enter a title";
		} else{
		  $notesTitle = addslashes($_POST["notesTitle"]);
		}
		if(empty($_POST["notesDetail"])) {
			$errnotesDetail = "Please Enter Details";
		} else{
		  $notesDetail = addslashes($_POST["notesDetail"]);
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
                        <h3 class="text-center">Upload Subject Notes</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
                            <form method="POST" action="" autocomplete="on">
                                
								<div class="row noti">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<center><strong>Subject:</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<label class="label label-success" id="subject" name="subject" style="font-size:12px;">English</label>
                                    </div> 
									
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<center><strong>Date:</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
										<label class="label label-success" id="subject" name="subject" style="font-size:12px;">06/12/2016</label>
                                    </div>    
                                </div>   
								
								<hr>&nbsp;
                                <div class="row noti">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<center><strong>Notes Title</strong></center>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="notesTitle" id="notesTitle" required placeholder="Notes Title"/><span class="error"><?php echo $errnotesTitle ?></span>
                                    </div>    
                                </div>   
								
                                &nbsp;
                                <div class="row notiD">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <center><strong>Notes Description</strong></center>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
										<textarea name="notesDetail" id="notesDetail" class="form-control" rows="7" required="required" placeholder="Notes Description"></textarea><span class="error"><?php echo $errnotesDetail ?></span>
                                    </div>
                                </div>   

                                &nbsp;
                                <hr>
								
								<div class="row form-group">
									<div class="col-lg-3 col-xs-3">
										<center><strong>File input</strong></center>
									</div>
									<div class="col-lg-9 col-xs-9">
										<input type="file" class="form-control-file" id="btn_notesFile" name="btn_notesFile" aria-describedby="fileHelp">
									</div>
								</div>
                                <hr>
								
								<div class="row">
									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Notes have been uploaded Successfully!
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<button type="submit" class="btn btn-success pull-right" name="btnUpload" id="btnUpload">Upload</button>`
									</div>
								</div>
								
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