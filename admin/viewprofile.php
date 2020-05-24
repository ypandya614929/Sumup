<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
$profile=fetchprofile($_POST['eno']);
$count=countprof($_POST['eno']);
?>
<div id="s"><br><br>
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
          if($count==1){
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
              <?php }
            }
            else {?>
              <script type="text/javascript">
              alert("Data Not Available");
              window.location='../admin/home.php#h';
              </script>
              <?php
            }?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
  <br><br>
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4">
  <center>
   <a href="home.php#h" class="btn btn-default">&nbsp;Cancel</a>
</center></div>
</fieldset>
</div>
</div>
<?php
require_once 'footer.php';
ob_end_flush();
?>
