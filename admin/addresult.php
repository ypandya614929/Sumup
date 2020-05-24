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
<div id="ar"><br><br>
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
		<legend>Add Result</legend>
    <div class="form-group">
      <label class="col-md-4 control-label" for="head">Enrollment no</label>
      <div class="col-md-4">
      <input id="eno" name="eno" type="text" placeholder="" class="form-control input-md" required="" value="">
      </div>
    </div>
  <br>
    <div class="form-group">
      <label class="col-md-4 control-label" for="head">Subject 1</label>
      <div class="col-md-4" style="bottom:-5px;">
        <input id="eno" name="s1" type="text" placeholder="" class="form-control input-md" required="" value="">

        </div>
      </div>
      <br>

      <div class="form-group">
        <label class="col-md-4 control-label" for="head">Subject 2</label>
        <div class="col-md-4" style="bottom:-5px;">
          <input id="eno" name="s2" type="text" placeholder="" class="form-control input-md" required="" value="">

          </div>
        </div>
        <br>

        <div class="form-group">
          <label class="col-md-4 control-label" for="head">Subject 3</label>
          <div class="col-md-4" style="bottom:-5px;">
            <input id="eno" name="s3" type="text" placeholder="" class="form-control input-md" required="" value="">

            </div>
          </div>
          <br>


			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i>&nbsp;Add Result</button>
          <a href="./res.php#rs" class="btn btn-success">View Result</a>
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
          $s1at=$_POST['s1'];
          $s2at=$_POST['s2'];
          $s3at=$_POST['s3'];

        if(addresult($eno,$s1at,$s2at,$s3at))
        {
          header('location:addresult.php?msg=addSuccess');
        }
        else {
          echo "failed";
        }
       }
        require_once 'footer.php';
        ?>

      </body>
      </html>
