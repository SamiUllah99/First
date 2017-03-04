<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fee Defaulter List </title>
    <?php require('../inc/links.php');  ?>
</head>

<div class="container">
	<div class="row text-center">
		<h2 class="head-fee">Fee Defaulters List</h2>
	</div>
	<hr>
	<br>
	<div class="row">
		<div class="form-group">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
				<label class="text-muted pull-right">Class:</label>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label id="std_name"> 8th</label>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-1">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Section:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				<label id="std_name"> A </label>
			</div>
		</div>
		
	</div>
	&nbsp;
	<div class="row">
		<table class="col-md-12 col-sm-12 col-xs-12 table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Student ID</th>
					<th>Student Name</th>
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
					<td>101</td>
					<td>Ali Rehman</td>
					<td>November</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>11-11-2016</td>
				</tr>
				 <tr>
					<td>2</td>
					<td>102</td>
					<td>Ahmed Khan</td>
					<td>October</td>
					<td>50,000.00</td>
					<td>45,000.00</td>
					<td>5000.00</td>
					<td>Defaulter</td>
					<td>08-10-2016</td>
				</tr>
				 <tr>
					<td>3</td>
					<td>103</td>
					<td>Babar Ali</td>
					<td>September</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>05-09-2016</td>
				</tr>
				 <tr>
					<td>4</td>
					<td>104</td>
					<td>Bilal Saeed</td>
					<td>August</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>08-08-2016</td>
				</tr>
				<tr>
					<td>5</td>
					<td>105</td>
					<td>Saad Malik</td>
					<td>July</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>13-07-2016</td>
				</tr>
				<tr>
					<td>6</td>
					<td>106</td>
					<td>Talha Amjad</td>
					<td>June</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>02-06-2016</td>
				</tr>
				<tr>
					<td>7</td>
					<td>107</td>
					<td>Ali Rehman</td>
					<td>November</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>11-11-2016</td>
				</tr>
				 <tr>
					<td>8</td>
					<td>108</td>
					<td>Ahmed Khan</td>
					<td>October</td>
					<td>50,000.00</td>
					<td>45,000.00</td>
					<td>5000.00</td>
					<td>Defaulter</td>
					<td>08-10-2016</td>
				</tr>
				 <tr>
					<td>9</td>
					<td>109</td>
					<td>Babar Ali</td>
					<td>September</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>05-09-2016</td>
				</tr>
				 <tr>
					<td>10</td>
					<td>114</td>
					<td>Bilal Saeed</td>
					<td>August</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>08-08-2016</td>
				</tr>
				<tr>
					<td>11</td>
					<td>115</td>
					<td>Saad Malik</td>
					<td>July</td>
					<td>50,000.00</td>
					<td>50,000.00</td>
					<td>0.00</td>
					<td>Paid</td>
					<td>13-07-2016</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	
	<div class="row">
		<center><button class="btn btn-success no-print" name="btnPrint" id="btnPrint">Print</button></center>
	</div>
	<br>
	
	
</div>

</body>
</html>
