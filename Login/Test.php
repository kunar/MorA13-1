<?php
$z = "1";
$Id="13";
include ("dbl.php");
mysql_query("CREATE TABLE A$Id (ID INT AUTO_INCREMENT PRIMARY KEY,Date VARCHAR(50) NOT NULL,Note VARCHAR(50) NOT NULL,subject TEXT NOT NULL, art  VARCHAR(50) NOT NULL,Datum DATETIME NOT NULL)");


mysql_close();
echo "erfolgreich" ;
?>
