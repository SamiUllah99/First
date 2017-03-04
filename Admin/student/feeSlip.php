<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fee Slip </title>
    <?php require('../inc/links.php');  ?>
</head>

<div class="container">
	<div class="row text-center">
		<h1 class="head-fee">Fee Slip</h1>
	</div>
	<hr>
	<div class="row text-center">
		<h3>School Name</h3>
	</div>
	<hr>
	<br>
	<div class="row">
		<div class="form-group">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
				<label class="text-muted pull-right">Student Name:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label name="std_name" id="std_name"> Ali Raza</label>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-1">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Slip No:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				<label name="slip_num" id="slip_num"> 1 </label>
			</div>
		</div>
		&nbsp;
		<div class="form-group">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
				<label class="text-muted pull-right">Father Name:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label name="slip_num" id="std_name"> Raza Khan</label>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-1">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Due Date:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				<label name="fee_date" id="fee_date"> 23 Nov, 2016 </label>
			</div>
		</div>
		&nbsp;
		<div class="form-group">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
				<label class="text-muted pull-right">Roll No:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label name="std_reg" id="std_reg"> 101</label>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-1">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Fee Amount</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				<label name="std_fee" id="std_fee"> 30,000 </label>
			</div>
			
		</div>
		&nbsp;
		<div class="form-group">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
				<label class="text-muted pull-right">Class:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label name="slip_class" id="std_class"> 8th</label>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-1">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Section:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				<label name="std_section" id="std_section"> A </label>
			</div>
		</div>
		
	</div>
	&nbsp;
		<hr>
	
	<br>
	<div class="row">
		<table class="col-md-12 col-sm-12 col-xs-12 table">
			<thead>
				<tr>
					<th>#</th>
					<th>Fee Month</th>
					<th>Total Payment</th>
					<th>Paid Amount</th>
					<th>Due Payment</th>
					<th>Status</th>
					<th>Due Date</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>October</td>
					<td>50,000.00</td>
					<td>40,000.00</td>
					<td>10,000.00</td>
					<td>Defaulter</td>
					<td>18-10-2016</td>
				</tr>
				<tr>
					<td>2</td>
					<td>November</td>
					<td>50,000.00</td>
					<td>30,000.00</td>
					<td>20,000.00</td>
					<td>Defaulter</td>
					<td>23-11-2016</td>
				</tr>
			</tbody>
		</table>
	</div>
	<hr>
	
	<div class="row">
		<div class="form-group">
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<label class="text-muted pull-right">Total Fee:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label name="totalFee" id="totalFee"> 30,000 Rs. </label>
			</div>
		</div>
		
		
	</div>
	<br>
	
	<div class="row">
		<center><button class="btn btn-success no-print" name="btnPrint" id="btnPrint">Print</button></center>
	</div>
	<br>
	<br>
	
	
	
</div>

</body>
</html>
