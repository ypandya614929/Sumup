<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$msg=fetchmsg($_SESSION['en'],$_SESSION['sel']);
global $del;
$del=0;
?>
<br>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="ms"><br><br>
<div class="container">
<fieldset>
  <legend>Message</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">From</th>
        <th class="text-center">Message</th>
        <th class="text-center">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($msg as $msg ) {
          $msg2=$msg['msg'];
          if($_SESSION['sel']=="Students"){
            $loginname=loginname($msg['enroll']);
          }
          else {
            $loginname=loginnamep($msg['enroll']);
          }
           foreach($loginname as $loginname ) {

             if(isset($_POST['submit']) and $del==0) {
               $del=1;
               if ( delmsg($_POST['msg2'])) {
                 $_SESSION['c']=1;
                 header('location:msg.php');
               }
               else {
                 header('location:welcome.php');
               }
             }
             else{

          echo '<tr class="text-center">';
          echo '<td>'.$loginname['FName']." ".$loginname['LName']." (".$msg['enroll'].")".'</td>';
          echo '<td>'.$msg['msg'].'</td>';
          echo '<td>';
          global $msg2;

        }
        }?>
          <form action="" method="post">
            <input type="hidden" name="msg2" value="<?php echo $msg2; ?>">
            <button id="submit" name="submit" class="btn btn-default">Delete</button>
          </form>
          <?php
          echo '</td></tr>';
        }
      ?>
    </tbody>
  </table>
</div><br><br>
<label class="col-md-4 control-label" for="submit"></label>
 <div class="col-md-4">
 <center>
     <a href="sendmsg.php#sm" class="btn btn-success">Send Message</a>

  <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a></center>
</div>
</div>
</fieldset>
</div>
</html>
<?php
require_once 'footer.php';
ob_end_flush();
?>
