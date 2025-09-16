 <?php 
require 'functions/functions.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
$user = $_SESSION['user'];
session_destroy();
session_start();
$_SESSION['user'] = $user;
ob_start(); 
$conn = connect();
?>

<!DOCTYPE>
<html>
<head>
<title>Blood Bank Management System</title>
       <link rel = "icon" href =  
"images/logo.png" 
        type = "image/x-icon"> 
  <style type="text/css">

<style>
body
{
  margin: 0;
  padding: 0;
  color:red;
  background-image: url("seamless.jpg");
}
ul
{
  list-style-type: none;
  background-color: red;
  height: 60px;
  width:97%;

  
}
a
{
  text-decoration: none;
  font-size: 35px;
  color:white;
  position:absolute;
  top: 100px;
}
li
{
  display: inline;
  font-style: 15px;
  padding: 95px;
  margin-left: 20 px;
  position: relative;
  left: 60px;


}

p
{
  text-align: justify;
  max-width: 1250px;
  max-height: 80px;
  position: absolute;
  left: 60px;
  font-size: 25px;
  top: 380px;
  margin-left: 80px;
}
h6
{
  position: relative;
  top: 180px;
  left:60px;
  font-size: 20px;
  margin-left: 95px;
}

.bloodquery
{
  position: relative;
  top:160px;
  left: 60px;
  font-size: 20px;
  margin-left: 95px;

}
.ongoingcamps
{
  position: relative;
  top: 180px;
  left: 60px;
  font-size: 20px;
  margin-left: 95px;

}
.saap{
  position: relative;
  top:150px;
  left: 60px;
  font-size: 20px;
  margin-left: 40px;
  color:black;

}

footer{
	position: relative;
	bottom: 10;
}
 
@media (max-height:100px){
	footer { position: static; }
	header { padding-top:20px; }
}
 
 
.footer-distributed{
	background-color: #2c292f;
	
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
   padding: 20px 20px 20px 20px
	margin-top:100px;
	height:160px;
}
 
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: bottom;
}
 

 
.footer-distributed .footer-left{
	width: 100%;
	height:100px;
}
 
.footer-distributed h3{
	color:  #ffffff;
	font: normal 46px 'Cookie', cursive;
	margin: 160;
}
 

 
.footer-distributed .footer-left img{
	width: 30%;
	height:20px;
}
 
.footer-distributed h3 span{
	color:  #e0ac1c;
}
 

 
.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}
 
.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}
 
.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 10px;
	font-weight: normal;
	margin: 0;
  }
.footer-distributed .footer-center{
	width: 30%;
	height: 20px;
 
 }
.footer-distributed .footer-center 
{
	background-color:#33383b;
	color: #ffffff;
	font-size: 25px;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	text-align: center;
	line-height: 20px;
	margin: 10px 15px;
	vertical-align: middle;
	} 
.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 20px;
 }
.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}
 .footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:20px;
 }
.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}
 
.footer-distributed .footer-right{
	width: 30%;
}
 
.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}
 
.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
} 
.footer-distributed .footer-icons{
	margin-top: 25px;
}
 
.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;
 
	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
 
	margin-right: 3px;
	margin-bottom: 5px;
}
.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}
 
	.footer-distributed .footer-center i{
		margin-left: 0;
	}
 

</style>
</head>

<body>
  

<b><p style="text-align:center;font-size:40px;font-family:cursive;color:red;text-decoration:underline;border-radius:0.5px;margin-left:585px;margin-top:-352">BBMS</b></p>

<img src="abc.jpg" alt="save blood" height="400px" width="1475px">


	
<ul>
	
<li><a href="camps.php" style="font-size:22px">Camps</a></li>
<li><a href="blooddetails.php" style="font-size:22px">Blood Details</a></li>
<li><a href="profile.php"style="font-size:22px">Profile</a></li>
<li><a href="viewrequest.php"style="font-size:22px">View Request</a></li>
<li><a href="about.html"style="font-size:22px">About Us</a></li>
<li><a href="contact.html"style="font-size:22px">Contact us</a></li>
<li><a href="logout.php"style="font-size:22px">Logout</a></li>
</ul>


<p style="color:black;font-style: italic;margin-top:120px;"> Blood is universally recognized as the most precious elements that sustain life. It saves innumerable lives across the world in a variety of condition. The need of blood is great- on any given day, approximately 39,000 units of Red blood cells are needed. More than 29 million units of blood component are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to lack of information and accessibility. We positively belive this tool can overcome most of these challenges by effectively connecting the blood donors with blood recipients.</p>

<br>
<br>
<div class="bloodquery">
<video width="1100" height="500" align="left" controls>
  <source src="video/bd.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
</div>
</br>
</br>
<br>
<br>
<div class="saap">
	<br>
<p1 style="margin-bottom:100px">In 2023 , before starting the “ Festin-O-Beats 2023 ” , students ' cultural festival , the United world School of Business (PGDM Batch 2021-23) students organised a Blood 
Donation Camp. More than 150 students donated their blood in this noble cause.
</p1>
</br>
<br>
<img src="images/c1.jpg" alt="" height="200px" width="400px">

</br>
  <br>
  <p2 style="margin-bottom:100px">In 2022,blood donation camp was organised by student of RIMS at remote areas in five main villages of kangpokpi Distric of Manipur.
  </br>
  <br>
<img src="images/c2.jpg" alt="" height="200px" width="400px">
</p2>
</br>
<br>
<p3 style="margin-bottom:100px">Blood donation camp organised in Noida.
</br>
<br>

	<img src="images/c3.jpg" alt="" height="200px" width="400px">
</p3>
</br>
<br>
<p4 style="margin-bottom:100px">Blood Donation camps on wheel to reach remote areas in five Mizoram district.
	</br>
  <br>
<img src="images/c4.jpg" alt="" height="200px" width="400px">
</p4>
</br>

</div>
<br>

</div>

<footer class="footer-distributed">
 
			<div class="footer-left">
				<h3>&copy 2023 BBMS</span></h3>
				<a href="home.php">Top</a>
				<a href="">
				<br>

			
                </br>

	
</br>
</div>
</body>
</html>
