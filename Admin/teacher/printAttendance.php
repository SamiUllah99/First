<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Attendance List </title>
    <?php require('../inc/links.php');  ?>
</head>

<div class="container">
	<div class="row text-center">
		<h2 class="head-fee">Teacher Attendance List</h2>
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
					<td> A </td>
				</tr>
				 <tr>
					<td>2</td>
					<td>51</td>
					<td>Faisal</td>
					<td> P </td>
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
