<?php



	$hostname = $_SERVER['HTTP_HOST'];
	$path = basename($_SERVER['PHP_SELF']);

if(!isset($_SESSION['name'])){
header("location:../MorA13/public/$path");
}
?>
