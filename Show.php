<?php
@session_start();
include("Login/testuser.php");
$name = $_SESSION['name'];
$pass = $_SESSION['pass'];
$Id   = $_SESSION['Id'];
$Projekt = $_SESSION['Projekt'];
@$Fach = $_GET['u'];



function Durchschnitt($Id, $Fach)
{
    
    $du = array();
    $Projekt = $_SESSION['Projekt'];
    include("Login/dbl.php");
    $zeugs = mysql_query("SELECT gewe, gewez FROM A$Id WHERE A$Id.Fach='$Fach' AND A$Id.gewe !='' AND A$Id.Projekt = '$Projekt'");
    while ($zeile = mysql_fetch_array($zeugs)) {
        $z = $zeile['gewe'];
        
        $dum = array();
        $zeu = mysql_query("SELECT Note FROM A$Id WHERE A$Id.Fach='$Fach' AND A$Id.Art='$z'AND A$Id.Projekt = '$Projekt' ");
        while ($zei = mysql_fetch_array($zeu)) {
            
            array_push($dum, $zei['Note']);
        }
        $durrm = array_sum($dum);
        $c     = count($dum);
        @$durm  = $durrm / $c;
        $zeu   = mysql_query("SELECT gewez FROM A$Id WHERE A$Id.Fach='$Fach' AND A$Id.gewe='$z' AND A$Id.gewez!='' AND A$Id.Projekt = '$Projekt'");
        while ($zei = mysql_fetch_array($zeu)) {
            $y = $zeile['gewez'];
            
            $zwi = $durm * ($y / 100);
            array_push($du, $zwi);
            
        }
    }
    $ges = array_sum($du);
    return $ges;
}


function Gesamt_Durchschnitt($Id,$Projekt)
{
    $du  = array();
    $dum = array();
    include("Login/dbl.php");
    $sql = "SELECT DISTINCT Fach FROM A$Id WHERE A$Id.Note !=0 AND A$Id.Projekt = '$Projekt';";
    $adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
    while ($adr = mysql_fetch_assoc($adressen_query)) {
        $tst = $adr['Fach'];
        $di  = Durchschnitt($Id, $tst);
        array_push($du, $di);
    }
    $durm1 = array_sum($du);
    $i     = count($du);
    @$dur   = $durm1 / $i;
    return $dur;
}
function Global_Durchschnitt($Id, $Fach, $Projekt)
{
    
    $du = array();
    include("Login/dbl.php");
    $zeugs = mysql_query("SELECT gewe, gewez FROM A$Id WHERE A$Id.Fach='$Fach' AND A$Id.gewe !='' AND A$Id.Projekt = '$Projekt'");
    while ($zeile = mysql_fetch_array($zeugs)) {
        $z = $zeile['gewe'];
        
        $dum = array();
        $zeu = mysql_query("SELECT Note FROM A$Id WHERE A$Id.Fach='$Fach' AND A$Id.Art='$z'AND A$Id.Projekt = '$Projekt' ");
        while ($zei = mysql_fetch_array($zeu)) {
            
            array_push($dum, $zei['Note']);
        }
        $durrm = array_sum($dum);
        $c     = count($dum);
        @$durm  = $durrm / $c;
        $zeu   = mysql_query("SELECT gewez FROM A$Id WHERE A$Id.Fach='$Fach' AND A$Id.gewe='$z' AND A$Id.gewez!='' AND A$Id.Projekt = '$Projekt'");
        while ($zei = mysql_fetch_array($zeu)) {
            $y = $zeile['gewez'];
            
            $zwi = $durm * ($y / 100);
            array_push($du, $zwi);
            
        }
    }
    $ges = array_sum($du);
    return $ges;
}
function GGesamt_Durchschnitt($Id,$Projekt)
{
    $du  = array();
    $dum = array();
    include("Login/dbl.php");
    $sql = "SELECT DISTINCT Fach FROM A$Id WHERE A$Id.Note !=0 AND A$Id.Projekt = '$Projekt';";
    $adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
    while ($adr = mysql_fetch_assoc($adressen_query)) {
        $tst = $adr['Fach'];
        $di  = Global_Durchschnitt($Id, $tst, $Projekt);
        array_push($du, $di);
    }
    $durm1 = array_sum($du);
    $i     = count($du);
    @$dur   = $durm1 / $i;
    return $dur;
}

function createdropdown($value,$Fach,$Id)
{
    $array1 = array();
    $array2 = array();
    $Projekt = $_SESSION['Projekt'];

    include("Login/dbl.php");
    $sql = "SELECT gewe, gewez FROM A$Id WHERE A$Id.gewe != '' AND A$Id.Fach='$Fach' AND A$Id.Projekt = '$Projekt';";
    $adressen_query = mysql_query($sql) or die("Anfrage nicht erfolgreich");
    $anzahl = mysql_num_rows($adressen_query);
    while ($adr = mysql_fetch_array($adressen_query)) {
        $gewe  = $adr['gewe'];
        $gewez = $adr['gewez'];
        
        array_push($array1, $gewe);
        array_push($array2, $gewez);
    }
    $count_array1 = count($array1);
    echo "<option>" . $value . "</option>";
    for ($i = 0; $i < $count_array1; $i++) {
        echo "<OPTION value=" . $array1[$i] . ">" . $array1[$i] . " (" . $array2[$i] . ")</OPTION>";
    }
    
    
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>MorA - Meine Noten</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <div class="page">
            <div class="header">
                <a href="index.php" id="logo"><img src="images/logo2.png" alt=""/></a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="selected"><a href="Show.php">Meine Noten</a></li>
                    <li><a href="blog.php">Dokumentation</a></li>
                    <li><a href="Login.php?t=aus"><?php echo $name; ?> ausloggen</a></li>
                    <li><a href="about.php">&Uumlber uns</a></li>
                </ul>
            </div>
            
            <div class="body" >
                

<?php
include("Login/dbl.php");
if($Projekt == "false"){
	include("zeigen/frag.php");
}
else{
	echo "<center><a href='change.php'>$Projekt verlassen</a></center>";

if(isset($Fach)) {
		include("zeigen/top.php");
		include("zeigen/value.php");
		include("zeigen/site.php");
		include("zeigen/main.php");
			exit();
}

			include("zeigen/toplow.php");
			include("zeigen/site.php");
}
?>