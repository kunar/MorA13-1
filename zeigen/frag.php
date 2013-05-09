<ul><li><div><h3>
				<script type="text/javascript">
				var text = "Bitte wähle ein Projekt aus";    // Anzuzeigender Text, KEIN < oder >
				var dauer =100                                                                    // Dauer pro Buchstabe in ms
				var zeichen = text.length;
				var i = 0;
				function fSchreibmaschine(){
			    if(i >= zeichen){}else{
		        document.getElementById('textspan').innerHTML = document.getElementById('textspan').innerHTML + text.charAt(i);
		        i++
				setTimeout('fSchreibmaschine()', dauer);
   				 }
				}
				</script>
				<body onload="fSchreibmaschine()">
    			<span id="textspan"></span>
			</body></h3></div></ul></li>
<?php 
$_SESSION['Projekt']= "false";
?>
<ulr>	
<?php
$sql = "SELECT DISTINCT Projekt FROM A$Id WHERE A$Id.Projekt != ' ' ;";
$adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");

	while ($adr = mysql_fetch_assoc($adressen_query)){
	$tst = $adr['Projekt'] ;
			$durm1 = round(GGesamt_Durchschnitt($Id, $tst),2);
?>

<a href= "zeigen/frag1.php?u=">
<font size="5" color="#8F5211" >
<?php echo $durm1 ; ?>
</font>
<?php echo $tst ; ?>
</a>

<?php 
} 
?>     

	<form method="get" action="daten/fp.php">
		<li><input style="width:70px;" name="Projekt" type="text"><br></li></br>
	</form> 
	<div id="f2">
	</div>
	</ulr>
	