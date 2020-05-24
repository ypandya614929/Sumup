<?php
    require_once './include/function.php';
    if(!isset($_POST['submit']) ) {
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
       <title>
         Enter Attendance
       </title>
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
        require_once 'header.php';
         ?>
      <div class="karan">
      <div class="container">
              <div class="row centered-form">
              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
              	<div class="panel panel-default">
              		<div class="panel-heading">
      			    		<h3 class="panel-title"><center>Enter Attendance</center></h3>
      			 			</div>
      			 			<div class="panel-body">
      			    		<form role="form" action="entry.php" method="POST">
                      <div class="form-group">
      			    				<input type="text" name="eno" id="eno" class="form-control input-sm" placeholder="Enrollment no">
      			    			</div>

      			    			<div class="row">
      			    				<div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-row show-inputbtns">
                            <input type="date" data-date-inline-picker="false" name="adate" data-date-popover='{"inline": true }' />
                          </div>
      			    				</div>
      			    			</div>
                      <div class="row">
      			    				<div class="col-xs-12 col-sm-12 col-md-12">
      			    					<div class="form-group">
      			    						Subject 1 &emsp; <input type="radio" name="s1at" value="1">Present</input> &emsp;  &emsp;
                            <input type="radio" name="s1at" value="0"> Absent</input>
      			    					</div>
      			    				</div>
      			    			</div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            Subject 2 &emsp; <input type="radio" name="s2at" value="1">Present</input>  &emsp;  &emsp;
                            <input type="radio" name="s2at" value="0"> Absent</input>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            Subject 3 &emsp; <input type="radio" name="s3at" value="1">Present</input>  &emsp;  &emsp;
                            <input type="radio" name="s3at" value="0"> Absent</input>
                          </div>
                        </div>
                      </div>


                     <center><button id="submit" name="submit" class="btn btn-success">Submit</button></center>
      			    		</form>
      			    	</div>
      	    		</div>
          		</div>
          	</div>
          </div>
        </div>

        <?php
      }
        else{
          date_default_timezone_set("Asia/Kolkata");
          echo "Today : " . date("d-m-Y")."<br>";

          $eno =$_POST['eno'];
          $insertdate = trim($_POST['adate']);
          $insertdate = mysqli_real_escape_string($conn,$insertdate);
          $insertdate = date('Y-m-d', strtotime($_POST['adate']));
          $s1at=$_POST['s1at'];
          $s2at=$_POST['s2at'];
          $s3at=$_POST['s3at'];

           $s1at=intval($s1at);
            $s2at=intval($s2at);
             $s3at=intval($s3at);

        if(enter_attendance($eno,$insertdate,$s1at,$s2at,$s3at))
        {
          echo "Updated Successfully";
          header('location:attendance_login.php?eno=$eno');
        }
        else {
          echo "error";
        }
       }
        require_once 'footer.php';
        ?>

      </body>
      </html>
