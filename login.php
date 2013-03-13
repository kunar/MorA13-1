<!DOCTYPE html>
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
					<li><a href="public/index.php">Home</a></li>
					<li><a href="public/blog.php">Dokumentation</a></li>
					<li class="selected"><a href="login.php">Login</a></li>
					<li><a href="public/about.php">&Uumlber uns</a></li>
					
				</ul>
			</div>

		</div>
			<div class="body">
				<ul>
					<li>
					
						<div>
				
        				<legend><h3>Logindaten eingeben</h3></legend></br>
<?php        				include("Login/login.php") ; ?>
						
	
			
	</br></br><h3>Noch nicht angemeldet? Dann melde dich hier an:</h3>
	
		
<?					include("Login/formular.php") ; ?>

	</ul>
		</li>
			</div>


		<div class="footer">
				
				<p>Copyright &#169; Artur & Moritz 2013</p>
				<div class="connect">
					<a href="http://facebook.com/freewebsitetemplates" id="facebook">facebook</a>
					<a href="http://twitter.com/fwtemplates" id="twitter">twitter</a>
					<a href="http://www.youtube.com/fwtemplates" id="vimeo">vimeo</a>
				</div>







</html>
