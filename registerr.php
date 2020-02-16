<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>  
<head>  
<title>Registration page</title>  
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#A87CA0"">
<div id="main-wrapper">
<center><h2>Register Form</h2>
<img src="icon.png" width="100px"  height="100px" class="avatar"/>
</center>

<form  class="my form" action="registerr.php" method="post">
<label>Username</label><br>
<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
<label>Password</label><br>
<input name="password" type="password" class="inputvalues" placeholder="your password" required/><br><br>
<label>Confirm Password</label><br>
<input name="cpassword" type="password" class="inputvalues" placeholder="confirm password" required/><br><br>
<input  name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br><br>
<a href="index.php"><input  type="button" id="back_btn" value="Back"/><br>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	//echo'<script type="text/javascript">alert("Sign Up button clicked")</script>';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	if($password==$cpassword)
	{
		$query= "select * From userinfo WHERE username='$username'";
		$query_run= mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			//There is already a user with the same username
			echo'<script type="text/javascript">alert("try another user name")</script>';
		}
		else
		{
			$query= "insert into userinfo values('$username','$password')";
			$query_run= mysqli_query($con,$query);
			if($query_run)
			{
				echo'<script type="text/javascript">alert("user registration.go to login page to login")</script>';
			}
			else
			{
				echo'<script type="text/javascript">alert("error")</script>';
			}
		}
	}
	else{
		echo'<script type="text/javascript">alert("password and confirm password does not match")</script>';
	}
	
}

?>
</div>
</body>
</html>