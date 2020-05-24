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
<div class="container">
<form name = "sendmsg" method = "post" action = "" class="form-horizontal">

	<fieldset>
		<legend>Forget Password</legend>
    <div class="form-group">
      <label class="col-md-4 control-label">Enrollment No : </label>
      <div class="col-md-4">
      <input id="text" name="toen" type="text" placeholder="" class="form-control input-md" required="" value="">
      </div>
    </div>
      <br>

      <div class="form-group">
        <label class="col-md-4 control-label" for="head">Type :</label>
        <div class="col-md-4" style="bottom:-5px;">
            <input type="radio" name="type" value="Students"> Students</input> &emsp;  &emsp;
            <input type="radio" name="type" value="Parents"> Parents</input>
          </div>
        </div>
        <br>

        <div class="form-group">
          <label class="col-md-4 control-label">Email id : </label>
          <div class="col-md-4">
          <input id="text" name="email" type="text" placeholder="" class="form-control input-md" required="" value="">
          </div>
        </div>
          <br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success">&nbsp;Send Password</button>
			     <a href="index.php" class="btn btn-default">&nbsp;Cancel</a>
			  </div>
			  <div class="col-md-4">
			  </div>

			</div>
	</fieldset>
</form>
</div>
<?php
}
else{

  $toen=$_POST['toen'];
  $type=$_POST['type'];
  $email=$_POST['email'];

if($_POST['type']=="Students")
{
  $pass=fp ( $toen , $type , $email ) ;

  foreach ($pass as $pass) {
    $to=$pass['email'];
    $en=$pass['ENo'];
    $p=$pass['pw'];
    mail($to,"Your Password","Password for ".$en." is : ".$p," From : Team SumUp");
  }
  ?>
  <script type="text/javascript">
  alert("Password sent on your Email id");
  window.location='../sumup/index.php';
  </script>
<?php
}
elseif ($_POST['type']=="Parents"){
  $pass=fp1 ( $toen , $type , $email ) ;

  foreach ($pass as $pass) {
    $to=$pass['email'];
    $en=$pass['ENo'];
    $p=$pass['pw'];
    mail($to,"Your Password","Password for ".$en." is : ".$p," From : Team SumUp");
  }
  ?>
  <script type="text/javascript">
  alert("Password sent on your Email id");
  window.location='../sumup/index.php';
  </script>
<?php
}
else{
  ?>
  <script type="text/javascript">
  alert("Please Insert Details");
  window.location='../sumup/index.php';
  </script>
<?php
}
}
require_once 'footer.php';
ob_end_flush();
?>
