
<br></br>

<?php 
$Id = $_SESSION['Id'] ;
$Fach = "Deutsch" ;
include ("dbl.php");

$sql = "SELECT * FROM A$Id WHERE A$Id.subject='$Fach';";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
$anzahl = mysql_num_rows($adressen_query);
?>

<table  cellpadding="4" frame="below">
	<tr>
	<td align="center" width="50">ID</td>
	<td align="center" width="100">Datum</td>
	<td align="center" width="100">Note</td>
	<td align="center" width="100">Fach</td>
	<td align="center" width="100">Gewichtung</td>
		</tr>	
</table>

<?php
	while ($adr = mysql_fetch_array($adressen_query)){
$ID = $adr['ID'] ;
$Date = $adr['Date'] ;
$Note = $adr['Note'] ;
$Fach = $adr['subject'] ;
$art = $adr['art'] ;

?>

<table bgcolor="#D8D8D8"  cellpadding="4" rules="all" frame="void" border="1px"  >

	<tr>
	<td align="center" width="50"><?=$ID?></td>
	<td align="center" width="100"><?=$Date?></td>
	<td align="center" width="100"><?=$Note?></td>
	<td align="center" width="100"><?=$Fach?></td>
	<td align="center" width="100"><?=$art?></td>
	
	</tr></table>
<?php
}
?>