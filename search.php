<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$profile=fetchprofile($_POST['en']);
$count=countprof($_POST['en']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
          if($count>0){
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
              window.location='../sumup/welcome.php#a';
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
   <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a>
</div>
</div>
</fieldset>
</div>
</html>
<?php
  require_once 'footer.php';
  ob_end_flush();
  ?>
