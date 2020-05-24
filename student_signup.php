<?php
require_once './include/function.php';
if(!isset($_POST['submit'])) {
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>SumUp</title>
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
			    		<h3 class="panel-title"><center>Sign up Students</center></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="student_signup.php" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="fname" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lname" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

                <div class="form-group">
			    				<input type="number" name="eno" id="eno" class="form-control input-sm" placeholder="Enrollment no">
			    			</div>

                <h6> <div class=new>Already have an account?<a href="student_login.php"> <u>Login </u></div></h6></a><br>
                <center><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success"></center>

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
  </div>
  <br>
  <?php

  }
  else{


   $eno =$_POST['eno'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];


   if(home_register($eno,$fname,$lname))
   {
      header('location:student_login.php');
   }
   else {
     header('location:student_signup.php');
   }
  }
  require_once 'footer.php';
   ?>
  </body>
  </html>
