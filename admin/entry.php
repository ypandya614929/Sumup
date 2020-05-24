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
<div id="en"><br><br>
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
<form name = "Update" method = "post" action = "" class="form-horizontal">

	<fieldset>
		<legend>Add Attendance</legend>
    <div class="form-group">
      <label class="col-md-4 control-label" for="head">Enrollment no</label>
      <div class="col-md-4">
      <input id="eno" name="eno" type="text" placeholder="" class="form-control input-md" required="" value="">
      </div>
    </div>
    <br>

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
      <label class="col-md-4 control-label" for="head">Subject 1</label>
      <div class="col-md-4" style="bottom:-5px;">
          <input type="radio" name="s1at" value="1"> Present</input> &emsp;  &emsp;
          <input type="radio" name="s1at" value="0"> Absent</input>
        </div>
      </div>
      <br>

      <div class="form-group">
        <label class="col-md-4 control-label" for="head">Subject 2</label>
        <div class="col-md-4" style="bottom:-5px;">
            <input type="radio" name="s2at" value="1"> Present</input> &emsp;  &emsp;
            <input type="radio" name="s2at" value="0"> Absent</input>
          </div>
        </div>
        <br>

        <div class="form-group">
          <label class="col-md-4 control-label" for="head">Subject 3</label>
          <div class="col-md-4" style="bottom:-5px;">
              <input type="radio" name="s3at" value="1"> Present</input> &emsp;  &emsp;
              <input type="radio" name="s3at" value="0"> Absent</input>
            </div>
          </div>
          <br>


			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i>&nbsp;Add attendance</button>
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
          $eno =$_POST['eno'];
          $date= new DateTime($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']);
          $insertdate= $date->format('Y-m-d');

          $s1at=$_POST['s1at'];
          $s2at=$_POST['s2at'];
          $s3at=$_POST['s3at'];

             echo $eno;
             echo $insertdate;
             echo $s2at;
        if(enter_attendance($eno,$insertdate,$s1at,$s2at,$s3at))
        {
          echo "Updated Successfully";
          header('location:entry?msg=addSuccess');
        }
        else {
          echo "error";
        }
       }
        require_once 'footer.php';
        ?>

      </body>
      </html>
