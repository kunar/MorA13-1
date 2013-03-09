<?php

$dbname="List";
$dbhost="localhost";
$dbuser="root";
$dbpass="root";
$connection=mysql_connect($dbhost, $dbuser, $dbpass) or die;

mysql_select_db($dbname, $connection) or die("Konnte die Datenbank nicht w&aumlhlen.");

