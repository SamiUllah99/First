<?php
require('C:/wamp/www/SIS/Classes/class.StudentAttendance.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');
$obj_StudentAttendance = new StudentAttendance();

$stClass = "";
$stSection ="";
$attendanceDate = "";
$btnSubmit = "";
$btnOK = "";
$txt_student = "";
$options = "";
$btnSearch = "";

$errstSection = "";
$errstclass = "";
$errattendanceDate = "";
$errtxt_student = "";
$starray = array();

	if(isset($_POST["submit"])) {
		
		$btnOK = addslashes($_POST["btnOK"]);
		$btnSubmit = addslashes($_POST["btnSubmit"]);
		$btnSearch = addslashes($_POST["btnSearch"]);
		
		if(empty($_POST["stClass"])) {
			$errstclass = "Please select a class";
		} else{
		  $stClass = addslashes($_POST["stClass"]);
		}
		if(empty($_POST["stSection"])) {
			$errstSection = "Please select a section";
		} else{
		  $stSection = addslashes($_POST["stSection"]);
		}
		if(empty($_POST["attendanceDate"])) {
			$errattendanceDate = "Please select a Attendance date";
		} else{
		  $attendanceDate = addslashes($_POST["attendanceDate"]);
		}
		if(empty($_POST["txt_student"])) {
			$errtxt_student = "Please enter name";
		} else{
		  $attendanceDate = addslashes($_POST["attendanceDate"]);
		}
	if($obj_StudentAttendance->MarkAttendanceStudentAll()){
            $msg="Attendance marked";
            }
            else{
                $msg = "Attandance marking failed";
            }
            echo $msg;
	if($obj_StudentAttendance->UpdateTeacherAttendance(/*$StudentAttendacnceID, $Present, $Date*/)){
            $msg="Attendance marked";
             echo $msg;
            }
            else{
                $msg = "Attandance marking failed";
            }
    if($obj_StudentAttendance->GetStudentAttendanceFromTo(/*$StudentID, $From, $To, $SectionID*/)){
            $msg="Attendance marked";
             echo $msg;
            }
            else{
                $msg = "Attandance marking failed";
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
                        <h3 class="text-center">Student Attendance</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
							<form method="POST" action="" autocomplete="on">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<select name="stClass"  class="form-control" required ><span class="error"><?php echo $errstclass ?></span>
											<option value="" selected disabled>Select Class</option>
											<option value="">7th</option>
											<option value="">8th</option>
											<option value="">9th</option>
										</select>
									</div>
									&nbsp;
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<select name="stSection"  class="form-control" required ><span class="error"><?php echo $errstSection ?></span>
											<option value="" selected disabled>Select Section</option>
											<option value="">A</option>
											<option value="">B</option>
											<option value="">C</option>
										</select>
									</div>
									&nbsp;
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
											<input class="form-control" name="attendanceDate" id="attendanceDate" required type="date"><span class="error"><?php echo $errattendanceDate ?></span>
										</div>
									</div>
									&nbsp;
									<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
										
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
										<button type="Submit" class="btn btn-success" name="btnSubmit" id="btnSubmit">Submit</button>
									</div>
								</div>
								&nbsp;
								<br>
								<br>
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="input-group">
											<input type="text" class="form-control" name="txt_student" id="txt_student" placeholder="Search Student Here" required/><span class="error"><?php echo $errtxt_student ?></span>
											<span class="input-group-btn bn">
												<button class="btn btn-success" type="submit" name="btnSearch" id="btnSearch">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</span>
										</div>
									</div>
								</div>
								&nbsp;
								<hr>
                            </form>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-lg-2">#</th>
										<th class="col-lg-3">Reg No.</th>
                                        <th class="col-lg-5">Students</th>
                                        <th class="col-lg-2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
										<td>50</td>
                                        <td>Hamad</td>
                                        <td>
                                            <div class="" data-toggle="buttons">
                                                <label class="btn btn-xs btn-success ">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                    <i class="fa fa-check"></i> P
                                                </label>
                                                <label class="btn btn-xs btn-danger active">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    <i class="fa fa-times"></i> A
                                                </label>          
                                            </div>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
										<td>51</td>
                                        <td>Faisal</td>
                                        <td>
                                            <div class="" data-toggle="buttons">
                                                <label class="btn btn-xs btn-success ">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                    <i class="fa fa-check"></i> P
                                                </label>
                                                <label class="btn btn-xs btn-danger active">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    <i class="fa fa-times"></i> A
                                                </label>          
                                            </div>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
										<td>52</td>
                                        <td>Bilal</td>
                                        <td>
                                            <div class="" data-toggle="buttons">
                                                <label class="btn btn-xs btn-success ">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                    <i class="fa fa-check"></i> P
                                                </label>
                                                <label class="btn btn-xs btn-danger active">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    <i class="fa fa-times"></i> A
                                                </label>          
                                            </div>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
										<td>53</td>
                                        <td>Sami</td>
                                        <td>
                                            <div class="" data-toggle="buttons">
                                                <label class="btn btn-xs btn-success ">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                    <i class="fa fa-check"></i> P
                                                </label>
                                                <label class="btn btn-xs btn-danger active">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    <i class="fa fa-times"></i> A
                                                </label>          
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
							
							<hr>
							<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<div class="alert alert-success alert-dismissible" id="successAlert">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										Attendance has been done Successfully!
									</div>
								</div>
								<div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
									<a href="printAttendance.php" class="btn btn-success no-print pull-right">Print</a>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
									<button type="Submit" class="btn btn-primary" name="btnOK" id="btnOK">Done</button>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1"></div>
							</div>
                        </div> 
                    </div>       
                </div>
            </div>
        </div>
    <!-- END PAGE SOURCE -->
	</div>
</body>
</html>
