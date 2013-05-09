<?php 
session_start();
include("Login/testuser.php") ;
$name = $_SESSION['name'];
$pass = $_SESSION['pass'];
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>MorA - Notenverwaltung</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->
	</head>
	<body>
		<div class="page">
			<div class="header">
				<a href="index.php" id="logo"><img src="images/logo2.png" alt=""/></a>
				<ul>
					<li class="selected"><a href="index.php">Home</a></li>
					<li><a href="Show.php">Meine Noten</a></li>
					<li><a href="blog.php">Dokumentation</a></li>
					<li><a href="Login.php?t=aus"><?php echo "$name" ;?> Ausloggen</a></li>
					<li><a href="about.php">&Uumlber uns</a></li>
				</ul>
			</div>
			<div class="body">
				<div id="featured">
					<h3>Unser Projekt - </br></br> 
					Die Notenverwaltung </h3>
					
					<p>Willkommen auf unserer Seite, die sich momentan noch im Aufbau befindet. Hier soll am Ende unseres
					Informatik-Projektes eine Notenverwaltungs-Datenbank entstehen.</p>
					<input type="button" value="Mehr erfahren" onClick="parent.location='about.php'"/>
				<h> <img src="images/symbol.png" alt=""/> </h>
				</div>
			</div>
			<div class="footer">
				
				<p>Copyright &#169; Artur & Moritz 2013</p>
				<div class="connect">
					<a href="http://www.facebook.com/" id="facebook">facebook</a>
					<a href="http://twitter.com/fwtemplates" id="twitter">twitter</a>
					<a href="http://www.youtube.com/fwtemplates" id="vimeo">vimeo</a>
				</div>
			</div>
		</div>
	</body>
</html>  
