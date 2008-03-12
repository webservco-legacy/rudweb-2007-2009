<?php
/*
./setup/act/engn01a.inc.php
15:20 2008-01-14
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Root</B></TD>";
echo "</TR></TABLE>";

$dirs[0]    = "";
$files[$dirs[0]][0] = array();
$files[$dirs[0]][1] = array();
$files[$dirs[0]][1][] = "index.php";
$files[$dirs[0]][1][] = "intro.php";
$files[$dirs[0]][1][] = "logout.php";
//$files[$dirs[0]][0][] = "print.php";
$files[$dirs[0]][1][] = "redirect.php";
?>