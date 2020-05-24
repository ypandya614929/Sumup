<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$event=fetchevent();
?>
<br>
<div id="eve"><br><br>
<div class="container">
<fieldset>
  <legend>Event</legend>
  <div class="table-responsive">
  <table class="table" >
    <thead >
      <tr >
        <th class="text-center"> Title</th>
        <th class="text-center">Date</th>
        <th class="text-center">Event</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($event as $event ) {
          echo '<tr class="text-center">';
          echo '<td>'.$event['head'].'</td>';
          echo '<td>'.$event['date1'].'</td>';
          echo '<td>'.$event['events'].'</td>';
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
