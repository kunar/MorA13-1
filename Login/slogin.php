<?php
$name= $_POST['name'];
$pass= $_POST['pass'];

include ("dbl.php");
$sql = "SELECT * FROM members WHERE members.Name='$name' AND members.Pass = '$pass';";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
$anzahl = mysql_num_rows($adressen_query);

	while ($adr = mysql_fetch_array($adressen_query)){
		$name1=$adr['Name'] ;
		$pass1=$adr['Pass'] ;
		$Id=$adr['ID'] ;
	}
if($pass== '') exit (header("location:../login.php?t=fal"))  ;
if(isset($pass1) And isset($name1)){
			
			session_start();
			$_SESSION['name']= $name ;
			$_SESSION['pass']= $pass ;
			$_SESSION['Id']= $Id ;
			$_SESSION['Projekt']= "false" ;
			header("location:../Show.php");
			}
	else {
			header("location:../login.php?t=fal");	
			}


