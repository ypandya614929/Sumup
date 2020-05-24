<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
$event=fetchevent();
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
<div id="e">
  <br><br>
<div class="container">
<fieldset>
  <legend>event</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Index</th>
        <th>Title</th>
        <th>Date</th>
        <th>event</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i=1;
        foreach($event as $event ) {

          $head=$event['head'];
          if(isset($_POST['submit']) and $del==0) {
            $del=1;
            if ( delevent($_POST['head'])) {
              $_SESSION['c']=1;
              header('location:event.php');
            }
            else {
              header('location:home.php');
            }
          }
          else{
          echo '<tr>';
          echo '<td>'.$i.'</td>';
          echo '<td>'.$event['head'].'</td>';
          echo '<td>'.$event['date1'].'</td>';
          echo '<td>'.$event['events'].'</td>';
          echo '<td>';
            global $head;
        }

          ?>
          <form action="" method="post">
            <input type="hidden" name="head" value="<?php echo $head; ?>">
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
  <a href="./addevent.php#ae" class="btn btn-success">Add event</a>
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
