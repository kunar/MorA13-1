<ulr>	
<?php
$sql = "SELECT DISTINCT Fach FROM A$Id WHERE A$Id.Projekt = '$Projekt' AND A$Id.Fach !=' ' ;";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");

	while ($adr = mysql_fetch_assoc($adressen_query)){
	$tst = $adr['Fach'] ;
		$_SESSION['sub']=$Fach ;
			$durm1 = round(Durchschnitt($Id, $tst),2);
?>

<li><a href= "Show.php?u=<?php echo $tst ; ?>"><font size="5" color="#8F5211" ><?php echo $durm1 ; ?></font><?php echo $tst ; ?></a></li>

<?php 
} 
?>     

	<form method="get" action="daten/f.php">
		<li><input style="width:70px;" name="Fach" type="text"><br></li></br>
	</form>  
	</ulr>