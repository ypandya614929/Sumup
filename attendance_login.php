<?php
    require_once './include/function.php';
if(!isset($_POST['submit']) ) {
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    attendance_login
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

 <body>
   <?php
   require_once 'header.php';
    ?>
 <div class="karan">
 <div class="container">
         <div class="row centered-form">
         <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
         	<div class="panel panel-default">
         		<div class="panel-heading">
 			    		<h3 class="panel-title"><center>Attendance Check</center></h3>
 			 			</div>
 			 			<div class="panel-body">
 			    		<form role="form" action="attendance_login.php" method="POST">
                 <div class="form-group">
 			    				<input type="text" name="eno" id="eno" class="form-control input-sm" placeholder="Enrollment no">
 			    			</div>

 			    			<div class="row">
 			    				<div class="col-xs-12 col-sm-12 col-md-12">
 			    					<div class="form-group">
 			    					  <input type="date" data-date-inline-picker="false" name="adate" data-date-popover='{"inline": true }' placeholder="Select Date" />
 			    					</div>
 			    				</div>
 			    			</div>
                <center><button id="submit" name="submit" class="btn btn-success">Submit</button></center>
 			    		</form>
 			    	</div>
 	    		</div>
     		</div>
     	</div>
     </div>
   </div>

   <?php
 }
   else{
     date_default_timezone_set("Asia/Kolkata");
     $eno =$_SESSION['en'];
     if(get_attendance_bool($eno,$insertdate)){
        header("location:retrieve_attendance.php?eno=$eno&date=$insertdate");
     }
}
   require_once 'footer.php';
   ?>

 </body>
 </html>
