<!DOCTYPE html>
<html lang="en">
<head>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #5cb85c;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
a {
  text-decoration: none !important;
}
</style>
  <title>SumUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"href="css/style.css">
</head>
<body>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
      } else {
          document.getElementById("myBtn").style.display = "none";
      }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }
  </script>

  <div class="jumbotron container-fluid" style="background-color:#c2d4d8;">
    <div class="container text-center">
      <div id="y">
      <h1><a href="welcome.php">SumUp</a></h1>
      <p>Mission, Vission & Success</p>
      <form class="navbar-form navbar-right" action="dels.php" method="post">
        <button type="submit" class="btn btn-success">Logout</button>
      </form>
    </div></div><div id="a"><br>

    <nav class="navbar navbar" style="background-color:#e9ece5;">

      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li ><a href="welcome.php#a">Home</a></li>
          <li><a href="profile.php#pr">Profile</a></li>
          <li><a href="msg.php#ms">Message</a></li>
          <li><a href="res.php#rs">Result</a></li>
          <li><a href="viewevent.php#eve">Event</a></li>
          <li><a href="seldate.php#att">Attendance</a></li>
          <li><a href="viewnews.php#ne">News</a></li>
          <li><a href="blog.php#be">Blog</a></li>
        </ul>
        <form class="navbar-form navbar-right" action="search.php#pr" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="en">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
</div>
      </div>
    </nav>
  </div>
</div>
</body>
</html>
