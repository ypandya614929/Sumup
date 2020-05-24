<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$blog=fetchblog();
global $del;
$del=0;
?>
<br>
<div id="be"><br><br>
<div class="container">
  <?php
foreach($blog as $blog ) {
  $loginname=loginname($blog['user']);
  foreach ($loginname as $loginname) {
  echo '<fieldset>';
  echo '<legend>'.$blog['user']." ( ".$loginname['FName']." ".$loginname['LName'].' )</legend>';?>
  <div class="table-responsive">
  <table class="table">

  <tbody>
  <?php
  $head=$blog['head'];
  $b=$blog['blog'];


  if(isset($_POST['submit']) and $del==0) {
    $del=1;
    if ( delblog($_POST['head'],$_POST['b'])) {
      $_SESSION['c']=1;
      header('location:blog.php');
    }
    else {
      header('location:welcome.php');
    }
  }

  else{
    echo '<tr>';
    echo "Title :  ".$blog['head']."<br>";
    echo "Date : ".$blog['date1'].'<br>';
    echo '<td>'.$blog['blog'].'</td><br>';
    echo '</tr>';
    global $head;
    global $b;
  }
  ?>
</tbody>
  </table>
</div>
<?php
if($_SESSION['en']==$blog['user']){?>
  <form action="" method="post">
    <input type="hidden" name="head" value="<?php echo $head; ?>">
    <input type="hidden" name="b" value="<?php echo $b; ?>">
    <?php if($_SESSION['sel']=="Students"){?>
      <button id="submit" name="submit" class="btn btn-default">Delete</button>
  <?php } ?>
  </form>
  <?php
}?>
</fieldset>
<br><br>
<br>
<?php
}
}
?>
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4"><center>
  <?php
  if($_SESSION['sel']=="Students"){?>
  <a href="addblog.php#ab" class="btn btn-success">Add Blog</a>
<?php } ?>
   <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a></center>
</div>
</div>
</div>
<?php
  require_once 'footer.php';
  ob_end_flush();
  ?>
