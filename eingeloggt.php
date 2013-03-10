<?php include("Login/testuser.php") ;
$name = $_SESSION['name'];
$pass = $_SESSION['pass'];
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>MorA - Meine Noten</title>
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
					<li><a href="index.php">Home</a></li>
					<li class="selected"><a href="eingeloggt.php">Meine Noten</a></li>
					<li><a href="blog.php">Dokumentation</a></li>
					<li><a href="ausloggen.php"><?php echo "$name" ;?> Ausloggen</a></li>
					<li><a href="about.php">&Uumlber uns</a></li>
				</ul>
			</div>
			<div class="body">
				<div id="featured"><center>
<br></br>
			<input type="button" value="Noten Eintragen" onClick="parent.location='Form.php'"/>
			<input type="button" value="Noten Anzeigen" onClick="parent.location='Show.php'"/>
			<input type="button" value="Gewichtungen" onClick="parent.location='graf.php'"/>


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
