<html>
<body>

<?php 
	//variables
	$username= $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["name"];
	
	//db connection
	$link = mysqli_connect('localhost:3308', 'root', '');
	$db_selected = mysqli_select_db($link, 'reservation');
	
	
	if($username != null && $password !=null){
		$account_distinct = "SELECT account_id FROM user WHERE account_id = '$username'";
		$result = mysqli_query($link, $account_distinct);
		
		if(mysqli_num_rows($result) > 0){
			echo "USERNAME ALREADY EXISTS!";	
			?>
			<a href="index.php">Click here</a>
			<?php
		}else{
			$sql = 	"INSERT INTO `user`(`account_id`, `password`, `name`) VALUES ('$username' ,'$password', '$email')";
			mysqli_query($link, $sql);
			header("location:welcome.php")
			?>
			<?php
		}
	}else{
		echo "USERNAME or PASSWORD is EMPTY!";	
		?>
		<a href="index.php">Click here</a>
		<?php
	}
	
	//db close
	mysqli_close($link)
?> 

</body>
</html>