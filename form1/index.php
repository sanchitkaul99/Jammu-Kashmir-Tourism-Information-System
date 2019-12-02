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
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT user_email,user_pwd FROM users WHERE user_email=:email and user_pwd=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script>alert('VALID DETAILS');</script>";
echo "<script type='text/javascript'> document.location = '../../project/index.php'; </script>";
    
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="./style.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link href="/project/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="/project/js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
</head>
<body>
<!-- partial:index.partial.html -->
<h2 class="tip wow tada">Time To login!!</h2>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <label>
    <form method="post">
      <span>Email</span>
      <input type="email" name="email" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <button type="submit" name="signin" value="SIGNIN" class="submit">Sign In</button>
    <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
  </div>
  </form>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <form action="includes/signup.inc.php" method="POST">
      <h2>Time to feel like home,</h2>
      <label>
        <span>Name</span>
        <input type="text" name="fullname"/>
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email"/>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="pwd" />
      </label>
      <button type="submit" name="submit" class="submit">Sign Up</button>
      <button type="submit" class="fb-btn">Join with <span>facebook</span></button>
      </form>
    </div>
  </div>
</div>


<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>