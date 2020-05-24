<?php
require_once 'header.php';
require_once '../include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$res=fetchresult($_POST['eno']);
?>
<br>
<div id="r"><br><br>
<div class="container">
<fieldset>
  <legend>Result</legend>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Subjects</th>
        <th class="text-center">Marks</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($res as $res ) {
          echo '<tr class="text-center">';
          echo '<td>'.$res['sub'].'</td>';
          echo '<td>'.$res['mark'].'</td>';
          echo '</tr>';
          }
      ?>
    </tbody>
  </table>
</div><br><br>
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4"><center>
   <a href="welcome.php" class="btn btn-default">&nbsp;Cancel</a></center>
</div>
</fieldset>
</div>
</div>
<?php
  require_once 'footer.php';
  ob_end_flush();
  ?>
