<?php
$user="root";
$pass='';
$db='resturant';
$db= new mysqli('localhost',$user,$pass,$db)or die ("unable to connect");
echo"Great work!!!";
?>
<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
</head>
<style>
#container {
width:100%; 
height:100%;
background-color:gray;
}

#nav1{
width:55%;
padding-left:20px;
padding-right:10px;
padding-top:10px;
height:100%; 
float:left;
color:white;

}
#nav2{
width:15%;
padding-left:5px;
padding-right:5px;
height:100%; 
float:left;

}
#section
{
float:left;

color:white;
height:100%;
width:26%;
padding-top:10px;
padding-bottom:10px;
padding-left:5px;
}
#div4{
border:1px solid white;
width:500px;
height:300px;
}

</style>

<body>

<div id="container">


<div id="nav1">
<p style="color:white;text-align:left;font-size:30px"><b>WORLD BEST RESTAURANT</b><p>
<div id="div4">
 <img src="about1.jpg" width="500" height="300">
 </div>
 <p><i>Always stay connected with us</i></p>
</div>
</div>

<div id="section"><b>
<p>Enter your Email and Password.</p>
<form action="/action_page.php">
Email:<br>
<input type="text" name"email" value" "><br>
Password:<br>
<input type="text" name"password" value" "><br><br>
<button type="button">Login</button></b><br><br><br><br>
<p style="color:black;text-align:left;font-size:25px">If you are not registred yet then<br> <b>REGISTER</b><p>
<b>First Name:<br>
<input type="text" name"firstname" value" "><br>
Last Name:<br>
<input type="text" name"lastname" value" "><br>
Email:<br>
<input type="text" name"email" value" "><br>
Password:<br>
<input type="text" name"password" value" "><br>
Re-enter password:<br>
<input type="text" name"email" value" "><br>
Gender:<br>
<input type="radio" name"gender" value" male"checked>Male<br>
<input type="radio" name"gender" value" female">female<br><br>
<input type="submit" name"submit"><br></b>
</div>

<div id="nav2">
</div>

</div>
</body>
</html>