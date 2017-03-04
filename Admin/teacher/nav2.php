<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.html">Admin</a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
	
		<li>
			<a href="questionForum.php"><i class="fa fa-calendar" aria-hidden="true"></i> Discussion <span class="sr-only"></span></a>
		</li>
		<li>
			<a href="../student/schedule.php"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule <span class="sr-only"></span></a>
		</li>
		<li>
			<a href="../student/events.php"><i class="fa fa-clock-o" aria-hidden="true"></i> Create Event <span class="sr-only"></span></a>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"><span class="badge bg-green">6</span></i> <b class="caret"></b></a>
			<ul class="dropdown-menu message-dropdown">
				<li class="message-preview">
					<a href="#">
						<div class="media">
							<span class="pull-left">
								<img class="media-object" src="http://placehold.it/50x50" alt="">
							</span>
							<div class="media-body">
								<h5 class="media-heading"><strong>John Smith</strong>
								</h5>
								<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class="message-preview">
					<a href="#">
						<div class="media">
							<span class="pull-left">
								<img class="media-object" src="http://placehold.it/50x50" alt="">
							</span>
							<div class="media-body">
								<h5 class="media-heading"><strong>John Smith</strong>
								</h5>
								<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class="message-preview">
					<a href="#">
						<div class="media">
							<span class="pull-left">
								<img class="media-object" src="http://placehold.it/50x50" alt="">
							</span>
							<div class="media-body">
								<h5 class="media-heading"><strong>John Smith</strong>
								</h5>
								<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class="message-footer">
					<a href="#">Read All New Messages</a>
				</li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ali Rehman <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="../student/settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
				</li>
				<li>
					<a href="../student/newAdmin.php"><i class="fa fa-fw fa-user"></i>  New Admin</a>
				</li>
				
				<li class="divider"></li>
				<li>
					<a href="../index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
				</li>
			</ul>
		</li>
	</ul>
	
	
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			
			<div class="profiles">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5  profile-userpic">
					<center><img src="../images/adm.jpg" class="img-responsive img-circle img-thumbnail" alt="Admin"></center>
				</div>
				<div class="col-lg-7 col-lg-7 col-lg-7 col-lg-7 profile-usertitle">
					<div class="profile-usertitle-name">
						<h4> Hammad</h4>
					</div>
					<div class="profile-usertitle-job">
						<h5>Web Developer </h5>
					</div>
				</div>
			</div>
			<li>
				<a href="../student/dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li>
			<li>
				<a data-toggle="collapse" data-target="#demo"> Student <i class="fa fa-fw fa-chevron-down pull-right"></i></a>
				<ul id="demo" class="collapse">
					<li>
						<a href="../student/registerStudent.php">- Register Student</a>
					</li>
					<li>
						<a href="../student/updateStudent.php">- Update Student</a>
					</li>
					<li>
						<a href="../student/attendance.php">- Attendance</a>
					</li>
					<li>
						<a href="../student/notes.php">- Upload Notes</a>
					</li>
					<li>
						<a href="../student/notification.php">- Create Notification</a>
					</li>
					<li>
						<a href="../student/marks.php">- Upload Marks</a>
					</li>
					<li>
						<a href="../student/addFees.php">- Add Fees</a>
					</li>
					<li>
						<a href="../student/feeHistory.php">- Fee History</a>
					</li>
					<li>
						<a href="../student/studentRecord.php">- Student Record</a>
					</li>
				</ul>
			</li>
			<li>
				<a data-toggle="collapse" data-target="#demo1"> Teacher <i class="fa fa-fw fa-chevron-down pull-right"></i></a>
				<ul id="demo1" class="collapse in">
					<li>
						<a href="addTeacher.php">- Register Teacher</a>
					</li>
					<li>
						<a href="updateTeacher.php">- Update Teacher</a>
					</li>
					<li>
						<a href="teacherAttendance.php">- Attendance</a>
					</li>
					<li>
						<a href="teacherSalary.php">- Teacher Salary</a>
					</li>
					<li>
						<a href="teacherNotification.php">- Create Notification</a>
					</li>
					<li>
						<a href="teacherRecord.php">- Teacher Record</a>
					</li>
					<li>
						<a href="teacherSettings.php">- Teacher Settings</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#demo2"> Bus Driver <i class="fa fa-fw fa-chevron-down pull-right"></i></a>
				<ul id="demo2" class="collapse">
					<li>
						<a href="../busdriver/addDriver.php">- Register Driver</a>
					</li>
					<li>
						<a href="../busdriver/updateDriver.php">- Update Driver</a>
					</li>
					 <li>
						<a href="../busdriver/busRoute.php">- Allocate Routes</a>
					</li>
					<li>
						<a href="../busdriver/driverSalary.php">- Driver Salary</a>
					</li>
					<li>
						<a href="../busdriver/deductionSalary.php">- Set Salary Deduction</a>
					</li>
					<li>
						<a href="../busdriver/driverRecord.php">- Driver Record</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="../student/staffRecord.php"> Lower Staff </a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>