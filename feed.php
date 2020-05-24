<?php
require_once '../sumup/include/function.php';

 if(!isset($_POST['submit']) ) {?>
   <div class="container">
<form name = "newsUpdate" method = "post" action = "" class="form-horizontal">

	<fieldset>
		<legend>Feedback</legend>
    <br>
    <div class="form-group">
      <label class="col-md-4 control-label" for="head">Name</label>
      <div class="col-md-4">
      <input id="head" name="name" type="text" placeholder="" class="form-control input-md" required="" value="">
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="col-md-4 control-label" for="head">Email</label>
      <div class="col-md-4">
      <input id="head" name="email" type="text" placeholder="" class="form-control input-md" required="" value="">
      </div>
    </div>
    <br>

			<div class="form-group">
			  <label class="col-md-4 control-label" style="font-size:18px;text-align:right;" for="textarea">Message : </label>
			  <div class="col-md-4">
			    <textarea class="form-control" id="textarea" name="msg" ></textarea>
			  </div>
			</div>
      <br>



			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
          <button id="submit" name="submit" class="btn btn-success">&nbsp;Submit</button>

			  </div>
			  <div class="col-md-4">
			  </div>
			</div>
	</fieldset>
</form>
</div>
<?php
}
else {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['msg'];
  if(addfeedback($name,$email,$msg)){
    ?>
    <script type="text/javascript">
    alert("Feedback Submited");
    </script>
    <?php
  }
} ?>
