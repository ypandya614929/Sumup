<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$res=fetchres();
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
<div id="rs">
  <br><br>
<div class="container">
<fieldset>
  <legend>Result</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Enrollment</th>
        <th>Subject1</th>
        <th>Subject2</th>
        <th>Subject3</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i=1;
        foreach($res as $res ) {

          $enroll=$res['eno'];
          if(isset($_POST['submit']) and $del==0) {
            $del=1;
            if ( delres($_POST['eno'])) {
              $_SESSION['c']=1;
              header('location:res.php');
            }
            else {
              header('location:home.php');
            }
          }
          else{
          echo '<tr>';
          echo '<td>'.$res['eno'].'</td>';
          echo '<td>'.$res['s1'].'</td>';
          echo '<td>'.$res['s2'].'</td>';
          echo '<td>'.$res['s3'].'</td>';
          echo '<td>';
            global $head;
        }

          ?>
          <form action="" method="post">
            <input type="hidden" name="eno" value="<?php echo $enroll; ?>">
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
  <a href="./addresult.php#ar" class="btn btn-success">Add Result</a>
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
