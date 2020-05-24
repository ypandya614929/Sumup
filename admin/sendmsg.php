<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
$_SESSION['en']="1";
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
$uid=$_SESSION['uid'];
$_SESSION['sel']="admin";
?>
<div id="sm"><br><br>
  <?php
if(!isset($_POST['submit']) ) {
  if(isset($_GET['msg']))
	{
    if ($_GET['msg']=='addSuccess')
	  {
	    $successMsg=' Send successfully';
	    require_once 'success.php';
	  }
  }
?>
<div class="container">
<form name = "sendmsg" method = "post" action = "" class="form-horizontal">

	<fieldset>
		<legend>Send Message</legend>
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
            <input type="radio" name="s1at" value="Students"> Students</input> &emsp;  &emsp;
            <input type="radio" name="s1at" value="Parents"> Parents</input>
          </div>
        </div>
        <br>

      <div class="form-group">
			  <label class="col-md-4 control-label" style="text-align:right;" for="textarea">Message : </label>
			  <div class="col-md-4">
			    <textarea class="form-control" id="textarea" name="msg1" ></textarea>
			  </div>
			</div>
      <br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success">&nbsp;Send</button>
			     <a href="msg.php#m" class="btn btn-default">&nbsp;Cancel</a>
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
  $msg1=$_POST['msg1'];
  $enroll=$_SESSION['en'];

 if ( sendmsg ( $toen , $msg1 , $enroll ,$_POST['s1at'] ) ) {
   $_SESSION['c']=1;
   header('location:sendmsg.php?msg=addSuccess');
   }
 else {
   header('location:home.php');
 }

}
require_once 'footer.php';
ob_end_flush();
?>
