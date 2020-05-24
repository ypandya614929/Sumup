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
<div id="att"><br><br>
<div class="container">
<form name = "seldate" method = "post" action = "retrieve_attendance.php#att" class="form-horizontal">

	<fieldset>
		<legend>Select Date</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" >Date</label>
          <div class="col-md-4">          <div class="col-md-4">
            <select name="year">
              <option value="">Year</option>
              <?php for ($year = date('Y'); $year > date('Y')-100; $year--) { ?>
              <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
              <?php } ?>
            </select><br><br>
            <select name="month">
              <option value="">Month</option>
              <?php for ($month = 1; $month <= 12; $month++) { ?>
              <option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>"><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
              <?php } ?>
            </select><br><br>
            <select name="day">
              <option value="">Day</option>
              <?php for ($day = 1; $day <= 31; $day++) { ?>
              <option value="<?php echo strlen($day)==1 ? '0'.$day : $day; ?>"><?php echo strlen($day)==1 ? '0'.$day : $day; ?></option>
              <?php } ?>
            </select>
          </div>
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
