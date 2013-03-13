<?php
$Id = $_SESSION['Id'] ;
header("Location: ../Form.php");
$Date = $_GET[Dates] ;
$Note = $_GET[Notes] ;
$Fach = $_GET[Fach] ;
$art = $_GET[art] ;


include ("dbl.php");
 mysql_query("INSERT INTO A$Id (`Date`,`Note`,`subject`,`art`)VALUES('$Date','$Note','$Fach','$art')");
mysql_close();

?>

