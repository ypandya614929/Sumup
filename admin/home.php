<?php
require_once 'header.php';
ob_start();
session_start();
$_SESSION['en']="1";
if($_SESSION['c']!=1){
  header("Location:../admin/index.php");
  exit;
}
$uid=$_SESSION['uid'];
$_SESSION['sel']="admin";
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
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div id="h"><br><br>
<div class="container" >
    <div class="alert alert-success">
  <div><center><h3>Welcome to Admin Panel</h3>
  </div>
</div>
</div><br><br>
<div class="home1">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6" ><div id="b1" class="container">
    <br>
    <a href="addresult#ar" id="ar" class="btn btn-success" role="button">Add Result</a><br><br>
    <a href="res.php#rs" id="ar" class="btn btn-success" role="button">View Result</a><br><br>
    <a href="addevent.php#ae" id="ae" class="btn btn-success" role="button">Add Events</a><br><br>
    <a href="event.php#e" id="ae" class="btn btn-success" role="button">View Events</a><br><br>
    <a href="msg.php#m" id="sm" class="btn btn-success" role="button">View Messages</a><br><br>
    <a href="entry.php#en" id="att" class="btn btn-success" role="button">Add Attendance</a><br><br>
    <a href="viewatt.php#att" id="att" class="btn btn-success" role="button">View Attendance</a><br>
  </div>
</div>
    <div class="col-sm-6"><div id="b2" class="container">
    <br>
    <a href="addblog.php#ab" id="ab" class="btn btn-success" role="button">Add Blogs</a><br><br>
    <a href="blog.php#b" id="ab" class="btn btn-success" role="button">View Blogs</a><br><br>
    <a href="addnews.php#an" id="an" class="btn btn-success" role="button">Add News</a><br><br>
    <a href="news.php#n" id="an" class="btn btn-success" role="button">View News</a><br><br>
    <a href="sendmsg.php#sm" id="sm" class="btn btn-success" role="button">Send Messages</a><br><br>
    <a href="search.php#s" id="ep" class="btn btn-success" role="button">View Profile</a><br><br>
    <a href="createprofile.php#cp" id="sm" class="btn btn-success" role="button">Create admin profile</a><br><br>
    </div>
  </div>
  </div>
  <div class="col-md-12"><br>
    <ul style="list-style:none;text-align:center;" class="admin-items">
    <li><center><a class="btn btn-success"href = "feed.php#e">&nbsp;&nbsp;&nbsp;View Feedback&nbsp;&nbsp;&nbsp;</a><br><br>
      <a class="btn btn-success"href = "dels.php">&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;</a></center></li><br><br>
    </ul>
  </div>
</div>
</div>
</div>
</div>
</center>
<?php
require_once 'footer.php';
ob_end_flush();
?>
