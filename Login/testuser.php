<?php
@session_start();
	$hostname = $_SERVER['HTTP_HOST'];
	$path = basename($_SERVER['PHP_SELF']);
	$pathi = "public/$path" ;
if(!isset($_SESSION['name'])){
	if($path == "Show.php"){ $pathi = "login.php?t=lo" ;}
	
	
header("location:../MorA13/$pathi");

}
?>
