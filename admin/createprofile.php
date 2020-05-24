<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
?>
<div id="cp">
  <br><br><?php
if(!isset($_POST['submit']) ) {
  if(isset($_GET['msg']))
	{
    if ($_GET['msg']=='addSuccess')
	  {
	    $successMsg=' Created ';
	    require_once 'success.php';
	  }
    else {
      $successMsg=' Update Failed';
	    require_once 'fail.php';
    }
  }
?>
<div class="container">
<form name = "upprofile" method = "post" action = "" class="form-horizontal">

	<fieldset>
		<legend>Edit Profile</legend>
    <br>
    <div class="form-group">
      <label class="col-md-4 control-label">First Name : </label>
      <div class="col-md-4">
      <input id="text" name="fname" type="text" placeholder="" class="form-control input-md" required="" value="">
      </div>
    </div>
      <br>

      <div class="form-group">
        <label class="col-md-4 control-label">Last Name : </label>
        <div class="col-md-4">
        <input id="text" name="lname" type="text" placeholder="" class="form-control input-md" required="" value="">
        </div>
      </div>
        <br>

        <div class="form-group">
          <label class="col-md-4 control-label">Faculty id : </label>
          <div class="col-md-4">
          <input id="text" name="en" type="text" placeholder="" class="form-control input-md" required="" value="">
          </div>
        </div>
          <br>

          <div class="form-group">
            <label class="col-md-4 control-label">Email address : </label>
            <div class="col-md-4">
            <input id="text" name="email" type="text" placeholder="" class="form-control input-md" required="" value="">
            </div>
          </div>
            <br>

          <div class="form-group">
            <label class="col-md-4 control-label">Date of Birth : </label>
            <div class="col-md-4">
            <input id="text" name="dob" type="text" placeholder="" class="form-control input-md" required="" value="">
            </div>
          </div>
            <br>

              <div class="form-group">
                <label class="col-md-4 control-label">Branch : </label>
                <div class="col-md-4">
                <input id="text" name="branch" type="text" placeholder="" class="form-control input-md" required="" value="">
                </div>
              </div>
                <br>

              <div class="form-group">
                <label class="col-md-4 control-label">Mobile no : </label>
                <div class="col-md-4">
                <input id="text" name="mob" type="text" placeholder="" class="form-control input-md" required="" value="">
                </div>
              </div>
                <br><br>


			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
          <button id="submit" name="submit" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i>&nbsp;Add Info</button>
			     <a href="search.php#s" class="btn btn-success">&nbsp;View Profile</a>
           <a href="home.php#h" class="btn btn-default">&nbsp;Cancel</a>
			  </div>
			  <div class="col-md-4">
			  </div>

			</div>
	</fieldset>
</form>
</div>
</div>
<?php
}
else{

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $en=$_POST['en'];
  $email=$_POST['email'];
  $mob=$_POST['mob'];
  $dob=$_POST['dob'];
  $sem="";
  $branch=$_POST['branch'];

 if ( createprofile ( $fname , $lname, $en,$email, $mob,$dob,$sem,$branch ) ) {
   $_SESSION['c']=1;
   header('location:createprofile.php?msg=addSuccess');
   }
 else {
   header('location:createprofile.php?msg=fail');
 }


}
require_once 'footer.php';
ob_end_flush();
?>
