<?php
	session_start();
	require_once 'connect.php';
	$roomno = $_POST['roomno'];
	$date = $_POST['date'];
	$uid = $_SESSION['uid'];
	  if(!($queryResult = mysqli_query($connection, "INSERT INTO reservation (room_no, user, odate) VALUES ($roomno,'$uid','$date')"))){
		echo "CALL failed: " .  mysqli_error($connection);
	  }
	  else{
	  }
?>