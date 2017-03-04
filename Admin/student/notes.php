<?php
$btnSubmit = "";
$stClass = "";
$stSection = "";

$errstclass= "";
$errstSection= "";


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
                        <h3 class="text-center">Upload Notes</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="row main-reg">
                            <form method="POST" action="" autocomplete="on">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<select name="stClass"  class="form-control" required ><span class="error"><?php echo $errstclass ?></span>
										<option value="" selected disabled>Select Class</option>
										<option value="">7th</option>
										<option value="">8th</option>
										<option value="">9th</option>
									</select>
                                </div>
                                
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<select name="stSection"  class="form-control" required ><span class="error"><?php echo $errstSection ?></span>
										<option value="" selected disabled>Select Section</option>
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
									</select>
                                </div>
								
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<button type="Submit" class="btn btn-success " name="btnSubmit" id="btnOK">Submit</button>
								</div>
								
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<!-- Open Modal -->
									<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal" id="btnAddNew" name="btnAddNew">Add New Subject</button>

									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title text-center">Add New Subject</h4>
												</div>
												<div class="modal-body">
													<h4>Subject Name</h4>
													<br>
													<input type="text" class="form-control" name="addNewSubject" id="addNewSubject"  placeholder="Enter Subject Name"/>
													<br>
												
												</div>
												<div class="modal-footer">
													<button type="Submit" class="btn btn-default " name="btnAddSubject" id="btnAddSubject">Add Subject</button>
													
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Close Modal-->
								
                                </div>
								
								&nbsp;
								<hr>
                            </form>

                            <table class="col-md-12 col-sm-12 col-xs-12 table table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-lg-3">#</th>
                                        <th class="col-lg-3">Subjects</th>
										<th class="col-lg-3">Teachers</th>
                                        <th class="col-lg-3">Lectures</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="uploadNotes.php">English</a></td>
                                        <td>Ahmed Khan</td>
										<td>20</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td><a href="uploadNotes.php">Pak Studies</a></td>
                                        <td>Tariq Baloch</td>
										<td>20</td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
                                        <td><a href="uploadNotes.php">Physics</a></td>
                                        <td>Talha Amjad</td>
										<td>20</td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
                                        <td><a href="uploadNotes.php">Chemistry</a></td>
                                        <td>Anus Khan</td>
										<td>24</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><a href="uploadNotes.php">Mathematics</a></td>
                                        <td>Ayub Khan</td>
										<td>23</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><a href="uploadNotes.php">Urdu</a></td>
                                        <td>Ali Raza</td>
										<td>21</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div> 
                    </div>       
                </div>
            </div>
        </div>
    </div>
<!-- END PAGE SOURCE -->
</body>
</html>