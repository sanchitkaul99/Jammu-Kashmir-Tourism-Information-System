<?php
	include_once 'dbh.inc.php';

	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$pwd = md5($_POST['pwd']);

	$sql = "INSERT INTO users (user_name, user_email, user_pwd) VALUES ('$fullname', '$email','$pwd');";
	$result = mysqli_query($conn,$sql);
	/*$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
	}*/

header("Location: ../index.php?signup=success");