<?php
session_start();
if(!session_is_registered(name)){
header("location:Login/slogin.php");
}
?>

<html>
<body>
Erfolgreich angemeldet
<br><a href=Login/Test.php>Test</a></br>
<br><a href=Login/ausloggen.php>Ausloggen!</a></br>
</body>
</html>
