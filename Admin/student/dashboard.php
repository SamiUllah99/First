<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Portal</title>
    <?php require('../inc/links.php');  ?>
</head>
<body>
    <div id="wrapper">
		<?php require('../inc/nav.php'); ?>
		
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"> Overall Progress</h3>
							</div>
							<div class="panel-body">
							
								<div class="col-lg-3">
								
									<div class="contentss box1">
										<div class="col-xs-3">
											<h2 id="totalStudents" name="totalStudents" class="heads1">500</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br><br>
											<div class="heads2">Total Students</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3">
									<div class="contentss box2">
										<div class="col-xs-3">
											<h2 id="totalTeachers" name="totalTeachers" class="heads1">500</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br><br>
											<div class="heads2">Total Teachers</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3">
									<div class="contentss box3">
										<div class="col-xs-3">
											<h2 id="totalAdmins" name="totalAdmins" class="heads1">2</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br><br>
											<div class="heads2">Total Admins</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3">
									<div class="contentss box4">
										<div class="col-xs-3">
											<h2 id="totalBogs" name="totalBogs" class="heads1">2</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br><br>
											<div class="heads2">Total BOGs</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div><br><br>
                <!-- /.row -->
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Daily Progress</h3>
                            </div>
                            <div class="panel-body">
							
								<div class="col-lg-3">
								
									<div class="contentss box1">
										<div class="col-xs-3">
											<h2 id="presentStudents" name="presentStudents" class="heads1">350</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br>
											<div class="heads2">Total Students</div>
											<div>Present</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3">
									<div class="contentss box2">
										<div class="col-xs-3">
											<h2 id="absentStudents" name="absentStudents" class="heads1">150</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br>
											<div class="heads2">Total Students</div>
											<div>Absents</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3">
									<div class="contentss box3">
										<div class="col-xs-3">
											<h2 id="presentTeachers" name="presentTeachers" class="heads1">450</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br>
											<div class="heads2">Total Teachers</div>
											<div>Present</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3">
									<div class="contentss box4">
										<div class="col-xs-3">
											<h2 id="absentTeachers" name="absentTeachers" class="heads1">50</h2>
										</div>
										<div class="col-xs-9 text-right">
											<br><br>
											<div class="heads2">Total Teachers</div>
											<div>Absents</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
