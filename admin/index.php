<?php
ob_start();
session_start();
require_once 'header.php';
require_once '../include/function.php';
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
</head>
 <div class="admin1">
 <div class="container">
         <div class="row centered-form">
         <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
         	<div class="panel panel-default">
         		<div class="panel-heading">
 			    		<h3 class="panel-title"><center>Admin Login for SumUp</center></h3>
 			 			</div>
 			 			<div class="panel-body">
 			    		<form role="form" action="index.php" method="POST">
 			    			<div class="row">
 			    			</div>
                 <div class="form-group">
 			    				<input type="text" name="uid" id="uid" class="form-control input-sm" placeholder="Admin id">
 			    			</div>
 			    			<div class="row">
 			    				<div class="col-xs-12 col-sm-12 col-md-12">
 			    					<div class="form-group">
 			    						<input type="password" name="pw" id="password" class="form-control input-sm" placeholder="Password">
 			    					</div>
 			    				</div>
 			    			</div>
                <center><button id="submit" name="submit" class="btn btn-success">Login</button></center>
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

    $uid=$_POST['uid'];
    $pw=$_POST['pw'];

   if ( admin_login ( $uid , $pw ) ) {
     session_start();
     $_SESSION['uid']=$uid;
     $_SESSION['pw']=$pw;
     $_SESSION['c']=1;
     header('location:home.php#h');
   }
   else {
     ?>
       <script type="text/javascript">
       alert("Invalid id or Password");
       window.location='../admin/index.php';
       </script>
     <?php
   }
  }
require_once 'footer.php';
  ob_end_flush();
  ?>
