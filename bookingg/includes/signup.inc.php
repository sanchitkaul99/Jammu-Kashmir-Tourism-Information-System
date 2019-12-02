<?php
	include_once 'dbh.inc.php';

	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$toDate = $_POST['toDate'];
	$fromDate = $_POST['fromDate'];
	$adults = $_POST['adults'];
	$package = $_POST['package'];

	$sql = "INSERT INTO booking (package, name, phone, fromDate,toDate,adults) VALUES ('$package', '$fullname', '$phone','$fromDate','$toDate','$adults');";
	$result = mysqli_query($conn,$sql);
header("Location: ../index.php?booking=success");