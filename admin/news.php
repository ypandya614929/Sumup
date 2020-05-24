<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
$news=fetchnews();
global $del;
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="n"><br><br>
<div class="container">
<fieldset>
  <legend>News</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Index</th>
        <th>Heading</th>
        <th>Date</th>
        <th>News</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i=1;
        foreach($news as $news ) {
            $head=$news['head'];
          if(isset($_POST['submit']) and $del==0) {
            $del=1;
            if ( delnews($_POST['head'])) {
              $_SESSION['c']=1;
              header('location:news.php');
            }
            else {
              header('location:home.php');
            }
          }
          else{
            echo '<tr>';
            echo '<td>'.$i.'</td>';
            echo '<td>'.$news['head'].'</td>';
            echo '<td>'.$news['date1'].'</td>';
            echo '<td>'.$news['news'].'</td>';
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
  <a href="./addnews.php#an" class="btn btn-success">Add News</a>
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
