<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<select name="art">

<option value="Mündlich">Mündlich</option>
<option value="Schriftlich">Schriftlich</option>
<option value="Test">Test</option>
</select>

<?php 
$a = "test" ;
$a = $_POST['art'] ;
echo "$a" ;

?>