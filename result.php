<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
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
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6" style="text-align:absolute;">
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
        $total=0;
        foreach($res as $res ) {
          echo '<tr class="text-center">';
          echo '<td>Subject1</td>';
          echo '<td>'.$res['s1'].'</td>';
          echo '</tr>';
          echo '<tr class="text-center">';
          echo '<td>Subject2</td>';
          echo '<td>'.$res['s2'].'</td>';
          echo '</tr>';
          echo '<tr class="text-center">';
          echo '<td>Subject3</td>';
          echo '<td>'.$res['s3'].'</td>';
          echo '</tr>';
          $total=$res['s1']+$res['s2']+$res['s3'];
          }
      ?>
    </tbody>
  </table>
</center><br>
<br>
<h4><center>Total : <h1><?php echo $total;?></h1></h4>
</center>
</div><br><br>
</div>
</div>
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4"><center>
   <a href="res.php#rs" class="btn btn-default">&nbsp;Cancel</a></center>
</div>
</fieldset>
</div>
</div>
<?php
  require_once 'footer.php';
  ob_end_flush();
  ?>
