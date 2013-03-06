<?php

$Name = $_GET[Name] ;
$pass = $_GET[pass] ;
$pass1 = $_GET[pass1] ;


include ("dbl.php");
 mysql_query("INSERT INTO members (`Name`,`Pass`)VALUES('$Name','$pass')");
mysql_close();

?>

Du wurdest registriert. Viel Spass!<br>

 <a href="../login.php">jetzt anmelden!</a><br>

 
