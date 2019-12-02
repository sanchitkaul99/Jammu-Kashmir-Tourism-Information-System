<?php
session_start();
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','project');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>BookingForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="includes/signup.inc.php" method="POST">

					<h3>Find a Room</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Name *</label>
							<input type="text" class="form-control" placeholder="Your Name" name="fullname">
						</div>
						<div class="form-wrapper">
							<label for="">Phone *</label>
							<input type="text" class="form-control" placeholder="Phone" name="phone">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Check-in *</label>
							<span class="lnr lnr-calendar-full"></span>
							<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp1" name="fromDate">
						</div>
						<div class="form-wrapper">
							<label for="">Check-out *</label>
							<span class="lnr lnr-calendar-full"></span>
							<input type="text" class="form-control datepicker-here" data-language='en'  data-date-format="dd M yyyy" id="dp2" name="toDate">
						</div>
					</div>
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">Adults *</label>
							<select name="adults" id="" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						<div class="form-wrapper">
							<label for="">Package</label>
							<select name="package" id="" name="pkgname" class="form-control">
								<option value="1">Kashmir Family Tour</option>
								<option value="2">Glimpse of Kashmir</option>
								<option value="3">Kashmir with Jammu Tour</option>
								<option value="4">Kashmir Valley Tour Package</option>
								<option value="5">Srinagar Tour Package</option>
								<option value="6">Kashmir Houseboat Tour</option>
								<option value="7">Kashmir Gulmarg Tour Package</option>
								<option value="8">Kashmir Pahalgam Tour</option>
								<option value="9">Kashmir Package with Patnitop</option>
								<option value="10">Kashmir with VaishnoDevi Tour</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> No one rejects, dislikes, or avoids pleasure itself.
							<span class="checkmark"></span>
						</label>
					</div>
					<button data-text="Book Room" type="submit" name="submit" class="submit">
						<span>Book Room</span>
					</button>
				</form>
			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>