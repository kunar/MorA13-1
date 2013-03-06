<?php
header("Location: ../Form.php");
$Dates = $_GET[Dates] ;
$Notes = $_GET[Notes] ;
$Fach = $_GET[Fach] ;


include ("dbl.php");
 mysql_query("INSERT INTO A (`Dates`,`Notes`)VALUES('$Dates','$Notes')");
mysql_close();

?>

