<?php
session_start();
$test= $_GET['u'];
$id = $_SESSION['Id'];
header("Location: ../Show.php");
include("../Show.php");
mysql_query("DELETE FROM A$id WHERE Projekt = '$test'");
?>