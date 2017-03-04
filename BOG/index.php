<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - BOG Portal</title>
	<?php require('inc/links.php');   ?>
</head>
<body>
	<div class="headers">
		<?php require ('inc/header.php'); ?>
	</div>
	<div class="container">
		<div class="row main-contents">
				<!-- Navbar Start-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">	
				
			</div>
				<!-- Navbar End-->
			
			<!-- Main Contents -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<br>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Overall Progress 
					</div>
					<div class="panel-body">
					
						<div class="row">
							<div class="col-lg-6">
								<div id="chart1" style="min-width: 310px; height: 300px; max-width: 400px; margin: 0 auto"></div>
								<center>
									<a href="marks.php">See Details</a>
								</center>
							</div>
							
							<div class="col-lg-6">
								<div id="chart2" style="min-width: 310px; height: 300px; max-width: 400px; margin: 0 auto"></div>
								<center>
									<a href="studentAttendance.php">See Details</a>
								</center>
							</div>
							
						</div>
						<br>
						
					</div>
				</div>
				
				
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Financial Progress
					</div>
					<div class="panel-body">
						
						<div class="row">
							<div class="col-lg-6">
								<div id="chart3" style="min-width: 310px; height: 300px; max-width: 400px; margin: 0 auto"></div>
								<center>
									<a href="attendance.php">See Details</a>
								</center>
							</div>
							
							<div class="col-lg-6">
								<div id="chart4" style="min-width: 310px; height: 300px; max-width: 400px; margin: 0 auto"></div>
								<center>
									<a href="financialReport.php">See Details</a>
								</center>
							</div>
							
						</div>
						<br> 
						
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading panel-head">
						Information
					</div>
					<div class="panel-body">
						
						<div class="col-lg-6">
						
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Name:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="std_name"> Hamza Khan</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">DoB:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="std_name"> 09-08-1995</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Gender:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="std_name"> Male</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">S/D of:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="std_name"> Gul Khan</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Contact:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="std_name"> 0992-5286542 </label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-3 col-ms-3 col-sm-3 col-xs-3">
									<label class="text-muted">Address:</label>
								</div>
								<div class="col-lg-9 col-ms-9 col-sm-9 col-xs-9">
									<label id="std_name"> CB 58/37 Shah Zaman Colony PMA Road, Abbottabad</label>
								</div>
							</div>
							&nbsp;
						</div>
						
						<div class="col-lg-6">
						
							<div class="form-group">
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
									<label class="text-muted">Emergency Contact:</label>
								</div>
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
									<label id="emergency_name"> Talha Khan</label>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
								</div>
								<div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6">
									<label id="emergency_contact"> 0992-3620176</label>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
				<!-- Main Contents End -->
		</div>
	</div>
	
	
	<script>
		$(function () {
			Highcharts.chart('chart1', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Student Performance'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %',
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
							}
						}, 
						showInLegend: true
					}
				},
				series: [{
					name: 'Percentage',
					colorByPoint: true,
					data: [{
						name: '<b> 80-90 </b>',
						y: 50
					}, {
						name: '<b> 60-70 </b>',
						y: 24
					}, {
						name: '<b> 50-60 </b>',
						y: 16
					}, {
						name: '<b> 30-40 </b>',
						y: 10
					}]
				}]
			});
		});



		// Chart 2


		$(function () {
			Highcharts.chart('chart2', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Student Attendance'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						
						dataLabels: {
							enabled: false,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %',
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
							}
						},
						showInLegend: true
					}
				},
				series: [{
					name: 'Percentage',
					colorByPoint: true,
					data: [{
						name: '<b> P </b>',
						y: 68
					}, {
						name: '<b> A </b>',
						y: 32
					}]
				}]
			});
		});
		
		
		
		// Chart 3
		
		
		$(function () {
			Highcharts.chart('chart3', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Teacher Attendance'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %',
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
							}
						}, 
						showInLegend: true
					}
				},
				series: [{
					name: 'Percentage',
					colorByPoint: true,
					data: [{
						name: '<b> P </b>',
						y: 78
					}, {
						name: '<b> A </b>',
						y: 22
					}]
				}]
			});
		});



		// Chart 4


		$(function () {
			Highcharts.chart('chart4', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Financial Report'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						
						dataLabels: {
							enabled: false,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %',
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
							}
						},
						showInLegend: true
					}
				},
				series: [{
					name: 'Percentage',
					colorByPoint: true,
					data: [{
						name: '<b> Profit </b>',
						y: 58
					}, {
						name: '<b> Expanse </b>',
						y: 42
					}]
				}]
			});
		});


	</script>
	
</body>
</html>
