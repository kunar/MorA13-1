<?php
session_start();
$Projekt = $_GET['u'];
$_SESSION['Projekt'] = $Projekt;
header("location:../Show.php");
?>