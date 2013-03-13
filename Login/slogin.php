<?php
$name= $_POST['name'];
$pass= $_POST['pass'];

include ("dbl.php");
$sql = "SELECT * FROM members WHERE members.Name='$name';";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
$anzahl = mysql_num_rows($adressen_query);

	while ($adr = mysql_fetch_array($adressen_query)){
		$name1=$adr['Name'] ;
		$pass1=$adr['Pass'] ;
		$Id=$adr['Id'] ;
	}
if($pass== 0) exit (header("location:../loginf.php"))  ;
if($pass1 == $pass){
			
			
			header("location:../eingeloggt.php");
			$_SESSION['name']= $name ;
			$_SESSION['pass']= $pass ;
			$_SESSION['Id']= $Id ;
			
			}
	else {
			header("location:../loginf.php");	
			}


