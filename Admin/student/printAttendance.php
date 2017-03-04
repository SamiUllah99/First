<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Attendance List </title>
    <?php require('../inc/links.php');  ?>
</head>

<div class="container">
	<div class="row text-center">
		<h2 class="head-fee">Student Attendance List</h2>
	</div>
	<hr>
	<br>
	<div class="row">
		<div class="form-group">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Class:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label id="std_name"> 8th</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Section:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label id="std_name"> A </label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label class="text-muted pull-right">Date:</label>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<label id="std_name"> 05/12/2016 </label>
			</div>
		</div>
		
	</div>
	&nbsp;
	<div class="row">
		<table class="table table-striped table-bordered">
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
					<td> P </td>
				</tr>
				 <tr>
					<td>2</td>
					<td>51</td>
					<td>Faisal</td>
					<td> A </td>
				</tr>
				 <tr>
					<td>3</td>
					<td>52</td>
					<td>Bilal</td>
					<td> P </td>
				</tr>
				 <tr>
					<td>4</td>
					<td>53</td>
					<td>Sami</td>
					<td> A </td>
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
