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
				<ur>
					<li  class="selected"><a href="Form.php">Noten Eintragen</a></li>
					<li><a href="Show.php">Noten Zeigen</a></li>
					<li><a href="graf.php">Noten Uebersicht</a></li>

</ur>
<form method="get" action="daten/f.php">
<?
$Fach = $_GET['u'] ;
$_SESSION['sub']=$Fach ;
?>

<ul><li><div><h3><? echo "$Fach" ; ?></h3></div></ul></li>
<ulr>
<?php include ("dbl.php");
$sql = "SELECT DISTINCT subject FROM A12 ;";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");


while ($adr = mysql_fetch_assoc($adressen_query)){
$tst = $adr['subject'] ;
?>
<br><li><input type="button" value="-"onClick="parent.location='daten/delet.php'"><a href= "Form1.php?u=<?php echo "$tst" ; ?>">



<?php echo "$tst" ; ?></li></a></br>
<? } ?>
<li><br>
     Neu: <input style="width:70px;" name="Fach" type="text"><br></li></br>
</ulr>



<center><p><br>Bitte Fach W&aumlhlen..</br>
<br>..oder neues Fach hinzufügen</br></p></center>


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
