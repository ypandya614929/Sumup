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
<br>
<div id="rs"><br><br>
<div class="container">
<form name = "res" method = "post" action = "result.php#r" class="form-horizontal">

	<fieldset>
		<legend>Result</legend>
        <div class="form-group">
          <label class="col-md-6 control-label" >Enrollment No : &nbsp;<input type="text" name="eno"/></label>
          <div class="col-md-6">

        </div>
      </div>
      <br>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success">&nbsp;View</button>
			     <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a>
			  </div>
			  <div class="col-md-4">
			  </div>
</div>
			</div>
	</fieldset>
</form>
</div>
<?php

require_once 'footer.php';
ob_end_flush();
?>
