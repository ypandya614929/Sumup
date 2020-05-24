<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$profile=fetchprofile($_SESSION['en']);
?>
<br>
<div id="pr"><br><br>
<div class="container">
<fieldset>
  <legend>Profile</legend>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6" style="text-align:absolute;">
            <div class="table-responsive">
            <table class="table">
        <tbody>
          <?php
            foreach($profile as $profile ) {
              ?>
              <tr>
                <td>Firstname : </td><td><?php echo $profile['fname']; ?></td>
              </tr>
              <tr>
                <td>Lastname : </td><td><?php echo $profile['lname']; ?></td>
              </tr>
              <tr>
                <td>Enrollment no : </td><td><?php echo $profile['enroll']; ?></td>
              </tr>
              <tr>
                <td>Semester : </td><td><?php echo $profile['sem']; ?></td>
              </tr>
              <tr>
                <td>Branch : </td><td><?php echo $profile['branch']; ?></td>
              </tr>
              <tr>
                <td>Mobile no : </td><td><?php echo $profile['mob']; ?></td>
              </tr>
              <tr>
                <td>Email address : </td><td><?php echo $profile['email']; ?></td>
              </tr>
              <?php } ?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
  <br><br>
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4">
  <?php
  if($_SESSION['sel']=="Students"){?>
  <a href="createprofile.php#c" class="btn btn-success">&nbsp;Create Profile</a>
  <a href="upprofile.php#u" class="btn btn-success">&nbsp;Edit Profile</a>
<?php }?>
   <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a>
</div>
</fieldset>
</div>
</div>
</html>
<?php
  require_once 'footer.php';
  ob_end_flush();
  ?>
