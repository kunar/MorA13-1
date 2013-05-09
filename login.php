<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>MorA - Login</title>
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
					<li><a href="blog.php">Dokumentation</a></li>
					<li class="selected"><a href="login.php">Login</a></li>
					<li><a href="about.php">&Uumlber uns</a></li>
					
					
				</ul>
			</div>
			<div class="body">
				<ul><li>
				
				<font color="#ff6347">
<?php
session_start();
@$t = $_GET['t'];
	if($t=="aus"){ 
		session_destroy();
		$return = "<fieldset>Du wurdest erfolgreich ausgeloggt</fieldset>"; }
	if($t=="fal"){ 
		$return =  "<fieldset>Falsches Passwort oder Benutzername</fieldset>" ;}
	if($t=="lo"){ 
		$return =  "<fieldset>Bitte melde dich erst an</fieldset>" ;}
	if($t=="re"){ 
		$return =  "<fieldset>Erfolgreich registriert!</fieldset>" ;}
	if($t=="repawo"){ 
		$return = "<fieldset>Deine Passwörter stimmen nicht überein</fieldset>"; }
	if($t=="rew"){ 
		$return = "<fieldset>Deine Passwort enthält keine Zahlen. Bitte wähle ein sicheres Passwort</fieldset>"; }
	if($t=="rez"){ 
		$return = "<fieldset>Deine Passwort enthält keine Buchstaben. Bitte wähle ein sicheres Passwort</fieldset>"; }
	if($t=="reu"){ 
		$return = "<fieldset>Dein Benuzername existiert schon. Bitte wähle einen anderen</fieldset>"; }
	if($t=="ret"){ 
		$return = "<fieldset>Dein Passwort enthält nicht 6 - 15 Zeichen. Bitte wähle ein sicheres Passwort</fieldset>"; }
		
		if(isset($return)){echo "<center>$return</center>";}


?>
					</font><gl><legend><h3>Logindaten eingeben</h3></legend></br>
<?php        				include("Login/login.php") ; ?>
						
<?php 
	if(@$return != "re") { ?>
			
	</br></br><h3>Noch nicht angemeldet? Dann melde dich hier an:</h3>
	
		
<?php					include("Login/formular.php") ; ?>
<?php } ?>
	</li></ul>
				</gl></ul>
				<h> <img src="images/symbol.png" alt=""/> </h>
			</div>
			<div class="footer">
				
				<p>Copyright &#169; Artur & Moritz 2013</p>
				<div class="connect">
					<a href="http://facebook.com/freewebsitetemplates" id="facebook">facebook</a>
					<a href="http://twitter.com/fwtemplates" id="twitter">twitter</a>
					<a href="http://www.youtube.com/fwtemplates" id="vimeo">vimeo</a>
				</div>
			</div>
		</div>
	</body>
</html>  
