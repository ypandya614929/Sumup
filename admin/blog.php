<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
$blog=fetchblog();
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
<div id="b"><br><br>
<div class="container">
<fieldset>
  <legend>Blog</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Date</th>
        <th>Author</th>
        <th>Blog</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i=1;
      $uname=loginname($_SESSION['en']);
      foreach($blog as $blog ) {
        $head=$blog['head'];
        $b=$blog['blog'];
        if(isset($_POST['submit']) and $del==0) {
          $del=1;
          if ( delblog($_POST['head'],$_POST['b'])) {
            $_SESSION['c']=1;
            header('location:blog.php');
          }
          else {
            header('location:home.php');
          }

        }
        else{
                  echo '<tr>';
          echo '<td>'.$blog['head'].'</td>';
          echo '<td>'.$blog['date1'].'</td>';
          echo '<td>'.$blog['user'].'</td>';
          echo '<td>'.$blog['blog'].'</td>';
          echo '<td>';
          global $head;
          global $b;
        }
          ?>
          <form action="" method="post">
            <input type="hidden" name="head" value="<?php echo $head; ?>">
            <input type="hidden" name="b" value="<?php echo $b; ?>">
            <button id="submit" name="submit" class="btn btn-default">Delete</button>
          </form>
          <?php
          echo '</td></tr>';
          $i++;
        }
      ?>
    </tbody>
  </table>
</div><br><br><center>
  <a href="./addblog.php#ab" class="btn btn-success">Add Blog</a>
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
