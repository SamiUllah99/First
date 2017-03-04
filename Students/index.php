<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Student Portal</title>
	<?php require('inc/links.php');   ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
				<!-- Navbar Start-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 sidebars">	
				<?php require('nav.php'); ?>
			</div>
				<!-- Navbar End-->
			
			<!-- Main Contents -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<br>
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						News / Notifications:
						<a href="#" class="link-open pull-right">Open All</a>
					</div>
					<div class="panel-body">
					
						<div class="row new-notify" >
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<p id="notifications" name="notifications">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<label class="noti-date pull-right" id="notifyDate" name="notifyDate"> 20 Dec, 2016</label>
							</div>
							
						</div>
						
						<div class="row new-notify" >
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<p id="notifications" name="notifications">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
								<label class="noti-date pull-right" id="notifyDate" name="notifyDate"> 20 Dec, 2016</label>
							</div>
							
						</div>
						
					</div>
				</div>
				
				
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Summary
					</div>
					<div class="panel-body">
						<br>
						<div class="col-lg-4 text-center">
							<center>
								<div class="panel panel-default pan">
									<div class="panel-heading head1">
										<label id="totalDays" name="totalDays">165</label>
									</div>
									<div class="panel-body">
										<label class="labels">Total Days</label>
									</div>
								</div>
							</center>
						</div>
						
						<div class="col-lg-4 text-center">
							<center>
								<div class="panel panel-default pan">
									<div class="panel-heading head2">
										<label id="totalPresents" name="totalPresents">159</label>
									</div>
									<div class="panel-body">
										<label class="labels">Presents</label>
									</div>
								</div>
							</center>
						</div>
						
						<div class="col-lg-4 text-center">
							<center>
								<div class="panel panel-default pan">
									<div class="panel-heading head3">
										<label id="totalAbsents" name="totalAbsents">7</label>
									</div>
									<div class="panel-body">
										<label class="labels">Absents</label>
									</div>
								</div>
							</center>
						</div>
						
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Information
					</div>
					<div class="panel-body">
						
						<div class="col-lg-6">
						
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Name:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="stdName" name="stdName"> Ali Raza</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">DoB:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="stdDob" name="stdDob"> 12-11-1995</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Gender:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="gender" name="gender"> Male</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">S/D of:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="fatherName" name="fatherName"> Raza Malik</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Contact:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="contact" name="contact"> 09923486542 </label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Address:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="address" name="address"> CB 58/37 Shah Zaman Colony PMA Road, Abbottabad</label>
								</div>
							</div>
							&nbsp;
						</div>
						
						<div class="col-lg-6">
						
							<div class="form-group">
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
									<label class="text-muted">Emergency Contact:</label>
								</div>
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
									<label id="emergencyName" name="emergencyName"> Faysal Ahmed</label>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
								</div>
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
									<label id="emergencyContact" name="emergencyContact"> 0992 3645876</label>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
