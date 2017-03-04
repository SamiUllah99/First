<?php
require('C:/wamp/www/SIS/Classes/class.Student.php');
require('C:/wamp/www/SIS/Classes/class.Database.php');

$obj_Student = new Student();
$btnSubmit = "";
$stClass = "";
$stSection = "";
$studentID ="";
$txt_student = "";

$errstclass= "";
$errstSection= "";
$errstudentID= "";
$errtxt_student= "";

if(isset($_POST["btnSubmit"])) {
			$btnSubmit = addslashes($_POST["btnSubmit"]);
		if(empty($_POST["stClass"])) {
			$errstclass = "Please select a class";
		} else{
		  $stClass = addslashes($_POST["stClass"]);
		}
		if(empty($_POST["stSection"])) {
			$errstSection = "Please select a Section";
		} else{
		  $stSection = addslashes($_POST["stSection"]);
		}
		if(empty($_POST["studentID"])) {
			$errStudentID = "Please select a Student ID";
		} else{
		  $studentID = addslashes($_POST["studentID"]);
		}
		if(empty($_POST["txt_student"])) {
			$errtxt_student = "Please Enter a Name";
		} else{
		  $txt_student = addslashes($_POST["txt_student"]);
		}
        $obj_Student->StudentID =$studentID;
        if($obj_Student->GetStudentDetails($studentID)){
            $msg="Student Records Displayed";
            }
            else{
                $msg = "Student record Display Failed";
            }
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
                        <h3 class="text-center">Student Record</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="row main-reg">
                            <form method="POST" action="" autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<select name="stClass"  class="form-control" required ><span class="error"><?php echo $errstclass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
                                </div>
                                
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<select name="stSection"  class="form-control" required ><span class="error"><?php echo $errstSection ?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
                                </div>
								
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<select name="studentID"  class="form-control" required ><span class="error"><?php echo $errStudentID ?></span>
										<option value="" selected disabled>Student ID</option>
										<option value="">101</option>
										<option value="">102</option>
										<option value="">103</option>
									</select>
                                </div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnOK">Submit</button>
								</div>
								&nbsp;
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="input-group">
											<input type="text" class="form-control" id="txt_student" name="txt_student" placeholder="Search Student Here" />
											<span class="error"><?php echo $errtxt_student ?></span>
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

                            <table class="col-md-12 col-sm-12 col-xs-12 table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Roll No.</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>DoB</th>
                                        <th>Class</th>
                                        <th>First Term</th>
                                        <th>Middle Term</th>
                                        <th>Final Term</th>
										<th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>50</td>
                                        <td>Ali</td>
                                        <td>Raza</td>
                                        <td>13-08-1995</td>
                                        <td>9th</td>
                                        <td>80%</td>
                                        <td>85%</td>
                                        <td>87%</td>
										<td>
                                            <label class="btn btn-xs btn-danger" id="btnDelete">
                                                <i class="fa fa-times"></i> Delete
                                            </label>   
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>51</td>
                                        <td>Ahmed</td>
                                        <td>Rehman</td>
                                        <td>19-02-1996</td>
                                        <td>9th</td>
                                        <td>80%</td>
                                        <td>85%</td>
                                        <td>87%</td>
										<td>
                                            <label class="btn btn-xs btn-danger" id="btnDelete">
                                                <i class="fa fa-times"></i> Delete
                                            </label>   
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>1</td>
                                        <td>50</td>
                                        <td>Ali</td>
                                        <td>Raza</td>
                                        <td>13-08-1995</td>
                                        <td>9th</td>
                                        <td>80%</td>
                                        <td>85%</td>
                                        <td>87%</td>
										<td>
                                            <label class="btn btn-xs btn-danger" id="btnDelete">
                                                <i class="fa fa-times"></i> Delete
                                            </label>   
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>1</td>
                                        <td>50</td>
                                        <td>Ali</td>
                                        <td>Raza</td>
                                        <td>13-08-1995</td>
                                        <td>9th</td>
                                        <td>80%</td>
                                        <td>85%</td>
                                        <td>87%</td>
										<td>
                                            <label class="btn btn-xs btn-danger" id="btnDelete">
                                                <i class="fa fa-times"></i> Delete
                                            </label>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>50</td>
                                        <td>Ali</td>
                                        <td>Raza</td>
                                        <td>13-08-1995</td>
                                        <td>9th</td>
                                        <td>80%</td>
                                        <td>85%</td>
                                        <td>87%</td>
										<td>
                                            <label class="btn btn-xs btn-danger" id="btnDelete">
                                                <i class="fa fa-times"></i> Delete
                                            </label>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>50</td>
                                        <td>Ali</td>
                                        <td>Raza</td>
                                        <td>13-08-1995</td>
                                        <td>9th</td>
                                        <td>80%</td>
                                        <td>85%</td>
                                        <td>87</td>
										<td>
                                            <label class="btn btn-xs btn-danger" id="btnDelete">
                                                <i class="fa fa-times"></i> Delete
                                            </label>   
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
							
							<div class="row">
								<center><a href="printRecord.php" class="btn btn-success no-print">Print</a></center>
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
