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
                        <h3 class="text-center">Upload Marks</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="main-reg">
                            <form method="POST" action="" >
								<div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<center><strong>Subject:</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<label class="label label-success" name="subject" id="subject" style="font-size:12px;">English</label>
                                    </div> 
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<center><strong>Terms:</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<label class="label label-success" name="terms" id="terms" style="font-size:12px;">First Term</label>
                                    </div> 
                                </div>
								<br>
								&nbsp;
								<div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<center><strong>Total Marks:</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<input type="number" class="form-control" name="totalMarks" id="totalMarks" required min="0" placeholder="Enter Total Marks"/>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<button type="submit" class="btn btn-success" name="btn_totalMarks" id="btn_totalMarks">Set Total</button>
                                    </div> 
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    </div> 
                                </div>
								
								<hr>
                                <table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table table-striped">
									<thead>
										<tr>
											<th class="col-lg-2">#</th>
											<th class="col-lg-3">Student ID</th>
											<th class="col-lg-5">Student Name</th>
											<th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Obtained Marks</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>50</td>
											<td>Ali</td>
											<td>
												<input type="number" class="form-control" name="txt_marks" id="txt_marks" min="0" required/>
											</td>
											<td></td>
										</tr>
										 <tr>
											<td>2</td>
											<td>52</td>
											<td>Ahmed</td>
											<td>
												<input type="number" class="form-control" name="txt_marks" id="txt_marks" min="0" required/>
											</td>
											<td></td>
										</tr>
										 <tr>
											<td>3</td>
											<td>53</td>
											<td>Babar</td>
											<td>
												<input type="number" class="form-control" name="txt_marks" id="txt_marks" min="0" required/>
											</td>
											<td></td>
										</tr>
										 <tr>
											<td>4</td>
											<td>54</td>
											<td>Fahad</td>
											<td>
												<input type="number" class="form-control" name="txt_marks" id="txt_marks" min="0" required/>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>5</td>
											<td>55</td>
											<td>Hamza</td>
											<td>
												<input type="number" class="form-control" name="txt_marks" id="txt_marks" min="0" required/>
											</td>
											<td></td>
										</tr>
										
									</tbody>
								</table>

                                &nbsp;
                                <hr>
								<div class="row ">
                                    <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Marks have been uploaded Successfully!
										</div>
									</div>
									<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                        <button type="submit" class="btn btn-success pull-right" name="uploadMarks" id="uploadMarks">Upload Marks</button>
                                    </div>
									<div class="col-lg-1 "></div>
                                </div>   	
                                
								&nbsp;
                            </form>

                        </div> 
                    </div>       
                </div>
            </div>
        </div>   
	</div>
	<!-- END PAGE SOURCE -->
</body>
</html>
