<?php
session_start();
$Name = $_GET['Name'] ;
$pass = $_GET['pass'] ;
$pass1 = $_GET['pass1'] ;

include ("dbl.php");
$sql = "SELECT Name FROM members WHERE members.Name='$Name';";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
$anzahl = mysql_num_rows($adressen_query);

	while ($adr = mysql_fetch_array($adressen_query)){
		$name=$adr['Name'] ;
	}
	if(!isset($name)){
	if (strlen( $pass ) >= 6 AND strlen( $pass ) <= 15){	
	if (preg_match( "/\d+/", $pass )){
	if (preg_match( "/[a-z]+/", $pass )){
	if($pass == $pass1){
		
		include ("dbl.php");
 		mysql_query("INSERT INTO members (`Name`,`Pass`)VALUES('$Name','$pass')");

		$sql = "SELECT * FROM members";
		$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
		$anzahl = mysql_num_rows($adressen_query);

			while ($adr = mysql_fetch_array($adressen_query)){
				$Id=$adr['ID'] ;
			}
		mysql_query("CREATE TABLE A$Id (ID INT AUTO_INCREMENT PRIMARY KEY,Datum VARCHAR(50) NOT NULL,Note VARCHAR(50) NOT NULL,Fach TEXT NOT NULL, Art  VARCHAR(50) NOT NULL, gewe  VARCHAR(50) NOT NULL, gewez  VARCHAR(50) NOT NULL,Projekt VARCHAR(50) NOT NULL)");

			mysql_close();
			header("location:../login.php?t=re");
		}

		else{
		header("location:../login.php?t=repawo");
		}
	}
		else{
		header("location:../login.php?t=rez");
		}
	}
		else{
		header("location:../login.php?t=rew");
		}
	}
		else{
		header("location:../login.php?t=ret");
		}
	}
		else{
		header("location:../login.php?t=reu");
		}

?>
