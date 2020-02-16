<!DOCTYPE html>
<html>
<head>
<title>services</title>
<Style>
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
.nav{
width:100%;
height:50px;
background-color:black;
color:white;
}
header{
background-image:url("food.jpg");
background-size:cover;
background-position:center;
height:600px;
}
h1{
font-size:35px;
text-align:center;
}
h3{
text-align:center;
}
  
.div1 
{ 
		 
         float: left;
		 background-color:black;
		 padding-top:5px;
		 color:white;
		 height:330px;
		 width:190px;}
        .div2 
         { 
         float: left;
		 background-color:black;
		 padding-top:5px;
		 margin-left:5px;
		 color:white;
		 width:190px;
		 height:330px;
         } 	
		 .div3 
         { 
         float: left;
		 background-color:black;
		 padding-top:5px;
		 margin-left:5px;
		 color:white;
		 height:330px;
		 width:190px;
         } 	
.logo{
margin-left:30px;
}		

.footer
{
margin-top:10%;
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
</head>
<body>
<header>
<div class="main">
<div class="nav"">
<ul>
<li> <h3 style="color:#FDD017;" ><i>Coffee Buzz</i></h3>
<li> <a style="color:white;" href="home.php">Home</a></li>
<li> <a style="color:white;" href="aboutus.php">About Us</a></li>
<li> <a style="color:white;" href="service.php">Service</a></li>
<li> <a style="color:white;" href="menu.php">Menu</a></li>
<li> <a style="color:white;" href="contact.php">Contact Us</a></li>
</ul>
</div>
<h1 style="color:red;"><i>Services</i></h1>
<h1 style="color:blue;">WHAT WE CAN DO FOR YOU</h1>
<h3>We give you a perfect online ordering service. We always serve best quality food in our restaurant.</h3>

<div class="div1">
<h2>Food Delivery</h2>
<p>Any Kind of home delivery service inside Dhaka at free of cost. Outside Dhaka our service is not available.</p>
 <button><a href="foodDelivery.php">Learn More</a></button>

</div>
<div class="div2">
<div class="logo">
<img src="logo2.png">
</div>
<h2>Event Organization</h2>
<p>Organising all kinds of events,parties and wedding for both individual and companies.</p>
<form>

 <button><a href="Event .php">Learn More</a></button>
</form>
</div>
<div class="div3">
<div class="logo">
<img src="logo2.png">
</div>
<h2>Catering Service</h2><br>
<p>Providing excellent catering services for all type of events.You can check it.</p>
<form>
 <button><a href="Catering.php">Learn More</a></button>
</form>
</div>

</header>
<div>
<div class="footer">
<div id="button">
<button style="background:black;"><a style="color:white;" href="contactsummery.php">Contact</button>
</div>
</div>
</body>
</html>