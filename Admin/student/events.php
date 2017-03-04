<?php
$eventTitle = "";
$eventDes = "";
$btnCreateEvent ="";

$erreventTitle = "";
$erreventDes = "";

if(isset($_POST["btnCreateEvent"])) {
			$btnCreateEvent = addslashes($_POST["btnCreateEvent"]);
		if(empty($_POST["eventTitle"])) {
			$erreventTitle = "Please Enter a Title";
		} else{
		  $eventTitle= addslashes($_POST["eventTitle"]);
		}
		if(empty($_POST["eventDes"])) {
			$erreventDes = "Please Enter Description";
		} else{
		  $eventDes = addslashes($_POST["eventDes"]);
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
                        <h3 class="text-center">Create Events</h3>  
                    </div>
                    <div class=" panel-body">
                        <div class="row main-reg">
                            <form method="POST" action="" autocomplete="on">
                                
                                <div class="row events">
                                    <div class="col-lg-3 col-xs-3 ">
										<center><strong>Event Title</strong></center>
									</div>
									<div class="col-lg-9 col-xs-9">
                                        <input type="text" class="form-control" name="eventTitle" id="eventTitle" required placeholder="Event Title" value="<?php echo $eventTitle ?>" /><span class="error"><?php echo $erreventTitle ?></span>
                                    </div>    
                                </div>   
								
                                &nbsp;
                                <div class="row notiD">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <center><strong>Event Description</strong></center>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
										<textarea id="txt_eventDes" class="form-control" placeholder="Event Description" name="eventDes" rows="7" required="required" value="<?php echo $eventDes?>" ></textarea><span class="error"><?php echo $erreventDes ?></span>
                                    </div>
                                </div>   

                                <hr>
								
								<div class="row form-group">
									<div class="col-lg-3 col-xs-3">
										<center><strong>Image</strong></center>
									</div>
									<div class="col-lg-9 col-xs-9">
										<input type="file" class="form-control-file" id="btn_imgEvent" aria-describedby="fileHelp">
									</div>
								</div>
								&nbsp;
                                <hr>
								<div class="row">
									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
										<div class="alert alert-success alert-dismissible" id="successAlert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											New Event has been created Successfully!
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<button type="submit" class="btn btn-success pull-right" name="btnCreateEvent" id="btnCreateEvent">Create Event</button>
										
									</div>
								</div>
                                
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
