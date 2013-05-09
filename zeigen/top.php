<?php
$durm = round(Durchschnitt($Id, $Fach),2);
$dur = round(Gesamt_Durchschnitt($Id,$Projekt),2); ?>
<ul><li><div> 
<h3><img src="images/130.png" width="15" height="15" onclick="location.href='del.php?u=<?php echo $Fach ; ?>'"> <?php
//Menü zeigt ausgewähltes Fach und Note
 echo $Fach ; ?></a><font size="5"> <?php echo $durm ;  // Menü zu ende
?></font></h3>
</div></ul></li>
