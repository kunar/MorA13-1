<?php
session_start();


	$hostname = $_SERVER['HTTP_HOST'];
	$path = basename($_SERVER['PHP_SELF']);

if(!session_is_registered(name)){
header("location: ../MorA13/public/$path");
}
?>
