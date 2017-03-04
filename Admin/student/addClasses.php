<?php
require('C:Wamp/www/LSIS/Classes/class.Classroom.php');
require('C:Wamp/www/LSIS/Classes/class.Database.php');
$obj_Classroom = new Classroom();


if($obj_Classroom->GetClassDetails()){
            $msg="Registration Complete";
            }else{
                $msg = "Registration failed";
            }
            echo $msg;




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Online Portal</title>
    <?php require('../inc/links.php');  ?>
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
                        <h3 class="text-center">Add New Class</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
							<form method="POST" action="" >
								
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<a href="newClasses.php" class="btn btn-success no-print pull-right"> Add Class</a>
									</div>
								</div>
								&nbsp;
								<hr>
                            </form>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
										<th>Class</th>
                                        <th>Sections</th>
                                        <th>Add Section</th>
                                        <th>Edit Section</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
										<td>1st</td>
                                        <td>0</td>
                                        <td>
											<a href="addSection.php" class="btn btn-xs btn-success" id="addClass">
												Add Section
                                            </a>
										</td>
                                        <td>
											<a href="editClasses.php" class="btn btn-xs btn-success" id="editClass">
												Edit Section
                                            </a>
										</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
										<td>2nd</td>
                                        <td>0</td>
                                        <td>
											<a href="addSection.php" class="btn btn-xs btn-success" id="addClass">
												Add Section
                                            </a>
										</td>
                                        <td>
											<a href="editClasses.php" class="btn btn-xs btn-success" id="editClass">
												Edit Section
                                            </a>
										</td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
										<td>3rd</td>
                                        <td>0</td>
                                        <td>
											<a href="addSection.php" class="btn btn-xs btn-success" id="addClass">
												Add Section
                                            </a>
										</td>
                                        <td>
											<a href="editClasses.php" class="btn btn-xs btn-success" id="editClass">
												Edit Section
                                            </a>
										</td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
										<td>7th</td>
                                        <td>3</td>
                                        <td>
											<a href="addSection.php" class="btn btn-xs btn-success" id="addClass">
												Add Section
                                            </a>
										</td>
                                        <td>
											<a href="editClasses.php" class="btn btn-xs btn-success" id="editClass">
												Edit Section
                                            </a>
										</td>
                                    </tr>
                                </tbody>
                            </table>
							
                        </div> 
                    </div>       
                </div>
            </div>
        </div>
    <!-- END PAGE SOURCE -->
	</div>
</body>
</html>
