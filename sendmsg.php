<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
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
      <input id="text" name="toen" type="text" placeholder="Send Message to Faculty Enter '1'" class="form-control input-md" required="" value="">
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
			     <a href="msg.php#ms" class="btn btn-default">&nbsp;Cancel</a>
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

 if ( sendmsg ( $toen , $msg1 , $enroll ,$_SESSION['sel'] ) ) {
   $_SESSION['c']=1;
   header('location:sendmsg.php?msg=addSuccess');
   }
 else {
   header('location:welcome.php');
 }

}
require_once 'footer.php';
ob_end_flush();
?>
