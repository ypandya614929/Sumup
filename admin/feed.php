<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
$feed=fetchfeedback();
global $del;
$del=0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="e"><br><br>
<div class="container">
<fieldset>
  <legend>Feedback</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Message</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i=1;
        foreach($feed as $feed) {
          echo '<tr>';
          echo '<td class="text-center">'.$feed['name'].'</td>';
          echo '<td class="text-center">'.$feed['email'].'</td>';
          echo '<td class="text-center">'.$feed['msg'].'</td>';
          echo '<td>';
          global $head;
          $head=$feed['msg'];
          if(isset($_POST['submit']) and $del==0) {
            $del=1;
            if ( delfeed($head)) {
              $_SESSION['c']=1;
              header('location:feed.php#f');
            }
            else {
              header('location:home.php');
            }
          }
          ?>
          <form action="" method="post">
            <button id="submit" name="submit" class="btn btn-default">Delete</button>
          </form>
          <?php
          echo '</td></tr>';
          $i++;
        }
      ?>
    </tbody>
  </table>
</div><br><br>
<center>
  <a href="./home.php#h" class="btn btn-default">&nbsp;Cancel</a>
</center>
</fieldset>
</div>
</div>
</html>
<?php
  require_once 'footer.php';
  ob_end_flush();
  ?>
