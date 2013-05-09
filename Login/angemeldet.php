<?php
session_start();
if(!session_is_registered(name)){
header("location:Login/slogin.php");
}
?>
