<?php
/*
./setup/act/engn02a.inc.php
15:27 2008-01-14
*/

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Admin</B></TD>";
echo "</TR></TABLE>";

$dirs[0]    = "admin/";
$files[$dirs[0]][0] = array();
$files[$dirs[0]][1] = array();
$files[$dirs[0]][1][] = "index.php";

$dirs[1]    = "admin/backup/";
$files[$dirs[1]][0] = array();
$files[$dirs[1]][1] = array();
$files[$dirs[1]][1][] = "index.php";

$dirs[2]    = "admin/backup/db/";
$files[$dirs[2]][0] = array();
$files[$dirs[2]][1] = array();
$files[$dirs[2]][1][] = "index.php";
?>