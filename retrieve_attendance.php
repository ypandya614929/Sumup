<?php
require_once 'headeruser.php';
require_once '../sumup/include/function.php';
ob_start();
session_start();
if($_SESSION['c']!=1){
  header("Location:index.php");
  exit;
}
$eno=$_SESSION['en'];$date= new DateTime($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']);

$insertdate= $date->format('Y-m-d');

$ans=get_attendance($eno,$insertdate);
$profile=getdetails($eno);

   ?>
   <br>
   <div id="att"><br><br>
   <div class="container">
   <fieldset>
     <legend>Your Attendance</legend>
     <div class="container">
     <div class="row">
       <div class="col-md-6" style="text-align:absolute;">
               <div class="table-responsive">
               <table class="table">
           <tbody>
             <?php
             $count=0;
               foreach($ans as $ans ) {
                 ?>
                 <tr>
                   <td>Enrollment No : </td><td><?php echo $ans['eno'] ?></td>
                 </tr>
                 <tr>
                   <td>Date : </td><td><?php echo $ans['adate']; ?></td>
                 </tr>
                 <tr>
                   <td>Subject 1: </td><td><?php if($ans['s1']==1){ echo "Present"; $count++;} else{ echo "Absent";} ?></td>
                 </tr>
                 <tr>
                   <td>Subject 2: </td><td><?php if($ans['s2']==1){ echo "Present";$count++;} else{ echo "Absent";} ?></td>
                 </tr>
                 <tr>
                   <td>Subject 3 </td><td><?php if($ans['s3']==1){ echo "Present";$count++;} else{ echo "Absent";} ?></td>
                 </tr>


                 <?php } ?>
                 <tr>
                   <td>Total: </td><td><?php $per=(100*$count)/3; echo $count." (".sprintf('%0.2f',$per) ."%)"; ?></td>
                 </tr>
           </tbody>
         </table>
         </div>
       </div>
     </div>
   </div>
     <br><br>
   <label class="col-md-5 control-label" for="submit"></label>
   <div class="col-md-5">
      <a href="welcome.php#a" class="btn btn-default">&nbsp;Cancel</a>
   </div>
   </fieldset>
   </div>
   </div>
   </div>
   </html>
   <?php  require_once 'footer.php'; ?>
 </body>
 </html>
