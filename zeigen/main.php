	<g>
<?php


		$sql = "SELECT * FROM A$Id WHERE A$Id.Fach='$Fach' AND A$Id.Note != 0  AND A$Id.Projekt = '$Projekt';";
		$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
		$anzahl = mysql_num_rows($adressen_query);
		while ($adr = mysql_fetch_array($adressen_query)){
$ID = $adr['ID'] ;
$Date = $adr['Datum'] ;
$Note = $adr['Note'] ;
$Fach = $adr['Fach'] ;
$art = $adr['Art'] ;

			echo "<table class='rundeEcken'onmouseover=style.backgroundColor='#f78117' onmouseout=style.backgroundColor='#dcdcdc' height='50' ;>" ;
			echo 	"<tr>" ;
			echo	"<td align='center' width='100'>$Date</td>";
			echo	"<td align='center' width='50'>$Note</td>";
			echo	"<td align='center' width='100'>$art</td>"; ?>
			<td><img src='images/130.png' width='15' height='15' onclick="location.href='daten/delet1.php?u=<?php echo $Date ; ?>'"></td> <?php
			echo	"</tr>";	
			echo "</table></br>" ;
			}
?>
					<meta charset="utf-8" />
					<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
					<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  					<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  					<link rel="stylesheet" href="/resources/demos/style.css" />
  						<script>
 						 $(function() {
  						  $( "#datepicker" ).datepicker();
  							});
 						</script>
 						
<form method="get" action="daten/f.php">

			<table class='rundeEcken'onmouseover=style.backgroundColor='#f78117' onmouseout=style.backgroundColor='#dcdcdc'  height='50' >
			<tr>
			<td align='center' width='100'><input style="width:90px;" type="text" id="datepicker"  name="Dates" value="Datum"/></td>
			<td align='center' width='50'><input style="width:40px;" type="text" name="Notes" value="Note"/></td>
				<input style="width:0px;" type="hidden" name="Fach" value="<?php echo $Fach ; ?>"/>
			<td align='center' width='100'>
				<select name="art">
				<?php
				$drop = createdropdown("Bitte w&aumlhlen",$Fach,$Id);
				echo $drop;
				?>
				</select>
			</td>
			<td><input width='15' height='15' type="image" src="images/131.png" alt="Absenden"></td>
			</tr>
			</table></br>
		</div></p>
		</g>
