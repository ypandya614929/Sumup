<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$news=fetchnews();
?>
<br>
<div id="ne"><br><br>
<div class="container">
<fieldset>
  <legend>News</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Heading</th>
        <th class="text-center">Date</th>
        <th class="text-center">News</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($news as $news ) {
          echo '<tr class="text-center">';
          echo '<td>'.$news['head'].'</td>';
          echo '<td>'.$news['date1'].'</td>';
          echo '<td>'.$news['news'].'</td>';
          echo '</tr>';
          }
      ?>
    </tbody>
  </table>
</div><br><br>
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4"><center>
   <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a></center>
</div>
</fieldset>
</div>
</div>
<?php
  require_once 'footer.php';
  ob_end_flush();
  ?>
