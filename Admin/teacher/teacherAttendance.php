<?php
require('C:/wamp/www/SIS/Classes/class.TeacherAttendance.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_TeacherAttendance = new TeacherAttendance(); 

$txt_teacher= "";
$attendancedate= "";
$btnSubmit= "";
$btnSearch="";

$errtxt_teacher= "";
$errattendancedate= "";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);
		if(empty($_POST["attendanceDate"])) {
			$errattendancedate = "Enter Date";
		} else{
		  $attendanceDate= addslashes($_POST["attendanceDate"]);
		}
}
if(isset($_POST["btnSearch"])) {
			$btnSearch = addslashes($_POST["btnSearch"]);
		if(empty($_POST["txt_teacher"])) {
			$errtxt_teacher = "Please a Name to Search";
			
		} else{
		  $txt_teacher= addslashes($_POST["txt_teacher"]);
		  		  // check if designation only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$txt_teacher)) {
		  $errtxt_teacher = "Only letters and white space allowed"; 
			}
			
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
                        <h3 class="text-center">Teacher Attendance</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="row main-reg">
                            
							<form method="POST" action=""  autocomplete="on">
								
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
									<label>Date: </label>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
										<input class="form-control" required id="attendanceDate" name="attendanceDate" type="date">
										<span class="error"><?php echo $errattendancedate ?></span>
									</div>
                                </div>
								&nbsp;
								<div class="col-lg-1 col-md-1 col-sm-1">
                                </div>
								&nbsp;
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<button type="Submit" class="btn btn-success" name="btnSubmit" id="btnSubmit">Submit</button>
                                </div>
								&nbsp;
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="input-group">
										<input type="text" id="txt_teacher" name="txt_teacher" class="form-control" required placeholder="Search Teacher Here" />
										<span class="error"><?php echo $errtxt_teacher ?></span>
										<span class="input-group-btn bn">
											<button type="submit" class="btn btn-success" name="btnSearch" id="btnSearch">
												<i class="fa fa-search" aria-hidden="true"></i>
											</button>
										</span>
									</div>
								</div>
								<br>
								
								&nbsp;
								<hr>
                            </form>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-lg-2">#</th>
										<th class="col-lg-3">Teacher ID</th>
                                        <th class="col-lg-5">Teacher Name</th>
                                        <th class="col-lg-2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
										<td>50</td>
                                        <td>Wicky</td>
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
							
							<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<div class="alert alert-success alert-dismissible" id="successAlert">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										Attendance has been done Successfully!
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<a href="printAttendance.php" class="btn btn-success no-print pull-right">Print</a>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<button type="Submit" class="btn btn-primary pull-right" name="btnOK" id="btnOK">Done</button>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
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
