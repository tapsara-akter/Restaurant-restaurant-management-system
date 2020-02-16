<!DOCTYPE html>
<html>
<head>
<title>contact</title>
<Style>

body{
background-image:url("map.png");
background-repeat:no-repeat;
background-position:right;
background-attachment:fixed;
}
.nav ul{
width: 100%;
height:45px;
list-style: none;
border: 1px solid black;

}
.nav ul li{
width:10%;
display: inline-block;
padding: 5px;
margin-left:90px;
}
.nav ul li a:hover{
color:red;
}
.nav
{
width:100%;
height:50px;
background-color:black;
color:white;
}
p{
color:black;
font-size:25px;}
.footer
{
margin-top:17%;
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
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:gray;">
<div class="nav"">
<ul>
<li> <h3 style="color:#FDD017;" ><i>Coffee Buzz</i></h3>
<li> <a style="color:white;" href="home.php">Home</a></li>
<li> <a style="color:white;" href="aboutus.php">About Us</a></li>
<li> <a style="color:white;" href="service.php">Service</a></li>
<li> <a style="color:white;" href="menu.php">Menu</a></li>
<li> <a style="color:white;" href="contact.php">Contact Us</a></li>
</ul>
</div><br><br>

<form  method="GET" action=" ">
<p>Name:</p>
<input type="text" name="name" value="">
<p>Phone:</p>
<input type="string" name="phone" value="">
<p>Email:</p>
<input type="string" name="email" value="">
<p>Message:</p>
<input type="text" name="message" value=""><br><br>

<input type="submit"/>
</form>

<div class="footer">
<div id="button">
<button style="background:black;"><a style="color:white;" href="contactsummery.php">Contact</button>
</div>
</div>

</body>
</html>