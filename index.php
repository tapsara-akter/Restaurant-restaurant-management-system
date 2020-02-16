<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>  
<head>  
<title>Login</title>  
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#A87CA0">
<div id="main-wrapper">
<center><h2>Login Form</h2>
<img src="icon.png" width="100px"  height="100px" class="avatar"/>
</center>

<form  class="my form" action="index.php" method="post">
<label>Username</label><br>
<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
<label>Password</label><br>
<input name="password" type="text" class="inputvalues" placeholder="Type your username" required/><br><br>
<input name="login" type="submit" id="login_btn" value="Login"/><br><br>
<a href="logout.php"><input type="button" id="logout_btn" value="Logout"/><br>
<a href="registerr.php"><input type="button" id="register_btn" value="Register"/><br>

</form>
<?php
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query= "select * From userinfo WHERE username='$username' AND password='$password'";
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		//valied
		$_SESSION['username']=$username;
		header('location:home.php');
	}
	else
	{
		//Invalied
		echo'<script type="text/javascript">alert("Invalied")</script>';
	}
	
	
}


?>

</div>
</body>
</html>