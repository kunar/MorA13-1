<?php

$Name = $_GET['Name'] ;
$pass = $_GET['pass'] ;
$pass1 = $_GET['pass1'] ;


include ("dbl.php");
 mysql_query("INSERT INTO members (`Name`,`Pass`)VALUES('$Name','$pass')");

$sql = "SELECT * FROM members";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
$anzahl = mysql_num_rows($adressen_query);

	while ($adr = mysql_fetch_array($adressen_query)){
		$Id=$adr['Id'] ;
	}
mysql_query("CREATE TABLE A$Id (ID INT AUTO_INCREMENT PRIMARY KEY,Date VARCHAR(50) NOT NULL,Note VARCHAR(50) NOT NULL,subject TEXT NOT NULL, art  VARCHAR(50) NOT NULL,Datum DATETIME NOT NULL)");

mysql_close();

?>

Du wurdest registriert. Viel Spass!<br>

 <a href="../login.php">jetzt anmelden!</a><br>

 
