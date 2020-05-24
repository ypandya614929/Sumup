<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();

if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$loginname=loginname($_SESSION['en']);
$news=fetchnews();
$event=fetchevent();
$insertdate=date("Y-m-d");
$ans=get_attendance($_SESSION['en'],$insertdate);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SumUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <?php
  $enroll=$_SESSION['en'];
  ?>
  <div class="container">
    <div class="alert alert-success">
        <?php foreach($loginname as $loginname ) { ?>
  <div class="well well-sm"><center><h2>Hello <b><?php if($_SESSION['sel']=="Parents"){ echo " Parent of ,";} echo $loginname['FName']." ".$loginname['LName']." (".$enroll.")"; }?> </b>, Welcome to SumUp</h2>
  </div>
    </div>

  <center>
  <div class="row">
    <div class="col-sm-4">
    <fieldset>
  <legend>News</legend>
    <table class="table">
    <thead>
      <tr>
        <th class="text-center">News</th>
        <th class="text-center">Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $c=0;
        foreach($news as $news ) {
          echo '<tr class="text-center">';
          echo '<td>'.$news['head'].'</td>';
          echo '<td>'.$news['date1'].'</td>';
          echo '</tr>';
          $c=$c+1;
          if($c==3){
            break;
          }
          }
      ?>
    </tbody>
  </table>
  <a href="viewnews.php#ne" style="color: green">View More</a>
  </div></fieldset>

    <div class="col-sm-4">
      <table class="table">
    <thead>
      <tr>
        <th class="text-center"> <h4>Today's Attendance</h4></th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
      <?php
             $count=0;
               foreach($ans as $ans ) {
                 ?>

                   <?php if($ans['s1']==1){$count++;}?>

                   <?php if($ans['s2']==1){$count++;}?>


                   <?php if($ans['s3']==1){$count++;}?>

                 <?php } ?>
                 <tr class="text-center">
                   <td><br><h1><?php $per=(100*$count)/3; echo sprintf('%0.2f',$per) ."%"; ?></h1></td>
                 </tr>
      </tr>
    </tbody>
  </table>
    </div>

    <div class="col-sm-4">
    <fieldset>
  <legend>Event</legend>
      <table class="table">
    <thead>
      <tr>
        <th class="text-center">Events</th>
                <th class="text-center">Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $c=0;
        foreach($event as $event ) {
          echo '<tr class="text-center">';
          echo '<td>'.$event['head'].'</td>';
          echo '<td>'.$event['date1'].'</td>';
          echo '</tr>';
          $c=$c+1;
          if($c==3){
            break;
          }
          }
      ?>
    </tbody>
  </table>
    <a href="viewevent.php#eve" style="color: green">View More</a>
    </div>
    </fieldset>
  </div>
<br><br>
<form action="dels.php" method="post">
  <button type="submit" class="btn btn-success">Logout</button>
</form>
  </center>
  </div>
</div>
</div>
</body>
</html>
<?php
require_once 'footer.php';
ob_end_flush();
?>
