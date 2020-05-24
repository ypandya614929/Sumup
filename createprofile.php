<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}?>
<div id="c"><br><br>
<?php
if(!isset($_POST['submit']) ) {
  if(isset($_GET['msg']))
	{
    if ($_GET['msg']=='addSuccess')
	  {
	    $successMsg=' Updated ';
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
          <label class="col-md-4 control-label">Enrollment No : </label>
          <div class="col-md-4">
          <input id="text" name="en" type="text" placeholder="<?php echo $_SESSION['en'];?>" class="form-control input-md" required="" value="<?php echo $_SESSION['en'];?>">
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
              <label class="col-md-4 control-label">Current Semester : </label>
              <div class="col-md-4">
              <input id="text" name="sem" type="text" placeholder="" class="form-control input-md" required="" value="">
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
          <button id="submit" name="submit" class="btn btn-success">&nbsp;Add Info</button>
			     <a href="profile.php#pr" class="btn btn-success">&nbsp;View Profile</a>
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
  $sem=$_POST['sem'];
  $branch=$_POST['branch'];

if($_SESSION['en']==$en){
 if ( createprofile ( $fname , $lname, $en,$email, $mob,$dob,$sem,$branch ) ) {
   $_SESSION['c']=1;
   header('location:createprofile.php?msg=addSuccess');
   }
 else {
   header('location:welcome.php');
 }
}
else {
  header('location:createprofile.php?msg=fail');
}
}
require_once 'footer.php';
ob_end_flush();
?>
