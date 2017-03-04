<?php
$teacherID ="";
$teacherName ="";
$notifyTitle ="";
$notifyDetail = "";
$txt_notifyTitle = "";
$txt_notifyDes = "";
$btnSubmit ="";
$btnSubmit1 ="";

$errteacherID ="";
$errteacherName ="";
$errnotifyTitle ="";
$errnotifyDetail = "";
$errtxt_notifyTitle = "";
$errtxt_notifyDes = "";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);
		if(empty($_POST["teacherName"])) {
			$errteacherName = "Please enter Name";
		} else{
		  $teacherName = addslashes($_POST["teacherName"]);
		  // check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$teacherName)) {
				$errteacherName = "Only letters and white spaces allowed"; 
			}
		}
		if(empty($_POST["teacherID"])) {
				$errteacherID = "Please Enter ID";
			} else{
			  $teacherID = addslashes($_POST["teacherID"]);
			  if(!preg_match("/^[0-9 ]*$/",$teacherID))
				{
					$errteacherID = "Please Enter a vaild ID";
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
if(isset($_POST["btnSubmit1"])) {
			$btnSubmit1 = addslashes($_POST["btnSubmit1"]);
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
						<h3 class="text-center">Create Notification</h3>  
					</div>
					<div class=" panel-body">
						<div class="row main-reg">
						
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Individual</a></li>
								<li><a data-toggle="tab" href="#menu1">All Teachers</a></li>
							</ul>
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<form method="POST" action="" class="text-center" autocomplete="on">
										&nbsp;
										<div class="row notiT">
											<div class="col-lg-3 col-xs-3 ">
												<label for="name" class="cols-sm-2">Teacher ID</label>
											</div>

											<div class="col-lg-9 col-xs-9">
											<input type="number" required min="0" list="teacherID" class="form-control" name="teacherID" name="teacherID" placeholder="Enter Teacher ID" value="<?php echo $teacherID ?>" >
											<span class="error"><?php echo $errteacherID ?></span>
												<datalist id="teacherID">
													<option value="101">
													<option value="102">
													<option value="103">
													<option value="104">
													<option value="105">
												</datalist>
											</div>
										</div>
										&nbsp;
										<div class="row notiT">
											<div class="col-lg-3 col-xs-3 ">
												<label for="name" class="cols-sm-2">Teacher Name</label>
											</div>

											<div class="col-lg-9 col-xs-9">
												<input type="text" class="form-control" name="teacherName" id="teacherName" placeholder="Enter Teacher Name" value="<?php echo $teacherName ?>" />
												<span class="error"><?php echo $errteacherName ?></span>
											</div>  
										</div>
										&nbsp;
										<div class="row notiT">
											<div class="col-lg-3 col-xs-3 ">
												<label for="name" class="cols-sm-2">Notification Title</label>
											</div>

											<div class="col-lg-9 col-xs-9">
												<input type="text" class="form-control" name="notifyTitle" id="notifyTitle" required placeholder="Notification Title" value="<?php echo $notifyTitle ?>" />
												<span class="error"><?php echo $errnotifyTitle ?></span>
											</div>  
										</div>
										&nbsp;
										<div class="row notiDes">
											<div class="col-lg-3 col-xs-3">
												<center><b>Notification</b></center>
											</div>

											<div class="col-lg-9 col-xs-9">
												<textarea name="notifyDetail" id="notifyDetail" class="form-control" placeholder="Notification Message" rows="7" required="required" value="<?php echo $notifyDetail ?>" ></textarea>
												<span class="error"><?php echo $errnotifyDetail ?></span>
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
												<button type="submit" class="btn btn-success pull-right" name="btnSubmit" id="btn_createNotify">Create</button>
												
											</div>
										</div>
									</form>
								</div>
								<div id="menu1" class="tab-pane fade">
									
									<form method="POST" action="" class="text-center">
										&nbsp;
										<div class="row notiT">
											<div class="col-lg-3 col-xs-3 ">
												<label for="name" class="cols-sm-2">Notification Title</label>
											</div>

											<div class="col-lg-9 col-xs-9">
												<input type="text" class="form-control" name="txt_notifyTitle" id="txt_notifyTitle" required placeholder="Notification Title" value="<?php echo $txt_notifyTitle ?>" />
												<span class="error"><?php echo $errtxt_notifyTitle ?></span>
											</div>  
										</div>
										&nbsp;
										<div class="row notiDes">
											<div class="col-lg-3 col-xs-3">
												<center><b>Notification</b></center>
											</div>

											<div class="col-lg-9 col-xs-9">
												<textarea name="txt_notifyDes" id="txt_notifyDes" class="form-control" placeholder="Notification Message" rows="7" required="required" value="<?php echo $txt_notifyDes ?>" ></textarea>
												<span class="error"><?php echo $errtxt_notifyDes ?></span>
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
												<button type="submit" class="btn btn-success pull-right" name="btnSubmit1" id="btn_createNotify">Create</button>
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
