<!DOCTYPE html>
<html>
<head>
	<title>Courses - Teacher Portal</title>
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
						Fee History
					</div>
					<div class="panel-body">
						<br>
						<form method="POST" action="" >
							<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
										<center><strong>Student Name: </strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<label class="label label-success label-name" name="lbl_stdName" id="lbl_stdName">Faisal</label>
                                    </div>									
									
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
										<center><strong>Class:</strong></center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<label class="label label-success label-name" name="lbl_class" id="lbl_class">8th</label>
                                    </div>    
                                </div>  
								<hr><br>
							<table class="table table-striped">
								<thead>
									<tr>
										<th >#</th>
										<th >Date</th>
										<th >Fee Month</th>
                                        <th >Total Payment</th>
                                        <th >Paid Amount</th>
                                        <th >Due Payment</th>
                                        <th >Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>11-11-2016</td>
										<td>April</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
                                        
									</tr>
									<tr>
										<td>2</td>
										<td>11-11-2016</td>
										<td>May</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
									</tr>
									<tr>
										<td>3</td>
										<td>11-11-2016</td>
										<td>June</td>
                                        <td>50,000.00</td>
                                        <td>30,000.00</td>
                                        <td>20,000.00</td>
                                        <td>Pending</td>
								  </tr>
								  <tr>
										<td>4</td>
										<td>06-07-2016</td>
										<td>July</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
									</tr>
									<tr>
										<td>5</td>
										<td>07-08-2016</td>
										<td>August</td>
                                        <td>50,000.00</td>
                                        <td>30,000.00</td>
                                        <td>20,000.00</td>
                                        <td>Pending</td>
								  </tr>
								  <tr>
										<td>6</td>
										<td>08-09-2016</td>
										<td>September</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
									</tr>
									<tr>
										<td>7</td>
										<td>07-10-2016</td>
										<td>October</td>
                                        <td>50,000.00</td>
                                        <td>50,000.00</td>
                                        <td>0.00</td>
                                        <td>Paid</td>
									</tr>
									<tr>
										<td>8</td>
										<td>11-11-2016</td>
										<td>November</td>
                                        <td>50,000.00</td>
                                        <td>30,000.00</td>
                                        <td>20,000.00</td>
                                        <td>Pending</td>
								  </tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>      <!-- Panel End -->
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
</body>
</html>
