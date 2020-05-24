<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
?>
<div id="ae">
<br>
<br>
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
<br>
<div class="container">
<form name = "eventUpdate" method = "post" action = " " class="form-horizontal">

	<fieldset>
		<legend>Edit event</legend>
			<div class="form-group">
			  <label class="col-md-4 control-label" style="font-size:18px;text-align:right;" for="textarea">event : </label>
			  <div class="col-md-4">
			    <textarea class="form-control" id="textarea" name="event" ></textarea>
			  </div>
			</div>
      <br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="head">Title</label>
			  <div class="col-md-4">
			  <input id="head" name="head" type="text" placeholder="" class="form-control input-md" required="" value="">
			  </div>
			</div>
      <br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i>&nbsp;Add event</button>
           <a href="./event.php#e" class="btn btn-success">View event</a>
           <a href="./home.php#h" class="btn btn-default"><i class="fa fa-ban"></i>&nbsp;Cancel</a>
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

  $events=$_POST['event'];
  $head=$_POST['head'];

 if ( addevent ( $head, $events ) ) {
   $_SESSION['c']=1;
   header('location:addevent.php?msg=addSuccess');
   }
 else {
   header('location:addevent.php?msg=fail');
 }

}
require_once 'footer.php';
ob_end_flush();
?>
