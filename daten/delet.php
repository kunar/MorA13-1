<?php
session_start();
$test= $_SESSION['sub'];
$id = $_SESSION['Id'];
header("Location: ../Show.php");
include("../Login/dbl.php");
mysql_query("DELETE FROM A$id WHERE Fach = '$test'");
?>