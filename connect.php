<?php
$connection = mysqli_connect('localhost:3308', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_connect_error());
}
if(!isset($select_db)){
	$select_db = mysqli_select_db($connection, 'reservation');
}
if (!$select_db){
    die("Database Selection Failed" . mysqli_connect_error());
}
?>