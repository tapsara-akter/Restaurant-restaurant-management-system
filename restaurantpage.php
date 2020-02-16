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
<title>Restaurant page</title>
</head>
<style>
#container {
width:100%; 
height:100%;
background-color:white;
}
#header {
width:100%;
height:50px;
background-color:black;
color:white;
}
.nav1 ul{
width: 100%;
height:45px;
list-style: none;
border: 1px solid black;

}
.nav1 ul li{
width:10%;
display: inline-block;
padding: 5px;
margin-left:90px;
}
.nav ul li a:hover{
color:red;
}
.nav1{
width:100%;
height:50px;
background-color:black;
color:white;
}

#nav{
width:25%;
padding-left:25px;
padding-right:0px;

height:600px; 
float:left;
background-color:white;
}
#section
{
float:left;
background-color:white; 
height:600px;
width:45%;
margin-left:5px;
margin-right:5px;
text-align:center;
}
.mydiv{
-ms-transform:rotate(20deg);
-webkit-transform:rotate(20deg);
transform:rotate(20deg);
}
.div{
background-color:white;
}

.footer
{
margin-top:38%;
background-color:black;
color:white;
width:100%;
height:50px;
}
#button{
margin-top:40px;
margin-left:20px;
padding-top:12px;
margin-left:50%;
align:center;
}

</style>

<body>

<div id="container">
<div id="header">
<div class="nav1">
<ul>
<li> <h3 style="color:#FDD017;" ><i>Coffee Buzz</i></h3>
<li> <a style="color:white;" href="home.php">Home</a></li>
<li> <a style="color:white;" href="aboutus.php">About Us</a></li>
<li> <a style="color:white;" href="service.php">Service</a></li>
<li> <a style="color:white;" href="menu.php">Menu</a></li>
<li> <a style="color:white;" href="contact.php">Contact Us</a></li>
</ul>
</div>
</div>
<div class="div">

<div id="nav">
<img src="pic1.jpg" width="250" height="200">

<div class="mydiv">
<img src="pic2.jpg" width="250" height="200">
</div>
<div class="mydiv">
<img src="pic3.jpg" width="250" height="200">
</div>
</div>
</div>

<div id="section">
<h1 style="color:Tomato;font-size:45px">OUR MISSION</h1>
<p style="color:black;font-size:20px"><b>To create awesome food, served quickly, by warm and friendly
 people.We doesn't just want to offer you good food. Its mission statement is to wow you and you
 will enjoy the fresh environment also.</b></p><br><br>
 <p style="text-align:center;color;gray"><i>We are proud to our food quality.</i><p>
 <img src="center1.jpg" width="300" height="220">
</div>
<div class="div">
<div id="nav">
<img src="pic4.jpg" width="250" height="200">

<div class="mydiv">
<img src="pic8.jpg" width="250" height="200">
</div>
<div class="mydiv">
<img src="pic6.jpg" width="250" height="200">
</div>
</div>
</div>

</div>
<div class="footer">
<div id="button">
<button style="background:black;"><a style="color:white;" href="contactsummery.php">Contact</button>
</div>
</div>

</body>
</html>