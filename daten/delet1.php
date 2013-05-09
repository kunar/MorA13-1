<?php
session_start();
$test= $_SESSION['sub'];
$id = $_SESSION['Id'];
$Date = $_GET['u'];
header("Location: ../Show.php?u=$test");
include("../Login/dbl.php");
mysql_query("DELETE FROM A$id WHERE Fach = '$test' AND Datum = '$Date'");
?>