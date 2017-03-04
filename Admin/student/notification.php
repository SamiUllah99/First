<?php
$stdName ="";
$notifyTitle ="";
$notifyDetail ="";
$btnCreate = "";
$txt_notifyTitle = "";
$txt_notifyDes = "";
$btn_createNotify ="";
$stdid ="";

$errstdName = "";
$errnotifyDetail ="";
$errnotifyTitle ="";
$errtxt_notifyDes= "";
$errtxt_notifyTitle= "";
$errstdid = "";


if(isset($_POST["btnCreate"])) {
			$btnCreate = addslashes($_POST["btnCreate"]);
		if(empty($_POST["stdName"])) {
			$errstdName = "Please enter Name";
		} else{
		  $stdName = addslashes($_POST["stdName"]);
		  // check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$stdName)) {
				$errstdName = "Only letters and white spaces allowed"; 
			}
		}
		if(empty($_POST["stdid"])) {
				$errstdid = "Please Enter ID";
			} else{
			  $stdid = addslashes($_POST["stdid"]);
			  if(!preg_match("/^[1-9 ]*$/",$stdid))
				{
					$errstdid = "Please Enter a vaild ID";
				}
			}
			if(empty($_POST["notifyDetail"])) {
				$errnotifyDetail = "Please Enter Details";
			} else{
			  $notifyDetail = addslashes($_POST["notifyDetail"]);
			}
			if(empty($_POST["notifyTitle"])) {
				$errnotifyTitle = "Please Enter Title";
			} else{
			  $notifyTitle = addslashes($_POST["notifyTitle"]);
			}
	}
if(isset($_POST["btn_createNotify"])) {
			$btnUpload = addslashes($_POST["btn_createNotify"]);
			if(empty($_POST["txt_notifyDes"])) {
				$errtxt_notifyDes = "Please enter Description";
			} else{
			  $txt_notifyDes = addslashes($_POST["txt_notifyDes"]);
			}
			if(empty($_POST["txt_notifyTitle"])) {
				$errtxt_notifyTitle= "Please Enter Title";
			} else{
			  $txt_notifyTitle = addslashes($_POST["txt_notifyTitle"]);
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
                        <h3 class="text-center">Create Notification</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="row main-reg">
						
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Individual</a></li>
								<li><a data-toggle="tab" href="#menu1">All Students</a></li>
							</ul>
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<form method="POST" action="" autocomplete="on">
										<br>&nbsp;
										<div class="row noti">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<center><label for="name" class="cols-sm-2">Student ID</label></center>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
												<input type="number" class="form-control" name="stdid" id="stdid" min="0" required placeholder="Enter Student ID" value="<?php echo $stdid ?>"/><span class="error"><?php echo $errstdid ?></span>
											</div>    
										</div>
										&nbsp;
										<div class="row noti">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<center><label for="name" class="cols-sm-2">Student Name</label></center>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
												<input type="text" class="form-control" name="stdName" id="stdName" required placeholder="Enter Student Name"value="<?php echo $stdName ?>"/><span class="error"><?php echo $errstdName ?></span>
											</div>    
										</div>
										&nbsp;
										<div class="row noti">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<center><label for="name" class="cols-sm-2">Notification Title</label></center>
											</div>

											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
												<input type="text" class="form-control" name="notifyTitle" id="notifyTitle" required placeholder="Notification Title"value="<?php echo $notifyTitle ?>"/><span class="error"><?php echo $errnotifyTitle?></span>
											</div>    
										</div>
										&nbsp;
										<div class="row noti">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<center><b>Notification Description</b></center>
											</div>

											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
												<textarea id="notifyDetail" name="notifyDetail" class="form-control" placeholder="Notification Description" rows="7" required value="<?php echo $notifyDetail?>"></textarea><span class="error"><?php echo $errnotifyDetail?></span>
											</div>
										</div>   

										&nbsp;
										<hr>
										<div class="row">
											<div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
												<div class="alert alert-success alert-dismissible" id="successAlert">
													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													Notification has been created Successfully!
												</div>
											</div>
											<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
												<button type="submit" class="btn btn-success pull-right" name="btnCreate" id="btnCreate">Create</button>
											</div>
										</div>
									</form>
								</div>
								
								
								<div id="menu1" class="tab-pane fade">
									
									<form method="POST" action="" class="text-center">
										<br>&nbsp;
										<div class="row notiT">
											<div class="col-lg-3 col-xs-3 ">
												<label for="name" class="cols-sm-2">Notification Title</label>
											</div>

											<div class="col-lg-9 col-xs-9">
												<input type="text" class="form-control" name="txt_notifyTitle" id="txt_notifyTitle" required placeholder="Notification Title"value="<?php echo $txt_notifyTitle ?>"/><span><?php echo $errtxt_notifyTitle ?></span>
											</div>  
										</div>
										&nbsp;
										<div class="row notiDes">
											<div class="col-lg-3 col-xs-3">
												<center><b>Notification</b></center>
											</div>

											<div class="col-lg-9 col-xs-9">
												<textarea name="txt_notifyDes" id="txt_notifyDes" class="form-control" placeholder="Notification Message" rows="7" required="required" value="<?php echo $txt_notifyDes ?>"></textarea><span><?php echo $errtxt_notifyDes ?></span>
											</div>
										</div>   
										&nbsp;
										<hr>
										<div class="row">
											<div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
												<div class="alert alert-success alert-dismissible" id="successAlert">
													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													Notification has been created Successfully!
												</div>
											</div>
											<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
												<button type="submit" class="btn btn-success pull-right" name="btn_createNotify" id="btn_createNotify">Create</button>
												
											</div>
										</div>
										
									</form>
								</div>
                            </div>
							
                        </div> 
                    </div>       
                </div>
            </div>
        </div>
	</div>
<!-- END PAGE SOURCE -->
</body>
</html>
