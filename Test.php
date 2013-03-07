<?php

$result = ARRAY(7,8,9,1,3,4) ;
echo "<table border='1' align='center'>";
$count=count($result);
$cc=0;
while ($cc<count($result)) {
   echo "<tr>";
   for($i=0;$i<4;$i++) {
      echo '<td>';
      if ( $count > ($i+$cc) )
        echo "$result['1‘]" ;
      else
         echo '&nbsp;';
      echo '</td>';
   }
   $cc+=4;
   echo '</tr>';
}
echo '</table>';