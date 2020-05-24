<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:../index.php");
  exit;
}
?>
<div id="ab"><br><br>
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
<form name = "newsUpdate" method = "post" action = "" class="form-horizontal">

	<fieldset>
		<legend>Add Blog</legend>
			<div class="form-group">
			  <label class="col-md-4 control-label" style="font-size:18px;text-align:right;" for="textarea">Blog : </label>
			  <div class="col-md-4">
			    <textarea class="form-control" id="textarea" name="blog" ></textarea>
			  </div>
			</div>
      <br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="head">Heading</label>
			  <div class="col-md-4">
			  <input id="head" name="head" type="text" placeholder="" class="form-control input-md" required="" value="">
			  </div>
			</div>
      <br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success">&nbsp;Add Blog</button>
           <a href="blog.php#be" class="btn btn-success">View Blog</a>
           <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a>
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

  $blog=$_POST['blog'];
  $head=$_POST['head'];

 if ( addblog ( $head, $blog,$_SESSION['en']) ) {
   $_SESSION['c']=1;
   header('location:addblog.php?msg=addSuccess');
   }
 else {
   header('location:addblog.php?msg=fail');
 }

}
require_once 'footer.php';
ob_end_flush();
?>
