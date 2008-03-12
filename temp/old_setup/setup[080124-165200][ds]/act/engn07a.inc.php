<?php
/*
./setup/act/engn07a.inc.php
15:32 2008-01-14
*/

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Vars</B></TD>";
echo "</TR></TABLE>";

$dirs[0] = "var/";
$files[$dirs[0]][0] = array();
$files[$dirs[0]][1] = array();
$files[$dirs[0]][1][] = "index.php";

$dirs[1] = "var/pages/";
$files[$dirs[1]][0] = array();
$files[$dirs[1]][1] = array();
$files[$dirs[1]][1][] = "index.php";

$dirs[2] = "var/pcscnt/";
$files[$dirs[2]][0] = array();
$files[$dirs[2]][1] = array();
$files[$dirs[2]][1][] = "index.php";

$dirs[3] = "var/pcsusr/";
$files[$dirs[3]][0] = array();
$files[$dirs[3]][1] = array();
$files[$dirs[3]][1][] = "index.php";
?>