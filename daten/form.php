<?php
$a = $_GET['u'] ;
?>
<center>
<form method="get" action="daten/f.php">

<select name="art">
<option value="Mündlich">Mündlich</option>
<option value="Schriftlich">Schriftlich</option>
<option value="Test">Test</option>
</select>
<br></br>

<table>
    <tr>
     	<td>
<input style="width:123px;" type="text" name="Dates" value="Datum"/></br>
<input style="width:123px;" type="text" name="Notes" value="Note"/>
<input style="width:123px;" type="hidden" name="Fach" value="<?php echo $a ; ?>"/>

	</td>
	<td>
<input type="submit" name="formaction" value="Eintragen" />
	</td>
	
</table> 
