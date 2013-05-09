<?php
session_start();
$ID= $_GET['ID'];
$Id = $_SESSION['Id'];
$Projekt = $_SESSION['Projekt'];
$gewe= $_POST['gewe'];
$gewez= $_POST['gewez'];
$Fach = $_SESSION['sub'] ;
header("Location: ../Show.php?u=$Fach");


if($ID !='0'){
include ("../Login/dbl.php");
 mysql_query("UPDATE A$Id SET gewe = '$gewe' , gewez = '$gewez' WHERE A$Id.ID=$ID");
mysql_close();
}
if($ID =='0'){
include ("../Login/dbl.php");
 mysql_query("INSERT INTO A$Id (`Fach`,`gewe`,`gewez`,`Projekt`)VALUES('$Fach','$gewe','$gewez','$Projekt')");
mysql_close();
}
?>
