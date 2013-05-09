<div id="f1">
			<script type="text/javascript"> 
			var angeschaltet = 0; 
			function anzeigen(das){ 
			 if(angeschaltet != 0) 
			  document.getElementById(angeschaltet).style.display='none'; 
			 if(document.getElementById(das).style.display=='none') 
			  document.getElementById(das).style.display='block'; 
			 else 
			  document.getElementById(das).style.display='none';} 
			 angeschaltet= das; 
			</script> 

<font size="7"> <?php echo $dur ; ?> </font><a href="#" onclick="anzeigen('per')"><img src="images/129.png" width="20" height="20"></a>
		
		<div id="per" style="">


			<fieldset>
			<legend> Gewichtung </legend>
<?php
$_SESSION['sub'] = $Fach;	

		$sql = "SELECT gewe, gewez, ID FROM a$Id WHERE a$Id.Fach='$Fach' AND A$Id.gewe != ''AND a$Id.gewez != ''  AND a$Id.Projekt = '$Projekt' ;";
		$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
		$anzahl = mysql_num_rows($adressen_query);
		while ($adr = mysql_fetch_array($adressen_query)){ 
			$gewe = $adr['gewe'] ;
			$gewez = $adr['gewez'] ;
			$ID = $adr['ID'];
		
			?>
		
			<form name="form1" method="post" action='daten/sgewe.php?ID=<?php echo "$ID" ; ?>'>

<input size="10" name="gewe" type="text" value='<?php echo $gewe ;?>' >
<input size="1" name="gewez" type="text" value='<?php echo $gewez ;?>' >%
<input width='15' height='15' type="image" src="images/128.png" alt="Absenden">

</form>
			
		<?php
		}
		?>
<form name="form1" method="post" action="daten/sgewe.php?ID=0">

<input size="10" name="gewe" type="text">
<input size="1" name="gewez" type="text">%
<input width='15' height='15' type="image" src="images/128.png" alt="Absenden">
</form>
<font color='#ff6347' >Muss insgesamt 100 ergeben!</font>

			</fieldset>
		</div> 
	</div>