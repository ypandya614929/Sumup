<?php

	require_once 'con.php';

	function fp($eno,$type,$email){
		global $conn;
		$sql = "SELECT * FROM sumup WHERE ENo='$eno' AND email='$email'";
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	function fp1($eno,$type,$email){
		global $conn;
		$sql = "SELECT * FROM plogin WHERE ENo='$eno' AND email='$email'";
		$result = mysqli_query($conn, $sql);
		return $result;
	}

		function loginname($eno){
			global $conn;
      $sql = "SELECT * FROM sumup WHERE ENo='$eno'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		function loginnamep($eno){
			global $conn;
      $sql = "SELECT * FROM plogin WHERE ENo='$eno'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}


    function home_login ( $sel , $eno , $pw ) {
      global $conn;
      $sql = "SELECT * FROM sumup WHERE pw='$pw' AND ENo='$eno' AND type='$sel'";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      if ( $count == 1 ) {
        return true;
      }
      else {
        return false;
      }
    }

    function plogin ( $sel , $eno , $pw ) {
      global $conn;
      $sql = "SELECT * FROM plogin WHERE pw='$pw' AND ENo='$eno' AND type='$sel'";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      if ( $count == 1 ) {
        return true;
      }
      else {
        return false;
      }
    }

		function home_register($fname,$lname,$sel,$eno,$email,$pw,$pw1){
			global $conn;
			$sql = "INSERT INTO sumup (FName, LName, ENo, type, pw, pw1, email) VALUES ('$fname', '$lname', '$eno', '$sel', '$pw', '$pw1', '$email')";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function preg($fname,$lname,$sel,$eno,$email,$pw,$pw1){
			global $conn;
			$sql = "INSERT INTO plogin (FName, LName, ENo, type, pw, pw1, email) VALUES ('$fname', '$lname', '$eno', '$sel', '$pw', '$pw1', '$email')";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function admin_login($uid , $pw){
			global $conn;
			$sql = "SELECT * FROM admin WHERE pw='$pw' AND user_id='$uid'";
		  $result = mysqli_query($conn,$sql);
			$count = mysqli_num_rows($result);
			if ( $count == 1 ) {
        return true;
      }
      else {
        return false;
      }
		}

		function addblog($head, $blog,$user){
			global $conn;
			$date1=date("Y-m-d");
			$sql = "INSERT INTO blog (head,blog,date1,user) VALUES ('$head', '$blog', '$date1',$user)";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function fetchblog() {
			global $conn;
			$sql = "SELECT * FROM blog";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		function fetchfeedback() {
			global $conn;
			$sql = "SELECT * FROM feedback";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		function delfeed($head) {
			global $conn;
			$sql = "DELETE FROM feedback WHERE msg='$head'";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function addnews($head, $news){
			global $conn;
			$date1=date("Y-m-d");
			$sql = "INSERT INTO news (head,news,date1) VALUES ('$head', '$news', '$date1')";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function fetchnews() {
			global $conn;
			$sql = "SELECT * FROM news";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		function delnews($head) {
			global $conn;
			$sql = "DELETE FROM news WHERE head='$head'";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function delblog($head,$msg) {
			global $conn;
			$sql = "DELETE FROM blog WHERE head='$head' AND blog='$msg'";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}


		function sendmsg($toen, $msg1,$enroll,$sel){
			global $conn;
			$sql = "INSERT INTO message (enroll,toen,msg,sel) VALUES ('$enroll', '$toen', '$msg1','$sel')";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function fetchmsg($enroll,$sel) {
			global $conn;
			$sql = "SELECT * FROM message WHERE toen='$enroll' AND sel='$sel'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		function fetchmsgall($enroll) {
			global $conn;
			$sql = "SELECT * FROM message WHERE toen='$enroll'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		function delmsg($msg) {
			global $conn;
			$sql = "DELETE FROM message WHERE msg='$msg'";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function createprofile ( $fname , $lname, $en,$email, $mob,$dob,$sem,$branch ){
			global $conn;
			$sql = "INSERT INTO profile (fname,lname,email,dob,enroll,sem,branch,mob) VALUES ('$fname', '$lname', '$email','$dob','$en','$sem','$branch','$mob')";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}

		function updateprofile($fname , $lname, $en,$email, $mob,$dob,$sem,$branch ){
			global $conn;
			$sql = "UPDATE profile SET fname='$fname',lname='$lname',email='$email',dob='$dob',enroll='$en',sem='$sem',branch='$branch',mob='$mob' WHERE enroll='$en'";
			if (mysqli_query($conn, $sql)) {
				return true;
			}
			else {
        return false;
      }
		}


		function fetchprofile($enroll) {
			global $conn;
			$sql = "SELECT * FROM profile WHERE enroll='$enroll'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		function countprof($enroll) {
			global $conn;
			$sql = "SELECT * FROM profile WHERE enroll='$enroll'";
			$result = mysqli_query($conn, $sql);
			$rowcount= mysqli_num_rows($result);
			return $rowcount;
		}

		function enter_attendance($eno,$insertdate,$s1at,$s2at,$s3at)
		{

			global $conn;
			$sql = "INSERT INTO attendance(eno,adate,s1,s2,s3) VALUES('$eno','$insertdate','$s1at','$s2at','$s3at')";
			if(mysqli_query($conn,$sql))
			{
				return true;
			}
			else
			 {
				return false;
			}
		}

		function get_attendance($eno,$insertdate)
		{
				global $conn;
				$sql="SELECT  * FROM attendance WHERE eno='$eno' AND adate='$insertdate' ";
				$res=mysqli_query($conn,$sql);
				return $res;


		}
			function get_attendance_bool($eno,$insertdate)
			{
					global $conn;
					$sql="SELECT  * FROM attendance WHERE eno='$eno' AND adate='$insertdate'";
					$res=mysqli_query($conn,$sql);
					if(mysqli_query($conn,$sql))
					{
						return true;
					}
					else
					 {
						return false;
					}
			}

			function getdetails($eno)
			{
				global $conn;
				$sql="SELECT  * FROM profile WHERE eno='$eno' ";
				$res=mysqli_query($conn,$sql);
				return $res;
			}

			function fetchevent() {
				global $conn;
				$sql = "SELECT * FROM event";
				$result = mysqli_query($conn, $sql);
				return $result;
			}

			function addevent($head, $events){
				global $conn;
				$date1=date("Y-m-d");
				$sql = "INSERT INTO event (head,events,date1) VALUES ('$head', '$events', '$date1')";
				if (mysqli_query($conn, $sql)) {
					return true;
				}
				else {
	        return false;
	      }
			}

			function delevent($head) {
				global $conn;
				$sql = "DELETE FROM event WHERE head='$head'";
				if (mysqli_query($conn, $sql)) {
					return true;
				}
				else {
	        return false;
	      }
			}

			function addfeedback($name,$email,$msg) {
				global $conn;
				$sql = "INSERT INTO feedback(name,email,msg) VALUES('$name','$email','$msg')";
				if (mysqli_query($conn, $sql)) {
					return true;
				}
				else {
	        return false;
	      }
			}

			function addresult($eno,$s1at,$s2at,$s3at) {
				global $conn;
				$sql = "INSERT INTO result(eno,s1,s2,s3) VALUES('$eno','$s1at','$s2at','$s3at')";
				if (mysqli_query($conn, $sql)) {
					return true;
				}
				else {
	        return false;
	      }
			}

			function fetchres() {
				global $conn;
				$sql = "SELECT * FROM result";
				$result = mysqli_query($conn, $sql);
				return $result;
			}

			function delres($eno) {
				global $conn;
				$sql = "DELETE FROM result WHERE eno='$eno'";
				if (mysqli_query($conn, $sql)) {
					return true;
				}
				else {
	        return false;
	      }
			}

			function fetchresult($eno) {
				global $conn;
				$sql = "SELECT * FROM result WHERE eno='$eno'";
				$result = mysqli_query($conn, $sql);
				return $result;
			}
?>
