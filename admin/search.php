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
<div id="s"><br><br>
<div class="container">
<form name = "Update" method = "post" action = "viewprofile.php#s" class="form-horizontal">

	<fieldset>
		<legend>select Enrollment</legend>
    <div class="form-group">
      <label class="col-md-4 control-label" for="head">Enrollment no</label>
      <div class="col-md-4">
      <input id="eno" name="eno" type="text" placeholder="" class="form-control input-md" required="" value="">
      </div>
    </div>
    <br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i>&nbsp;View</button>
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
        require_once 'footer.php';
        ?>
