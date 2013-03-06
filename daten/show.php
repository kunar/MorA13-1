<select name="Fach">
<option value="1">Mathe</option>
<option value="2">Neues Fach</option>
</select>

<br></br>

<?php 
include ("dbl.php");

$sql = "SELECT ID, Dates, Notes FROM A";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
$anzahl = mysql_num_rows($adressen_query);
?>

<?php
	while ($adr = mysql_fetch_array($adressen_query)){



?>	
<fieldset>
<legend><center>Schriftlich</center></legend> 

<table  cellpadding="4" rules="all" frame="void">

	<tr>
	<td>ID</td>
	<td>Date</td>
	<td>Note</td>
	
	</tr>


<?php
	while ($adr = mysql_fetch_array($adressen_query)){
?>	

	<tr>
	<td><?=$adr['ID']?></td>
	<td><?=$adr['Dates']?></td>
	<td><?=$adr['Notes']?></td>
	
	</tr></table>
<?php
}
?>


</fieldset><fieldset>
<legend>Mündlich</legend> 

<table align="left" cellpadding="4" rules="all" frame="void">
	<tr>
	
	<td>Datum</td>
	<td></td>
	
	</tr>
	<tr>
	
	<td>Note</td>
	<td></td>
	
	</tr>
</table>
</fieldset>
<?php
}


