<?php
$dur = round(Gesamt_Durchschnitt($Id,$Projekt),2);
?>
	<div id="f1">
		<font size="7"> <?php echo $dur ; ?> </font>
	</div>
		
			<ul><li><div><h3>
				<script type="text/javascript">
				var text = "Bitte wähle ein Fach aus";    // Anzuzeigender Text, KEIN < oder >
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