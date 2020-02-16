<?php
session_start();
?>

<!DOCTYPE html>
<html>  
<head>  
<title>Home page</title>  
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#A87CA0">
<div id="main-wrapper">
<center><h2>Home page</h2>
<h3>Welcome
<?php echo $_SESSION['username']?>
</h3>
<img src="icon.png" class="avatar"/>
</center>

<form  class="my form" action="index.php" method="post">

<input name="logout" type="submit" id="logout_btn" value="Log out"/><br>

</form>
<?php

if(isset($_POST['logout']))
{
session_destroy();
header('location:index.php');
}
?>
</div>
</body>
</html>