<?php
ob_start();
session_start();
require_once 'header.php';
require_once '../sumup/include/function.php';
if(!isset($_POST['submit']) ) {
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
 <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-body {
}

</style>
<!-- Trigger/Open The Modal -->
  <button id="myBtn" type="button" class="btn btn-default" style="background-color: #c2d4d8;"><b>Feedback Here</b></button><br><br>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
          <span class="close">&times;</span>
    <center>
      <iframe src="feed.php" frameborder="0" scrolling="no"  style="width:50%; height:350px; border:0; overflow:hidden;"></iframe>
      </center>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</head>
<body>
<?php
require_once 'header.php';
 ?>
<div class="yash">
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title"><center>Sign up for SumUp</center></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="reg.php" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="FName" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="LName" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

                <div class="form-group">
			    				<input type="text" name="ENo" id="eno" class="form-control input-sm" placeholder="Enrollment no">
			    			</div>

                <div class="form-group">
                  <select class="form-control" id="sel1" name="sel">
                    <option value="Students">Students</option>
		                <option value="Parents" >Parents</option>
		                </select>
                  </div>


			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="pw" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="pw1" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
                <h6> <div class=new>Already have an account?<a href="index.php"> <u>Login</u></div></h6></a><br>
                <center><button id="submit" name="submit" class="btn btn-success">SingUp</button></center>

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

   $sel=$_POST['sel'];
   $eno =$_POST['ENo'];
   $pw=$_POST['pw'];
   $fname=$_POST['FName'];
   $lname=$_POST['LName'];
   $email=$_POST['email'];
   $pw1=$_POST['pw1'];
if($sel=="Students"){
  if ( home_register($fname,$lname,$sel,$eno,$email,$pw,$pw1) ) {
    ?>
      <script type="text/javascript">
      alert("Account Created");
      window.location='../sumup/index.php';
      </script>
    <?php
  }
  else{
    ?>
      <script type="text/javascript">
      alert("User Already Exsist");
      window.location='../sumup/reg.php';
      </script>
    <?php
  }
}
else {
  if ( preg($fname,$lname,$sel,$eno,$email,$pw,$pw1) ) {
    ?>
      <script type="text/javascript">
      alert("Account Created");
      window.location='../sumup/index.php';
      </script>
    <?php
  }
  else{
    ?>
      <script type="text/javascript">
      alert("User Already Exsist");
      window.location='../sumup/reg.php';
      </script>
    <?php
  }
}
  }
  require_once 'footer.php';
  ob_end_flush();
   ?>
  </body>
  </html>
