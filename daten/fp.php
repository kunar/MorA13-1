<?php
session_start();
$Id = $_SESSION['Id'];
$Projekt = $_GET['Projekt'];
$Date = $_GET['Dates'] ;
$Note = $_GET['Notes'] ;
$Fach = $_GET['Fach'] ;
$art = $_GET['art'] ;
header("Location: ../Show.php?u=$Fach");


include ("../Login/dbl.php");
 mysql_query("INSERT INTO A$Id (`Datum`,`Note`,`Fach`,`Art`,`Projekt`)VALUES('$Date','$Note','$Fach','$art','$Projekt')");
mysql_close();

?>
